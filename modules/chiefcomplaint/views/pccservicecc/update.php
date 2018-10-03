<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\chiefcomplaint\models\Pccservicecc */

$this->title = 'Update Pccservicecc: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pccserviceccs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pccservicecc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
