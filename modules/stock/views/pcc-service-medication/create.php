<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\stock\models\PccServiceMedication */

$this->title = 'Create Pcc Service Medication';
$this->params['breadcrumbs'][] = ['label' => 'Pcc Service Medications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcc-service-medication-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
