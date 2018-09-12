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

.cctext{
    font-size: 22px;
    -webkit-border-radius: 8px;
       -moz-border-radius: 8px;
            border-radius: 8px;
}

.btn-pop {
    //padding: 5px 5px;
    margin:5px;
    font-size: 16px;
    color: #ffffff;
    background: #00e676;
    width:auto;
    line-height: normal;
    -webkit-border-radius: 8px;
       -moz-border-radius: 8px;
            border-radius: 8px;
    }

.btn-pop-info {
    margin:5px;
    font-size: 16px;
    color: #ffffff;
    background: #f50057;
    width:auto;
    line-height: normal;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
    border-radius: 8px;
    }
");

$js=<<<JS
$('#btnsave-tmpcc1').click(function() {
var tmpcc1 = $('#tmp_cc1').val(); //DATA NEW TMP CC 1
var cc = $('#chk_cc_data').val();// DATA OLD IN TEXT
    $('#chk_cc_data').html(cc+" "+tmpcc1);
    $('#myModal').modal('hide');
});

$('#btnsave-tmpcc2').click(function() {
var tmpcc2 = $('#tmp_cc2').val(); //DATA NEW TMP CC 2
var cc = $('#chk_cc_data').val();// DATA OLD IN TEXT
    $('#chk_cc_data').html(cc+" "+tmpcc2);
    $('#myModal').modal('hide');
});

$('#btnsave-tmpcc3').click(function() {
var tmpcc3 = $('#tmp_cc3').val(); //DATA NEW TMP CC 3
var cc = $('#chk_cc_data').val();// DATA OLD IN TEXT
    $('#chk_cc_data').html(cc+" "+tmpcc3);
    $('#myModal').modal('hide');
});

$('#btnsave-tmpcc4').click(function() {
var tmpcc4 = $('#tmp_cc4').val(); //DATA NEW TMP CC 4
var cc = $('#chk_cc_data').val();// DATA OLD IN TEXT
    $('#chk_cc_data').html(cc+" "+tmpcc4);
    $('#myModal').modal('hide');
});

