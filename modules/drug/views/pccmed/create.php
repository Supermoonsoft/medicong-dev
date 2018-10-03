<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\drug\models\Pccmed */

$this->title = 'Create Pccmed';
$this->params['breadcrumbs'][] = ['label' => 'Pccmeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pccmed-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
