<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules_stock\icath\models\SStockIcathAccountDataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sstock Icath Account Datas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sstock-icath-account-data-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sstock Icath Account Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'vn',
            'hn',
            'an',
            'dispen_id',
            //'code',
            //'qty',
            //'price',
            //'totalprice',
            //'detail',
            //'receive_data_lot',
            //'receive_data_id',
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
            //'vendor_id',
            //'vendor_dispen_lot',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
