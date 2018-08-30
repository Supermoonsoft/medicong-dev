<?php

use app\components\PatientHelper;
use app\components\MessageHelper;
use yii\helpers\Html;
use yii\widgets\Pjax;

$hn = PatientHelper::getCurrentHn();
$vn_session = PatientHelper::getCurrentVn();
if (empty($hn)) {
    MessageHelper::errorNullHn();
}

$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>
<div class="patiententry-default-index">
    <h3>Station: Patient-Entry</h3>

    <?php Pjax::begin(); ?>
    <?= Html::beginForm(['index'], 'post', ['data-pjax' => '', 'class' => 'form-inline', 'id' => 'vn-open']); ?>
    <?= Html::hiddenInput('hn', $hn) ?>
    <?php if (empty($vn_session)): ?>
        <?=
        Html::submitButton('ส่งตรวจ', ['class' => 'btn btn-lg btn-success',
            'data' => [
                'confirm' => 'ส่งผู้ป่วยเข้าตรวจ ?',
            //'method' => 'post',
            ]
        ])
        ?>
    <?php endif; ?>
    <?= Html::endForm() ?>
    <h3>
        <?php
        if (!empty($vn_session)) {
            echo 'VN = '.$vn_session;
        } else {
            echo 'รอเลข vn';
        }
        ?>
    </h3>
    <?php Pjax::end(); ?>


</div>
