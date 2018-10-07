<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules_stock\icath\models\MStockIcathMaspriceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mstock Icath Masprices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mstock-icath-masprice-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mstock Icath Masprice', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'section',
            'code',
            'name',
            'charge_code',
            'charge_name',
            //'opd_price',
            //'opd_dr_percent',
            //'opd_dr_amt',
            //'ipd_price',
            //'ipd_dr_percent',
            //'ipd_dr_amt',
            //'price_cost',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
