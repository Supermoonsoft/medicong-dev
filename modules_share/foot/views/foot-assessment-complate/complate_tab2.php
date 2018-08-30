<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use phpnt\ICheck\ICheck;

?>
<div class="box">
(2) Current foot problem and Examination
</div>
</br>
<div>
1. Chief Complaint 
</div>
<?= $form->field($model, 'chief_complaint')->textArea(['rows' =>4, 'cols' =>200])->label(false); ?>

<table width="100%" class="table table-bordered">
  <tr>
    <td colspan="3" align="center"><strong id="docs-internal-guid-8ffb6b17-7fff-0d44-c1e9-fb8212c67b99" style="font-size: 20px;">2. Dermatologic examination</strong></td>
  </tr>
  <tr>
    <td width="259">&nbsp;</td>
    <td width="186" valign="top"><p align="center"><strong class="table-right">Right  </strong></p></td>
    <td width="198" valign="top"><p align="center"><strong class="table-left">Left</strong></p></td>
  </tr>
  <tr>
    <td><strong id="docs-internal-guid-b225c98d-7fff-d49b-9376-053f290c1ee3">2.1 Hair loss</strong></td>
    <td>
    <?= $form->field($model, 'hair_loss_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>['N'=> 'N','Y' => 'Y'],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-hair_loss_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-hair_loss_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'hair_loss_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>['N'=> 'N','Y' => 'Y'],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-hair_loss_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-hair_loss_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td><strong id="docs-internal-guid-b62a43d3-7fff-1805-2b29-230809e0072b">2.2 Fungal infection</strong></td>
    <td>
    <?= $form->field($model, 'fungal_infection_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>['N'=> 'N','Y' => 'Y'],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-fungal_infection_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-fungal_infection_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'fungal_infection_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>['N'=> 'N','Y' => 'Y'],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-fungal_infection_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-fungal_infection_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td><strong id="docs-internal-guid-16fdd576-7fff-34c0-8d35-f9610baefd10">2.3 Color change</strong></td>
    <td>
    <?= $form->field($model, 'color_change_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> 'Normal',
            '2' => 'Red',
            '3' => 'Pale',
            '4' => 'Dark',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-color_change_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-color_change_right'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'color_change_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> 'Normal',
            '2' => 'Red',
            '3' => 'Pale',
            '4' => 'Dark',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-color_change_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-color_change_left'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td><strong id="docs-internal-guid-a66ea2f1-7fff-93a5-76bb-366bf7e3ed6b">2.4 Skin condition</strong></td>
    <td>
    <?= $form->field($model, 'skin_condition_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> 'Normal',
            '2' => 'Dry',
            '3' => 'Very dry',
            '4' => 'Scaly',
            '5' => 'Rash',
            '6' => 'Erythema',
            '7' => 'Scar',
            '8' => 'Distrophic',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-skin_condition_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-skin_condition_right'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'skin_condition_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> 'Normal',
            '2' => 'Dry',
            '3' => 'Very dry',
            '4' => 'Scaly',
            '5' => 'Rash',
            '6' => 'Erythema',
            '7' => 'Scar',
            '8' => 'Distrophic',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-skin_condition_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-skin_condition_left'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
  </tr>
 
  <tr>
    <td><strong id="docs-internal-guid-90fdf61e-7fff-f41c-d8c3-6afed310312f">2.5 Interspace</strong></td>
    <td>
    <?= $form->field($model, 'interspace_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> 'Clear all',
            '2' => 'Marcerrated',
            '3' => 'Very dry',
            '4' => 'Callus',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-interspace_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-interspace_right'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'interspace_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> 'Clear all',
            '2' => 'Marcerrated',
            '3' => 'Very dry',
            '4' => 'Callus',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-interspace_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-interspace_left'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
  </tr>

  <tr>
    <td><strong id="docs-internal-guid-a2b9f920-7fff-41df-1094-9e8d57056e8f">2.6 Temperature change</strong></td>
    <td>
    <?= $form->field($model, 'temperature_change_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> 'Normal',
            '2' => 'Cold',
            '3' => 'Warm',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-temperature_change_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-temperature_change_right'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'temperature_change_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> 'Normal',
            '2' => 'Cold',
            '3' => 'Warm',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-temperature_change_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-temperature_change_left'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong id="docs-internal-guid-2d5543a5-7fff-8885-9aa4-4656e8b1f338">2.7 Toenail problem</strong>
    </td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td>
    <?= $form->field($model, 'toenail_problem')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> 'N',
            '2' => 'specify type and site',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-toenail_problem'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-toenail_problem'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td><strong id="docs-internal-guid-9395f981-7fff-f12e-0cfc-506a09246094">Fungal nail</strong></td>
    <td>
    <?= $form->field($model, 'fungal_nail_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-fungal_nail_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-fungal_nail_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'fungal_nail_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-fungal_nail_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-fungal_nail_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td><strong id="docs-internal-guid-c1a1c8ba-7fff-03f4-43a0-44e6a3182723">Hypertrophic</strong></td>
    <td>
    <?= $form->field($model, 'hypertrophic_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-hypertrophic_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-hypertrophic_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'hypertrophic_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-hypertrophic_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-hypertrophic_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td><strong id="docs-internal-guid-b0452682-7fff-23f4-eb17-cd8f0d689a99">Distrophic</strong></td>
    <td>
    <?= $form->field($model, 'distrophic_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-distrophic_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-distrophic_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'distrophic_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-distrophic_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-distrophic_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td><strong id="docs-internal-guid-9e9ae953-7fff-3dab-23dd-98656c6c94f2">Discolored</strong></td>
    <td>
    <?= $form->field($model, 'discolored_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-discolored_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-discolored_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'discolored_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-discolored_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-discolored_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td><strong id="docs-internal-guid-db553bd4-7fff-65bb-6596-9790de23f19e">Elongated</strong></td>
    <td>
    <?= $form->field($model, 'elongated_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-elongated_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-elongated_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'elongated_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-elongated_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-elongated_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td><strong id="docs-internal-guid-fa74e740-7fff-7454-09fa-1e0a4e7e1ae9">Ingrown</strong></td>
    <td>
    <?= $form->field($model, 'ingrown_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-ingrown_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-ingrown_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'ingrown_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-ingrown_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-ingrown_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td><strong id="docs-internal-guid-994b8e49-7fff-892b-3c7a-d7b38b64bc4f">Involuted</strong></td>
    <td>
    <?= $form->field($model, 'involuted_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-involuted_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-involuted_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'involuted_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-involuted_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-involuted_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>

  <tr>
  <td>Splitting</td>
  <td>
    <?= $form->field($model, 'splitting_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-splitting_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-splitting_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'splitting_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-splitting_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-splitting_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
  <td>2.8 Skin Lesion></td>
  <td bgcolor="#CCCCCC">&nbsp;</td>
  <td bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
  <td>
  <?= $form->field($model, 'skin_lesion')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            'N'=> 'N',
            'Y' => 'Y, specify type and site  on figure',
           
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-skin_lesion'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-skin_lesion'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
  </td>
  <td>
    <?= $form->field($model, 'skin_lesion_type_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> 'Callus , number………….',
            '2' => 'Com , number………….',
            '3' => 'Wart , number………….',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-skin_lesion_type_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-skin_lesion_type_right'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'skin_lesion_type_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> 'Callus , number………….',
            '2' => 'Com , number………….',
            '3' => 'Wart , number………….',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-skin_lesion_type_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-skin_lesion_type_left'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
  </tr>
</table>


<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table table-bordered">
  <tr>
    <td width="643" colspan="3" valign="top"><p align="center" style="font-size: 20px;"><strong>3. Musculoskeletal examination</strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="259" valign="top"><p align="center">&nbsp;</p></td>
    <td width="186" valign="top"><p align="center"><strong class="table-right">Right  </strong></p></td>
    <td width="198" valign="top"><p align="center"><strong class="table-left">Left</strong></p></td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>
    3.1    Foot type </p></td>
    <td>
    <?= $form->field($model, 'foot_type_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> 'Normal',
            '2' => 'Flatfoot',
            '3' => 'High arch',
            '4' => 'Pronated',
            '5' => 'Supinated',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-foot_type_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-foot_type_right'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'foot_type_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
          '1'=> 'Normal',
            '2' => 'Flatfoot',
            '3' => 'High arch',
            '4' => 'Pronated',
            '5' => 'Supinated',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-foot_type_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-foot_type_left'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>3.2    Silfverskiold    test<strong> </strong></p></td>
    <td>
    <?= $form->field($model, 'silfverskiold_test_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> 'Positive',
            '2' => 'Negative',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-silfverskiold_test_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-silfverskiold_test_right'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
    <td>
    <?= $form->field($model, 'silfverskiold_test_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
          '1'=> 'Positive',
           '2' => 'Negative',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-silfverskiold_test_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-silfverskiold_test_left'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
  </tr>

  <tr>
    <td width="259" valign="top"><p>3.3    Deformities<strong> </strong></p></td>
    <td width="186" valign="top"><p>&nbsp;</p></td>
    <td width="198" valign="top"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="259" valign="top">
    <?= $form->field($model, 'deformities')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
          'N'=> 'N',
          'Y' => 'Y , specify type and site',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-deformities'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-deformities'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    </td>
    <td width="186" valign="top"><p>&nbsp;</p></td>
    <td width="198" valign="top"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>3.3.1 Claw toe<strong> </strong></p></td>
    <td valign="top">
    <?= $form->field($model, 'claw_toe_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-claw_toe_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-claw_toe_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td valign="top">
    <?= $form->field($model, 'claw_toe_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
           '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-claw_toe_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-claw_toe_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>3.3.2 Hammer toe </p></td>
    <td valign="top">
    <?= $form->field($model, 'hammer_toe_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-hammer_toe_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-hammer_toe_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td valign="top">
    <?= $form->field($model, 'hammer_toe_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
           '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-hammer_toe_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-hammer_toe_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>3.3.3 Mallet toe </p></td>
    <td valign="top">
    <?= $form->field($model, 'mallet_toe_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-mallet_toe_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-mallet_toe_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td valign="top">
    <?= $form->field($model, 'mallet_toe_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
           '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-mallet_toe_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-mallet_toe_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>3.3.4 Hallux Valgus<strong> </strong></p></td>
    <td valign="top">
    <?= $form->field($model, 'hallux_valgus_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-hallux_valgus_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-hallux_valgus_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td valign="top">
    <?= $form->field($model, 'hallux_valgus_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
           '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-hallux_valgus_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-hallux_valgus_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>3.3.5 Hallux Varus </p></td>
    <td valign="top">
    <?= $form->field($model, 'hallux_varus_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-hallux_varus_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-hallux_varus_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td valign="top">
    <?= $form->field($model, 'hallux_varus_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
           '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-hallux_varus_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-hallux_varus_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>3.3.6 Hallux Rigidus/Limitus </p></td>
    <td valign="top">
    <?= $form->field($model, 'hallux_rigidus_limitus_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-hallux_rigidus_limitus_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-hallux_rigidus_limitus_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td valign="top">
    <?= $form->field($model, 'hallux_rigidus_limitus_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
           '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-hallux_rigidus_limitus_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-hallux_rigidus_limitus_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>3.3.7 Bunion<strong> </strong></p></td>
    <td valign="top">
    <?= $form->field($model, 'bunion_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-bunion_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-bunion_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td valign="top">
    <?= $form->field($model, 'bunion_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
           '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-bunion_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-bunion_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>3.3.8 Bunionette<strong> </strong></p></td>
    <td valign="top">
    <?= $form->field($model, 'bunionette_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-bunionette_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-bunionette_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td valign="top">
    <?= $form->field($model, 'bunionette_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
           '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-bunionette_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-bunionette_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>3.3.9 Charcot Foot<strong> </strong></p></td>
    <td valign="top">
    <?= $form->field($model, 'charcot_foot_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-charcot_foot_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-charcot_foot_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td valign="top">
    <?= $form->field($model, 'charcot_foot_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
           '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-charcot_foot_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-charcot_foot_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>3.3.10 Post surgical deformity<strong> </strong></p></td>
    <td valign="top">
    <?= $form->field($model, 'post_surgical_deformity_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-post_surgical_deformity_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-post_surgical_deformity_right'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td valign="top">
    <?= $form->field($model, 'post_surgical_deformity_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
           '1'=> '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-post_surgical_deformity_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-post_surgical_deformity_left'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
  </tr>
</table>



<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table table-bordered">
  <tr>
    <td width="643" colspan="3" valign="top"><p align="center" class="table-title"><strong>4. </strong><strong>Neuropathy assessment</strong></p></td>
  </tr>
  <tr>
    <td width="259" valign="top"><p align="center">&nbsp;</p></td>
    <td width="186" valign="top"><p align="center"><strong class="table-right">Right  </strong></p></td>
    <td width="198" valign="top"><p align="center"><strong class="table-left">Left</strong></p></td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>4.1    Neuropathic symptom </p></td>
    <td valign="top" bgcolor="#ddd">&nbsp;</td>
    <td valign="top" bgcolor="#ddd">&nbsp;</td>
  </tr>
  <tr>
    <td width="259" valign="top">
    <?= $form->field($model, 'neuropathic_symptom')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [
            '1' => 'N',
            '2' => 'Y , specify type and site',
        ],
        'color'  => 'green',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessmentcomplate-neuropathic_symptom'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessmentcomplate-neuropathic_symptom'.$index.'">'.$label.'</label>';
          }
      ]])->label(false);?>
    </td>
    <td valign="top">
    <?= $form->field($model, 'neuropathic_symptom_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> 'Numbness',
            '2' => 'Pain',
            '3' => 'Pins & Needles',
            '4' => 'Burning',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-neuropathic_symptom_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-neuropathic_symptom_right'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
    <td valign="top">
    <?= $form->field($model, 'neuropathic_symptom_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> 'Numbness',
            '2' => 'Pain',
            '3' => 'Pins & Needles',
            '4' => 'Burning',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-neuropathic_symptom_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-neuropathic_symptom_left'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>4.2    Monofilament (10g)<strong> </strong></p></td>
    <td valign="top">
    <?= $form->field($model, 'monofilament_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> 'Intact',
            '2' => 'Impair',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-monofilament_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-monofilament_right'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
    <td valign="top">
    <?= $form->field($model, 'monofilament_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> 'Intact',
            '2' => 'Impair',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-monofilament_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-monofilament_left'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>4.3    Tuning fork (128 Hz) at hallux<strong></strong></p></td>
    <td valign="top">
    <?= $form->field($model, 'tuning_fork_right')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
            '1'=> 'Intact',
            '2' => 'Diminish',
            '3' => 'Impair',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-tuning_fork_right'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-tuning_fork_right'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
    <td valign="top">
    <?= $form->field($model, 'tuning_fork_left')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
             '1'=> 'Intact',
            '2' => 'Diminish',
            '3' => 'Impair',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-tuning_fork_left'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-tuning_fork_left'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
  </tr>
</table>


<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table table-bordered">
  <tr>
    <td width="643" colspan="3" valign="top"><p class="table-title" align="center"><strong>5. </strong><strong>Vascular assessment</strong></p></td>
  </tr>
  <tr>
    <td width="259" valign="top"><p align="center">&nbsp;</p></td>
    <td width="186" valign="top"><p align="center"><strong class="table-right">Right  </strong></p></td>
    <td width="198" valign="top"><p align="center"><strong class="table-left">Left</strong></p></td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>5.1    Vascular symptom </p></td>
    <td width="186" valign="top">&nbsp;</td>
    <td width="198" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>&nbsp;</p></td>
    <td width="186" valign="top">&nbsp;</td>
    <td width="198" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>5.1.1    Intermittent claudication<strong> </strong></p></td>
    <td width="186" valign="top">&nbsp;</td>
    <td width="198" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>5.1.2    Rest pain </p></td>
    <td width="186" valign="top">&nbsp;</td>
    <td width="198" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>5.1.3    Gangrene</p></td>
    <td width="186" valign="top">&nbsp;</td>
    <td width="198" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>5.1.4    Edema , specfify type<strong> </strong></p></td>
    <td width="186" valign="top">&nbsp;</td>
    <td width="198" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>pitting    edema<strong> </strong></p></td>
    <td width="186" valign="top">&nbsp;</td>
    <td width="198" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>non-pitting    edema<strong> </strong></p></td>
    <td width="186" valign="top">&nbsp;</td>
    <td width="198" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>5.2    Vessel palpation<strong> </strong></p></td>
    <td width="186" valign="top">&nbsp;</td>
    <td width="198" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="259" valign="top"><p><strong>&nbsp;</strong></p></td>
    <td width="186" valign="top">&nbsp;</td>
    <td width="198" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>5.3    Doppler<strong> </strong></p></td>
    <td width="186" valign="top">&nbsp;</td>
    <td width="198" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="259" valign="top"><p><strong>&nbsp;</strong></p></td>
    <td width="186" valign="top">&nbsp;</td>
    <td width="198" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="259" valign="top"><p><strong>&nbsp;</strong></p></td>
    <td width="186" valign="top">&nbsp;</td>
    <td width="198" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="259" valign="top"><p><strong>&nbsp;</strong></p></td>
    <td width="186" valign="top">&nbsp;</td>
    <td width="198" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>5.4    Ankle/Brachial Index (ABI)<strong> </strong></p></td>
    <td width="186" valign="top">&nbsp;</td>
    <td width="198" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="259" valign="top"><p><strong>&nbsp;</strong></p></td>
    <td width="186" valign="top">&nbsp;</td>
    <td width="198" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>5.5    Toe pressure (mmHg)<strong> </strong></p></td>
    <td width="186" valign="top">&nbsp;</td>
    <td width="198" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="259" valign="top"><p>5.6    Toe/Brachial Index (TBI)<strong> </strong></p></td>
    <td width="186" valign="top">&nbsp;</td>
    <td width="198" valign="top">&nbsp;</td>
  </tr>
</table>