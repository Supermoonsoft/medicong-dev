<?php

namespace app\modules_share\foot\controllers;
use yii;
use app\modules_share\foot\models\SFootAssessmentSummaryOpd;
use app\components\PatientHelper;
use yii\web\Response;
use app\components\VisitController;


class FootAssessmentSummaryOpdController extends VisitController
{
    public function actionIndex()
    {
        $request = Yii::$app->request;
        $hn = PatientHelper::getCurrentHn();
        $vn = PatientHelper::getCurrentVn();
        $Sdate = PatientHelper::getDateVisitByVn($vn);
        $Stime = PatientHelper::getTimeVisitByVn($vn);
        $visit = SFootAssessmentSummaryOpd::findOne(['hn' => $hn,'vn' => $vn]);
        if($visit){
            $model = SFootAssessmentSummaryOpd::findOne(['hn' => $hn,'vn' => $vn]);
        }else{
            $model = new SFootAssessmentSummaryOpd();
        }
        if ($model->load($request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            $model->hn = $hn;
            $model->vn = $vn;
            $model->date_start_service = $Sdate;
            $model->time_start_service = $Stime;
            $model->save();
            return [
                'data' => $model
            ];
        } else {
            return $this->render('index',[
                'model' => $model,
                'hn' => $hn,
                'vn' => $vn,
                'Sdate' => $Sdate,
                'Stime' => $Stime
                ]);
        }
    }
    

}
