<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;
use app\modules_stock\icath\models\MStockIcathMasprice;


$this->title = 'Sstock Icath Lend Recieve Datas';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sstock-icath-lend-recieve-data-index">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>
    <!--
        <p>
    <?= Html::a('Create Sstock Icath Lend Recieve Data', ['create'], ['class' => 'btn btn-success']) ?>
        </p>-->
    <?php Pjax::begin(['id' => 'pjax-grid-view']); ?>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        // 'id'=>'crud-datatable',        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            //'receive_id',
            [
                'attribute' => 'code',
                'header' => 'รายการอุปกรณ์',
                'value' => function($model) {
                    $models = MStockIcathMasprice::find()->where(['code' => $model->code])->one();
                    if ($model->code != '') {
                        return $models->name;
                    } else {
                        return'';
                    }
                }
            ],
            [
                'attribute' => 'qty',
                'header' => 'จำนวน',
            ],
            [
                'attribute' => 'unitcost',
                'header' => 'ราคาทุน/หน่วย',
            ],
            [
                'attribute' => 'unitprice',
                'header' => 'ราคาขาย/หน่วย',
            ],
            [
                'attribute' => 'lot',
                'header' => 'LOT',
            ],
            [
                'attribute' => 'mfd_date',
                'header' => 'วันผลิต',
            ],
            [
                'attribute' => 'exp_date',
                'header' => 'วันหมดอายุ',
            ],
            [
                'attribute' => 'detail',
                'header' => 'หมายเหตุ',
            ],
            
            //'vn',
            //'hn',
            //'data_json',
            //'requester',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'date_start_service',
            //'time_start_service',
            //'date_end_service',
            //'time_end_service',
            //'vendor_dispen_lot',
            //['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{delete} ',
                'options' => ['style' => 'width:15%;'],
                'buttons' => [
                    'delete' => function($url, $model, $key) {
                        return Html::a(Yii::t('yii', ''), '#', [
                                    'class' => ' glyphicon glyphicon-trash',
                                    'title' => Yii::t('yii', 'Delete'),
                                    'aria-header' => Yii::t('yii', 'Delete'),
                                    'onclick' => "
                      if (confirm('ลบข้อมูล?')) {
                        $.ajax('index.php?r=icath/s-stock-icath-lend-recieve-data/delete&id=$model->id', {
                          type: 'POST',
                        }).done(function(data) {
                          $.pjax({container: '#pjax-grid-view'});
                          showtext();
                        });
                      }
                      return false;
                      ",
                        ]);
                    },
                ]
            ],
        ],
    ]);
    ?>
    <?php Pjax::end(); ?>
</div>
