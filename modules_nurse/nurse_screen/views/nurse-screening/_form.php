<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii\widgets\Pjax;
use yii\helpers\Button;
use app\components\PatientHelper;

$session = Yii::$app->session;
$vn_session = Yii::$app->request->get('vn_session');
$id="35cd1195-6165-42d8-9425-bf0084db192c"; //DEMO

$hn = PatientHelper::getCurrentHn();
if (empty($hn)) {
    MessageHelper::errorNullHn();
}

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

<div class="nurse-screening-form">
<?php Pjax::begin(); ?>
    <?php $form = ActiveForm::begin([
        //'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); ?>

<div class="col-md-2"></div>
<div class="col-md-8">


<div class="panel panel-success box-shadow">
  <div class="panel-heading">
    <h3>การมารับบริการ : <?= PatientHelper::getCurrentHn() ?>
        <?= Html::a('Normal All', 
                        ['',], 
                        ['class'=>'btn btn-primary']); ?>
        </h3>
        <?= $form->field($model, 'hn')->hiddenInput(['value' => '000000034'])->label(false); ?>
        <?= $form->field($model, 'vn')->hiddenInput(['value' => $vn_session])->label(false); ?>

  </div>
  <div class="panel-body">

<div class="row"><div class="col-md-3">
    <?= $form->field($model, 'chk_illness')->checkbox() ?>
</div><div class="col-md-3">
    <?= $form->field($model, 'cnk_er')->checkbox() ?>
</div><div class="col-md-3">
    <?= $form->field($model, 'chk_checkup')->checkbox() ?>
</div><div class="col-md-3">
    <?= $form->field($model, 'chk_followup')->checkbox() ?>
</div></div>

<div class="row"><div class="col-md-3">
    <?= $form->field($model, 'chk_dm')->checkbox() ?>
</div><div class="col-md-3">
    <?= $form->field($model, 'chk_dm_type')->radioList(['NEW_DM' => 'รายใหม่', 'DM_Followup' => 'followup'], ['inline'=>true])->label("SELECT");?>
</div><div class="col-md-3">
    <?= $form->field($model, 'chk_thyroid')->checkbox() ?>
</div><div class="col-md-3">
    <?= $form->field($model, 'chk_thyroid_type')->radioList(['NEW_Thyroid' => 'รายใหม่', 'FU_Thyroid' => 'followup'], ['inline'=>true])->label("SELECT");?>
</div></div>

<div class="row"><div class="col-md-3">
    <?= $form->field($model, 'chk_im')->checkbox() ?>
</div><div class="col-md-3">
    <?= $form->field($model, 'chk_anc')->checkbox() ?>
</div><div class="col-md-3">
    <?= $form->field($model, 'chk_insurace')->checkbox() ?>
</div><div class="col-md-3">
    <?= $form->field($model, 'chk_contract')->checkbox() ?>
</div></div>

<div class="row"><div class="col-md-3">
    <?= $form->field($model, 'chk_eye')->checkbox() ?>
</div><div class="col-md-3">
    <?= $form->field($model, 'chk_other')->checkbox() ?>
</div><div class="col-md-6">
    <?= $form->field($model, 'chk_other_text')->textInput(['maxlength' => true]) ?>
</div></div>

</div></div>
<div class="panel panel-warning box-shadow">
  <div class="panel-heading"><h3>อาการ : </h3></div>
  <div class="panel-body">

<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_triage')->radioList(
            [
                'Crit.' => 'Crit.',
                 'E' => 'E',
                 'U' => 'U',
                 'S' => 'S',
                 'N' => 'N'
            ], //Crit. / E / U / S / N
            ['inline'=>true]);
            ?>
</div>
<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'chk_access')->radioList(
            [
                'Walk' => 'Walk',
                'Wheel' => 'Wheel',
                'Stret' => 'Stret'
            ], //Walk / Wheel / Stret
            ['inline'=>true]);
            ?>
</div></div>
<div class="col-md-4">
    <?= $form->field($model, 'chk_contact_type')->radioList(
            [
                'Accident' => 'Accident',
                'Illness' => 'Illness',
                'Legal' => 'Legal',
            ], //Accident / illness / Legal
            ['inline'=>true]);
            ?>
</div>
<div class="col-md-8">
    <?= $form->field($model, 'chk_loc')->radioList(
            [
                'รู้ตัวดี' => 'รู้ตัวดี', 
                'สับสน' => 'สับสน',
                'ซึมปลุกตื่น' => 'ซึมปลุกตื่น',
                'ซึมปลุกไม่ค่อยตื่น' => 'ซึมปลุกไม่ค่อยตื่น',
                'ตอบสนองเล็กน้อย' => 'ตอบสนองเล็กน้อย',
                'ไม่รู้สึกตัว' => 'ไม่รู้สึกตัว',
            ], //รู้ตัวดี / สับสน / ซึมปลุกตื่น / ซึมปลุกไม่ค่อยตื่น / ตอบสนองเล็กน้อย / ไม่รู้สึกตัว
            ['inline'=>true]);
            ?>
</div></div>

<div class="row"><div class="col-md-3">
    <?= $form->field($model, 'pain_score')->textInput(['type'=>'number']) ?>
</div><div class="col-md-3">
    <?= $form->field($model, 'pain_type')->radioList(
            [
                'Adult' => 'Adult', 'Child' => 'Child'
            ], 
            ['inline'=>true]);
            ?>
</div><div class="col-md-6">
    <?= $form->field($model, 'pain_scale')->radioList(
            [
                'NIPS' => 'NIPS',
                'FLACC' => 'FLACC',
                'FPS' => 'FPS',
                'NRS' => 'NRS'
            ], //NIPS / FLACC / FPS / NRS
            ['inline'=>true]);
            ?>
</div></div>

</div></div>
<div class="panel panel-danger box-shadow">
  <div class="panel-heading"><h3>Full Risk : </h3></div>
  <div class="panel-body">

<div class="row"><div class="col-md-2">
<?= $form->field($model, 'chk_risk_1')->checkbox()->label(false); ?>
</div><div class="col-md-2">
<?= $form->field($model, 'chk_risk_2')->checkbox()->label(false); ?>
</div><div class="col-md-2">
<?= $form->field($model, 'chk_risk_3')->checkbox()->label(false); ?> 
</div><div class="col-md-3">
<?= $form->field($model, 'chk_risk_4')->checkbox()->label(false); ?>
</div><div class="col-md-2">
<?= $form->field($model, 'chk_risk_5')->checkbox()->label(false); ?>   
</div></div>
    
<div class="row"><div class="col-md-12">
    <?= $form->field($model, 'chk_risk_infe')->radioList(
            [
                'S' => 'S', 'C' => 'C','D' => 'D', 'A' => 'A',
            ], //S / C / D / A
            ['inline'=>true]);
            ?>
</div></div>
 

<div class="row">
    <div class="form-group">
        <div class="col-md-2">
            <?= $form->field($model, 'requester')->textInput(['placeholder'=>'requester','maxlength' => true])->label(false) ?>
        </div>
        <div class="col-md-4">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            <?php // Html::submitButton('บันทึก', ['class' => 'btn btn-success']) ?>
            
        </div>
    </div>
</div>
</div>
</div>
</div>
    <?php ActiveForm::end(); ?>
    <?php Pjax::end(); ?>
</div>
    <div class="col-md-2"></div>

</div>
