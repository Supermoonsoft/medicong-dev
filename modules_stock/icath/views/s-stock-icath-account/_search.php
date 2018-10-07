<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\SStockIcathAccountSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sstock-icath-account-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'vn') ?>

    <?= $form->field($model, 'hn') ?>

    <?= $form->field($model, 'an') ?>

    <?= $form->field($model, 'icd101') ?>

    <?php // echo $form->field($model, 'icd9') ?>

    <?php // echo $form->field($model, 'doctor') ?>

    <?php // echo $form->field($model, 'date_visit') ?>

    <?php // echo $form->field($model, 'datetime_or_start') ?>

    <?php // echo $form->field($model, 'datetime_or_end') ?>

    <?php // echo $form->field($model, 'ward') ?>

    <?php // echo $form->field($model, 'room_or') ?>

    <?php // echo $form->field($model, 'insurance_id') ?>

    <?php // echo $form->field($model, 'date_admit') ?>

    <?php // echo $form->field($model, 'date_dch') ?>

    <?php // echo $form->field($model, 'doc_no') ?>

    <?php // echo $form->field($model, 'doc_date') ?>

    <?php // echo $form->field($model, 'ortype') ?>

    <?php // echo $form->field($model, 'send_real') ?>

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

    <?php // echo $form->field($model, 'vendor_id') ?>

    <?php // echo $form->field($model, 'pay') ?>

    <?php // echo $form->field($model, 'pay_date') ?>

    <?php // echo $form->field($model, 'pay_no') ?>

    <?php // echo $form->field($model, 'bank') ?>

    <?php // echo $form->field($model, 'check_no') ?>

    <?php // echo $form->field($model, 'dispen_id') ?>

    <?php // echo $form->field($model, 'vendor_dispen') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
