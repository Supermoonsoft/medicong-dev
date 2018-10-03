<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\lab\models\Preorderlab */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="preorderlab-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'pcc_vn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_json')->textInput() ?>

    <?= $form->field($model, 'pcc_start_service_datetime')->textInput() ?>

    <?= $form->field($model, 'pcc_end_service_datetime')->textInput() ?>

    <?= $form->field($model, 'data1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hospcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lab_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lab_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lab_request_date')->textInput() ?>

    <?= $form->field($model, 'lab_result_date')->textInput() ?>

    <?= $form->field($model, 'lab_result')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'standard_result')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lab_price')->textInput() ?>

    <?= $form->field($model, 'lab_code_moph')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_update')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
