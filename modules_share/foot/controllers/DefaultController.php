<?php

namespace app\modules_share\foot\controllers;

use yii\web\Controller;
use app\modules_share\foot\models\FootAssessmentComplate;

/**
 * Default controller for the `foot` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionFootAssessmentSummary(){

    }

    public function actionFootAssessmentComplate(){
        
    }
}
