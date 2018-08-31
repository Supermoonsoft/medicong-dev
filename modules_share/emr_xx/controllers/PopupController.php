<?php

namespace app\modules_share\emr\controllers;

use yii\web\Controller;

/**
 * Default controller for the `emr` module
 */
class PopupController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex($params)
    {
        return $this->renderAjax('index',[
            'params'=>$params
        ]);
    }
}
