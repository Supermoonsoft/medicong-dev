<?php

use yii\helpers\Html;
?>
<div class="nurse-screening-create">

    <h1><?php
        if (!empty($vn_session)) {
            //echo 'VN = '.$vn_session;
        } else {
            //echo 'รอเลข vn';
        }
        ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
