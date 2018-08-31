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

<div class="vital-signs-form">
<?php Pjax::begin(); ?>
    <?php $form = ActiveForm::begin(); ?>

<div class="col-md-2"></div>
<div class="col-md-8">


<div class="panel panel-success box-shadow">
  <div class="panel-heading">
    <h3>POST HD <?= PatientHelper::getCurrentHn() ?>
        <?= Html::a('Last Vital Signs', 
                        ['/screen/nurse-screen/create',], 
                        ['class'=>'btn btn-primary']); ?>
        <?= Html::a('Load form Machine', 
                        ['/screen/nurse-screen/create',], 
                        ['class'=>'btn btn-info']); ?>
        <?= $form->field($model, 'hn')->hiddenInput(['value' => '000000034'])->label(false); ?>
        <?= $form->field($model, 'vn')->hiddenInput(['value' => $vn_session])->label(false); ?>
        </h3>
  </div>
<div class="panel-body">

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

</div></div>
<div class="panel panel-primary box-shadow">
  <div class="panel-heading"><h3>PRE HD : </h3></div>
  <div class="panel-body">

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
    
</div>
</div>
</div>
 

    <?php ActiveForm::end(); ?>
    <?php Pjax::end(); ?>
</div>
