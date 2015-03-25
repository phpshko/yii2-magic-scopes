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
* @method ActiveQuery|UserWithMagic id($id)
* @method ActiveQuery|UserWithMagic idIn($array)
* @method ActiveQuery|UserWithMagic idLike($id)
* @method ActiveQuery|UserWithMagic idBetween($from, $to)
* @method ActiveQuery|UserWithMagic idMore($than, $include = false)
* @method ActiveQuery|UserWithMagic idLess($than, $include = false)
* @method ActiveQuery|UserWithMagic idNot($id)
* @method ActiveQuery|UserWithMagic idNotIn($array)
* @method ActiveQuery|UserWithMagic idNotLike($id)
* @method ActiveQuery|UserWithMagic idNotBetween($from, $to)
* @method ActiveQuery|UserWithMagic idNotMore($than, $include = false)
* @method ActiveQuery|UserWithMagic idNotLess($than, $include = false)
* @method ActiveQuery|UserWithMagic andId($id)
* @method ActiveQuery|UserWithMagic andIdIn($array)
* @method ActiveQuery|UserWithMagic andIdLike($id)
* @method ActiveQuery|UserWithMagic andIdBetween($from, $to)
* @method ActiveQuery|UserWithMagic andIdMore($than, $include = false)
* @method ActiveQuery|UserWithMagic andIdLess($than, $include = false)
* @method ActiveQuery|UserWithMagic andIdNot($id)
* @method ActiveQuery|UserWithMagic andIdNotIn($array)
* @method ActiveQuery|UserWithMagic andIdNotLike($id)
* @method ActiveQuery|UserWithMagic andIdNotBetween($from, $to)
* @method ActiveQuery|UserWithMagic andIdNotMore($than, $include = false)
* @method ActiveQuery|UserWithMagic andIdNotLess($than, $include = false)
* @method ActiveQuery|UserWithMagic orIdIn($array)
* @method ActiveQuery|UserWithMagic orIdLike($id)
* @method ActiveQuery|UserWithMagic orIdBetween($from, $to)
* @method ActiveQuery|UserWithMagic orIdMore($than, $include = false)
* @method ActiveQuery|UserWithMagic orIdLess($than, $include = false)
* @method ActiveQuery|UserWithMagic orIdNot($id)
* @method ActiveQuery|UserWithMagic orIdNotIn($array)
* @method ActiveQuery|UserWithMagic orIdNotLike($id)
* @method ActiveQuery|UserWithMagic orIdNotBetween($from, $to)
* @method ActiveQuery|UserWithMagic orIdNotMore($than, $include = false)
* @method ActiveQuery|UserWithMagic orIdNotLess($than, $include = false)
* @method ActiveQuery|UserWithMagic orId($id)
 *
* @method ActiveQuery|UserWithMagic username($username)
* @method ActiveQuery|UserWithMagic usernameIn($array)
* @method ActiveQuery|UserWithMagic usernameLike($username)
* @method ActiveQuery|UserWithMagic usernameBetween($from, $to)
* @method ActiveQuery|UserWithMagic usernameMore($than, $include = false)
* @method ActiveQuery|UserWithMagic usernameLess($than, $include = false)
* @method ActiveQuery|UserWithMagic usernameNot($username)
* @method ActiveQuery|UserWithMagic usernameNotIn($array)
* @method ActiveQuery|UserWithMagic usernameNotLike($username)
* @method ActiveQuery|UserWithMagic usernameNotBetween($from, $to)
* @method ActiveQuery|UserWithMagic usernameNotMore($than, $include = false)
* @method ActiveQuery|UserWithMagic usernameNotLess($than, $include = false)
* @method ActiveQuery|UserWithMagic andUsername($username)
* @method ActiveQuery|UserWithMagic andUsernameIn($array)
* @method ActiveQuery|UserWithMagic andUsernameLike($username)
* @method ActiveQuery|UserWithMagic andUsernameBetween($from, $to)
* @method ActiveQuery|UserWithMagic andUsernameMore($than, $include = false)
* @method ActiveQuery|UserWithMagic andUsernameLess($than, $include = false)
* @method ActiveQuery|UserWithMagic andUsernameNot($username)
* @method ActiveQuery|UserWithMagic andUsernameNotIn($array)
* @method ActiveQuery|UserWithMagic andUsernameNotLike($username)
* @method ActiveQuery|UserWithMagic andUsernameNotBetween($from, $to)
* @method ActiveQuery|UserWithMagic andUsernameNotMore($than, $include = false)
* @method ActiveQuery|UserWithMagic andUsernameNotLess($than, $include = false)
* @method ActiveQuery|UserWithMagic orUsernameIn($array)
* @method ActiveQuery|UserWithMagic orUsernameLike($username)
* @method ActiveQuery|UserWithMagic orUsernameBetween($from, $to)
* @method ActiveQuery|UserWithMagic orUsernameMore($than, $include = false)
* @method ActiveQuery|UserWithMagic orUsernameLess($than, $include = false)
* @method ActiveQuery|UserWithMagic orUsernameNot($username)
* @method ActiveQuery|UserWithMagic orUsernameNotIn($array)
* @method ActiveQuery|UserWithMagic orUsernameNotLike($username)
* @method ActiveQuery|UserWithMagic orUsernameNotBetween($from, $to)
* @method ActiveQuery|UserWithMagic orUsernameNotMore($than, $include = false)
* @method ActiveQuery|UserWithMagic orUsernameNotLess($than, $include = false)
* @method ActiveQuery|UserWithMagic orUsername($username)
 *
