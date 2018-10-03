<?php

use app\components\loading\ShowLoading;
use yii\widgets\ActiveForm;
use yii\data\ArrayDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use app\assets\DataTableAsset;
use app\modules\stock\models\PccServiceMedication;

DataTableAsset::register($this);
?>
<div class="site-index">

    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title"><i class="glyphicon glyphicon-list" aria-hidden="true"></i> ประมาณการการใช้ยาออกตรวจครั้งถัดไป</div>
        </div>
        <div class="panel-body">            

            <?php
            $sql = " SELECT tmt24_code,drug_name,sum(qty) as total,unit
                from pcc_service_medication
                GROUP BY tmt24_code,drug_name,unit
                ORDER BY drug_name ";
            $raw = \Yii::$app->db->createCommand($sql)->queryAll();
            $dataProvider = new ArrayDataProvider([
                'allModels' => $raw,
                'pagination' => FALSE
            ]);

            echo GridView::widget([
                'id' => 'grid-view-data-table',
                'dataProvider' => $dataProvider,
                'layout' => '{items}',
                'columns' => [
                    [
                        'class' => 'yii\grid\SerialColumn',
                    ],
                    'drug_name:text:รายการยา',
                    'total:integer:รวมจำนวนจ่าย'
                ],
            ]);
            ?>

        </div>
    </div>


</div>
<?php
$js = <<< JS
    $('#grid-view-data-table .table').DataTable();     
JS;
$this->registerJs($js);


