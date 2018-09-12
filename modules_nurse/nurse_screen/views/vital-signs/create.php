<?php

use yii\helpers\Html;
use app\components\PatientHelper;
use app\components\MessageHelper;
use app\components\loading\ShowLoading;
echo ShowLoading::widget();

$this->title = "Vital Signs";
$this->params['breadcrumbs'][] = ['label' => 'Patient-Entry', 'url' => ['/nursescreen/default/index']];
$this->params['breadcrumbs'][] = $this->title;

$hn = PatientHelper::getCurrentHn();
$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);


?>
<div class="vital-signs-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
