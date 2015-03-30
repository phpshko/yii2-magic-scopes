<?php

namespace phpshko\magicscopes\tests\unit\models;

/**
 * Magic Scopes
 *
 * @method UserWithCreateQuery|UserWithCreate id($id)
 * @method UserWithCreateQuery|UserWithCreate idIn($array)
 * @method UserWithCreateQuery|UserWithCreate idLike($id)
 * @method UserWithCreateQuery|UserWithCreate idBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate idMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate idLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate idNot($id)
 * @method UserWithCreateQuery|UserWithCreate idNotIn($array)
 * @method UserWithCreateQuery|UserWithCreate idNotLike($id)
 * @method UserWithCreateQuery|UserWithCreate idNotBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate idNotMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate idNotLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andId($id)
 * @method UserWithCreateQuery|UserWithCreate andIdIn($array)
 * @method UserWithCreateQuery|UserWithCreate andIdLike($id)
 * @method UserWithCreateQuery|UserWithCreate andIdBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate andIdMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andIdLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andIdNot($id)
 * @method UserWithCreateQuery|UserWithCreate andIdNotIn($array)
 * @method UserWithCreateQuery|UserWithCreate andIdNotLike($id)
 * @method UserWithCreateQuery|UserWithCreate andIdNotBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate andIdNotMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andIdNotLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orIdIn($array)
 * @method UserWithCreateQuery|UserWithCreate orIdLike($id)
 * @method UserWithCreateQuery|UserWithCreate orIdBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate orIdMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orIdLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orIdNot($id)
 * @method UserWithCreateQuery|UserWithCreate orIdNotIn($array)
 * @method UserWithCreateQuery|UserWithCreate orIdNotLike($id)
 * @method UserWithCreateQuery|UserWithCreate orIdNotBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate orIdNotMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orIdNotLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orId($id)
 *
 * @method UserWithCreateQuery|UserWithCreate username($username)
 * @method UserWithCreateQuery|UserWithCreate usernameIn($array)
 * @method UserWithCreateQuery|UserWithCreate usernameLike($username)
 * @method UserWithCreateQuery|UserWithCreate usernameBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate usernameMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate usernameLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate usernameNot($username)
 * @method UserWithCreateQuery|UserWithCreate usernameNotIn($array)
 * @method UserWithCreateQuery|UserWithCreate usernameNotLike($username)
 * @method UserWithCreateQuery|UserWithCreate usernameNotBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate usernameNotMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate usernameNotLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andUsername($username)
 * @method UserWithCreateQuery|UserWithCreate andUsernameIn($array)
 * @method UserWithCreateQuery|UserWithCreate andUsernameLike($username)
 * @method UserWithCreateQuery|UserWithCreate andUsernameBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate andUsernameMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andUsernameLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andUsernameNot($username)
 * @method UserWithCreateQuery|UserWithCreate andUsernameNotIn($array)
 * @method UserWithCreateQuery|UserWithCreate andUsernameNotLike($username)
 * @method UserWithCreateQuery|UserWithCreate andUsernameNotBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate andUsernameNotMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andUsernameNotLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orUsernameIn($array)
 * @method UserWithCreateQuery|UserWithCreate orUsernameLike($username)
 * @method UserWithCreateQuery|UserWithCreate orUsernameBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate orUsernameMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orUsernameLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orUsernameNot($username)
 * @method UserWithCreateQuery|UserWithCreate orUsernameNotIn($array)
 * @method UserWithCreateQuery|UserWithCreate orUsernameNotLike($username)
 * @method UserWithCreateQuery|UserWithCreate orUsernameNotBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate orUsernameNotMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orUsernameNotLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orUsername($username)
 *
 * @method UserWithCreateQuery|UserWithCreate forename($forename)
 * @method UserWithCreateQuery|UserWithCreate forenameIn($array)
 * @method UserWithCreateQuery|UserWithCreate forenameLike($forename)
 * @method UserWithCreateQuery|UserWithCreate forenameBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate forenameMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate forenameLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate forenameNot($forename)
 * @method UserWithCreateQuery|UserWithCreate forenameNotIn($array)
 * @method UserWithCreateQuery|UserWithCreate forenameNotLike($forename)
 * @method UserWithCreateQuery|UserWithCreate forenameNotBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate forenameNotMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate forenameNotLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andForename($forename)
 * @method UserWithCreateQuery|UserWithCreate andForenameIn($array)
 * @method UserWithCreateQuery|UserWithCreate andForenameLike($forename)
 * @method UserWithCreateQuery|UserWithCreate andForenameBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate andForenameMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andForenameLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andForenameNot($forename)
 * @method UserWithCreateQuery|UserWithCreate andForenameNotIn($array)
 * @method UserWithCreateQuery|UserWithCreate andForenameNotLike($forename)
 * @method UserWithCreateQuery|UserWithCreate andForenameNotBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate andForenameNotMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andForenameNotLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orForenameIn($array)
 * @method UserWithCreateQuery|UserWithCreate orForenameLike($forename)
 * @method UserWithCreateQuery|UserWithCreate orForenameBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate orForenameMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orForenameLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orForenameNot($forename)
 * @method UserWithCreateQuery|UserWithCreate orForenameNotIn($array)
 * @method UserWithCreateQuery|UserWithCreate orForenameNotLike($forename)
 * @method UserWithCreateQuery|UserWithCreate orForenameNotBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate orForenameNotMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orForenameNotLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orForename($forename)
 *
 * @method UserWithCreateQuery|UserWithCreate surname($surname)
 * @method UserWithCreateQuery|UserWithCreate surnameIn($array)
 * @method UserWithCreateQuery|UserWithCreate surnameLike($surname)
 * @method UserWithCreateQuery|UserWithCreate surnameBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate surnameMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate surnameLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate surnameNot($surname)
 * @method UserWithCreateQuery|UserWithCreate surnameNotIn($array)
 * @method UserWithCreateQuery|UserWithCreate surnameNotLike($surname)
 * @method UserWithCreateQuery|UserWithCreate surnameNotBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate surnameNotMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate surnameNotLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andSurname($surname)
 * @method UserWithCreateQuery|UserWithCreate andSurnameIn($array)
 * @method UserWithCreateQuery|UserWithCreate andSurnameLike($surname)
 * @method UserWithCreateQuery|UserWithCreate andSurnameBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate andSurnameMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andSurnameLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andSurnameNot($surname)
 * @method UserWithCreateQuery|UserWithCreate andSurnameNotIn($array)
 * @method UserWithCreateQuery|UserWithCreate andSurnameNotLike($surname)
 * @method UserWithCreateQuery|UserWithCreate andSurnameNotBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate andSurnameNotMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andSurnameNotLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orSurnameIn($array)
 * @method UserWithCreateQuery|UserWithCreate orSurnameLike($surname)
 * @method UserWithCreateQuery|UserWithCreate orSurnameBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate orSurnameMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orSurnameLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orSurnameNot($surname)
 * @method UserWithCreateQuery|UserWithCreate orSurnameNotIn($array)
 * @method UserWithCreateQuery|UserWithCreate orSurnameNotLike($surname)
 * @method UserWithCreateQuery|UserWithCreate orSurnameNotBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate orSurnameNotMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orSurnameNotLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orSurname($surname)
 *
 * @method UserWithCreateQuery|UserWithCreate year($year)
 * @method UserWithCreateQuery|UserWithCreate yearIn($array)
 * @method UserWithCreateQuery|UserWithCreate yearLike($year)
 * @method UserWithCreateQuery|UserWithCreate yearBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate yearMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate yearLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate yearNot($year)
 * @method UserWithCreateQuery|UserWithCreate yearNotIn($array)
 * @method UserWithCreateQuery|UserWithCreate yearNotLike($year)
 * @method UserWithCreateQuery|UserWithCreate yearNotBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate yearNotMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate yearNotLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andYear($year)
 * @method UserWithCreateQuery|UserWithCreate andYearIn($array)
 * @method UserWithCreateQuery|UserWithCreate andYearLike($year)
 * @method UserWithCreateQuery|UserWithCreate andYearBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate andYearMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andYearLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andYearNot($year)
 * @method UserWithCreateQuery|UserWithCreate andYearNotIn($array)
 * @method UserWithCreateQuery|UserWithCreate andYearNotLike($year)
 * @method UserWithCreateQuery|UserWithCreate andYearNotBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate andYearNotMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andYearNotLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orYearIn($array)
 * @method UserWithCreateQuery|UserWithCreate orYearLike($year)
 * @method UserWithCreateQuery|UserWithCreate orYearBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate orYearMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orYearLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orYearNot($year)
 * @method UserWithCreateQuery|UserWithCreate orYearNotIn($array)
 * @method UserWithCreateQuery|UserWithCreate orYearNotLike($year)
 * @method UserWithCreateQuery|UserWithCreate orYearNotBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate orYearNotMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orYearNotLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orYear($year)
 *
 * @method UserWithCreateQuery|UserWithCreate addressId($addressId)
 * @method UserWithCreateQuery|UserWithCreate addressIdIn($array)
 * @method UserWithCreateQuery|UserWithCreate addressIdLike($addressId)
 * @method UserWithCreateQuery|UserWithCreate addressIdBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate addressIdMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate addressIdLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate addressIdNot($addressId)
 * @method UserWithCreateQuery|UserWithCreate addressIdNotIn($array)
 * @method UserWithCreateQuery|UserWithCreate addressIdNotLike($addressId)
 * @method UserWithCreateQuery|UserWithCreate addressIdNotBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate addressIdNotMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate addressIdNotLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andAddressId($addressId)
 * @method UserWithCreateQuery|UserWithCreate andAddressIdIn($array)
 * @method UserWithCreateQuery|UserWithCreate andAddressIdLike($addressId)
 * @method UserWithCreateQuery|UserWithCreate andAddressIdBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate andAddressIdMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andAddressIdLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andAddressIdNot($addressId)
 * @method UserWithCreateQuery|UserWithCreate andAddressIdNotIn($array)
 * @method UserWithCreateQuery|UserWithCreate andAddressIdNotLike($addressId)
 * @method UserWithCreateQuery|UserWithCreate andAddressIdNotBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate andAddressIdNotMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate andAddressIdNotLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orAddressIdIn($array)
 * @method UserWithCreateQuery|UserWithCreate orAddressIdLike($addressId)
 * @method UserWithCreateQuery|UserWithCreate orAddressIdBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate orAddressIdMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orAddressIdLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orAddressIdNot($addressId)
 * @method UserWithCreateQuery|UserWithCreate orAddressIdNotIn($array)
 * @method UserWithCreateQuery|UserWithCreate orAddressIdNotLike($addressId)
 * @method UserWithCreateQuery|UserWithCreate orAddressIdNotBetween($from, $to)
 * @method UserWithCreateQuery|UserWithCreate orAddressIdNotMore($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orAddressIdNotLess($than, $include = false)
 * @method UserWithCreateQuery|UserWithCreate orAddressId($addressId)
 *
 */
class UserWithCreateQuery extends \yii\db\ActiveQuery
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => \phpshko\magicscopes\MagicScopesBehavior::className()
            ]
        ];
    }
}