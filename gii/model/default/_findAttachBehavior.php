<?php
/* @var $this yii\web\View */
/* @var $generator phpshko\magicscopes\gii\model\Generator */
/* @var $className string class name */
?>
    /**
     * @inheritdoc
     * @return ActiveQuery|<?= $generator->isSaveToAutoComplete() ? 'MagicAutoComplete|' : '' ?><?= $className . "\n" ?>
     */
    public static function find()
    {
        $query = parent::find();
        $query->attachBehavior('MagicScopesBehavior', MagicScopesBehavior::className());
        return $query;
    }
