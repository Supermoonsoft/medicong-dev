<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\servicedummy\models\SServiceDummy */

$this->title = $model->date_start_service;
$this->params['breadcrumbs'][] = ['label' => 'บริการ dummy', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sservice-dummy-view">

   
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
            //'id',
            //'vn',
            //'hn',
            //'data_json',
            //'requester',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            'date_start_service',
            'time_start_service',
            //'date_end_service',
            //'time_end_service',
            'data1',
            'data2',
        ],
    ]) ?>

</div>
