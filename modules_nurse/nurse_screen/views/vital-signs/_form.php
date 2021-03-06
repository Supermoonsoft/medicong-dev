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
.card {box-shadow:  0 0 10px 0 rgba(0,0,0,.10);}
");
?>

<div class="vital-signs-form">

<?php Pjax::begin(); ?>
<?php $form = ActiveForm::begin(); ?>

<div class="panel panel-success">
    <div class="panel-heading">
        <div class="panel-title"><i class="fa fa-sticky-note-o"></i> Vital Signs</div>
    </div>
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
                        ['',], 
                        ['class'=>'btn btn-primary']); ?>
        <?= Html::a('Load form Machine', 
                        ['',], 
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
