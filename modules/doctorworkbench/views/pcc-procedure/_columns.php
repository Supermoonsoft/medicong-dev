<?php
use yii\helpers\Url;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'procedure_name',
        'value' => function($model){
            return $model->proced->title_th;
        }
    ],

    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'doctor',
    ],

];   