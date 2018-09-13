<?php
use app\components\PatientHelper;
$hn = PatientHelper::getCurrentHn();
$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>
<div class="printout-default-index">
    <h3>รายการพิมพ์เอกสารของ HN : <?= PatientHelper::getCurrentHn()?></h3>
</div>
