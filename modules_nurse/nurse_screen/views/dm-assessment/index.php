<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use app\components\PatientHelper;
use app\components\MessageHelper;

$this->title = "Dm Assessments";
$this->params['breadcrumbs'][] = ['label' => 'Patient-Entry', 'url' => ['/screen/default/index']];
$this->params['breadcrumbs'][] = ['label' => 'Dm Assessments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$hn = PatientHelper::getCurrentHn();
if (empty($hn)) {
    MessageHelper::errorNullHn();
}


$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);

?>
<div class="dm-assessment-index">


    <?php Pjax::begin(); ?>
  

    <p>
        <?= Html::a('สร้าง Dm Assessment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax'=>true,
        'pjaxSettings'=>[
            'neverTimeout'=>true,
            //'beforeGrid'=>'.',
            //'afterGrid'=>'My fancy content after.',
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'date_start_service',
            //'time_start_service',
            [
                'attribute'=>'date_start_service',
                'value'=>function ($model, $key, $index) { 
                    return $model->date_start_service.' '.$model->time_start_service;
                },
            ],
            //'id',
            //'vn',
            'hn',
            [
                'attribute'=>'hn',
                'label'=>'ชื่อผู้ป่วย',
                'value'=>function ($model, $key, $index) { 
                    return PatientHelper::getPatientTitleByHn($model->hn);
                },
            ],
            [
                'label'=>'Check',
                'format' => 'raw',
                'value'=>function ($model, $key, $index) { 
                    return '<i class="label label-danger">No</i>';
                },
            ],
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'date_start_service',
            //'time_start_service',
            //'date_end_service',
            //'time_end_service',
            //'last_meal_eating',
            //'last_meal_eating_data',
            //'last_insulin',
            //'last_insulin_data',
            //'psychosocial_problem',
            //'key_presenting',
            //'chest_discomfort:boolean',
            //'blurred_vision:boolean',
            //'numbness:boolean',
            //'foot_ulcer:boolean',
            //'hbpm',
            //'hbpm_frequency:boolean',
            //'hbpm_day',
            //'hbpm_week',
            //'hbpm_month',
            //'hbpm_result:boolean',
            //'hbpm_sbp:boolean',
            //'hbpm_sbp_data',
            //'hbpm_dbp:boolean',
            //'hbpm_dbp_data',
            //'hbpm_pulse:boolean',
            //'hbpm_pulse_data',
            //'smbg',
            //'smbg_frequency:boolean',
            //'smbg_day',
            //'smbg_week',
            //'smbg_month',
            //'smbg_result:boolean',
            //'smbg_sbp:boolean',
            //'smbg_sbp_data',
            //'smbg_dbp:boolean',
            //'smbg_dbp_data',
            //'smbg_pulse:boolean',
            //'smbg_pulse_data',
            //'hyperglycemic',
            //'hyperglycemic_data',
            //'hypoglycemic',
            //'hypoglycemic_data',
            //'hypoglycemic_risk',
            //'hypoglycemic_risk1',
            //'hypoglycemic_risk1_data',
            //'hypoglycemic_risk2',
            //'hypoglycemic_risk2_data',
            //'hypoglycemic_risk3',
            //'hypoglycemic_risk3_data',
            //'diet_data1',
            //'diet_data2',
            //'exercise_data1',
            //'exercise_data2',
            //'drug_data1',
            //'drug_data2',
            //'smooking',
            //'smooking_ex1:boolean',
            //'smooking_ex1_day',
            //'smooking_ex1_year',
            //'smooking_ex2',
            //'smooking_ex2_day',
            //'smooking_ex2_year',
            //'vaccination_date1',
            //'vaccination_date2',

            [
                'label'=>'Action',
                'format' => 'raw',
                'value' => function($model) {
                    return Html::a(' <i class="glyphicon glyphicon-pencil"></i> ', ['/screen/dm-assessment/update', 'id' => '35cd1195-6165-42d8-9425-bf0084db192c'], ['class' => 'btn btn-info']);
                }
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
