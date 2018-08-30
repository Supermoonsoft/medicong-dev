<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\servicedummy\models\SServiceDummy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sservice-dummy-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'vn')->textInput(['maxlength' => true,'disabled'=>TRUE]) ?>
    <?= $form->field($model, 'data1')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'data2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_start_service')->textInput() ?>
    <?= $form->field($model, 'time_start_service')->textInput() ?>
    <?= $form->field($model, 'requester')->textInput(['maxlength' => true]) ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
