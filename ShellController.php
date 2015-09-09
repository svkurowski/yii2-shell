<?php

namespace svkurowski\shell;

use Yii;
use yii\console\Controller;

/**
 * Provides access to an interactive shell.
 */
class ShellController extends Controller
{
    public $defaultAction = 'run';

    /**
     * Starts the shell.
     */
    public function actionRun()
    {
        $vars         = get_defined_vars();
        $vars['this'] = Yii::$app;
        $sh           = new \Psy\Shell();
        $sh->setScopeVariables($vars);
        $sh->run();

        return self::EXIT_CODE_NORMAL;
    }
}
