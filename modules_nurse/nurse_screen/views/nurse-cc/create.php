<?php

use yii\helpers\Html;
use app\components\PatientHelper;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\nurse_screen\models\NurseCc */

$this->title = 'Nurse Chief complaint';

?>
<div class="nurse-cc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <h1><?php
        if (!empty($vn_session)) {
            //echo 'VN = '.$vn_session;
        } else {
            //echo 'รอเลข vn';
        }
        ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
