<?php

use app\components\loading\ShowLoading;
use yii\data\ArrayDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use app\assets\DataTableAsset;
use app\components\DbHelper;

DataTableAsset::register($this);


echo ShowLoading::widget();

$today = date('Y-m-d');
$sql = " SELECT t.vn ,t.service_start_date ,t.service_start_time 
,t.hn ,c.title_th ,p.fname ,p.lname ,p.birth ,p.agey from s_opd_visit t 
LEFT JOIN  m_patient p ON  p.hn = t.hn
LEFT JOIN c_prename c ON c.id = p.prename
WHERE t.service_start_date = '$today'
ORDER BY t.vn ASC ";
$raw = DbHelper::queryAll('db', $sql);
$dataProvider = new ArrayDataProvider([
    'allModels'=>$raw
]);
?>
<div class="panel panel-danger">
    <div class="panel-heading">
        <div class="panel-title">ผู้ป่วยรอส่งเข้าพบแพทย์</div>
    </div>
    <div class="panel-body">
        <?= GridView::widget([
            'dataProvider'=>$dataProvider
        ])?>
    </div>


</div>
