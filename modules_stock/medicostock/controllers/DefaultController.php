<?php

namespace app\modules_stock\medicostock\controllers;

use yii\web\Controller;

/**
 * Default controller for the `medicostock` module
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
