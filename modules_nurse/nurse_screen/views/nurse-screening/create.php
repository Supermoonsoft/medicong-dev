<?php

use yii\helpers\Html;
use app\components\PatientHelper;

$this->title = "Nurseing Assessment";
$this->params['breadcrumbs'][] = ['label' => 'Patient-Entry', 'url' => ['/screen/default/index']];
$this->params['breadcrumbs'][] = $this->title;

$hn = PatientHelper::getCurrentHn();
if (empty($hn)) {
    MessageHelper::errorNullHn();
}

$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>
<div class="nurse-screening-create">

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
