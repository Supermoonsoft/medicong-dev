<?php

namespace app\modules_share\foot\controllers;
use app\modules_share\foot\models\FootUlcerFuIpd;

class FootUlcerFuIpdController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new FootUlcerFuIpd();
        return $this->render('index',[
            'model' => $model
            ]);
    }
    

}
