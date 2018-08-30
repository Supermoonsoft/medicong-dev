<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use phpnt\ICheck\ICheck;
use app\components\PatientHelper;
$hn = PatientHelper::getCurrentHn();
$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
$this->registerCss($this->render('../../dist/css/style.css'));
?>
  <style>
    .field-footassessmentsummary-right_claw_toe {display: inline-block;}
    .field-footassessmentsummary-right_hammer_toe {display: inline-block;}
    .field-footassessmentsummary-right_maillet_toe {display: inline-block;}
    .field-footassessmentsummary-right_callus {display: inline-block;}
    .field-footassessmentsummary-right_corn {display: inline-block;}
    .field-footassessmentsummary-left_claw_toe {display: inline-block;}
    .field-footassessmentsummary-left_hammer_toe {display: inline-block;}
    .field-footassessmentsummary-left_maillet_toe {display: inline-block;}
    .field-footassessmentsummary-left_callus {display: inline-block;}
    .field-footassessmentsummary-left_corn {display: inline-block;}
    .field-footassessmentsummary-risk_of_foot_ulceration {display: inline-block;margin-left: 42px;}
  </style>
  <h3 style="color:#777;margin-left: 20px;">IPD DIABETIC FOOT ASSESSMENT RECORD : SUMMARY</h3>
