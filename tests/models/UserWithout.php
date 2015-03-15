<?php
namespace phpshko\magicscopes\tests\models;

use Yii;

use app\components\ActiveRecord;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $forename
 * @property string $surname
 * @property integer $year

 */
class UserWithout extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

}
