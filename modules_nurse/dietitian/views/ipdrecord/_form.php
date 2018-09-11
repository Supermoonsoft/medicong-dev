<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\dietitian\models\SDietitianIpdNutririonVisitRecord */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sdietitian-ipd-nutririon-visit-record-form">

    <?php $form = ActiveForm::begin(); ?>


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

    <?= $form->field($model, 'principal_diag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'co_morbidity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visit_no')->textInput() ?>

    <?= $form->field($model, 'source_data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'height')->textInput() ?>

    <?= $form->field($model, 'long')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'arm_span')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'weighing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bmi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bmi_check')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'albumin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tlc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shape')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight_change')->textInput() ?>

    <?= $form->field($model, 'nature_food')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'food_intake')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chew')->textInput() ?>

    <?= $form->field($model, 'digestive')->textInput() ?>

    <?= $form->field($model, 'eat')->textInput() ?>

    <?= $form->field($model, 'food_access')->textInput() ?>

    <?= $form->field($model, 'disease_min')->textInput() ?>

    <?= $form->field($model, 'disease_max')->textInput() ?>

    <?= $form->field($model, 'idnt_diag1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idnt_diag2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idnt_diag3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idnt_diag4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idnt_diag5')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
