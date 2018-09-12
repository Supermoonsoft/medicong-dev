<?php

namespace app\modules_nurse\nurse_screen\controllers;

use app\modules_nurse\nurse_screen\models\OpdVisit;
use yii\filters\VerbFilter;
use app\components\NurseHelper;
use app\components\PatientHelper;
use app\components\NoVisitController;

class DefaultController extends NoVisitController {

    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex() {

        $hn = \Yii::$app->request->post('hn');
        $vn = '';        
       
        
        if (!empty($hn)) {
            $vn = NurseHelper::openVisit($hn);
            PatientHelper::setCurrentVn($vn);
        }
        return $this->render('index', [
                    'vn' => $vn,
                    
                   
        ]);
    }

}
