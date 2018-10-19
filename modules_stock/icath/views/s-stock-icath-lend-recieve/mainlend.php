<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\SStockIcathLendRecieve */

$this->title = 'Create Sstock Icath Lend Recieve';
$this->params['breadcrumbs'][] = ['label' => 'Management i-cath', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Lend Recieve', 'url' => ['indexlend']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sstock-icath-lend-recieve-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
