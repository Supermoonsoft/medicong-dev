<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use phpnt\ICheck\ICheck;
use app\components\PatientHelper;
$hn = PatientHelper::getCurrentHn();
$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>
<style>

.tabs-left, .tabs-right {
  border-bottom: none;
  padding-top: 2px;
}
.tabs-left {
  border-right: 1px solid #ddd;
}
.tabs-right {
  border-left: 1px solid #ddd;
}
.tabs-left>li, .tabs-right>li {
  float: none;
  margin-bottom: 2px;
}
.tabs-left>li {
  margin-right: -1px;
}
.tab-content{
    border: solid;
    border-width: 1px;
    border-color: #ccc;
    border-radius: 6px;
    padding: 15px;
}
.box{
    border-left: 5px solid #e8a32b;
    height: 63px;
    padding: 20px;
    text-align: center;
    font-size: 20px;
    background-color: #e8a32b29;
}
label {
    margin-right: 10px;
}

#footassessmentcomplate-occupation{
    display: inline-block;
}
#footassessmentcomplate-smoking{
    display: inline-block;
}
#footassessmentcomplate-activity{
    display: inline-block;
}
#footassessmentcomplate-using_ambulation{
    display: inline-block;
}
.field-footassessmentcomplate-evt_right{
    display: inline-block;
}
.field-footassessmentcomplate-evt_note_right{
    display: inline-block;
}
.field-footassessmentcomplate-chief_complaint{
    display: inline-block;
}

.box_form{
    margin-top:20px;
}

.box_form > .form-group{
    margin-bottom: 31px;
}
.table-title{
    font-size: 20px;
}
.table-right , .table-left{
    font-size: 18px;
}
.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
    color: #fff;
    cursor: default;
    background-color: #34465dbf;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
}
</style>

 <h3 style='margin-left: 17px;color: #777;'>DIABETIC FOOT ASSESSMENT RECORD : COMPLETE </h3>
        <hr/>
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-xs-3">
            <!-- required for floating -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-left">
                <li class="active"><a href="#1" data-toggle="tab">1. Personal and Past Medical History</a></li>
                <li><a href="#2" data-toggle="tab">2. Current foot problem and Examination</a></li>
                <li><a href="#3" data-toggle="tab">3. Footwear assessment</a></li>
                <li><a href="#4" data-toggle="tab">4. Education foot care assessment</a></li>
                <li><a href="#5" data-toggle="tab">5. Risk Categorization of Diabetic Foot Ulcer</a></li>
                <li><a href="#6" data-toggle="tab">6. Suggestion for prevention of foot ulcer and education</a></li>
            </ul>
        </div>
        <div class="col-xs-9">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="1">
                    <?=$this->render('@app/modules_share/foot/views/foot-assessment-complate/complate_tab1',['form' => $form,'model' => $model])?>
                </div>
                <!-- End Tabs 1 -->
                <div class="tab-pane" id="2">
                <?=$this->render('@app/modules_share/foot/views/foot-assessment-complate/complate_tab2',['form' => $form,'model' => $model])?>
                </div>
                <!-- End Tabs 2 -->
                <div class="tab-pane" id="3">
                <?=$this->render('@app/modules_share/foot/views/foot-assessment-complate/complate_tab3',['form' => $form,'model' => $model])?>
                </div>
                <!-- End Tab 3 -->
                <div class="tab-pane" id="4">
                <?=$this->render('@app/modules_share/foot/views/foot-assessment-complate/complate_tab4',['form' => $form,'model' => $model])?>
                </div>
                <!-- End Tab 4 -->
                <div class="tab-pane" id="5">
                <?=$this->render('@app/modules_share/foot/views/foot-assessment-complate/complate_tab5',['form' => $form,'model' => $model])?>
                </div>
                <!-- End Tab 5 -->
                <div class="tab-pane" id="6">
                <?=$this->render('@app/modules_share/foot/views/foot-assessment-complate/complate_tab6',['form' => $form,'model' => $model])?>
                </div>
                <!-- End Tab 6 -->
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    
<?php $form = ActiveForm::end(); ?>
