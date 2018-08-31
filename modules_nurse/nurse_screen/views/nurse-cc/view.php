<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use app\components\PatientHelper;

$this->title = "Nurse Chief complaint";
$this->params['breadcrumbs'][] = ['label' => 'Patient-Entry', 'url' => ['/screen/default/index']];
$this->params['breadcrumbs'][] = $this->title;

$hn = PatientHelper::getCurrentHn();
if (empty($hn)) {
    MessageHelper::errorNullHn();
}

$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>
<div class="nurse-cc-view">
<div class="col-md-1"></div>
<div class="col-md-10">

<h3>บันทึก DM Assessment : 
<?= Html::a('<i class="glyphicon glyphicon-plus-sign"> DM Assessment </i>',
             ['/screen/dm-assessment/update', 'id' => $model->id],
             ['class' => 'btn btn-success']) 
?>
</h3>

<div class="row ">
<div class="col-md-6">

    <?= DetailView::widget([
            'model' => $model,
            'condensed'=>true,
            'hover'=>true,
            'hAlign' => DetailView::ALIGN_LEFT,
            'vAlign' => DetailView::ALIGN_MIDDLE,
            'mode'=>DetailView::MODE_VIEW,
            'labelColOptions' =>['style'=>'width:70%'],
            'panel'=>[
                'heading'=>'อาการ '
                .' : '. Html::a('<i class="glyphicon glyphicon-pencil"></i>', ['update', 'id' => $model->id]) ,
                'type'=>DetailView::TYPE_INFO,
                'headingOptions'=>[
                    'template'=>'{title}'
                ]
            ],
        'attributes' => [
            [
                'attribute'=>'chk_cc_1',
                'format'=>'raw', 
                
                'value'=>$model->chk_cc_1==true ? '<span class="label label-success">Yes</span> '.$model->chk_cc_1_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_cc_1)),
            ],
            [
                'attribute'=>'chk_cc_2',
                'format'=>'raw', 
                
                'value'=>$model->chk_cc_2== true ? '<span class="label label-success">Yes</span> '.$model->chk_cc_2_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_cc_2)),
            ],
            [
                'attribute'=>'chk_cc_3',
                'format'=>'raw', 
                
                'value'=>$model->chk_cc_3== true ? '<span class="label label-success">Yes</span> '.$model->chk_cc_3_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_cc_3)),
            ],
            [
                'attribute'=>'chk_cc_4',
                'format'=>'raw', 
                
                'value'=>$model->chk_cc_4== true ? '<span class="label label-success">Yes</span> '.$model->chk_cc_4_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_cc_4)),
            ],
            [
                'attribute'=>'chk_cc_5',
                'format'=>'raw', 
                
                'value'=>$model->chk_cc_5== true ? '<span class="label label-success">Yes</span> '.$model->chk_cc_5_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_cc_5)),
            ],
            [
                'attribute'=>'chk_cc_6',
                'format'=>'raw', 
                
                'value'=>$model->chk_cc_6== true ? '<span class="label label-success">Yes</span> '.$model->chk_cc_6_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_cc_6)),
            ],
            [
                'attribute'=>'chk_cc_7',
                'format'=>'raw', 
                
                'value'=>$model->chk_cc_7== true ? '<span class="label label-success">Yes</span> '.$model->chk_cc_7_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_cc_7)),
            ],
            [
                'attribute'=>'chk_cc_8',
                'format'=>'raw', 
                
                'value'=>$model->chk_cc_8== true ? '<span class="label label-success">Yes</span> '.$model->chk_cc_8_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_cc_8)),
            ],
            [
                'attribute'=>'chk_cc_9',
                'format'=>'raw', 
                
                'value'=>$model->chk_cc_9== true ? '<span class="label label-success">Yes</span> '.$model->chk_cc_9_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_cc_9)),
            ],
            [
                'attribute'=>'chk_cc_10',
                'format'=>'raw', 
                
                'value'=>$model->chk_cc_10== true ? '<span class="label label-success">Yes</span> '.$model->chk_cc_10_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_cc_10)),
            ],
            [
                'attribute'=>'chk_cc_11',
                'format'=>'raw', 
                
                'value'=>$model->chk_cc_11== true ? '<span class="label label-success">Yes</span> '.$model->chk_cc_11_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_cc_11)),
            ],
            [
                'attribute'=>'chk_cc_12',
                'format'=>'raw', 
                
                'value'=>$model->chk_cc_12== true ? '<span class="label label-success">Yes</span> '.$model->chk_cc_12_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_cc_12)),
            ],
            [
                'attribute'=>'chk_cc_13',
                'format'=>'raw', 
                
                'value'=>$model->chk_cc_13== true ? '<span class="label label-success">Yes</span> '.$model->chk_cc_13_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_cc_13)),
            ],
        ],
    ]) ?>
