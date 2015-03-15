<?php

namespace phpshko\magicscopes;

use yii\base\Application;
use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    /**
     * Bootstrap method to be called during application bootstrap stage.
     *
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        if ($app->hasModule('gii')) {
            $app->getModule('gii')->generators['model'] = 'phpshko\magicscopes\gii\model\Generator';
        }
    }
}
