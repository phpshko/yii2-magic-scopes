<?php
/* @var $this yii\web\View */
/* @var $generator phpshko\magicscopes\gii\model\Generator */
/* @var $className string class name */
?>
    /**
     * @inheritdoc
     * @return <?= $className ?>Query|<?= $generator->isSaveToAutoComplete() ? 'MagicAutoComplete|' : '' ?><?= $className . "\n" ?>
     */
    public static function find()
    {
        return new <?= $className ?>Query(get_called_class());
    }