$('#btnsave-tmpcc5').click(function() {
var tmpcc5 = $('#tmp_cc5').val(); //DATA NEW TMP CC 5
var cc = $('#chk_cc_data').val();// DATA OLD IN TEXT
    $('#chk_cc_data').html(cc+" "+tmpcc5);
    $('#myModal').modal('hide');
});
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
    <form name="form1" method="post">
            <div class="row"><div class="col-md-12">
                <input type="button" class=" btn btn-pop-info " value="ผู้ป่วยมีอาการ" OnClick="document.form1.tmp_cc1.value = document.form1.tmp_cc1.value + 'CC: ผู้ป่วยมีอาการ '; ">
                <input type="button"  class=" btn btn-pop " value="ไข้" OnClick="document.form1.tmp_cc1.value = document.form1.tmp_cc1.value + 'ไข้ '; ">
                <input type="button"  class=" btn btn-pop " value="เจ็บคอ" OnClick="document.form1.tmp_cc1.value = document.form1.tmp_cc1.value + 'เจ็บคอ '; ">
                <input type="button"  class=" btn btn-pop " value="ไอ" OnClick="document.form1.tmp_cc1.value = document.form1.tmp_cc1.value + 'ไอ '; ">
                <input type="button"  class=" btn btn-pop " value="ปวดท้อง" OnClick="document.form1.tmp_cc1.value = document.form1.tmp_cc1.value + 'ปวดท้อง '; ">
                <input type="button"  class=" btn btn-pop " value="คลื่นไส้อาเจียน" OnClick="document.form1.tmp_cc1.value = document.form1.tmp_cc1.value + 'คลื่นไส้อาเจียน '; ">
                <input type="button"  class=" btn btn-pop " value="เวียนศีรษะ" OnClick="document.form1.tmp_cc1.value = document.form1.tmp_cc1.value + 'เวียนศีรษะ '; ">
                <input type="button"  class=" btn btn-pop " value="ปวดศีรษะ" OnClick="document.form1.tmp_cc1.value = document.form1.tmp_cc1.value + 'ปวดศีรษะ '; ">
                <input type="button"  class=" btn btn-pop " value="มึนงง" OnClick="document.form1.tmp_cc1.value = document.form1.tmp_cc1.value + 'มึนงง '; ">
                <input type="button"  class=" btn btn-pop " value="ใจสั่น" OnClick="document.form1.tmp_cc1.value = document.form1.tmp_cc1.value + 'ใจสั่น '; ">
                <input type="button"  class=" btn btn-pop " value="เจ็บแน่นหน้าอก" OnClick="document.form1.tmp_cc1.value = document.form1.tmp_cc1.value + 'เจ็บแน่นหน้าอก '; ">
                <input type="button"  class=" btn btn-pop " value="เหนื่อยหอบหายใจลำบาก" OnClick="document.form1.tmp_cc1.value = document.form1.tmp_cc1.value + 'เหนื่อยหอบหายใจลำบาก '; ">
                <input type="button"  class=" btn btn-pop " value="ปัสสาวะแสบขัด" OnClick="document.form1.tmp_cc1.value = document.form1.tmp_cc1.value + 'ปัสสาวะแสบขัด '; ">
                <input type="button"  class=" btn btn-pop " value="ถ่ายเหลว" OnClick="document.form1.tmp_cc1.value = document.form1.tmp_cc1.value + 'ถ่ายเหลว '; ">
                <input type="button" class=" btn btn-pop-info " value="เป็นมา" OnClick="document.form1.tmp_cc1.value = document.form1.tmp_cc1.value + 'เป็นมา 1 วัน '; ">

            </div></div>
            <hr>
            <div class="row"><div class="col-md-12">
                TEXT : <textarea class="form-control"  id="tmp_cc1" rows="6"></textarea>
            </div></div>
  </FORM>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="button" id="btnsave-tmpcc1" class="btn btn-primary" data-dismiss="modal" value="Send to CC" >
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
    <form name="form2" method="post">
            <div class="row"><div class="col-md-12">
                <input type="button" class=" btn btn-pop-info " value="ขอรับคำปรึกษาเรื่อง" OnClick="document.form2.tmp_cc2.value = document.form2.tmp_cc2.value + 'ขอรับคำปรึกษาเรื่อง '; ">
                <input type="button" class=" btn btn-pop " value="ตรวจเบาหวาน" OnClick="document.form2.tmp_cc2.value = document.form2.tmp_cc2.value + 'ตรวจเบาหวาน '; ">
                <input type="button" class=" btn btn-pop " value="ตรวจไทรอยด์" OnClick="document.form2.tmp_cc2.value = document.form2.tmp_cc2.value + 'ตรวจไทรอยด์'; ">
                <input type="button" class=" btn btn-pop " value="ตรวจความดันสูง" OnClick="document.form2.tmp_cc2.value = document.form2.tmp_cc2.value + 'ตรวจความดันสูง '; ">
                <input type="button" class=" btn btn-pop " value="ตรวจไขมัน" OnClick="document.form2.tmp_cc2.value = document.form2.tmp_cc1.value + 'ตรวจไขมัน '; ">
                <input type="button" class=" btn btn-pop " value="ตรวจโปรแกรมตรวจสุขภาพ" OnClick="document.form2.tmp_cc2.value = document.form2.tmp_cc2.value + 'ตรวจโปรแกรมตรวจสุขภาพ โปรแกรม '; ">
                <input type="button" class=" btn btn-pop " value="รับยาต่อเนื่อง" OnClick="document.form2.tmp_cc2.value = document.form2.tmp_cc2.value + 'การรับยาต่อเนื่อง '; ">
                <input type="button" class=" btn btn-pop " value="เรื่องวัคซีน" OnClick="document.form2.tmp_cc2.value = document.form2.tmp_cc2.value + 'การรับเรื่องวัคซีน '; ">
            </div></div>
            <hr>
            <div class="row"><div class="col-md-12">
                TEXT : <textarea  class="form-control" id="tmp_cc2" rows="6"></textarea>
            </div></div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="button" id="btnsave-tmpcc2" class="btn btn-primary" data-dismiss="modal" value="Send to CC" >
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
    <form name="form3" method="post">
            <div class="row"><div class="col-md-12">
                <input type="button"  class=" btn btn-pop-info " value="ติดตามตามนัด" OnClick="document.form3.tmp_cc3.value = document.form3.tmp_cc3.value + 'ติดตามตามนัด '; "> 
                <input type="button"  class=" btn btn-pop " value="เบาหวาน" OnClick="document.form3.tmp_cc3.value = document.form3.tmp_cc3.value + 'เบาหวาน '; ">
                <input type="button"  class=" btn btn-pop " value="ไทยรอยด์" OnClick="document.form3.tmp_cc3.value = document.form3.tmp_cc3.value + 'ไทยรอยด์ '; ">
                <input type="button"  class=" btn btn-pop " value="ความดันสูง" OnClick="document.form3.tmp_cc3.value = document.form3.tmp_cc3.value + 'ความดันสูง '; ">
                <input type="button"  class=" btn btn-pop " value="ไขมัน" OnClick="document.form3.tmp_cc3.value = document.form3.tmp_cc3.value + 'ไขมัน '; ">
                <input type="button"  class=" btn btn-pop " value="อาการทั่วไปปกติ" OnClick="document.form3.tmp_cc3.value = document.form3.tmp_cc3.value + 'อาการทั่วไปปกติ '; ">
                <input type="button"  class=" btn btn-pop " value="หลังผ่าตัด" OnClick="document.form3.tmp_cc3.value = document.form3.tmp_cc3.value + 'หลังผ่าตัด '; ">
                <input type="button"  class=" btn btn-pop " value="ทำแผลบริเวณ" OnClick="document.form3.tmp_cc3.value = document.form3.tmp_cc3.value + 'ทำแผลบริเวณ '; ">
                <input type="button"  class=" btn btn-pop " value="ตัดเล็บเท้า" OnClick="document.form3.tmp_cc3.value = document.form3.tmp_cc3.value + 'ตัดเล็บเท้า '; ">
                <input type="button"  class=" btn btn-pop " value="รับบริการวัคซีนไข้หวัดใหญ่" OnClick="document.form3.tmp_cc3.value = document.form3.tmp_cc3.value + 'รับบริการวัคซีนไข้หวัดใหญ่ '; ">
                <input type="button"  class=" btn btn-pop " value="เรื่องแผลที่เท้า" OnClick="document.form3.tmp_cc3.value = document.form3.tmp_cc3.value + 'เรื่องแผลที่เท้า '; ">
                <input type="button"  class=" btn btn-pop-info " value="นัดครั้งต่อไป" OnClick="document.form3.tmp_cc3.value = document.form3.tmp_cc3.value + 'นัดครั้งต่อไปอีก '; ">
                <input type="button"  class=" btn btn-pop-info " value="สัปดาห์" OnClick="document.form3.tmp_cc3.value = document.form3.tmp_cc3.value + '1 สัปดาห์ '; ">
                <input type="button"  class=" btn btn-pop-info " value="เดือน" OnClick="document.form3.tmp_cc3.value = document.form3.tmp_cc3.value + '1 เดือน '; ">
            </div></div>
            <hr>
            <div class="row"><div class="col-md-12">
                TEXT : <textarea class="form-control"  id="tmp_cc3" rows="6"></textarea>
            </div></div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="button" id="btnsave-tmpcc3" class="btn btn-primary" data-dismiss="modal" value="Send to CC" >
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
    <form name="form4" method="post">
            <div class="row"><div class="col-md-12">
                <input type="button"  class=" btn btn-pop-info " value="ขอรับการตรวจ " OnClick="document.form4.tmp_cc4.value = document.form4.tmp_cc4.value + 'ผู้ป่วยขอรับการ'; "> 
                <input type="button"  class=" btn btn-pop " value="ตรวจสุขภาพประจำปี " OnClick="document.form4.tmp_cc4.value = document.form4.tmp_cc4.value + 'ตรวจสุขภาพประจำปี โปรแกรม '; "> 
                <input type="button"  class=" btn btn-pop " value="ตรวจสุขภาพก่อนแต่งงานหรือวางแผนตั้งครรภ์" OnClick="document.form4.tmp_cc4.value = document.form4.tmp_cc4.value + 'ตรวจสุขภาพก่อนแต่งงานหรือวางแผนตั้งครรภ์'; "> 
                <input type="button"  class=" btn btn-pop " value="ตรวจสุขภาพก่อนทำประกัน" OnClick="document.form4.tmp_cc4.value = document.form4.tmp_cc4.value + 'ตรวจสุขภาพก่อนทำประกัน '; "> 
                <input type="button"  class=" btn btn-pop " value="ตรวจสุขภาพขอใบขับขี่" OnClick="document.form4.tmp_cc4.value = document.form4.tmp_cc4.value + 'ตรวจสุขภาพขอใบขับขี่ '; "> 
                <input type="button"  class=" btn btn-pop " value="ตรวจสุขภาพขอใบรับรองแพทย์" OnClick="document.form4.tmp_cc4.value = document.form4.tmp_cc4.value + 'ตรวจสุขภาพขอใบรับรองแพทย์ '; "> 
            </div></div>
            <hr>
            <div class="row"><div class="col-md-12">
                TEXT : <textarea class="form-control" id="tmp_cc4" rows="6"></textarea>
            </div></div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="button" id="btnsave-tmpcc4" class="btn btn-primary" data-dismiss="modal" value="Send to CC" >
    </div>
  </div>
