<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\dietitian\models\SDietitianOpdNutritionVisitRecord */

$this->title = 'Update Sdietitian Opd Nutrition Visit Record: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sdietitian Opd Nutrition Visit Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sdietitian-opd-nutrition-visit-record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
