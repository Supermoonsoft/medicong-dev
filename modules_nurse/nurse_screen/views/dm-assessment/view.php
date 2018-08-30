<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\nurse_screen\models\DmAssessment */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dm Assessments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dm-assessment-view">

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
            'last_meal_eating',
            'last_meal_eating_data',
            'last_insulin',
            'last_insulin_data',
            'psychosocial_problem',
            'key_presenting',
            'chest_discomfort:boolean',
            'blurred_vision:boolean',
            'numbness:boolean',
            'foot_ulcer:boolean',
            'hbpm',
            'hbpm_frequency:boolean',
            'hbpm_day',
            'hbpm_week',
            'hbpm_month',
            'hbpm_result:boolean',
            'hbpm_sbp:boolean',
            'hbpm_sbp_data',
            'hbpm_dbp:boolean',
            'hbpm_dbp_data',
            'hbpm_pulse:boolean',
            'hbpm_pulse_data',
            'smbg',
            'smbg_frequency:boolean',
            'smbg_day',
            'smbg_week',
            'smbg_month',
            'smbg_result:boolean',
            'smbg_sbp:boolean',
            'smbg_sbp_data',
            'smbg_dbp:boolean',
            'smbg_dbp_data',
            'smbg_pulse:boolean',
            'smbg_pulse_data',
            'hyperglycemic',
            'hyperglycemic_data',
            'hypoglycemic',
            'hypoglycemic_data',
            'hypoglycemic_risk',
            'hypoglycemic_risk1',
            'hypoglycemic_risk1_data',
            'hypoglycemic_risk2',
            'hypoglycemic_risk2_data',
            'hypoglycemic_risk3',
            'hypoglycemic_risk3_data',
            'diet_data1',
            'diet_data2',
            'exercise_data1',
            'exercise_data2',
            'drug_data1',
            'drug_data2',
            'smooking',
            'smooking_ex1:boolean',
            'smooking_ex1_day',
            'smooking_ex1_year',
            'smooking_ex2',
            'smooking_ex2_day',
            'smooking_ex2_year',
            'vaccination_date1',
            'vaccination_date2',
        ],
    ]) ?>

</div>