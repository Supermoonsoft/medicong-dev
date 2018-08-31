<?php

use kartik\checkbox\CheckboxX;
?>

<center><h4>IPD NURTITION VISIT RECORD</h4></center>

<div class="row" style="margin-top:40px;">
    <div class="col-md-3"><p align="right">Principal Dx / Impression</p> </div>
    <div class="col-md-3"><input type="text"></div>
    <div class="col-md-3"><p align="right">Co-morbidity </p></div>
    <div class="col-md-3"><input type="text"> </div>
</div>

<div class="row" style="margin-top:10px;margin-left: 30px">
    <div class="col-md-3">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Visit No1</label>';
        ?>

        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Visit No2</label>';
        ?>

        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Visit No3</label>';
        ?>
    </div>
    <div style="margin-top: 5px" class="col-md-2">Source data </div>
    <div class="col-md-7">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Patient</label>';
        ?>

        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Relative</label>';
        ?>

        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Caregiver</label>';
        ?>
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Nurse</label>';
        ?>
    </div>
</div>




<div class="row" style="margin-top: 20px">
    <div class="well well-sm">1.ส่วนสูง/ความยาวตัว/ความยาวช่วงแขนจากปลายนิ้วกลางทั้ง 2 ข้าง(Arm span)</div>
</div>
<div class="row" >
    <label style="margin-left: 20px">วัดส่วนสูง</label>
    <input type="text" style="margin-left: 10px">
    <label style="margin-left: 20px">วัดความยาวตัว</label>
    <input type="text" style="margin-left: 10px">
    <label style="margin-left: 20px">Arm span</label>
    <input type="text" style="margin-left: 10px">
    <label style="margin-left: 20px">ญาติบอก</label>
    <input type="text" style="margin-left: 10px">
</div>

<div class="row" style="margin-top: 20px">
    <div class="well well-sm">2.น้ำหนักและค่าดัชนีมวลกาย (bmi)</div>
</div>

<div class="row" >
    <div class="col-md-3">
        <label style="margin-left: 20px">2.1 น้ำหนัก</label>
        <input type="text" style="margin-left: 10px;width: 50px">
        <label style="margin-left: 20px">กก.</label>
    </div>
    <div class="col-md-2">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">ชั่งในท่านอน</label>';
        ?>
    </div>
    <div class="col-md-2">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">ชั่งในท่ายืน</label>';
        ?>
    </div>
    <div class="col-md-2">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">ชั่งไม่ได้</label>';
        ?>
    </div>
    <div class="col-md-2">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">ญาติบอก</label>';
        ?>
    </div>
    <div class="col-md-1"><input type="text" style="margin-left: 10px;width: 45px"> </div>
</div>
<div class="row" >
    <div class="col-md-3" style="margin-top: 5px;">
        <label style="margin-left: 20px">2.2 BMI</label>
        <input type="text" style="margin-left: 30px;width: 50px">
        <label style="margin-left: 20px">กก./ม2</label>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">BMI< 17.0 กก/ม</label>';
        ?>
    </div>
    <div class="col-md-2"style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">BMI 17.0-18.0 กก/ม</label>';
        ?>
    </div>
    <div class="col-md-2"style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">BMI 18.1-29.9 กก/ม</label>';
        ?>
    </div>
    <div class="col-md-2"style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">BMI > 29 กก/ม</label>';
        ?>
    </div>
    <div class="col-md-1"><input type="text" style="margin-left: 10px;width: 45px;margin-top: 5px;"> </div>
</div>

<div class="row">
    <label style="margin-left: 30px;margin-top: 10px;margin-bottom: 10px">*หากไม่ทราบน้ำหนักใช้ผล Albumin หรือ Total Lymphocyte Count(TLC) อย่างใดอย่างหนึ่ง</label>
</div>

<div class="row" >
    <div class="col-md-3">
        <label style="margin-left: 20px">2.1 ผล Albumin</label>

    </div>
    <div class="col-md-2">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">< 2.6 g/dl(<25 g/l)</label>';
        ?>
    </div>
    <div class="col-md-2">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">2.6-2.9 g/dl(26-29 g/l)</label>';
        ?>
    </div>
    <div class="col-md-2">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">3.0-3.5 g/dl(30-35 g/l)</label>';
        ?>
    </div>
    <div class="col-md-2">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">> 3.5 g/dl(>35g/l)</label>';
        ?>
    </div>
    <div class="col-md-1"><input type="text" style="margin-left: 10px;width: 45px;"> </div>
