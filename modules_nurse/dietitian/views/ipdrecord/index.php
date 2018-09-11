<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules_nurse\dietitian\models\SDietitianIpdNutririonVisitRecordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sdietitian Ipd Nutririon Visit Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sdietitian-ipd-nutririon-visit-record-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sdietitian Ipd Nutririon Visit Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'vn',
            'hn',
            'data_json',
            'requester',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'date_start_service',
            //'time_start_service',
            //'date_end_service',
            //'time_end_service',
            //'data1',
            //'data2',
            //'principal_diag',
            //'co_morbidity',
            //'visit_no',
            //'source_data',
            //'height',
            //'long',
            //'arm_span',
            //'weight',
            //'weighing',
            //'bmi',
            //'bmi_check',
            //'albumin',
            //'tlc',
            //'shape',
            //'weight_change',
            //'nature_food',
            //'food_intake',
            //'chew',
            //'digestive',
            //'eat',
            //'food_access',
            //'disease_min',
            //'disease_max',
            //'idnt_diag1',
            //'idnt_diag2',
            //'idnt_diag3',
            //'idnt_diag4',
            //'idnt_diag5',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
