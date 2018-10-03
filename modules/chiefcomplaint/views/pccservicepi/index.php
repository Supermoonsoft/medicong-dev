<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\chiefcomplaint\models\PccservicepiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pccservicepis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pccservicepi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pccservicepi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pcc_vn',
            'data_json',
            'pcc_start_service_datetime',
            'pcc_end_service_datetime',
            //'data1',
            //'data2',
            //'hospcode',
            //'pi_text:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
