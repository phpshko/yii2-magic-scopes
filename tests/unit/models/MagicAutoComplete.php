<?php

namespace phpshko\magicscopes\tests\unit\models;

/**
 * Magic Scopes
 *
 * @method MagicAutoComplete addressId($addressId)
 * @method MagicAutoComplete addressIdBetween($from, $to)
 * @method MagicAutoComplete addressIdIn($array)
 * @method MagicAutoComplete addressIdLess($than, $include = false)
 * @method MagicAutoComplete addressIdLike($addressId)
 * @method MagicAutoComplete addressIdMore($than, $include = false)
 * @method MagicAutoComplete addressIdNot($addressId)
 * @method MagicAutoComplete addressIdNotBetween($from, $to)
 * @method MagicAutoComplete addressIdNotIn($array)
 * @method MagicAutoComplete addressIdNotLess($than, $include = false)
 * @method MagicAutoComplete addressIdNotLike($addressId)
 * @method MagicAutoComplete addressIdNotMore($than, $include = false)
 * @method MagicAutoComplete andAddressId($addressId)
 * @method MagicAutoComplete andAddressIdBetween($from, $to)
 * @method MagicAutoComplete andAddressIdIn($array)
 * @method MagicAutoComplete andAddressIdLess($than, $include = false)
 * @method MagicAutoComplete andAddressIdLike($addressId)
 * @method MagicAutoComplete andAddressIdMore($than, $include = false)
 * @method MagicAutoComplete andAddressIdNot($addressId)
 * @method MagicAutoComplete andAddressIdNotBetween($from, $to)
 * @method MagicAutoComplete andAddressIdNotIn($array)
 * @method MagicAutoComplete andAddressIdNotLess($than, $include = false)
 * @method MagicAutoComplete andAddressIdNotLike($addressId)
 * @method MagicAutoComplete andAddressIdNotMore($than, $include = false)
 * @method MagicAutoComplete andForename($forename)
 * @method MagicAutoComplete andForenameBetween($from, $to)
 * @method MagicAutoComplete andForenameIn($array)
 * @method MagicAutoComplete andForenameLess($than, $include = false)
 * @method MagicAutoComplete andForenameLike($forename)
 * @method MagicAutoComplete andForenameMore($than, $include = false)
 * @method MagicAutoComplete andForenameNot($forename)
 * @method MagicAutoComplete andForenameNotBetween($from, $to)
 * @method MagicAutoComplete andForenameNotIn($array)
 * @method MagicAutoComplete andForenameNotLess($than, $include = false)
 * @method MagicAutoComplete andForenameNotLike($forename)
 * @method MagicAutoComplete andForenameNotMore($than, $include = false)
 * @method MagicAutoComplete andId($id)
 * @method MagicAutoComplete andIdBetween($from, $to)
 * @method MagicAutoComplete andIdIn($array)
 * @method MagicAutoComplete andIdLess($than, $include = false)
 * @method MagicAutoComplete andIdLike($id)
 * @method MagicAutoComplete andIdMore($than, $include = false)
 * @method MagicAutoComplete andIdNot($id)
 * @method MagicAutoComplete andIdNotBetween($from, $to)
 * @method MagicAutoComplete andIdNotIn($array)
 * @method MagicAutoComplete andIdNotLess($than, $include = false)
 * @method MagicAutoComplete andIdNotLike($id)
 * @method MagicAutoComplete andIdNotMore($than, $include = false)
 * @method MagicAutoComplete andSurname($surname)
 * @method MagicAutoComplete andSurnameBetween($from, $to)
 * @method MagicAutoComplete andSurnameIn($array)
 * @method MagicAutoComplete andSurnameLess($than, $include = false)
 * @method MagicAutoComplete andSurnameLike($surname)
 * @method MagicAutoComplete andSurnameMore($than, $include = false)
 * @method MagicAutoComplete andSurnameNot($surname)
 * @method MagicAutoComplete andSurnameNotBetween($from, $to)
 * @method MagicAutoComplete andSurnameNotIn($array)
 * @method MagicAutoComplete andSurnameNotLess($than, $include = false)
 * @method MagicAutoComplete andSurnameNotLike($surname)
 * @method MagicAutoComplete andSurnameNotMore($than, $include = false)
 * @method MagicAutoComplete andUsername($username)
 * @method MagicAutoComplete andUsernameBetween($from, $to)
 * @method MagicAutoComplete andUsernameIn($array)
 * @method MagicAutoComplete andUsernameLess($than, $include = false)
 * @method MagicAutoComplete andUsernameLike($username)
 * @method MagicAutoComplete andUsernameMore($than, $include = false)
 * @method MagicAutoComplete andUsernameNot($username)
 * @method MagicAutoComplete andUsernameNotBetween($from, $to)
 * @method MagicAutoComplete andUsernameNotIn($array)
 * @method MagicAutoComplete andUsernameNotLess($than, $include = false)
 * @method MagicAutoComplete andUsernameNotLike($username)
 * @method MagicAutoComplete andUsernameNotMore($than, $include = false)
 * @method MagicAutoComplete andYear($year)
 * @method MagicAutoComplete andYearBetween($from, $to)
 * @method MagicAutoComplete andYearIn($array)
 * @method MagicAutoComplete andYearLess($than, $include = false)
 * @method MagicAutoComplete andYearLike($year)
 * @method MagicAutoComplete andYearMore($than, $include = false)
 * @method MagicAutoComplete andYearNot($year)
 * @method MagicAutoComplete andYearNotBetween($from, $to)
 * @method MagicAutoComplete andYearNotIn($array)
 * @method MagicAutoComplete andYearNotLess($than, $include = false)
 * @method MagicAutoComplete andYearNotLike($year)
 * @method MagicAutoComplete andYearNotMore($than, $include = false)
 * @method MagicAutoComplete forename($forename)
 * @method MagicAutoComplete forenameBetween($from, $to)
 * @method MagicAutoComplete forenameIn($array)
 * @method MagicAutoComplete forenameLess($than, $include = false)
 * @method MagicAutoComplete forenameLike($forename)
 * @method MagicAutoComplete forenameMore($than, $include = false)
 * @method MagicAutoComplete forenameNot($forename)
 * @method MagicAutoComplete forenameNotBetween($from, $to)
 * @method MagicAutoComplete forenameNotIn($array)
 * @method MagicAutoComplete forenameNotLess($than, $include = false)
 * @method MagicAutoComplete forenameNotLike($forename)
 * @method MagicAutoComplete forenameNotMore($than, $include = false)
 * @method MagicAutoComplete id($id)
 * @method MagicAutoComplete idBetween($from, $to)
 * @method MagicAutoComplete idIn($array)
 * @method MagicAutoComplete idLess($than, $include = false)
 * @method MagicAutoComplete idLike($id)
 * @method MagicAutoComplete idMore($than, $include = false)
 * @method MagicAutoComplete idNot($id)
 * @method MagicAutoComplete idNotBetween($from, $to)
 * @method MagicAutoComplete idNotIn($array)
 * @method MagicAutoComplete idNotLess($than, $include = false)
 * @method MagicAutoComplete idNotLike($id)
 * @method MagicAutoComplete idNotMore($than, $include = false)
 * @method MagicAutoComplete orAddressId($addressId)
 * @method MagicAutoComplete orAddressIdBetween($from, $to)
 * @method MagicAutoComplete orAddressIdIn($array)
 * @method MagicAutoComplete orAddressIdLess($than, $include = false)
 * @method MagicAutoComplete orAddressIdLike($addressId)
 * @method MagicAutoComplete orAddressIdMore($than, $include = false)
 * @method MagicAutoComplete orAddressIdNot($addressId)
 * @method MagicAutoComplete orAddressIdNotBetween($from, $to)
 * @method MagicAutoComplete orAddressIdNotIn($array)
 * @method MagicAutoComplete orAddressIdNotLess($than, $include = false)
 * @method MagicAutoComplete orAddressIdNotLike($addressId)
 * @method MagicAutoComplete orAddressIdNotMore($than, $include = false)
 * @method MagicAutoComplete orForename($forename)
 * @method MagicAutoComplete orForenameBetween($from, $to)
 * @method MagicAutoComplete orForenameIn($array)
 * @method MagicAutoComplete orForenameLess($than, $include = false)
 * @method MagicAutoComplete orForenameLike($forename)
 * @method MagicAutoComplete orForenameMore($than, $include = false)
 * @method MagicAutoComplete orForenameNot($forename)
 * @method MagicAutoComplete orForenameNotBetween($from, $to)
 * @method MagicAutoComplete orForenameNotIn($array)
 * @method MagicAutoComplete orForenameNotLess($than, $include = false)
 * @method MagicAutoComplete orForenameNotLike($forename)
 * @method MagicAutoComplete orForenameNotMore($than, $include = false)
 * @method MagicAutoComplete orId($id)
 * @method MagicAutoComplete orIdBetween($from, $to)
 * @method MagicAutoComplete orIdIn($array)
 * @method MagicAutoComplete orIdLess($than, $include = false)
 * @method MagicAutoComplete orIdLike($id)
 * @method MagicAutoComplete orIdMore($than, $include = false)
 * @method MagicAutoComplete orIdNot($id)
 * @method MagicAutoComplete orIdNotBetween($from, $to)
 * @method MagicAutoComplete orIdNotIn($array)
 * @method MagicAutoComplete orIdNotLess($than, $include = false)
 * @method MagicAutoComplete orIdNotLike($id)
 * @method MagicAutoComplete orIdNotMore($than, $include = false)
 * @method MagicAutoComplete orSurname($surname)
 * @method MagicAutoComplete orSurnameBetween($from, $to)
 * @method MagicAutoComplete orSurnameIn($array)
 * @method MagicAutoComplete orSurnameLess($than, $include = false)
 * @method MagicAutoComplete orSurnameLike($surname)
 * @method MagicAutoComplete orSurnameMore($than, $include = false)
 * @method MagicAutoComplete orSurnameNot($surname)
 * @method MagicAutoComplete orSurnameNotBetween($from, $to)
 * @method MagicAutoComplete orSurnameNotIn($array)
 * @method MagicAutoComplete orSurnameNotLess($than, $include = false)
 * @method MagicAutoComplete orSurnameNotLike($surname)
 * @method MagicAutoComplete orSurnameNotMore($than, $include = false)
 * @method MagicAutoComplete orUsername($username)
 * @method MagicAutoComplete orUsernameBetween($from, $to)
 * @method MagicAutoComplete orUsernameIn($array)
 * @method MagicAutoComplete orUsernameLess($than, $include = false)
 * @method MagicAutoComplete orUsernameLike($username)
 * @method MagicAutoComplete orUsernameMore($than, $include = false)
 * @method MagicAutoComplete orUsernameNot($username)
 * @method MagicAutoComplete orUsernameNotBetween($from, $to)
 * @method MagicAutoComplete orUsernameNotIn($array)
 * @method MagicAutoComplete orUsernameNotLess($than, $include = false)
 * @method MagicAutoComplete orUsernameNotLike($username)
 * @method MagicAutoComplete orUsernameNotMore($than, $include = false)
 * @method MagicAutoComplete orYear($year)
 * @method MagicAutoComplete orYearBetween($from, $to)
 * @method MagicAutoComplete orYearIn($array)
 * @method MagicAutoComplete orYearLess($than, $include = false)
 * @method MagicAutoComplete orYearLike($year)
 * @method MagicAutoComplete orYearMore($than, $include = false)
 * @method MagicAutoComplete orYearNot($year)
 * @method MagicAutoComplete orYearNotBetween($from, $to)
 * @method MagicAutoComplete orYearNotIn($array)
 * @method MagicAutoComplete orYearNotLess($than, $include = false)
 * @method MagicAutoComplete orYearNotLike($year)
 * @method MagicAutoComplete orYearNotMore($than, $include = false)
 * @method MagicAutoComplete surname($surname)
 * @method MagicAutoComplete surnameBetween($from, $to)
 * @method MagicAutoComplete surnameIn($array)
 * @method MagicAutoComplete surnameLess($than, $include = false)
 * @method MagicAutoComplete surnameLike($surname)
 * @method MagicAutoComplete surnameMore($than, $include = false)
 * @method MagicAutoComplete surnameNot($surname)
 * @method MagicAutoComplete surnameNotBetween($from, $to)
 * @method MagicAutoComplete surnameNotIn($array)
 * @method MagicAutoComplete surnameNotLess($than, $include = false)
 * @method MagicAutoComplete surnameNotLike($surname)
 * @method MagicAutoComplete surnameNotMore($than, $include = false)
 * @method MagicAutoComplete username($username)
 * @method MagicAutoComplete usernameBetween($from, $to)
 * @method MagicAutoComplete usernameIn($array)
 * @method MagicAutoComplete usernameLess($than, $include = false)
 * @method MagicAutoComplete usernameLike($username)
 * @method MagicAutoComplete usernameMore($than, $include = false)
 * @method MagicAutoComplete usernameNot($username)
 * @method MagicAutoComplete usernameNotBetween($from, $to)
 * @method MagicAutoComplete usernameNotIn($array)
 * @method MagicAutoComplete usernameNotLess($than, $include = false)
 * @method MagicAutoComplete usernameNotLike($username)
 * @method MagicAutoComplete usernameNotMore($than, $include = false)
 * @method MagicAutoComplete year($year)
 * @method MagicAutoComplete yearBetween($from, $to)
 * @method MagicAutoComplete yearIn($array)
 * @method MagicAutoComplete yearLess($than, $include = false)
 * @method MagicAutoComplete yearLike($year)
 * @method MagicAutoComplete yearMore($than, $include = false)
 * @method MagicAutoComplete yearNot($year)
 * @method MagicAutoComplete yearNotBetween($from, $to)
 * @method MagicAutoComplete yearNotIn($array)
 * @method MagicAutoComplete yearNotLess($than, $include = false)
 * @method MagicAutoComplete yearNotLike($year)
 * @method MagicAutoComplete yearNotMore($than, $include = false)
 */
class MagicAutoComplete
{

}