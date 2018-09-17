<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules_nurse\dietitian\models\SDietitianOpdNutritionalAssessmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sdietitian Opd Nutritional Assessments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sdietitian-opd-nutritional-assessment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sdietitian Opd Nutritional Assessment', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'visit_type',
            //'co_morbidities',
            //'Type_of_hd',
            //'nutrition_history',
            //'clinical_data',
            //'lab_result_today',
            //'dietary_intake',
            //'assessment_and_plan',
            //'idnt_diag1',
            //'idnt_diag2',
            //'idnt_diag3',
            //'idnt_diag4',
            //'idnt_diag5',
            //'next_followup',
            //'next_followup_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
