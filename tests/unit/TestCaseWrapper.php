<?php

namespace phpshko\magicscopes\tests\unit;

use phpshko\magicscopes\tests\unit\models\UserWithMagic;
use phpshko\magicscopes\tests\unit\models\UserWithCreate;
use phpshko\magicscopes\tests\unit\models\UserWithAttach;
use phpshko\magicscopes\tests\unit\models\UserWithAutoComplete;
use phpshko\magicscopes\tests\unit\models\UserWithout;
use PHPUnit_Framework_TestResult;

/**
 * Class TestCaseWrapper
 * @property UserWithMagicQuery[] $classesWith
 * @property UserWithMagicQuery $classWithout
 * @property UserWithMagicQuery $currentTestClass
 */
class TestCaseWrapper extends \yii\codeception\TestCase
{
    public $appConfig = 'config/unit.php';

    public $classesWith = [];
    public $classWithout;
    protected $currentTestClass;

    protected function setUp()
    {
        $this->mockApplication();
        $this->unloadFixtures();
        $this->loadFixtures();

        $this->appConfig = __DIR__ . '/../config/unit.php';

        $this->classesWith = [
            UserWithMagic::className(),
            UserWithCreate::className(),
            UserWithAttach::className(),
            UserWithAutoComplete::className()
        ];

        $this->classWithout = UserWithout::className();
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
    }

    protected function runTest()
    {
        foreach($this->classesWith as $className){
            $this->currentTestClass = $className;
            parent::runTest();
        }
    }


    protected function _after()
    {
    }


    /**
     * @return UserWithMagic|\yii\db\ActiveQuery
     */
    public function findWith()
    {
        $class = $this->currentTestClass;
        return $class::find();
    }


    /**
     * @return UserWithout|\yii\db\ActiveQuery
     */
    public function findWithout()
    {
        $class = $this->classWithout;
        return $class::find();
    }


}