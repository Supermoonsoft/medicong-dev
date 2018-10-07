<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\SStockIcathLendRecieve */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sstock Icath Lend Recieves', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sstock-icath-lend-recieve-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'vn',
            'hn',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
            'date_start_service',
            'time_start_service',
            'date_end_service',
            'time_end_service',
            'date_in',
            'vendor',
            'invoice',
            'date_invoice',
            'detail',
            'totalprice',
            'requester',
            'data_json',
        ],
    ]) ?>

</div>
