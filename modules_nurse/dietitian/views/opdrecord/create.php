<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules_nurse\dietitian\models\SDietitianOpdNutritionVisitRecord */

$this->title = 'Create Sdietitian Opd Nutrition Visit Record';
$this->params['breadcrumbs'][] = ['label' => 'Sdietitian Opd Nutrition Visit Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sdietitian-opd-nutrition-visit-record-create">

  

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
