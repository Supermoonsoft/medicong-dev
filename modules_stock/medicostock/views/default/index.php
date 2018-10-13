<?php
/* @var $this yii\web\View */
use app\components\loading\ShowLoading;
use yii\helpers\Url;

echo ShowLoading::widget();
?>

<div class="medicostock-default-index">
  <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="../modules_stock/medicostock/img/icath.png" alt="..." style="width: 350px; height: 350px;">
      <div class="caption">
             <a class="small-box-footer" href="<?= Yii::$app->urlManager->createUrl('icath/s-stock-icath-lend-recieve/index'); ?>">
                <h1 class="text-center">Management i-cath</h1>
            </a>
          
        <p>...</p>
        <p><a href="<?= Yii::$app->urlManager->createUrl('icath/m-stock-icath-masprice/indexicath'); ?>" class="btn btn-primary" role="button"><i class="glyphicon glyphicon-list-alt"></i> บัญชีรายการ</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
       
    </div>
  </div>
      <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="../modules_stock/medicostock/img/idrug.png" alt="..." style="width: 350px; height: 350px;">
      <div class="caption">
          <a class="small-box-footer" href="<?= Yii::$app->urlManager->createUrl('icath/s-stock-icath-lend-recieve/indexidrug'); ?>">
        <h1 class="text-center">Management i-drug</h1>
          </a>
        <p>...</p>
        <p><a href="<?= Yii::$app->urlManager->createUrl('icath/m-stock-icath-masprice/indexidrug'); ?>" class="btn btn-primary" role="button"><i class="glyphicon glyphicon-list-alt"></i> บัญชีรายการ</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
      <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="../modules_stock/medicostock/img/inondrug.png" alt="..." style="width: 350px; height: 350px;">
      <div class="caption">
          <a class="small-box-footer" href="<?= Yii::$app->urlManager->createUrl('icath/s-stock-icath-lend-recieve/indexinondrug'); ?>">
        <h1 class="text-center">Management i-nondrug</h1>        
          </a>
          <p>...</p>
        <p><a href="<?= Yii::$app->urlManager->createUrl('icath/m-stock-icath-masprice/indexinondrug'); ?>" class="btn btn-primary" role="button"><i class="glyphicon glyphicon-list-alt"></i> บัญชีรายการ</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
</div>
