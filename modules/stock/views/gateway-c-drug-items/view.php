<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\stock\models\GatewayCDrugItems */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Gateway Cdrug Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gateway-cdrug-items-view">

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
            'hospcode',
            'hospname',
            'icode',
            'drug_name',
            'qty',
            'unit',
            'usage_line1',
            'usage_line2',
            'usage_line3',
            'tmt24_code',
            'costprice',
            'unitprice',
            'drugtype',
        ],
    ]) ?>

</div>
