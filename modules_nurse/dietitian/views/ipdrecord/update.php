<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\dietitian\models\SDietitianIpdNutririonVisitRecord */

$this->title = 'Update Sdietitian Ipd Nutririon Visit Record: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sdietitian Ipd Nutririon Visit Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sdietitian-ipd-nutririon-visit-record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
