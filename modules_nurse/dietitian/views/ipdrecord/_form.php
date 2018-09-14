<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\checkbox\CheckboxX;
use yii\helpers\Url;
use phpnt\ICheck\ICheck;
use app\components\PatientHelper;

$hn = PatientHelper::getCurrentHn();
$vn = PatientHelper::getCurrentVn();
?>

<center><h4>IPD NURTITION VISIT RECORD</h4></center>

<?php
$form = ActiveForm::begin([
            'method' => 'post',
            'action' => ['ipdrecord/create'],
        ]);
?>

<?= $form->field($model, 'vn')->hiddenInput(['maxlength' => true, 'value' => $vn])->label(FALSE); ?>
<?= $form->field($model, 'hn')->hiddenInput(['maxlength' => true, 'value' => $hn])->label(FALSE); ?>

<div class="row" style="margin-top:40px;">
    <div class="col-md-3"><p align="right">Principal Dx / Impression</p> </div>
    <div class="col-md-3"><?= $form->field($model, 'principal_diag')->textInput()->label(FALSE); ?></div>
    <div class="col-md-3"><p align="right">Co-morbidity </p></div>
    <div class="col-md-3"><?= $form->field($model, 'co_morbidity')->textInput()->label(FALSE); ?></div>
</div>

<div class="row" style="margin-top:10px;margin-left: 30px">
    <div class="col-md-3">
        <?=
        $form->field($model, 'visit_no')->widget(ICheck::className(), [
            'type' => ICheck::TYPE_RADIO_LIST,
            'style' => ICheck::STYLE_FLAT,
            'items' => [1 => 'Visit No1', 2 => 'Visit No2', 3 => 'Visit No3'],
            'color' => 'green',
            'options' => [
                'item' => function ($index, $label, $name, $checked, $value) {
                    return '<input type="radio" id="radio-10-' . $index . '" name="' . $name . '" value="' . $value . '" ' . ($checked ? 'checked' : false) . '> 
                        <label for="check-7-' . $index . '">' . $label . '</label>';
                },
    ]])->label(FALSE);
        ?>
    </div>
    <div style="margin-top: 5px" class="col-md-2">Source data </div>
    <div class="col-md-7">

        <?=
        $form->field($model, 'source_data')->widget(ICheck::className(), [
            'type' => ICheck::TYPE_RADIO_LIST,
            'style' => ICheck::STYLE_FLAT,
            'items' => [1 => 'Patient', 2 => 'Relative', 3 => 'Caregiver', 4 => 'Nurse'],
            'color' => 'green',
            'options' => [
                'item' => function ($index, $label, $name, $checked, $value) {
                    return '<input type="radio" id="radio-10-' . $index . '" name="' . $name . '" value="' . $value . '" ' . ($checked ? 'checked' : false) . '> 
                        <label for="check-7-' . $index . '">' . $label . '</label>';
                },
    ]])->label(FALSE);
        ?>
    </div>
</div>




<div class="row" style="margin-top: 20px">
    <div class="well well-sm">1.ส่วนสูง/ความยาวตัว/ความยาวช่วงแขนจากปลายนิ้วกลางทั้ง 2 ข้าง(Arm span)</div>
</div>
<div class="row" >
    <div class="col-md-6">
        <div class="col-md-3">
            <label style="margin-left: 20px">วัดส่วนสูง</label>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'height')->textInput(['style' => 'width:100px', 'class' => ''])->label(FALSE); ?>
        </div>
        <div class="col-md-3">
            <label style="margin-left: 20px">วัดความยาวตัว</label>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'long')->textInput(['style' => 'width:100px', 'class' => ''])->label(FALSE); ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="col-md-3">
            <label style="margin-left: 20px">Arm span</label>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'arm_span')->textInput(['style' => 'width:100px', 'class' => ''])->label(FALSE); ?>
        </div>
        <div class="col-md-3">
            <label style="margin-left: 20px">ญาติบอก</label>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'arm_span')->textInput(['style' => 'width:100px', 'class' => ''])->label(FALSE); ?>
        </div>
    </div>


</div>

<div class="row" style="margin-top: 20px">
    <div class="well well-sm">2.น้ำหนักและค่าดัชนีมวลกาย (bmi)</div>
</div>

