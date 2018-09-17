<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\dietitian\models\SDietitianOpdNutritionalAssessmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sdietitian-opd-nutritional-assessment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
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

    <?php // echo $form->field($model, 'data1') ?>

    <?php // echo $form->field($model, 'data2') ?>

    <?php // echo $form->field($model, 'visit_type') ?>

    <?php // echo $form->field($model, 'co_morbidities') ?>

    <?php // echo $form->field($model, 'Type_of_hd') ?>

    <?php // echo $form->field($model, 'nutrition_history') ?>

    <?php // echo $form->field($model, 'clinical_data') ?>

    <?php // echo $form->field($model, 'lab_result_today') ?>

    <?php // echo $form->field($model, 'dietary_intake') ?>

    <?php // echo $form->field($model, 'assessment_and_plan') ?>

    <?php // echo $form->field($model, 'idnt_diag1') ?>

    <?php // echo $form->field($model, 'idnt_diag2') ?>

    <?php // echo $form->field($model, 'idnt_diag3') ?>

    <?php // echo $form->field($model, 'idnt_diag4') ?>

    <?php // echo $form->field($model, 'idnt_diag5') ?>

    <?php // echo $form->field($model, 'next_followup') ?>

    <?php // echo $form->field($model, 'next_followup_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
