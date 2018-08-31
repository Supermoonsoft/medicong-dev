<?php
$this->registerCss($this->render('./../../css/style.css'));

use app\components\PatientHelper;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\helpers\Url;

$hn = PatientHelper::getCurrentHn();
$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>
<div class="timeline-body" style="margin: 0 auto; margin-bottom: 5px">
    <div class="timeline">
        <div class="contrainer-tm left">
            <div class="content-tm">
                <h3><i class="fa fa-wheelchair"></i> 15พค.2018</h3>
                <div style="padding-bottom: 5px">ไข้ ไอ 3 วันก่อนมา ซื้อยาคลินิก 2 อย่าง ทานไม่หาย</div>
                <?=
                Html::a('VISIT', '#', [
                    'class' => 'btn btn-default visit',
                    'value' => Url::to(['/emr/popup/index', 'params' => 'visit'])
                ])
                ?>
                <?=
                Html::a('LAB', '#', [
                    'class' => 'btn btn-default lab',
                    'value' => Url::to(['/emr/popup/index', 'params' => 'lab'])
                ])
                ?>

                <?=
                Html::a('MED', '#', [
                    'class' => 'btn btn-default med',
                    'value' => Url::to(['/emr/popup/index', 'params' => 'med'])
                ])
                ?>
                <?=
                Html::a('DOC', '#', [
                    'class' => 'btn btn-default doc',
                    'value' => Url::to(['/emr/popup/index', 'params' => 'doc'])
                ])
                ?>
                <?=
                Html::a('PACs', '#', [
                    'class' => 'btn btn-default pac',
                    'value' => Url::to(['/emr/popup/index', 'params' => 'pac'])
                ])
                ?>
            </div>
        </div>
        <div class="contrainer-tm right">
            <div class="content-tm">
                <h3><i class="fa fa-wheelchair"></i> 10พค.2018</h3>
                <div style="padding-bottom: 5px">ไข้ ปวดศรีษะ 3 วันก่อนมา ซื้อยาทานเอง ไม่หาย</div>
                <?= Html::a('VISIT', '#', ['class' => 'btn btn-default']) ?>
                <?= Html::a('LAB', '#', ['class' => 'btn btn-default']) ?>
                <?= Html::a('MED', '#', ['class' => 'btn btn-default']) ?> 
                <?= Html::a('DOC', '#', ['class' => 'btn btn-default']) ?> 
                <?= Html::a('PACs', '#', ['class' => 'btn btn-default']) ?> 
            </div>
        </div>
        <div class="contrainer-tm left">
            <div class="content-tm">
                <h3><i class="fa fa-wheelchair"></i> 12กค.2017</h3>
                <div style="padding-bottom: 5px">ถ่ายเหลว 3 ครั้ง เป็นมา 1 วัน ทานอาหารงานเลี้ยง</div>
                <?= Html::a('VISIT', '#', ['class' => 'btn btn-default']) ?>
                <?= Html::a('LAB', '#', ['class' => 'btn btn-default']) ?>
                <?= Html::a('MED', '#', ['class' => 'btn btn-default']) ?> 
                <?= Html::a('DOC', '#', ['class' => 'btn btn-default']) ?> 
                <?= Html::a('PACs', '#', ['class' => 'btn btn-default']) ?> 
            </div>
        </div>
        <div class="contrainer-tm right">
            <div class="content-tm">
                <h3><i class="fa fa-wheelchair"></i> 25มค.2016</h3>
                <div style="padding-bottom: 5px">อาเจียน 2 ครั้ง เป็นมา 1 วัน ทานอาหารงานเลี้ยง</div>
                <?= Html::a('VISIT', '#', ['class' => 'btn btn-default']) ?>
                <?= Html::a('LAB', '#', ['class' => 'btn btn-default']) ?>

                <?= Html::a('DOC', '#', ['class' => 'btn btn-default']) ?> 
                <?= Html::a('PACs', '#', ['class' => 'btn btn-default']) ?> 
            </div>
        </div>

    </div>
</div>

<?php
Modal::begin([
    'headerOptions' => ['id' => 'modalHeader'],
    'id' => 'emr-modal',
    'header' => 'รายการข้อมูล',
    'size' => 'modal-lg',
        //keeps from closing modal with esc key or by clicking out of the modal.
        // user must click cancel or X to close
        //'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE]
]);
?>
<div id='emrModalContent' style="height: 400px"></div>
<?php
Modal::end();
?>

<?php
$this->registerJs($this->render('./../../js/emr.js'));
?>

