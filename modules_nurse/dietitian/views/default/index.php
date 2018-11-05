<?php

use kartik\tabs\TabsX;
use yii\helpers\Html;
use yii\grid\GridView;
Use app\components\MessageHelper;
use app\components\PatientHelper;
use app\modules_nurse\dietitian\models\SDietitianOpdNutritionVisitRecord;
use app\modules_nurse\dietitian\models\SDietitianIpdNutririonVisitRecord;
use app\modules_nurse\dietitian\models\SDietitianOpdNutritionalAssessment;
use app\components\loading\ShowLoading;

echo ShowLoading::widget();


$hn = PatientHelper::getCurrentHn();
//if (empty($hn)) {
//    MessageHelper::errorNullHn();
//}
$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);


$modelopd = new SDietitianOpdNutritionVisitRecord();
$modelipd = new SDietitianIpdNutririonVisitRecord();
$modelopdAss = new SDietitianOpdNutritionalAssessment();

    

$items = [
    [
        'label' => '<i class="glyphicon glyphicon-heart"></i>  Vital Signs & Contour',
        'content' => $this->render('test', []),
        'active' => FALSE
    ],
    [
        'label' => '<i class="glyphicon glyphicon-cloud-upload"></i> OPD Visit',
        'content' => $this->render('../opdrecord/create', ['model' => $modelopd]),
        'active' => FALSE
    ], [
        'label' => '<i class="glyphicon glyphicon-cloud-download"></i> IPT Visit',
        'content' => $this->render('../ipdrecord/create', ['model' => $modelipd]),
        'active' => false
    ], [
        'label' => '<i class="glyphicon glyphicon-hd-video"></i> HD Visit',
        'content' =>  $this->render('../opdassessment/create', ['model' => $modelopdAss]),
        'active' => TRUE
    ],
];
?>
<div class="" style="margin-left: 20px;margin-right: 20px">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">
                <i class="glyphicon glyphicon-leaf" style="margin-right: 10px"></i> 

                Dietitian
            </div>
        </div>
        <div class="panel-body">

            <?php
            echo TabsX::widget([
                'items' => $items,
                'position' => TabsX::POS_ABOVE,
                'encodeLabels' => false
            ]);
            ?>
        </div>
    </div>

</div>

