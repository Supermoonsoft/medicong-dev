<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\chiefcomplaint\models\Pccservicecc */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pccserviceccs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pccservicecc-view">

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
            'pcc_vn',
            'data_json',
            'pcc_start_service_datetime',
            'pcc_end_service_datetime',
            'data1',
            'data2',
            'hoscode',
            'sbp',
            'dbp',
            'temp',
            'pp',
            'pr',
            'o2sat',
            'height',
            'weight',
            'cc_text:ntext',
        ],
    ]) ?>

</div>
