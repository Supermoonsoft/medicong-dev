<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\components\DbHelper;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules_share\qmanage\models\CDoctorRoom */
/* @var $form yii\widgets\ActiveForm */

$sql = 'select id , username from "user" where role=\'20\' ';
$items = DbHelper::queryAll('db', $sql);
$items = ArrayHelper::map($items, 'id', 'username');
?>

<div class="cdoctor-room-form">


    <?php $form = ActiveForm::begin([
        'id'=>'frmAddRoom'
    ]); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div> 
        <div class="col-md-6">
            <?= $form->field($model, 'doctor_id')->dropDownList($items, ['prompt' => '--เลือก--']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'is_active')->checkbox() ?>
        </div>
        <div class="col-md-6">

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>


    <?php ActiveForm::end(); ?>

</div>
