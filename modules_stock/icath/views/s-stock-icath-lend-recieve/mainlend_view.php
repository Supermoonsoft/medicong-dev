<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\modules_stock\icath\models\SStockIcathLendRecieveData;

/* @var $this yii\web\View */
/* @var $model app\modules_stock\icath\models\SStockIcathLendRecieve */

$this->title = $model->invoice;
$this->params['breadcrumbs'][] = ['label' => 'Management i-cath', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Lend Recieves', 'url' => ['indexlend']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sstock-icath-lend-recieve-view">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->

<!--    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>-->
    <div class="alert alert-info">
        <div style="font-size: 14pt;">
        วันที่รับยืม : <code><?= $model->date_in ?></code>
        บริษัท : <code><?= $model->vendor ?></code>
        เลขที่ใบส่งของ : <code><?= $model->invoice ?></code>
        ลงวันที่ใบส่งของ : <code><?= $model->date_invoice ?></code>
    </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading"><i class="glyphicon glyphicon-pencil"></i> รายการที่ยืมจากบริษัท</div>
        <div class="panel-body"> 
            <div class="row">
                <?php
                echo $this->render('@app/modules_stock/icath/views/s-stock-icath-lend-recieve-data/create', [
                    'model' => new SStockIcathLendRecieveData(),
                    'id' => $model->id
                ]);
                ?>
            </div>
            <br/>
            <div class="row"> 
                <div id="showtext"></div>
            </div>
        </div>

    </div>