</div>
</div>
<!--- DIALOG 5--->
<div class="modal fade bd-popup5-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title" id="popup4ModalLabel">ตรวจสุขภาพ</h3>
        </button>
    </div>
    <div class="modal-body">
    <form name="form5" method="post">
            <div class="row"><div class="col-md-12">
                <input type="button"  class=" btn btn-pop-info " value="นัดโดย " OnClick="document.form5.tmp_cc5.value = document.form5.tmp_cc5.value + 'นัดโดย '; "> 
                <input type="button"  class=" btn btn-pop-info " value="ให้เข้าพบ" OnClick="document.form5.tmp_cc5.value = document.form5.tmp_cc5.value + 'ให้เข้าพบ '; "> 
                <input type="button"  class=" btn btn-pop " value="แพทย์ 1" OnClick="document.form5.tmp_cc5.value = document.form5.tmp_cc5.value + 'แพทย์ 1'; "> 
                <input type="button"  class=" btn btn-pop " value="แพทย์ 2" OnClick="document.form5.tmp_cc5.value = document.form5.tmp_cc5.value + 'แพทย์ 2'; "> 
                <input type="button"  class=" btn btn-pop " value="แพทย์ 3" OnClick="document.form5.tmp_cc5.value = document.form5.tmp_cc5.value + 'แพทย์ 3'; "> 
            </div></div>
            <hr>
            <div class="row"><div class="col-md-12">
                TEXT : <textarea class="form-control" id="tmp_cc5" rows="6"></textarea>
            </div></div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="button" id="btnsave-tmpcc5" class="btn btn-primary" data-dismiss="modal" value="Send to CC" >
    </div>
  </div>
