<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use phpnt\ICheck\ICheck;
use kartik\datecontrol\DateControl;
?>
<style>
.field-sfootassessmentcomplate-evt_right{display: inline-block;}
.field-sfootassessmentcomplate-evt_note_right{display: inline-block;}
.field-sfootassessmentcomplate-evt_left{display: inline-block;}
.field-sfootassessmentcomplate-evt_note_left{display: inline-block;}

/* .field-sfootassessmentcomplate-smoking_pack {
    position: absolute;
    top: 641px;
    left: 137px;
}
.field-sfootassessmentcomplate-smoking_whene{
    position: absolute;
    top: 641px;
    left: 370px;
} */

</style>

<div class="box">
(1) Personal and Past Medical History
</div>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
<fieldset class="scheduler-border" style="height: 375px;">
	<legend class="scheduler-border">Record</legend>
<?= $form->field($model, 'record_number')->textInput();?>
<?=$form->field($model, 'record_date')->widget(DateControl::classname(), [
    'type'=>DateControl::FORMAT_DATE,
    'ajaxConversion'=>false,
    'widgetOptions' => [
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]
]);?>
<?= $form->field($model, 'recorder')->textInput();?>
</fieldset>
</div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        
<fieldset class="scheduler-border" style="height: 375px;">
	<legend class="scheduler-border">1. occupation</legend>
<?= $form->field($model, 'occupation')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'อยู่บ้านเฉยๆ',
            '2' => 'แม่บ้าน',
            '3' => 'เกษตรกร',
            '4' => 'งานนั่งโต๊ะ/เอกสาร',
            '5' => 'รับจ้าง',
            '6' => 'ครูอาจารย์',
            '7' => 'ขับรถ',
            '8' => 'ธุระกิจส่วนตัว',
            '9' => 'รับราชการสวมเครื่องแบบพระภิกษุ',
            '10' => 'พระภิกษุ',
            '11' => 'อื่นๆ ระบุ',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessmentcomplate-occupation'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-occupation'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);
         ?>

         <?= $form->field($model, 'occupation_other')->textArea(['rows'=>2,'placeholder' => 'Occupation Other ...'])->label(false);?>
    
</fieldset>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        
   <fieldset class="scheduler-border">
	<legend class="scheduler-border">2. Smoking</legend>
    
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">    
         <?= $form->field($model, 'smoking')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            'N' => 'N',
            'Y' => 'Ypack',
            'EX' => 'Ex Whene'
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessmentcomplate-smoking'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-smoking'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);
         ?>
            
            </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
       <div style="padding-top: 10px;">
       
           <?= $form->field($model, 'smoking_pack')->textInput(['style' => 'width:120px;height: 30px;margin-bottom: 20px;'])->label(false);?>
         <?= $form->field($model, 'smoking_whene')->textInput(['style' => 'width:120px;height: 30px;'])->label(false);?>
         </div>
         </div>
         <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
         <div style="padding-top: 10px;">
         /pack<br><br>
         ry
         </div>

         </div>
         </div>
    </div>
         </fieldset>
       
       

    <fieldset class="scheduler-border">
	<legend class="scheduler-border">3. Activity</legend>
                  <?= $form->field($model, 'activity')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'independent',
            '2' => 'Partially dependent',
            '3' => 'Fully dependent'
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessmentcomplate-activity'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-activity'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
 </fieldset>

     <fieldset class="scheduler-border">
	<legend class="scheduler-border">4. Using ambulation aid ON</legend>
         <?= $form->field($model, 'using_ambulation')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'N',
            '2' => 'Y , specify',
            '3' => 'Wheelchair',
            '4' => 'Walker',
            '5' => 'Crutches',
            '6' => 'Cane'
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessmentcomplate-using_ambulation'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-using_ambulation'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
       </fieldset>
       </div>
</div>
         </div>
