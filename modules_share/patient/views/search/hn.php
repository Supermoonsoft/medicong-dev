<?php

use app\components\PatientHelper;
use yii\widgets\DetailView;

$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>
<div style="margin-top: 20px">
    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'hn',
            'prename',
            'fname',
            'mname',
            'lname',
            'agey',
            'agem',
            'aged'
        ]
    ])
    ?>
</div>




