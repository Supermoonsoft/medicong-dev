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
            <div class="panel-title"><i class="glyphicon glyphicon-list" aria-hidden="true"></i> ปริมาณการใช้ยา</div>
        </div>
        <div class="panel-body">            
            <div style="margin-bottom: 3px">
                <?php ActiveForm::begin(); ?>
                ระหว่าง <input type="date" name='date1' value="<?= $date1 ?>"/>               
                ถึง  <input type="date" name='date2'  value="<?= $date2 ?>" max='<?= date('Y-m-d') ?>'/> 
                <button  type="submit">ตกลง</button> <button type="submit" class="pull-right">Refresh</button>
                <?php ActiveForm::end(); ?>
            </div>
            <?php
            $sql = " SELECT tmt24_code,drug_name,sum(qty)as total , unit,unitprice,sum(qty)*unitprice as sumtotal
                from pcc_service_medication
		where date_service BETWEEN '$date1' and '$date2'								
                GROUP BY tmt24_code,drug_name,unit,unitprice
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
                    'total:integer:รวมจำนวนจ่าย',
                    'sumtotal:integer:ราคา'
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


