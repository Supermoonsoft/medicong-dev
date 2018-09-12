<?php

namespace app\components;

use yii\base\Component;

class UserHelper extends Component{
    public static function isUserReadyLogin(){
        return !\Yii::$app->user->isGuest;
    }
}

