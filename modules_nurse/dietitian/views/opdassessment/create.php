<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules_nurse\dietitian\models\SDietitianOpdNutritionalAssessment */

$this->title = 'Create Sdietitian Opd Nutritional Assessment';
$this->params['breadcrumbs'][] = ['label' => 'Sdietitian Opd Nutritional Assessments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sdietitian-opd-nutritional-assessment-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
