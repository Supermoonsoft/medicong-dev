<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\drug\models\PccmedSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pccmeds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pccmed-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pccmed', ['create'], ['class' => 'btn btn-success']) ?>
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
            'icode',
            //'qty',
            //'unitprice',
            //'druguse',
            //'costprice',
            //'totalprice',
            //'provider_code',
            //'provider_name',
            //'date_service',
            //'time_service',
            //'data_json',
            //'unit',
            //'tmt24_code',
            //'usage_line1',
            //'usage_line2',
            //'usage_line3',
            //'drug_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
