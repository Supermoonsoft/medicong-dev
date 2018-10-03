<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\chiefcomplaint\models\PccservicepeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pccservicepes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pccservicepe-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pccservicepe', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'pe_text:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
