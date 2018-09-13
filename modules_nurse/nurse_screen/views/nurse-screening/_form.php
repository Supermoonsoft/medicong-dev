<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii\widgets\Pjax;
use yii\helpers\Button;
use app\components\PatientHelper;
use app\components\MessageHelper;
use app\modules_nurse\nurse_screen\models\OpdVisit;
use kartik\tabs\TabsX;
use kartik\checkbox\CheckboxX;

$session = Yii::$app->session;
$hn = PatientHelper::getCurrentHn();
$vn = PatientHelper::getCurrentVn();
$Sdate = PatientHelper::getDateVisitByVn($vn);
$Stime = PatientHelper::getTimeVisitByVn($vn);

$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);

?>
<?php
$this->registerCss("
.card {box-shadow:  0 0 10px 0 rgba(0,0,0,.10);}
");
?>


<?php Pjax::begin(); ?>
    <?php $form = ActiveForm::begin([
        //'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); ?>



<div class="panel panel-success">
    <div class="panel-heading">
        <div class="panel-title"><i class="fa fa-sticky-note-o"></i> Nurse Screening</div>
    </div>
<div class="panel-body">
<div class="card">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-plus"></i>  <span>การมา</span></a></li>
        <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-plus"></i>  <span>อาการ</span></a></li>
        <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-plus"></i>  <span>RISK</span></a></li>
    </ul>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="tab1">
        <?= $form->field($model, 'hn')->hiddenInput(['value' => $hn])->label(false); ?>
        <?= $form->field($model, 'vn')->hiddenInput(['value' => $vn])->label(false); ?>
        <?= $form->field($model, 'date_start_service')->hiddenInput(['value' => $Sdate])->label(false); ?>
        <?= $form->field($model, 'time_start_service')->hiddenInput(['value' => $Stime])->label(false); ?>
        
        <div class="row"><div class="col-md-3">
            <?= $form->field($model, 'chk_illness')->widget(CheckboxX::classname(),['pluginOptions'=>['threeState'=>false]]); ?>
        </div><div class="col-md-3">
            <?= $form->field($model, 'cnk_er')->widget(CheckboxX::classname(),['pluginOptions'=>['threeState'=>false]]); ?>
        </div><div class="col-md-3">
            <?= $form->field($model, 'chk_checkup')->widget(CheckboxX::classname(),['pluginOptions'=>['threeState'=>false]]); ?>
        </div><div class="col-md-3">
            <?= $form->field($model, 'chk_followup')->widget(CheckboxX::classname(),['pluginOptions'=>['threeState'=>false]]); ?>
        </div></div>

        <div class="row"><div class="col-md-3">
            <?= $form->field($model, 'chk_dm')->widget(CheckboxX::classname(),['pluginOptions'=>['threeState'=>false]]); ?>
        </div><div class="col-md-3">
            <?= $form->field($model, 'chk_dm_type')->radioButtonGroup(['NEW_DM' => 'รายใหม่', 'DM_Followup' => 'followup'], ['inline'=>true])->label("SELECT");?>
        </div><div class="col-md-3">
            <?= $form->field($model, 'chk_thyroid')->widget(CheckboxX::classname(),['pluginOptions'=>['threeState'=>false]]); ?>
        </div><div class="col-md-3">
            <?= $form->field($model, 'chk_thyroid_type')->radioButtonGroup(['NEW_Thyroid' => 'รายใหม่', 'FU_Thyroid' => 'followup'], ['inline'=>true])->label("SELECT");?>
        </div></div>

        <div class="row"><div class="col-md-3">
            <?= $form->field($model, 'chk_im')->widget(CheckboxX::classname(),['pluginOptions'=>['threeState'=>false]]); ?>
        </div><div class="col-md-3">
            <?= $form->field($model, 'chk_anc')->widget(CheckboxX::classname(),['pluginOptions'=>['threeState'=>false]]); ?>
        </div><div class="col-md-3">
            <?= $form->field($model, 'chk_insurace')->widget(CheckboxX::classname(),['pluginOptions'=>['threeState'=>false]]); ?>
        </div><div class="col-md-3">
            <?= $form->field($model, 'chk_contract')->widget(CheckboxX::classname(),['pluginOptions'=>['threeState'=>false]]); ?>
        </div></div>

        <div class="row"><div class="col-md-3">
            <?= $form->field($model, 'chk_eye')->widget(CheckboxX::classname(),['pluginOptions'=>['threeState'=>false]]); ?>
        </div><div class="col-md-3">
            <?= $form->field($model, 'chk_other')->widget(CheckboxX::classname(),['pluginOptions'=>['threeState'=>false]]); ?>
        </div><div class="col-md-6">
            <?= $form->field($model, 'chk_other_text')->textInput(['maxlength' => true]) ?>
        </div></div>
    </div><!-- close tab1-->

    <div role="tabpanel" class="tab-pane" id="tab2">
    <BR>
        <div class="row"><div class="col-md-6">
            <?= $form->field($model, 'chk_triage')->radioButtonGroup(
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
            <?= $form->field($model, 'chk_access')->radioButtonGroup(
                    [
                        'Walk' => 'Walk',
                        'Wheel' => 'Wheel',
                        'Stret' => 'Stret'
                    ], //Walk / Wheel / Stret
                    ['inline'=>true]);
                    ?>
        </div></div>
        <div class="col-md-4">
            <?= $form->field($model, 'chk_contact_type')->radioButtonGroup(
                    [
                        'Accident' => 'Accident',
                        'Illness' => 'Illness',
                        'Legal' => 'Legal',
                    ], //Accident / illness / Legal
                    ['inline'=>true]);
                    ?>
        </div>
        <div class="col-md-8">
            <?= $form->field($model, 'chk_loc')->radioButtonGroup(
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
            <?= $form->field($model, 'pain_type')->radioButtonGroup(
                    [
                        'Adult' => 'Adult', 'Child' => 'Child'
                    ], 
                    ['inline'=>true]);
                    ?>
        </div><div class="col-md-6">
            <?= $form->field($model, 'pain_scale')->radioButtonGroup(
                    [
                        'NIPS' => 'NIPS',
                        'FLACC' => 'FLACC',
                        'FPS' => 'FPS',
                        'NRS' => 'NRS'
                    ], //NIPS / FLACC / FPS / NRS
                    ['inline'=>true]);
                    ?>
        </div></div>
    </div><!-- close tab2-->

    <div role="tabpanel" class="tab-pane " id="tab3">
    <br>
        <div class="row"><div class="col-md-2">
        <?= $form->field($model, 'chk_risk_1')->widget(CheckboxX::classname(),['pluginOptions'=>['threeState'=>false]]); ?>
        </div><div class="col-md-2">
        <?= $form->field($model, 'chk_risk_2')->widget(CheckboxX::classname(),['pluginOptions'=>['threeState'=>false]]); ?>
        </div><div class="col-md-2">
        <?= $form->field($model, 'chk_risk_3')->widget(CheckboxX::classname(),['pluginOptions'=>['threeState'=>false]]); ?> 
        </div><div class="col-md-3">
        <?= $form->field($model, 'chk_risk_4')->widget(CheckboxX::classname(),['pluginOptions'=>['threeState'=>false]]); ?>
        </div><div class="col-md-2">
        <?= $form->field($model, 'chk_risk_5')->widget(CheckboxX::classname(),['pluginOptions'=>['threeState'=>false]]); ?>   
        </div></div>
            
        <div class="row"><div class="col-md-12">
            <?= $form->field($model, 'chk_risk_infe')->radioButtonGroup(
                    [
                        'S' => 'S', 'C' => 'C','D' => 'D', 'A' => 'A',
                    ], //S / C / D / A
                    ['inline'=>true]);
                    ?>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-md-2">
                    <?= $form->field($model, 'requester')->textInput(['placeholder'=>'requester','maxlength' => true])->label(false) ?>
                </div>
                <div class="col-md-4">
                <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>
            </div>
        </div>

    </div><!-- close tab3-->
</div><!-- close tab all-->
</div><!-- close card--->
</div><!-- close panel-body--->
</div><!-- close panel --->
    <?php ActiveForm::end(); ?>
    <?php Pjax::end(); ?>


