<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
use yii\web\JsExpression;
use yii\web\View;
use yii\helpers\ArrayHelper;
use app\modules\doctorworkbench\models\CDiagtext;

$url = \yii\helpers\Url::to(['icd10-list']);//กำหนด URL ที่จะไปโหลดข้อมูล
$prefix = empty($person->prefix_id) ? '' : BasePrefix::findOne($model->prefix_id)->prefix_name;//กำหนดค่าเริ่มต้น

$formatJs = <<< 'JS'
var formatRepo = function (repo) {
    if (repo.loading) {
        return repo.text;
    }
    var markup =
'<div class="row">' + 
    '<div class="col-lg-5 col-md-5 col-sm-5">' + repo.diagename + '</div>' +
    '<div class="col-lg-5 col-md-5 col-sm-5">' + repo.diagtname + '</div>' +
    '<div class="col-lg-2 col-md-2 col-sm-2">' +
        '<b style="margin-left:5px"><code>' + repo.id+ '</code></b>' + 
    '</div>' +
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
<style>
.select2-container--krajee .select2-selection--multiple {
    min-height: 123px;
}
</style>


<div class="pcc-diagnosis-form">

<div class="row">
<?php  $form = ActiveForm::begin(['id' => 'form-diagnosis','action' => ['create'],'options' => ['data-pjax' => 1],]); ?>
    <?= $form->field($model, 'hn')->hiddenInput()->label(false);?>
    <?= $form->field($model, 'vn')->hiddenInput()->label(false);?>
    <?= $form->field($model, 'pcc_vn')->hiddenInput()->label(false);?>
    <?= $form->field($model, 'cid')->hiddenInput()->label(false);?>

    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
    <?= $form->field($model, 'cc')->widget(Select2::className(), [
    'data' => ArrayHelper::map(CDiagtext::find()->all(), 'id','text'),
    'options' => [
        'placeholder' => 'Diagtext', 
        'multiple' => true,
        'id' => 'cc',
        'class' => 'clear',
    ],
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 50
    ],])->label(false);?>
    </div>
</div>

    <div class="row">
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
<?= $form->field($model, 'icd_code')->widget(Select2::className(), [
                    'initValueText'=>$prefix,//กำหนดค่าเริ่มต้น
                    // 'theme' => Select2::THEME_DEFAULT,/
                    'options'=>['id' => 'icd_code','placeholder'=>'Select ICD10...'],
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
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="width: 50px;">
       
        <?php echo Html::submitButton('<i class="fa fa-plus"></i>', ['class' => 'btn btn-success','id' => 'btn-save']) ?>
</div>  
<?php ActiveForm::end(); ?>

<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
<?= Html::button('<i class="fa fa-trash"></i> ลบรายการ', ['class' => 'btn btn-danger','id'=>'btn-delete','style' => 'margin-bottom:5px;']) ?>    
</div>


    </div>
</div>
