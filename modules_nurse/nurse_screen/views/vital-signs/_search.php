<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\nurse_screen\models\NurseScreenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vital-signs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'vn') ?>

    <?= $form->field($model, 'hn') ?>

    <?= $form->field($model, 'data_json') ?>

    <?= $form->field($model, 'requester') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'date_start_service') ?>

    <?php // echo $form->field($model, 'time_start_service') ?>

    <?php // echo $form->field($model, 'date_end_service') ?>

    <?php // echo $form->field($model, 'time_end_service') ?>

    <?php // echo $form->field($model, 'btemp_1') ?>

    <?php // echo $form->field($model, 'sbp_1') ?>

    <?php // echo $form->field($model, 'dbp_1') ?>

    <?php // echo $form->field($model, 'position_1') ?>

    <?php // echo $form->field($model, 'arm_1') ?>

    <?php // echo $form->field($model, 'pr_1') ?>

    <?php // echo $form->field($model, 'pr_rhythm_1') ?>

    <?php // echo $form->field($model, 'rr_1') ?>

    <?php // echo $form->field($model, 'o2sat_1') ?>

    <?php // echo $form->field($model, 'btemp_2') ?>

    <?php // echo $form->field($model, 'sbp_2') ?>

    <?php // echo $form->field($model, 'dbp_2') ?>

    <?php // echo $form->field($model, 'position_2') ?>

    <?php // echo $form->field($model, 'arm_2') ?>

    <?php // echo $form->field($model, 'pr_2') ?>

    <?php // echo $form->field($model, 'pr_rhythm_2') ?>

    <?php // echo $form->field($model, 'rr_2') ?>

    <?php // echo $form->field($model, 'o2sat_2') ?>

    <?php // echo $form->field($model, 'bheight') ?>

    <?php // echo $form->field($model, 'bweight') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
