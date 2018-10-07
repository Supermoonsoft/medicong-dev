<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\MStockIcathVendor */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mstock Icath Vendors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mstock-icath-vendor-view">

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
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
            'requester',
            'data_json',
            'data1',
            'data2',
            'vendor_name',
            'address',
            'telephone',
            'id',
        ],
    ]) ?>

</div>
