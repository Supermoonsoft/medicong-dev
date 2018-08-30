<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use app\components\PatientHelper;

?>
<div class="nurse-screen-view">

    <p>
        <?= Html::a('Update', ['#', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['#', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
<div class="row">
    <div class="col-md-12">
        <?= DetailView::widget([
            'model' => $model,
            'condensed'=>true,
            'hover'=>true,
            'mode'=>DetailView::MODE_VIEW,
            'panel'=>[
                'heading'=>'Detail '.PatientHelper::getPatientTitleByHn($model->hn),
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
<h1>Vital Signs</h1>
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

</div>
