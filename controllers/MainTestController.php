<?php

namespace app\controllers;

use Yii;

use app\components\LogController;


class MainTestController extends LogController {

    public function actionIndex() {
        
        echo "OK";
    }

}
