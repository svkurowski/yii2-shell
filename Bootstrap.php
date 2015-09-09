<?php

namespace svkurowski\shell;

class Bootstrap implements \yii\base\BootstrapInterface
{
    public function bootstrap($app)
    {
        if ($app instanceof \yii\console\Application) {
            $app->controllerMap['shell'] = 'svkurowski\shell\ShellController';
        }
    }
}
