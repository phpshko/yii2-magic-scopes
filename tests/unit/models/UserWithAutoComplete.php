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
* @method ActiveQuery|UserWithAutoComplete id($id)
* @method ActiveQuery|UserWithAutoComplete idIn($array)
* @method ActiveQuery|UserWithAutoComplete idLike($id)
* @method ActiveQuery|UserWithAutoComplete idBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete idMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete idLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete idNot($id)
* @method ActiveQuery|UserWithAutoComplete idNotIn($array)
* @method ActiveQuery|UserWithAutoComplete idNotLike($id)
* @method ActiveQuery|UserWithAutoComplete idNotBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete idNotMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete idNotLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andId($id)
* @method ActiveQuery|UserWithAutoComplete andIdIn($array)
* @method ActiveQuery|UserWithAutoComplete andIdLike($id)
* @method ActiveQuery|UserWithAutoComplete andIdBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete andIdMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andIdLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andIdNot($id)
* @method ActiveQuery|UserWithAutoComplete andIdNotIn($array)
* @method ActiveQuery|UserWithAutoComplete andIdNotLike($id)
* @method ActiveQuery|UserWithAutoComplete andIdNotBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete andIdNotMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andIdNotLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orIdIn($array)
* @method ActiveQuery|UserWithAutoComplete orIdLike($id)
* @method ActiveQuery|UserWithAutoComplete orIdBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete orIdMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orIdLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orIdNot($id)
* @method ActiveQuery|UserWithAutoComplete orIdNotIn($array)
* @method ActiveQuery|UserWithAutoComplete orIdNotLike($id)
* @method ActiveQuery|UserWithAutoComplete orIdNotBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete orIdNotMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orIdNotLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orId($id)
 *
* @method ActiveQuery|UserWithAutoComplete username($username)
* @method ActiveQuery|UserWithAutoComplete usernameIn($array)
* @method ActiveQuery|UserWithAutoComplete usernameLike($username)
* @method ActiveQuery|UserWithAutoComplete usernameBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete usernameMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete usernameLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete usernameNot($username)
* @method ActiveQuery|UserWithAutoComplete usernameNotIn($array)
* @method ActiveQuery|UserWithAutoComplete usernameNotLike($username)
* @method ActiveQuery|UserWithAutoComplete usernameNotBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete usernameNotMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete usernameNotLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andUsername($username)
* @method ActiveQuery|UserWithAutoComplete andUsernameIn($array)
* @method ActiveQuery|UserWithAutoComplete andUsernameLike($username)
* @method ActiveQuery|UserWithAutoComplete andUsernameBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete andUsernameMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andUsernameLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andUsernameNot($username)
* @method ActiveQuery|UserWithAutoComplete andUsernameNotIn($array)
* @method ActiveQuery|UserWithAutoComplete andUsernameNotLike($username)
* @method ActiveQuery|UserWithAutoComplete andUsernameNotBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete andUsernameNotMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andUsernameNotLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orUsernameIn($array)
* @method ActiveQuery|UserWithAutoComplete orUsernameLike($username)
* @method ActiveQuery|UserWithAutoComplete orUsernameBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete orUsernameMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orUsernameLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orUsernameNot($username)
* @method ActiveQuery|UserWithAutoComplete orUsernameNotIn($array)
* @method ActiveQuery|UserWithAutoComplete orUsernameNotLike($username)
* @method ActiveQuery|UserWithAutoComplete orUsernameNotBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete orUsernameNotMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orUsernameNotLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orUsername($username)
 *
* @method ActiveQuery|UserWithAutoComplete forename($forename)
* @method ActiveQuery|UserWithAutoComplete forenameIn($array)
* @method ActiveQuery|UserWithAutoComplete forenameLike($forename)
* @method ActiveQuery|UserWithAutoComplete forenameBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete forenameMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete forenameLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete forenameNot($forename)
* @method ActiveQuery|UserWithAutoComplete forenameNotIn($array)
* @method ActiveQuery|UserWithAutoComplete forenameNotLike($forename)
* @method ActiveQuery|UserWithAutoComplete forenameNotBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete forenameNotMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete forenameNotLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andForename($forename)
* @method ActiveQuery|UserWithAutoComplete andForenameIn($array)
* @method ActiveQuery|UserWithAutoComplete andForenameLike($forename)
* @method ActiveQuery|UserWithAutoComplete andForenameBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete andForenameMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andForenameLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andForenameNot($forename)
* @method ActiveQuery|UserWithAutoComplete andForenameNotIn($array)
* @method ActiveQuery|UserWithAutoComplete andForenameNotLike($forename)
* @method ActiveQuery|UserWithAutoComplete andForenameNotBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete andForenameNotMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andForenameNotLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orForenameIn($array)
* @method ActiveQuery|UserWithAutoComplete orForenameLike($forename)
* @method ActiveQuery|UserWithAutoComplete orForenameBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete orForenameMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orForenameLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orForenameNot($forename)
* @method ActiveQuery|UserWithAutoComplete orForenameNotIn($array)
* @method ActiveQuery|UserWithAutoComplete orForenameNotLike($forename)
* @method ActiveQuery|UserWithAutoComplete orForenameNotBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete orForenameNotMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orForenameNotLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orForename($forename)
 *
