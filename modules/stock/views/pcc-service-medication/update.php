<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\stock\models\PccServiceMedication */

$this->title = 'Update Pcc Service Medication: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pcc Service Medications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pcc-service-medication-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
