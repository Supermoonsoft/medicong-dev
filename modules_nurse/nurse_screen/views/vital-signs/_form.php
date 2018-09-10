<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii\widgets\Pjax;
use yii\helpers\Button;
use app\components\PatientHelper;
use app\components\MessageHelper;
use app\modules_nurse\nurse_screen\models\OpdVisit;

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
.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
.nav-tabs > li > a { border: none; color: #ffffff;background: #00e676; }
        .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none;  color: #00e676 !important; background: #fff; }
        .nav-tabs > li > a::after { content: ''; background: #00e676; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
.nav-tabs > li  {width:50%; text-align:center;}
.card {padding:10px;box-shadow:  0 0 10px 0 rgba(0,0,0,.10); margin: 10px; }
");
?>

<div class="vital-signs-form">

<?php Pjax::begin(); ?>
<?php $form = ActiveForm::begin(); ?>

<div class="panel panel-success">
    <div class="panel-heading"><h3>Vital Signs</h3></div>
<div class="panel-body">

<div class="card">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#posthd" aria-controls="posthd" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-plus"></i>  <span>POST HD</span></a></li>
        <li role="presentation"><a href="#prehd" aria-controls="prehd" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-plus"></i>  <span>PRE HD</span></a></li>
    </ul>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="posthd">
    <div class="row">
    <div class="col-md-12">
    <h3>
        <?= Html::a('Last Vital Signs', 
                        ['/screen/nurse-screen/create',], 
                        ['class'=>'btn btn-primary']); ?>
        <?= Html::a('Load form Machine', 
                        ['/screen/nurse-screen/create',], 
                        ['class'=>'btn btn-info']); ?>
        <?= $form->field($model, 'hn')->hiddenInput(['value' => $hn])->label(false); ?>
        <?= $form->field($model, 'vn')->hiddenInput(['value' => $vn])->label(false); ?>

        <?= $form->field($model, 'date_start_service')->hiddenInput(['value' => $Sdate])->label(false); ?>
        <?= $form->field($model, 'time_start_service')->hiddenInput(['value' => $Stime])->label(false); ?>
    </h3>
    </div>
    </div>
        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'bheight')->textInput(['autofocus'=>true,'type' => 'number']) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'bweight')->textInput(['type' => 'number']) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <?= $form->field($model, 'btemp_1')->textInput(['type' => 'number']) ?>
            </div>   
            <div class="col-md-2">
                <?= $form->field($model, 'sbp_1')->textInput(['type' => 'number']) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'dbp_1')->textInput(['type' => 'number']) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'position_1')->textInput(['type' => 'number']) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'arm_1')->textInput(['type' => 'number']) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <?= $form->field($model, 'pr_1')->textInput(['type' => 'number']) ?>
            </div>   
            <div class="col-md-2">
                <?= $form->field($model, 'pr_rhythm_1')->textInput(['type' => 'number']) ?> 
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'rr_1')->textInput(['type' => 'number']) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'o2sat_1')->textInput(['type' => 'number']) ?>
            </div>
        </div>  

    </div><!-- close tab1-->

    <div role="tabpanel" class="tab-pane" id="prehd">
    <br>
        <div class="row">
            <div class="col-md-2">
                <?= $form->field($model, 'btemp_2')->textInput(['type' => 'number']) ?>
            </div>   
            <div class="col-md-2">
                <?= $form->field($model, 'sbp_2')->textInput(['type' => 'number']) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'dbp_2')->textInput(['type' => 'number']) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'position_2')->textInput(['type' => 'number']) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'arm_2')->textInput(['type' => 'number']) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <?= $form->field($model, 'pr_2')->textInput(['type' => 'number']) ?>
            </div>   
            <div class="col-md-2">
                <?= $form->field($model, 'pr_rhythm_2')->textInput(['type' => 'number']) ?> 
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'rr_2')->textInput(['type' => 'number']) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'o2sat_2')->textInput(['type' => 'number']) ?>
            </div>
        </div>  

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
    
    </div><!-- close tab2-->
</div><!-- close tab all-->
</div><!-- close card--->
</div><!-- close panel-body--->
</div><!-- close panel --->
 

    <?php ActiveForm::end(); ?>
    <?php Pjax::end(); ?>
</div>
