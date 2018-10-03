<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\dmassessment\models\DmassessmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dmassessment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'vn') ?>

    <?= $form->field($model, 'hn') ?>

    <?= $form->field($model, 'data_json') ?>

    <?= $form->field($model, 'requester') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'date_start_service') ?>

    <?php // echo $form->field($model, 'time_start_service') ?>

    <?php // echo $form->field($model, 'date_end_service') ?>

    <?php // echo $form->field($model, 'time_end_service') ?>

    <?php // echo $form->field($model, 'last_meal_eating') ?>

    <?php // echo $form->field($model, 'last_meal_eating_data') ?>

    <?php // echo $form->field($model, 'last_insulin') ?>

    <?php // echo $form->field($model, 'last_insulin_data') ?>

    <?php // echo $form->field($model, 'psychosocial_problem') ?>

    <?php // echo $form->field($model, 'key_presenting') ?>

    <?php // echo $form->field($model, 'chest_discomfort')->checkbox() ?>

    <?php // echo $form->field($model, 'blurred_vision')->checkbox() ?>

    <?php // echo $form->field($model, 'numbness')->checkbox() ?>

    <?php // echo $form->field($model, 'foot_ulcer')->checkbox() ?>

    <?php // echo $form->field($model, 'hbpm') ?>

    <?php // echo $form->field($model, 'hbpm_frequency')->checkbox() ?>

    <?php // echo $form->field($model, 'hbpm_day') ?>

    <?php // echo $form->field($model, 'hbpm_week') ?>

    <?php // echo $form->field($model, 'hbpm_month') ?>

    <?php // echo $form->field($model, 'hbpm_result')->checkbox() ?>

    <?php // echo $form->field($model, 'hbpm_sbp')->checkbox() ?>

    <?php // echo $form->field($model, 'hbpm_sbp_data') ?>

    <?php // echo $form->field($model, 'hbpm_dbp')->checkbox() ?>

    <?php // echo $form->field($model, 'hbpm_dbp_data') ?>

    <?php // echo $form->field($model, 'hbpm_pulse')->checkbox() ?>

    <?php // echo $form->field($model, 'hbpm_pulse_data') ?>

    <?php // echo $form->field($model, 'smbg') ?>

    <?php // echo $form->field($model, 'smbg_frequency')->checkbox() ?>

    <?php // echo $form->field($model, 'smbg_day') ?>

    <?php // echo $form->field($model, 'smbg_week') ?>

    <?php // echo $form->field($model, 'smbg_month') ?>

    <?php // echo $form->field($model, 'smbg_result')->checkbox() ?>

    <?php // echo $form->field($model, 'smbg_sbp')->checkbox() ?>

    <?php // echo $form->field($model, 'smbg_sbp_data') ?>

    <?php // echo $form->field($model, 'smbg_dbp')->checkbox() ?>

    <?php // echo $form->field($model, 'smbg_dbp_data') ?>

    <?php // echo $form->field($model, 'smbg_pulse')->checkbox() ?>

    <?php // echo $form->field($model, 'smbg_pulse_data') ?>

    <?php // echo $form->field($model, 'hyperglycemic') ?>

    <?php // echo $form->field($model, 'hyperglycemic_data') ?>

    <?php // echo $form->field($model, 'hypoglycemic') ?>

    <?php // echo $form->field($model, 'hypoglycemic_data') ?>

    <?php // echo $form->field($model, 'hypoglycemic_risk') ?>

    <?php // echo $form->field($model, 'hypoglycemic_risk1') ?>

    <?php // echo $form->field($model, 'hypoglycemic_risk1_data') ?>

    <?php // echo $form->field($model, 'hypoglycemic_risk2') ?>

    <?php // echo $form->field($model, 'hypoglycemic_risk2_data') ?>

    <?php // echo $form->field($model, 'hypoglycemic_risk3') ?>

    <?php // echo $form->field($model, 'hypoglycemic_risk3_data') ?>

    <?php // echo $form->field($model, 'diet_data1') ?>

    <?php // echo $form->field($model, 'diet_data2') ?>

    <?php // echo $form->field($model, 'exercise_data1') ?>

    <?php // echo $form->field($model, 'exercise_data2') ?>

    <?php // echo $form->field($model, 'drug_data1') ?>

    <?php // echo $form->field($model, 'drug_data2') ?>

    <?php // echo $form->field($model, 'smooking') ?>

    <?php // echo $form->field($model, 'smooking_ex1')->checkbox() ?>

    <?php // echo $form->field($model, 'smooking_ex1_day') ?>

    <?php // echo $form->field($model, 'smooking_ex1_year') ?>

    <?php // echo $form->field($model, 'smooking_ex2') ?>

    <?php // echo $form->field($model, 'smooking_ex2_day') ?>

    <?php // echo $form->field($model, 'smooking_ex2_year') ?>

    <?php // echo $form->field($model, 'vaccination_date1') ?>

    <?php // echo $form->field($model, 'vaccination_date2') ?>

    <?php // echo $form->field($model, 'smooking2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
