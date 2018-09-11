<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use phpnt\ICheck\ICheck;
use app\components\PatientHelper;
use app\components\MessageHelper;
use app\components\loading\ShowLoading;
echo ShowLoading::widget();
$this->registerCss($this->render('../../dist/css/style.css'));
$this->registerJs($this->render('../../dist/js/script.js'));

$hn = PatientHelper::getCurrentHn();
$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>
<style>
.box_form{
    margin-top:20px;
}

.box_form > .form-group{
    margin-bottom: 31px;
}
.help-block {
    display: block;
    margin-top: -16px;
    margin-bottom: 10px;
    color: #737373;
}
/* ## จบ */

</style>
<?=$this->render('@app/modules_share/foot/views/default/panel_top',[
    'tabsummary' => '',
    'tabcomplate' =>'active',
    'tabfirst' =>'',
    'tabfu'=>'' 
    ])?>
<div>
 <h3 style='text-align: center;17px;color: #777;'>DIABETIC FOOT ASSESSMENT RECORD : COMPLETE </h3>
 </div>
        <hr/>
        <?php $form = ActiveForm::begin([
            'id' => 'form',
            'action' =>['/foot/foot-assessment-complate']
            ]); ?>
                <?=$form->field($model, 'hn')->hiddenInput(['value' => $hn])->label(false);?>
                <?=$form->field($model, 'vn')->hiddenInput(['value' => $vn])->label(false);?>   
                <?=$this->render('@app/modules_share/foot/views/foot-assessment-complate/complate_tab1',['form' => $form,'model' => $model])?>

                <?=$this->render('@app/modules_share/foot/views/foot-assessment-complate/complate_tab2',['form' => $form,'model' => $model])?>

                <?=$this->render('@app/modules_share/foot/views/foot-assessment-complate/complate_tab3',['form' => $form,'model' => $model])?>

                <?=$this->render('@app/modules_share/foot/views/foot-assessment-complate/complate_tab4',['form' => $form,'model' => $model])?>

                <?=$this->render('@app/modules_share/foot/views/foot-assessment-complate/complate_tab5',['form' => $form,'model' => $model])?>

                <?=$this->render('@app/modules_share/foot/views/foot-assessment-complate/complate_tab6',['form' => $form,'model' => $model])?>

    
<?php $form = ActiveForm::end(); ?>
<?=$this->render('@app/modules_share/foot/views/default/panel_foot')?>