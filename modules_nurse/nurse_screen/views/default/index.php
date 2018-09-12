<?php

use app\components\PatientHelper;
use yii\widgets\DetailView;
use app\components\loading\ShowLoading;
use app\modules_share\newpatient\models\mPatient;
use yii\widgets\Pjax;
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
        <div class="panel-title"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> Patient Entry</div>            
    </div>
    <div class="panel-body">
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


            <?php if (!empty($vn_session)): ?>
                <a href="<?= Url::to(['/nursescreen/vital-signs/create']) ?>" class="btn btn-success">VS</a>
                <a href="<?= Url::to(['/nursescreen/nurse-cc/create']) ?>" class="btn btn-info">CC</a>
                <a href="<?= Url::to(['/nursescreen/dm-assessment/create']) ?>" class="btn btn-warning">DM</a>
                <div class="pull-right">VN: <?= $vn_session ?></div>
            <?php endif; ?>
        </div>
        <?php
        if ($model) {
            echo DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'hn',
                    'prename',
                    'fname',
                    'mname',
                    'lname',
                    'agey',
                    'agem',
                    'aged'
                ]
            ]);
        }
        ?>
    </div>
</div>







