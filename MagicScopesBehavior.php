<?php

namespace phpshko\magicscopes;

use Yii;
use yii\base\Behavior;
use yii\db\ActiveRecord;
use yii\console\Exception;

/**
 * Class MagicScopesBehavior
 */
class MagicScopesBehavior extends Behavior
{
    /**
     * @var \yii\db\ActiveQuery $owner
     */
    public $owner;
    public $useCache = true;

    protected static $cacheAttributes = [];

    /**
     * @param string $name
     * @return array
     */
    public function parseMethodName($name)
    {
        $name = strtolower($name);

        preg_match('/^(or|and|)(.*)(not|)(in|like|between|more|less|)$/iU', $name, $regs);

        return [
            'or' => $regs[1] === 'or',
            'and' => $regs[1] !== 'or',
            'attribute' => $regs[2],
            'not' => $regs[3] === 'not',
            'type' => $regs[4] ?: 'equal'
        ];
    }


    /**
     * @param string $name
     * @return bool
     */
    public function hasMethod($name)
    {
        $parse = $this->parseMethodName($name);
        return (bool)$this->getAttributeName($this->owner->modelClass, $parse['attribute']);
    }


    /**
     * @param string $name
     * @param array $params
     * @return \yii\db\ActiveQuery
     */
    public function __call($name, $params)
    {
        $parse = $this->parseMethodName($name);
        $whereMethod = $parse['or'] ? 'orWhere' : 'andWhere';
        $not = $parse['not'] ? 'not ' : '';
        $columnName = $this->getAttributeName($this->owner->modelClass, $parse['attribute']);

        $resultType = $not . $parse['type'];

        switch($parse['type']){
            case 'equal':
                if(!$not){
                    $this->owner->{$whereMethod}([$columnName => $params[0]]);
                } else {
                    $this->owner->{$whereMethod}(['<>', $columnName, $params[0]]);
                }
                break;
            case 'in':
            case 'like':
                $this->owner->{$whereMethod}([$resultType, $columnName, $params[0]]);
                break;
            case 'more':
            case 'less':
                $isMore = ($parse['type'] === 'more' && !$parse['not'] || ($parse['type'] === 'less' && $parse['not']));
                $condition = ($isMore ? '>' : '<');

                if(isset($params[1])){
                    $condition .= ($params[1] ? '=' : '');
                }

                $this->owner->{$whereMethod}([$condition, $columnName, $params[0]]);
                break;
            case 'between':
                $this->owner->{$whereMethod}([$resultType, $columnName, $params[0], $params[1]]);
                break;
        }

        return $this->owner;
    }


    /**
     * @param string|\yii\db\ActiveRecord $className
     * @return array
     */
    protected function getCleanAttributes($className)
    {
        if (!$this->useCache || !isset(self::$cacheAttributes[$className])) {
            $tmp = [];
            foreach ($className::getTableSchema()->getColumnNames() as $attributeName) {
                $tmp[$this->cleanString($attributeName)] = $attributeName;
            }

            self::$cacheAttributes[$className] = $tmp;
        }

        return self::$cacheAttributes[$className];
    }


    /**
     * @param $className
     * @param $attributeName
     * @return mixed
     * @throws Exception
     */
    protected function getAttributeName($className, $attributeName)
    {
        $attributes = $this->getCleanAttributes($className);

        if (isset($attributes[$attributeName])) {
            return $attributes[$attributeName];
        }

        throw new Exception('Attribute ' . $attributeName . ' not found in the model ' . $className);
    }


    /**
     * @param string $str
     * @return string
     */
    protected function cleanString($str)
    {
        return strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $str));
    }

}