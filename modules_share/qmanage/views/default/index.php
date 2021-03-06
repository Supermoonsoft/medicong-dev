<?php

use app\components\loading\ShowLoading;
use yii\data\ArrayDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use app\assets\DataTableAsset;
use app\components\DbHelper;
use yii\web\JsExpression;
use app\modules_share\qmanage\models\CDoctorRoom;
use yii\helpers\ArrayHelper;

DataTableAsset::register($this);


echo ShowLoading::widget();


$this->params['pt_title'] = '<i class="fa fa-clock-o" aria-hidden="true"></i> จัดคิวเข้าพบแพทย์';

$today = date('Y-m-d');
$sql = " SELECT t.vn ,t.service_start_date ,t.service_start_time 
,t.hn ,c.title_th ,p.fname ,p.mname,p.lname ,p.birth ,p.agey from s_opd_visit t 
LEFT JOIN  m_patient p ON  p.hn = t.hn
LEFT JOIN c_prename c ON c.id = p.prename
WHERE t.service_start_date = '$today'
ORDER BY t.vn ASC ";
$raw = DbHelper::queryAll('db', $sql);
$dataProvider = new ArrayDataProvider([
    'allModels' => $raw,
    'pagination' => FALSE
        ]);
?>
<div class="panel panel-info">
    <div class="panel-heading">
        <div class="panel-title"><i class="fa fa-clock-o" aria-hidden="true"></i> ผู้ป่วยรอส่งเข้าพบแพทย์</div>
    </div>
    <div class="panel-body">
        <div style="margin-bottom: 3px">
            <?php $alert = 'swal("ส่งทีละหลายคน...")' ;?>
            <button class="btn btn-info" onClick=<?=new JsExpression($alert)?>><i class="fa fa-check"></i> ส่งพบแพทย์เฉพาะที่เลือก</button>
            <?= Html::a('<i class="fa fa-user-md" aria-hidden="true"></i> ตั้งค่า', ['setting/index'], ['class'=>'btn btn-danger pull-right'])?>
        </div>
        <?=
        GridView::widget([
            'id' => 'grid-view-data-table',
            'layout' => '{items}',
            'dataProvider' => $dataProvider,
            'columns' => [
                [
                    'class' => 'yii\grid\CheckboxColumn',
                // you may configure additional properties here
                ],
                [
                    'class' => 'yii\grid\SerialColumn',
                    
                // you may configure additional properties here
                ],
                 'hn',
                [
                    'label' => 'เวลามา',
                    'value' => function($model) {
                        return $model['service_start_date'] . ' เวลา ' . $model['service_start_time'];
                    }
                ],
                [
                    'label' => 'เวลานัด'
                ],
               
                [
                    'attribute' => 'fname',
                    'label' => 'ชื่อ นามสกุล',
                    'value' => function($model) {
                        return $model['title_th'] . $model['fname'] . ' ' . $model['mname'] . ' ' . $model['lname'];
                    },
                ],
                [
                    'label' => 'รายการตรวจสอบ',
                    'format' => 'raw',
                    'value' => function() {
                        return "<span style='color:green'>Lab<span>";
                    }
                ],
                [
                    'label' => 'ส่งห้องตรวจ',
                    'format' => 'raw',
                    'value' => function() {
                        
                        $items = CDoctorRoom::find()->where(['is_active'=>TRUE])->orderBy(['id'=>SORT_ASC])->all();
                        $items = ArrayHelper::map($items,'id', 'title');
                        
                        return Html::dropDownList('room', '', $items, ['prompt' => '---เลือก---']);
                    }
                ],
                [
                    'label' => '',
                    'format' => 'raw',
                    'value' => function() {
                        return Html::button('ส่งแพทย์', ['onClick' => new JsExpression('swal("ส่งทีละคน...")')]);
                    }
                ]
            ]
        ])
        ?>

    </div>


</div>
<?php
$js = <<< JS
    $('#grid-view-data-table .table').DataTable();     
JS;
$this->registerJs($js);
