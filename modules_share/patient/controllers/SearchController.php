<?php

namespace app\modules_share\patient\controllers;

use yii\web\Controller;
use app\modules_share\newpatient\models\mPatient;
use app\components\PatientHelper;
use app\components\MessageHelper;
use app\components\UserHelper;
/**
 * Default controller for the `patient` module
 */
class SearchController extends Controller {

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionHn() {
        if(!UserHelper::isUserReadyLogin()){
            return $this->redirect(['/site/landing']);
        }
        PatientHelper::removeCurrentHnVn();        
        $hn = \Yii::$app->request->post('hn');
        $hn = '000000000' . $hn;
        $hn = substr($hn, -9);
        $model = mPatient::findOne($hn);
        if (!$model) {
            MessageHelper::setFlashDanger('ไม่พบ HN นี้ ในระบบ');
            return $this->redirect(['/site/index']);
        }
        PatientHelper::setCurrentHn($hn);
        return $this->redirect(['/nursescreen/default/index']);
        
    }

}
