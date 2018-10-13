<?php
use app\components\loading\ShowLoading;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\ArrayDataProvider;
use app\assets\DataTableAsset;

DataTableAsset::register($this);
echo ShowLoading::widget();
$this->title = 'รายการที่มีในห้องผ่าตัด';
$this->params['breadcrumbs'][] = ['label' => 'MedicoStock', 'url' => ['/medicostock']];
$this->params['breadcrumbs'][] = $this->title;
$summas = app\modules_stock\icath\models\MStockIcathMasprice::find()->where(['in','charge_code',['14','74','75']])->count();
?>
<div class="mstock-icath-masprice-index">

    <h2><label class="label label-success">
<img src="../modules_stock/medicostock/img/icath.png" alt="..." style="width: 40px; height: 40px;">
<?= Html::encode($this->title) ?> <?= $summas . ' ' . 'รายการ'; ?></label></h2>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p class="pull-right">
        <?= Html::a('<i class="fas fa-plus"></i> เพิ่มรายการใหม่', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
<?php  echo
    
    GridView::widget([
        'id'=>'grid-view-data-table',
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        //'layout' => '{items}',           
        'summary' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'section',
            'charge_name',
            'code',
            'name',
            //'charge_code',
            
            'opd_price',
            //'opd_dr_percent',
            //'opd_dr_amt',
            'ipd_price',
            //'ipd_dr_percent',
            //'ipd_dr_amt',
            'price_cost',
            //'recieve_code',
            //'recieve_thai_name',
            //'recieve_eng_name',
            //'change_date',
            //'update_time',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'requester',
            //'data_json',
            //'id',
//            ['class' => 'yii\grid\ActionColumn'],
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}',
                'buttons' => [
                    'view' => function($url) {
                        return Html::a('<i class="glyphicon glyphicon-search"></i> ', $url, ['class' => 'btn btn-primary btn-xs','title'=>'รายละเอียด']);
                    },
//                    'update' => function($url) {
//                        return Html::a('<i class="glyphicon glyphicon-edit"></i> แก้ไข', $url, ['class' => 'btn btn-warning',
//                        ]);
//                    }
                ]
            ],
        ],

    ]);
    ?>
</div>

<?php
$js = <<< JS
    
    $('#grid-view-data-table .table').dataTable({
       "bInfo" : false,
       "paging": false,      
       "pageLength": 10
   }); 
    
JS;
$this->registerJs($js);