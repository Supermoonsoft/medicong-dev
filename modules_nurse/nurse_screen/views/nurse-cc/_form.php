<?php

use yii\helpers\Html;
use yii\helpers\Json;
use kartik\widgets\ActiveForm;
use yii\widgets\Pjax;
use app\components\PatientHelper;
use kartik\select2\Select2;
use app\modules_nurse\nurse_screen\models\OpdVisit;
use yii\bootstrap\Modal;
$session = Yii::$app->session;
//$visit = OpdVisit::find()->where(['vn'=>$this->vn])->one();


$hn = PatientHelper::getCurrentHn();
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

$js=<<<JS
JS;
$this->registerJS($js);

?>
<!--- DIALOG 1--->
<div class="modal fade bd-popup1-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title" id="popup1ModalLabel">อาการ</h3>
        </button>
    </div>
    <div class="modal-body">
        <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL,]);?>
            <div class="row"><div class="col-md-8">
                <button class=" btn btn-default ">ไข้ </button>
                <button class=" btn btn-default ">เจ็บคอ </button>
                <button class=" btn btn-default ">ไอ </button>
                <button class=" btn btn-default ">ปวดท้อง </button>
                <button class=" btn btn-default ">คลื่นไส้อาเจียน</button>
                <button class=" btn btn-default ">เวียนศีรษะ </button>
                <button class=" btn btn-default ">ปวดศีรษะ </button>
                <button class=" btn btn-default ">มึนงง </button>
                <button class=" btn btn-default ">ใจสั่น </button>
                <button class=" btn btn-default ">เจ็บแน่นหน้าอก </button>
                <button class=" btn btn-default ">เหนื่อยหอบหายใจลำบาก </button>
                <button class=" btn btn-default ">ปัสสาวะแสบขัด </button>
                <button class=" btn btn-default ">ถ่ายเหลว </button>
            </div></div>
            <div class="row"><div class="col-md-8">
                <?= $form->field($model, 'chk_cc_1_data')->textinput()->label("เป็นมา :"); ?>
            </div></div>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send to CC</button>
    </div>
  </div>
</div>
</div>
<!--- DIALOG 2--->
<div class="modal fade bd-popup2-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title" id="popup2ModalLabel">ปรึกษา</h3>
        </button>
    </div>
    <div class="modal-body">
        <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL,]);?>
            <div class="row"><div class="col-md-8">
                <button class=" btn btn-default ">ปรึกษาตรวจเบาหวาน</button>
                <button class=" btn btn-default ">ปรึกษาตรวจไทรอยด์</button>
                <button class=" btn btn-default ">ปรึกษาตรวจความดันสูง</button>
                <button class=" btn btn-default ">ปรึกษาตรวจไขมัน</button>
                <button class=" btn btn-default ">ปรึกษาตรวจโปรแกรมตรวจสุขภาพ</button>
                <button class=" btn btn-default ">ปรึกษารับยาต่อเนื่อง</button>
                <button class=" btn btn-default ">ปรึกษาเรื่องวัคซีน</button>
            </div></div>
            <div class="row"><div class="col-md-8">
                <?= $form->field($model, 'chk_cc_2_data')->textinput()->label("TEXT :"); ?>
            </div></div>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send to CC</button>
    </div>
  </div>
