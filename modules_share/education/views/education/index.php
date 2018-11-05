<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\education\models\PccServiceEducationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pcc Service Educations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcc-service-education-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pcc Service Education', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'hn',
            'date_service',
            'education_code',
            'education_name',
            //'data_json',
            //'last_update',
            //'hospcode',
            //'cid',
            //'pcc_vn',
            //'provider',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
