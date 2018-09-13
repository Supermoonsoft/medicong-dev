<?php

namespace app\modules_share\qmanage\controllers;

use yii\web\Controller;
use app\components\PatientHelper;

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
        PatientHelper::removeCurrentHnVn();
        return $this->render('index');
    }
}
