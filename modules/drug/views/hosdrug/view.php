<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\drug\models\Hosdrug */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Hosdrugs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hosdrug-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'cid',
            'hos_hn',
            'hos_vn',
            'hos_date_visit',
            'drug_code_hos',
            'drug_name_hos',
            'drug_pay_amount',
            'drug_pay_unit',
            'data_json',
            'drug_code_moph',
            'drug_name_moph',
        ],
    ]) ?>

</div>
