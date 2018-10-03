<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\stock\models\PccServiceMedicationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pcc-service-medication-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'vn') ?>

    <?= $form->field($model, 'hn') ?>

    <?= $form->field($model, 'an') ?>

    <?= $form->field($model, 'icode') ?>

    <?php // echo $form->field($model, 'qty') ?>

    <?php // echo $form->field($model, 'unitprice') ?>

    <?php // echo $form->field($model, 'druguse') ?>

    <?php // echo $form->field($model, 'costprice') ?>

    <?php // echo $form->field($model, 'totalprice') ?>

    <?php // echo $form->field($model, 'provider_code') ?>

    <?php // echo $form->field($model, 'provider_name') ?>

    <?php // echo $form->field($model, 'date_service') ?>

    <?php // echo $form->field($model, 'time_service') ?>

    <?php // echo $form->field($model, 'data_json') ?>

    <?php // echo $form->field($model, 'unit') ?>

    <?php // echo $form->field($model, 'tmt24_code') ?>

    <?php // echo $form->field($model, 'usage_line1') ?>

    <?php // echo $form->field($model, 'usage_line2') ?>

    <?php // echo $form->field($model, 'usage_line3') ?>

    <?php // echo $form->field($model, 'drug_name') ?>

    <?php // echo $form->field($model, 'hoscode') ?>

    <?php // echo $form->field($model, 'cid') ?>

    <?php // echo $form->field($model, 'pcc_vn') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
