<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\servicedummy\models\SServiceDummy */

$this->title = 'วันที่ : ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'บริการ dummy', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->date_start_service.' '.$model->time_start_service, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'อัพเดท';
?>
<div class="sservice-dummy-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
