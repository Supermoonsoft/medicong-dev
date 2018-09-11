<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\dietitian\models\SDietitianOpdNutritionVisitRecord */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sdietitian-opd-nutrition-visit-record-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hn')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
