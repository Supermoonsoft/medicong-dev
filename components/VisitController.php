<?php

namespace app\components;

use yii\web\Controller;
use app\components\PatientHelper;

class VisitController extends Controller {

    public function beforeAction($action) {
        $hn = PatientHelper::getCurrentHn();
        $vn = PatientHelper::getCurrentVn();
        if (empty($hn)) {
            return $this->redirect(['/site/index']);
        }
        if(empty($vn)){
            return $this->redirect(['/screen']);
        }
        return parent::beforeAction($action);
    }

}
