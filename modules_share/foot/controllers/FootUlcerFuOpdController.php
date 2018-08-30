<?php

namespace app\modules_share\foot\controllers;
use app\modules_share\foot\models\FootUlcerFuOpd;

class FootUlcerFuOpdController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new FootUlcerFuOpd();
        return $this->render('index',[
            'model' => $model
            ]);
    }
    

}
