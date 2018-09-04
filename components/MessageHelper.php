<?php

namespace app\components;

use yii\base\Component;
use yii\base\UserException;

class MessageHelper extends Component {

    public static function setFlashSuccess($msg) { // ใช้ใน action
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
    
    public static function Note($note_text){
        return "<div style='color: red'>** $note_text</div>";
    }

}