</div>

<div class="col-md-6">
    <?= DetailView::widget([
            'model' => $model,
            'condensed'=>true,
            'hover'=>true,
            'hAlign' => DetailView::ALIGN_LEFT,
            'vAlign' => DetailView::ALIGN_MIDDLE,
            'mode'=>DetailView::MODE_VIEW,
            'labelColOptions' =>['style'=>'width:70%'],
            'panel'=>[
                'heading'=>'ปรึกษา ',
                'type'=>DetailView::TYPE_INFO,
                'headingOptions'=>[
                    'template'=>'{title}'
                ]
            ],
        'attributes' => [
            [
                'attribute'=>'chk_con_1',
                'format'=>'raw', 
                
                'value'=>$model->chk_con_1==true ? '<span class="label label-success">Yes</span> '.$model->chk_con_1_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_con_1)),
            ],
            [
                'attribute'=>'chk_con_2',
                'format'=>'raw', 
                
                'value'=>$model->chk_con_2== true ? '<span class="label label-success">Yes</span> '.$model->chk_con_2_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_con_2)),
            ],
            [
                'attribute'=>'chk_con_3',
                'format'=>'raw', 
                
                'value'=>$model->chk_con_3== true ? '<span class="label label-success">Yes</span> '.$model->chk_con_3_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_con_3)),
            ],
            [
                'attribute'=>'chk_con_4',
                'format'=>'raw', 
                
                'value'=>$model->chk_con_4== true ? '<span class="label label-success">Yes</span> '.$model->chk_con_4_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_con_4)),
            ],
            [
                'attribute'=>'chk_con_5',
                'format'=>'raw', 
                
                'value'=>$model->chk_con_5== true ? '<span class="label label-success">Yes</span> '.$model->chk_con_5_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_con_5)),
            ],
            [
                'attribute'=>'chk_con_6',
                'format'=>'raw', 
                
                'value'=>$model->chk_con_6== true ? '<span class="label label-success">Yes</span> '.$model->chk_con_6_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_con_6)),
            ],
            [
                'attribute'=>'chk_con_7',
                'format'=>'raw', 
                
                'value'=>$model->chk_con_7== true ? '<span class="label label-success">Yes</span> '.$model->chk_con_7_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_con_7)),
            ],
        ],
    ]) ?>
</div></div>
    
