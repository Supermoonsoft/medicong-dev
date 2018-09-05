<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\components\loading\ShowLoading;
echo ShowLoading::widget();

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <div><h2>Welcome <?=\Yii::$app->user->identity->username?></h2></div>
    <div><h2><?= Html::a('ออกจากระบบ',['/site/logout'],['class'=>'btn btn-danger'])?></h2></div>
</div>
