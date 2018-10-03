<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\drug\models\Pccmed */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pccmeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pccmed-view">

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
            'an',
            'icode',
            'qty',
            'unitprice',
            'druguse',
            'costprice',
            'totalprice',
            'provider_code',
            'provider_name',
            'date_service',
            'time_service',
            'data_json',
            'unit',
            'tmt24_code',
            'usage_line1',
            'usage_line2',
            'usage_line3',
            'drug_name',
        ],
    ]) ?>

</div>
