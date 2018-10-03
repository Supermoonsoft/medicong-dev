<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\appointment\models\PccAppointment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pcc-appointment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'hn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provider_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provider_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_service')->textInput() ?>

    <?= $form->field($model, 'time_service')->textInput() ?>

    <?= $form->field($model, 'clinic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'appoint_date')->textInput() ?>

    <?= $form->field($model, 'appoint_time')->textInput() ?>

    <?= $form->field($model, 'detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_json')->textInput() ?>

    <?= $form->field($model, 'last_update')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
