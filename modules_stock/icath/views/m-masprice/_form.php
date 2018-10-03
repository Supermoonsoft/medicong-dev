<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\MMasprice */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mmasprice-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'section')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'charge_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'charge_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'opd_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'opd_dr_percent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'opd_dr_amt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ipd_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ipd_dr_percent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ipd_dr_amt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_cost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recieve_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recieve_thai_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recieve_eng_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'change_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'update_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'map_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_active')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'requester')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_json')->textInput() ?>

    <?= $form->field($model, 'data1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data2')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
