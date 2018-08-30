<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\nurse_screen\models\DmAssessment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dm-assessment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'vn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_json')->textInput() ?>

    <?= $form->field($model, 'requester')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_start_service')->textInput() ?>

    <?= $form->field($model, 'time_start_service')->textInput() ?>

    <?= $form->field($model, 'date_end_service')->textInput() ?>

    <?= $form->field($model, 'time_end_service')->textInput() ?>

    <?= $form->field($model, 'last_meal_eating')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_meal_eating_data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_insulin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_insulin_data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'psychosocial_problem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'key_presenting')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chest_discomfort')->checkbox() ?>

    <?= $form->field($model, 'blurred_vision')->checkbox() ?>

    <?= $form->field($model, 'numbness')->checkbox() ?>

    <?= $form->field($model, 'foot_ulcer')->checkbox() ?>

    <?= $form->field($model, 'hbpm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hbpm_frequency')->checkbox() ?>

    <?= $form->field($model, 'hbpm_day')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hbpm_week')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hbpm_month')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hbpm_result')->checkbox() ?>

    <?= $form->field($model, 'hbpm_sbp')->checkbox() ?>

    <?= $form->field($model, 'hbpm_sbp_data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hbpm_dbp')->checkbox() ?>

    <?= $form->field($model, 'hbpm_dbp_data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hbpm_pulse')->checkbox() ?>

    <?= $form->field($model, 'hbpm_pulse_data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smbg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smbg_frequency')->checkbox() ?>

    <?= $form->field($model, 'smbg_day')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smbg_week')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smbg_month')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smbg_result')->checkbox() ?>

    <?= $form->field($model, 'smbg_sbp')->checkbox() ?>

    <?= $form->field($model, 'smbg_sbp_data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smbg_dbp')->checkbox() ?>

    <?= $form->field($model, 'smbg_dbp_data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smbg_pulse')->checkbox() ?>

    <?= $form->field($model, 'smbg_pulse_data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hyperglycemic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hyperglycemic_data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hypoglycemic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hypoglycemic_data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hypoglycemic_risk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hypoglycemic_risk1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hypoglycemic_risk1_data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hypoglycemic_risk2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hypoglycemic_risk2_data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hypoglycemic_risk3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hypoglycemic_risk3_data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diet_data1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diet_data2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exercise_data1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exercise_data2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'drug_data1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'drug_data2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smooking')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smooking_ex1')->checkbox() ?>

    <?= $form->field($model, 'smooking_ex1_day')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smooking_ex1_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smooking_ex2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smooking_ex2_day')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smooking_ex2_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vaccination_date1')->textInput() ?>

    <?= $form->field($model, 'vaccination_date2')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
