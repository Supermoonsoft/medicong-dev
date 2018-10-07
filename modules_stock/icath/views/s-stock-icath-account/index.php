<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules_stock\icath\models\SStockIcathAccountSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sstock Icath Accounts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sstock-icath-account-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sstock Icath Account', ['create'], ['class' => 'btn btn-success']) ?>
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
            'icd101',
            //'icd9',
            //'doctor',
            //'date_visit',
            //'datetime_or_start',
            //'datetime_or_end',
            //'ward',
            //'room_or',
            //'insurance_id',
            //'date_admit',
            //'date_dch',
            //'doc_no',
            //'doc_date',
            //'ortype',
            //'send_real',
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
            //'pay',
            //'pay_date',
            //'pay_no',
            //'bank',
            //'check_no',
            //'dispen_id',
            //'vendor_dispen',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
