<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\SStockIcathHistoryRecieveData */

$this->title = 'Update Sstock Icath History Recieve Data: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sstock Icath History Recieve Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sstock-icath-history-recieve-data-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
