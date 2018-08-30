<?php

namespace app\components;

use yii\base\Component;
use yii\db\Expression;

class DateTimeHelper extends Component {

    public static function getDbDateTimeNow() {
        $expression = new Expression("NOW()");
        return (new \yii\db\Query)->select($expression)->scalar();
    }

}
