<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
$this->registerJS($this->render('../../dist/js/medication.js'));
$this->registerJS($this->render('../../dist/js/script.js'));
$this->registerCss($this->render('../../dist/css/style.css'));

//$this->title = 'Midecation';
//$this->params['breadcrumbs'][] = ['label' => 'Order', 'url' => ['/doctorworkbench/pcc-diagnosis']];
//$this->params['breadcrumbs'][] = $this->title;

?>

<?php
// กำหนด laypout ของ Gridvire เอง
$layout = <<< HTML
<div class="panel panel-info">
      <div class="panel-heading">
            <h3 class="panel-title">Mediaction List</h3>
      </div>
      <div class="panel-body">
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    {pager}
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="pull-right">
        {toggleData}
        {export}
        </div>
     </div>
    </div>
<div class="clearfix"></div>
{items}
</div>
</div>
HTML;
?>

<?=
$this->render('../default/panel_top', [
    'emr' => '',
    'lab' => '',
    'drug' => '',
    'diagnosis' => '',
    'medication' => 'active',
    'procedure' => '',
    'pre_order_lab' => '',
    'apointment' => '',
    'treatmment_plan' => '',
    'cc' => '',
    'pi' => '',
     'pe' => ''

]);
?>
<fieldset>
	<legend class="scheduler-border"><i class="fas fa-pills"></i> Medication Form</legend> 

<?php echo $this->render('./create', ['model' => $model]); ?>

<div style="margin-top:15px;margin-bottom:10px;">
<?= Html::button('<i class="fa fa-trash"></i> ลบรายการ', ['class' => 'btn btn-danger pull-eft', 'id' => 'btn-delete','style' => 'margin-right: 5px;']) ?>
<?= Html::button('<i class="fa fa-edit"></i> แก้ไขที่เลือก', ['class' => 'btn btn-warning pull-eft', 'id' => 'btn-update-select']) ?>
<?=Html::a('<i class="fa fa-print"></i> พิมพ์ฉลากยา','../report/',['class' => 'btn btn-info pull-right','target' => '_blank'])?>
</div>
</fieldset>


        <?=
        GridView::widget([
            'id' => 'crud-medication',
            'dataProvider' => $dataProvider,
            'pjax' => true,
            'columns' => require(__DIR__ . '/_columns.php'),
            'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
            'showPageSummary' => true,
            'striped' => true,
            'condensed' => true,
            'responsive' => true,
            'summary' => false,
            //'layout' => $layout,
            'rowOptions'=>function($model){
                if($model->date_service == Date('Y-m-d')){
                    return ['class' => 'info'];
                }
            },
            'replaceTags' => [
                '{custom}' => function($widget) {
                    if ($widget->panel === true) {
                        return '';
                    } else {
                        return '';
                    }
                }
            ],
            'pager' => [
                'options'=>['class'=>'pagination'], 
                'prevPageLabel' => 'Previous', 
                'nextPageLabel' => 'Next',
                'firstPageLabel'=>'First',
                'lastPageLabel'=>'Last',
                'nextPageCssClass'=>'next',
                'prevPageCssClass'=>'prev',
                'firstPageCssClass'=>'first',
                'lastPageCssClass'=>'last',
                'maxButtonCount'=>10,
        ],        
        ])
        ?>
<?= $this->render('../default/panel_foot'); ?>
<?php
$js = <<< JS

// ====> การลบข้อมูลที่เลือก
 $("#btn-delete").click(function(){
    var keys = $("#crud-medication").yiiGridView("getSelectedRows");
    var url = 'index.php?r=doctorworkbench/pcc-medication/bulk-delete'
    if(keys.length>0){
        $.ajax({
            url:url,
            method:'post',
            data:{pks:keys.join()},
            success: function(){
             $.pjax.reload({container: "#crud-medication-pjax"});
            }
        }); 
    }
  });   
JS;
$this->registerJS($js);
?>
