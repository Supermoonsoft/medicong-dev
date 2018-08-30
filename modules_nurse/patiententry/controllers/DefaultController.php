<?php

namespace app\modules_nurse\patiententry\controllers;

use yii\web\Controller;
use app\components\NurseHelper;
use app\components\PatientHelper;

/**
 * Default controller for the `patiententry` module
 */
class DefaultController extends Controller {

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {

        $hn = \Yii::$app->request->post('hn');
        $vn = '';
        if (!empty($hn)) {
            $vn = NurseHelper::openVisit($hn);
            PatientHelper::setCurrentVn($vn);
        }
        return $this->render('index', [
                    'vn' => $vn,
        ]);
    }

}
