<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\SStockIcathDispenData */

$this->title = 'Create Sstock Icath Dispen Data';
$this->params['breadcrumbs'][] = ['label' => 'Sstock Icath Dispen Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sstock-icath-dispen-data-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
