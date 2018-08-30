<?php

namespace app\modules_share\foot\controllers;
use app\modules_share\foot\models\FootSummaryOpd;

class FootAssessmentSummaryOpdController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new FootSummaryOpd();
        return $this->render('index',[
            'model' => $model
            ]);
    }
    

}
