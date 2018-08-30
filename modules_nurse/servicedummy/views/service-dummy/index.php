<?php

use yii\helpers\Html;
use yii\grid\GridView;
Use app\components\MessageHelper;
use app\components\PatientHelper;

$hn = PatientHelper::getCurrentHn();
if (empty($hn)) {
    MessageHelper::errorNullHn();
}
$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);

/* @var $this yii\web\View */
/* @var $searchModel app\modules_nurse\servicedummy\models\SServiceDummySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'บริการ dummy';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sservice-dummy-index">


<?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <p>
<?= Html::a('เพิ่ม', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            //'vn',
            'hn',
            //'data_json',
            //'requester',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'date_end_service',
            //'time_end_service',
            'data1',
            'data2',
            'date_start_service',
            'time_start_service',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
