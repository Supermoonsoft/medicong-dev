<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\stock\models\PccServiceMedicationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pcc Service Medications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcc-service-medication-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pcc Service Medication', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'hoscode',
            //'cid',
            //'pcc_vn',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
