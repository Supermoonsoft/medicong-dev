<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use phpnt\ICheck\ICheck;

?>
<div class="box">
(3)    Footwear assessment
</div>
<table width="100%" class="table table-bordered">
<thead>
  <tr>
    <th valign="top"><p align="center">&nbsp;</p></th>
    <th valign="top"><p class="table-right" align="center"><strong>Right  </strong></p></th>
    <th valign="top"><p class="table-left"align="center"><strong>Left</strong></p></th>
    <th valign="top"><p align="center"><strong>&nbsp;</strong></p></th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td valign="top"><p>3.1    Foot size  </p></td>
    <td valign="top"><p>
    <?= $form->field($model, 'foot_size_right')->textInput()->label(false);?>
    </p></td>
    <td valign="top"><p>
    <?= $form->field($model, 'foot_size_right')->textInput()->label(false);?>
    </p></td>
    <td valign="top"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td valign="top"><p>3.2    Type of footwear(indoor)</p></td>
    <td valign="top"><p>3.3 Type of footwear (outdoor) </p></td>
    <td valign="top"><p>3.4 Type of footwear(exercise) </p></td>
    <td valign="top"><p>3.5 Sock </p></td>
  </tr>
  <tr>
    <td valign="top">
    <td valign="top">
    <?= $form->field($model, 'type_of_footwear_indoor')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
             '1'=> 'Barefoot',
            '2' => 'Socks only',
            '3' => 'Sandal',
            '4' => 'Sandal with back strap',
            '5' => 'Customized Shoes',
            '6' => 'Sneaker',
            '7' => 'Sport shoes',
            '8' => 'Other ……………………',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-type_of_footwear_indoor'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-type_of_footwear_indoor'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
    </td>
    <td valign="top">
    <?= $form->field($model, 'type_of_footwear_outdoor')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
             '1'=> 'Barefoot',
            '2' => 'Socks only',
            '3' => 'Sandal',
            '4' => 'Sandal with back strap',
            '5' => 'Customized Shoes',
            '6' => 'Sneaker',
            '7' => 'Sport shoes',
            '8' => 'Other ……………………',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-type_of_footwear_outdoor'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-type_of_footwear_outdoor'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>
    <td valign="top">
    <?= $form->field($model, 'type_of_footwear_exercise')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    =>[
             '1'=> 'Barefoot',
            '2' => 'Socks only',
            '3' => 'Sandal',
            '4' => 'Sandal with back strap',
            '5' => 'Customized Shoes',
            '6' => 'Sneaker',
            '7' => 'Sport shoes',
            '8' => 'Other ……………………',
        ],
        'color'  => 'red',
        'options' => [
          'item' => function ($index, $label, $name, $checked, $value){
              return '<input type="radio" id="footassessment-type_of_footwear_exercise'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="footassessment-type_of_footwear_exercise'.$index.'">'.$label.'</label></br>';
          }
      ]])->label(false);?>
    </td>

  </tr>
  </tbody>
</table>