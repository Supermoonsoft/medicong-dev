<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use app\components\PatientHelper;
use app\components\MessageHelper;
use app\modules_nurse\nurse_screen\models\NurseScreening;

$this->title = "Vital Signs";
$this->params['breadcrumbs'][] = ['label' => 'Patient-Entry', 'url' => ['/nursescreen/default/index']];
$this->params['breadcrumbs'][] = $this->title;

$hn = PatientHelper::getCurrentHn();
$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);

?>
<?php
$this->registerCss("
.box-shadow {
    -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
    box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
}
");
?>
<div class="nurse-screen-view">

<div class="col-md-2"></div>
<div class="col-md-8">
<h3>บันทึก Screening : 
    <?php 
        if(NurseScreening::find()->where(['vn'=>$model->vn])->count()>0){
            echo Html::a('<i class="glyphicon glyphicon-plus-sign"> Screening </i>',
                ['/nursescreen/nurse-screening/update','vn'=>$model->vn],
                ['class' => 'btn btn-info']
            );
        }else{
            echo Html::a('<i class="glyphicon glyphicon-plus-sign"> Screening </i>',
                ['/nursescreen/nurse-screening/create',],
                ['class' => 'btn btn-info']
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
            'mode'=>DetailView::MODE_VIEW,
            'panel'=>[
                'heading'=>'Detail '
                        .' : '. Html::a('<i class="glyphicon glyphicon-pencil"></i>', ['update', 'id' => $model->id]) ,
                'type'=>DetailView::TYPE_INFO,
                'headingOptions'=>[
                    'template'=>'{title}'
                ]
            ],
            'attributes' => [
                'bheight',
                'bweight',
            ],
        ]) ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <?= DetailView::widget([
            'model' => $model,            
            'condensed'=>true,
            'hover'=>true,
            'mode'=>DetailView::MODE_VIEW,
            'panel'=>[
                'heading'=>'PRE HD',
                'type'=>DetailView::TYPE_SUCCESS,
                'headingOptions'=>[ 
                    'template'=>'{title}'
                ]
            ],
            'attributes' => [
                'btemp_1',
                'sbp_1',
                'dbp_1',
                'position_1',
                'arm_1',
                'pr_1',
                'pr_rhythm_1',
                'rr_1',
                'o2sat_1',
            ],
        ]) ?>
    </div>
    <div class="col-md-6">
    <?= DetailView::widget([
            'model' => $model,
            'condensed'=>true,
            'hover'=>true,
            'mode'=>DetailView::MODE_VIEW,
            'panel'=>[
                'heading'=>'POST HD',
                'type'=>DetailView::TYPE_SUCCESS,
                'headingOptions'=>[
                    'template'=>'{title}'
                ]
            ],
            'attributes' => [
                'btemp_2',
                'sbp_2',
                'dbp_2',
                'position_2',
                'arm_2',
                'pr_2',
                'pr_rhythm_2',
                'rr_2',
                'o2sat_2',
            ],
        ]) ?>
    </div>
</div>

</div><div class="col-md-2"></div>

</div>
