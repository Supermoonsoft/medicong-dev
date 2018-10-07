<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules_stock\icath\models\MStockIcathVendorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mstock Icath Vendors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mstock-icath-vendor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mstock Icath Vendor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
            'requester',
            //'data_json',
            //'data1',
            //'data2',
            //'vendor_name',
            //'address',
            //'telephone',
            //'id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
