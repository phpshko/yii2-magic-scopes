<?php

namespace phpshko\magicscopes\tests\unit;

use Yii;
use yii\db\ActiveQuery;

class MagicScopesTest extends TestCaseWrapper
{
    /**
     * @param ActiveQuery $query1
     * @param ActiveQuery $query2
     * @param string $message
     */
    public function assertSqlQuery($query1, $query2, $message = '')
    {
        $this->assertEquals(
            $query1->prepare(Yii::$app->db->queryBuilder)->createCommand()->rawSql,
            $query2->prepare(Yii::$app->db->queryBuilder)->createCommand()->rawSql,
            $message
        );
    }


    // tests

    public function testEquals($model = 1)
    {
        $id = 1;

        $queryWith = $this->findWith()->andAddressId($id);
        $queryWithout = $this->findWithout()->andWhere(['address_id' => $id]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Equal');

        $queryWith = $this->findWith()->andAddressIdNot($id);
        $queryWithout = $this->findWithout()->andWhere(['<>', 'address_id', $id]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Not Equal');
    }


    public function testIn()
    {
        $array = [1, 2, 3, 4, 5];

        $queryWith = $this->findWith()->andAddressIdIn($array);
        $queryWithout = $this->findWithout()->andWhere(['address_id' => $array]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'In');

        $queryWith = $this->findWith()->andAddressIdNotIn($array);
        $queryWithout = $this->findWithout()->andWhere(['not in', 'address_id', $array]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Not In');
    }


    public function testLike()
    {
        $forename = 'john';

        $queryWith = $this->findWith()->andForenameLike($forename);
        $queryWithout = $this->findWithout()->andWhere(['like', 'forename', $forename]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Like');

        $queryWith = $this->findWith()->andForenameNotLike($forename);
        $queryWithout = $this->findWithout()->andWhere(['not like', 'forename', $forename]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Not Like');
    }


    public function testMore()
    {
        $than = 10;

        $queryWith = $this->findWith()->andIdMore($than);
        $queryWithout = $this->findWithout()->andWhere(['>', 'id', $than]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'More');

        $queryWith = $this->findWith()->andIdNotMore($than);
        $queryWithout = $this->findWithout()->andWhere(['<', 'id', $than]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Not More');

        $queryWith = $this->findWith()->andIdMore($than, true);
        $queryWithout = $this->findWithout()->andWhere(['>=', 'id', $than]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'More Or Equal');

        $queryWith = $this->findWith()->andIdNotMore($than, true);
        $queryWithout = $this->findWithout()->andWhere(['<=', 'id', $than]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Not More Or Equal');
    }


    public function testLess()
    {
        $than = 10;

        $queryWith = $this->findWith()->andIdLess($than);
        $queryWithout = $this->findWithout()->andWhere(['<', 'id', $than]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Less');

        $queryWith = $this->findWith()->andIdNotLess($than);
        $queryWithout = $this->findWithout()->andWhere(['>', 'id', $than]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Not Less');

        $queryWith = $this->findWith()->andIdLess($than, true);
        $queryWithout = $this->findWithout()->andWhere(['<=', 'id', $than]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Less Or Equal');

        $queryWith = $this->findWith()->andIdNotLess($than, true);
        $queryWithout = $this->findWithout()->andWhere(['>=', 'id', $than]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Not Less Or Equal');
    }


    public function testBetween()
    {
        $from = 1980;
        $to = 1990;

        $queryWith = $this->findWith()->andYearBetween($from, $to);
        $queryWithout = $this->findWithout()->andWhere(['between', 'year', $from, $to]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Between');

        $queryWith = $this->findWith()->andYearNotBetween($from, $to);
        $queryWithout = $this->findWithout()->andWhere(['not between', 'year', $from, $to]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Not Between');
    }


    public function testCombine1()
    {
        $queryWith = $this->findWith()
            ->andId(45)
            ->andUsernameLike('php')
            ->andYearBetween(1980, 2000)
            ->addressIdMore(10);

        $queryWithout = $this->findWithout()
            ->andWhere(['id' => 45])
            ->andWhere(['like', 'username', 'php'])
            ->andWhere(['between', 'year', 1980, 2000])
            ->andWhere(['>', 'address_id', 10]);

        $this->assertSqlQuery($queryWith, $queryWithout, 'Combine 1');
    }


    public function testCombine2()
    {
        $queryWith = $this->findWith()
            ->andId(45)
            ->orUsernameLike('php')
            ->orYearBetween(1980, 2000)
            ->orAddressIdMore(10);

        $queryWithout = $this->findWithout()
            ->andWhere(['id' => 45])
            ->orWhere(['like', 'username', 'php'])
            ->orWhere(['between', 'year', 1980, 2000])
            ->orWhere(['>', 'address_id', 10]);

        $this->assertSqlQuery($queryWith, $queryWithout, 'Combine 2');
    }

    public function testCombine3()
    {
        $queryWith = $this->findWith()
            ->andId(45)
            ->orUsernameNotLike('php')
            ->orYearNotBetween(1980, 2000)
            ->orAddressIdNotMore(10);

        $queryWithout = $this->findWithout()
            ->andWhere(['id' => 45])
            ->orWhere(['not like', 'username', 'php'])
            ->orWhere(['not between', 'year', 1980, 2000])
            ->orWhere(['<', 'address_id', 10]);

        $this->assertSqlQuery($queryWith, $queryWithout, 'Combine 3');
    }
}