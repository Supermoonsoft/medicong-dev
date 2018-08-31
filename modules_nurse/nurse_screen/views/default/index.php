<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
Use app\components\MessageHelper;
use app\components\PatientHelper;

$hn = PatientHelper::getCurrentHn();
if (empty($hn)) {
    MessageHelper::errorNullHn();
}

$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);

$this->title = 'บริการ dummy';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="sservice-dummy-index">
<?php Pjax::begin(); ?>
    <?=
        GridView::widget([
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
            'vn',
            [
                'attribute'=>'service_start_date',
                'value'=>function ($model, $key, $index) { 
                    return $model->service_start_date.' '.$model->service_start_time;
                },
            ],
            'hn',
            [
                'attribute'=>'hn',
                'label'=>'ชื่อผู้ป่วย',
                'value'=>function ($model, $key, $index) { 
                    return PatientHelper::getPatientTitleByHn($model->hn);
                },
            ],
            [
                'label'=>'Vital Signs',
                'format' => 'raw',
                'vAlign'=>'middle',
                'hAlign'=>'center',
                'value'=>function ($model, $key, $index) { 
                    return Html::a('<i class="glyphicon glyphicon-ok"></i>',
                        ['/screen/vital-signs/update', 'id' => '35cd1195-6165-42d8-9425-bf0084db192c'],
                        ['class' => 'btn btn-info']
                    );
                },
            ],
            [
                'label'=>'Screening',
                'format' => 'raw',
                'vAlign'=>'middle',
                'hAlign'=>'center',
                'value'=>function ($model, $key, $index) { 
                    return Html::a('<i class="glyphicon glyphicon-remove"></i>',
                        ['/screen/nurse-screening/update', 'id' => '35cd1195-6165-42d8-9425-bf0084db192c'],
                        ['class' => 'btn btn-danger']
                    );
                },
            ],
            [
                'label'=>'CC',
                'format' => 'raw',
                'vAlign'=>'middle',
                'hAlign'=>'center',
                'value'=>function ($model, $key, $index) { 
                    return Html::a('<i class="glyphicon glyphicon-info-sign"></i>',
                        ['/screen/nurse-cc/update', 'id' => '35cd1195-6165-42d8-9425-bf0084db192c'],
                        ['class' => 'btn btn-warning']
                    );
                },
            ],

            [
                'label'=>'DM',
                'format' => 'raw',
                'vAlign'=>'middle',
                'hAlign'=>'center',
                'value' => function($model) {
                    return Html::a('<i class="glyphicon glyphicon-heart-empty"></i>',
                        ['/screen/dm-assessment/update', 'id' => '35cd1195-6165-42d8-9425-bf0084db192c'],
                        ['class' => 'btn btn-info']
                    );
                }
            ],
        ]

    ]); ?>
    <?php Pjax::end(); ?>
</div>
