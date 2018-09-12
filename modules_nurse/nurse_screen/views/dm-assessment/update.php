<?php

use yii\helpers\Html;
use app\components\PatientHelper;
use app\components\MessageHelper;

$this->title = "Dm Assessments";
$this->params['breadcrumbs'][] = ['label' => 'Patient-Entry', 'url' => ['/nursescreen/default/index']];
$this->params['breadcrumbs'][] = $this->title;

$hn = PatientHelper::getCurrentHn();

$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>
<div class="dm-assessment-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
