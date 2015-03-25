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
* @method ActiveQuery|UserWithAttach id($id)
* @method ActiveQuery|UserWithAttach idIn($array)
* @method ActiveQuery|UserWithAttach idLike($id)
* @method ActiveQuery|UserWithAttach idBetween($from, $to)
* @method ActiveQuery|UserWithAttach idMore($than, $include = false)
* @method ActiveQuery|UserWithAttach idLess($than, $include = false)
* @method ActiveQuery|UserWithAttach idNot($id)
* @method ActiveQuery|UserWithAttach idNotIn($array)
* @method ActiveQuery|UserWithAttach idNotLike($id)
* @method ActiveQuery|UserWithAttach idNotBetween($from, $to)
* @method ActiveQuery|UserWithAttach idNotMore($than, $include = false)
* @method ActiveQuery|UserWithAttach idNotLess($than, $include = false)
* @method ActiveQuery|UserWithAttach andId($id)
* @method ActiveQuery|UserWithAttach andIdIn($array)
* @method ActiveQuery|UserWithAttach andIdLike($id)
* @method ActiveQuery|UserWithAttach andIdBetween($from, $to)
* @method ActiveQuery|UserWithAttach andIdMore($than, $include = false)
* @method ActiveQuery|UserWithAttach andIdLess($than, $include = false)
* @method ActiveQuery|UserWithAttach andIdNot($id)
* @method ActiveQuery|UserWithAttach andIdNotIn($array)
* @method ActiveQuery|UserWithAttach andIdNotLike($id)
* @method ActiveQuery|UserWithAttach andIdNotBetween($from, $to)
* @method ActiveQuery|UserWithAttach andIdNotMore($than, $include = false)
* @method ActiveQuery|UserWithAttach andIdNotLess($than, $include = false)
* @method ActiveQuery|UserWithAttach orIdIn($array)
* @method ActiveQuery|UserWithAttach orIdLike($id)
* @method ActiveQuery|UserWithAttach orIdBetween($from, $to)
* @method ActiveQuery|UserWithAttach orIdMore($than, $include = false)
* @method ActiveQuery|UserWithAttach orIdLess($than, $include = false)
* @method ActiveQuery|UserWithAttach orIdNot($id)
* @method ActiveQuery|UserWithAttach orIdNotIn($array)
* @method ActiveQuery|UserWithAttach orIdNotLike($id)
* @method ActiveQuery|UserWithAttach orIdNotBetween($from, $to)
* @method ActiveQuery|UserWithAttach orIdNotMore($than, $include = false)
* @method ActiveQuery|UserWithAttach orIdNotLess($than, $include = false)
* @method ActiveQuery|UserWithAttach orId($id)
 *
* @method ActiveQuery|UserWithAttach username($username)
* @method ActiveQuery|UserWithAttach usernameIn($array)
* @method ActiveQuery|UserWithAttach usernameLike($username)
* @method ActiveQuery|UserWithAttach usernameBetween($from, $to)
* @method ActiveQuery|UserWithAttach usernameMore($than, $include = false)
* @method ActiveQuery|UserWithAttach usernameLess($than, $include = false)
* @method ActiveQuery|UserWithAttach usernameNot($username)
* @method ActiveQuery|UserWithAttach usernameNotIn($array)
* @method ActiveQuery|UserWithAttach usernameNotLike($username)
* @method ActiveQuery|UserWithAttach usernameNotBetween($from, $to)
* @method ActiveQuery|UserWithAttach usernameNotMore($than, $include = false)
* @method ActiveQuery|UserWithAttach usernameNotLess($than, $include = false)
* @method ActiveQuery|UserWithAttach andUsername($username)
* @method ActiveQuery|UserWithAttach andUsernameIn($array)
* @method ActiveQuery|UserWithAttach andUsernameLike($username)
* @method ActiveQuery|UserWithAttach andUsernameBetween($from, $to)
* @method ActiveQuery|UserWithAttach andUsernameMore($than, $include = false)
* @method ActiveQuery|UserWithAttach andUsernameLess($than, $include = false)
* @method ActiveQuery|UserWithAttach andUsernameNot($username)
* @method ActiveQuery|UserWithAttach andUsernameNotIn($array)
* @method ActiveQuery|UserWithAttach andUsernameNotLike($username)
* @method ActiveQuery|UserWithAttach andUsernameNotBetween($from, $to)
* @method ActiveQuery|UserWithAttach andUsernameNotMore($than, $include = false)
* @method ActiveQuery|UserWithAttach andUsernameNotLess($than, $include = false)
* @method ActiveQuery|UserWithAttach orUsernameIn($array)
* @method ActiveQuery|UserWithAttach orUsernameLike($username)
* @method ActiveQuery|UserWithAttach orUsernameBetween($from, $to)
* @method ActiveQuery|UserWithAttach orUsernameMore($than, $include = false)
* @method ActiveQuery|UserWithAttach orUsernameLess($than, $include = false)
* @method ActiveQuery|UserWithAttach orUsernameNot($username)
* @method ActiveQuery|UserWithAttach orUsernameNotIn($array)
* @method ActiveQuery|UserWithAttach orUsernameNotLike($username)
* @method ActiveQuery|UserWithAttach orUsernameNotBetween($from, $to)
* @method ActiveQuery|UserWithAttach orUsernameNotMore($than, $include = false)
* @method ActiveQuery|UserWithAttach orUsernameNotLess($than, $include = false)
* @method ActiveQuery|UserWithAttach orUsername($username)
 *
