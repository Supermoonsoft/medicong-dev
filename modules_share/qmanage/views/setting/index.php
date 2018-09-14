<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\components\loading\ShowLoading;
echo ShowLoading::widget();
use app\components\MessageHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\modules_share\qmanage\models\CDoctorRoomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'จัดการห้องตรวจแพทย์';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cdoctor-room-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มห้อง', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id:text:รหัสห้องตรวจ',
            'title:text:ชื่อห้องตรวจ',
            'doctor_id:text:แพทย์ประจำห้องตรวจ',
            'is_active:boolean:เปิดทำการ',
            //'created_by',
            //'created_at',
            //'updated_by',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
