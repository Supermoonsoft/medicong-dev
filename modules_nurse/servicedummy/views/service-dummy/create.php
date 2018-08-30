<?php

use yii\helpers\Html;
use app\components\PatientHelper;
$hn = PatientHelper::getCurrentHn();
$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);


/* @var $this yii\web\View */
/* @var $model app\modules_nurse\servicedummy\models\SServiceDummy */

$this->title = 'เพิ่ม';
$this->params['breadcrumbs'][] = ['label' => 'บริการ dummy', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sservice-dummy-create">

   
    <?=
    $this->render('_form', [
        'model' => $model,
        
    ])
    ?>

</div>
