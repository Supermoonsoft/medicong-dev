<?php

use app\components\MessageHelper;
use app\assets\DataTableAsset;
use yii\widgets\ActiveForm;
use kartik\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;
use app\modules\queuemanage\models\CDoctorRoom;

DataTableAsset::register($this);
?>
<?= MessageHelper::Note(" คลิกแล้วเรียกลำดับ ตัวเลขลำดับส่งเข้าตรวจเปลี่ยนตามคลิก ก่อน/หลัง ") ?>       

<?php Pjax::begin(['id' => 'q_pjax']); ?>
<?php
if($param == 0){
$btn_text = 'ทั้งหมด';
$send = 1;
}else{
$btn_text = 'ยังไม่ส่งตรวจ';
$send = 0;

}
?>
<div class="panel panel-info">


    <div class="panel-heading">
        <div class="panel-title">
            <i class="fa fa-clock-o" aria-hidden="true"></i> ผู้ป่วยรอส่งเข้าพบแพทย์ 
            <!-- <object align='right'><a class="btn btn-lbrown">ทั้งหมด</a></object> -->
            <object align='right'>
            <?= Html::a($btn_text, 
                ['/queuemanage'], [
                'class' => 'btn btn-lbrown',
                'data-method' => 'POST',
                'data-params' => [
                    'param' => $send,
                ],
            ]) ?>
            </object>
       
       
        </div>
    </div>
    <div class="panel-body">
        <?php
        ActiveForm::begin([
            'id' => 'form-add-q',
            'action' => ['default/save'],
            'method' => 'post'
        ]);
        ?>


        <div style="margin-bottom: 3px">
            <?php
            $array = ArrayHelper::map(CDoctorRoom::find()->orderBy('id ASC')->all(),'id','room_title');
            echo Html::dropDownList('room', '0',$array, ['class' => 'form-control form-control-inline', 'id' => 'room','prompt'=>'เลือกห้องตรวจ'])
            ?>

            <button id='btn_add_q' type="submit" class="btn btn-pink"><i class="fa fa-check"></i> ส่งพบแพทย์</button>
             <?=Html::a('<i class="fa fa-user-md" aria-hidden="true"></i> ตั้งค่า',['/queuemanage/room'], ['class' => 'btn btn-light-green pull-right'])?>
        
        </div>

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div id="grid-view-data-table" class="grid-view">
                    <table class="table  table-bordered">
                        <thead>
                            <tr>
                                <th></th>                                
                                <th>Hn</th>
                                <th >ลำดับส่ง</th>
                                <th >เวลามา</th>                                
                                <th >วันนัด</th>                                
                                <th>ชื่อ นามสกุล</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($raw as $key => $value): ?>
                                <tr data-cid="<?= $value['cid'] ?>" class="tr-vn">
                                    <td>
                                        <input class="chk_pt" type="checkbox" name="pt[]" value="<?= $value['pcc_vn'] ?>" />
                                    </td>
                                    <td><?= $value['hn'] ?></td>
                                    <td data-num=2 >
                                    <input type="hidden" name="num[]" value="" id="input<?=$value['pcc_vn']?>"/>
                                    <input type="hidden" name="sendtime[]" value="" id="time<?=$value['pcc_vn']?>"/>
                                    <input type="hidden" name="cid[]" value="<?= $value['cid'] ?>"/>
                                    
                                    <div  id="<?=$value['pcc_vn']?>" class="send_no"></div>
                                    <div id="time<?=$value['pcc_vn']?>"></div>
                                    </td>
                                    <td><?= $value['visit_date_begin'] . ' ' . $value['visit_time_begin'] ?></td>                                    
                                    <td></td>
                                    <td><?= $value['fullname'] ?></td>

                                </tr>                                
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">
                            ผลตรวจทางห้องปฏิบัติการ
                        </div>                        
                    </div>
                    <div class="panel-body">
                        <!-- <div id="lab-view"></div> -->

                        <table class="table">
                        <thead>
                        <tr>
                        <th>ลำดับ</th>
                        <th>รายการ</th>
                        <th>ผล</th>
                        <th>มาตรฐาน</th>
                        </tr>
                        </thead>
                        <tbody id="lab-view">
    
                    </tbody>
                </table>
                        
                    </div>

                </div>


            </div>
        </div>
        <?php ActiveForm::end(); ?>      

    </div>
</div>
<?php Pjax::end(); ?>

<?php
$this->registerJs($this->render('script.js'));
?>

