<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\SStockIcathAccountData */

$this->title = 'Update Sstock Icath Account Data: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sstock Icath Account Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sstock-icath-account-data-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
