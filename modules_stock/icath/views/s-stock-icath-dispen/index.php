<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules_stock\icath\models\SStockIcathDispenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sstock Icath Dispens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sstock-icath-dispen-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sstock Icath Dispen', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'send_stock',
            //'send_account',
            //'send_patient',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
