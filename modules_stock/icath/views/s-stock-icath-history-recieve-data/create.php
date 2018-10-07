<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\SStockIcathHistoryRecieveData */

$this->title = 'Create Sstock Icath History Recieve Data';
$this->params['breadcrumbs'][] = ['label' => 'Sstock Icath History Recieve Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sstock-icath-history-recieve-data-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
