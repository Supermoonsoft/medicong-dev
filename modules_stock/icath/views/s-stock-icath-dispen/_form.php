<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\SStockIcathDispen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sstock-icath-dispen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'vn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'an')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icd101')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icd9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doctor')->textInput() ?>

    <?= $form->field($model, 'date_visit')->textInput() ?>

    <?= $form->field($model, 'datetime_or_start')->textInput() ?>

    <?= $form->field($model, 'datetime_or_end')->textInput() ?>

    <?= $form->field($model, 'ward')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'room_or')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'insurance_id')->textInput() ?>

    <?= $form->field($model, 'date_admit')->textInput() ?>

    <?= $form->field($model, 'date_dch')->textInput() ?>

    <?= $form->field($model, 'doc_no')->textInput() ?>

    <?= $form->field($model, 'doc_date')->textInput() ?>

    <?= $form->field($model, 'ortype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_json')->textInput() ?>

    <?= $form->field($model, 'requester')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_start_service')->textInput() ?>

    <?= $form->field($model, 'time_start_service')->textInput() ?>

    <?= $form->field($model, 'date_end_service')->textInput() ?>

    <?= $form->field($model, 'time_end_service')->textInput() ?>

    <?= $form->field($model, 'send_stock')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'send_account')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'send_patient')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
