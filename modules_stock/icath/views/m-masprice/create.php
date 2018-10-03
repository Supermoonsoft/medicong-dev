<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\MMasprice */

$this->title = 'Create Mmasprice';
$this->params['breadcrumbs'][] = ['label' => 'Mmasprices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mmasprice-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
