<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\stock\models\GatewayCDrugItems */

$this->title = 'Update Gateway Cdrug Items: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Gateway Cdrug Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gateway-cdrug-items-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
