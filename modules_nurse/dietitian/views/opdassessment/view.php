<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\dietitian\models\SDietitianOpdNutritionalAssessment */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sdietitian Opd Nutritional Assessments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sdietitian-opd-nutritional-assessment-view">

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
            'visit_type',
            'co_morbidities',
            'Type_of_hd',
            'nutrition_history',
            'clinical_data',
            'lab_result_today',
            'dietary_intake',
            'assessment_and_plan',
            'idnt_diag1',
            'idnt_diag2',
            'idnt_diag3',
            'idnt_diag4',
            'idnt_diag5',
            'next_followup',
            'next_followup_date',
        ],
    ]) ?>

</div>
