<?php

namespace app\modules_share\foot\controllers;
use app\modules_share\foot\models\FootSummaryIpd;

class FootAssessmentSummaryIpdController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new FootSummaryIpd();
        return $this->render('index',[
            'model' => $model
            ]);
    }
    

}
