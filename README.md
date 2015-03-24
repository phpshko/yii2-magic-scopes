Yii2 behavior for ActiveQuery Magic Scopes
===========

This behavior help you avoid creating QueryClass for your model, if you need only a simple scopes.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist phpshko/yii2-magic-scopes "dev-master"
```

or add

```
"phpshko/yii2-magic-scopes": "dev-master"
```

to the require section of your `composer.json` file.


Configuration
------------

Overwrite find (default in Gii generator)
----

```php
use Yii;
use yii\db\ActiveQuery;
use phpshko\magicscopes\MagicScopesBehavior;
...

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
```
    
Or use MagicActiveQuery
----
    
```php
use phpshko\magicscopes\MagicActiveQuery;

...

/**
 * @inheritdoc
 * @return MagicActiveQuery|ModelClass
 */
public static function find()
{
    return new MagicActiveQuery(get_called_class());
}
```
    
Or in ActiveQuery
----

```php

class ActiveQuery extends \yii\db\ActiveQuery
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => \phpshko\magicscopes\MagicActiveQuery::className()
            ]
        ];
    }
}
```


Usage
------------

When you will generate Model in Gii generator, select "Generate Magic Scopes". Will be automatically generated needs PHPDoc and overwrite find() method.

```php
/**
 * UserWith model
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
 * @method MagicActiveQuery|UserWith id($id)
 * @method MagicActiveQuery|UserWith idIn($id)
 * @method MagicActiveQuery|UserWith idLike($id)
 * @method MagicActiveQuery|UserWith idBetween($from, $to)
 * @method MagicActiveQuery|UserWith idMore($than, $include = false)
 * @method MagicActiveQuery|UserWith idLess($than, $include = false)
 * @method MagicActiveQuery|UserWith idNot($id)
 * @method MagicActiveQuery|UserWith idNotIn($id)
 */
```

You can see full example [here](https://github.com/phpshko/yii2-magic-scopes/blob/master/tests/models/UserWith.php).
Lines a lot, but they will be useful in autocomplete.

![PhpStorm autocomplete](http://habrastorage.org/files/157/187/c90/157187c9064d4dcab3e9929e2567231b.png "PhpStorm autocomplete")

Example:
-----

```php
$queryWith = UserWith::find()
                        ->andId(45)
                        ->andUsernameLike('php')
                        ->andYearBetween(1980, 2000)
                        ->addressIdMore(10);

$queryWithout = UserWithout::find()
                        ->andWhere(['id' => 45])
                        ->andWhere(['like', 'username', 'php'])
                        ->andWhere(['between', 'year', 1980, 2000])
                        ->andWhere(['>', 'address_id', 10]);
```

More examples you can find in [this test](https://github.com/phpshko/yii2-magic-scopes/blob/master/tests/unit/MagicScopesTest.php)

You can not write "and":

```php
UserWith::find()->id(5) == UserWith::find()->andId(5)
```

Full list allow methods (id for example):

```php
->id($id)
->idIn($array)
->idLike($id)
->idBetween($from, $to)
->idMore($than, $include = false)
->idLess($than, $include = false)
->idNot($id)
->idNotIn($array)
->idNotLike($id)
->idNotBetween($from, $to)
->idNotMore($than, $include = false)
->idNotLess($than, $include = false)
->andId($id)
->andIdIn($array)
->andIdLike($id)
->andIdBetween($from, $to)
->andIdMore($than, $include = false)
->andIdLess($than, $include = false)
->andIdNot($id)
->andIdNotIn($array)
->andIdNotLike($id)
->andIdNotBetween($from, $to)
->andIdNotMore($than, $include = false)
->andIdNotLess($than, $include = false)
->orIdIn($array)
->orIdLike($id)
->orIdBetween($from, $to)
->orIdMore($than, $include = false)
->orIdLess($than, $include = false)
->orIdNot($id)
->orIdNotIn($array)
->orIdNotLike($id)
->orIdNotBetween($from, $to)
->orIdNotMore($than, $include = false)
->orIdNotLess($than, $include = false)
->orId($id)
```
