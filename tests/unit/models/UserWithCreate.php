<?php

namespace phpshko\magicscopes\tests\unit\models;

use Yii;
use yii\db\ActiveQuery;
use phpshko\magicscopes\MagicScopesBehavior;
use phpshko\magicscopes\MagicActiveQuery;
/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $forename
 * @property string $surname
 * @property integer $year
 * @property integer $address_id
 *
 * Magic Scopes
 *
* @method ActiveQuery|UserWithCreate id($id)
* @method ActiveQuery|UserWithCreate idIn($array)
* @method ActiveQuery|UserWithCreate idLike($id)
* @method ActiveQuery|UserWithCreate idBetween($from, $to)
* @method ActiveQuery|UserWithCreate idMore($than, $include = false)
* @method ActiveQuery|UserWithCreate idLess($than, $include = false)
* @method ActiveQuery|UserWithCreate idNot($id)
* @method ActiveQuery|UserWithCreate idNotIn($array)
* @method ActiveQuery|UserWithCreate idNotLike($id)
* @method ActiveQuery|UserWithCreate idNotBetween($from, $to)
* @method ActiveQuery|UserWithCreate idNotMore($than, $include = false)
* @method ActiveQuery|UserWithCreate idNotLess($than, $include = false)
* @method ActiveQuery|UserWithCreate andId($id)
* @method ActiveQuery|UserWithCreate andIdIn($array)
* @method ActiveQuery|UserWithCreate andIdLike($id)
* @method ActiveQuery|UserWithCreate andIdBetween($from, $to)
* @method ActiveQuery|UserWithCreate andIdMore($than, $include = false)
* @method ActiveQuery|UserWithCreate andIdLess($than, $include = false)
* @method ActiveQuery|UserWithCreate andIdNot($id)
* @method ActiveQuery|UserWithCreate andIdNotIn($array)
* @method ActiveQuery|UserWithCreate andIdNotLike($id)
* @method ActiveQuery|UserWithCreate andIdNotBetween($from, $to)
* @method ActiveQuery|UserWithCreate andIdNotMore($than, $include = false)
* @method ActiveQuery|UserWithCreate andIdNotLess($than, $include = false)
* @method ActiveQuery|UserWithCreate orIdIn($array)
* @method ActiveQuery|UserWithCreate orIdLike($id)
* @method ActiveQuery|UserWithCreate orIdBetween($from, $to)
* @method ActiveQuery|UserWithCreate orIdMore($than, $include = false)
* @method ActiveQuery|UserWithCreate orIdLess($than, $include = false)
* @method ActiveQuery|UserWithCreate orIdNot($id)
* @method ActiveQuery|UserWithCreate orIdNotIn($array)
* @method ActiveQuery|UserWithCreate orIdNotLike($id)
* @method ActiveQuery|UserWithCreate orIdNotBetween($from, $to)
* @method ActiveQuery|UserWithCreate orIdNotMore($than, $include = false)
* @method ActiveQuery|UserWithCreate orIdNotLess($than, $include = false)
* @method ActiveQuery|UserWithCreate orId($id)
 *
