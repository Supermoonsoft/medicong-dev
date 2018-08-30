<?php
use yii\helpers\Html;
use app\components\PatientHelper;
$hn = PatientHelper::getCurrentHn();
$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3">
    FOOT ASSESSMENT SUMMARY
    <ul>
        <li><?=Html::a('OPD', ['/foot/foot-assessment-summary-opd'])?></li>
        <li><?=Html::a('IPD', ['/foot/foot-assessment-summary-ipd'])?></li>
    </ul>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3">
    FOOT ASSESSMENT RECORD COMPLATE
    <li><?=Html::a('Complate', ['/foot/foot-assessment-complate'])?></li>

    </div>
    <div class="col-lg-3 col-md-3 col-sm-3">
    FOOT ULCER VISIT FIRST VISIT
    <ul>
    <li><?=Html::a('OPD', ['/foot/foot-ulcer-first-opd'])?></li>
    <li><?=Html::a('IPD', ['/foot/foot-ulcer-first-ipd'])?></li>
    </ul>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3">
    FOOT ULCER VISIT FU VISIT
    <ul>
    <li><?=Html::a('OPD', ['/foot/foot-ulcer-fu-opd'])?></li>
    <li><?=Html::a('IPD', ['/foot/foot-ulcer-fu-opd'])?></li>
    </ul>
    </div>
</div>