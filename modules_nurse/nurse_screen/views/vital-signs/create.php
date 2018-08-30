<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules_nurse\nurse_screen\models\NurseScreen */

//$this->title = 'Create Nurse Screen';
//$this->params['breadcrumbs'][] = ['label' => 'Nurse Screens', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vital-signs-create">

    <h1><?php
        if (!empty($vn_session)) {
            //echo 'VN = '.$vn_session;
        } else {
            //echo 'รอเลข vn';
        }
        ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
