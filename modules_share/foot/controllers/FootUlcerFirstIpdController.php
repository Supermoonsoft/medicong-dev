<?php

namespace app\modules_share\foot\controllers;

use Yii;
use app\modules_share\foot\models\SFootUlcerFirstIpd;
use app\components\PatientHelper;
use yii\web\Response;
use app\components\VisitController;

class FootUlcerFirstIpdController extends VisitController
{
    public function actionIndex()
    {
        $request = Yii::$app->request;
        $hn = PatientHelper::getCurrentHn();
        $vn = PatientHelper::getCurrentVn();
        $Sdate = PatientHelper::getDateVisitByVn($vn);
        $Stime = PatientHelper::getTimeVisitByVn($vn);
        $visit = SFootUlcerFirstIpd::findOne(['hn' => $hn,'vn' => $vn]);
        if($visit){
            $model = SFootUlcerFirstIpd::findOne(['hn' => $hn,'vn' => $vn]);
            $model->requester = '';
        }else{
            $model = new SFootUlcerFirstIpd();
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
