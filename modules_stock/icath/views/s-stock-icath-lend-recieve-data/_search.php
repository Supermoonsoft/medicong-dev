<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\SStockIcathLendRecieveDataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sstock-icath-lend-recieve-data-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'receive_id') ?>

    <?= $form->field($model, 'code') ?>

    <?= $form->field($model, 'qty') ?>

    <?= $form->field($model, 'unitprice') ?>

    <?php // echo $form->field($model, 'unitcost') ?>

    <?php // echo $form->field($model, 'lot') ?>

    <?php // echo $form->field($model, 'mfd_date') ?>

    <?php // echo $form->field($model, 'exp_date') ?>

    <?php // echo $form->field($model, 'detail') ?>

    <?php // echo $form->field($model, 'vn') ?>

    <?php // echo $form->field($model, 'hn') ?>

    <?php // echo $form->field($model, 'data_json') ?>

    <?php // echo $form->field($model, 'requester') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'date_start_service') ?>

    <?php // echo $form->field($model, 'time_start_service') ?>

    <?php // echo $form->field($model, 'date_end_service') ?>

    <?php // echo $form->field($model, 'time_end_service') ?>

    <?php // echo $form->field($model, 'vendor_dispen_lot') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
