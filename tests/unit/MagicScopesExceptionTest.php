<?php

namespace phpshko\magicscopes\tests\unit;

use InvalidArgumentException;
use stdClass;
use yii\base\Exception;

class MagicScopesExceptionTest extends TestCaseWrapper
{
    /**
     * @expectedException        Exception
     */
    public function testNoneAttribute()
    {
        $this->findWith()->andId2NotIn([12, 12, 13]);
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Parameter should be string or integer
     */
    public function testEqual1()
    {
        $this->findWith()->andId([12, 12, 13]);
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Parameter should be string or integer
     */
    public function testEqual2()
    {
        $this->findWith()->andId(new stdClass());
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Parameter should be array
     */
    public function testIn1()
    {
        $this->findWith()->andIdIn(new stdClass());
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Parameter should be array
     */
    public function testIn2()
    {
        $this->findWith()->andIdIn(5);
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Parameter should be string or integer
     */
    public function testLike1()
    {
        $this->findWith()->andIdLike([new stdClass()]);
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Parameter should be string or integer
     */
    public function testLike2()
    {
        $this->findWith()->andIdLike(new stdClass());
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Both parameters should be string or integer
     */
    public function testBetween1()
    {
        $this->findWith()->andIdBetween(new stdClass());
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Both parameters should be string or integer
     */
    public function testBetween2()
    {
        $this->findWith()->andIdBetween(new stdClass(), new stdClass());
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Both parameters should be string or integer
     */
    public function testBetween3()
    {
        $this->findWith()->andIdBetween([1, 5]);
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Both parameters should be string or integer
     */
    public function testBetween4()
    {
        $this->findWith()->andIdBetween([1, new stdClass()]);
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Parameter should be string or integer
     */
    public function testMore1()
    {
        $this->findWith()->andIdMore([1]);
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Parameter should be string or integer
     */
    public function testMore2()
    {
        $this->findWith()->andIdMore(new stdClass());
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Parameter should be string or integer
     */
    public function testLess1()
    {
        $this->findWith()->andIdLess([1]);
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Parameter should be string or integer
     */
    public function testLess2()
    {
        $this->findWith()->andIdLess(new stdClass());
    }

}