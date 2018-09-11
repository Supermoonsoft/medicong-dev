<?php

use yii\helpers\Html;
use app\components\PatientHelper;
use app\components\MessageHelper;

$this->title = "Nurse Chief complaint";
$this->params['breadcrumbs'][] = ['label' => 'Patient-Entry', 'url' => ['/nursescreen/default/index']];
$this->params['breadcrumbs'][] = $this->title;

$hn = PatientHelper::getCurrentHn();

$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>
<div class="nurse-cc-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
