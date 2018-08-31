<?php

use yii\helpers\Html;
use app\components\PatientHelper;

$this->title = "Nurse Chief complaint";
$this->params['breadcrumbs'][] = ['label' => 'Patient-Entry', 'url' => ['/screen/default/index']];
$this->params['breadcrumbs'][] = $this->title;

$hn = PatientHelper::getCurrentHn();
if (empty($hn)) {
    MessageHelper::errorNullHn();
}

$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>
<div class="nurse-cc-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
