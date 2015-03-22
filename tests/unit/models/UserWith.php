<?php

namespace phpshko\magicscopes\tests\unit\models;

use Yii;
use yii\db\ActiveQuery;
use phpshko\magicscopes\MagicScopesBehavior;
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
 * @method ActiveQuery|UserWith id($id)
 * @method ActiveQuery|UserWith idIn($array)
 * @method ActiveQuery|UserWith idLike($id)
 * @method ActiveQuery|UserWith idBetween($from, $to)
 * @method ActiveQuery|UserWith idMore($than, $include = false)
 * @method ActiveQuery|UserWith idLess($than, $include = false)
 * @method ActiveQuery|UserWith idNot($id)
 * @method ActiveQuery|UserWith idNotIn($array)
 * @method ActiveQuery|UserWith idNotLike($id)
 * @method ActiveQuery|UserWith idNotBetween($from, $to)
 * @method ActiveQuery|UserWith idNotMore($than, $include = false)
 * @method ActiveQuery|UserWith idNotLess($than, $include = false)
 * @method ActiveQuery|UserWith andId($id)
 * @method ActiveQuery|UserWith andIdIn($array)
 * @method ActiveQuery|UserWith andIdLike($id)
 * @method ActiveQuery|UserWith andIdBetween($from, $to)
 * @method ActiveQuery|UserWith andIdMore($than, $include = false)
 * @method ActiveQuery|UserWith andIdLess($than, $include = false)
 * @method ActiveQuery|UserWith andIdNot($id)
 * @method ActiveQuery|UserWith andIdNotIn($array)
 * @method ActiveQuery|UserWith andIdNotLike($id)
 * @method ActiveQuery|UserWith andIdNotBetween($from, $to)
 * @method ActiveQuery|UserWith andIdNotMore($than, $include = false)
 * @method ActiveQuery|UserWith andIdNotLess($than, $include = false)
 * @method ActiveQuery|UserWith orIdIn($array)
 * @method ActiveQuery|UserWith orIdLike($id)
 * @method ActiveQuery|UserWith orIdBetween($from, $to)
 * @method ActiveQuery|UserWith orIdMore($than, $include = false)
 * @method ActiveQuery|UserWith orIdLess($than, $include = false)
 * @method ActiveQuery|UserWith orIdNot($id)
 * @method ActiveQuery|UserWith orIdNotIn($array)
 * @method ActiveQuery|UserWith orIdNotLike($id)
 * @method ActiveQuery|UserWith orIdNotBetween($from, $to)
 * @method ActiveQuery|UserWith orIdNotMore($than, $include = false)
 * @method ActiveQuery|UserWith orIdNotLess($than, $include = false)
 * @method ActiveQuery|UserWith orId($id)
 *
 * @method ActiveQuery|UserWith username($username)
 * @method ActiveQuery|UserWith usernameIn($array)
 * @method ActiveQuery|UserWith usernameLike($username)
 * @method ActiveQuery|UserWith usernameBetween($from, $to)
 * @method ActiveQuery|UserWith usernameMore($than, $include = false)
 * @method ActiveQuery|UserWith usernameLess($than, $include = false)
 * @method ActiveQuery|UserWith usernameNot($username)
 * @method ActiveQuery|UserWith usernameNotIn($array)
 * @method ActiveQuery|UserWith usernameNotLike($username)
 * @method ActiveQuery|UserWith usernameNotBetween($from, $to)
 * @method ActiveQuery|UserWith usernameNotMore($than, $include = false)
 * @method ActiveQuery|UserWith usernameNotLess($than, $include = false)
 * @method ActiveQuery|UserWith andUsername($username)
 * @method ActiveQuery|UserWith andUsernameIn($array)
 * @method ActiveQuery|UserWith andUsernameLike($username)
 * @method ActiveQuery|UserWith andUsernameBetween($from, $to)
 * @method ActiveQuery|UserWith andUsernameMore($than, $include = false)
 * @method ActiveQuery|UserWith andUsernameLess($than, $include = false)
 * @method ActiveQuery|UserWith andUsernameNot($username)
 * @method ActiveQuery|UserWith andUsernameNotIn($array)
 * @method ActiveQuery|UserWith andUsernameNotLike($username)
 * @method ActiveQuery|UserWith andUsernameNotBetween($from, $to)
 * @method ActiveQuery|UserWith andUsernameNotMore($than, $include = false)
 * @method ActiveQuery|UserWith andUsernameNotLess($than, $include = false)
 * @method ActiveQuery|UserWith orUsernameIn($array)
 * @method ActiveQuery|UserWith orUsernameLike($username)
 * @method ActiveQuery|UserWith orUsernameBetween($from, $to)
 * @method ActiveQuery|UserWith orUsernameMore($than, $include = false)
 * @method ActiveQuery|UserWith orUsernameLess($than, $include = false)
 * @method ActiveQuery|UserWith orUsernameNot($username)
 * @method ActiveQuery|UserWith orUsernameNotIn($array)
 * @method ActiveQuery|UserWith orUsernameNotLike($username)
 * @method ActiveQuery|UserWith orUsernameNotBetween($from, $to)
 * @method ActiveQuery|UserWith orUsernameNotMore($than, $include = false)
 * @method ActiveQuery|UserWith orUsernameNotLess($than, $include = false)
 * @method ActiveQuery|UserWith orUsername($username)
 *
 * @method ActiveQuery|UserWith forename($forename)
 * @method ActiveQuery|UserWith forenameIn($array)
 * @method ActiveQuery|UserWith forenameLike($forename)
 * @method ActiveQuery|UserWith forenameBetween($from, $to)
 * @method ActiveQuery|UserWith forenameMore($than, $include = false)
 * @method ActiveQuery|UserWith forenameLess($than, $include = false)
 * @method ActiveQuery|UserWith forenameNot($forename)
 * @method ActiveQuery|UserWith forenameNotIn($array)
 * @method ActiveQuery|UserWith forenameNotLike($forename)
 * @method ActiveQuery|UserWith forenameNotBetween($from, $to)
 * @method ActiveQuery|UserWith forenameNotMore($than, $include = false)
 * @method ActiveQuery|UserWith forenameNotLess($than, $include = false)
 * @method ActiveQuery|UserWith andForename($forename)
 * @method ActiveQuery|UserWith andForenameIn($array)
 * @method ActiveQuery|UserWith andForenameLike($forename)
 * @method ActiveQuery|UserWith andForenameBetween($from, $to)
 * @method ActiveQuery|UserWith andForenameMore($than, $include = false)
 * @method ActiveQuery|UserWith andForenameLess($than, $include = false)
 * @method ActiveQuery|UserWith andForenameNot($forename)
 * @method ActiveQuery|UserWith andForenameNotIn($array)
 * @method ActiveQuery|UserWith andForenameNotLike($forename)
 * @method ActiveQuery|UserWith andForenameNotBetween($from, $to)
 * @method ActiveQuery|UserWith andForenameNotMore($than, $include = false)
 * @method ActiveQuery|UserWith andForenameNotLess($than, $include = false)
 * @method ActiveQuery|UserWith orForenameIn($array)
 * @method ActiveQuery|UserWith orForenameLike($forename)
 * @method ActiveQuery|UserWith orForenameBetween($from, $to)
 * @method ActiveQuery|UserWith orForenameMore($than, $include = false)
 * @method ActiveQuery|UserWith orForenameLess($than, $include = false)
 * @method ActiveQuery|UserWith orForenameNot($forename)
 * @method ActiveQuery|UserWith orForenameNotIn($array)
 * @method ActiveQuery|UserWith orForenameNotLike($forename)
 * @method ActiveQuery|UserWith orForenameNotBetween($from, $to)
 * @method ActiveQuery|UserWith orForenameNotMore($than, $include = false)
 * @method ActiveQuery|UserWith orForenameNotLess($than, $include = false)
 * @method ActiveQuery|UserWith orForename($forename)
 *
 * @method ActiveQuery|UserWith surname($surname)
 * @method ActiveQuery|UserWith surnameIn($array)
 * @method ActiveQuery|UserWith surnameLike($surname)
 * @method ActiveQuery|UserWith surnameBetween($from, $to)
 * @method ActiveQuery|UserWith surnameMore($than, $include = false)
 * @method ActiveQuery|UserWith surnameLess($than, $include = false)
 * @method ActiveQuery|UserWith surnameNot($surname)
 * @method ActiveQuery|UserWith surnameNotIn($array)
 * @method ActiveQuery|UserWith surnameNotLike($surname)
 * @method ActiveQuery|UserWith surnameNotBetween($from, $to)
 * @method ActiveQuery|UserWith surnameNotMore($than, $include = false)
 * @method ActiveQuery|UserWith surnameNotLess($than, $include = false)
 * @method ActiveQuery|UserWith andSurname($surname)
 * @method ActiveQuery|UserWith andSurnameIn($array)
 * @method ActiveQuery|UserWith andSurnameLike($surname)
 * @method ActiveQuery|UserWith andSurnameBetween($from, $to)
 * @method ActiveQuery|UserWith andSurnameMore($than, $include = false)
 * @method ActiveQuery|UserWith andSurnameLess($than, $include = false)
 * @method ActiveQuery|UserWith andSurnameNot($surname)
 * @method ActiveQuery|UserWith andSurnameNotIn($array)
 * @method ActiveQuery|UserWith andSurnameNotLike($surname)
 * @method ActiveQuery|UserWith andSurnameNotBetween($from, $to)
 * @method ActiveQuery|UserWith andSurnameNotMore($than, $include = false)
 * @method ActiveQuery|UserWith andSurnameNotLess($than, $include = false)
 * @method ActiveQuery|UserWith orSurnameIn($array)
 * @method ActiveQuery|UserWith orSurnameLike($surname)
 * @method ActiveQuery|UserWith orSurnameBetween($from, $to)
 * @method ActiveQuery|UserWith orSurnameMore($than, $include = false)
 * @method ActiveQuery|UserWith orSurnameLess($than, $include = false)
 * @method ActiveQuery|UserWith orSurnameNot($surname)
 * @method ActiveQuery|UserWith orSurnameNotIn($array)
 * @method ActiveQuery|UserWith orSurnameNotLike($surname)
 * @method ActiveQuery|UserWith orSurnameNotBetween($from, $to)
 * @method ActiveQuery|UserWith orSurnameNotMore($than, $include = false)
 * @method ActiveQuery|UserWith orSurnameNotLess($than, $include = false)
 * @method ActiveQuery|UserWith orSurname($surname)
 *
 * @method ActiveQuery|UserWith year($year)
 * @method ActiveQuery|UserWith yearIn($array)
 * @method ActiveQuery|UserWith yearLike($year)
 * @method ActiveQuery|UserWith yearBetween($from, $to)
 * @method ActiveQuery|UserWith yearMore($than, $include = false)
 * @method ActiveQuery|UserWith yearLess($than, $include = false)
 * @method ActiveQuery|UserWith yearNot($year)
 * @method ActiveQuery|UserWith yearNotIn($array)
 * @method ActiveQuery|UserWith yearNotLike($year)
 * @method ActiveQuery|UserWith yearNotBetween($from, $to)
 * @method ActiveQuery|UserWith yearNotMore($than, $include = false)
 * @method ActiveQuery|UserWith yearNotLess($than, $include = false)
 * @method ActiveQuery|UserWith andYear($year)
 * @method ActiveQuery|UserWith andYearIn($array)
 * @method ActiveQuery|UserWith andYearLike($year)
 * @method ActiveQuery|UserWith andYearBetween($from, $to)
 * @method ActiveQuery|UserWith andYearMore($than, $include = false)
 * @method ActiveQuery|UserWith andYearLess($than, $include = false)
 * @method ActiveQuery|UserWith andYearNot($year)
 * @method ActiveQuery|UserWith andYearNotIn($array)
 * @method ActiveQuery|UserWith andYearNotLike($year)
 * @method ActiveQuery|UserWith andYearNotBetween($from, $to)
 * @method ActiveQuery|UserWith andYearNotMore($than, $include = false)
 * @method ActiveQuery|UserWith andYearNotLess($than, $include = false)
 * @method ActiveQuery|UserWith orYearIn($array)
 * @method ActiveQuery|UserWith orYearLike($year)
 * @method ActiveQuery|UserWith orYearBetween($from, $to)
 * @method ActiveQuery|UserWith orYearMore($than, $include = false)
 * @method ActiveQuery|UserWith orYearLess($than, $include = false)
 * @method ActiveQuery|UserWith orYearNot($year)
 * @method ActiveQuery|UserWith orYearNotIn($array)
 * @method ActiveQuery|UserWith orYearNotLike($year)
 * @method ActiveQuery|UserWith orYearNotBetween($from, $to)
 * @method ActiveQuery|UserWith orYearNotMore($than, $include = false)
 * @method ActiveQuery|UserWith orYearNotLess($than, $include = false)
 * @method ActiveQuery|UserWith orYear($year)
 *
 * @method ActiveQuery|UserWith addressId($addressId)
 * @method ActiveQuery|UserWith addressIdIn($array)
 * @method ActiveQuery|UserWith addressIdLike($addressId)
 * @method ActiveQuery|UserWith addressIdBetween($from, $to)
 * @method ActiveQuery|UserWith addressIdMore($than, $include = false)
 * @method ActiveQuery|UserWith addressIdLess($than, $include = false)
 * @method ActiveQuery|UserWith addressIdNot($addressId)
 * @method ActiveQuery|UserWith addressIdNotIn($array)
 * @method ActiveQuery|UserWith addressIdNotLike($addressId)
 * @method ActiveQuery|UserWith addressIdNotBetween($from, $to)
 * @method ActiveQuery|UserWith addressIdNotMore($than, $include = false)
 * @method ActiveQuery|UserWith addressIdNotLess($than, $include = false)
 * @method ActiveQuery|UserWith andAddressId($addressId)
 * @method ActiveQuery|UserWith andAddressIdIn($array)
 * @method ActiveQuery|UserWith andAddressIdLike($addressId)
 * @method ActiveQuery|UserWith andAddressIdBetween($from, $to)
 * @method ActiveQuery|UserWith andAddressIdMore($than, $include = false)
 * @method ActiveQuery|UserWith andAddressIdLess($than, $include = false)
 * @method ActiveQuery|UserWith andAddressIdNot($addressId)
 * @method ActiveQuery|UserWith andAddressIdNotIn($array)
 * @method ActiveQuery|UserWith andAddressIdNotLike($addressId)
 * @method ActiveQuery|UserWith andAddressIdNotBetween($from, $to)
 * @method ActiveQuery|UserWith andAddressIdNotMore($than, $include = false)
 * @method ActiveQuery|UserWith andAddressIdNotLess($than, $include = false)
 * @method ActiveQuery|UserWith orAddressIdIn($array)
 * @method ActiveQuery|UserWith orAddressIdLike($addressId)
 * @method ActiveQuery|UserWith orAddressIdBetween($from, $to)
 * @method ActiveQuery|UserWith orAddressIdMore($than, $include = false)
 * @method ActiveQuery|UserWith orAddressIdLess($than, $include = false)
 * @method ActiveQuery|UserWith orAddressIdNot($addressId)
 * @method ActiveQuery|UserWith orAddressIdNotIn($array)
 * @method ActiveQuery|UserWith orAddressIdNotLike($addressId)
 * @method ActiveQuery|UserWith orAddressIdNotBetween($from, $to)
 * @method ActiveQuery|UserWith orAddressIdNotMore($than, $include = false)
 * @method ActiveQuery|UserWith orAddressIdNotLess($than, $include = false)
 * @method ActiveQuery|UserWith orAddressId($addressId)
 *
 */
class UserWith extends \yii\db\ActiveRecord
{
    /**
    * @inheritdoc
    * @return ActiveQuery|UserWith
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
