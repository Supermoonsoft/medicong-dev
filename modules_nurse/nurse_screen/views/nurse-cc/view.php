<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use app\components\PatientHelper;
use app\components\MessageHelper;
use app\modules_nurse\nurse_screen\models\DmAssessment;
use app\components\loading\ShowLoading;
echo ShowLoading::widget();

$this->title = "Nurse Chief complaint";
$this->params['breadcrumbs'][] = ['label' => 'Patient-Entry', 'url' => ['/nursescreen/default/index']];
$this->params['breadcrumbs'][] = $this->title;

$hn = PatientHelper::getCurrentHn();

$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>
<div class="nurse-cc-view">
<div class="col-md-1"></div>
<div class="col-md-10">

<h3>บันทึก DM Assessment : 
    <?php 
        if(DmAssessment::find()->where(['vn'=>$model->vn])->count()>0){
            echo Html::a('<i class="glyphicon glyphicon-plus-sign"> DM Assessment </i>',
                ['/nursescreen/dm-assessment/index','vn'=>$model->vn],
                ['class' => 'btn btn-success']
            );
        }else{
            echo Html::a('<i class="glyphicon glyphicon-plus-sign"> DM Assessment </i>',
                ['/nursescreen/dm-assessment/index',],
                ['class' => 'btn btn-success']
            );
        }
    ?>
</h3>

<div class="row ">
<div class="col-md-12">

    <?= DetailView::widget([
            'model' => $model,
            'condensed'=>true,
            'hover'=>true,
            'hAlign' => DetailView::ALIGN_LEFT,
            'vAlign' => DetailView::ALIGN_MIDDLE,
            'mode'=>DetailView::MODE_VIEW,
            'labelColOptions' =>['style'=>'width:20%'],
            'panel'=>[
                'heading'=>'<i class="fa fa-sticky-note-o"></i> อาการ '
                .' : '. Html::a('<i class="glyphicon glyphicon-pencil"></i>', ['update', 'id' => $model->id]) ,
                'type'=>DetailView::TYPE_INFO,
                'headingOptions'=>[
                    'template'=>'{title}'
                ]
            ],
        'attributes' => [
            [
                'attribute'=>'chk_cc_data',
                'format'=>'raw', 
                
                'value'=>'<h3>'.$model->chk_cc_data.'</h3>',
                'visible' => (!empty($model->chk_cc_data)),
            ],
            'nurse_text:ntext',
        ],
    ]) ?>
</div></div>

</div>
<div class="col-md-1"></div>
</div>
