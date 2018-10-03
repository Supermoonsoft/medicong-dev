<?php
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\editable\Editable;
use app\modules\queuemanage\models\PccDoctorRoomQueue;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    // [
    //     'header'=>Html::checkbox('selection_all', false, ['class'=>'select-on-check-all', 'value'=>1, 'onclick'=>'$(".kv-row-checkbox").prop("checked", $(this).is(":checked"));']),
    //     'contentOptions'=>['class'=>'kv-row-select'],
    //     'content'=>function($model, $key){
    //         return Html::checkbox('selection[]', false, ['class'=>'kv-row-checkbox', 'value'=>$key, 'onclick'=>'$(this).closest("tr").toggleClass("danger");', 'disabled'=> isset($model->stopDelete)&&!($model->stopDelete===1)]);
    //     },
    //     'hAlign'=>'center',
    //     'vAlign'=>'middle',
    //     'hiddenFromExport'=>true,
    //     'mergeHeader'=>true,
    // ],
    
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'header' => 'HN',
        'value' => function($model){
            return $model['hn'];
        }
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'header' => 'ลำดับ',
        'format' => 'raw',
        'value' => function($model){
            $key = $model['pcc_vn'];
            // $order = PccDoctorRoomQueue::findOne(['pcc_vn' => $model['pcc_vn']]);
            //  return "<div id='".$key."'></div><div id='result".$key."'>".$order->ordernumber."</div>";
        return "<div id='".$key."'></div>";
    
        }
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'header' => 'เวลามา',
        'value' => function($model){
            return $model['visit_date_begin'].' '.$model['visit_time_begin'];
        }
    ],
   


];   