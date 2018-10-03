<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\lab\models\PreorderlabSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Preorderlabs';
?>
<div class="preorderlab-index">
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'pcc_vn',
            //'data_json',
            //'pcc_start_service_datetime',
            //'pcc_end_service_datetime',
            //'data1',
            //'data2',
            //'hospcode',
            //'lab_code',
            'lab_name',
            'lab_request_date',
            'lab_result_date',
            'lab_result',
            'standard_result',
            //'lab_price',
            //'lab_code_moph',
            //'last_update',

            ['class' => 'yii\grid\ActionColumn',
            'template'=>'{update} {delete}',
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
