<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace phpshko\magicscopes\gii\model;

use Yii;
use yii\gii\CodeFile;

/**
 * This generator will generate one or multiple ActiveRecord classes for the specified database table.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Generator extends \yii\gii\generators\model\Generator
{
    const TYPE_MAGIC_QUERY = 'magic_query';
    const TYPE_CREATE_QUERY = 'create_query';
    const TYPE_ATTACH_BEHAVIOR = 'attach_behavior';

    const SAVE_DOC_TO_MODEL = 'to_model';
    const SAVE_DOC_TO_AUTOCOMPLETE_FILE = 'to_autocomplete_file';

    protected $methodNames = [
        '*', '*In', '*Like', '*Between', '*More', '*Less',
        '*Not', '*NotIn', '*NotLike', '*NotBetween', '*NotMore', '*NotLess',
        'and*', 'and*In', 'and*Like', 'and*Between', 'and*More', 'and*Less',
        'and*Not', 'and*NotIn', 'and*NotLike', 'and*NotBetween', 'and*NotMore', 'and*NotLess',
        'or*In', 'or*Like', 'or*Between', 'or*More', 'or*Less', 'or*Not',
        'or*NotIn', 'or*NotLike', 'or*NotBetween', 'or*NotMore', 'or*NotLess', 'or*'
    ];

    /* Input */
    public $generateMagicScopes = false;
    public $saveDocType = self::SAVE_DOC_TO_MODEL;
    public $createType = self::TYPE_MAGIC_QUERY;

    public $createTypes = [
        self::TYPE_MAGIC_QUERY     => 'Use Magic Query',
        self::TYPE_CREATE_QUERY    => 'Create Query',
        self::TYPE_ATTACH_BEHAVIOR => 'Attach Behavior'
    ];

    public $saveDocTypes = [
        self::SAVE_DOC_TO_MODEL      => 'Save in model',
        self::SAVE_DOC_TO_AUTOCOMPLETE_FILE => 'Save in MagicAutoComplete.php'
    ];

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'Magic Scopes Generator';
    }

    /**
     * @inheritdoc
     */
    public function getDescription()
    {
        return 'This generator generates an ActiveRecord class for the specified database table, include MagicScopeBehavior and generate autocomplete.';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_merge(parent::rules(),
            [
                [['generateMagicScopes'], 'boolean'],
                [['createType'], 'in', 'range' => [
                    self::TYPE_CREATE_QUERY, self::TYPE_MAGIC_QUERY, self::TYPE_ATTACH_BEHAVIOR
                ]],
                [['saveDocType'], 'in', 'range' => [
                    self::SAVE_DOC_TO_MODEL, self::SAVE_DOC_TO_AUTOCOMPLETE_FILE
                ]]
            ]);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'saveDocType' => 'Doc Type'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function hints()
    {
        return array_merge(parent::hints(), [

        ]);
    }

    /**
     * @inheritdoc
     */
    public function stickyAttributes()
    {
        return array_merge(parent::stickyAttributes(),
            ['generateMagicScopes', 'saveDocType', 'createType']);
    }

    public function generate()
    {
        $files = [];
        $relations = $this->generateRelations();
        $db = $this->getDbConnection();

        foreach ($this->getTableNames() as $tableName) {
            $className = $this->generateClassName($tableName);
            $tableSchema = $db->getTableSchema($tableName);
            $params = [
                'tableName' => $tableName,
                'className' => $className,
                'tableSchema' => $tableSchema,
                'labels' => $this->generateLabels($tableSchema),
                'rules' => $this->generateRules($tableSchema),
                'relations' => isset($relations[$className]) ? $relations[$className] : []
            ];
            $files[] = new CodeFile(
                Yii::getAlias('@' . str_replace('\\', '/', $this->ns)) . '/' . $className . '.php',
                $this->render('model.php', $params)
            );

            if($this->isCreateQuery()){
                $files[] = new CodeFile(
                    Yii::getAlias('@' . str_replace('\\', '/', $this->ns)) . '/' . $className . 'Query.php',
                    $this->render('ActiveQuery.php', $params)
                );
            }

            if ($this->isSaveToAutoComplete()) {
                $filePath = Yii::getAlias('@' . str_replace('\\', '/', $this->ns)) . '/MagicAutoComplete.php';
                $methods = $this->getNewAutoComplete($filePath);

                foreach ($tableSchema->columns as $column) {
                    $methods = array_merge($methods, $this->getMethodsDocs($column->name));
                }

                $methods = array_unique($methods);
                sort($methods);

                $params['methods'] = $methods;

                $files[] = new CodeFile(
                    $filePath,
                    $this->render('AutoComplete.php', $params)
                );
            }
        }

        return $files;
    }



    public function getNewAutoComplete($filePath)
    {
        if(file_exists($filePath)){
            preg_match_all('/\s*\*\s*\@method\s+(?<classes>[^\s]*)\s(?<methods>.*)\s*$/im', file_get_contents($filePath), $regs);
            return $regs['methods'];
        }

        return [];
    }


    public function isUseMagicQuery()
    {
        return $this->createType === self::TYPE_MAGIC_QUERY;
    }

    public function isCreateQuery()
    {
        return $this->createType === self::TYPE_CREATE_QUERY;
    }

    public function isAttachBehavior()
    {
        return $this->createType === self::TYPE_ATTACH_BEHAVIOR;
    }

    public function isSaveToModel()
    {
        return $this->saveDocType === self::SAVE_DOC_TO_MODEL;
    }

    public function isSaveToAutoComplete()
    {
        return $this->saveDocType === self::SAVE_DOC_TO_AUTOCOMPLETE_FILE;
    }

    /**
     * @param string $columnName
     * @return array
     */
    public function getMethodsDocs($columnName)
    {
        $columnName = str_replace(' ', '', ucwords(implode(' ', explode('-', $columnName))));
        $columnName = str_replace(' ', '', ucwords(implode(' ', explode('_', $columnName))));

        $docs = [];

        foreach($this->methodNames as $template){
            $methodName = lcfirst(str_replace('*', $columnName, $template));
            $varName = lcfirst($columnName);

            if (stristr($template, 'between')) {
                $signature = '($from, $to)';
            } elseif (stristr($template, 'in')) {
                $signature = '($array)';
            } elseif(stristr($template, 'less') || stristr($template, 'more')){
                $signature = '($than, $include = false)';
            } else {
                $signature = '($' . $varName . ')';
            }

            $docs[] = $methodName . $signature;
        }

        return $docs;
    }
}
