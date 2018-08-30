<?php

namespace app\components;

use yii\base\Component;
use app\modules_share\newpatient\models\mPatient;
use app\models\lookup\CPrename;
use yii\base\UserException;

class PatientHelper extends Component {

    public static function getPatientTitleByHn($hn) {

        $show = "ไม่มีผู้รับบริการ";
        if (empty($hn)) {
            return $show;
        }
        $model = mPatient::findOne($hn);
        if ($model) {
            $prename = CPrename::findOne($model->prename);
            $pt_title = $prename->title_th . $model->fname . " " . $model->lname;
            $pt_title .= " " . $model->agey . "ปี " . $model->agem . "ด " . $model->aged . "ว";
            return $pt_title;
        } else {
            return "ไม่มีผู้รับบริการ";
        }
    }

    public static function genNextHn() {
        $prev_hn = mPatient::find()->orderBy(['hn' => SORT_DESC])->one();
        $next_hn = '000000000' . ((int) $prev_hn->hn + 1);
        return substr($next_hn, -9);
    }

    public static function setCurrentHn($hn) {
        self::removeCurrentHn();
        \Yii::$app->session->set('hn', $hn);
    }

    public static function setCurrentVn($vn) {
        self::removeCurrentVn();
        \Yii::$app->session->set('vn', $vn);
    }

    public static function setCurrentHnVn($hn, $vn) {
        self::removeCurrentHnVn();
        \Yii::$app->session->set('hn', $hn);
        \Yii::$app->session->set('vn', $vn);
    }

    public static function getCurrentHn() {        
        return \Yii::$app->session->get('hn');
    }

    public static function getCurrentVn() {
        return \Yii::$app->session->get('vn');
    }

    public static function removeCurrentHn() {
        \Yii::$app->session->remove('hn');
    }

    public static function removeCurrentVn() {
        \Yii::$app->session->remove('vn');
    }

    public static function removeCurrentHnVn() {
        \Yii::$app->session->remove('hn');
        \Yii::$app->session->remove('vn');
    }
   
   

}
