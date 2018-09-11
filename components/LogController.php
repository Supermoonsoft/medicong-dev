<?php

namespace app\components;

use yii\web\Controller;
use app\components\sys_models\SysRoutingLog;


class LogController extends Controller {

    public function afterAction($action, $result) {
        
        
        $routing_id = $this->module->id.'/'.$this->id.'/'.$action->id;
        $model = new SysRoutingLog();
        $model->routing_id = $routing_id;
        $array = [
            'ip'=>\Yii::$app->request->userIP,
            'host'=>\Yii::$app->request->userHost,
            'agent'=> \Yii::$app->request->userAgent,
            'components'=>'LogController',
            'version'=>'20180911'
        ];
        $model->data_json = $array;
        $model->save();
        
        return parent::afterAction($action, $result);
    }

}