* @method ActiveQuery|UserWithAttach forename($forename)
* @method ActiveQuery|UserWithAttach forenameIn($array)
* @method ActiveQuery|UserWithAttach forenameLike($forename)
* @method ActiveQuery|UserWithAttach forenameBetween($from, $to)
* @method ActiveQuery|UserWithAttach forenameMore($than, $include = false)
* @method ActiveQuery|UserWithAttach forenameLess($than, $include = false)
* @method ActiveQuery|UserWithAttach forenameNot($forename)
* @method ActiveQuery|UserWithAttach forenameNotIn($array)
* @method ActiveQuery|UserWithAttach forenameNotLike($forename)
* @method ActiveQuery|UserWithAttach forenameNotBetween($from, $to)
* @method ActiveQuery|UserWithAttach forenameNotMore($than, $include = false)
* @method ActiveQuery|UserWithAttach forenameNotLess($than, $include = false)
* @method ActiveQuery|UserWithAttach andForename($forename)
* @method ActiveQuery|UserWithAttach andForenameIn($array)
* @method ActiveQuery|UserWithAttach andForenameLike($forename)
* @method ActiveQuery|UserWithAttach andForenameBetween($from, $to)
* @method ActiveQuery|UserWithAttach andForenameMore($than, $include = false)
* @method ActiveQuery|UserWithAttach andForenameLess($than, $include = false)
* @method ActiveQuery|UserWithAttach andForenameNot($forename)
* @method ActiveQuery|UserWithAttach andForenameNotIn($array)
* @method ActiveQuery|UserWithAttach andForenameNotLike($forename)
* @method ActiveQuery|UserWithAttach andForenameNotBetween($from, $to)
* @method ActiveQuery|UserWithAttach andForenameNotMore($than, $include = false)
* @method ActiveQuery|UserWithAttach andForenameNotLess($than, $include = false)
* @method ActiveQuery|UserWithAttach orForenameIn($array)
* @method ActiveQuery|UserWithAttach orForenameLike($forename)
* @method ActiveQuery|UserWithAttach orForenameBetween($from, $to)
* @method ActiveQuery|UserWithAttach orForenameMore($than, $include = false)
* @method ActiveQuery|UserWithAttach orForenameLess($than, $include = false)
* @method ActiveQuery|UserWithAttach orForenameNot($forename)
* @method ActiveQuery|UserWithAttach orForenameNotIn($array)
* @method ActiveQuery|UserWithAttach orForenameNotLike($forename)
* @method ActiveQuery|UserWithAttach orForenameNotBetween($from, $to)
* @method ActiveQuery|UserWithAttach orForenameNotMore($than, $include = false)
* @method ActiveQuery|UserWithAttach orForenameNotLess($than, $include = false)
* @method ActiveQuery|UserWithAttach orForename($forename)
 *
