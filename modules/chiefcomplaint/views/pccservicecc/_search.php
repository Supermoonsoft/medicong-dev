<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\chiefcomplaint\models\PccserviceccSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pccservicecc-search">

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

    <?php // echo $form->field($model, 'hoscode') ?>

    <?php // echo $form->field($model, 'sbp') ?>

    <?php // echo $form->field($model, 'dbp') ?>

    <?php // echo $form->field($model, 'temp') ?>

    <?php // echo $form->field($model, 'pp') ?>

    <?php // echo $form->field($model, 'pr') ?>

    <?php // echo $form->field($model, 'o2sat') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'cc_text') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
