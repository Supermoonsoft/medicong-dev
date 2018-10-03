<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\appointment\models\PccAppointmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pcc-appointment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'hn') ?>

    <?= $form->field($model, 'vn') ?>

    <?= $form->field($model, 'provider_code') ?>

    <?= $form->field($model, 'provider_name') ?>

    <?php // echo $form->field($model, 'date_service') ?>

    <?php // echo $form->field($model, 'time_service') ?>

    <?php // echo $form->field($model, 'clinic') ?>

    <?php // echo $form->field($model, 'appoint_date') ?>

    <?php // echo $form->field($model, 'appoint_time') ?>

    <?php // echo $form->field($model, 'detail') ?>

    <?php // echo $form->field($model, 'data_json') ?>

    <?php // echo $form->field($model, 'last_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
