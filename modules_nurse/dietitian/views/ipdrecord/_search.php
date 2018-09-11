<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\dietitian\models\SDietitianIpdNutririonVisitRecordSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sdietitian-ipd-nutririon-visit-record-search">

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

    <?php // echo $form->field($model, 'principal_diag') ?>

    <?php // echo $form->field($model, 'co_morbidity') ?>

    <?php // echo $form->field($model, 'visit_no') ?>

    <?php // echo $form->field($model, 'source_data') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'long') ?>

    <?php // echo $form->field($model, 'arm_span') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'weighing') ?>

    <?php // echo $form->field($model, 'bmi') ?>

    <?php // echo $form->field($model, 'bmi_check') ?>

    <?php // echo $form->field($model, 'albumin') ?>

    <?php // echo $form->field($model, 'tlc') ?>

    <?php // echo $form->field($model, 'shape') ?>

    <?php // echo $form->field($model, 'weight_change') ?>

    <?php // echo $form->field($model, 'nature_food') ?>

    <?php // echo $form->field($model, 'food_intake') ?>

    <?php // echo $form->field($model, 'chew') ?>

    <?php // echo $form->field($model, 'digestive') ?>

    <?php // echo $form->field($model, 'eat') ?>

    <?php // echo $form->field($model, 'food_access') ?>

    <?php // echo $form->field($model, 'disease_min') ?>

    <?php // echo $form->field($model, 'disease_max') ?>

    <?php // echo $form->field($model, 'idnt_diag1') ?>

    <?php // echo $form->field($model, 'idnt_diag2') ?>

    <?php // echo $form->field($model, 'idnt_diag3') ?>

    <?php // echo $form->field($model, 'idnt_diag4') ?>

    <?php // echo $form->field($model, 'idnt_diag5') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
