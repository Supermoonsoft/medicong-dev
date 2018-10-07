<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\SStockIcathLendRecieve */

$this->title = 'Update Sstock Icath Lend Recieve: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sstock Icath Lend Recieves', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sstock-icath-lend-recieve-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