</div>

<div class="row" >
    <div class="col-md-3">
        <label style="margin-left: 20px;margin-top: 5px">2.2 ผล TCL </label>

    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">< 1001 cell/mm3</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">1001-1200 cell/mm3</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">1201-1500 cell/mm3</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">> 1500 cell/mm3</label>';
        ?>
    </div>
    <div class="col-md-1" style="margin-top: 5px;"><input type="text" style="margin-left: 10px;width: 45px;"> </div>
</div>


<div class="row" style="margin-top: 20px">
    <div class="well well-sm">3.รูปร่างของผู้ป่วย</div>
</div>
<div class="row" >
    <div class="col-md-3">


    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">ผมมาก</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">ผอม</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">อ้วนมาก</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">ปกติ-อ้วนปานกลาง</label>';
        ?>
    </div>
    <div class="col-md-1" style="margin-top: 5px;"><input type="text" style="margin-left: 10px;width: 45px;"> </div>
</div>

<div class="row" style="margin-top: 20px">
    <div class="well well-sm">4.น้ำหนักเปลี่ยนใน 4 สัปดาห์</div>
</div>
<div class="row" >
    <div class="col-md-3">


    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">ลดลง/ผอมลง</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">เพิ่มขึ้น/อ้วนขึ้น</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">ไม่ทราบ</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">คงเดิม</label>';
        ?>
    </div>
    <div class="col-md-1" style="margin-top: 5px;"><input type="text" style="margin-left: 10px;width: 45px;"> </div>
</div>


<div class="row" style="margin-top: 20px">
    <div class="well well-sm">5.อาหารที่กินในช่วง 2 สัปดาห์ที่ผ่านมา</div>
</div>
<div class="row" >
    <div class="col-md-3">
        <label style="margin-left: 20px;margin-top: 5px">5.1 ลักษณะอาหาร</label>

    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">อาหารน้ำๆ</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">อาหารเหลว</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">อาหารนุ่มกว่าปกติ</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">อาหารเหมือนปกติ</label>';
        ?>
    </div>
    <div class="col-md-1" style="margin-top: 5px;"><input type="text" style="margin-left: 10px;width: 45px;"> </div>
</div>
<div class="row" >
    <div class="col-md-3">
        <label style="margin-left: 20px;margin-top: 5px">5.2 ปริมาณที่กิน</label>

    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">กินน้อยมาก</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">กินน้อยลง</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">กินมากขึ้น</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">กินเท่าปกติ</label>';
        ?>
    </div>
    <div class="col-md-1" style="margin-top: 5px;"><input type="text" style="margin-left: 10px;width: 45px;"> </div>
</div>

<div class="row" style="margin-top: 20px">
    <div class="well well-sm">6.อาการต่อเนื่อง> 2 สัปดาห์ที่ผ่านมา(เลือกได้มากกว่า 1 ช่อง)</div>
</div>
<div class="row" >
    <div class="col-md-3">
        <label style="margin-left: 20px;margin-top: 5px">6.1 ปัญหารการเคี้ยวกลืนอาหาร</label>

    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">สำลัก</label>';
        ?>
    </div>
    <div class="col-md-4" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">เคี้ยวกลืนลำบาก/ได้อาหารทางสาย</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">กลืนได้ปกติ</label>';
        ?>
    </div>

    <div class="col-md-1" style="margin-top: 5px;"><input type="text" style="margin-left: 10px;width: 45px;"> </div>
</div>
<div class="row" >
    <div class="col-md-3">
        <label style="margin-left: 20px;margin-top: 5px">6.2 ปัญหาระบบทางเดินอาหาร</label>

    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">ท้องเสีย</label>';
        ?>
    </div>
    <div class="col-md-4" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">ปวดท้อง</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">ปกติ</label>';
        ?>
    </div>

    <div class="col-md-1" style="margin-top: 5px;"><input type="text" style="margin-left: 10px;width: 45px;"> </div>
</div>

<div class="row" >
    <div class="col-md-3">
        <label style="margin-left: 20px;margin-top: 5px">6.3 ปัญหาระหว่างกินอาหาร</label>

    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">อาเจียน</label>';
        ?>
    </div>
    <div class="col-md-4" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">คลื่นไส้</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">ปกติ</label>';
        ?>
    </div>

    <div class="col-md-1" style="margin-top: 5px;"><input type="text" style="margin-left: 10px;width: 45px;"> </div>
