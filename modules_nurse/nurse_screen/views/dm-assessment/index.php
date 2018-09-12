<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use app\components\PatientHelper;
use app\components\MessageHelper;
use app\components\loading\ShowLoading;
echo ShowLoading::widget();

$this->title = "Dm Assessments";
$this->params['breadcrumbs'][] = ['label' => 'Patient-Entry', 'url' => ['/nursescreen/default/index']];
$this->params['breadcrumbs'][] = $this->title;

$hn = PatientHelper::getCurrentHn();

$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);

?>
<div class="dm-assessment-index">
<div class="panel panel-success box-shadow">
  <div class="panel-heading">
  <div class="panel-title">
    <i class="fa fa-sticky-note-o"></i>HN :<?= $hn ?></div>
  </div>
<div class="panel-body">
    <?php Pjax::begin(); ?>
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
                'attribute'=>'vaccination_date1',
                'label'=>'ประเมินครั้งที่ 1 ',
                'value'=>function ($model, $key, $index) { 
                    return $model->vaccination_date1;
                },
            ],
            [
                'attribute'=>'vaccination_date2',
                'label'=>'ประเมินครั้งที่ 2 ',
                'value'=>function ($model, $key, $index) { 
                    return $model->vaccination_date2;
                },
            ],
            //'id',
            //'vn',
            
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

            ['class' => 'kartik\grid\ActionColumn']
        ],
    ]); ?>
    <?php Pjax::end(); ?>
    </div>
</div>    
</div>
