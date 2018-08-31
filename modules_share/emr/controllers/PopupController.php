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
    public function actionIndex($type=null)
    {
        if($type==1){
            $report='visit.mrt';
        }elseif($type==2){
            $report='lab.mrt';
        }elseif($type==3){
            $report='drug.mrt';
        }elseif($type==4){
            $report='doc.mrt';
        }else{
             $report='pacs.mrt';
        }
        
        return $this->renderAjax('index',['report'=>$report]);
    }
}
