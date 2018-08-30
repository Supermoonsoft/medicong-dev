<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\nurse_screen\models\NurseCcSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nurse-cc-search">

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

    <?php // echo $form->field($model, 'chk_cc_1')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_cc_1_data') ?>

    <?php // echo $form->field($model, 'chk_cc_2')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_cc_2_data') ?>

    <?php // echo $form->field($model, 'chk_cc_3')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_cc_3_data') ?>

    <?php // echo $form->field($model, 'chk_cc_4')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_cc_4_data') ?>

    <?php // echo $form->field($model, 'chk_cc_5')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_cc_5_data') ?>

    <?php // echo $form->field($model, 'chk_cc_6') ?>

    <?php // echo $form->field($model, 'chk_cc_6_data') ?>

    <?php // echo $form->field($model, 'chk_cc_7') ?>

    <?php // echo $form->field($model, 'chk_cc_7_data') ?>

    <?php // echo $form->field($model, 'chk_cc_8') ?>

    <?php // echo $form->field($model, 'chk_cc_8_data') ?>

    <?php // echo $form->field($model, 'chk_cc_9') ?>

    <?php // echo $form->field($model, 'chk_cc_9_data')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_cc_10') ?>

    <?php // echo $form->field($model, 'chk_cc_10_data') ?>

    <?php // echo $form->field($model, 'chk_cc_11') ?>

    <?php // echo $form->field($model, 'chk_cc_11_data') ?>

    <?php // echo $form->field($model, 'chk_cc_12') ?>

    <?php // echo $form->field($model, 'chk_cc_12_data') ?>

    <?php // echo $form->field($model, 'chk_cc_13')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_cc_13_data') ?>

    <?php // echo $form->field($model, 'chk_con_1')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_con_1_data') ?>

    <?php // echo $form->field($model, 'chk_con_2')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_con_2_data') ?>

    <?php // echo $form->field($model, 'chk_con_3')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_con_3_data') ?>

    <?php // echo $form->field($model, 'chk_con_4')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_con_4_data') ?>

    <?php // echo $form->field($model, 'chk_con_5')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_con_5_data') ?>

    <?php // echo $form->field($model, 'chk_con_6')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_con_6_data') ?>

    <?php // echo $form->field($model, 'chk_con_7')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_con_7_data') ?>

    <?php // echo $form->field($model, 'chk_fu_1')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_fu_1_data') ?>

    <?php // echo $form->field($model, 'chk_fu_2')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_fu_2_data') ?>

    <?php // echo $form->field($model, 'chk_fu_3')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_fu_3_data') ?>

    <?php // echo $form->field($model, 'chk_fu_4')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_fu_4_data') ?>

    <?php // echo $form->field($model, 'chk_fu_5')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_fu_5_data') ?>

    <?php // echo $form->field($model, 'chk_fu_6')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_fu_6_data') ?>

    <?php // echo $form->field($model, 'chk_fu_7')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_fu_7_data') ?>

    <?php // echo $form->field($model, 'chk_fu_8')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_fu_8_data') ?>

    <?php // echo $form->field($model, 'chk_fu_9')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_fu_9_data') ?>

    <?php // echo $form->field($model, 'chk_fu_10')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_fu_10_data') ?>

    <?php // echo $form->field($model, 'chk_fu_11')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_fu_11_data') ?>

    <?php // echo $form->field($model, 'chk_chk_1')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_chk_1_data') ?>

    <?php // echo $form->field($model, 'chk_chk_2')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_chk_2_data') ?>

    <?php // echo $form->field($model, 'chk_chk_3')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_chk_3_data') ?>

    <?php // echo $form->field($model, 'chk_chk_4')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_chk_4_data') ?>

    <?php // echo $form->field($model, 'chk_chk_5')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_chk_5_data') ?>

    <?php // echo $form->field($model, 'nure_text') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