* @method ActiveQuery|UserWithAutoComplete surname($surname)
* @method ActiveQuery|UserWithAutoComplete surnameIn($array)
* @method ActiveQuery|UserWithAutoComplete surnameLike($surname)
* @method ActiveQuery|UserWithAutoComplete surnameBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete surnameMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete surnameLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete surnameNot($surname)
* @method ActiveQuery|UserWithAutoComplete surnameNotIn($array)
* @method ActiveQuery|UserWithAutoComplete surnameNotLike($surname)
* @method ActiveQuery|UserWithAutoComplete surnameNotBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete surnameNotMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete surnameNotLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andSurname($surname)
* @method ActiveQuery|UserWithAutoComplete andSurnameIn($array)
* @method ActiveQuery|UserWithAutoComplete andSurnameLike($surname)
* @method ActiveQuery|UserWithAutoComplete andSurnameBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete andSurnameMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andSurnameLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andSurnameNot($surname)
* @method ActiveQuery|UserWithAutoComplete andSurnameNotIn($array)
* @method ActiveQuery|UserWithAutoComplete andSurnameNotLike($surname)
* @method ActiveQuery|UserWithAutoComplete andSurnameNotBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete andSurnameNotMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andSurnameNotLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orSurnameIn($array)
* @method ActiveQuery|UserWithAutoComplete orSurnameLike($surname)
* @method ActiveQuery|UserWithAutoComplete orSurnameBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete orSurnameMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orSurnameLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orSurnameNot($surname)
* @method ActiveQuery|UserWithAutoComplete orSurnameNotIn($array)
* @method ActiveQuery|UserWithAutoComplete orSurnameNotLike($surname)
* @method ActiveQuery|UserWithAutoComplete orSurnameNotBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete orSurnameNotMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orSurnameNotLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orSurname($surname)
 *
* @method ActiveQuery|UserWithAutoComplete year($year)
* @method ActiveQuery|UserWithAutoComplete yearIn($array)
* @method ActiveQuery|UserWithAutoComplete yearLike($year)
* @method ActiveQuery|UserWithAutoComplete yearBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete yearMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete yearLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete yearNot($year)
* @method ActiveQuery|UserWithAutoComplete yearNotIn($array)
* @method ActiveQuery|UserWithAutoComplete yearNotLike($year)
* @method ActiveQuery|UserWithAutoComplete yearNotBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete yearNotMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete yearNotLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andYear($year)
* @method ActiveQuery|UserWithAutoComplete andYearIn($array)
* @method ActiveQuery|UserWithAutoComplete andYearLike($year)
* @method ActiveQuery|UserWithAutoComplete andYearBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete andYearMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andYearLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andYearNot($year)
* @method ActiveQuery|UserWithAutoComplete andYearNotIn($array)
* @method ActiveQuery|UserWithAutoComplete andYearNotLike($year)
* @method ActiveQuery|UserWithAutoComplete andYearNotBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete andYearNotMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andYearNotLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orYearIn($array)
* @method ActiveQuery|UserWithAutoComplete orYearLike($year)
* @method ActiveQuery|UserWithAutoComplete orYearBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete orYearMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orYearLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orYearNot($year)
* @method ActiveQuery|UserWithAutoComplete orYearNotIn($array)
* @method ActiveQuery|UserWithAutoComplete orYearNotLike($year)
* @method ActiveQuery|UserWithAutoComplete orYearNotBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete orYearNotMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orYearNotLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orYear($year)
 *
* @method ActiveQuery|UserWithAutoComplete addressId($addressId)
* @method ActiveQuery|UserWithAutoComplete addressIdIn($array)
* @method ActiveQuery|UserWithAutoComplete addressIdLike($addressId)
* @method ActiveQuery|UserWithAutoComplete addressIdBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete addressIdMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete addressIdLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete addressIdNot($addressId)
* @method ActiveQuery|UserWithAutoComplete addressIdNotIn($array)
* @method ActiveQuery|UserWithAutoComplete addressIdNotLike($addressId)
* @method ActiveQuery|UserWithAutoComplete addressIdNotBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete addressIdNotMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete addressIdNotLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andAddressId($addressId)
* @method ActiveQuery|UserWithAutoComplete andAddressIdIn($array)
* @method ActiveQuery|UserWithAutoComplete andAddressIdLike($addressId)
* @method ActiveQuery|UserWithAutoComplete andAddressIdBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete andAddressIdMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andAddressIdLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andAddressIdNot($addressId)
* @method ActiveQuery|UserWithAutoComplete andAddressIdNotIn($array)
* @method ActiveQuery|UserWithAutoComplete andAddressIdNotLike($addressId)
* @method ActiveQuery|UserWithAutoComplete andAddressIdNotBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete andAddressIdNotMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete andAddressIdNotLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orAddressIdIn($array)
* @method ActiveQuery|UserWithAutoComplete orAddressIdLike($addressId)
* @method ActiveQuery|UserWithAutoComplete orAddressIdBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete orAddressIdMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orAddressIdLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orAddressIdNot($addressId)
* @method ActiveQuery|UserWithAutoComplete orAddressIdNotIn($array)
* @method ActiveQuery|UserWithAutoComplete orAddressIdNotLike($addressId)
* @method ActiveQuery|UserWithAutoComplete orAddressIdNotBetween($from, $to)
* @method ActiveQuery|UserWithAutoComplete orAddressIdNotMore($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orAddressIdNotLess($than, $include = false)
* @method ActiveQuery|UserWithAutoComplete orAddressId($addressId)
 *
 */
class UserWithAutoComplete extends \yii\db\ActiveRecord
{
        /**
     * @inheritdoc
     * @return MagicActiveQuery|MagicAutoComplete|UserWithAutoComplete
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
