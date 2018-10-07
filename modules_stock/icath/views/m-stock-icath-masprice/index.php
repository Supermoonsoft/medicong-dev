<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules_stock\icath\models\MStockIcathMaspriceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รายการทั้งหมด';
$this->params['breadcrumbs'][] = $this->title;
$summas = app\modules_stock\icath\models\MStockIcathMasprice::find()->count();
?>
<div class="mstock-icath-masprice-index">

    <h2><label class="label label-success"><?= Html::encode($this->title) ?> <?= $summas . ' ' . 'รายการ'; ?></label></h2>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p class="pull-right">
        <?= Html::a('<i class="fas fa-plus"></i> เพิ่มรายการใหม่', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'section',
            'code',
            'name',
            //'charge_code',
            'charge_name',
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
            //['class' => 'yii\grid\ActionColumn'],
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}',
                'buttons' => [
                    'view' => function($url) {
                        return Html::a('<i class="glyphicon glyphicon-search"></i> ', $url, ['class' => 'btn btn-primary','title'=>'รายละเอียด']);
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
