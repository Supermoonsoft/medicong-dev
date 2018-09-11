<?php

namespace app\modules_share\foot\controllers;
use yii;
use app\modules_share\foot\models\SFootUlcerFuIpd;
use app\components\PatientHelper;
use app\components\VisitController;
use yii\web\Response;

class FootUlcerFuIpdController extends VisitController
{
    public function actionIndex()
    {
        $request = Yii::$app->request;
        $hn = PatientHelper::getCurrentHn();
        $vn = PatientHelper::getCurrentVn();
        $Sdate = PatientHelper::getDateVisitByVn($vn);
        $Stime = PatientHelper::getTimeVisitByVn($vn);
        $visit = SFootUlcerFuIpd::findOne(['hn' => $hn,'vn' => $vn]);
        if($visit){
            $model = SFootUlcerFuIpd::findOne(['hn' => $hn,'vn' => $vn]);
            $model->requester = '';
        }else{
            $model = new SFootUlcerFuIpd();
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
                'vn' => $vn
                ]);
        }
    }
    

}
