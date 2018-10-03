<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules_stock\icath\models\MMaspriceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รายการเวชภัณฑ์';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mmasprice-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
        <?= Html::a('Create Mmasprice', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'section',
            'charge_name',
            'code',
            'charge_code',
            'name',            
            'recieve_thai_name',
            'opd_price',
            //'opd_dr_percent',
            //'opd_dr_amt',
            'ipd_price',
            //'ipd_dr_percent',
            //'ipd_dr_amt',
            'price_cost',
            //'recieve_code',
            
            //'recieve_eng_name',
            //'change_date',
            //'update_time',
            //'title',
            //'map_code',
            //'is_active',
            //'id',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'requester',
            //'data_json',
            //'data1',
            //'data2',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
