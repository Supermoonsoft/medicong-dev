<?php

use yii\helpers\Html;
use kartik\widgets\Select2;
use yii\web\JsExpression;
use yii\web\View;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use kartik\datecontrol\DateControl;
use app\modules_stock\icath\models\MStockIcathVendor;

$this->registerCss($this->render('../../dist/css/style.css'));
?>

<div class="sstock-icath-lend-recieve-form">
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
    

    <fieldset style="">
        <legend class="scheduler-border"><i class="glyphicon glyphicon-pencil"></i> บันทึกรับการยืมอุปกรณ์
        </legend> 
        <br>

        <?php
        $form = ActiveForm::begin([
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
            <div class="col-md-6">
                <?=
                $form->field($model, 'date_in')->widget(DateControl::classname(), [
                    'type' => DateControl::FORMAT_DATE,
                    'ajaxConversion' => false,
                    'widgetOptions' => [
                        'language' => 'th',
                        'pluginOptions' => [
                            'todayHighlight' => true,
                            'autoclose' => true
                        ]
                    ]
                ])->label('วันที่รับยืม')
                ?>
                <?=
                $form->field($model, 'vendor')->widget(kartik\widgets\Select2::className(), [
                    'data' => ArrayHelper::map(MStockIcathVendor::find()->all(), 'id', 'vendor_name'),
                    'options' => [
                        'id' => 'vendor',
                        'placeholder' => 'บริษัท..',
                    ],
                    'pluginOptions' => [
                        'allowClear' => true
                    ]
                ])
                ?>

                <?= $form->field($model, 'invoice')->textInput()->label('เลขที่ใบส่งของ') ?>
                <?=
                $form->field($model, 'date_invoice')->widget(DateControl::classname(), [
                    'type' => DateControl::FORMAT_DATE,
                    'ajaxConversion' => false,
                    'widgetOptions' => [
                        'language' => 'th',
                        'pluginOptions' => [
                            'todayHighlight' => true,
                            'autoclose' => true
                        ]
                    ]
                ])->label('วันที่ใบส่งของ')
                ?>
            </div>
            <div class="col-md-6">

                <?= $form->field($model, 'detail')->textarea(['rows' => 3]) ?>
                <br/><br/>
                <?= Html::submitButton('<i class="fas fa-plus"></i> บันทึก', ['class' => 'btn btn-success', 'id' => 'btn-save','style'=>"margin-left:230px;"]) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </fieldset>
</div>