<div class="row" >
    <div class="col-md-3">
        <div class="col-md-6">
            <label style="margin-left: 20px">2.1 น้ำหนัก</label>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'weight')->textInput(['style' => 'width:50px', 'class' => ''])->label(FALSE); ?>
        </div>
        <label style="margin-left: 20px">กก.</label>
    </div>
    <div class="col-md-8">
        <?=
        $form->field($model, 'weighing')->widget(ICheck::className(), [
            'type' => ICheck::TYPE_RADIO_LIST,
            'style' => ICheck::STYLE_FLAT,
            'items' => [1 => 'ชั่งในท่านอน', 2 => 'ชั่งในท่ายืน', 3 => 'ชั่งไม่ได้', 4 => 'ถามญาติ'],
            'color' => 'green',
            'options' => [
                'item' => function ($index, $label, $name, $checked, $value) {
                    return '<input type="radio" id="radio-10-' . $index . '" name="' . $name . '" value="' . $value . '" ' . ($checked ? 'checked' : false) . '> 
                        <label for="check-7-' . $index . '">' . $label . '</label>';
                },
    ]])->label(FALSE);
        ?>
    </div>
    <div class="col-md-1"><input type="text" style="margin-left: 10px;width: 45px"> </div>
</div>
<div class="row" >
    <div class="col-md-3" style="margin-top: 5px;">
        <div class="col-md-6">
            <label style="margin-left: 20px">2.2 BMI</label>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'weighing')->textInput(['style' => 'width:50px', 'class' => ''])->label(FALSE); ?>
        </div>
        <label style="margin-left: 20px">กก./ม2</label>
    </div>
    <div class="col-md-8" style="margin-top: 5px;">
        <?=
        $form->field($model, 'bmi_check')->widget(ICheck::className(), [
            'type' => ICheck::TYPE_RADIO_LIST,
            'style' => ICheck::STYLE_FLAT,
            'items' => [1 => 'BMI<17.0 กก/ม', 2 => 'BMI 17.0-18.0 กก/ม', 3 => 'BMI 18.1-29.9 กก/ม', 4 => 'BMI>29 กก/ม'],
            'color' => 'green',
            'options' => [
                'item' => function ($index, $label, $name, $checked, $value) {
                    return '<input type="radio" id="radio-10-' . $index . '" name="' . $name . '" value="' . $value . '" ' . ($checked ? 'checked' : false) . '> 
                        <label for="check-7-' . $index . '">' . $label . '</label>';
                },
    ]])->label(FALSE);
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
    <div class="col-md-8">
        <?=
        $form->field($model, 'albumin')->widget(ICheck::className(), [
            'type' => ICheck::TYPE_RADIO_LIST,
            'style' => ICheck::STYLE_FLAT,
            'items' => [1 => '<2.6 g/dl(<25 g/l)', 2 => '2.6-2.9 g/dl(26-29 g/l)', 3 => '3.0-3.5 g/dl(30-35 g/l)', 4 => '>3.5 g/dl(>35 g/l)'],
            'color' => 'green',
            'options' => [
                'item' => function ($index, $label, $name, $checked, $value) {
                    return '<input type="radio" id="radio-10-' . $index . '" name="' . $name . '" value="' . $value . '" ' . ($checked ? 'checked' : false) . '> 
                        <label for="check-7-' . $index . '">' . $label . '</label>';
                },
    ]])->label(FALSE);
        ?>
    </div>
    <div class="col-md-1"><input type="text" style="margin-left: 10px;width: 45px;"> </div>
</div>