<div class="box-content">
  <?php $form = ActiveForm::begin(); ?>
        <div class="box">Risk of foot ulceration</div>
        <?= $form->field($model, 'risk_of_foot_ulceration')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>['L'=> 'Low','M' => 'Moderate','H'=> 'High'],
        'color'  => 'red',                   // цвет
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-risk_of_foot_ulceration'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-risk_of_foot_ulceration'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
          <table width="1106" border="1" class="table table-bordered">
            <tr>
              <td colspan="3" align="center">Details of foot examination</td>
            </tr>
            <tr>
              <td width="278" align="center">&nbsp;</td>
              <td width="342" align="center" style="font-size: 20px;">Right</td>
              <td width="464" align="center" style="font-size: 20px;">Left</td>
            </tr>
            <tr>
              <td>1.
                <strong> Neuropathy assessment</strong>
              </td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>1.1 Monofilament (10g)</td>
              <td>
        <?= $form->field($model, 'right_monofilament')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['0'=> 'intact','1' => 'impair'],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-right_monofilament'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-right_monofilament'.$index.'">'.$label.'</label>';
          }]])->label(false);?>
              </td>
              <td>
                <?= $form->field($model, 'left_monofilament')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['0'=> 'intact','1' => 'impair'],
        'color'  => 'yellow',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-left_monofilament'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-left_monofilament'.$index.'">'.$label.'</label>';
          }]])->label(false);?>
              </td>
            </tr>
            <tr>
              <td>1.2 Tuning fork (128 HZ) at halux</td>
              <td>
                <?= $form->field($model, 'right_tuning_fork')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['0'=> 'intact ','1' => 'diminish ','2' => 'impair'],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-right_tuning_fork'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-right_tuning_fork'.$index.'">'.$label.'</label>';
          }]])->label(false);?>
              </td>
              <td>
                <?= $form->field($model, 'left_tuning_fork')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['0'=> 'intact ','1' => 'diminish ','2' => 'impair'],
        'color'  => 'yellow',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-left_tuning_fork'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-left_tuning_fork'.$index.'">'.$label.'</label>';
          }]])->label(false);?>
              </td>
            </tr>
            <tr>
              <td>2. Vascular assessment</td>
              <td>
              </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>2.1 Vessel palpation</td>
              <td>
                <?= $form->field($model, 'right_dp')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['0'=> '0','1' => '1','2' => '2'],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-right_dp'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-right_dp'.$index.'">'.$label.'</label>';
          }]])->label(false);?>
                  <?= $form->field($model, 'right_pt')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['0'=> '0','1' => '1','2' => '2'],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-right_pt'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-right_pt'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
              </td>
              <td>

                <?= $form->field($model, 'left_dp')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['0'=> '0','1' => '1','2' => '2'],
        'color'  => 'yellow',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-left_dp'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-left_dp'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);
         ?>
                  <?= $form->field($model, 'left_pt')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['0'=> '0','1' => '1','2' => '2'],
        'color'  => 'yellow',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-left_pt'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-left_pt'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
              </td>
            </tr>
            <tr>
              <td>2.2 Ankle/Brachial Index (ABI)</td>
              <td>
                <?= $form->field($model, 'right_abi')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['0'=> '0','1' => '1','2' => '2'],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-right_abi'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-right_abi'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
                  <?= $form->field($model, 'right_abi_non')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['Y'=> 'Non-compressible(> 1.3)'],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="checkbox" id="footassessment-right_abi_non'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-right_abi_non'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
              </td>
              <td>
                <?= $form->field($model, 'left_abi')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['0'=> '0','1' => '1','2' => '2'],
        'color'  => 'yellow',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-left_abi'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-left_abi'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
                  <?= $form->field($model, 'left_abi_non')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['Y'=> 'Non-compressible(> 1.3)'],
        'color'  => 'yellow',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="checkbox" id="footassessment-left_abi_non'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-left_abi_non'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
              </td>
            </tr>
            <tr>
              <td>
                <strong>3. Foot deformities</strong>
              </td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>3.1 Claw toe/Hammer toe/Maillet toe</td>
              <td>
                <?= $form->field($model, 'right_claw_toe')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-right_claw_toe'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-right_claw_toe'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?> |
                  <?= $form->field($model, 'right_hammer_toe')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-right_hammer_toe'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-right_abi'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?> |
                    <?= $form->field($model, 'right_maillet_toe')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-right_maillet_toe'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-right_maillet_toe'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
              </td>
              <td>
                <?= $form->field($model, 'left_claw_toe')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'yellow',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-left_claw_toe'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-left_claw_toe'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?> |
                  <?= $form->field($model, 'left_hammer_toe')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'yellow',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-left_hammer_toe'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-left_abi'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?> |
                    <?= $form->field($model, 'left_maillet_toe')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'yellow',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-left_maillet_toe'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-left_maillet_toe'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
              </td>
            </tr>
            <tr>
              <td>3.2 hallux Valgus</td>
              <td>
                <?= $form->field($model, 'right_hallux_algus')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-right_hallux_algus'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-right_hallux_algus'.$index.'">'.$label.'</label>';
          }
      ]])->label(false) ?>
              </td>
              <td>
                <?= $form->field($model, 'left_hallux_algus')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'yellow',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-left_hallux_algus'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-left_hallux_algus'.$index.'">'.$label.'</label>';
          }
      ]])->label(false) ?>
              </td>
            </tr>
            <tr>
              <td>3.4 flat foot</td>
              <td>
                <?= $form->field($model, 'right_flat_foot')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-right_hallux_algus'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-right_hallux_algus'.$index.'">'.$label.'</label>';
          }
      ]])->label(false) ?>
              </td>
              <td>
                <?= $form->field($model, 'left_flat_foot')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'yellow',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-left_hallux_algus'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-left_hallux_algus'.$index.'">'.$label.'</label>';
          }
      ]])->label(false) ?>
              </td>
            </tr>
            <tr>
              <td>3.5 charcot Foot</td>
              <td>
                <?= $form->field($model, 'right_charcot_foot')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-right_hallux_algus'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-right_hallux_algus'.$index.'">'.$label.'</label>';
          }
      ]])->label(false)?>
              </td>
              <td>
                <?= $form->field($model, 'left_charcot_foot')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'yellow',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-left_hallux_algus'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-left_hallux_algus'.$index.'">'.$label.'</label>';
          }
      ]])->label(false)?>
              </td>
            </tr>
            <tr>
              <td>3.6 Post surgical deformity</td>
              <td>
                <?= $form->field($model, 'right_post_surgical_deformity')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-right_hallux_algus'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-right_hallux_algus'.$index.'">'.$label.'</label>';
          }
      ]])->label(false) ?>
              </td>
              <td>
                <?= $form->field($model, 'left_post_surgical_deformity')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'yellow',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-left_hallux_algus'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-left_hallux_algus'.$index.'">'.$label.'</label>';
          }
      ]])->label(false) ?>
              </td>
            </tr>
            <tr>
              <td>
                <strong>4. Skin and toenails condition</strong>
              </td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>4.1 Callus/Corn/Wart</td>
              <td>
                <?= $form->field($model, 'right_callus')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-right_hallux_algus'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-right_hallux_algus'.$index.'">'.$label.'</label>';
          }
      ]])->label(false)?> :
                  <?= $form->field($model, 'right_corn')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-right_hallux_algus'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-right_hallux_algus'.$index.'">'.$label.'</label>';
          }
      ]])->label(false) ?>
              </td>
              <td>
                <?= $form->field($model, 'left_callus')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'yellow',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-left_hallux_algus'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-left_hallux_algus'.$index.'">'.$label.'</label>';
          }
      ]])->label(false)?> :
                  <?= $form->field($model, 'left_corn')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'yellow',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-left_hallux_algus'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-left_hallux_algus'.$index.'">'.$label.'</label>';
          }
      ]])->label(false) ?>
              </td>
            </tr>
            <tr>
              <td>4.2 Nails</td>
              <td>
                <?= $form->field($model, 'right_nails')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'Normal  / ','AB' => 'Abnormal',],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-right_hallux_algus'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-right_hallux_algus'.$index.'">'.$label.'</label>';
          }
      ]])->label(false); ?>
              </td>
              <td>
                <?= $form->field($model, 'left_nails')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'Normal  / ','AB' => 'Abnormal',],
        'color'  => 'yellow',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-left_hallux_algus'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-left_hallux_algus'.$index.'">'.$label.'</label>';
          }
      ]])->label(false); ?>
              </td>
            </tr>
            <tr>
              <td>
                <strong>5. Previon foot ulcer</strong>
              </td>
              <td>
                <?= $form->field($model, 'right_previon_foot_ulcer')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-right_hallux_algus'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-right_hallux_algus'.$index.'">'.$label.'</label>';
          }
      ]])->label(false) ?>
              </td>
              <td>
                <?= $form->field($model, 'left_previon_foot_ulcer')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'yellow',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-left_hallux_algus'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-left_hallux_algus'.$index.'">'.$label.'</label>';
          }
      ]])->label(false) ?>

              </td>
            </tr>
            <tr>
              <td>
                <strong>6. Previous</strong>
              </td>
              <td>
                <?= $form->field($model, 'right_previon_amputation')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-right_hallux_algus'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-right_hallux_algus'.$index.'">'.$label.'</label>';
          }
      ]])->label(false) ?>

              </td>
              <td>
                <?= $form->field($model, 'left_previon_amputation')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => ['N'=> 'N / ','Y' => 'Y'],
        'color'  => 'yellow',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-left_hallux_algus'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-left_hallux_algus'.$index.'">'.$label.'</label>';
          }
      ]])->label(false) ?>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
    
        <div class="box">Suggestion fir prevention of foot ulcer and education</div>
        <hr>
        <?= $form->field($model, 'daily_foot')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>['Y'=> 'ตรวจเท้าทุกวัน(Daily foot examination should be done)'],
        'color'  => 'red',                   // цвет
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="checkbox" id="footassessment-daily_foot'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-daily_foot'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>

          <?= $form->field($model, 'always_wear')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>['Y'=> 'การใส่รองเท้าที่เหมาะสมอยู่สม่ำเสมอ ไม่เดินเท้าเปล่า (Alway wear proper shoe,do not walk with barefoot)'],
        'color'  => 'red',                   // цвет
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="checkbox" id="footassessment-always_wear'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-always_wear'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>

            <?= $form->field($model, 'regular_callus')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>['Y'=> 'ท่านมีหนังหนาควรได้รับการตัดออกอย่างสม่ำเสมอ (Regular callus removal id nececssary)'],
        'color'  => 'red',                   // цвет
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="checkbox" id="footassessment-regular_callus'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-regular_callus'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>

              <?= $form->field($model, 'avoid_foot')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>['Y'=> 'ควรหลีกเลี่ยงเท้าไม่สัมผัสกับของร้อน(Avoid foot contact eith heat)'],
        'color'  => 'red',                   // цвет
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="checkbox" id="footassessment-avoid_foot'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-avoid_foot'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>

                <?= $form->field($model, 'contact_your')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>['Y'=> 'หามีแผลหรือนิ้วเท้าเปลี่ยนสีควรรีบปรึกษาแพทย์(Contact you physician if ulcer or discoloration of skin appear)'],
        'color'  => 'red',                   // цвет
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="checkbox" id="footassessment-contact_your'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-contact_your'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
     
  <?php $form = ActiveForm::end(); ?>
  </div>