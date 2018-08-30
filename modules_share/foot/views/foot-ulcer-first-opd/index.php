
<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use phpnt\ICheck\ICheck;
use app\components\PatientHelper;
$hn = PatientHelper::getCurrentHn();
$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>
<style>
    .box {
        border: 1px solid #ccc;
    height: 46px;
    padding: 9px;
    text-align: center;
    font-size: 20px;
    border-radius: 5px;
    margin-bottom: 20px;
    margin-top: 20px;
    }
    .content{
        margin-left:20px;
    }

    #footulcerfirstopd-vessel_palpation_dp_right{
        display: inline-block;
    }
    #footulcerfirstopd-vessel_palpation_dp_left{
        display: inline-block;
    }
    #footulcerfirstopd-vessel_palpation_pt_right{
        display: inline-block;
    }
    #footulcerfirstopd-vessel_palpation_pt_left{
        display: inline-block;
    }
    #footulcerfirstopd-off_loading_technique{
        display: inline-block;
    }
    #footulcerfirstopd-local_procedure_performed{
        display: inline-block;
    }
    #footulcerfirstopd-local_dressing_performed{
        display: inline-block;
    }
    #footulcerfirstopd-post_revascularization{
        display: inline-block;
    }
    #footulcerfirstopd-post_hbot{
        display: inline-block;
    }
    #footulcerfirstopd-period_number{
        width: 300px;
        display: inline-block;
        background-color: #fff0;
        background-image: none;
        border: none;
    }
    #footulcerfirstopd-post_amputation{
        display: inline-block;
    }
  

</style>

<h3 style="color:#777;margin-left: 20px;">OPD DIABETIC FOOT ULCER VISIT RECORD : OPD DFU FIRST VISIT</h3>
<?php $form = ActiveForm::begin(); ?>
<div class="content">
Visit date ……./………/…………                               First visit                                        Recorder………………………………

<div class="box">
Classification of DFU (First visit only)
</div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4">
    <?= $form->field($model, 'wagner')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessmentcomplate-wagner'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-wagner'.$index.'">'.$label.'</label>';
          }
      ]])->label('1. Wagner');?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
    <?= $form->field($model, 'ut_grade')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessmentcomplate-ut_grade'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-ut_grade'.$index.'">'.$label.'</label>';
          }
      ]])->label('2. UT grade');?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
    <?= $form->field($model, 'ut_stage')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessmentcomplate-ut_stage'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-ut_stage'.$index.'">'.$label.'</label>';
          }
      ]])->label('1. UT stage');?>
    </div>
