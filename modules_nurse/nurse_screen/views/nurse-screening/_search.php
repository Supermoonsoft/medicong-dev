<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\nurse_screen\models\NurseScreeningSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nurse-screening-search">

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

    <?php // echo $form->field($model, 'cnk_er')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_dm')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_dm_type')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_followup')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_insurace')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_contract')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_im')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_anc')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_other')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_other_text') ?>

    <?php // echo $form->field($model, 'chk_triage') ?>

    <?php // echo $form->field($model, 'chk_access') ?>

    <?php // echo $form->field($model, 'chk_contact_type') ?>

    <?php // echo $form->field($model, 'chk_loc') ?>

    <?php // echo $form->field($model, 'pain_score') ?>

    <?php // echo $form->field($model, 'pain_type') ?>

    <?php // echo $form->field($model, 'pain_scale') ?>

    <?php // echo $form->field($model, 'chk_risk')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_risk_1')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_risk_2')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_risk_3')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_risk_4')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_risk_5')->checkbox() ?>

    <?php // echo $form->field($model, 'chk_risk_infe') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
