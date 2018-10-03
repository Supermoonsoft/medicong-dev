<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;
use app\modules\doctorworkbench\models\CDrugitems;
use app\modules\doctorworkbench\models\CDrugusage;
use app\modules\doctorworkbench\models\GatewayCDrugItems;
use app\modules\doctorworkbench\models\GatewayCDrugdose;
$this->registerJS($this->render('../../dist/js/script.js'));

?>

<style>
.total-price{
    border-top: 3px solid #9b25af;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    height: 56px;
    width: 158%;
    margin-top: 9px;
    background-color: #eee;
    color: #9b25af; 
}
.total-price > p{
    font-size: 36px;
    margin-left: 6px;
}

</style>
<div class="pcc-medication-form">
    <?php $form = ActiveForm::begin(['id' => 'form-medication','action' => ['create'],'options' => ['data-pjax' => 1],]);?>
    
    <?= $form->field($model, 'hn')->hiddenInput()->label(false);?>
    <?= $form->field($model, 'vn')->hiddenInput()->label(false);?>
    <?= $form->field($model, 'pcc_vn')->hiddenInput()->label(false);?>
    <?= $form->field($model, 'cid')->hiddenInput(['id' => 'cid'])->label(false);?>

    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <?php
            echo $form->field($model, 'icode')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(GatewayCDrugItems::find()->all(), 'icode', function($model, $defaultValue) {
                            return $model->drug_name.' '.$model->unit;
                        }),
                    'options' => [
                        'id' => 'icode',
                         'placeholder' => 'รายการยา ...',
                         'class' => 'fires'
                        // 'onchange' => 'alert (this.value)'                         
                        ],
                    'pluginOptions' => [
                        'allowClear' => true
                ],
                'pluginEvents' => [
                    "select2:select" => "function() { $('#druguse').select2('open'); }",
                 ]
            ])->label('รายการยา');
            ?>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
<?= $form->field($model, 'druguse')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(CDrugusage::find()->all(), 'shortlist', function($model, $defaultValue) {
                            return $model->shortlist;
                        }),
                    'options' => [
                        'id' => 'druguse', 
                        'placeholder' => 'วิธีใช้ ...',
                    ],
                    'pluginOptions' => ['allowClear' => true],
                'pluginEvents' => [
                    "select2:select" => "function() { $('#qty').focus(); }",
                 ]
            ]);
            ?> 
        </div>

        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
<?= $form->field($model, 'qty')->textInput(['id' => 'qty']) ?>  
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            <?php echo Html::submitButton('<i class="fa fa-plus"></i>', ['class' => 'btn btn-success','style' => 'margin-top:25px;']) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
     <div class="total-price">
     <p id="totalprice"></p>
     </div>
            </div>
        </div>
    </div>
<?php ActiveForm::end(); ?>
</div>

<?php
$js = <<< JS
$(function(){
totalPrice($('#cid').val());
});
JS;
$this->registerJS($js);
?>