</div>
<div class="box">Type of DFU (First visit only)</div>

    <?= $form->field($model, 'type_of_duf')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Neuropathic',
            '2' => 'Neuroischemic',
            '3' => 'Ischemic',
            '4' => 'Uncategorized',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessmentcomplate-type_of_duf'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-type_of_duf'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
      <div class="box">History of DFU (First visit only)</div>
      <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4">
      <?= $form->field($model, 'date_of_onset')->textInput();?>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
      <?= $form->field($model, 'duration_of_days')->textInput();?>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
      <?= $form->field($model, 'duration_of_months')->textInput();?>
      </div>
      </div>

          <?= $form->field($model, 'cause_of_dfu')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Trauma',
            '2' => 'Shoes irritation',
            '3' => 'Callus in origin',
            '4' => 'Burn',
            '5' => 'Ischemic',
            '6' => 'Chemical drugs ',
            '7' => 'Other……………..',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="cause_of_dfu'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="cause_of_dfu'.$index.'">'.$label.'</label>';
          }
      ]])->label('2. Cause of DFU ');?>
                <?= $form->field($model, 'foot_wear')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Barefoot',
            '2' => 'Socks only ',
            '3' => 'Sandals',
            '4' => 'Slippers',
            '5' => 'Shoes',
            '6' => 'Ulcer occurred when not ambulating',
            '7' => 'Not known Other…………………………………….',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="foot_wear'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="foot_wear'.$index.'">'.$label.'</label>';
          } ]])->label('2. Cause of DFU ');?>
         
         <?= $form->field($model, 'recurrent_ulcer')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            'N' => 'No',
            'Y' => 'Yes',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="recurrent_ulcer'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="recurrent_ulcer'.$index.'">'.$label.'</label>';
          } ]])->label('4. Recurrent ulcer at the same location');?>



          <table width="100%" class="table table-bordered">
  <tr>
    <td width="643" colspan="3" valign="top"><p align="center"><strong>Details    of DFU and Brief foot examination assessment</strong></p></td>
  </tr>
  <tr>
    <td width="175" valign="top"><p align="center"><strong>DFU    characteristics</strong></p></td>
    <td width="222" valign="top"><p align="center"><strong>Right</strong></p></td>
    <td width="246" valign="top"><p align="center"><strong>Left</strong></p></td>
  </tr>
  <tr>
    <td width="175" valign="top"><p>1. Location of ulcer</p></td>
    <td width="222" valign="top">
       
    <?= $form->field($model, 'location_of_ulcer_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Hallux',
            '2' => 'Digits',
            '3' => 'Heel',
            '4' => 'Forefoot (plantar) ',
            '5' => 'Forefoot (dorsum)',
            '6' => 'Midfoot (dorsum)',
            '7' => 'Ankle ',
            '8' => 'Whole foot ',
            '9' => 'Other………………',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="location_of_ulcer_right '.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="location_of_ulcer_right '.$index.'">'.$label.'</label></br>';
          } ]])->label(false);?>
 </td>
    <td width="246" valign="top">
    <?= $form->field($model, 'location_of_ulcer_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Hallux',
            '2' => 'Digits',
            '3' => 'Heel',
            '4' => 'Forefoot (plantar) ',
            '5' => 'Forefoot (dorsum)',
            '6' => 'Midfoot (dorsum)',
            '7' => 'Ankle ',
            '8' => 'Whole foot ',
            '9' => 'Other………………',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="location_of_ulcer_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="location_of_ulcer_left'.$index.'">'.$label.'</label></br>';
          } ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="175" valign="top"><p>2. Size of ulcer (cm)</p></td>
    <td>
    <?= $form->field($model, 'size_of_ulcer_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Width........',
            '2' => 'Length........',
            '3' => 'Depth........',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="size_of_ulcer_right '.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="size_of_ulcer_right '.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
 </td>
    <td width="246" valign="top">
    <?= $form->field($model, 'size_of_ulcer_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Width........',
            '2' => 'Length........',
            '3' => 'Depth........',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="size_of_ulcer_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="size_of_ulcer_left'.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="175" valign="top"><p>3. Probe to bone test</p></td>
    <td>
    <?= $form->field($model, 'bone_test_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Negative',
            '2' => 'Positive',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="bone_test_right '.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="bone_test_right '.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
 </td>
    <td width="246" valign="top">
    <?= $form->field($model, 'bone_test_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
             '1' => 'Negative',
            '2' => 'Positive',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="bone_test_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="bone_test_left'.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="175" valign="top"><p>4. Characteristics of ulcer<strong></strong></p></td>
    <td>
    <?= $form->field($model, 'characteristics_of_ulcer_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Granulating',
            '2' => 'Necrotic',
            '3' => 'Callused',
            '4' => 'Undermining',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="characteristics_of_ulcer_right '.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="characteristics_of_ulcer_right '.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
 </td>
    <td width="246" valign="top">
    <?= $form->field($model, 'characteristics_of_ulcer_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Granulating',
            '2' => 'Necrotic',
            '3' => 'Callused',
            '4' => 'Undermining',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="characteristics_of_ulcer_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="characteristics_of_ulcer_left'.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="175" valign="top"><p>5. Drainage     5.1 Amount</p></td>
    <td>
    <?= $form->field($model, 'drainage_amount_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'None',
            '2' => 'Low',
            '3' => 'Moderate',
            '4' => 'High',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="drainage_amount_right '.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="drainage_amount_right '.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
 </td>
    <td width="246" valign="top">
    <?= $form->field($model, 'drainage_amount_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
             '1' => 'None',
            '2' => 'Low',
            '3' => 'Moderate',
            '4' => 'High',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="drainage_amount_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="drainage_amount_left'.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="175" valign="top"><p><strong>                          </strong>5.2 Type<strong></strong></p></td>
    <td>
    <?= $form->field($model, 'drainage_type_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Serous',
            '2' => 'Hemoserous',
            '3' => 'Purulent',
            '4' => 'Other……………………………',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="drainage_type_right '.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="drainage_type_right '.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
 </td>
    <td width="246" valign="top">
    <?= $form->field($model, 'drainage_type_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Serous',
            '2' => 'Hemoserous',
            '3' => 'Purulent',
            '4' => 'Other……………………………',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="drainage_type_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="drainage_type_left'.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="175" valign="top"><p>                          5.3 Odor</p></td>
    <td>
    <?= $form->field($model, 'drainage_odor_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            'N' => 'N',
            'Y' => 'Y',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="drainage_odor_right '.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="drainage_odor_right '.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
 </td>
    <td width="246" valign="top">
    <?= $form->field($model, 'drainage_odor_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            'N' => 'N',
            'Y' => 'Y',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="drainage_odor_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="drainage_odor_left'.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="175" valign="top"><p> 6.    Infection</p></td>
    <td>
    <?= $form->field($model, 'infection_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            'N' => 'N',
            'Y' => 'Y , PEDIS grading',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="infection_right '.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="infection_right '.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
              <?= $form->field($model, 'infection_y_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="infection_y_right '.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="infection_y_right '.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
 </td>
    <td width="246" valign="top">
    <?= $form->field($model, 'infection_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            'N' => 'N',
            'Y' => 'Y , PEDIS grading',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="infection_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="infection_left'.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
              <?= $form->field($model, 'infection_y_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="infection_y_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="infection_y_left'.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="175" valign="top"><p><strong>Neuropathy assessment</strong></p></td>
    <td width="222" valign="top" style="background-color: #ddd;">&nbsp;</td>
    <td width="246" valign="top" style="background-color: #ddd;">&nbsp;</td>
  </tr>
  <tr>
    <td width="175" valign="top"><p>1. Monofilament (10g)</p></td>
    <td>
    <?= $form->field($model, 'monofilament_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Intact',
            '2' => 'Impair',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="monofilament_right '.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="monofilament_right '.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
 </td>
    <td width="246" valign="top">
    <?= $form->field($model, 'monofilament_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
           '1' => 'Intact',
            '2' => 'Impair',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="monofilament_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="monofilament_left'.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="175" valign="top"><p>2. Tuning fork (128 Hz) at hallux</p></td>
    <td>
    <?= $form->field($model, 'tuning_fork_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Intact',
            '2' => 'Diminish',
            '3' => 'Impair',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="tuning_fork_right '.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="tuning_fork_right '.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
 </td>
    <td width="246" valign="top">
    <?= $form->field($model, 'tuning_fork_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Intact',
            '2' => 'Diminish',
            '3' => 'Impair',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="tuning_fork_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="tuning_fork_left'.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="175" valign="top"><p><strong>Vascular assessment</strong></p></td>
    <td width="222" valign="top" style="background-color: #ddd;">&nbsp;</td>
    <td width="246" valign="top" style="background-color: #ddd;">&nbsp;</td>
  </tr>
  <tr>
    <td width="175" valign="top"><p>1. Vessel palpation</p></td>
    <td>
    <?= $form->field($model, 'vessel_palpation_dp_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '0' => '0',
            '1' => '1',
            '2' => '2',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="vessel_palpation_dp_right '.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="vessel_palpation_dp_right '.$index.'">'.$label.'</label>';
          } ]])->label('DP');?>
          <?= $form->field($model, 'vessel_palpation_pt_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '0' => '0',
            '1' => '1',
            '2' => '2',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="vessel_palpation_pt_right '.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="vessel_palpation_pt_right '.$index.'">'.$label.'</label>';
          } ]])->label('TP');?>
 </td>
    <td width="246" valign="top">
    <?= $form->field($model, 'vessel_palpation_dp_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '0' => '0',
            '1' => '1',
            '2' => '2',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="vessel_palpation_dp_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="vessel_palpation_dp_left'.$index.'">'.$label.'</label>';
          } ]])->label('DP');?>
              <?= $form->field($model, 'vessel_palpation_pt_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
           '0' => '0',
            '1' => '1',
            '2' => '2',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="vessel_palpation_pt_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="vessel_palpation_pt_left'.$index.'">'.$label.'</label>';
          } ]])->label('PT');?>
    </td>
  </tr>
  <tr>
    <td width="175" valign="top"><p>2. Doppler</p></td>
    <td>
    <?= $form->field($model, 'doppler_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'Non-audible',
            '2' => 'Monophasic',
            '3' => 'Biphasic',
            '4' => 'Triphasic',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="doppler_right '.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="doppler_right '.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
 </td>
    <td width="246" valign="top">
    <?= $form->field($model, 'doppler_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
           '1' => 'Non-audible',
            '2' => 'Monophasic',
            '3' => 'Biphasic',
            '4' => 'Triphasic',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="doppler_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="doppler_left'.$index.'">'.$label.'</label>';
          } ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="175" valign="top"><p>3. Ankle/Brachial Index (ABI)</p></td>
    <td width="222" valign="top">
    ………../………...=…………
    </td>
    <td width="246" valign="top">
    ………../………...=…………
    </td>
  </tr>
  <tr>
    <td width="175" valign="top"><p><strong>&nbsp;</strong></p></td>
    <td width="222" valign="top">  Non-compressible (>1.3)</td>
    <td width="246" valign="top">  Non-compressible (>1.3)</td>
  </tr>
  <tr>
    <td width="175" valign="top"><p>4. Toe pressure (mmHg)           </p></td>
    <td width="222" valign="top">
    <?= $form->field($model, 'toe_pressure_right')->textInput()->label(false);?>
    </td>
    <td width="246" valign="top">
    <?= $form->field($model, 'toe_pressure_left')->textInput()->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="175" valign="top"><p>5. Toe/Brachial Index (TBI)</p></td>
    <td width="222" valign="top">
    <?= $form->field($model, 'tbi_right')->textInput()->label(false);?>
    </td>
    <td width="246" valign="top">
    <?= $form->field($model, 'tbi_left')->textInput()->label(false);?>
    </td>
  </tr>
</table>

<div class="box">Current and Post Interventions</div>

    <?= $form->field($model, 'off_loading_technique')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
           'N' => 'N',
           'Y' => 'Yes , specify',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="off_loading_technique'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="off_loading_technique'.$index.'">'.$label.'</label>';
          } ]])->label('1. Off Loading Technique : ');?>

     <?= $form->field($model, 'off_loading_technique_y')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
           '1' => 'Total contact cast',
           '2' => 'Short Leg cast',
           '3' => 'Posterior slab',
           '4' => 'Felted Foam Dressing',
           '5' => 'Adhesive Felted',
           '6' => 'Shoe with double rockers',
           '7' => 'Half shoes',
           '8' => 'Shoe with negative heel',
           '9' => 'Shoe with forefoot rocker',
           '10' => 'Wheelchair',
           '11' => 'Walker',
           '12' => 'Crutches',
           '13' => 'Cane',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="off_loading_technique_y'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="off_loading_technique_y'.$index.'">'.$label.'</label>';
          } ]])->label(false);?>

      <?= $form->field($model, 'local_procedure_performed')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
           '1' => 'Debridement',
           '2' => 'Tenotomy',
           '3' => 'Osteotomy',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="local_procedure_performed'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="local_procedure_performed'.$index.'">'.$label.'</label>';
          } ]])->label('2. Local procedure performed : ');?>

        <?= $form->field($model, 'local_dressing_performed')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
           '1' => 'Maggot',
           '2' => 'Topical agents',
           '3' => 'Other..........',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="local_dressing_performed'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="local_dressing_performed'.$index.'">'.$label.'</label>';
          } ]])->label('3. Local dressing performed : ');?>

        <?= $form->field($model, 'post_revascularization')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
           'N' => 'N',
           'Y' => 'Y, type .......... duration .......... days .......... months .......... year',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="post_revascularization'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="post_revascularization'.$index.'">'.$label.'</label>';
          } ]])->label('4. Post Revascularization : ');?>

          <div class="row">
<div class="col-lg-2 col-md-2 col-ls-2">
<?= $form->field($model, 'post_hbot')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
           'N' => 'N',
           'Y' => 'Y',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="post_hbot'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="post_hbot'.$index.'">'.$label.'</label>';
          } ]])->label('5. Post HBOT : ');?>
</div>
<div class="col-lg-4 col-md-4 col-sm-4" style="margin-left: -124px;">
<?= $form->field($model, 'period_number')->textInput(['placeholder' => ".........................................."])->label('period number');?>
</div>
</div>
<?= $form->field($model, 'post_amputation')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
           'N' => 'N',
           'Y' => 'Y, type .......... duration .......... days .......... months .......... year',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="post_amputation'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="post_amputation'.$index.'">'.$label.'</label>';
          } ]])->label('6. Post amputation : ');?>


      
</div>
<?php $form = ActiveForm::end(); ?>