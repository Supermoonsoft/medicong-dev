<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules_nurse\nurse_screen\models\DmAssessment */

$this->title = 'Create Dm Assessment';
$this->params['breadcrumbs'][] = ['label' => 'Dm Assessments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dm-assessment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
