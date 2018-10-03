<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\appointment\models\CclinicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cclinics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cclinic-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cclinic', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'code',
            'name',
            'is_active:boolean',
            'color',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
