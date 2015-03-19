<?php

namespace phpshko\magicscopes;


class MagicActiveQuery extends \yii\db\ActiveQuery
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => MagicScopesBehavior::className()
            ]
        ];
    }
}