<?php

namespace app\modules_share\opdvisit\controllers;

use yii\web\Controller;

/**
 * Default controller for the `opdvisit` module
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
