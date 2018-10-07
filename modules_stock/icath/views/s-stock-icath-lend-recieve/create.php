<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\SStockIcathLendRecieve */

$this->title = 'Create Sstock Icath Lend Recieve';
$this->params['breadcrumbs'][] = ['label' => 'Sstock Icath Lend Recieves', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sstock-icath-lend-recieve-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
