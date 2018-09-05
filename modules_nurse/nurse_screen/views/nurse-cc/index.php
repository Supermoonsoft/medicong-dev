<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use app\components\PatientHelper;
use app\components\MessageHelper;


$this->title = 'Nurse Chief complaint';
?>
<div class="nurse-cc-index">

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
            [
                'attribute'=>'chk_cc_1',
                'label'=>'อาการ',
                'value'=>function ($model, $key, $index) { 
                    return $model->chk_cc_1;
                },
            ],
            [
                'attribute'=>'chk_con_1',
                'label'=>'ปรึกษา',
                'value'=>function ($model, $key, $index) { 
                    return $model->chk_con_1;
                },
            ],
            [
                'attribute'=>'chk_fu_1',
                'label'=>'ติดตาม',
                'value'=>function ($model, $key, $index) { 
                    return $model->chk_fu_1;
                },
            ],
            [
                'attribute'=>'chk_chk_1',
                'label'=>'ตรวจสุขภาพ',
                'value'=>function ($model, $key, $index) { 
                    return $model->chk_chk_1;
                },
            ],
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'date_start_service',
            //'time_start_service',
            //'date_end_service',
            //'time_end_service',
            //'chk_cc_1:boolean',
            //'chk_cc_1_data',
            //'chk_cc_2:boolean',
            //'chk_cc_2_data',
            //'chk_cc_3:boolean',
            //'chk_cc_3_data',
            //'chk_cc_4:boolean',
            //'chk_cc_4_data',
            //'chk_cc_5:boolean',
            //'chk_cc_5_data',
            //'chk_cc_6',
            //'chk_cc_6_data',
            //'chk_cc_7',
            //'chk_cc_7_data',
            //'chk_cc_8',
            //'chk_cc_8_data',
            //'chk_cc_9',
            //'chk_cc_9_data:boolean',
            //'chk_cc_10',
            //'chk_cc_10_data',
            //'chk_cc_11',
            //'chk_cc_11_data',
            //'chk_cc_12',
            //'chk_cc_12_data',
            //'chk_cc_13:boolean',
            //'chk_cc_13_data',
            //'chk_con_1:boolean',
            //'chk_con_1_data',
            //'chk_con_2:boolean',
            //'chk_con_2_data',
            //'chk_con_3:boolean',
            //'chk_con_3_data',
            //'chk_con_4:boolean',
            //'chk_con_4_data',
            //'chk_con_5:boolean',
            //'chk_con_5_data',
            //'chk_con_6:boolean',
            //'chk_con_6_data',
            //'chk_con_7:boolean',
            //'chk_con_7_data',
            //'chk_fu_1:boolean',
            //'chk_fu_1_data',
            //'chk_fu_2:boolean',
            //'chk_fu_2_data',
            //'chk_fu_3:boolean',
            //'chk_fu_3_data',
            //'chk_fu_4:boolean',
            //'chk_fu_4_data',
            //'chk_fu_5:boolean',
            //'chk_fu_5_data',
            //'chk_fu_6:boolean',
            //'chk_fu_6_data',
            //'chk_fu_7:boolean',
            //'chk_fu_7_data',
            //'chk_fu_8:boolean',
            //'chk_fu_8_data',
            //'chk_fu_9:boolean',
            //'chk_fu_9_data',
            //'chk_fu_10:boolean',
            //'chk_fu_10_data',
            //'chk_fu_11:boolean',
            //'chk_fu_11_data',
            //'chk_chk_1:boolean',
            //'chk_chk_1_data',
            //'chk_chk_2:boolean',
            //'chk_chk_2_data',
            //'chk_chk_3:boolean',
            //'chk_chk_3_data',
            //'chk_chk_4:boolean',
            //'chk_chk_4_data',
            //'chk_chk_5:boolean',
            //'chk_chk_5_data',
            //'nure_text:ntext',

            ['class' => 'kartik\grid\ActionColumn',
            'template'=>'{view}',
            'buttons' => [
                'view' => function ($url, $model) {
                    return Html::a('<i class="glyphicon glyphicon-search"></i> Chief Complaint', $url, [
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
