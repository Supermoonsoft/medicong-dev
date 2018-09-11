<?php

use app\components\loading\ShowLoading;

echo ShowLoading::widget();
$this->params['pt_title'] = "กรุณาเลือกผู้เข้ารับบริการ";
?>
<div class="site-index">

    <div class="panel panel-success">
        <div class="panel-heading">
            <div class="panel-title"><i class="fa fa-wheelchair-alt" aria-hidden="true"></i> รายการผู้รับบริการ</div>
        </div>
        <div class="panel-body">
            <div>ระหว่าง <input type="date" /> ถึง <input type="date"/> <button>ตกลง</button></div>
            list patient ..
        </div>
    </div>


</div>
