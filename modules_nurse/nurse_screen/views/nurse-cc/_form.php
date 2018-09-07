<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii\widgets\Pjax;
use app\components\PatientHelper;
use app\modules_nurse\nurse_screen\models\OpdVisit;

$session = Yii::$app->session;
//$visit = OpdVisit::find()->where(['vn'=>$this->vn])->one();


$hn = PatientHelper::getCurrentHn();
if (empty($hn)) {
    MessageHelper::errorNullHn();
}
$vn = PatientHelper::getCurrentVn();
$Sdate = PatientHelper::getDateVisitByVn($vn);
$Stime = PatientHelper::getTimeVisitByVn($vn);

$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>
<?php
$this->registerCss("
.box-shadow {
    -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
    box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
}
");
?>
<div class="nurse-cc-form">
<?php Pjax::begin(); ?>
    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 2, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); 
    
    ?>
        <?= $form->field($model, 'hn')->hiddenInput(['value' => $hn])->label(false); ?>
        <?= $form->field($model, 'vn')->hiddenInput(['value' => $vn])->label(false); ?>

        <?= $form->field($model, 'date_start_service')->hiddenInput(['value' => $Sdate])->label(false); ?>
        <?= $form->field($model, 'time_start_service')->hiddenInput(['value' => $Stime])->label(false); ?>

<div class="row ">
<div class="col-md-6">
<div class="panel panel-success box-shadow">
  <div class="panel-heading">อาการ : </div>
  <div class="panel-body">
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_cc_1')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_cc_1_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_cc_2')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_cc_2_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_cc_3')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_cc_3_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_cc_4')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_cc_4_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_cc_5')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_cc_5_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_cc_6')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_cc_6_data')->textInput(['maxlength' => true])->label(false) ?>
    </div></div>
<div class="row"><div class="col-md-6">
<?= $form->field($model, 'chk_cc_7')->checkbox() ?>
    </div><div class="col-md-4">
<?= $form->field($model, 'chk_cc_7_data')->textInput(['maxlength' => true])->label(false) ?>
    </div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_cc_8')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_cc_8_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_cc_9')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_cc_9_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_cc_10')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_cc_10_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_cc_11')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_cc_11_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_cc_12')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_cc_12_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_cc_13')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_cc_13_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>


</div></div></div>

<div class="col-md-6">
<div class="panel panel-success box-shadow">
  <div class="panel-heading">ปรึกษา : </div>
  <div class="panel-body">
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_con_1')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_con_1_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_con_2')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_con_2_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_con_3')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_con_3_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_con_4')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_con_4_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_con_5')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_con_5_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_con_6')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_con_6_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_con_7')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_con_7_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>


</div></div></div>
</div>

<div class="col-md-6">
<div class="panel panel-success box-shadow">
  <div class="panel-heading">ติดตาม : </div>
  <div class="panel-body">
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_fu_1')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_fu_1_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_fu_2')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_fu_2_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_fu_3')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_fu_3_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_fu_4')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_fu_4_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_fu_5')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_fu_5_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_fu_6')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_fu_6_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_fu_7')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_fu_7_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_fu_8')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_fu_8_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_fu_9')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_fu_9_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_fu_10')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_fu_10_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_fu_11')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_fu_11_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>


</div></div></div>



<div class="col-md-6">
<div class="panel panel-success box-shadow">
  <div class="panel-heading">ตรวจสุขภาพ : </div>
  <div class="panel-body">
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_chk_1')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_chk_1_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_chk_2')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_chk_2_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_chk_3')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_chk_3_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_chk_4')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_chk_4_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_chk_5')->checkbox() ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'chk_chk_5_data')->textInput(['maxlength' => true])->label(false) ?>
</div></div>


</div></div></div>
</div>

<div class="row"><div class="col-md-6">
        <?= $form->field($model, 'nurse_text')->textarea(['rows' => 6]) ?>
    </div>
        <div class="col-md-2">
            <?= $form->field($model, 'requester')->textInput(['placeholder'=>'requester'])->label(false) ?>
        </div>
        <div class="col-md-4">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            <?php // Html::submitButton('บันทึก', ['class' => 'btn btn-success']) ?>  
        </div>
</div>

    <?php ActiveForm::end(); ?>
    <?php Pjax::end(); ?>


</div>
