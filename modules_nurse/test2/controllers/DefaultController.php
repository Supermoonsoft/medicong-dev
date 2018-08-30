<?php

namespace app\modules_nurse\test2\controllers;

use yii\web\Controller;

/**
 * Default controller for the `test2` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}