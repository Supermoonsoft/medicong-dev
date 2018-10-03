<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\stock\models\GatewayCDrugItems */

$this->title = 'Create Gateway Cdrug Items';
$this->params['breadcrumbs'][] = ['label' => 'Gateway Cdrug Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gateway-cdrug-items-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
