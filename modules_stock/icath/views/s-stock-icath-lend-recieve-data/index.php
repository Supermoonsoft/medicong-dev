<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules_stock\icath\models\SStockIcathLendRecieveDataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sstock Icath Lend Recieve Datas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sstock-icath-lend-recieve-data-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sstock Icath Lend Recieve Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'receive_id',
            'code',
            'qty',
            'unitprice',
            //'unitcost',
            //'lot',
            //'mfd_date',
            //'exp_date',
            //'detail',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
