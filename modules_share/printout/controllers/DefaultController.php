<?php

namespace app\modules_share\printout\controllers;

use app\components\NoVisitController;

/**
 * Default controller for the `printout` module
 */
class DefaultController extends NoVisitController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
