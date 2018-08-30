<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules_nurse\nurse_screen\models\NurseCc */

$this->title = 'Nurse Chief complaint';

?>
<div class="nurse-cc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
