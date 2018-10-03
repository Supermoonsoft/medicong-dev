<?php

use yii\helpers\Html;
use app\components\PatientHelper;
use app\components\MessageHelper;
use app\components\loading\ShowLoading;
echo ShowLoading::widget();

$this->title = "Dm Assessments";
//$this->params['breadcrumbs'][] = ['label' => 'Dm Assessments', 'url' => ['/dmassessments/dmassessments/index']];
$this->params['breadcrumbs'][] = $this->title;


$hn = PatientHelper::getCurrentHn();
$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);

?>
<div class="dm-assessment-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
