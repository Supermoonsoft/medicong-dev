<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\MMaspriceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mmasprice-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'section') ?>

    <?= $form->field($model, 'code') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'charge_code') ?>

    <?= $form->field($model, 'charge_name') ?>

    <?php // echo $form->field($model, 'opd_price') ?>

    <?php // echo $form->field($model, 'opd_dr_percent') ?>

    <?php // echo $form->field($model, 'opd_dr_amt') ?>

    <?php // echo $form->field($model, 'ipd_price') ?>

    <?php // echo $form->field($model, 'ipd_dr_percent') ?>

    <?php // echo $form->field($model, 'ipd_dr_amt') ?>

    <?php // echo $form->field($model, 'price_cost') ?>

    <?php // echo $form->field($model, 'recieve_code') ?>

    <?php // echo $form->field($model, 'recieve_thai_name') ?>

    <?php // echo $form->field($model, 'recieve_eng_name') ?>

    <?php // echo $form->field($model, 'change_date') ?>

    <?php // echo $form->field($model, 'update_time') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'map_code') ?>

    <?php // echo $form->field($model, 'is_active') ?>

    <?php // echo $form->field($model, 'id') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'requester') ?>

    <?php // echo $form->field($model, 'data_json') ?>

    <?php // echo $form->field($model, 'data1') ?>

    <?php // echo $form->field($model, 'data2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
