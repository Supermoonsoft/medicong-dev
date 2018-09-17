<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\dietitian\models\SDietitianOpdNutritionalAssessment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sdietitian-opd-nutritional-assessment-form">

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

    <?= $form->field($model, 'data1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visit_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'co_morbidities')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Type_of_hd')->textInput() ?>

    <?= $form->field($model, 'nutrition_history')->textInput() ?>

    <?= $form->field($model, 'clinical_data')->textInput() ?>

    <?= $form->field($model, 'lab_result_today')->textInput() ?>

    <?= $form->field($model, 'dietary_intake')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'assessment_and_plan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idnt_diag1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idnt_diag2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idnt_diag3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idnt_diag4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idnt_diag5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'next_followup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'next_followup_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
