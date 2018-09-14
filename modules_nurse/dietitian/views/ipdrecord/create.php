<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules_nurse\dietitian\models\SDietitianIpdNutririonVisitRecord */

$this->title = 'Create Sdietitian Ipd Nutririon Visit Record';
$this->params['breadcrumbs'][] = ['label' => 'Sdietitian Ipd Nutririon Visit Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sdietitian-ipd-nutririon-visit-record-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
