<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\SStockIcathDispen */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sstock Icath Dispens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sstock-icath-dispen-view">

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
            'icd101',
            'icd9',
            'doctor',
            'date_visit',
            'datetime_or_start',
            'datetime_or_end',
            'ward',
            'room_or',
            'insurance_id',
            'date_admit',
            'date_dch',
            'doc_no',
            'doc_date',
            'ortype',
            'data_json',
            'requester',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
            'date_start_service',
            'time_start_service',
            'date_end_service',
            'time_end_service',
            'send_stock',
            'send_account',
            'send_patient',
        ],
    ]) ?>

</div>