<div class="row ">
<div class="col-md-6">
    <?= DetailView::widget([
            'model' => $model,
            'condensed'=>true,
            'hover'=>true,
            'hAlign' => DetailView::ALIGN_LEFT,
            'vAlign' => DetailView::ALIGN_MIDDLE,
            'mode'=>DetailView::MODE_VIEW,
            'labelColOptions' =>['style'=>'width:70%'],
            'panel'=>[
                'heading'=>'ติดตาม ',
                'type'=>DetailView::TYPE_INFO,
                'headingOptions'=>[
                    'template'=>'{title}'
                ]
            ],
        'attributes' => [
            [
                'attribute'=>'chk_fu_1',
                'format'=>'raw', 
                
                'value'=>$model->chk_fu_1==true ? '<span class="label label-success">Yes</span> '.$model->chk_fu_1_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_fu_1)),
            ],
            [
                'attribute'=>'chk_fu_2',
                'format'=>'raw', 
                
                'value'=>$model->chk_fu_2== true ? '<span class="label label-success">Yes</span> '.$model->chk_fu_2_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_fu_2)),
            ],
            [
                'attribute'=>'chk_fu_3',
                'format'=>'raw', 
                
                'value'=>$model->chk_fu_3== true ? '<span class="label label-success">Yes</span> '.$model->chk_fu_3_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_fu_3)),
            ],
            [
                'attribute'=>'chk_fu_4',
                'format'=>'raw', 
                
                'value'=>$model->chk_fu_4== true ? '<span class="label label-success">Yes</span> '.$model->chk_fu_4_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_fu_4)),
            ],
            [
                'attribute'=>'chk_fu_5',
                'format'=>'raw', 
                
                'value'=>$model->chk_fu_5== true ? '<span class="label label-success">Yes</span> '.$model->chk_fu_5_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_fu_5)),
            ],
            [
                'attribute'=>'chk_fu_6',
                'format'=>'raw', 
                
                'value'=>$model->chk_fu_6== true ? '<span class="label label-success">Yes</span> '.$model->chk_fu_6_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_fu_6)),
            ],
            [
                'attribute'=>'chk_fu_7',
                'format'=>'raw', 
                
                'value'=>$model->chk_fu_7== true ? '<span class="label label-success">Yes</span> '.$model->chk_fu_7_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_fu_7)),
            ],
            [
                'attribute'=>'chk_fu_8',
                'format'=>'raw', 
                
                'value'=>$model->chk_fu_8== true ? '<span class="label label-success">Yes</span> '.$model->chk_fu_8_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_fu_8)),
            ],
            [
                'attribute'=>'chk_fu_9',
                'format'=>'raw', 
                
                'value'=>$model->chk_fu_9== true ? '<span class="label label-success">Yes</span> '.$model->chk_fu_9_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_fu_9)),
            ],
            [
                'attribute'=>'chk_fu_10',
                'format'=>'raw', 
                
                'value'=>$model->chk_fu_10== true ? '<span class="label label-success">Yes</span> '.$model->chk_fu_10_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_fu_10)),
            ],
            [
                'attribute'=>'chk_fu_11',
                'format'=>'raw', 
                
                'value'=>$model->chk_fu_11== true ? '<span class="label label-success">Yes</span> '.$model->chk_fu_11_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_fu_11)),
            ],
        ],
    ]) ?>
</div>
<div class="col-md-6">

    <?= DetailView::widget([
            'model' => $model,
            'condensed'=>true,
            'hover'=>true,
            'hAlign' => DetailView::ALIGN_LEFT,
            'vAlign' => DetailView::ALIGN_MIDDLE,
            'mode'=>DetailView::MODE_VIEW,
            'labelColOptions' =>['style'=>'width:70%'],
            'panel'=>[
                'heading'=>'ตรวจสุขภาพ ',
                'type'=>DetailView::TYPE_INFO,
                'headingOptions'=>[
                    'template'=>'{title}'
                ]
            ],
        'attributes' => [
            [
                'attribute'=>'chk_chk_1',
                'format'=>'raw', 
                
                'value'=>$model->chk_chk_1==true ? '<span class="label label-success">Yes</span> '.$model->chk_chk_1_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_chk_1)),
            ],
            [
                'attribute'=>'chk_chk_2',
                'format'=>'raw', 
                
                'value'=>$model->chk_chk_2== true ? '<span class="label label-success">Yes</span> '.$model->chk_chk_2_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_chk_2)),
            ],
            [
                'attribute'=>'chk_chk_3',
                'format'=>'raw', 
                
                'value'=>$model->chk_chk_3== true ? '<span class="label label-success">Yes</span> '.$model->chk_chk_3_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_chk_3)),
            ],
            [
                'attribute'=>'chk_chk_4',
                'format'=>'raw', 
                
                'value'=>$model->chk_chk_4== true ? '<span class="label label-success">Yes</span> '.$model->chk_chk_4_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_chk_4)),
            ],
            [
                'attribute'=>'chk_chk_5',
                'format'=>'raw', 
                
                'value'=>$model->chk_chk_5== true ? '<span class="label label-success">Yes</span> '.$model->chk_chk_5_data : '<span class="label label-danger">No</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'visible' => (!empty($model->chk_chk_5)),
            ],
        ],
    ]) ?>
</div></div>
    
<div class="row ">
<div class="col-md-12">
    <?= DetailView::widget([
            'model' => $model,
            'condensed'=>true,
            'hover'=>true,
            'mode'=>DetailView::MODE_VIEW,
            'panel'=>[
                'heading'=>'NURSE NOTE ',
                'type'=>DetailView::TYPE_INFO,
                'headingOptions'=>[
                    'template'=>'{title}'
                ]
            ],
        'attributes' => [
            'nurse_text:ntext',
        ],
    ]) ?>
</div></div>

</div>
<div class="col-md-1"></div>
</div>
