<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules_stock\icath\models\MStockIcathInsuranceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mstock Icath Insurances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mstock-icath-insurance-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mstock Icath Insurance', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'insuranse_name',
            //'address',
            //'telephone',
            //'id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
