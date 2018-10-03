<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use yii\web\View;
use kartik\widgets\Select2;
use yii\web\JsExpression;
use yii\widgets\Pjax;
use app\components\PatientHelper;
$this->registerJs($this->render('../../dist/js/script.js'));
$this->registerCss($this->render('../../dist/css/style.css'));

//$this->title = 'Diagnosis';
//$this->params['breadcrumbs'][] = ['label' => 'Order', 'url' => ['/doctorworkbench/pcc-diagnosis']];
//$this->params['breadcrumbs'][] = $this->title;

?>
<style>
.pagination {
    display: inline-block;
    padding-left: 0;
    margin: 0px;
    border-radius: 4px;
}
</style>

<?php
    echo $this->render('../default/panel_top',[
        'emr' => '',
        'lab' => '',
        'drug' => '',
        'diagnosis' => 'active',
        'medication' => '',
        'procedure' => '',
        'pre_order_lab' =>'',
        'apointment' => '',
        'treatmment_plan' => '',
        'cc' => '',
        'pi' => '',
        'pe' => ''
    ]);?>

<?php
// กำหนด laypout ของ Gridvire เอง
$layout = <<< HTML
<div class="panel panel-info">
      <div class="panel-heading">
            <h3 class="panel-title">Diagnosis List</h3>
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
<fieldset>
	<legend class="scheduler-border"><i class="fas fa-user-md"></i> Diagnosis Form</legend> 

<?php  echo $this->render('./create',['model' => $model]);?>
</fieldset>
        <?=GridView::widget([
            'id'=>'crud-diagnosis',
            'dataProvider' => $dataProvider,
            'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '-'],
            'pjax'=>true,
            'columns' => require(__DIR__.'/_columns.php'),        
            'striped' => true,
            'condensed' => true,
            'responsive' => true,  
            'summary'=>false,
            'showFooter' => false,
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
        ])?>
<?php echo $this->render('../default/panel_foot');?>

<?php
$js = <<< JS
// ====> การลบข้อมูลที่เลือก
 $("#btn-delete").click(function(){
    var keys = $("#crud-diagnosis").yiiGridView("getSelectedRows");
    //console.log(keys);
    var url = 'index.php?r=doctorworkbench/pcc-diagnosis/bulk-delete'
    if(keys.length>0){
        $.ajax({
            url:url,
            method:'post',
            data:{pks:keys.join()},
            success: function(){
             $.pjax.reload({container: "#crud-diagnosis-pjax"});
            }
        });
    }
  });

//   $('#cc').on("change", function(e) {
//     var isNew = $(this).find('[data-select2-tag="true"]');
//     if(isNew.length && $.inArray(isNew.val(), $(this).val()) !== -1){
//       //  isNew.replaceWith('<option selected value="' + isNew.val() + '">' + isNew.val() + '</option>');
//       //  $('#console').append('<code>New tag: {"' + isNew.val() + '":"' + isNew.val() + '"}</code><br>');
// //    alert();
//    $.ajax({
//     //    url: Url::to(['c-diagtext/create-from-diag']),
//       url: 'index.php?r=doctorworkbench/c-diagtext/create-from-diag',
//        methot:'get',
//        dataType:'json',
//        data: {text:isNew.val()},
//        success: function(){
//            console.log('success');
//        }
//    });
   
//     }
// });

JS;
$this->registerJS($js);
?>

