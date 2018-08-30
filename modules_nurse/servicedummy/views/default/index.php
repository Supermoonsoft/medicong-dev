<?php
use app\components\PatientHelper;
$hn = PatientHelper::getCurrentHn();
$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>
<div class="servicedummy-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    
</div>