* @method ActiveQuery|UserWithMagic forename($forename)
* @method ActiveQuery|UserWithMagic forenameIn($array)
* @method ActiveQuery|UserWithMagic forenameLike($forename)
* @method ActiveQuery|UserWithMagic forenameBetween($from, $to)
* @method ActiveQuery|UserWithMagic forenameMore($than, $include = false)
* @method ActiveQuery|UserWithMagic forenameLess($than, $include = false)
* @method ActiveQuery|UserWithMagic forenameNot($forename)
* @method ActiveQuery|UserWithMagic forenameNotIn($array)
* @method ActiveQuery|UserWithMagic forenameNotLike($forename)
* @method ActiveQuery|UserWithMagic forenameNotBetween($from, $to)
* @method ActiveQuery|UserWithMagic forenameNotMore($than, $include = false)
* @method ActiveQuery|UserWithMagic forenameNotLess($than, $include = false)
* @method ActiveQuery|UserWithMagic andForename($forename)
* @method ActiveQuery|UserWithMagic andForenameIn($array)
* @method ActiveQuery|UserWithMagic andForenameLike($forename)
* @method ActiveQuery|UserWithMagic andForenameBetween($from, $to)
* @method ActiveQuery|UserWithMagic andForenameMore($than, $include = false)
* @method ActiveQuery|UserWithMagic andForenameLess($than, $include = false)
* @method ActiveQuery|UserWithMagic andForenameNot($forename)
* @method ActiveQuery|UserWithMagic andForenameNotIn($array)
* @method ActiveQuery|UserWithMagic andForenameNotLike($forename)
* @method ActiveQuery|UserWithMagic andForenameNotBetween($from, $to)
* @method ActiveQuery|UserWithMagic andForenameNotMore($than, $include = false)
* @method ActiveQuery|UserWithMagic andForenameNotLess($than, $include = false)
* @method ActiveQuery|UserWithMagic orForenameIn($array)
* @method ActiveQuery|UserWithMagic orForenameLike($forename)
* @method ActiveQuery|UserWithMagic orForenameBetween($from, $to)
* @method ActiveQuery|UserWithMagic orForenameMore($than, $include = false)
* @method ActiveQuery|UserWithMagic orForenameLess($than, $include = false)
* @method ActiveQuery|UserWithMagic orForenameNot($forename)
* @method ActiveQuery|UserWithMagic orForenameNotIn($array)
* @method ActiveQuery|UserWithMagic orForenameNotLike($forename)
* @method ActiveQuery|UserWithMagic orForenameNotBetween($from, $to)
* @method ActiveQuery|UserWithMagic orForenameNotMore($than, $include = false)
* @method ActiveQuery|UserWithMagic orForenameNotLess($than, $include = false)
* @method ActiveQuery|UserWithMagic orForename($forename)
 *
