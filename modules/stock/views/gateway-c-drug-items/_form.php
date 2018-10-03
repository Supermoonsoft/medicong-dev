<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\stock\models\GatewayCDrugItems */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gateway-cdrug-items-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'hospcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hospname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'drug_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usage_line1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usage_line2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usage_line3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tmt24_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'costprice')->textInput() ?>

    <?= $form->field($model, 'unitprice')->textInput() ?>

    <?= $form->field($model, 'drugtype')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
