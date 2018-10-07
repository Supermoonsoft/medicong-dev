<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\SStockIcathAccountData */

$this->title = 'Create Sstock Icath Account Data';
$this->params['breadcrumbs'][] = ['label' => 'Sstock Icath Account Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sstock-icath-account-data-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
