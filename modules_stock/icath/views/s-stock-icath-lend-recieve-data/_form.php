<?php

use yii\helpers\Html;
use kartik\widgets\Select2;
use yii\web\JsExpression;
use yii\web\View;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use kartik\datecontrol\DateControl;
use app\modules_stock\icath\models\MStockIcathMasprice;
?>

<div class="sstock-icath-lend-recieve-data-form">
    <style>
        .form-group {
            margin-bottom: 1px;
        }
        .help-block {
            display: block;
            margin-top: 1px;
            margin-bottom: 1px;
            color: #737373;
        }
        .input-group {
            margin-bottom: 1px;
        }
        /*.col-sm-offset-1 {
            margin-left: 1%;
        }*/
        .modal.in .modal-dialog {
            width: 80%;
        }
    </style>


    <?php
    $form = ActiveForm::begin(['id' => 'myfromtext',
                'action' => ['/icath/s-stock-icath-lend-recieve-data/create'],
                'options' => ['enctype' => 'multipart/form-data'],
                'fieldConfig' => [
                    'horizontalCssClasses' => [
                        'label' => 'col-md-3',
                        'wrapper' => 'col-md-8',
                    ]
                ],
                'layout' => 'horizontal'
    ]);
    ?>
    <div class="row">
        <div class="col-md-5">
            <?= $form->field($model, 'receive_id')->hiddenInput(['id' => 'receive_id', 'value' => $id])->label(false); ?>

            <?php
                    $url = \yii\helpers\Url::to(['code-list']);
                    $codelist = empty($model->code) ? '' : MStockIcathMasprice::findOne($model->code)->name; //กำหนดค่าเริ่มต้น
                    echo $form->field($model, 'code')->widget(select2::classname(), [
                        'initValueText' => $codelist,
                        'options' => ['id' => 'code'],
                        'pluginOptions' => [
                            'allowClear' => true,
                            'minimumInputLength' => 1,
                            'placeholder' => '--- รายการ ---',
                            'language' => [
                                'errorLoading' => new JsExpression("function () { return 'Waiting for results...'; }"),
                            ],
                            'ajax' => [
                                'url' => $url,
                                'dataType' => 'json',
                                'data' => new JsExpression('function(params) { return {q:params.term}; }')
                            ],
                            'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
                            'templateResult' => new JsExpression('function(codelist) { return codelist.text; }'),
                            'templateSelection' => new JsExpression('function(codelist) { return codelist.text; }'),
                        ],
                        'pluginEvents' => [
                            "select2:select" => "function() { $('#testtext').focus(); }",
                         ]
                    ]);
                    ?>   

            <?= $form->field($model, 'qty')->textInput(['id' => 'qty',]) ?>

            <?= $form->field($model, 'unitprice')->textInput(['id' => 'unitprice',]) ?>

            <?= $form->field($model, 'unitcost')->textInput(['id' => 'unitcost',]) ?>
        </div>
        <div class="col-md-5">
            <?= $form->field($model, 'lot')->textInput(['id' => 'lot', 'maxlength' => true]) ?>

            <?=
            $form->field($model, 'mfd_date')->widget(DateControl::classname(), [
                'type' => DateControl::FORMAT_DATE,
                'ajaxConversion' => false,
                'options' => ['id' => 'mfd_date'],
                'widgetOptions' => [                    
                    'language' => 'th',
                    'pluginOptions' => [                        
                        'todayHighlight' => true,
                        'autoclose' => true
                    ]
                ]
            ])->label('วันที่ผลิต')
            ?>

            <?=
            $form->field($model, 'exp_date')->widget(DateControl::classname(), [
                'type' => DateControl::FORMAT_DATE,
                'ajaxConversion' => false,
                'options' => ['id' => 'exp_date'],
                'widgetOptions' => [                    
                    'language' => 'th',
                    'pluginOptions' => [
                        'todayHighlight' => true,
                        'autoclose' => true
                    ]
                ]
            ])->label('วันที่หมดอายุ')
            ?>

            <?= $form->field($model, 'detail')->textInput(['id' => 'detail', 'maxlength' => true]) ?>
        </div>
        <br/><br/><br/><br/><br/>
        <div class="col-md-2">
            <div class="form-group">
                <p class="btn btn-success glyphicon glyphicon-plus" id="testtext" title="เพิ่มรายการ"></p>
                <?php // Html::submitButton('Save', ['class' => 'btn btn-success'])   ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$js = <<< JS
      
$(function(){
    showtext();
});
    $("#testtext").click(function(e){
        $.ajax({
            url:'index.php?r=icath/s-stock-icath-lend-recieve/add-text',
            type: 'post',
            datatype:'json',
            data: {receive_id:$('#receive_id').val(),code:$('#code').val(),qty:$('#qty').val(),unitprice:$('#unitprice').val()
                ,unitcost:$('#unitcost').val(),lot:$('#lot').val(),mfd_date:$('#mfd_date').val(),exp_date:$('#exp_date').val()
                ,detail:$('#detail').val()},
            success: function(data) {
                $("#code").val('')
                $("#code").trigger('change')
                $('#qty').val(''),
                $('#unitprice').val(''),
                $('#unitcost').val(''),
                $('#lot').val(''),
                $('#mfd_date').val(''),                
                $('#exp_date').val(''),
                $('#detail').val('');        
                showtext();
            }
        });
        e.preventDefault();
});

function showtext(){
    $.ajax({
        url:'index.php?r=icath/s-stock-icath-lend-recieve-data',
        type:'get',
        data:{id:$('#receive_id').val()},
        success:function(data){
            $('#showtext').html(data);
        }

    });
}
JS;
$this->registerJS($js);
?>