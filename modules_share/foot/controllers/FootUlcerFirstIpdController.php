<?php

namespace app\modules_share\foot\controllers;
use app\modules_share\foot\models\FootUlcerFirstIpd;

class FootUlcerFirstIpdController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new FootUlcerFirstIpd();
        return $this->render('index',[
            'model' => $model
            ]);
    }
    

}
