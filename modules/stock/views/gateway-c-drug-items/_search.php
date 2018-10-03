<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\stock\models\GatewayCDrugItemsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gateway-cdrug-items-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'hospcode') ?>

    <?= $form->field($model, 'hospname') ?>

    <?= $form->field($model, 'icode') ?>

    <?= $form->field($model, 'drug_name') ?>

    <?php // echo $form->field($model, 'qty') ?>

    <?php // echo $form->field($model, 'unit') ?>

    <?php // echo $form->field($model, 'usage_line1') ?>

    <?php // echo $form->field($model, 'usage_line2') ?>

    <?php // echo $form->field($model, 'usage_line3') ?>

    <?php // echo $form->field($model, 'tmt24_code') ?>

    <?php // echo $form->field($model, 'costprice') ?>

    <?php // echo $form->field($model, 'unitprice') ?>

    <?php // echo $form->field($model, 'drugtype') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
