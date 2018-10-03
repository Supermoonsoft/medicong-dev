<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\chiefcomplaint\models\PccservicepiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pccservicepi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pcc_vn') ?>

    <?= $form->field($model, 'data_json') ?>

    <?= $form->field($model, 'pcc_start_service_datetime') ?>

    <?= $form->field($model, 'pcc_end_service_datetime') ?>

    <?php // echo $form->field($model, 'data1') ?>

    <?php // echo $form->field($model, 'data2') ?>

    <?php // echo $form->field($model, 'hospcode') ?>

    <?php // echo $form->field($model, 'pi_text') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
