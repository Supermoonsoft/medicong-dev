<?php

namespace app\modules_nurse\dietitian\controllers;

use yii\web\Controller;
use yii\helpers\Json;
use app\components\NoVisitController;
/**
 * Default controller for the `dietitian` module
 */
class DefaultController extends NoVisitController {

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTabsda() {
        $html = $this->renderPartial('/opdrecord/create');
        return $html;
    }

}
