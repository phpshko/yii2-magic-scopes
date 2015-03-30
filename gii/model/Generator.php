<?php

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
    public $saveDocType = self::SAVE_DOC_TO_MODEL;
    public $createType = self::TYPE_MAGIC_QUERY;

    /* Dropdown */
    public $createTypes = [
        self::TYPE_MAGIC_QUERY     => 'Use Magic Query',
        self::TYPE_CREATE_QUERY    => 'Create Query',
        self::TYPE_ATTACH_BEHAVIOR => 'Attach Behavior'
    ];
    public $saveDocTypes = [
        self::SAVE_DOC_TO_MODEL             => 'Save in model',
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
        return 'This generator generates an ActiveRecord class for the specified database table,
                include MagicScopeBehavior and generate autocomplete.';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_merge(
            parent::rules(),
            [
                [['createType'], 'in', 'range' => [
                    self::TYPE_CREATE_QUERY, self::TYPE_MAGIC_QUERY, self::TYPE_ATTACH_BEHAVIOR
                ]],
                [['saveDocType'], 'in', 'range' => [
                    self::SAVE_DOC_TO_MODEL, self::SAVE_DOC_TO_AUTOCOMPLETE_FILE
                ]]
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return array_merge(
            parent::attributeLabels(),
            [
                'createType' => 'Creation Mode',
                'saveDocType' => 'Save DocBlock to'
            ]
        );
    }

    /**
     * @return array
     */
    public function generate()
    {
        $files = [];
        $relations = $this->generateRelations();
        $db = $this->getDbConnection();

        $views = [
            self::TYPE_MAGIC_QUERY      => '_findMagicQuery',
            self::TYPE_CREATE_QUERY     => '_findCreateQuery',
            self::TYPE_ATTACH_BEHAVIOR  => '_findAttachBehavior'
        ];

        foreach ($this->getTableNames() as $tableName) {
            $className = $this->generateClassName($tableName);
            $tableSchema = $db->getTableSchema($tableName);
            $params = [
                'tableName' => $tableName,
                'className' => $className,
                'tableSchema' => $tableSchema,
                'labels' => $this->generateLabels($tableSchema),
                'rules' => $this->generateRules($tableSchema),
                'relations' => isset($relations[$className]) ? $relations[$className] : [],
                'findView' => $views[$this->createType]
            ];

            $pathToDir = Yii::getAlias('@' . str_replace('\\', '/', $this->ns));

            $files[] = new CodeFile(
                $pathToDir . '/' . $className . '.php',
                $this->render('model.php', $params)
            );

            if ($this->isCreateQuery()) {
                $files[] = new CodeFile(
                    $pathToDir . '/' . $className . 'Query.php',
                    $this->render('ActiveQuery.php', $params)
                );
            }

            if ($this->isSaveToAutoComplete()) {
                $filePath = $pathToDir . '/MagicAutoComplete.php';
                $methods = $this->getOldAutoComplete($filePath);

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

    /**
     * @param string $filePath
     * @return array
     */
    public function getOldAutoComplete($filePath)
    {
        if (file_exists($filePath)) {
            $regex = '/\s*\*\s*\@method\s+(?<classes>[^\s]*)\s(?<methods>.*)\s*$/im';
            preg_match_all($regex, file_get_contents($filePath), $regs);
            return $regs['methods'];
        }

        return [];
    }

    /**
     * @return bool
     */
    public function isUseMagicQuery()
    {
        return $this->createType === self::TYPE_MAGIC_QUERY;
    }

    /**
     * @return bool
     */
    public function isCreateQuery()
    {
        return $this->createType === self::TYPE_CREATE_QUERY;
    }

    /**
     * @return bool
     */
    public function isAttachBehavior()
    {
        return $this->createType === self::TYPE_ATTACH_BEHAVIOR;
    }

    /**
     * @return bool
     */
    public function isSaveToModel()
    {
        return $this->saveDocType === self::SAVE_DOC_TO_MODEL;
    }

    /**
     * @return bool
     */
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

        foreach ($this->methodNames as $template) {
            $methodName = lcfirst(str_replace('*', $columnName, $template));
            $varName = lcfirst($columnName);

            if (stristr($template, 'between')) {
                $signature = '($from, $to)';
            } elseif (stristr($template, 'in')) {
                $signature = '($array)';
            } elseif (stristr($template, 'less') || stristr($template, 'more')) {
                $signature = '($than, $include = false)';
            } else {
                $signature = '($' . $varName . ')';
            }

            $docs[] = $methodName . $signature;
        }

        return $docs;
    }
}
