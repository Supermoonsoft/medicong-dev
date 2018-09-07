<?php

namespace app\components;

use yii\web\Controller;
use app\components\PatientHelper;

class NoVisitController extends Controller {

    public function beforeAction($action) {
        $hn = PatientHelper::getCurrentHn();        
        if (empty($hn)) {
            return $this->redirect(['/site/index']);
        }
        
        return parent::beforeAction($action);
    }

}
