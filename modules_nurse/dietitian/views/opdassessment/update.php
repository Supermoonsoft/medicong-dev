<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\dietitian\models\SDietitianOpdNutritionalAssessment */

$this->title = 'Update Sdietitian Opd Nutritional Assessment: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sdietitian Opd Nutritional Assessments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sdietitian-opd-nutritional-assessment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
