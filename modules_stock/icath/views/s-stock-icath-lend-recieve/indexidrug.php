<?php
/* @var $this yii\web\View */
use app\components\loading\ShowLoading;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Management i-drug';
$this->params['breadcrumbs'][] = ['label' => 'MedicoStock', 'url' => ['/medicostock']];
$this->params['breadcrumbs'][] = $this->title;
echo ShowLoading::widget();
?>

<div class="medicostock-default-index">
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="media" style="text-align: center">               
                <img src="../modules_stock/medicostock/img/idrug.png" alt="..." style="width: 150px; height: 150px;">
                <label class="label label-primary">Management i-drug</label>              
                <div class="caption">                    
<!--                    <p>
                        <a href="<?= Yii::$app->urlManager->createUrl('icath/m-stock-icath-masprice/indexicath'); ?>" class="btn btn-primary" role="button"><i class="glyphicon glyphicon-list-alt"></i> บัญชีรายการ</a> 
                        <a href="#" class="btn btn-default" role="button">Button</a>
                    </p>-->
                </div>       
            </div>
        </div> 
        <div class="col-sm-6 col-md-8">
            <div class="list-group">
                <l href="#" class="list-group-item active">
                    ระบบงาน - i-drug
                </l>
                <a href="#" class="list-group-item"><i class="fa fa-book" aria-hidden="true"></i> Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item"><i class="fa fa-book" aria-hidden="true"></i> Morbi leo risus</a>
                <a href="#" class="list-group-item"><i class="fa fa-book" aria-hidden="true"></i> Porta ac consectetur ac</a>
                <a href="#" class="list-group-item"><i class="fa fa-book" aria-hidden="true"></i> Vestibulum at eros</a>
            </div>
        </div>     
    </div>
</div>
