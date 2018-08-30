<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\components\PatientHelper;
?>
<?php
$this->registerCss("
.box-shadow {
    -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
    box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
}
");
?>
<div class="nurse-screening-view">

<div class="col-md-2"></div>
<div class="col-md-8">

<div class="panel panel-success box-shadow">
  <div class="panel-heading">การมารับบริการ : <?= PatientHelper::getCurrentHn() ?>
        <?= Html::a('<i class="glyphicon glyphicon-pencil"></i>', ['update', 'id' => $model->id]) ?>
        <?= Html::a('<i class="glyphicon glyphicon-erase"></i>', ['delete', 'id' => $model->id], [
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>

  </div>
  <div class="panel-body">


<div class="row"><div class="col-md-3">
    <?php echo 'ผู้ป่วยทั่วไป : ';
            //if($model->chk_illness='t'){
            // echo "<i class='glyphicon glyphicon-ok'></i>";}else{"<i class='glyphicon glyphicon-remove'></i>";}
            echo  $model->chk_illness==1 ? "<i class='glyphicon glyphicon-ok'></i>":"<i class='glyphicon glyphicon-remove'></i>";
             ?>
</div><div class="col-md-3">
    <?php echo 'บริการ ฉุกเฉิน : ';
    echo $model->cnk_er ==1 ? "<i class='glyphicon glyphicon-ok'></i>":"<i class='glyphicon glyphicon-remove'></i>";
    ?>
</div><div class="col-md-3">
    <?php echo 'ตรวจสุขภาพ : ';
    echo $model->chk_checkup ==1 ? "<i class='glyphicon glyphicon-ok'></i>":"<i class='glyphicon glyphicon-remove'></i>";
     ?>
</div><div class="col-md-3">
    <?php echo 'มาตามนัด/ติดตามอาการ : ';
    echo $model->chk_followup ==1 ? "<i class='glyphicon glyphicon-ok'></i>":"<i class='glyphicon glyphicon-remove'></i>";
    ?>
</div></div>

<div class="row"><div class="col-md-3">
    <?php echo 'ผู้ป่วยเบาหวาน(Dm) : ';
    echo $model->chk_dm ==1 ? "<i class='glyphicon glyphicon-ok'></i>":"<i class='glyphicon glyphicon-remove'></i>";
    ?>
</div><div class="col-md-3">
    <?php echo 'DM TYPE : '.$model->chk_dm_type ?>
</div><div class="col-md-3">
    <?php echo 'ผู้ป่วย ไทรอยด์ : ';
    echo $model->chk_thyroid ==1 ? "<i class='glyphicon glyphicon-ok'></i>":"<i class='glyphicon glyphicon-remove'></i>";
    ?>
</div><div class="col-md-3">
    <?php echo 'ประเภทผู้ป่วยไทรอยด์ : '.$model->chk_thyroid_type ?>
</div></div>

<div class="row"><div class="col-md-3">
    <?php echo 'รับวัคซีน : ';
    echo $model->chk_im ==1 ? "<i class='glyphicon glyphicon-ok'></i>":"<i class='glyphicon glyphicon-remove'></i>";
    ?>
</div><div class="col-md-3">
    <?php echo 'ANC : ';
    echo $model->chk_anc ==1 ? "<i class='glyphicon glyphicon-ok'></i>":"<i class='glyphicon glyphicon-remove'></i>";
    ?>
</div><div class="col-md-3">
    <?php echo 'ผู้ป่วยสิทธิ์ประกัน : ';
    echo $model->chk_insurace ==1 ? "<i class='glyphicon glyphicon-ok'></i>":"<i class='glyphicon glyphicon-remove'></i>";
    ?>
</div><div class="col-md-3">
    <?php echo 'Contract : ';
    echo $model->chk_contract ==1 ? "<i class='glyphicon glyphicon-ok'></i>":"<i class='glyphicon glyphicon-remove'></i>";
    ?>
</div></div>

<div class="row"><div class="col-md-3">
    <?php echo 'ตรวจตา : ';
    echo $model->chk_eye ==1 ? "<i class='glyphicon glyphicon-ok'></i>":"<i class='glyphicon glyphicon-remove'></i>";
    ?>
</div><div class="col-md-3">
    <?php echo 'อื่นๆ : ';
    echo $model->chk_other ==1 ? "<i class='glyphicon glyphicon-ok'></i>":"<i class='glyphicon glyphicon-remove'></i>";
    ?>
</div><div class="col-md-6">
    <?php echo 'หมายเหตุ : '.$model->chk_other_text ?>
</div></div>

</div></div>
<div class="panel panel-warning box-shadow">
  <div class="panel-heading">อาการ : </div>
  <div class="panel-body">


<div class="row"><div class="col-md-2">
    <?php echo 'ความเร่งด่วน : '.$model->chk_triage ?>
</div>
<div class="col-md-2">
    <?php echo 'การมา : '.$model->chk_access ?>
</div>
<div class="col-md-3">
    <?php echo 'Contact_Type : '.$model->chk_contact_type ?>
</div>
<div class="col-md-2">
    <?php echo 'ความรู้สึก : '.$model->chk_loc ?>
</div></div>

<div class="row"><div class="col-md-2">
    <?php echo 'PainScore : '.$model->pain_score ?>
</div><div class="col-md-2">
    <?php echo 'Pain Type : '.$model->pain_type ?>
</div><div class="col-md-2">
    <?php echo 'Pain Scale : '.$model->pain_scale ?>
</div></div>

</div></div>
<div class="panel panel-danger box-shadow">
  <div class="panel-heading">Full Risk : </div>
  <div class="panel-body">

<div class="row"><div class="col-md-2">
<?php echo 'มีประวัติ : ';
    echo $model->chk_risk_1 ==1 ? "<i class='glyphicon glyphicon-ok'></i>":"<i class='glyphicon glyphicon-remove'></i>";
?>
</div><div class="col-md-2">
<?php echo 'ได้ยา : ';
    echo $model->chk_risk_2 ==1 ? "<i class='glyphicon glyphicon-ok'></i>":"<i class='glyphicon glyphicon-remove'></i>";
?>
</div><div class="col-md-2">
<?php echo 'ใช้อุปกรณ์ : ';
    echo $model->chk_risk_3 ==1 ? "<i class='glyphicon glyphicon-ok'></i>":"<i class='glyphicon glyphicon-remove'></i>";
?> 
</div><div class="col-md-3">
<?php echo 'มีปัญหาการทรงตัว : ';
    echo $model->chk_risk_4 ==1 ? "<i class='glyphicon glyphicon-ok'></i>":"<i class='glyphicon glyphicon-remove'></i>";
?>
</div><div class="col-md-2">
<?php echo 'แอลกอฮอล์ : ';
    echo $model->chk_risk_5 ==1 ? "<i class='glyphicon glyphicon-ok'></i>":"<i class='glyphicon glyphicon-remove'></i>";
?>   
</div></div>
    
<div class="row"><div class="col-md-12">
    <?php echo 'Infection Risk Precaution : '.$model->chk_risk_infe ?>
</div></div>

</div>
</div>
</div>