* @method ActiveQuery|UserWithCreate username($username)
* @method ActiveQuery|UserWithCreate usernameIn($array)
* @method ActiveQuery|UserWithCreate usernameLike($username)
* @method ActiveQuery|UserWithCreate usernameBetween($from, $to)
* @method ActiveQuery|UserWithCreate usernameMore($than, $include = false)
* @method ActiveQuery|UserWithCreate usernameLess($than, $include = false)
* @method ActiveQuery|UserWithCreate usernameNot($username)
* @method ActiveQuery|UserWithCreate usernameNotIn($array)
* @method ActiveQuery|UserWithCreate usernameNotLike($username)
* @method ActiveQuery|UserWithCreate usernameNotBetween($from, $to)
* @method ActiveQuery|UserWithCreate usernameNotMore($than, $include = false)
* @method ActiveQuery|UserWithCreate usernameNotLess($than, $include = false)
* @method ActiveQuery|UserWithCreate andUsername($username)
* @method ActiveQuery|UserWithCreate andUsernameIn($array)
* @method ActiveQuery|UserWithCreate andUsernameLike($username)
* @method ActiveQuery|UserWithCreate andUsernameBetween($from, $to)
* @method ActiveQuery|UserWithCreate andUsernameMore($than, $include = false)
* @method ActiveQuery|UserWithCreate andUsernameLess($than, $include = false)
* @method ActiveQuery|UserWithCreate andUsernameNot($username)
* @method ActiveQuery|UserWithCreate andUsernameNotIn($array)
* @method ActiveQuery|UserWithCreate andUsernameNotLike($username)
* @method ActiveQuery|UserWithCreate andUsernameNotBetween($from, $to)
* @method ActiveQuery|UserWithCreate andUsernameNotMore($than, $include = false)
* @method ActiveQuery|UserWithCreate andUsernameNotLess($than, $include = false)
* @method ActiveQuery|UserWithCreate orUsernameIn($array)
* @method ActiveQuery|UserWithCreate orUsernameLike($username)
* @method ActiveQuery|UserWithCreate orUsernameBetween($from, $to)
* @method ActiveQuery|UserWithCreate orUsernameMore($than, $include = false)
* @method ActiveQuery|UserWithCreate orUsernameLess($than, $include = false)
* @method ActiveQuery|UserWithCreate orUsernameNot($username)
* @method ActiveQuery|UserWithCreate orUsernameNotIn($array)
* @method ActiveQuery|UserWithCreate orUsernameNotLike($username)
* @method ActiveQuery|UserWithCreate orUsernameNotBetween($from, $to)
* @method ActiveQuery|UserWithCreate orUsernameNotMore($than, $include = false)
* @method ActiveQuery|UserWithCreate orUsernameNotLess($than, $include = false)
* @method ActiveQuery|UserWithCreate orUsername($username)
 *
* @method ActiveQuery|UserWithCreate forename($forename)
* @method ActiveQuery|UserWithCreate forenameIn($array)
* @method ActiveQuery|UserWithCreate forenameLike($forename)
* @method ActiveQuery|UserWithCreate forenameBetween($from, $to)
* @method ActiveQuery|UserWithCreate forenameMore($than, $include = false)
* @method ActiveQuery|UserWithCreate forenameLess($than, $include = false)
* @method ActiveQuery|UserWithCreate forenameNot($forename)
* @method ActiveQuery|UserWithCreate forenameNotIn($array)
* @method ActiveQuery|UserWithCreate forenameNotLike($forename)
* @method ActiveQuery|UserWithCreate forenameNotBetween($from, $to)
* @method ActiveQuery|UserWithCreate forenameNotMore($than, $include = false)
* @method ActiveQuery|UserWithCreate forenameNotLess($than, $include = false)
* @method ActiveQuery|UserWithCreate andForename($forename)
* @method ActiveQuery|UserWithCreate andForenameIn($array)
* @method ActiveQuery|UserWithCreate andForenameLike($forename)
* @method ActiveQuery|UserWithCreate andForenameBetween($from, $to)
* @method ActiveQuery|UserWithCreate andForenameMore($than, $include = false)
* @method ActiveQuery|UserWithCreate andForenameLess($than, $include = false)
* @method ActiveQuery|UserWithCreate andForenameNot($forename)
* @method ActiveQuery|UserWithCreate andForenameNotIn($array)
* @method ActiveQuery|UserWithCreate andForenameNotLike($forename)
* @method ActiveQuery|UserWithCreate andForenameNotBetween($from, $to)
* @method ActiveQuery|UserWithCreate andForenameNotMore($than, $include = false)
* @method ActiveQuery|UserWithCreate andForenameNotLess($than, $include = false)
* @method ActiveQuery|UserWithCreate orForenameIn($array)
* @method ActiveQuery|UserWithCreate orForenameLike($forename)
* @method ActiveQuery|UserWithCreate orForenameBetween($from, $to)
* @method ActiveQuery|UserWithCreate orForenameMore($than, $include = false)
* @method ActiveQuery|UserWithCreate orForenameLess($than, $include = false)
* @method ActiveQuery|UserWithCreate orForenameNot($forename)
* @method ActiveQuery|UserWithCreate orForenameNotIn($array)
* @method ActiveQuery|UserWithCreate orForenameNotLike($forename)
* @method ActiveQuery|UserWithCreate orForenameNotBetween($from, $to)
* @method ActiveQuery|UserWithCreate orForenameNotMore($than, $include = false)
* @method ActiveQuery|UserWithCreate orForenameNotLess($than, $include = false)
* @method ActiveQuery|UserWithCreate orForename($forename)
 *