<table width="100%" border="0" class="table table-bordered">
  <tr>
    <td colspan="3" align="center">
    <p style="font-size: 20px;">Detail of Provider Foot History</p>
    </td>
  </tr>
  <tr>
  <td width="30%">&nbsp;</td>
    <td width="35%" valign="top"><p align="center"><strong class="table-right">Right  </strong></p></td>
    <td width="35%" valign="top"><p align="center"><strong class="table-left">Left</strong></p></td>
  </tr>
  <tr>
    <td><strong>5. Provider fiit ulcer</strong></td>
    <td bgcolor="#ddd">&nbsp;</td>
    <td bgcolor="#ddd">&nbsp;</td>
  </tr>
  <tr>
    <td>
    <?= $form->field($model, 'previous_foot_ulcer')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            'N' => 'N',
            '2' => 'Y , specify site',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessmentcomplate-previous_foot_ulcer'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-previous_foot_ulcer'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'previous_foot_ulcer_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Midfoot',
            '2' => 'Metatarsal area',
            '3' => 'Hallux',
            '4' => 'Digit'
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessmentcomplate-previous_foot_ulcer'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-previous_foot_ulcer'.$index.'">'.$label.'</label><br>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'previous_foot_ulcer_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Midfoot',
            '2' => 'Metatarsal area',
            '3' => 'Hallux',
            '4' => 'Digit'
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessmentcomplate-previous_foot_ulcer_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-previous_foot_ulcer_left'.$index.'">'.$label.'</label><br>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td><strong>6. Previous amputation</strong></td>
    <td bgcolor="#ddd">&nbsp;</td>
    <td bgcolor="#ddd">&nbsp;</td>
  </tr>
  <tr>
    <td>
    <?= $form->field($model, 'previous_amputation')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'N',
            '2' => 'Y , specify type and site',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessmentcomplate-previous_amputation'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-previous_amputation'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'previous_amputation_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'AKA',
            '2' => 'BKA',
            '3' => 'Syme',
            '4' => 'Midfoot',
            '5' => 'Transmetatarsel',
            '6' => 'Hallux',
            '7' => 'Gigit',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessmentcomplate-previous_amputation_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-previous_amputation_right'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'previous_amputation_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'AKA',
            '2' => 'BKA',
            '3' => 'Syme',
            '4' => 'Midfoot',
            '5' => 'Transmetatarsel',
            '6' => 'Hallux',
            '7' => 'Gigit',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessmentcomplate-previous_amputation_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-previous_amputation_left'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  
  <tr>
    <td><strong>Prosthesis</strong></td>
    <td bgcolor="#ddd">&nbsp;</td>
    <td bgcolor="#ddd">&nbsp;</td>
  </tr>
  <tr>
    <td>
    <?= $form->field($model, 'prosthesis')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'N',
            '2' => 'Y , for',
            
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessmentcomplate-prosthesis'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-prosthesis'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
      </td>
    <td>
    <?= $form->field($model, 'prosthesis_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Functional',
            '2' => 'Cosmetic',
            
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessmentcomplate-prosthesis_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-prosthesis_right'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
      </td>
    <td>
    <?= $form->field($model, 'prosthesis_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Functional',
            '2' => 'Cosmetic',
            
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessmentcomplate-prosthesis_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-prosthesis_left'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
  </tr>

  <tr>
    <td><strong>7. Previous revascularization<</strong>/td>
    <td bgcolor="#ddd">&nbsp;</td>
    <td bgcolor="#ddd">&nbsp;</td>
  </tr>
  <tr>
    <td>
    <?= $form->field($model, 'previous_revascularization')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'N',
            '2' => 'Y , for',
            
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessmentcomplate-previous_revascularization'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-previous_revascularization'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'evt_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'EVT',
            
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="checkbox" id="footassessmentcomplate-evt_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-evt_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>

      <?= $form->field($model, 'evt_note_right')->textInput()->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'evt_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'EVT',
            
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="checkbox" id="footassessmentcomplate-evt_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-evt_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>

      <?= $form->field($model, 'evt_note_left')->textInput()->label(false);?>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
    <?=$form->field($model, 'evt_date_right')->widget(DateControl::classname(), [
    'type'=>DateControl::FORMAT_DATE,
    'ajaxConversion'=>false,
    'widgetOptions' => [
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]
])->label(false);?>
    </td>
    <td>
    <?=$form->field($model, 'evt_date_left')->widget(DateControl::classname(), [
    'type'=>DateControl::FORMAT_DATE,
    'ajaxConversion'=>false,
    'widgetOptions' => [
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]
])->label(false);?>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
    <?= $form->field($model, 'bypass_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Baypass',
            
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="checkbox" id="footassessmentcomplate-bypass_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-bypass_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'bypass_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Baypass',
            
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="checkbox" id="footassessmentcomplate-bypass_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-bypass_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
      </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
        <td>
    <?=$form->field($model, 'bypass_date_right')->widget(DateControl::classname(), [
    'type'=>DateControl::FORMAT_DATE,
    'ajaxConversion'=>false,
    'widgetOptions' => [
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]
])->label(false);?>
    </td>
    <td>
    <?=$form->field($model, 'bypass_date_left')->widget(DateControl::classname(), [
    'type'=>DateControl::FORMAT_DATE,
    'ajaxConversion'=>false,
    'widgetOptions' => [
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]
])->label(false);?>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
    <?= $form->field($model, 'hybrid_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Hybrid',
            
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="checkbox" id="footassessmentcomplate-hybrid_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-hybrid_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'hybrid_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Hybrid',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="checkbox" id="footassessmentcomplate-hybrid_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-hybrid_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
    <?=$form->field($model, 'hybrid_date_right')->widget(DateControl::classname(), [
    'type'=>DateControl::FORMAT_DATE,
    'ajaxConversion'=>false,
    'widgetOptions' => [
        'pluginOptions' => [
            'autoclose' => true
        ]]])->label(false);?>
    </td>
    <td>
    <?=$form->field($model, 'hybrid_date_left')->widget(DateControl::classname(), [
    'type'=>DateControl::FORMAT_DATE,
    'ajaxConversion'=>false,
    'widgetOptions' => [
        'pluginOptions' => [
            'autoclose' => true
        ]]])->label(false);?>
    </td>
  </tr>
</table>