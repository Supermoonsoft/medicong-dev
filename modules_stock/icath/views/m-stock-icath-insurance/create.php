<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\MStockIcathInsurance */

$this->title = 'Create Mstock Icath Insurance';
$this->params['breadcrumbs'][] = ['label' => 'Mstock Icath Insurances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mstock-icath-insurance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
