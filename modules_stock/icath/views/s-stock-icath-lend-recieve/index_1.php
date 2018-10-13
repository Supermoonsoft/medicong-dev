<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules_stock\icath\models\SStockIcathLendRecieveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sstock Icath Lend Recieves';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sstock-icath-lend-recieve-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sstock Icath Lend Recieve', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'vn',
            'hn',
            'created_at',
            'created_by',
            //'updated_at',
            //'updated_by',
            //'date_start_service',
            //'time_start_service',
            //'date_end_service',
            //'time_end_service',
            //'date_in',
            //'vendor',
            //'invoice',
            //'date_invoice',
            //'detail',
            //'totalprice',
            //'requester',
            //'data_json',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
