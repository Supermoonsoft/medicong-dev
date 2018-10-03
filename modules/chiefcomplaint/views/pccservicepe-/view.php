<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\chiefcomplaint\models\Pccservicepe */
?>
<div class="pccservicepe-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'pcc_vn',
            'data_json',
            'pcc_start_service_datetime',
            'pcc_end_service_datetime',
            'data1',
            'data2',
            'hospcode',
            'pe_text:ntext',
        ],
    ]) ?>

</div>