* @method ActiveQuery|UserWithMagic surname($surname)
* @method ActiveQuery|UserWithMagic surnameIn($array)
* @method ActiveQuery|UserWithMagic surnameLike($surname)
* @method ActiveQuery|UserWithMagic surnameBetween($from, $to)
* @method ActiveQuery|UserWithMagic surnameMore($than, $include = false)
* @method ActiveQuery|UserWithMagic surnameLess($than, $include = false)
* @method ActiveQuery|UserWithMagic surnameNot($surname)
* @method ActiveQuery|UserWithMagic surnameNotIn($array)
* @method ActiveQuery|UserWithMagic surnameNotLike($surname)
* @method ActiveQuery|UserWithMagic surnameNotBetween($from, $to)
* @method ActiveQuery|UserWithMagic surnameNotMore($than, $include = false)
* @method ActiveQuery|UserWithMagic surnameNotLess($than, $include = false)
* @method ActiveQuery|UserWithMagic andSurname($surname)
* @method ActiveQuery|UserWithMagic andSurnameIn($array)
* @method ActiveQuery|UserWithMagic andSurnameLike($surname)
* @method ActiveQuery|UserWithMagic andSurnameBetween($from, $to)
* @method ActiveQuery|UserWithMagic andSurnameMore($than, $include = false)
* @method ActiveQuery|UserWithMagic andSurnameLess($than, $include = false)
* @method ActiveQuery|UserWithMagic andSurnameNot($surname)
* @method ActiveQuery|UserWithMagic andSurnameNotIn($array)
* @method ActiveQuery|UserWithMagic andSurnameNotLike($surname)
* @method ActiveQuery|UserWithMagic andSurnameNotBetween($from, $to)
* @method ActiveQuery|UserWithMagic andSurnameNotMore($than, $include = false)
* @method ActiveQuery|UserWithMagic andSurnameNotLess($than, $include = false)
* @method ActiveQuery|UserWithMagic orSurnameIn($array)
* @method ActiveQuery|UserWithMagic orSurnameLike($surname)
* @method ActiveQuery|UserWithMagic orSurnameBetween($from, $to)
* @method ActiveQuery|UserWithMagic orSurnameMore($than, $include = false)
* @method ActiveQuery|UserWithMagic orSurnameLess($than, $include = false)
* @method ActiveQuery|UserWithMagic orSurnameNot($surname)
* @method ActiveQuery|UserWithMagic orSurnameNotIn($array)
* @method ActiveQuery|UserWithMagic orSurnameNotLike($surname)
* @method ActiveQuery|UserWithMagic orSurnameNotBetween($from, $to)
* @method ActiveQuery|UserWithMagic orSurnameNotMore($than, $include = false)
* @method ActiveQuery|UserWithMagic orSurnameNotLess($than, $include = false)
* @method ActiveQuery|UserWithMagic orSurname($surname)
 *
* @method ActiveQuery|UserWithMagic year($year)
* @method ActiveQuery|UserWithMagic yearIn($array)
* @method ActiveQuery|UserWithMagic yearLike($year)
* @method ActiveQuery|UserWithMagic yearBetween($from, $to)
* @method ActiveQuery|UserWithMagic yearMore($than, $include = false)
* @method ActiveQuery|UserWithMagic yearLess($than, $include = false)
* @method ActiveQuery|UserWithMagic yearNot($year)
* @method ActiveQuery|UserWithMagic yearNotIn($array)
* @method ActiveQuery|UserWithMagic yearNotLike($year)
* @method ActiveQuery|UserWithMagic yearNotBetween($from, $to)
* @method ActiveQuery|UserWithMagic yearNotMore($than, $include = false)
* @method ActiveQuery|UserWithMagic yearNotLess($than, $include = false)
* @method ActiveQuery|UserWithMagic andYear($year)
* @method ActiveQuery|UserWithMagic andYearIn($array)
* @method ActiveQuery|UserWithMagic andYearLike($year)
* @method ActiveQuery|UserWithMagic andYearBetween($from, $to)
* @method ActiveQuery|UserWithMagic andYearMore($than, $include = false)
* @method ActiveQuery|UserWithMagic andYearLess($than, $include = false)
* @method ActiveQuery|UserWithMagic andYearNot($year)
* @method ActiveQuery|UserWithMagic andYearNotIn($array)
* @method ActiveQuery|UserWithMagic andYearNotLike($year)
* @method ActiveQuery|UserWithMagic andYearNotBetween($from, $to)
* @method ActiveQuery|UserWithMagic andYearNotMore($than, $include = false)
* @method ActiveQuery|UserWithMagic andYearNotLess($than, $include = false)
* @method ActiveQuery|UserWithMagic orYearIn($array)
* @method ActiveQuery|UserWithMagic orYearLike($year)
* @method ActiveQuery|UserWithMagic orYearBetween($from, $to)
* @method ActiveQuery|UserWithMagic orYearMore($than, $include = false)
* @method ActiveQuery|UserWithMagic orYearLess($than, $include = false)
* @method ActiveQuery|UserWithMagic orYearNot($year)
* @method ActiveQuery|UserWithMagic orYearNotIn($array)
* @method ActiveQuery|UserWithMagic orYearNotLike($year)
* @method ActiveQuery|UserWithMagic orYearNotBetween($from, $to)
* @method ActiveQuery|UserWithMagic orYearNotMore($than, $include = false)
* @method ActiveQuery|UserWithMagic orYearNotLess($than, $include = false)
* @method ActiveQuery|UserWithMagic orYear($year)
 *