* @method ActiveQuery|UserWithCreate surname($surname)
* @method ActiveQuery|UserWithCreate surnameIn($array)
* @method ActiveQuery|UserWithCreate surnameLike($surname)
* @method ActiveQuery|UserWithCreate surnameBetween($from, $to)
* @method ActiveQuery|UserWithCreate surnameMore($than, $include = false)
* @method ActiveQuery|UserWithCreate surnameLess($than, $include = false)
* @method ActiveQuery|UserWithCreate surnameNot($surname)
* @method ActiveQuery|UserWithCreate surnameNotIn($array)
* @method ActiveQuery|UserWithCreate surnameNotLike($surname)
* @method ActiveQuery|UserWithCreate surnameNotBetween($from, $to)
* @method ActiveQuery|UserWithCreate surnameNotMore($than, $include = false)
* @method ActiveQuery|UserWithCreate surnameNotLess($than, $include = false)
* @method ActiveQuery|UserWithCreate andSurname($surname)
* @method ActiveQuery|UserWithCreate andSurnameIn($array)
* @method ActiveQuery|UserWithCreate andSurnameLike($surname)
* @method ActiveQuery|UserWithCreate andSurnameBetween($from, $to)
* @method ActiveQuery|UserWithCreate andSurnameMore($than, $include = false)
* @method ActiveQuery|UserWithCreate andSurnameLess($than, $include = false)
* @method ActiveQuery|UserWithCreate andSurnameNot($surname)
* @method ActiveQuery|UserWithCreate andSurnameNotIn($array)
* @method ActiveQuery|UserWithCreate andSurnameNotLike($surname)
* @method ActiveQuery|UserWithCreate andSurnameNotBetween($from, $to)
* @method ActiveQuery|UserWithCreate andSurnameNotMore($than, $include = false)
* @method ActiveQuery|UserWithCreate andSurnameNotLess($than, $include = false)
* @method ActiveQuery|UserWithCreate orSurnameIn($array)
* @method ActiveQuery|UserWithCreate orSurnameLike($surname)
* @method ActiveQuery|UserWithCreate orSurnameBetween($from, $to)
* @method ActiveQuery|UserWithCreate orSurnameMore($than, $include = false)
* @method ActiveQuery|UserWithCreate orSurnameLess($than, $include = false)
* @method ActiveQuery|UserWithCreate orSurnameNot($surname)
* @method ActiveQuery|UserWithCreate orSurnameNotIn($array)
* @method ActiveQuery|UserWithCreate orSurnameNotLike($surname)
* @method ActiveQuery|UserWithCreate orSurnameNotBetween($from, $to)
* @method ActiveQuery|UserWithCreate orSurnameNotMore($than, $include = false)
* @method ActiveQuery|UserWithCreate orSurnameNotLess($than, $include = false)
* @method ActiveQuery|UserWithCreate orSurname($surname)
 *
* @method ActiveQuery|UserWithCreate year($year)
* @method ActiveQuery|UserWithCreate yearIn($array)
* @method ActiveQuery|UserWithCreate yearLike($year)
* @method ActiveQuery|UserWithCreate yearBetween($from, $to)
* @method ActiveQuery|UserWithCreate yearMore($than, $include = false)
* @method ActiveQuery|UserWithCreate yearLess($than, $include = false)
* @method ActiveQuery|UserWithCreate yearNot($year)
* @method ActiveQuery|UserWithCreate yearNotIn($array)
* @method ActiveQuery|UserWithCreate yearNotLike($year)
* @method ActiveQuery|UserWithCreate yearNotBetween($from, $to)
* @method ActiveQuery|UserWithCreate yearNotMore($than, $include = false)
* @method ActiveQuery|UserWithCreate yearNotLess($than, $include = false)
* @method ActiveQuery|UserWithCreate andYear($year)
* @method ActiveQuery|UserWithCreate andYearIn($array)
* @method ActiveQuery|UserWithCreate andYearLike($year)
* @method ActiveQuery|UserWithCreate andYearBetween($from, $to)
* @method ActiveQuery|UserWithCreate andYearMore($than, $include = false)
* @method ActiveQuery|UserWithCreate andYearLess($than, $include = false)
* @method ActiveQuery|UserWithCreate andYearNot($year)
* @method ActiveQuery|UserWithCreate andYearNotIn($array)
* @method ActiveQuery|UserWithCreate andYearNotLike($year)
* @method ActiveQuery|UserWithCreate andYearNotBetween($from, $to)
* @method ActiveQuery|UserWithCreate andYearNotMore($than, $include = false)
* @method ActiveQuery|UserWithCreate andYearNotLess($than, $include = false)
* @method ActiveQuery|UserWithCreate orYearIn($array)
* @method ActiveQuery|UserWithCreate orYearLike($year)
* @method ActiveQuery|UserWithCreate orYearBetween($from, $to)
* @method ActiveQuery|UserWithCreate orYearMore($than, $include = false)
* @method ActiveQuery|UserWithCreate orYearLess($than, $include = false)
* @method ActiveQuery|UserWithCreate orYearNot($year)
* @method ActiveQuery|UserWithCreate orYearNotIn($array)
* @method ActiveQuery|UserWithCreate orYearNotLike($year)
* @method ActiveQuery|UserWithCreate orYearNotBetween($from, $to)
* @method ActiveQuery|UserWithCreate orYearNotMore($than, $include = false)
* @method ActiveQuery|UserWithCreate orYearNotLess($than, $include = false)
* @method ActiveQuery|UserWithCreate orYear($year)
 *
