<?php

namespace app\modules_share\foot\controllers;
use yii;
use app\modules_share\foot\models\SFootUlcerFuOpd;
use app\components\PatientHelper;
use app\components\VisitController;
use yii\web\Response;
use app\components\MessageHelper;


class FootUlcerFuOpdController extends VisitController
{
    public function actionIndex()
    {
        $request = Yii::$app->request;
        $hn = PatientHelper::getCurrentHn();
        $vn = PatientHelper::getCurrentVn();
        $Sdate = PatientHelper::getDateVisitByVn($vn);
        $Stime = PatientHelper::getTimeVisitByVn($vn);
        $visit = SFootUlcerFuOpd::findOne(['hn' => $hn,'vn' => $vn]);
        if($visit){
            $model = SFootUlcerFuOpd::findOne(['hn' => $hn,'vn' => $vn]);
            $model->requester = '';
        }else{
            $model = new SFootUlcerFuOpd();
        }
        if ($model->load($request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            $model->hn = $hn;
            $model->vn = $vn;
            $model->date_start_service = $Sdate;
            $model->time_start_service = $Stime;
            $model->save(false);
            if($model->requester){
                MessageHelper::setFlashSuccess('บันทึกข้อมูลสำเร็จ');
                return $this->redirect(['/foot/foot-ulcer-fu-opd']);
             }else{
                return ['data' => 'success'];
            }
        } else {
            return $this->render('index',[
                'model' => $model,
                'hn' => $hn,
                'vn' => $vn
                ]);
        }
    }
    

}
