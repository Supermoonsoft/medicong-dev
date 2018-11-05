<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\education\models\PccServiceEducation */

$this->title = 'Update Pcc Service Education: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pcc Service Educations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pcc-service-education-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