* @method ActiveQuery|UserWithCreate addressId($addressId)
* @method ActiveQuery|UserWithCreate addressIdIn($array)
* @method ActiveQuery|UserWithCreate addressIdLike($addressId)
* @method ActiveQuery|UserWithCreate addressIdBetween($from, $to)
* @method ActiveQuery|UserWithCreate addressIdMore($than, $include = false)
* @method ActiveQuery|UserWithCreate addressIdLess($than, $include = false)
* @method ActiveQuery|UserWithCreate addressIdNot($addressId)
* @method ActiveQuery|UserWithCreate addressIdNotIn($array)
* @method ActiveQuery|UserWithCreate addressIdNotLike($addressId)
* @method ActiveQuery|UserWithCreate addressIdNotBetween($from, $to)
* @method ActiveQuery|UserWithCreate addressIdNotMore($than, $include = false)
* @method ActiveQuery|UserWithCreate addressIdNotLess($than, $include = false)
* @method ActiveQuery|UserWithCreate andAddressId($addressId)
* @method ActiveQuery|UserWithCreate andAddressIdIn($array)
* @method ActiveQuery|UserWithCreate andAddressIdLike($addressId)
* @method ActiveQuery|UserWithCreate andAddressIdBetween($from, $to)
* @method ActiveQuery|UserWithCreate andAddressIdMore($than, $include = false)
* @method ActiveQuery|UserWithCreate andAddressIdLess($than, $include = false)
* @method ActiveQuery|UserWithCreate andAddressIdNot($addressId)
* @method ActiveQuery|UserWithCreate andAddressIdNotIn($array)
* @method ActiveQuery|UserWithCreate andAddressIdNotLike($addressId)
* @method ActiveQuery|UserWithCreate andAddressIdNotBetween($from, $to)
* @method ActiveQuery|UserWithCreate andAddressIdNotMore($than, $include = false)
* @method ActiveQuery|UserWithCreate andAddressIdNotLess($than, $include = false)
* @method ActiveQuery|UserWithCreate orAddressIdIn($array)
* @method ActiveQuery|UserWithCreate orAddressIdLike($addressId)
* @method ActiveQuery|UserWithCreate orAddressIdBetween($from, $to)
* @method ActiveQuery|UserWithCreate orAddressIdMore($than, $include = false)
* @method ActiveQuery|UserWithCreate orAddressIdLess($than, $include = false)
* @method ActiveQuery|UserWithCreate orAddressIdNot($addressId)
* @method ActiveQuery|UserWithCreate orAddressIdNotIn($array)
* @method ActiveQuery|UserWithCreate orAddressIdNotLike($addressId)
* @method ActiveQuery|UserWithCreate orAddressIdNotBetween($from, $to)
* @method ActiveQuery|UserWithCreate orAddressIdNotMore($than, $include = false)
* @method ActiveQuery|UserWithCreate orAddressIdNotLess($than, $include = false)
* @method ActiveQuery|UserWithCreate orAddressId($addressId)
 *
 */
class UserWithCreate extends \yii\db\ActiveRecord
{
        /**
     * @inheritdoc
     * @return UserWithCreateQuery|UserWithCreate
     */
    public static function find()
    {
        return new UserWithCreateQuery(get_called_class());
    }
        /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['year', 'address_id'], 'integer'],
            [['username', 'forename', 'surname'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'forename' => 'Forename',
            'surname' => 'Surname',
            'year' => 'Year',
            'address_id' => 'Address ID',
        ];
    }
}
