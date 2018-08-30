<?php

namespace app\modules_share\foot\controllers;
use app\modules_share\foot\models\FootAssessmentComplate;

class FootAssessmentComplateController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new FootAssessmentComplate();
        return $this->render('index',[
            'model' => $model
            ]);
    }
    

}
