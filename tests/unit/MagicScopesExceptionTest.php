<?php

use phpshko\magicscopes\tests\unit\models\UserWith;

class MagicScopesExceptionTest extends \yii\codeception\TestCase
{
    public $appConfig = 'config/unit.php';

    protected function setUp()
    {
        $this->mockApplication();
        $this->unloadFixtures();
        $this->loadFixtures();
    }

    protected function tearDown()
    {
        $this->destroyApplication();
    }


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

    //tests

    /**
     * @expectedException        Exception
     */
    public function testNoneAttribute()
    {
        $query = UserWith::find()->andId2NotIn([12, 12, 13]);
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Parameter should be string or integer
     */
    public function testEqual1()
    {
        $query = UserWith::find()->andId([12, 12, 13]);
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Parameter should be string or integer
     */
    public function testEqual2()
    {
        $query = UserWith::find()->andId(new \stdClass());
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Parameter should be array
     */
    public function testIn1()
    {
        $query = UserWith::find()->andIdIn(new \stdClass());
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Parameter should be array
     */
    public function testIn2()
    {
        $query = UserWith::find()->andIdIn(5);
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Parameter should be string or integer
     */
    public function testLike1()
    {
        $query = UserWith::find()->andIdLike([new stdClass()]);
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Parameter should be string or integer
     */
    public function testLike2()
    {
        $query = UserWith::find()->andIdLike(new stdClass());
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Both parameters should be string or integer
     */
    public function testBetween1()
    {
        $query = UserWith::find()->andIdBetween(new stdClass());
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Both parameters should be string or integer
     */
    public function testBetween2()
    {
        $query = UserWith::find()->andIdBetween(new stdClass(), new stdClass());
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Both parameters should be string or integer
     */
    public function testBetween3()
    {
        $query = UserWith::find()->andIdBetween([1, 5]);
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Both parameters should be string or integer
     */
    public function testBetween4()
    {
        $query = UserWith::find()->andIdBetween([1, new stdClass()]);
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Parameter should be string or integer
     */
    public function testMore1()
    {
        $query = UserWith::find()->andIdMore([1]);
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Parameter should be string or integer
     */
    public function testMore2()
    {
        $query = UserWith::find()->andIdMore(new stdClass());
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Parameter should be string or integer
     */
    public function testLess1()
    {
        $query = UserWith::find()->andIdLess([1]);
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Parameter should be string or integer
     */
    public function testLess2()
    {
        $query = UserWith::find()->andIdLess(new stdClass());
    }

}