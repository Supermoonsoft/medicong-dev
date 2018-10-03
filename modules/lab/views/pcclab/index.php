<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\lab\models\PcclabSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pcclabs';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcclab-index">

    <?php Pjax::begin(); ?>
    <?=Html::beginForm(['/lab/pcclab/preorder'],'post');?>

    <div style="margin-bottom: 3px">
        <?php $alert = 'swal("ส่งทีละหลายรายการ...")' ;?>
            
            <?php // Html::a('<button id="btn-add" onClick='.new JsExpression($alert).' class="btn btn-info" ><i class="fa fa-check"></i> ส่งรายการเฉพาะที่เลือก ไปยัง PreOrder Lab</button>', ['/doctorworkbench/order/pre-order-lab']) ?>
            
            <?=  Html::submitButton('<i class="fa fa-check"></i> ส่งรายการเฉพาะที่เลือก ไปยัง PreOrder Lab',
                                    [//'onClick'=>new JsExpression($alert),
                                    'data-confirm' => 'ส่งทีละหลายรายการ ไปยัง PreOrder Lab',
                                    'class'=>'btn btn-info']); ?>
        </div>

      <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        //'showPageSummary'=>true,
        'pjax'=>true,
        'pjaxSettings'=>[
            'neverTimeout'=>true,
        ],
        'options' => [
            'id' => 'gridview-id'
        ],
        'striped'=>true,
        'hover'=>true, 
        //'panel' => [ 'befor' => 'Lab History'],
        'panel'=>['heading'=>'Lab History'],
        'toolbar' =>  ['{toggleData}',],
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'], 
        'rowOptions' => function ($model, $key, $index, $grid) { //สามารถกำหนด data-key ใหม่ (ปกติจะใช้ PK)
            return ['data' => ['key' => $model->id]];
        }, 
        'columns' => [
            
            [
                'attribute'=>'date_visit', 
                'value'=>function ($model, $key, $index, $widget) { 
                    return $model->date_visit.' (รพ.แม่ข่าย)';
                },
                'filter'=>false,
                'group'=>true,  // enable grouping,
                'groupedRow'=>true,                    // move grouped column to a single grouped row
                'groupOddCssClass'=>'kv-grouped-row',  // configure odd group cell css class
                'groupEvenCssClass'=>'kv-grouped-row', // configure even group cell css class
            ],
            /*[
                'class' => 'yii\grid\CheckboxColumn',
                'header' => false,
                
            ],*/
            [
                'class' => 'yii\grid\CheckboxColumn',
                'header' => false,
            ],
            [
                'attribute'=>'lab_name',
                'options' => ['id' => 'lab_name'],
                'value'=>function ($model, $key, $index, $widget) { 
                    return $model->lab_name;
                },
            ],
            [
                'attribute'=>'lab_result_date',
                'options' => ['id' => 'lab_result_date'],
                'value'=>function ($model, $key, $index, $widget) { 
                    return $model->lab_result_date;
                },
            ],
            [
                'attribute'=>'lab_result',
                'options' => [ 'id' => 'lab_result'],
                'value'=>function ($model, $key, $index, $widget) { 
                    return $model->lab_result;
                },
            ],
            [
                'attribute'=>'standard_result',
                'options' => [ 'id' => 'standard_result'],
                'value'=>function ($model, $key, $index, $widget) { 
                    return $model->standard_result;
                },
            ],
            [
                'width'=>'310px',
                'label'=>'หมายเหตุ'
            ],

        ],
    ]); ?>
     <?= Html::endForm();?> 
    <?php Pjax::end(); ?>
</div>
