<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
Use app\components\MessageHelper;
use app\components\PatientHelper;

$hn = PatientHelper::getCurrentHn();
$vn_session = PatientHelper::getCurrentVn();
if (empty($hn)) {
    MessageHelper::errorNullHn();
}

$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);

$this->title = 'บริการ dummy';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="sservice-dummy-index">

<?php Pjax::begin(); ?>
<?= Html::beginForm(['index'], 'post', ['data-pjax' => '', 'class' => 'form-inline', 'id' => 'vn-open']); ?>
<?= Html::hiddenInput('hn', $hn) ?>
    <?php if (empty($vn_session)): ?>
        <?=
        Html::submitButton('ส่งตรวจ', ['class' => 'btn btn-lg btn-success',
            'data' => [
                'confirm' => 'ส่งผู้ป่วยเข้าตรวจ ?',
            //'method' => 'post',
            ]
        ])
        ?>
    <?php endif; ?>
    <?= Html::endForm() ?>

 <?php if (!empty($vn_session)) { 
     //
    echo    GridView::widget([
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
                    return Html::a('<i class="glyphicon glyphicon-ok"></i>',
                        ['/screen/nurse-screening/update', 'id' => '35cd1195-6165-42d8-9425-bf0084db192c'],
                        ['class' => 'btn btn-success']
                    );
                },
            ],
            [
                'label'=>'CC',
                'format' => 'raw',
                'vAlign'=>'middle',
                'hAlign'=>'center',
                'value'=>function ($model, $key, $index) { 
                    return Html::a('<i class="glyphicon glyphicon-ok"></i>',
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
                    return Html::a('<i class="glyphicon glyphicon-ok"></i>',
                        ['/screen/dm-assessment/update', 'id' => '35cd1195-6165-42d8-9425-bf0084db192c'],
                        ['class' => 'btn btn-danger']
                    );
                }
            ],
        ]

    ]); 
    //
    } else {
            echo 'รอเลข vn';
        }
        ?>

    <?php Pjax::end(); ?>
</div>