</div>
</div>
<!--- END DIALOG --->

<!--- BUTTON LINK --->
<div class="row"><div class="col-md-12">
    <button class="btn btn-success" data-toggle="modal" data-target =".bd-popup1-modal-lg"> อาการ </button>
    <button class="btn btn-success" data-toggle="modal" data-target =".bd-popup2-modal-lg"> ให้คำปรึกษา </button>
    <button class="btn btn-success" data-toggle="modal" data-target =".bd-popup3-modal-lg"> ติดตามอาการ </button>
    <button class="btn btn-success" data-toggle="modal" data-target =".bd-popup4-modal-lg"> ตรวจสุขภาพ </button>
    <button class="btn btn-success" data-toggle="modal" data-target =".bd-popup5-modal-lg"> แพทย์ </button>
</div></div>
<hr>
<!--- BUTTON LINK --->
<div class="nurse-cc-form">
<?php Pjax::begin(); ?>
    <?php $form = ActiveForm::begin([
        //'type' => ActiveForm::TYPE_HORIZONTAL,
        'id' => 'nurse-cc-form',
        'formConfig' => ['labelSpan' => 2, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); 
    
    ?>
<div class="row ">
<div class="col-md-12">
<div class="panel panel-success">
  <div class="panel-heading"><div class="panel-title"><i class="fa fa-sticky-note-o"></i> อาการ : </div></div>
    <div class="panel-body">
        <div class="row"><div class="col-md-12">
            <?= $form->field($model, 'chk_cc_data')->textarea(['id'=>'chk_cc_data','class'=>'cctext','rows' => 6])->label("Chief complaint"); ?>
        </div></div>
    
<div class="row">
    <div class="col-md-12">
        <?php // $form->field($model, 'nurse_text')->textarea(['onclick' => '','rows' => 6]) ?>

    </div></div>

<div class="row">
    <div class="col-md-4">
        <?= $form->field($model, 'requester')->textInput(['placeholder'=>'requester'])->label(false) ?>
        <?= $form->field($model, 'hn')->hiddenInput(['value' => $hn])->label(false); ?>
        <?= $form->field($model, 'vn')->hiddenInput(['value' => $vn])->label(false); ?>

        <?= $form->field($model, 'date_start_service')->hiddenInput(['value' => $Sdate])->label(false); ?>
        <?= $form->field($model, 'time_start_service')->hiddenInput(['value' => $Stime])->label(false); ?>
    </div>
    <div class="col-md-4">
    
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        
    </div>
</div><!--END ROW 2--->
</div>
</div><!--END ROW 1--->

    <?php ActiveForm::end(); ?>
    <?php Pjax::end(); ?>


</div>

