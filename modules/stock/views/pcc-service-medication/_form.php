<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\stock\models\PccServiceMedication */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pcc-service-medication-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'vn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'an')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qty')->textInput() ?>

    <?= $form->field($model, 'unitprice')->textInput() ?>

    <?= $form->field($model, 'druguse')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'costprice')->textInput() ?>

    <?= $form->field($model, 'totalprice')->textInput() ?>

    <?= $form->field($model, 'provider_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provider_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_service')->textInput() ?>

    <?= $form->field($model, 'time_service')->textInput() ?>

    <?= $form->field($model, 'data_json')->textInput() ?>

    <?= $form->field($model, 'unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tmt24_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usage_line1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usage_line2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usage_line3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'drug_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hoscode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pcc_vn')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
