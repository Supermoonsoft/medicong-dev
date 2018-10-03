<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use yii\web\View;
use kartik\widgets\Select2;
use yii\web\JsExpression;
$this->registerJs($this->render('../../dist/js/script.js'));
$this->registerCss($this->render('../../dist/css/style.css'));
//$this->title = 'Procedure';
//$this->params['breadcrumbs'][] = ['label' => 'Order', 'url' => ['/doctorworkbench/pcc-diagnosis']];
//$this->params['breadcrumbs'][] = $this->title;

?>

<?php
// กำหนด laypout ของ Gridvire เอง
$layout = <<< HTML
<div class="panel panel-info">
      <div class="panel-heading">
            <h3 class="panel-title">Procedure List</h3>
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
<?=$this->render('../default/panel_top',[
'emr' => '',
'lab' => '',
'drug' => '',
'diagnosis' => '',
'medication' => '',
'procedure' => 'active',
'pre_order_lab' =>'',
'apointment' => '',
'treatmment_plan' => '',
'cc' => '',
'pi' => '',
              'pe' => ''

]);?>
<fieldset>
	<legend class="scheduler-border"><i class="fas fa-diagnoses"></i> Procedure Form</legend> 
<?php  echo $this->render('./create',['model' => $model]);?>
<?= Html::button('<i class="fa fa-trash"></i> ลบรายการ', ['class' => 'btn btn-danger','id'=>'btn-delete','style' => 'margin-bottom:5px;']) ?>
</fieldset>

    <?=
        GridView::widget([
            'id' => 'crud-procedure',
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

<?=$this->render('../default/panel_foot');?>
<?php
$js = <<< JS
 $("#btn-delete").click(function(){
    var keys = $("#crud-procedure").yiiGridView("getSelectedRows");
    //console.log(keys);
    var url = 'index.php?r=doctorworkbench/pcc-procedure/bulk-delete'
    if(keys.length>0){
        $.ajax({
            url:url,
            method:'post',
            data:{pks:keys.join()},
            success: function(response){
            $.pjax.reload({container:response.forceReload});
            }
        });
    }
  });

JS;
$this->registerJS($js);
?>

