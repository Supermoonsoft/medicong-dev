<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\drug\models\Hosdrug */

$this->title = 'Create Hosdrug';
$this->params['breadcrumbs'][] = ['label' => 'Hosdrugs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hosdrug-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
