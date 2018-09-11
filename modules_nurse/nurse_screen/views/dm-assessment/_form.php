<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii\widgets\Pjax;
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
.box-shadow {
    -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
    box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
}
"); 
?>
<div class="dm-assessment-form">
<?php Pjax::begin(); ?>
    <?php $form = ActiveForm::begin([
        //'type' => ActiveForm::TYPE_HORIZONTAL,
        //'formConfig' => ['labelSpan' => 6, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); 
    
    ?>
        <?= $form->field($model, 'hn')->hiddenInput(['value' => $hn])->label(false); ?>
        <?= $form->field($model, 'vn')->hiddenInput(['value' => $vn])->label(false); ?>

        <?= $form->field($model, 'date_start_service')->hiddenInput(['value' => $Sdate])->label(false); ?>
        <?= $form->field($model, 'time_start_service')->hiddenInput(['value' => $Stime])->label(false); ?>
        
<div class="col-md-1"></div>
<div class="col-md-10">

<div class="row ">
<div class="col-md-12">
<div class="panel panel-success box-shadow">
  <div class="panel-heading"><h1>DM Assessment</h1> : </div>
  <div class="panel-body">

<div class="dm-assessment-form">

<div class="row"><div class="col-md-4">
    <?= $form->field($model, 'last_meal_eating')->radioList(["YES" => 'YES', "NO" => 'No'],['inline'=>true]) ?>
</div><div class="col-md-2">
    <?= $form->field($model, 'last_meal_eating_data')->textInput()->label("at Times") ?>
</div></div>

<div class="row"><div class="col-md-4">
    <?= $form->field($model, 'last_insulin')->radioList(["YES" => 'YES', "NO" => 'No'],['inline'=>true]) ?>
</div><div class="col-md-2">
    <?= $form->field($model, 'last_insulin_data')->textInput()->label("at Times") ?>
</div></div>

<div class="row"><div class="col-md-6">
    <?= $form->field($model, 'psychosocial_problem')->radioList(["Normal" => 'Normal', "Stress" => 'Stress', "Depression" => 'Depression'],['inline'=>true]) ?>
</div></div>

<div class="row"><div class="col-md-4">
    <?= $form->field($model, 'key_presenting')->radioList(["No" => 'No at All', "YES" => 'YES'],['inline'=>true]) ?>
</div>
<div class="col-md-3">
    <?= $form->field($model, 'chest_discomfort')->checkbox() ?>
</div><div class="col-md-2">
    <?= $form->field($model, 'blurred_vision')->checkbox() ?>
</div><div class="col-md-1">
    <?= $form->field($model, 'numbness')->checkbox() ?>
</div><div class="col-md-2">
    <?= $form->field($model, 'foot_ulcer')->checkbox() ?>
</div></div>

<div class="row"><div class="col-md-4">
    <?= $form->field($model, 'hbpm')->radioList(["No" => 'No at All', "YES" => 'YES'],['inline'=>true]) ?>
</div><div class="col-md-2">
    <?= $form->field($model, 'hbpm_frequency')->checkbox() ?>
</div><div class="col-md-1">
    <?= $form->field($model, 'hbpm_day')->textInput(['type'=>'number'])->label("Day") ?>
</div><div class="col-md-1">
    <?= $form->field($model, 'hbpm_week')->textInput(['type'=>'number'])->label("Week") ?>
</div><div class="col-md-1">
    <?= $form->field($model, 'hbpm_month')->textInput(['type'=>'number'])->label("Month") ?>
</div></div>

<div class="row">
<div class="col-md-3">
    <?= $form->field($model, 'hbpm_result')->checkbox() ?>
    </div><div class="col-md-1">
    <?= $form->field($model, 'hbpm_sbp')->checkbox() ?>
    </div><div class="col-md-2">
    <?= $form->field($model, 'hbpm_sbp_data')->textInput(['type'=>'number'])->label("") ?>
    </div><div class="col-md-1">
    <?= $form->field($model, 'hbpm_dbp')->checkbox() ?>
    </div><div class="col-md-2">
    <?= $form->field($model, 'hbpm_dbp_data')->textInput(['type'=>'number'])->label("") ?>
    </div><div class="col-md-1">
    <?= $form->field($model, 'hbpm_pulse')->checkbox() ?>
    </div><div class="col-md-2">
    <?= $form->field($model, 'hbpm_pulse_data')->textInput(['type'=>'number'])->label("") ?>
    </div>
</div>

<div class="row"><div class="col-md-2">
    <?= $form->field($model, 'smbg')->radioList(["No" => 'No at All', "YES" => 'YES'],['inline'=>true]) ?>
</div><div class="col-md-2">
    <?= $form->field($model, 'smbg_frequency')->checkbox() ?>
</div><div class="col-md-1">
    <?= $form->field($model, 'smbg_day')->textInput(['type'=>'number'])->label("Day") ?>
</div><div class="col-md-1">
    <?= $form->field($model, 'smbg_week')->textInput(['type'=>'number'])->label("Week") ?>
</div><div class="col-md-1">
    <?= $form->field($model, 'smbg_month')->textInput(['type'=>'number'])->label("Month") ?>
</div></div>
<div class="row">
<div class="col-md-3">
    <?= $form->field($model, 'smbg_result')->checkbox() ?>
    </div><div class="col-md-1">
    <?= $form->field($model, 'smbg_sbp')->checkbox() ?>
    </div><div class="col-md-2">
    <?= $form->field($model, 'smbg_sbp_data')->textInput(['type'=>'number'])->label("") ?>
    </div><div class="col-md-1">
    <?= $form->field($model, 'smbg_dbp')->checkbox() ?>
    </div><div class="col-md-2">
    <?= $form->field($model, 'smbg_dbp_data')->textInput(['type'=>'number'])->label("") ?>
    </div><div class="col-md-1">
    <?= $form->field($model, 'smbg_pulse')->checkbox() ?>
    </div><div class="col-md-2">
    <?= $form->field($model, 'smbg_pulse_data')->textInput(['type'=>'number'])->label("") ?>
    </div>
</div>

<div class="row"><div class="col-md-4">
    <?= $form->field($model, 'hyperglycemic')->radioList(["YES" => 'YES', "NO" => 'No'],['inline'=>true]) ?>
</div><div class="col-md-3">
    <?= $form->field($model, 'hyperglycemic_data')->textInput()->label("describe") ?>
</div></div>

<div class="row"><div class="col-md-4">
    <?= $form->field($model, 'hypoglycemic')->radioList(["YES" => 'YES', "NO" => 'No'],['inline'=>true]) ?>
</div><div class="col-md-3">
    <?= $form->field($model, 'hypoglycemic_data')->textInput()->label("describe") ?>
</div></div>

<div class="row"><div class="col-md-4">
    <?= $form->field($model, 'hypoglycemic_risk')->radioList(["YES" => 'YES', "NO" => 'No'],['inline'=>true]) ?>
</div></div>

<div class="row"><div class="col-md-4">
    <?= $form->field($model, 'hypoglycemic_risk1')->radioList(["YES" => 'YES', "NO" => 'No'],['inline'=>true]) ?>
</div><div class="col-md-3">
    <?= $form->field($model, 'hypoglycemic_risk1_data')->textInput()->label("describe") ?>
</div></div>

<div class="row"><div class="col-md-4">
    <?= $form->field($model, 'hypoglycemic_risk2')->radioList(["YES" => 'YES', "NO" => 'No'],['inline'=>true]) ?>
</div><div class="col-md-3">
    <?= $form->field($model, 'hypoglycemic_risk2_data')->textInput()->label("describe") ?>
</div></div>

<div class="row"><div class="col-md-4">
    <?= $form->field($model, 'hypoglycemic_risk3')->radioList(["YES" => 'YES', "NO" => 'No'],['inline'=>true]) ?>
</div><div class="col-md-3">
    <?= $form->field($model, 'hypoglycemic_risk3_data')->textInput()->label("describe") ?>
</div></div>

<div class="row"><div class="col-md-3">
    <?= $form->field($model, 'diet_data1')->radioList(["0" => '0', "1" => '1', "2" => '2', "3" => '3'],['inline'=>true]) ?>
</div><div class="col-md-3">
    <?= $form->field($model, 'diet_data2')->radioList(["0" => '0', "1" => '1', "2" => '2', "3" => '3'],['inline'=>true]) ?>
</div></div>

<div class="row"><div class="col-md-3">
    <?= $form->field($model, 'exercise_data1')->radioList(["0" => '0', "1" => '1', "2" => '2', "3" => '3'],['inline'=>true]) ?>
</div><div class="col-md-3">
    <?= $form->field($model, 'exercise_data2')->radioList(["0" => '0', "1" => '1', "2" => '2', "3" => '3'],['inline'=>true]) ?>
</div></div>

<div class="row"><div class="col-md-3">
    <?= $form->field($model, 'drug_data1')->radioList(["0" => '0', "1" => '1', "2" => '2', "3" => '3'],['inline'=>true]) ?>
</div><div class="col-md-3">
    <?= $form->field($model, 'drug_data2')->radioList(["0" => '0', "1" => '1', "2" => '2', "3" => '3'],['inline'=>true]) ?>
</div></div>

<div class="row"><div class="col-md-2">
    <?= $form->field($model, 'smooking')->radioList(["YES" => 'YES', "NO" => 'No'],['inline'=>true]) ?>
</div><div class="col-md-1">
    <?= $form->field($model, 'smooking_ex1')->checkbox()->label("Ex.") ?>
</div><div class="col-md-1">
    <?= $form->field($model, 'smooking_ex1_day')->textInput(['type'=>'number']) ?>
</div><div class="col-md-1">
    <?= $form->field($model, 'smooking_ex1_year')->textInput(['type'=>'number']) ?>
</div></div>

<div class="row"><div class="col-md-2">
    <?= $form->field($model, 'smooking2')->radioList(["YES" => 'YES', "NO" => 'No'],['inline'=>true]) ?>
</div><div class="col-md-1">
    <?= $form->field($model, 'smooking_ex2')->checkbox() ?>
</div><div class="col-md-1">
    <?= $form->field($model, 'smooking_ex2_day')->textInput(['type'=>'number']) ?>
</div><div class="col-md-1">
    <?= $form->field($model, 'smooking_ex2_year')->textInput(['type'=>'number']) ?>
</div></div>

<div class="row"><div class="col-md-4">
    <?= $form->field($model, 'vaccination_date1')->textInput(['type'=>'date']) ?>
</div><div class="col-md-4">
    <?= $form->field($model, 'vaccination_date2')->textInput(['type'=>'date']) ?>
</div></div>



<div class="row">
        <div class="col-md-2">
            <?= $form->field($model, 'requester')->textInput(['placeholder'=>'requester','maxlength' => true])->label(false) ?>
        </div>
        <div class="col-md-4">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            <?php // Html::submitButton('บันทึก', ['class' => 'btn btn-success']) ?>  
        </div>
</div>

</div></div></div>
<div class="col-md-1"></div>

    <?php ActiveForm::end(); ?>
    <?php Pjax::end(); ?>


</div>
