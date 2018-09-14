<?php

use app\components\PatientHelper;
use yii\widgets\DetailView;
use app\components\loading\ShowLoading;
use app\modules_share\newpatient\models\mPatient;
use yii\helpers\Html;
use yii\helpers\Url;

echo ShowLoading::widget();
$hn = PatientHelper::getCurrentHn();
$vn_session = PatientHelper::getCurrentVn();
$model = mPatient::findOne($hn);

$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>

<div class="panel panel-success">
    <div class="panel-heading">
        <div class="panel-title">
            <object align="middle">
                <i class="fa fa-sticky-note-o" aria-hidden="true"></i> Patient Entry
                <object align="right">
                    <div  style="margin-bottom: 3px">
                        <?php
                        $today = date('Y-m-d');
                        $sql = "SELECT  count(t.vn) from s_opd_visit t WHERE t.hn = '$hn' AND t.service_start_date = '$today'";
                        $count_visit = \Yii::$app->db->createCommand($sql)->queryScalar();
                        ?>

                        <?= Html::beginForm(['index'], 'post', ['data-pjax' => '', 'class' => 'form-inline', 'id' => 'vn-open']); ?>
                        <?= Html::hiddenInput('hn', $hn) ?>
                        <?php if (empty($vn_session)): ?>
                            <?=
                            Html::submitButton('<i class="fa fa-check" aria-hidden="true"></i> Open Visit', ['class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => $count_visit > 0 ? "มีรายการให้บริการวันนี้แล้ว $count_visit ครั้ง อาจจะเกิดความซ้ำซ้อนของข้อมูลได้ ยืนยันการส่งเข้ารับบริการใหม่ " : 'ส่งเข้ารับบริการ.. ?',
                                //'method' => 'post',
                                ]
                            ])
                            ?>
                        <?php endif; ?>
                        <?= Html::endForm() ?>

                    </div>
                    <div>
                        <?php if (!empty($vn_session)): ?>
                            <a href="<?= Url::to(['/nursescreen/vital-signs/create']) ?>" class="btn btn-success">VS</a>
                            <a href="<?= Url::to(['/nursescreen/nurse-cc/create']) ?>" class="btn btn-info">CC</a>
							<a href="<?= Url::to(['/nursescreen/nurse-screening/create']) ?>" class="btn btn-primary">NC</a>
                            <a href="<?= Url::to(['/nursescreen/dm-assessment/create']) ?>" class="btn btn-warning">DM</a>
                            <div class="pull-right">VN: <?= $vn_session ?></div>
                        <?php endif; ?>
                    </div>
                </object>
            </object>
        </div>            
    </div>
    <div class="panel-body">

        <!--start-->
        <?php if ($model): ?>
            <div class="row user-menu-container square">
                <div class="col-md-7 user-details">
                    <div class="row coralbg white">
                        <div class="col-md-4 no-pad">
                            <div class="user-image">
                                <img src="img/profile2.png" class="img-responsive thumbnail">
                            </div>
                        </div>
                        <div class="col-md-8 no-pad">
                            <div class="user-pad text-left">
                                <h3><i class="fa fa-address-book"></i> <b>ชื่อ-สกุล</b> <?= $model->prename ?> <?= $model->fname ?> <?= $model->mname ?> <?= $model->lname ?></h3>
                                <h4 class="white"><i class="fa fa-check-circle-o"></i> <b>CID</b> 1657985410254</h4>
                                <h4 class="white"><i class="fa fa-birthday-cake"></i> <b>วันเกิด</b> <?= $model->birth ?></h4>
                                <h4 class="white"><i class="fa fa-user-plus"></i> <b>สถานะสมรส</b> คู่</h4>
                                <h4 class="white"><i class="fa fa-language"></i> <b>สัญชาติ</b> ไทย</h4>
                                <h4 class="white"><i class="fa fa-wheelchair"></i> <b>โรคประจำตัว</b> ความดันโลหิตสูง</h4>

                            </div>
                        </div>

                    </div>
                    <div class="row overview">
                        <div class="col-md-4 user-pad text-center">
                            <h3>HN</h3>
                            <h4><?= $model->hn ?></h4>
                        </div>
                        <div class="col-md-3 user-pad text-center">
                            <h3>อายุ</h3>
                            <h4><?= $model->agey ?>ปี<?= $model->agem ?>ด.</h4>
                        </div>
                        <div class="col-md-3 user-pad text-center">
                            <h3>หมู่เลือด</h3>
                            <h4>O</h4>
                        </div>
                        <div class="col-md-2 user-pad text-center">
                            <h3>เพศ</h3>
                            <h4><i class="fa fa-male"></i></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 user-menu-btns">
                    <div class="btn-group-vertical square" id="responsive">
                        <a href="#" class="btn btn-block btn-default active">
                            <i class="fa fa-user fa-3x"></i>
                        </a>
                        <a href="#" class="btn btn-default">
                            <i class="fa fa-home fa-3x"></i>
                        </a>
                        <a href="#" class="btn btn-default">
                            <i class="fa fa-bed fa-3x"></i>
                        </a>
                        <a href="#" class="btn btn-default">
                            <i class="fa fa-vcard-o fa-3x"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 user-menu user-pad">
                    <div class="user-menu-content active">
                        <h3 class="text-center">
                            ข้อมูลส่วนตัว
                        </h3>
                        <div class="user-pad text-left">
                            <h4><i class="fa fa-newspaper-o coral"></i> <b>เชื้อชาติ</b> ไทย</h4>
                            <h4><i class="fa fa-briefcase coral"></i> <b>อาชีพ</b> ข้าราชการ</h4>
                            <h4><i class="fa fa-plus-square coral"></i> <b>ศาสนา</b> พุทธ</h4>
                            <h4><i class="fa fa-plus coral"></i> <b>หมู่เลือดRH</b> positive</h4>

                        </div>

                    </div>
                    <div class="user-menu-content">
                        <h3 class="text-center">
                            ข้อมูลครอบครัว
                        </h3>
                        <div class="user-pad text-left">
                            <h4><i class="fa fa-group coral"></i> <b>สถานะในครอบครัว</b> เจ้าบ้าน</h4>
                            <h4><i class="fa fa-male coral"></i> <b>CID บิดา</b> 3654584546127</h4>
                            <h4><i class="fa fa-female coral"></i> <b>CID มารดา</b> 3458765478145</h4>
                            <h4><i class="fa fa-user-plus coral"></i> <b>CID คู่สมรส</b> 3565688014720</h4>

                        </div>
                    </div>
                    <div class="user-menu-content">
                        <h3 class="text-center">
                            ข้อมูลที่อยู่
                        </h3>
                        <div class="user-pad text-left">
                            <h4><i class="fa fa-home coral"></i><b>ประเภทของที่อยู่</b> ที่อยู่ตามทะเบียนบ้าน</h4>
                            <h4><i class="fa fa-industry coral"></i> <b>ลักษณะของที่อยู่</b> บ้านเดี่ยว บ้านแฝด</h4>
                            <h4><i class="fa fa-folder-open coral"></i> <b>ที่อยู่</b> เลขที่ 1 ถ.พระราม4 คลองเตย  กทม.</h4>
                            <h4><i class="fa fa-mobile coral"></i> <b>เบอร์โทรศัพท์</b> 0814587654</h4>

                        </div>
                    </div>
                    <div class="user-menu-content">
                        <h3 class="text-center">
                            ข้อมูลสิทธิการรักษา
                        </h3>
                        <div class="user-pad text-left">
                            <h4><i class="fa fa-newspaper-o coral"></i><b>ประเภทสิทธิ์การรักษา</b> -</h4>
                            <h4><i class="fa fa-minus-circle coral"></i> <b>วันที่หมดอายุ</b> 15 สิงหาคม 2562</h4>
                            <h4><i class="fa fa-hospital-o coral"></i> <b>สถานบริการหลัก</b> โรงพยาบาลเทพธารินทร์</h4>
                            <h4><i class="fa fa-hospital-o  coral"></i> <b>สถานบริการรอง</b> -</h4>

                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!--end-->

    </div>
</div>
<?php
$this->registerCss($this->render('./style.css'));
$this->registerJs($this->render('./script.js'));







