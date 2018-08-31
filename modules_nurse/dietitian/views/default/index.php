<?php

use kartik\tabs\TabsX;
use yii\helpers\Html;
use yii\grid\GridView;
Use app\components\MessageHelper;
use app\components\PatientHelper;

$hn = PatientHelper::getCurrentHn();
if (empty($hn)) {
    MessageHelper::errorNullHn();
}
$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);



$items = [
        [
        'label' => '<i class="glyphicon glyphicon-heart"></i>  Vital Signs & Contour',
       'content' => $this->render('_form3', [ ]),
        'active' => true
    ],
        [
        'label' => '<i class="glyphicon glyphicon-cloud-upload"></i> OPD Visit',
        'content' => $this->render('_form1', [ ]),
        'active' => false
    ], [
        'label' => '<i class="glyphicon glyphicon-cloud-download"></i> IPT Visit',
        'content' => $this->render('_form2', [ ]),
        'active' => false
    ], [
        'label' => '<i class="glyphicon glyphicon-hd-video"></i> HD Visit',
        'content' => $this->render('_form4', [ ]),
        'active' => false
    ],
];
?>
<div class="" style="margin-left: 20px;margin-right: 20px">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-leaf"></i> Dietitian</div>
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

