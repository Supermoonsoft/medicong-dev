<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use phpnt\ICheck\ICheck;

?>
<div class="box">
(6) Suggestion for prevention of foot ulcer and education
</div>

<hr>
 <?= $form->field($model, 'daily_foot')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>['Y'=> 'ตรวจเท้าทุกวัน(Daily foot examination should be done)'],
        'color'  => 'green',                   // цвет
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="checkbox" id="footassessment-daily_foot'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-daily_foot'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>

       <?= $form->field($model, 'always_wear')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>['Y'=> 'การใส่รองเท้าที่เหมาะสมอยู่สม่ำเสมอ ไม่เดินเท้าเปล่า (Alway wear proper shoe,do not walk with barefoot)'],
        'color'  => 'green',                   // цвет
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="checkbox" id="footassessment-always_wear'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-always_wear'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>

       <?= $form->field($model, 'regular_callus')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>['Y'=> 'ท่านมีหนังหนาควรได้รับการตัดออกอย่างสม่ำเสมอ (Regular callus removal id nececssary)'],
        'color'  => 'green',                   // цвет
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="checkbox" id="footassessment-regular_callus'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-regular_callus'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>

       <?= $form->field($model, 'avoid_foot')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>['Y'=> 'ควรหลีกเลี่ยงเท้าไม่สัมผัสกับของร้อน(Avoid foot contact eith heat)'],
        'color'  => 'green',                   // цвет
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="checkbox" id="footassessment-avoid_foot'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-avoid_foot'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>

       <?= $form->field($model, 'contact_your')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>['Y'=> 'หามีแผลหรือนิ้วเท้าเปลี่ยนสีควรรีบปรึกษาแพทย์(Contact you physician if ulcer or discoloration of skin appear)'],
        'color'  => 'green',                   // цвет
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="checkbox" id="footassessment-contact_your'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-contact_your'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