<div class="row" >
    <div class="col-md-3">
        <label style="margin-left: 20px;margin-top: 5px">2.2 ผล TCL </label>

    </div>
    <div class="col-md-8" style="margin-top: 5px;">
        <?=
        $form->field($model, 'tlc')->widget(ICheck::className(), [
            'type' => ICheck::TYPE_RADIO_LIST,
            'style' => ICheck::STYLE_FLAT,
            'items' => [1 => '<1001 cell/mm3', 2 => '1001-1200 cell/mm3', 3 => '1201-1500 cell/mm3', 4 => '>1500 cell/mm3'],
            'color' => 'green',
            'options' => [
                'item' => function ($index, $label, $name, $checked, $value) {
                    return '<input type="radio" id="radio-10-' . $index . '" name="' . $name . '" value="' . $value . '" ' . ($checked ? 'checked' : false) . '> 
                        <label for="check-7-' . $index . '">' . $label . '</label>';
                },
    ]])->label(FALSE);
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
    <div class="col-md-8" style="margin-top: 5px;">
        <?=
        $form->field($model, 'shape')->widget(ICheck::className(), [
            'type' => ICheck::TYPE_RADIO_LIST,
            'style' => ICheck::STYLE_FLAT,
            'items' => [1 => 'ผอมมาก', 2 => 'ผอม', 3 => 'อ้วนมาก', 4 => 'ปกติ-อ้วนปานกลาง'],
            'color' => 'green',
            'options' => [
                'item' => function ($index, $label, $name, $checked, $value) {
                    return '<input type="radio" id="radio-10-' . $index . '" name="' . $name . '" value="' . $value . '" ' . ($checked ? 'checked' : false) . '> 
                        <label for="check-7-' . $index . '">' . $label . '</label>';
                },
    ]])->label(FALSE);
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
    <div class="col-md-8" style="margin-top: 5px;">
        <?=
        $form->field($model, 'weight_change')->widget(ICheck::className(), [
            'type' => ICheck::TYPE_RADIO_LIST,
            'style' => ICheck::STYLE_FLAT,
            'items' => [1 => 'ลดลง/ผอมลง', 2 => 'เพิ่มขึ้น/อ้วนขึ้น', 3 => 'ไม่ทราบ', 4 => 'คงเดิม'],
            'color' => 'green',
            'options' => [
                'item' => function ($index, $label, $name, $checked, $value) {
                    return '<input type="radio" id="radio-10-' . $index . '" name="' . $name . '" value="' . $value . '" ' . ($checked ? 'checked' : false) . '> 
                        <label for="check-7-' . $index . '">' . $label . '</label>';
                },
    ]])->label(FALSE);
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
    <div class="col-md-8" style="margin-top: 5px;">
        <?=
        $form->field($model, 'nature_food')->widget(ICheck::className(), [
            'type' => ICheck::TYPE_RADIO_LIST,
            'style' => ICheck::STYLE_FLAT,
            'items' => [1 => 'อาหารน้ำ', 2 => 'อาหารเหลว', 3 => 'อาหารนุ่มกว่าปกติ', 4 => 'อาหารเหมือนปกติ'],
            'color' => 'green',
            'options' => [
                'item' => function ($index, $label, $name, $checked, $value) {
                    return '<input type="radio" id="radio-10-' . $index . '" name="' . $name . '" value="' . $value . '" ' . ($checked ? 'checked' : false) . '> 
                        <label for="check-7-' . $index . '">' . $label . '</label>';
                },
    ]])->label(FALSE);
        ?>
    </div>
    <div class="col-md-1" style="margin-top: 5px;"><input type="text" style="margin-left: 10px;width: 45px;"> </div>
