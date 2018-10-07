<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\MStockIcathInsurance */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mstock Icath Insurances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mstock-icath-insurance-view">

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
            'insuranse_name',
            'address',
            'telephone',
            'id',
        ],
    ]) ?>

</div>
