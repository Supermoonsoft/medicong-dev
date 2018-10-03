<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\chiefcomplaint\models\Pccservicepe */

$this->title = 'Update Pccservicepe: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pccservicepes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pccservicepe-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
