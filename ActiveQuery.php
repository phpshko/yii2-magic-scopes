<?php

namespace phpshko\magicscopes;


class ActiveQuery  extends \yii\db\ActiveQuery
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