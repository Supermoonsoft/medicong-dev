<?php

use app\components\loading\ShowLoading;
use yii\widgets\ActiveForm;
use yii\data\ArrayDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;

echo ShowLoading::widget();
$this->params['pt_title'] = "กรุณาเลือกผู้เข้ารับบริการ";
?>
<div class="site-index">

    <div class="panel panel-success">
        <div class="panel-heading">
            <div class="panel-title"><i class="fa fa-wheelchair-alt" aria-hidden="true"></i> รายการผู้รับบริการ</div>
        </div>
        <div class="panel-body">
            <div>
                <?php ActiveForm::begin(); ?>
                ระหว่าง <input type="date" name='date1' value="<?= $date1 ?>"/>               
                ถึง  <input type="date" name='date2'  value="<?= $date2 ?>" max='<?= date('Y-m-d') ?>'/> 
                <button type="submit">ตกลง</button>
                <?php ActiveForm::end(); ?>
            </div>

            <?php
            $sql = " SELECT t.vn ,t.service_start_date ,t.service_start_time 
,t.hn ,c.title_th ,p.fname ,p.lname ,p.birth ,p.agey from s_opd_visit t 
LEFT JOIN  m_patient p ON  p.hn = t.hn
LEFT JOIN c_prename c ON c.id = p.prename
WHERE t.service_start_date BETWEEN '$date1' AND '$date2'
ORDER BY t.vn DESC ";
            $raw = \Yii::$app->db->createCommand($sql)->queryAll();
            $dataProvider = new ArrayDataProvider([
                'allModels' => $raw,
                'pagination' => FALSE
            ]);

            echo GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    [
                        'class' => 'yii\grid\SerialColumn',
                    ],
                    [
                        'attribute' => 'vn',
                        'contentOptions' => ['style' => 'max-width: 100px;'],
                        'format' => 'raw',
                        'value' => function ($model) {
                            $vn = $model['vn'];
                            return Html::a($vn, ['/site/revisit', 'vn' => $vn], ['class' => 'btn btn-info', 'data-confirm' => 'แก้ไข Visit นี้']);
                        }
                    ],
                    'service_start_date:text:เข้ารับบริการ',
                    'service_start_time:text:เวลา',
                    'hn',
                    'title_th:text:คำนำหน้า',
                    'fname:text:ชื่อ',
                    'lname:text:นามสกุล',
                    'birth:text:วดป.เกิด',
                    'agey:integer:อายุ(ปี)'
                ],
            ]);
            ?>

        </div>
    </div>


</div>
