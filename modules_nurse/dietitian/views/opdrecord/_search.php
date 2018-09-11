<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\dietitian\models\SDietitianOpdNutririonVisitRecordSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sdietitian-opd-nutrition-visit-record-search">

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

    <?php // echo $form->field($model, 'nutritional_histiry') ?>

    <?php // echo $form->field($model, 'pg') ?>

    <?php // echo $form->field($model, 'a1c') ?>

    <?php // echo $form->field($model, 'tc') ?>

    <?php // echo $form->field($model, 'hdl_c') ?>

    <?php // echo $form->field($model, 'ldl_c') ?>

    <?php // echo $form->field($model, 'non_hdl_c') ?>

    <?php // echo $form->field($model, 'bun') ?>

    <?php // echo $form->field($model, 'cr') ?>

    <?php // echo $form->field($model, 'egfr') ?>

    <?php // echo $form->field($model, 'sodium') ?>

    <?php // echo $form->field($model, 'potassium') ?>

    <?php // echo $form->field($model, 'chloride') ?>

    <?php // echo $form->field($model, 'co2') ?>

    <?php // echo $form->field($model, 'albumin') ?>

    <?php // echo $form->field($model, 'calcium') ?>

    <?php // echo $form->field($model, 'phosphorus') ?>

    <?php // echo $form->field($model, 'magnesium') ?>

    <?php // echo $form->field($model, 'uric_acid') ?>

    <?php // echo $form->field($model, 'hb') ?>

    <?php // echo $form->field($model, 'alt_lab') ?>

    <?php // echo $form->field($model, 'idnt_diag1') ?>

    <?php // echo $form->field($model, 'idnt_diag2') ?>

    <?php // echo $form->field($model, 'idnt_diag3') ?>

    <?php // echo $form->field($model, 'idnt_diag4') ?>

    <?php // echo $form->field($model, 'idnt_diag5') ?>

    <?php // echo $form->field($model, 'stage_of_chang') ?>

    <?php // echo $form->field($model, 'lest_2_serving') ?>

    <?php // echo $form->field($model, 'limit_high') ?>

    <?php // echo $form->field($model, 'control_protein') ?>

    <?php // echo $form->field($model, 'control_cho') ?>

    <?php // echo $form->field($model, 'limit_added_sugar') ?>

    <?php // echo $form->field($model, 'control_fruit') ?>

    <?php // echo $form->field($model, 'least_4_serving') ?>

    <?php // echo $form->field($model, 'limit_sodium') ?>

    <?php // echo $form->field($model, 'limit_alcohol') ?>

    <?php // echo $form->field($model, 'physical_activity') ?>

    <?php // echo $form->field($model, 'next_followup') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
