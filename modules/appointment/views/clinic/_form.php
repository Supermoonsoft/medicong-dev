<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\color\ColorInput;
/* @var $this yii\web\View */
/* @var $model app\modules\appointment\models\Cclinic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cclinic-form">

    <?php $form = ActiveForm::begin(); ?>



    <div >
        <div class="row">
            <div class="col-md-12">
                <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="row" >
            <div class="col-md-12">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-12">
                <?= $form->field($model, 'is_active')->checkbox() ?>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-12">
                <?= $form->field($model, 'color')->widget(ColorInput::classname(),[
                   'options'=>['placeholder'=>'select color....','value' => '#e91e63'],
                    'size'=>'sm',
                ]) ?>
            </div>
        </div>

    </div>




    <div class="row" style="margin-top: 7px;margin-bottom: 10px;margin-left: 5px">

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
