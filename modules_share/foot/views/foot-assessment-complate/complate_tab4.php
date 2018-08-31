<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use phpnt\ICheck\ICheck;

?>

<div class="box">
(4) Education foot care assessment
</div>
<hr>
<h5>
1. Does the patient know about how to take care for diabetic feet? 
</h5>
    <?= $form->field($model, 'foot_take_care')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>['Y'=> 'Y','N' => 'N',],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-foot_take_care'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-foot_take_care'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
<h5> 2. Can the patient do general footcare by himself/herself?   </h5>
<?= $form->field($model, 'foot_general_footcare')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>['Y'=> 'Y','N' => 'N , specify reason',],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-foot_general_footcare'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-foot_general_footcare'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>

<h5>3. Does the patient usually take care his/her feet?</h5>    
<?= $form->field($model, 'foot_take_care_his')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>['Y'=> 'Y','N' => 'N',],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-foot_take_care_his'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-foot_take_care_his'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>


<h5>4. How often does the patient check his/her feet?</h5>     
<?= $form->field($model, 'foot_take_check_his')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>['Y'=> 'Y','N' => 'N',],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-take_check_his'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-take_check_his'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?> 

