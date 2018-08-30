<?php

namespace app\modules_share\test\controllers;

use yii\web\Controller;
use app\components\PatientHelper;

/**
 * Default controller for the `test` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $hn= PatientHelper::getCurrentHn();
        return $this->render('index',[
            'hn'=>$hn
        ]);
    }
}
