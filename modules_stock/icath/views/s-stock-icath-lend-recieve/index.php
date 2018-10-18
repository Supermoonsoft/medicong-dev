<?php
/* @var $this yii\web\View */
use app\components\loading\ShowLoading;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Management i-cath';
$this->params['breadcrumbs'][] = ['label' => 'MedicoStock', 'url' => ['/medicostock']];
$this->params['breadcrumbs'][] = $this->title;
echo ShowLoading::widget();
?>

<div class="medicostock-default-index">
    <div class="row">
        <div class="col-sm-4 col-md-4">
            <div class="media" style="text-align: center">               
                <img src="../modules_stock/medicostock/img/icath.png" alt="..." style="width: 150px; height: 150px;">
                <label class="label label-info">Management i-cath</label>              
                <div class="caption">                    
<!--                    <p>
                        <a href="<?= Yii::$app->urlManager->createUrl('icath/m-stock-icath-masprice/indexicath'); ?>" class="btn btn-primary" role="button"><i class="glyphicon glyphicon-list-alt"></i> บัญชีรายการ</a> 
                        <a href="#" class="btn btn-default" role="button">Button</a>
                    </p>-->
                </div>       
            </div>
        </div> 
        <div class="col-sm-4 col-md-4">
            <div class="list-group">
                <l href="#" class="list-group-item active"><i class="glyphicon glyphicon-download"></i>
                     ระบบงาน - i-cath
                </l>
                <a href="#" class="list-group-item"><i class="fa fa-book" aria-hidden="true"></i> รับยืมอุปกรณ์</a>
                <a href="#" class="list-group-item"><i class="fa fa-book" aria-hidden="true"></i> บันทึกการใช้จ่าย</a>
                <a href="#" class="list-group-item"><i class="fa fa-book" aria-hidden="true"></i> รายงาน</a>
                
            </div>
        </div>
        <div class="col-sm-4 col-md-4">
            <div class="list-group">
                <l href="#" class="list-group-item active"><i class="glyphicon glyphicon-cog"></i>
                     ข้อมูลพื้นฐาน - ระบบงาน - i-cath
                </l>
                <a href="#" class="list-group-item"><i class="fa fa-book" aria-hidden="true"></i> บริษัทอุปกรณ์การแพทย์</a>
                <a href="#" class="list-group-item"><i class="fa fa-book" aria-hidden="true"></i> รายการอุปกรณ์</a>
                <a href="#" class="list-group-item"><i class="fa fa-book" aria-hidden="true"></i> บริษัทประกันชีวิตคู่สัญญา</a>
                
            </div>
        </div> 
    </div>
</div>
