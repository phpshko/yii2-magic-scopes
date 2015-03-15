<?php

use phpshko\magicscopes\tests\models\UserWith;
use phpshko\magicscopes\tests\models\UserWithout;
use yii\db\ActiveQuery;

class MagicScopesTest extends \yii\codeception\TestCase
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
        $this->appConfig = __DIR__ . '/../config/unit.php';
    }

    protected function _after()
    {
    }


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

    public function testEquals()
    {
        $id = 1;

        $queryWith = UserWith::find()->andAddressId($id);
        $queryWithout = UserWithout::find()->andWhere(['address_id' => $id]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Equal');

        $queryWith = UserWith::find()->andAddressIdNot($id);
        $queryWithout = UserWithout::find()->andWhere(['<>', 'address_id', $id]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Not Equal');
    }


    public function testIn()
    {
        $array = [1,2,3,4,5];

        $queryWith = UserWith::find()->andAddressIdIn($array);
        $queryWithout = UserWithout::find()->andWhere(['address_id' => $array]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'In');

        $queryWith = UserWith::find()->andAddressIdNotIn($array);
        $queryWithout = UserWithout::find()->andWhere(['not in', 'address_id', $array]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Not In');
    }


    public function testLike()
    {
        $forename = 'john';

        $queryWith = UserWith::find()->andForenameLike($forename);
        $queryWithout = UserWithout::find()->andWhere(['like', 'forename', $forename]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Like');

        $queryWith = UserWith::find()->andForenameNotLike($forename);
        $queryWithout = UserWithout::find()->andWhere(['not like', 'forename', $forename]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Not Like');
    }


    public function testMore()
    {
        $than = 10;

        $queryWith = UserWith::find()->andIdMore($than);
        $queryWithout = UserWithout::find()->andWhere(['>', 'id', $than]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'More');

        $queryWith = UserWith::find()->andIdNotMore($than);
        $queryWithout = UserWithout::find()->andWhere(['<', 'id', $than]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Not More');

        $queryWith = UserWith::find()->andIdMore($than, true);
        $queryWithout = UserWithout::find()->andWhere(['>=', 'id', $than]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'More Or Equal');

        $queryWith = UserWith::find()->andIdNotMore($than, true);
        $queryWithout = UserWithout::find()->andWhere(['<=', 'id', $than]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Not More Or Equal');
    }


    public function testLess()
    {
        $than = 10;

        $queryWith = UserWith::find()->andIdLess($than);
        $queryWithout = UserWithout::find()->andWhere(['<', 'id', $than]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Less');

        $queryWith = UserWith::find()->andIdNotLess($than);
        $queryWithout = UserWithout::find()->andWhere(['>', 'id', $than]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Not Less');

        $queryWith = UserWith::find()->andIdLess($than, true);
        $queryWithout = UserWithout::find()->andWhere(['<=', 'id', $than]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Less Or Equal');

        $queryWith = UserWith::find()->andIdNotLess($than, true);
        $queryWithout = UserWithout::find()->andWhere(['>=', 'id', $than]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Not Less Or Equal');
    }


    public function testBetween()
    {
        $from = 1980;
        $to = 1990;

        $queryWith = UserWith::find()->andYearBetween($from, $to);
        $queryWithout = UserWithout::find()->andWhere(['between', 'year', $from, $to]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Between');

        $queryWith = UserWith::find()->andYearNotBetween($from, $to);
        $queryWithout = UserWithout::find()->andWhere(['not between', 'year', $from, $to]);
        $this->assertSqlQuery($queryWith, $queryWithout, 'Not Between');
    }


    public function testCombine1()
    {
        $queryWith = UserWith::find()
            ->andId(45)
            ->andUsernameLike('php')
            ->andYearBetween(1980, 2000)
            ->addressIdMore(10);

        $queryWithout = UserWithout::find()
            ->andWhere(['id' => 45])
            ->andWhere(['like', 'username', 'php'])
            ->andWhere(['between', 'year', 1980, 2000])
            ->andWhere(['>', 'address_id', 10]);

        $this->assertSqlQuery($queryWith, $queryWithout, 'Combine 1');
    }


    public function testCombine2()
    {
        $queryWith = UserWith::find()
            ->andId(45)
            ->orUsernameLike('php')
            ->orYearBetween(1980, 2000)
            ->orAddressIdMore(10);

        $queryWithout = UserWithout::find()
            ->andWhere(['id' => 45])
            ->orWhere(['like', 'username', 'php'])
            ->orWhere(['between', 'year', 1980, 2000])
            ->orWhere(['>', 'address_id', 10]);

        $this->assertSqlQuery($queryWith, $queryWithout, 'Combine 2');
    }

    public function testCombine3()
    {
        $queryWith = UserWith::find()
            ->andId(45)
            ->orUsernameNotLike('php')
            ->orYearNotBetween(1980, 2000)
            ->orAddressIdNotMore(10);

        $queryWithout = UserWithout::find()
            ->andWhere(['id' => 45])
            ->orWhere(['not like', 'username', 'php'])
            ->orWhere(['not between', 'year', 1980, 2000])
            ->orWhere(['<', 'address_id', 10]);

        $this->assertSqlQuery($queryWith, $queryWithout, 'Combine 3');
    }
}