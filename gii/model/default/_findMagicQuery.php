<?php
/* @var $this yii\web\View */
/* @var $generator phpshko\magicscopes\gii\model\Generator */
/* @var $className string class name */
?>
    /**
     * @inheritdoc
     * @return MagicActiveQuery|<?= $generator->isSaveToAutoComplete() ? 'MagicAutoComplete|' : '' ?><?= $className . "\n" ?>
     */
    public static function find()
    {
        return new MagicActiveQuery(get_called_class());
    }
