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


In Gii
------------

You can generate a model using "Magic Scopes Generator". Will be automatically generated needs PHPDoc and overwrite find() method.
In this generator, you can select "Creation Mode" and "Save DocBlock to".


Creation Mode:
* Use Magic Query
    ```php
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
    ```

* Create Query
    ```php
        /**
         * This is the model class for table "user".
         *
         * @property integer $id
         * @property string $username
         * @property string $forename
         * @property string $surname
         * @property integer $year
         * @property integer $address_id
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
    ```
    
    and automatically create query class, attach behavior, and put PhpDoc
    
    ```php
    ...
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
    ```

* Attach Behavior

    ```php
    ...
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
    ```

If you select "Save DocBlock to MagicAutoComplete.php", all PhpDoc for this model to be merged with the old data in the file MagicAutoComplete.php (in the same folder as the model)

You can see examples of created models with different settings [here](https://github.com/phpshko/yii2-magic-scopes/blob/master/tests/unit/models).

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
