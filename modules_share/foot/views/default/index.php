<?php
use yii\helpers\Html;
use app\components\PatientHelper;
$hn = PatientHelper::getCurrentHn();
$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>

<?=$this->render('@app/modules_share/foot/views/default/panel_top',[
 'tabsummary_opd' => '',
 'tabsummary_ipd' => '',
 'tabcomplate' =>'',
 'tabfirst_opd' =>'',
 'tabfirst_ipd' =>'',
 'tabfu_opd'=>'' ,
 'tabfu_ipd'=>'' 
    ])?>

<h1 class="text-center" style="margin-top:100px;">FOOT ASSESSMENT</h1>
<?php echo Html::img('../modules_share/foot/dist/img/foot_right_left.png',[
    'style' =>'
    width:500px;
    margin-left:
    30%;
    margin-bottom:100px;
    '
    ]);?>

<?=$this->render('@app/modules_share/foot/views/default/panel_foot')?>