</div>
<div class="row" >
    <div class="col-md-3">
        <label style="margin-left: 20px;margin-top: 5px">5.2 ปริมาณที่กิน</label>

    </div>
    <div class="col-md-8" style="margin-top: 5px;">
        <?=
        $form->field($model, 'food_intake')->widget(ICheck::className(), [
            'type' => ICheck::TYPE_RADIO_LIST,
            'style' => ICheck::STYLE_FLAT,
            'items' => [1 => 'กินน้อยมาก', 2 => 'กินน้อยลง', 3 => 'กินมากขึ้น', 4 => 'กินเท่าปกติ'],
            'color' => 'green',
            'options' => [
                'item' => function ($index, $label, $name, $checked, $value) {
                    return '<input type="radio" id="radio-10-' . $index . '" name="' . $name . '" value="' . $value . '" ' . ($checked ? 'checked' : false) . '> 
                        <label for="check-7-' . $index . '">' . $label . '</label>';
                },
    ]])->label(FALSE);
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
            'name' => 'chew1',
            'id' => 'chew1',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">สำลัก</label>';
        ?>
    </div>
    <div class="col-md-4" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 'chew2',
            'id' => 'chew2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">เคี้ยวกลืนลำบาก/ได้อาหารทางสาย</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 'chew3',
            'id' => 'chew3',
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
            'name' => 'digestive1',
            'id' => 'digestive1',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">ท้องเสีย</label>';
        ?>
    </div>
    <div class="col-md-4" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 'digestive2',
            'id' => 'digestive2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">ปวดท้อง</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 'digestive3',
            'id' => 'digestive3',
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
            'name' => 'eat1',
            'id' => 'eat1',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">อาเจียน</label>';
        ?>
    </div>
    <div class="col-md-4" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 'eat2',
            'id' => 'eat2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">คลื่นไส้</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 'eat3',
            'id' => 'eat3',
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
            'name' => 'food_access1',
            'id' => 'food_access1',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">นอนติดเตียง</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 'food_access2',
            'id' => 'food_access2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">ต้องมีผู้ช่วยบ้าง</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 'food_access3',
            'id' => 'food_access3',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">นั่งๆนอนๆ</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
        <?php
        echo CheckboxX::widget([
            'name' => 'food_access4',
            'id' => 'food_access4',
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
            'name' => 'disease_min1',
            'id' => 'disease_min1',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">DM (เบาหวาน)</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 'disease_max1',
            'id' => 'disease_max1',
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
            'name' => 'disease_min2',
            'id' => 'disease_min2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">CKD-ESRD/HD/CAPD(ไตเรื้อรัง)</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 'disease_max2',
            'id' => 'disease_max2',
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
            'name' => 'disease_min3',
            'id' => 'disease_min3',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Septicemia(ติดเชื้อในกระแสเลือด)</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 'disease_max3',
            'id' => 'disease_max3',
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
            'name' => 'disease_min4',
            'id' => 'disease_min4',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Solid cancer (มะเร็งทั่วไป)</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 'disease_max4',
            'id' => 'disease_max4',
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
            'name' => 'disease_min5',
            'id' => 'disease_min5',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Chronic Heart Failure (หัวใจล้มเหลวเรื้อรัง)</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 'disease_max5',
            'id' => 'disease_max5',
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
            'name' => 'disease_min6',
            'id' => 'disease_min6',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Hip Fracture (ข้อสะโพกหัก)</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 'disease_max6',
            'id' => 'disease_max6',
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
            'name' => 'disease_min7',
            'id' => 'disease_min7',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Tubereulosis (วัณโรค)</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 'disease_max7',
            'id' => 'disease_max7',
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
            'name' => 'disease_min8',
            'id' => 'disease_min8',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">COPD (ปอดอุดกลั้นเรื้อรัง)</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 'disease_max8',
            'id' => 'disease_max8',
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
            'name' => 'disease_min9',
            'id' => 'disease_min9',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Severe head injury (บาดเจ็บศรีษะรุนแรง)</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 'disease_max9',
            'id' => 'disease_max9',
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
            'name' => 'disease_min10',
            'id' => 'disease_min10',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">> 2 burn ไฟไหม้ระดับ 2 ขึ้นไป</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 'disease_max10',
            'id' => 'disease_max10',
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
            'name' => 'disease_min11',
            'id' => 'disease_min11',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">CLD /Cirrhosis/Hepatic encephalopathy (ตับเรื้อรัง)</label>';
        ?>
    </div>
    <div class="col-md-5" >
        <?php
        echo CheckboxX::widget([
            'name' => 'disease_max11',
            'id' => 'disease_max11',
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
            'name' => 'disease_min12',
            'id' => 'disease_min12',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Other (อื่นๆ)</label>';
        ?>
    </div>
    <div class="col-md-5" >

    </div>
</div>


<div class="row">
    <div class="col-md-2" style="margin-top:18px"><h4>IDNT diagnosis</h4></div>
    <div class="col-md-2" style="margin-top:18px "> <?= $form->field($model, 'idnt_diag1')->textInput(['placeholder' => '1'])->label(FALSE); ?></div>
    <div class="col-md-2" style="margin-top:18px "> <?= $form->field($model, 'idnt_diag2')->textInput(['placeholder' => '2'])->label(FALSE); ?> </div>
    <div class="col-md-2" style="margin-top:18px "> <?= $form->field($model, 'idnt_diag3')->textInput(['placeholder' => '3'])->label(FALSE); ?> </div>
    <div class="col-md-2" style="margin-top:18px "> <?= $form->field($model, 'idnt_diag4')->textInput(['placeholder' => '4'])->label(FALSE); ?> </div>
    <div class="col-md-2" style="margin-top:18px "> <?= $form->field($model, 'idnt_diag5')->textInput(['placeholder' => '5'])->label(FALSE); ?> </div>
</div>

<div class="row">
    <div class="form-group" style="text-align: left;margin-top: 30px;margin-left: 20px">
        <div class="col-md-1">
            <?= $form->field($model, 'requester')->textInput(['placeholder' => 'Requester', 'style' => 'width:100px'])->label(FALSE); ?>
        </div>
        <div class="col-md-2" style="margin-left:15px">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success', 'style' => 'width:75px']) ?>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>