</div>
</div>
<!--- DIALOG 3--->
<div class="modal fade bd-popup3-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title" id="popup3ModalLabel">ติดตาม</h3>
        </button>
    </div>
    <div class="modal-body">
        <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL,]);?>
            <div class="row"><div class="col-md-8">
                <button class=" btn btn-default ">ติดตามตามนัด</button> 
                <button class=" btn btn-default ">เบาหวาน</button>
                <button class=" btn btn-default ">ไทยรอยด์</button>
                <button class=" btn btn-default ">ความดันสูง</button>
                <button class=" btn btn-default ">ไขมัน</button>
                <button class=" btn btn-default ">อาการทั่วไปปกติ</button>
                <button class=" btn btn-default ">หลังผ่าตัด</button>
                <button class=" btn btn-default ">ทำแผลบริเวณ</button>
                <button class=" btn btn-default ">ตัดเล็บเท้า</button>
                <button class=" btn btn-default ">รับบริการวัคซีนไข้หวัดใหญ่</button>
                <button class=" btn btn-default ">เรื่องแผลที่เท้า</button>

            </div></div>
            <div class="row"><div class="col-md-8">
                <?= $form->field($model, 'chk_cc_3_data')->textinput()->label("TEXT :"); ?>
            </div></div>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send to CC</button>
    </div>
  </div>
</div>
</div>
<!--- DIALOG 4--->
<div class="modal fade bd-popup4-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title" id="popup4ModalLabel">ตรวจสุขภาพ</h3>
        </button>
    </div>
    <div class="modal-body">
        <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL,]);?>
            <div class="row"><div class="col-md-8">
                <button class=" btn btn-default ">ตรวจสุขภาพประจำปี โปรแกรม</button> 
                <button class=" btn btn-default ">ตรวจสุขภาพก่อนแต่งงานหรือวางแผนตั้งครรภ์</button> 
                <button class=" btn btn-default ">ตรวจสุขภาพก่อนทำประกัน</button> 
                <button class=" btn btn-default ">ตรวจสุขภาพขอใบขับขี่</button> 
                <button class=" btn btn-default ">ตรวจสุขภาพขอใบรับรองแพทย์</button> 


            </div></div>
            <div class="row"><div class="col-md-8">
                <?= $form->field($model, 'chk_cc_3_data')->textinput()->label("TEXT :"); ?>
            </div></div>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send to CC</button>
    </div>
  </div>
</div>
</div>
<!--- END DIALOG --->
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
        <div class="row"><div class="col-md-12">
            <?= $form->field($model, 'chk_cc_1_data')->textarea(['data-toggle'=>"modal",'data-target'=>".bd-popup1-modal-lg"])->label(false); ?>
        </div></div>
    </div>
</div>
</div>

<div class="col-md-6">
<div class="panel panel-success box-shadow">
  <div class="panel-heading">ปรึกษา : </div>
    <div class="panel-body">
    <div class="row"><div class="col-md-12">
        <?= $form->field($model, 'chk_cc_2_data')->textarea(['data-toggle'=>"modal",'data-target'=>".bd-popup2-modal-lg"])->label(false); ?>
    </div></div>
    </div>
</div>
</div>

</div><!--END ROW 1--->

<div class="row ">
<div class="col-md-6">
<div class="panel panel-success box-shadow">
  <div class="panel-heading">ติดตาม : </div>
    <div class="panel-body">
        <div class="row"><div class="col-md-12">
            <?= $form->field($model, 'chk_cc_3_data')->textarea(['data-toggle'=>"modal",'data-target'=>".bd-popup3-modal-lg"])->label(false); ?>
        </div></div>
    </div>
</div>
</div>

<div class="col-md-6">
<div class="panel panel-success box-shadow">
  <div class="panel-heading">ตรวจสุขภาพ : </div>
    <div class="panel-body">
        <div class="row"><div class="col-md-12">
            <?= $form->field($model, 'chk_cc_4_data')->textarea(['data-toggle'=>"modal",'data-target'=>".bd-popup4-modal-lg"])->label(false); ?>
        </div></div>
    </div>
</div>
</div>
</div><!--END ROW 2--->

<div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'nurse_text')->textarea(['onclick' => '','rows' => 6]) ?>
    </div>
    <div class="col-md-2">
        <?= $form->field($model, 'requester')->textInput(['placeholder'=>'requester'])->label(false) ?>
    </div>
    <div class="col-md-4">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
</div><!--END ROW 3--->

    <?php ActiveForm::end(); ?>
    <?php Pjax::end(); ?>


</div>

