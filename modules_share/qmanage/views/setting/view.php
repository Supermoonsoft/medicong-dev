<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\components\loading\ShowLoading;
echo ShowLoading::widget();

/* @var $this yii\web\View */
/* @var $model app\modules_share\qmanage\models\CDoctorRoom */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'รายการ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cdoctor-room-view">

   

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'ยืนยันการลบ ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'doctor_id',
            'is_active:boolean',
            'created_by',
            'created_at',
            'updated_by',
            'updated_at',
        ],
    ]) ?>

</div>
