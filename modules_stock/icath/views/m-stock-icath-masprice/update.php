<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\MStockIcathMasprice */

$this->title = 'Update Mstock Icath Masprice: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Mstock Icath Masprices', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mstock-icath-masprice-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
