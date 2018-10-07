<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\SStockIcathDispenData */

$this->title = 'Update Sstock Icath Dispen Data: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sstock Icath Dispen Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sstock-icath-dispen-data-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
