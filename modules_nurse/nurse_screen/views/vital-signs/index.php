<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\grid\GridView;
use app\components\PatientHelper;
?>
<div class="vital-signs-index">

    <?php Pjax::begin(); ?>


    <p>
        <?= Html::a('Vital Signs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax'=>true,
        'pjaxSettings'=>[
            'neverTimeout'=>true,
            //'beforeGrid'=>'.',
            //'afterGrid'=>'My fancy content after.',
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'date_start_service',
            //'time_start_service',
            [
                'attribute'=>'date_start_service',
                'value'=>function ($model, $key, $index) { 
                    return $model->date_start_service.' '.$model->time_start_service;
                },
            ],
            //'id',
            //'vn',
            'hn',
            [
                'attribute'=>'hn',
                'label'=>'ชื่อผู้ป่วย',
                'value'=>function ($model, $key, $index) { 
                    return PatientHelper::getPatientTitleByHn($model->hn);
                },
            ],
            'bheight',
            'bweight',
            [
                'attribute'=>'sbp_1',
                'label'=>'Vital Signs',
                'value'=>function ($model, $key, $index) { 
                    return $model->sbp_1.'/'.$model->dbp_1;
                },
            ],
            //'data_json',
            //'requester',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'date_end_service',
            //'time_end_service',
            //'btemp_1',
            //'sbp_1',
            //'dbp_1',
            //'position_1',
            //'arm_1',
            //'pr_1',
            //'pr_rhythm_1',
            //'rr_1',
            //'o2sat_1',
            //'btemp_2',
            //'sbp_2',
            //'dbp_2',
            //'position_2',
            //'arm_2',
            //'pr_2',
            //'pr_rhythm_2',
            //'rr_2',
            //'o2sat_2',
            //'bheight',
            //'bweight',

            ['class' => 'kartik\grid\ActionColumn',
            'template'=>'{view}',
            'buttons' => [
                'view' => function ($url, $model) {
                    return Html::a('<i class="glyphicon glyphicon-search"></i>CHECK IN', $url, [
                                'title' => Yii::t('app', 'View'),
                                'class'=>'btn btn-primary',                                  
                    ]);
                },
            ],
                //'viewOptions'=>['label' => '<i class="glyphicon glyphicon-search"></i>']
                //Html::a(' <i class="glyphicon glyphicon-search"></i> ' . $model->hn, ['view', 'hn' => $model->hn], ['class' => 'btn btn-info']
        ],
        ]

    ]); ?>
    <?php Pjax::end(); ?>
</div>