* @method ActiveQuery|UserWithMagic addressId($addressId)
* @method ActiveQuery|UserWithMagic addressIdIn($array)
* @method ActiveQuery|UserWithMagic addressIdLike($addressId)
* @method ActiveQuery|UserWithMagic addressIdBetween($from, $to)
* @method ActiveQuery|UserWithMagic addressIdMore($than, $include = false)
* @method ActiveQuery|UserWithMagic addressIdLess($than, $include = false)
* @method ActiveQuery|UserWithMagic addressIdNot($addressId)
* @method ActiveQuery|UserWithMagic addressIdNotIn($array)
* @method ActiveQuery|UserWithMagic addressIdNotLike($addressId)
* @method ActiveQuery|UserWithMagic addressIdNotBetween($from, $to)
* @method ActiveQuery|UserWithMagic addressIdNotMore($than, $include = false)
* @method ActiveQuery|UserWithMagic addressIdNotLess($than, $include = false)
* @method ActiveQuery|UserWithMagic andAddressId($addressId)
* @method ActiveQuery|UserWithMagic andAddressIdIn($array)
* @method ActiveQuery|UserWithMagic andAddressIdLike($addressId)
* @method ActiveQuery|UserWithMagic andAddressIdBetween($from, $to)
* @method ActiveQuery|UserWithMagic andAddressIdMore($than, $include = false)
* @method ActiveQuery|UserWithMagic andAddressIdLess($than, $include = false)
* @method ActiveQuery|UserWithMagic andAddressIdNot($addressId)
* @method ActiveQuery|UserWithMagic andAddressIdNotIn($array)
* @method ActiveQuery|UserWithMagic andAddressIdNotLike($addressId)
* @method ActiveQuery|UserWithMagic andAddressIdNotBetween($from, $to)
* @method ActiveQuery|UserWithMagic andAddressIdNotMore($than, $include = false)
* @method ActiveQuery|UserWithMagic andAddressIdNotLess($than, $include = false)
* @method ActiveQuery|UserWithMagic orAddressIdIn($array)
* @method ActiveQuery|UserWithMagic orAddressIdLike($addressId)
* @method ActiveQuery|UserWithMagic orAddressIdBetween($from, $to)
* @method ActiveQuery|UserWithMagic orAddressIdMore($than, $include = false)
* @method ActiveQuery|UserWithMagic orAddressIdLess($than, $include = false)
* @method ActiveQuery|UserWithMagic orAddressIdNot($addressId)
* @method ActiveQuery|UserWithMagic orAddressIdNotIn($array)
* @method ActiveQuery|UserWithMagic orAddressIdNotLike($addressId)
* @method ActiveQuery|UserWithMagic orAddressIdNotBetween($from, $to)
* @method ActiveQuery|UserWithMagic orAddressIdNotMore($than, $include = false)
* @method ActiveQuery|UserWithMagic orAddressIdNotLess($than, $include = false)
* @method ActiveQuery|UserWithMagic orAddressId($addressId)
 *
 */
class UserWithMagic extends \yii\db\ActiveRecord
{
        /**
     * @inheritdoc
     * @return MagicActiveQuery|UserWithMagic
     */
    public static function find()
    {
        return new MagicActiveQuery(get_called_class());
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
