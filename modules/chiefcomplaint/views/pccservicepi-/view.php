<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\chiefcomplaint\models\Pccservicepi */
?>
<div class="pccservicepi-view">
 
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
            'pi_text:ntext',
        ],
    ]) ?>

</div>
