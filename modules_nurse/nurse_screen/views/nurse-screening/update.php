<?php

use yii\helpers\Html;
use app\components\PatientHelper;
use app\components\MessageHelper;

$this->title = "Nurseing Assessment";
$this->params['breadcrumbs'][] = ['label' => 'Patient-Entry', 'url' => ['/nursescreen/default/index']];
$this->params['breadcrumbs'][] = $this->title;

$hn = PatientHelper::getCurrentHn();


$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>
<div class="nurse-screening-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
