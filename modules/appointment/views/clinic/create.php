<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\appointment\models\Cclinic */

$this->title = 'Create Cclinic';
$this->params['breadcrumbs'][] = ['label' => 'Cclinics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cclinic-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
