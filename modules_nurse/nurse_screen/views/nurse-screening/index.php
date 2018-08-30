<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use app\components\PatientHelper;

$this->title = 'Nurseing Assessment';
?>
<div class="nurse-screening-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
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
            //'data_json',
            //'requester',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'date_start_service',
            //'time_start_service',
            //'date_end_service',
            //'time_end_service',
            'chk_illness:boolean',
            'cnk_er:boolean',
            'chk_dm:boolean',
            'chk_thyroid:boolean',
            'chk_eye:boolean',
            'chk_im:boolean',
            'chk_anc:boolean',
            //'chk_dm_type:boolean',
            'chk_followup:boolean',
            'chk_checkup:boolean',
            'chk_insurace:boolean',
            'chk_contract:boolean',
            'chk_other:boolean',
            //'chk_other_text',
            //'chk_triage',
            //'chk_access',
            //'chk_contact_type',
            //'chk_loc',
            //'pain_score',
            //'pain_type',
            //'pain_scale',
            //'chk_risk:boolean',
            //'chk_risk_1:boolean',
            //'chk_risk_2:boolean',
            //'chk_risk_3:boolean',
            //'chk_risk_4:boolean',
            //'chk_risk_5:boolean',
            //'chk_risk_infe',

            ['class' => 'kartik\grid\ActionColumn',
            'template'=>'{view}',
            'buttons' => [
                'view' => function ($url, $model) {
                    return Html::a('<i class="glyphicon glyphicon-search"></i> SCREENINGs', $url, [
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
