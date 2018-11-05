<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\education\models\PccServiceEducation */

?>
<div class="pcc-service-education-create">


    <?=
    $this->render('_form', [
        'model' => $model,
        'dataProvider' => $dataProvider
    ])
    ?>

</div>
