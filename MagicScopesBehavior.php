<?php

namespace phpshko\magicscopes;

use Yii;
use yii\base\Behavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\console\Exception;

/**
 * Class MagicScopesBehavior
 */
class MagicScopesBehavior extends Behavior
{
    /**
     * @var ActiveQuery $owner
     */
    public $owner;

    protected static $cacheAttributes = [];

    /**
     * @inheritdoc
     */
    public function attach($owner)
    {
        parent::attach($owner);
        $this->cacheSchema($this->owner->modelClass);
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
     * @return ActiveQuery
     */
    public function __call($name, $params)
    {
        return $this->buildQuery($name, $params);
    }

    /**
     * @param ActiveRecord|string $className
     */
    public function cacheSchema($className)
    {
        if (!isset(self::$cacheAttributes[$className])) {
            $tmp = [];
            foreach ($className::getTableSchema()->getColumnNames() as $attributeName) {
                $tmp[$this->cleanString($attributeName)] = $attributeName;
            }

            self::$cacheAttributes[$className] = $tmp;
        }
    }

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
     * @param string $type
     * @param string $params
     * @throws \yii\base\Exception
     */
    public function validate($type, $params)
    {
        switch($type){
            case 'equal':
            case 'more':
            case 'less':
            case 'like':
                if (!is_int($params[0]) && !is_string($params[0])) {
                    throw new \InvalidArgumentException('Parameter should be string or integer. ' . gettype($params[0]) . ' given');
                }
                break;
            case 'in':
                if(!is_array($params[0])){
                    throw new \InvalidArgumentException('Parameter should be array. ' . gettype($params[0]) . ' given');
                }
                break;
            case 'between':
                if ((!is_int($params[0]) && !is_string($params[0])) || (!is_int($params[1]) && !is_string($params[1]))) {
                    throw new \InvalidArgumentException('Both parameters should be string or integer.');
                }
                break;
        }
    }

    /**
     * @param $methodName
     * @param $params
     * @return ActiveQuery
     * @throws Exception
     */
    public function buildQuery($methodName, $params)
    {
        $parse = $this->parseMethodName($methodName);

        $this->validate($parse['type'], $params);

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

        return false;
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
