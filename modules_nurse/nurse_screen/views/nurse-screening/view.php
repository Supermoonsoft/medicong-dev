<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\components\PatientHelper;
use app\components\MessageHelper;
use app\modules_nurse\nurse_screen\models\NurseCc;
use app\components\loading\ShowLoading;
echo ShowLoading::widget();

$this->title = "Nurseing Assessment";
$this->params['breadcrumbs'][] = ['label' => 'Patient-Entry', 'url' => ['/screen/default/index']];
$this->params['breadcrumbs'][] = $this->title;

$hn = PatientHelper::getCurrentHn();

$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>
<?php
$this->registerCss("
.box-shadow {
    -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
    box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
    font-size: 14px;
}
");
?>
<div class="nurse-screening-view">

<div class="col-md-2"></div>
<div class="col-md-8">


<h3>บันทึก Chief Complaint : 
    <?php 
        if(NurseCc::find()->where(['vn'=>$model->vn])->count()>0){
            $vs = NurseCc::find()->where(['vn'=>$model->vn])->one();
            echo Html::a('<i class="glyphicon glyphicon-plus-sign"> Chief Complaint </i>',
                ['/nursescreen/nurse-cc/update','id'=>$vs->id],
                ['class' => 'btn btn-success']
            );
        }else{
            echo Html::a('<i class="glyphicon glyphicon-plus-sign"> Chief Complaint </i>',
                ['/nursescreen/nurse-cc/create',],
                ['class' => 'btn btn-success']
            );
        }
    ?>
</h3>

<div class="panel panel-success box-shadow">
  <div class="panel-heading">
    <div class="panel-title"><i class="fa fa-sticky-note-o"></i> การมารับบริการ : 
            <?= Html::a('<i class="glyphicon glyphicon-pencil"></i>', ['update', 'id' => $model->id]) ?>
    </div>
  </div>
  <div class="panel-body">


<div class="row"><div class="col-md-3">
    <?php echo '<b>ผู้ป่วยทั่วไป : ';
            //if($model->chk_illness='t'){
            // echo "<span class='label label-success'>Yes</span>";}else{"<span class='label label-danger'>No</span>";}
            echo  $model->chk_illness==1 ? "<span class='label label-success'>Yes</span>":"<span class='label label-danger'>No</span>";
             ?>
</div><div class="col-md-3">
    <?php echo 'บริการ ฉุกเฉิน : ';
    echo $model->cnk_er ==1 ? "<span class='label label-success'>Yes</span>":"<span class='label label-danger'>No</span>";
    ?>
</div><div class="col-md-2">
    <?php echo 'ตรวจสุขภาพ : ';
    echo $model->chk_checkup ==1 ? "<span class='label label-success'>Yes</span>":"<span class='label label-danger'>No</span>";
     ?>
</div><div class="col-md-4">
    <?php echo 'มาตามนัด/ติดตามอาการ : ';
    echo $model->chk_followup ==1 ? "<span class='label label-success'>Yes</span>":"<span class='label label-danger'>No</span>";
    ?>
</div></div>

<div class="row"><div class="col-md-3">
    <?php echo 'ผู้ป่วยเบาหวาน(Dm) : ';
    echo $model->chk_dm ==1 ? "<span class='label label-success'>NEW</span>":"<span class='label label-danger'>No</span>";
    ?>
</div><div class="col-md-3">
    <?php echo 'DM TYPE : '.$model->chk_dm_type ?>
</div><div class="col-md-3">
    <?php echo 'ผู้ป่วย ไทรอยด์ : ';
    echo $model->chk_thyroid ==1 ? "<span class='label label-success'>Yes</span>":"<span class='label label-danger'>No</span>";
    ?>
</div><div class="col-md-3">
    <?php echo 'ประเภทผู้ป่วยไทรอยด์ : '.$model->chk_thyroid_type ?>
</div></div>

<div class="row"><div class="col-md-3">
    <?php echo 'รับวัคซีน : ';
    echo $model->chk_im ==1 ? "<span class='label label-success'>Yes</span>":"<span class='label label-danger'>No</span>";
    ?>
</div><div class="col-md-3">
    <?php echo 'ANC : ';
    echo $model->chk_anc ==1 ? "<span class='label label-success'>Yes</span>":"<span class='label label-danger'>No</span>";
    ?>
</div><div class="col-md-3">
    <?php echo 'ผู้ป่วยสิทธิ์ประกัน : ';
    echo $model->chk_insurace ==1 ? "<span class='label label-success'>Yes</span>":"<span class='label label-danger'>No</span>";
    ?>
</div><div class="col-md-3">
    <?php echo 'Contract : ';
    echo $model->chk_contract ==1 ? "<span class='label label-success'>Yes</span>":"<span class='label label-danger'>No</span>";
    ?>
</div></div>

<div class="row"><div class="col-md-3">
    <?php echo 'ตรวจตา : ';
    echo $model->chk_eye ==1 ? "<span class='label label-success'>Yes</span>":"<span class='label label-danger'>No</span>";
    ?>
</div><div class="col-md-3">
    <?php echo 'อื่นๆ : ';
    echo $model->chk_other ==1 ? "<span class='label label-success'>Yes</span>":"<span class='label label-danger'>No</span>";
    ?>
</div><div class="col-md-6">
    <?php echo 'หมายเหตุ : '.$model->chk_other_text ?>
</div></div>
 
</div></div>
<div class="panel panel-warning box-shadow">
<div class="panel-heading">
    <div class="panel-title"><i class="fa fa-sticky-note-o"></i> อาการ : </div>
</div>
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
<div class="panel-heading">
    <div class="panel-title"><i class="fa fa-sticky-note-o"></i> Full Risk : </div>
</div>
  <div class="panel-body">

<div class="row"><div class="col-md-2">
<?php echo 'มีประวัติ : ';
    echo $model->chk_risk_1 ==true ? "<span class='label label-success'>Yes</span>":"<span class='label label-danger'>No</span>";
?>
</div><div class="col-md-2">
<?php echo 'ได้ยา : ';
    echo $model->chk_risk_2 ==true ? "<span class='label label-success'>Yes</span>":"<span class='label label-danger'>No</span>";
?>
</div><div class="col-md-2">
<?php echo 'ใช้อุปกรณ์ : ';
    echo $model->chk_risk_3 ==true ? "<span class='label label-success'>Yes</span>":"<span class='label label-danger'>No</span>";
?> 
</div><div class="col-md-3">
<?php echo 'มีปัญหาการทรงตัว : ';
    echo $model->chk_risk_4 ==true ? "<span class='label label-success'>Yes</span>":"<span class='label label-danger'>No</span>";
?>
</div><div class="col-md-2">
<?php echo 'แอลกอฮอล์ : ';
    echo $model->chk_risk_5 ==true ? "<span class='label label-success'>Yes</span>":"<span class='label label-danger'>No</span>";
?>   
</div></div>
    
<div class="row"><div class="col-md-12">
    <?php echo 'Infection Risk Precaution : '.$model->chk_risk_infe ?>
</div></div>

</div>
</div>
</div>
