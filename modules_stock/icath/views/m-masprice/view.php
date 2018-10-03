<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\MMasprice */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Mmasprices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mmasprice-view">

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
            'section',
            'code',
            'name',
            'charge_code',
            'charge_name',
            'opd_price',
            'opd_dr_percent',
            'opd_dr_amt',
            'ipd_price',
            'ipd_dr_percent',
            'ipd_dr_amt',
            'price_cost',
            'recieve_code',
            'recieve_thai_name',
            'recieve_eng_name',
            'change_date',
            'update_time',
            'title',
            'map_code',
            'is_active',
            'id',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
            'requester',
            'data_json',
            'data1',
            'data2',
        ],
    ]) ?>

</div>
