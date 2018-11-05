<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
use yii\web\JsExpression;
use yii\web\View;
use app\components\PatientHelper;
use kartik\grid\GridView;

$this->registerJs($this->render('../../dist/js/script.js'));
$this->registerCss($this->render('../../dist/css/style.css'));

$url = \yii\helpers\Url::to(['/education/education/proced']);//กำหนด URL ที่จะไปโหลดข้อมูล
$prefix = empty($person->prefix_id) ? '' : BasePrefix::findOne($model->prefix_id)->prefix_name;//กำหนดค่าเริ่มต้น

$formatJs = <<< 'JS'
var formatRepo = function (repo) {
    if (repo.loading) {
        return repo.text;
    }
    var markup =
'<div class="row">' + 
    '<div class="col-lg-2 col-md-2 col-sm-2">' +
        '<b style="margin-left:5px"><code>' + repo.id+'</code></b>' + 
    '</div>' +
    '<div class="col-lg-9 col-md-9 col-sm-9">' + repo.text + '</div>' +
'</div>';
    return '<div style="overflow:hidden;">' + markup + '</div>';
};

var formatRepoSelection = function (repo) {
    return repo.full_name || repo.text;
}

JS;
 
// Register the formatting script
$this->registerJs($formatJs, View::POS_HEAD);

// script to parse the results into the format expected by Select2
$resultsJs = <<< JS
function (data, params) {
    params.page = params.page || 1;
    return {
        results: data.items,
        pagination: {
            more: (params.page * 30) < data.total_count
        }
    };
}
JS;
?>

<?php


?>


<div class="pcc-service-education-form">

    <?php $form = ActiveForm::begin(['id' => 'form-education', 'action' => ['/education/education/create'], 'options' => ['data-pjax' => 1],]); ?>

    <?= $form->field($model, 'hn')->hiddenInput(['value'=>NULL])->label(false); ?>
    <?= $form->field($model, 'provider')->hiddenInput(['value'=>NULL])->label(false); ?>
    <?= $form->field($model, 'pcc_vn')->hiddenInput(['value'=>PatientHelper::getCurrentVn()])->label(false); ?>
    <?= $form->field($model, 'cid')->hiddenInput(['value'=>PatientHelper::getCurrentCid()])->label(false); ?>
    <?= $form->field($model, 'education_name')->hiddenInput(['value'=>NULL])->label(false); ?>
    <?= $form->field($model, 'hospcode')->hiddenInput(['value'=>NULL])->label(false); ?>
    <?= $form->field($model, 'date_service')->hiddenInput(['value' => date('Y-m-d H:m:s')])->label(false); ?>

    <div class="row">
        <fieldset style="margin-left: 35px;margin-right:35px">
            <legend class="scheduler-border"><i class="fas fa-graduation-cap"></i> Education Form</legend> 
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-top: 15px" >


               <?= $form->field($model, 'education_code')->widget(Select2::className(), [
                    'initValueText'=>'',//กำหนดค่าเริ่มต้น
                    // 'theme' => Select2::THEME_DEFAULT,
                    'options'=>['id' => 'education_code','placeholder'=>'Select Education...','class' => 'fires'],
                    'pluginOptions' => [
                        'allowClear' => true,
                        'minimumInputLength' => 1,
                        'language' => [
                            'errorLoading' => new JsExpression("function () { return 'Waiting for results...'; }"),
                        ],
                        'ajax' => [
                            'url' => $url,
                            'dataType' => 'json',
                            'data' => new JsExpression('function(params) { return {q:params.term}; }')
                        ],
                        'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
                        'templateResult' => new JsExpression('formatRepo'),
                    ],
                    'pluginEvents' => [
                        "select2:select" => "function() { $('#btn-save').focus(); }",
                     ]
                ])->label(false);
                ?>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="margin-top: 15px" >

                <?php echo Html::submitButton('<i class="fa fa-plus"></i>', ['class' => 'btn btn-success', 'id' => 'btn-save']) ?>
            </div>  
        </fieldset>
    </div>



    <div class="form-group">
        <?php //echo Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
    $columns =[
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        [
        'class'=>'\kartik\grid\DataColumn',
        'width' => '200px',
        'attribute'=>'education_code',
        'value' => function($model){
            return $model->education_code;
        }
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'education_name',
        'value' => function($model){
            return $model->edname->specialpp;
        }
    ],

    

];
?>
<div style="margin-left: 20px;margin-right: 20px">
<?= Html::button('<i class="fa fa-trash"></i> ลบรายการ', ['class' => 'btn btn-danger','id'=>'btn-delete','style' => 'margin-bottom:5px;']) ?>

    <?=
        GridView::widget([
            'id' => 'crud-education',
            'dataProvider' => $dataProvider,
            'pjax' => true,
            'columns' => $columns,
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

</div>



<?php
$js = <<< JS
 $("#btn-delete").click(function(){
    if (confirm("Are you sure Delete?") == true) {
        
       var keys = $("#crud-education").yiiGridView("getSelectedRows");
        //console.log(keys);
        var url = 'index.php?r=education/education/table-delete'
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
    }else{
       console.log('no');
    }
        
    
  });

JS;
$this->registerJS($js);
?>