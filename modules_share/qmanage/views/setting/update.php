<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules_share\qmanage\models\CDoctorRoom */

$this->title = 'แก้ไข  ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'รายการ', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="cdoctor-room-update">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
