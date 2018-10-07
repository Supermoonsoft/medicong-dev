<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\MStockIcathMasprice */

$this->title = 'Create Mstock Icath Masprice';
$this->params['breadcrumbs'][] = ['label' => 'Mstock Icath Masprices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mstock-icath-masprice-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