* @method ActiveQuery|UserWithAttach surname($surname)
* @method ActiveQuery|UserWithAttach surnameIn($array)
* @method ActiveQuery|UserWithAttach surnameLike($surname)
* @method ActiveQuery|UserWithAttach surnameBetween($from, $to)
* @method ActiveQuery|UserWithAttach surnameMore($than, $include = false)
* @method ActiveQuery|UserWithAttach surnameLess($than, $include = false)
* @method ActiveQuery|UserWithAttach surnameNot($surname)
* @method ActiveQuery|UserWithAttach surnameNotIn($array)
* @method ActiveQuery|UserWithAttach surnameNotLike($surname)
* @method ActiveQuery|UserWithAttach surnameNotBetween($from, $to)
* @method ActiveQuery|UserWithAttach surnameNotMore($than, $include = false)
* @method ActiveQuery|UserWithAttach surnameNotLess($than, $include = false)
* @method ActiveQuery|UserWithAttach andSurname($surname)
* @method ActiveQuery|UserWithAttach andSurnameIn($array)
* @method ActiveQuery|UserWithAttach andSurnameLike($surname)
* @method ActiveQuery|UserWithAttach andSurnameBetween($from, $to)
* @method ActiveQuery|UserWithAttach andSurnameMore($than, $include = false)
* @method ActiveQuery|UserWithAttach andSurnameLess($than, $include = false)
* @method ActiveQuery|UserWithAttach andSurnameNot($surname)
* @method ActiveQuery|UserWithAttach andSurnameNotIn($array)
* @method ActiveQuery|UserWithAttach andSurnameNotLike($surname)
* @method ActiveQuery|UserWithAttach andSurnameNotBetween($from, $to)
* @method ActiveQuery|UserWithAttach andSurnameNotMore($than, $include = false)
* @method ActiveQuery|UserWithAttach andSurnameNotLess($than, $include = false)
* @method ActiveQuery|UserWithAttach orSurnameIn($array)
* @method ActiveQuery|UserWithAttach orSurnameLike($surname)
* @method ActiveQuery|UserWithAttach orSurnameBetween($from, $to)
* @method ActiveQuery|UserWithAttach orSurnameMore($than, $include = false)
* @method ActiveQuery|UserWithAttach orSurnameLess($than, $include = false)
* @method ActiveQuery|UserWithAttach orSurnameNot($surname)
* @method ActiveQuery|UserWithAttach orSurnameNotIn($array)
* @method ActiveQuery|UserWithAttach orSurnameNotLike($surname)
* @method ActiveQuery|UserWithAttach orSurnameNotBetween($from, $to)
* @method ActiveQuery|UserWithAttach orSurnameNotMore($than, $include = false)
* @method ActiveQuery|UserWithAttach orSurnameNotLess($than, $include = false)
* @method ActiveQuery|UserWithAttach orSurname($surname)
 *
* @method ActiveQuery|UserWithAttach year($year)
* @method ActiveQuery|UserWithAttach yearIn($array)
* @method ActiveQuery|UserWithAttach yearLike($year)
* @method ActiveQuery|UserWithAttach yearBetween($from, $to)
* @method ActiveQuery|UserWithAttach yearMore($than, $include = false)
* @method ActiveQuery|UserWithAttach yearLess($than, $include = false)
* @method ActiveQuery|UserWithAttach yearNot($year)
* @method ActiveQuery|UserWithAttach yearNotIn($array)
* @method ActiveQuery|UserWithAttach yearNotLike($year)
* @method ActiveQuery|UserWithAttach yearNotBetween($from, $to)
* @method ActiveQuery|UserWithAttach yearNotMore($than, $include = false)
* @method ActiveQuery|UserWithAttach yearNotLess($than, $include = false)
* @method ActiveQuery|UserWithAttach andYear($year)
* @method ActiveQuery|UserWithAttach andYearIn($array)
* @method ActiveQuery|UserWithAttach andYearLike($year)
* @method ActiveQuery|UserWithAttach andYearBetween($from, $to)
* @method ActiveQuery|UserWithAttach andYearMore($than, $include = false)
* @method ActiveQuery|UserWithAttach andYearLess($than, $include = false)
* @method ActiveQuery|UserWithAttach andYearNot($year)
* @method ActiveQuery|UserWithAttach andYearNotIn($array)
* @method ActiveQuery|UserWithAttach andYearNotLike($year)
* @method ActiveQuery|UserWithAttach andYearNotBetween($from, $to)
* @method ActiveQuery|UserWithAttach andYearNotMore($than, $include = false)
* @method ActiveQuery|UserWithAttach andYearNotLess($than, $include = false)
* @method ActiveQuery|UserWithAttach orYearIn($array)
* @method ActiveQuery|UserWithAttach orYearLike($year)
* @method ActiveQuery|UserWithAttach orYearBetween($from, $to)
* @method ActiveQuery|UserWithAttach orYearMore($than, $include = false)
* @method ActiveQuery|UserWithAttach orYearLess($than, $include = false)
* @method ActiveQuery|UserWithAttach orYearNot($year)
* @method ActiveQuery|UserWithAttach orYearNotIn($array)
* @method ActiveQuery|UserWithAttach orYearNotLike($year)
* @method ActiveQuery|UserWithAttach orYearNotBetween($from, $to)
* @method ActiveQuery|UserWithAttach orYearNotMore($than, $include = false)
* @method ActiveQuery|UserWithAttach orYearNotLess($than, $include = false)
* @method ActiveQuery|UserWithAttach orYear($year)
 *
