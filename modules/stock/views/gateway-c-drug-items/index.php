<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\stock\models\GatewayCDrugItemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gateway Cdrug Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gateway-cdrug-items-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gateway Cdrug Items', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'hospcode',
            'hospname',
            'icode',
            'drug_name',
            //'qty',
            //'unit',
            //'usage_line1',
            //'usage_line2',
            //'usage_line3',
            //'tmt24_code',
            //'costprice',
            //'unitprice',
            //'drugtype',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
