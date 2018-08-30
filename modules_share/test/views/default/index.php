<?php
use app\components\PatientHelper;
$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
$this->params['hn'] = $hn;

?>
<div class="test-default-index">
    
        <code><?= __FILE__ ?></code>
   
</div>

<div class="test-default-index">
    
        <?= __FILE__ ?>
   
</div>
