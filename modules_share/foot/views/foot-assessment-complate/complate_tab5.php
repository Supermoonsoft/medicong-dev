<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use phpnt\ICheck\ICheck;

?>
<div class="box">(5) Risk Categorization of Diabetic Foot Ulcer</div>
<hr>
<?= $form->field($model, 'risk_categorization_diabetic')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>['L'=> 'Low ','M' => 'Moderate','H' => 'High '],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-risk_categorization_diabetic'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-risk_categorization_diabetic'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?> 