<?php

namespace app\modules_share\foot\controllers;
use app\modules_share\foot\models\FootUlcerFirstOpd;

class FootUlcerFirstOpdController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new FootUlcerFirstOpd();
        return $this->render('index',[
            'model' => $model
            ]);
    }
    

}