</div>

<div class="row" style="margin-top: 20px">
    <div class="well well-sm">7.ความสามารถในการเข้าถึงอาหาร</div>
</div>
<div class="row" >
    <div class="col-md-3">


    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">นอนติดเตียง</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">ต้องมีผู้ช่วยบ้าง</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">นั่งๆนอนๆ</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">ปกติ</label>';
        ?>
    </div>
    <div class="col-md-1" style="margin-top: 5px;"><input type="text" style="margin-left: 10px;width: 45px;"> </div>
</div>

<div class="row" style="margin-top: 20px">
    <div class="well well-sm">8.โรคที่เป็นอยู่โดยต้องแจ้งนักกำหนดอาหาร/นักโภชนาการทราบ</div>
</div>

<div class="row" >
    <div class="col-md-6">
        <label>โรคที่มีความรุนแรงน้อยถึงปานกลาง</label>

    </div>
    <div class="col-md-6" >
        <label>โรคที่มีความรุนแรงมาก</label>
    </div>
</div>
<div class="row" style="margin-top: 5px;margin-left: 20px" >
    <div class="col-md-6">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">DM (เบาหวาน)</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">DM poor control</label>';
        ?>
    </div>
</div>
<div class="row" style="margin-top: 5px;margin-left: 20px" >
    <div class="col-md-6">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">CKD-ESRD/HD/CAPD(ไตเรื้อรัง)</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Foot ulcer (แผลที่เท้า)</label>';
        ?>
    </div>
</div>
<div class="row" style="margin-top: 5px;margin-left: 20px" >
    <div class="col-md-6">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Septicemia(ติดเชื้อในกระแสเลือด)</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Ascites (ท้องมาน)</label>';
        ?>
    </div>
</div>
<div class="row" style="margin-top: 5px;margin-left: 20px" >
    <div class="col-md-6">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Solid cancer (มะเร็งทั่วไป)</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">HIV </label>';
        ?>
    </div>
</div>
<div class="row" style="margin-top: 5px;margin-left: 20px" >
    <div class="col-md-6">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Chronic Heart Failure (หัวใจล้มเหลวเรื้อรัง)</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Malignant bematologic disease/Bone marrow transplant</label>';
        ?>
    </div>
    <div class="col-md-1" style="margin-top: 5px;"><input type="text" style="margin-left: 10px;width: 45px;"> </div>
</div>
<div class="row" style="margin-top: 5px;margin-left: 20px" >
    <div class="col-md-6">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Hip Fracture (ข้อสะโพกหัก)</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Stroke / CVA (อัมพาต)</label>';
        ?>
    </div>
</div>
<div class="row" style="margin-top: 5px;margin-left: 20px" >
    <div class="col-md-6">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Tubereulosis (วัณโรค)</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Multi frac (กระดูกหักหลายตำแหน่ง)</label>';
        ?>
    </div>
</div>
<div class="row" style="margin-top: 5px;margin-left: 20px" >
    <div class="col-md-6">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">COPD (ปอดอุดกลั้นเรื้อรัง)</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Severe pncumonia(ปอดบวมขั้นรุนแรง)</label>';
        ?>
    </div>
</div>
<div class="row" style="margin-top: 5px;margin-left: 20px" >
    <div class="col-md-6">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Severe head injury (บาดเจ็บศรีษะรุนแรง)</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Critically ill (ผู้ป่วยวิกฤต)</label>';
        ?>
    </div>
</div>
<div class="row" style="margin-top: 5px;margin-left: 20px" >
    <div class="col-md-6">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">> 2 burn ไฟไหม้ระดับ 2 ขึ้นไป</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Other (อื่นๆ)</label>';
        ?>
    </div>
</div>
<div class="row" style="margin-top: 5px;margin-left: 20px" >
    <div class="col-md-6">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">CLD /Cirrhosis/Hepatic encephalopathy (ตับเรื้อรัง)</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">*หากไม่ตรงโรคที่มีให้คะแนนตามความหนักเบา</label>';
        ?>
    </div>
</div>
<div class="row" style="margin-top: 5px;margin-left: 20px" >
    <div class="col-md-6">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Other (อื่นๆ)</label>';
        ?>
    </div>
    <div class="col-md-5" >
     
    </div>
</div>