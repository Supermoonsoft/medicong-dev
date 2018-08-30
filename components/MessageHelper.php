<?php

namespace app\components;

use yii\base\Component;
use yii\base\UserException;

class MessageHelper extends Component {

    public static function setFlashSuccess($msg) {
        \Yii::$app->session->setFlash('success', $msg);
    }

    public static function setFlashDanger($msg) {
        \Yii::$app->session->setFlash('danger', $msg);
    }

    public static function setFlashWarning($msg) {
        \Yii::$app->session->setFlash('warning', $msg);
    }

    public static function errorNullHn() {
        throw new UserException('ไม่พบผู้รับบริการ');
    }

}
