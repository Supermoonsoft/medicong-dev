<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
use yii\web\JsExpression;
use yii\web\View;
use yii\helpers\ArrayHelper;
$this->registerJs($this->render('../../dist/js/script.js'));
$this->registerCss($this->render('../../dist/css/style.css'));
/* @var $this yii\web\View */
/* @var $model app\modules\education\models\PccServiceEducation */
/* @var $form yii\widgets\ActiveForm */

$url = \yii\helpers\Url::to(['proced']); //กำหนด URL ที่จะไปโหลดข้อมูล
?>

<div class="pcc-service-education-form">

    <?php $form = ActiveForm::begin(['id' => 'form-procedure', 'action' => ['/education/education/create'], 'options' => ['data-pjax' => 1],]); ?>

    <?= $form->field($model, 'hn')->hiddenInput()->label(false); ?>
    <?= $form->field($model, 'provider')->hiddenInput()->label(false); ?>
    <?= $form->field($model, 'pcc_vn')->hiddenInput()->label(false); ?>
    <?= $form->field($model, 'cid')->hiddenInput()->label(false); ?>
    <?= $form->field($model, 'education_name')->hiddenInput()->label(false); ?>
    <?= $form->field($model, 'hospcode')->hiddenInput()->label(false); ?>
    <?= $form->field($model, 'date_service')->hiddenInput(['value' => date('Y-m-d H:m:s')])->label(false); ?>

    <div class="row">
        <fieldset style="margin-left: 20px;margin-right:20px">
            <legend class="scheduler-border"><i class="fas fa-graduation-cap"></i> Education Form</legend> 
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-top: 15px" >


                <?=
                $form->field($model, 'clinic')->widget(Select2::className(), [
                    'data' =>
                    ArrayHelper::map(\app\modules\education\models\CSpecialpp::find()->all(), 'id_specialpp', 'specialpp'),
                    'options' => [
                        'placeholder' => '<--กรุณาเลือก-->',
                        'value' => '',
                    //'onchange' => 'alert (this.value)',
                    ],
                    'pluginOptions' =>
                    [
                        'allowClear' => true
                    ],
                ])->label(FALSE);
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
