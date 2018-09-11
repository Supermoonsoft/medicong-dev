<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\dietitian\models\SDietitianOpdNutritionVisitRecord */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sdietitian Opd Nutrition Visit Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sdietitian-opd-nutrition-visit-record-view">

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
            'data1',
            'data2',
            'principal_diag',
            'nutritional_histiry:ntext',
            'pg',
            'a1c',
            'tc',
            'hdl_c',
            'ldl_c',
            'non_hdl_c',
            'bun',
            'cr',
            'egfr',
            'sodium',
            'potassium',
            'chloride',
            'co2',
            'albumin',
            'calcium',
            'phosphorus',
            'magnesium',
            'uric_acid',
            'hb',
            'alt_lab',
            'idnt_diag1',
            'idnt_diag2',
            'idnt_diag3',
            'idnt_diag4',
            'idnt_diag5',
            'stage_of_chang',
            'lest_2_serving',
            'limit_high',
            'control_protein',
            'control_cho',
            'limit_added_sugar',
            'control_fruit',
            'least_4_serving',
            'limit_sodium',
            'limit_alcohol',
            'physical_activity',
            'next_followup',
        ],
    ]) ?>

</div>