* @method ActiveQuery|UserWithAttach addressId($addressId)
* @method ActiveQuery|UserWithAttach addressIdIn($array)
* @method ActiveQuery|UserWithAttach addressIdLike($addressId)
* @method ActiveQuery|UserWithAttach addressIdBetween($from, $to)
* @method ActiveQuery|UserWithAttach addressIdMore($than, $include = false)
* @method ActiveQuery|UserWithAttach addressIdLess($than, $include = false)
* @method ActiveQuery|UserWithAttach addressIdNot($addressId)
* @method ActiveQuery|UserWithAttach addressIdNotIn($array)
* @method ActiveQuery|UserWithAttach addressIdNotLike($addressId)
* @method ActiveQuery|UserWithAttach addressIdNotBetween($from, $to)
* @method ActiveQuery|UserWithAttach addressIdNotMore($than, $include = false)
* @method ActiveQuery|UserWithAttach addressIdNotLess($than, $include = false)
* @method ActiveQuery|UserWithAttach andAddressId($addressId)
* @method ActiveQuery|UserWithAttach andAddressIdIn($array)
* @method ActiveQuery|UserWithAttach andAddressIdLike($addressId)
* @method ActiveQuery|UserWithAttach andAddressIdBetween($from, $to)
* @method ActiveQuery|UserWithAttach andAddressIdMore($than, $include = false)
* @method ActiveQuery|UserWithAttach andAddressIdLess($than, $include = false)
* @method ActiveQuery|UserWithAttach andAddressIdNot($addressId)
* @method ActiveQuery|UserWithAttach andAddressIdNotIn($array)
* @method ActiveQuery|UserWithAttach andAddressIdNotLike($addressId)
* @method ActiveQuery|UserWithAttach andAddressIdNotBetween($from, $to)
* @method ActiveQuery|UserWithAttach andAddressIdNotMore($than, $include = false)
* @method ActiveQuery|UserWithAttach andAddressIdNotLess($than, $include = false)
* @method ActiveQuery|UserWithAttach orAddressIdIn($array)
* @method ActiveQuery|UserWithAttach orAddressIdLike($addressId)
* @method ActiveQuery|UserWithAttach orAddressIdBetween($from, $to)
* @method ActiveQuery|UserWithAttach orAddressIdMore($than, $include = false)
* @method ActiveQuery|UserWithAttach orAddressIdLess($than, $include = false)
* @method ActiveQuery|UserWithAttach orAddressIdNot($addressId)
* @method ActiveQuery|UserWithAttach orAddressIdNotIn($array)
* @method ActiveQuery|UserWithAttach orAddressIdNotLike($addressId)
* @method ActiveQuery|UserWithAttach orAddressIdNotBetween($from, $to)
* @method ActiveQuery|UserWithAttach orAddressIdNotMore($than, $include = false)
* @method ActiveQuery|UserWithAttach orAddressIdNotLess($than, $include = false)
* @method ActiveQuery|UserWithAttach orAddressId($addressId)
 *
 */
class UserWithAttach extends \yii\db\ActiveRecord
{
        /**
     * @inheritdoc
     * @return ActiveQuery|UserWithAttach
     */
    public static function find()
    {
        $query = parent::find();
        $query->attachBehavior('MagicScopesBehavior', MagicScopesBehavior::className());
        return $query;
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
