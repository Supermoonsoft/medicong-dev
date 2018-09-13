<?php

namespace app\modules_share\qmanage\controllers;

use yii\web\Controller;

/**
 * Default controller for the `qmanage` module
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
