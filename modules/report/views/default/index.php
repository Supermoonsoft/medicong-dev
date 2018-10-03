<?php

use yii\helpers\Url;
?>

<div class="panel panel-info">
    <div class="panel-heading">
        <div class="panel-title">
            <i class="fa fa-paper-plane"></i> รายงาน
        </div>

    </div>

    <div class="panel-body">
        <ul>
            <li>
            <a href="<?= Url::to(['/report/default/next-dispen']) ?>"><i class="fa fa-list"></i>ประมาณการการใช้ยาออกตรวจครั้งถัดไป</a>
            </li>
        </ul>
    </div>


</div>
