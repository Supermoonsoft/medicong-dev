<?php
$this->registerCss($this->render('./../../css/style.css'));

USE app\components\MessageHelper;
use app\components\PatientHelper;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use app\components\loading\ShowLoading;
echo ShowLoading::widget();

$hn = PatientHelper::getCurrentHn();
$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>
<?php //MessageHelper::Note('ปรับให้ timeline ซ้ายขวา อยู่ระนาบเดียวกัน เหลี่อมกันเล็กน้อย ไม่ให้มีพื้นที่เหลือมาก กดส่งเข้า line ได้')?>
<div class="timeline-body" style="margin: 0 auto; margin-bottom: 5px">
    <div class="timeline">
        <div class="contrainer-tm left">
            <div class="content-tm">
                <h3><i class="fa fa-wheelchair"></i> 15พค.2018</h3>
                <div style="padding-bottom: 5px">ไข้ ไอ 3 วันก่อนมา ซื้อยาคลินิก 2 อย่าง ทานไม่หาย</div>
                <?= Html::a('VISIT', '#', ['class' => 'btn btn-default visit', 'value' => Url::to(['popup/index','type'=>1])]) ?>
                <?= Html::a('LAB', '#', ['class' => 'btn btn-default lab', 'value' => Url::to(['popup/index','type'=>2])]) ?>
                <?= Html::a('DRUG', '#', ['class' => 'btn btn-default drug', 'value' => Url::to(['popup/index','type'=>3])]) ?> 
                <?= Html::a('DOC', '#', ['class' => 'btn btn-default doc', 'value' => Url::to(['popup/index','type'=>4])]) ?> 
                <?= Html::a('PACs', '#', ['class' => 'btn btn-default pacs', 'value' => Url::to(['popup/index','type'=>5])]) ?> 
                <?= Html::a('EKG', '#', ['class' => 'btn btn-default pacs', 'value' => Url::to(['popup/index','type'=>6])]) ?> 

            </div>
        </div>
        <div class="contrainer-tm right">
            <div class="content-tm">
                <h3><i class="fa fa-wheelchair"></i> 10พค.2018</h3>
                <div style="padding-bottom: 5px">ไข้ ปวดศรีษะ 3 วันก่อนมา ซื้อยาทานเอง ไม่หาย</div>
                <?= Html::a('VISIT', '#', ['class' => 'btn btn-default visit', 'value' => Url::to(['popup/index','type'=>1])]) ?>
                <?= Html::a('LAB', '#', ['class' => 'btn btn-default lab', 'value' => Url::to(['popup/index','type'=>2])]) ?>
                <?= Html::a('DRUG', '#', ['class' => 'btn btn-default drug', 'value' => Url::to(['popup/index','type'=>3])]) ?> 
                <?= Html::a('DOC', '#', ['class' => 'btn btn-default doc', 'value' => Url::to(['popup/index','type'=>4])]) ?> 
                <?= Html::a('PACs', '#', ['class' => 'btn btn-default pacs', 'value' => Url::to(['popup/index','type'=>5])]) ?> 
		<?= Html::a('EKG', '#', ['class' => 'btn btn-default pacs', 'value' => Url::to(['popup/index','type'=>6])]) ?> 

            </div>
        </div>
        <div class="contrainer-tm left">
            <div class="content-tm">
                <h3><i class="fa fa-wheelchair"></i> 12กค.2017</h3>
                <div style="padding-bottom: 5px">ถ่ายเหลว 3 ครั้ง เป็นมา 1 วัน ทานอาหารงานเลี้ยง</div>
                <?= Html::a('VISIT', '#', ['class' => 'btn btn-default visit', 'value' => Url::to(['popup/index','type'=>1])]) ?>
                <?= Html::a('LAB', '#', ['class' => 'btn btn-default lab', 'value' => Url::to(['popup/index','type'=>2])]) ?>
                <?= Html::a('DRUG', '#', ['class' => 'btn btn-default drug', 'value' => Url::to(['popup/index','type'=>3])]) ?> 
                <?= Html::a('DOC', '#', ['class' => 'btn btn-default doc', 'value' => Url::to(['popup/index','type'=>4])]) ?> 
                <?= Html::a('PACs', '#', ['class' => 'btn btn-default pacs', 'value' => Url::to(['popup/index','type'=>5])]) ?> 
		<?= Html::a('EKG', '#', ['class' => 'btn btn-default pacs', 'value' => Url::to(['popup/index','type'=>6])]) ?>
            </div>
        </div>
        <div class="contrainer-tm right">
            <div class="content-tm">
                <h3><i class="fa fa-wheelchair"></i> 25มค.2016</h3>
                <div style="padding-bottom: 5px">อาเจียน 2 ครั้ง เป็นมา 1 วัน ทานอาหารงานเลี้ยง</div>
                <?= Html::a('VISIT', '#', ['class' => 'btn btn-default visit', 'value' => Url::to(['popup/index','type'=>1])]) ?>
                <?= Html::a('LAB', '#', ['class' => 'btn btn-default lab', 'value' => Url::to(['popup/index','type'=>2])]) ?>
                <?= Html::a('DRUG', '#', ['class' => 'btn btn-default drug', 'value' => Url::to(['popup/index','type'=>3])]) ?> 
                <?= Html::a('DOC', '#', ['class' => 'btn btn-default doc', 'value' => Url::to(['popup/index','type'=>4])]) ?> 
                <?= Html::a('PACs', '#', ['class' => 'btn btn-default pacs', 'value' => Url::to(['popup/index','type'=>5])]) ?> 
		<?= Html::a('EKG', '#', ['class' => 'btn btn-default pacs', 'value' => Url::to(['popup/index','type'=>6])]) ?>
            </div>
        </div>

    </div>
</div>

<?php
Modal::begin([
    'headerOptions' => ['id' => 'modalHeader'],
    'id' => 'emr-modal',
    'size' => 'modal-lg',
        //keeps from closing modal with esc key or by clicking out of the modal.
        // user must click cancel or X to close
        //'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE]
]);
echo "<div id='emrModalContent'></div>";
Modal::end();
?>

<?php
$this->registerJs($this->render('./../../js/emr.js'));
?>

