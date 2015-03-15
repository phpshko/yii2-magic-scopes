<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace phpshko\magicscopes\gii\model;

use Yii;

/**
 * This generator will generate one or multiple ActiveRecord classes for the specified database table.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Generator extends \yii\gii\generators\model\Generator
{
    public $generateMagicScopes = true;


    protected $methodNames = [
        '*', '*In', '*Like', '*Between', '*More', '*Less',
        '*Not', '*NotIn', '*NotLike', '*NotBetween', '*NotMore', '*NotLess',
        'and*', 'and*In', 'and*Like', 'and*Between', 'and*More', 'and*Less',
        'and*Not', 'and*NotIn', 'and*NotLike', 'and*NotBetween', 'and*NotMore', 'and*NotLess',
        'or*In', 'or*Like', 'or*Between', 'or*More', 'or*Less', 'or*Not',
        'or*NotIn', 'or*NotLike', 'or*NotBetween', 'or*NotMore', 'or*NotLess', 'or*'
    ];


    /**
     * @param string $columnName
     * @return array
     */
    public function getScopesDoc($columnName)
    {
        $columnName = str_replace(' ', '', ucwords(implode(' ', explode('-', $columnName))));
        $columnName = str_replace(' ', '', ucwords(implode(' ', explode('_', $columnName))));

        $docs = [];

        foreach($this->methodNames as $template){
            $methodName = lcfirst(str_replace('*', $columnName, $template));
            $varName = lcfirst($columnName);

            if (stristr($template, 'between')) {
                $docs[] = ' * @method ActiveQuery|' . $this->modelClass . ' ' . $methodName . '($from, $to)';
            } elseif(stristr($template, 'less') || stristr($template, 'more')){
                $docs[] = ' * @method ActiveQuery|' . $this->modelClass . ' ' . $methodName . '($than, $include = false)';
            } else {
                $docs[] = ' * @method ActiveQuery|' . $this->modelClass . ' ' . $methodName . '($' . $varName . ')';
            }
        }

        return $docs;
    }
}
