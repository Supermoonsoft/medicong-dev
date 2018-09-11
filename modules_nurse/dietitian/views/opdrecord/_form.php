<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\checkbox\CheckboxX;
use yii\helpers\Url;
use app\components\PatientHelper;

$hn = PatientHelper::getCurrentHn();
$vn = PatientHelper::getCurrentVn();
?>

<center><h4>OPD NURTITION VISIT RECORD</h4></center>


<?php
$form = ActiveForm::begin([
            'method' => 'post',
            'action' => ['opdrecord/create'],
        ]);
?>
<?= $form->field($model, 'vn')->hiddenInput(['maxlength' => true, 'value' => $vn])->label(FALSE); ?>
<?= $form->field($model, 'hn')->hiddenInput(['maxlength' => true, 'value' => $hn])->label(FALSE); ?>

<div class="row" style="margin-top:40px;">
    <div class="col-md-2">Principal Diagnosis </div>
    <div  class="col-md-2" >  
        <?php
        /* echo $form->field($model, 'hn', [
          //'pluginOptions' => ['threeState' => false]
          //'template' => '{input}{error}{hint}',
          //'labelOptions' => ['class' => 'cbx-label']
          ])->widget(CheckboxX::classname())->label(FALSE); */
        echo CheckboxX::widget([
            'name' => 'dm',
            'id' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">DM</label>';
        ?>

    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 't1',
            'id' => 't1',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">T1</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'id' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">T2</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'uncertain',
            'id' => 'uncertain',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Uncertain</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'dmwith',
            'id' => 'dmwith',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">DM With Foot ulcer </label>';
        ?>
    </div>
</div>

<div class="row" style="margin-top:10px">
    <div class="col-md-2"></div>
    <div  class="col-md-2"  > 
        <?php
        echo CheckboxX::widget([
            'name' => 'thyroid',
            'id' => 'thyroid',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Thyroid</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'thyroiddectomy',
            'id' => 'thyroiddectomy',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">S/P Thyroiddectomy</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'i131',
            'id' => 'i131',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">i-131 RX</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'befor',
            'id' => 'befor',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Befor</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'after',
            'id' => 'after',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">After</label>';
        ?>
    </div>
</div>
<div class="row" style="margin-top:10px">
    <div class="col-md-2"></div>
    <div  class="col-md-2"  > 
        <?php
        echo CheckboxX::widget([
            'name' => 'obesity',
            'id' => 'obesity',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Obesity</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'ht',
            'id' => 'ht',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">HT</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'dlp',
            'id' => 'dlp',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">DLP</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'cad',
            'id' => 'cad',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">CAD</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'chf',
            'id' => 'chf',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">CHF</label>';
        ?>
    </div>
</div>
<div class="row" style="margin-top:10px">
    <div class="col-md-2"></div>
    <div  class="col-md-2"  > 
        <?php
        echo CheckboxX::widget([
            'name' => 'ckd',
            'id' => 'ckd',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">CKD (with out RRF)</label>';
        ?>
    </div>
    <div  class="col-md-4 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'malignancy',
            'id' => 'malignancy',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Malignancy</label>';
        echo '<input type="text" style="margin-left:10px" >';
        ?>
    </div>
    <div  class="col-md-2"  > 
        <?php
        echo CheckboxX::widget([
            'name' => 'chemotherapy',
            'id' => 'chemotherapy',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Chemotherapy</label>';
        ?>
    </div>
    <div  class="col-md-2"  > 
        <?php
        echo CheckboxX::widget([
            'name' => 'radiation',
            'id' => 'radiation',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Radiation</label>';
        ?>
    </div>

</div>
<div class="row" style="margin-top:10px">
    <div class="col-md-2"></div>

    <div  class="col-md-10 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'other',
            'id' => 'other',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Other</label>';
        echo '<input style="margin-left:10px" type="text" >';
        ?>
    </div>

</div>

<div class="row" style="margin-top:10px">
    <div class="col-md-2">Nutritional history</div>

    <div  class="col-md-10 "> 
        <?= $form->field($model, 'nutritional_histiry')->textarea(['rows' => 5, 'cols' => 130])->label(FALSE); ?>

    </div>

</div>

<div class="row" style="margin-top:10px">
    <div class="well well-sm">Lab Result Today</div>
    <div class="row">
        <div class="col-md-2"><p align="right"> PG</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'pg')->textInput()->label(FALSE); ?> </div>
        <div class="col-md-2"><p align="right"> Bun</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'bun')->textInput()->label(FALSE); ?>  </div>
        <div class="col-md-2"><p align="right"> Albumin</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'albumin')->textInput()->label(FALSE); ?> </div>
    </div>
    <div class="row">
        <div class="col-md-2"><p align="right"> A1c</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'a1c')->textInput()->label(FALSE); ?> </div>
        <div class="col-md-2"><p align="right"> Cr</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'cr')->textInput()->label(FALSE); ?>  </div>
        <div class="col-md-2"><p align="right"> Calcium</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'calcium')->textInput()->label(FALSE); ?>  </div>
    </div>
    <div class="row">
        <div class="col-md-2"><p align="right"> Tc</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'tc')->textInput()->label(FALSE); ?> </div>
        <div class="col-md-2"><p align="right"> eGFR</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'egfr')->textInput()->label(FALSE); ?> </div>
        <div class="col-md-2"><p align="right"> Phosphorus</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'phosphorus')->textInput()->label(FALSE); ?> </div>
    </div>
    <div class="row">
        <div class="col-md-2"><p align="right"> TG</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'tg')->textInput()->label(FALSE); ?> </div>
        <div class="col-md-2"><p align="right"> Sodium</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'sodium')->textInput()->label(FALSE); ?> </div>
        <div class="col-md-2"><p align="right"> Magnesium</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'magnesium')->textInput()->label(FALSE); ?>  </div>
    </div>

    <div class="row">
        <div class="col-md-2"><p align="right"> HDL-C</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'hdl_c')->textInput()->label(FALSE); ?> </div>
        <div class="col-md-2"><p align="right"> Potassium</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'potassium')->textInput()->label(FALSE); ?>  </div>
        <div class="col-md-2"><p align="right"> Uric Asid</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'uric_acid')->textInput()->label(FALSE); ?> </div>
    </div>

    <div class="row">
        <div class="col-md-2"><p align="right"> LDL-C</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'ldl_c')->textInput()->label(FALSE); ?>  </div>
        <div class="col-md-2"><p align="right"> Chloride</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'chloride')->textInput()->label(FALSE); ?>  </div>
        <div class="col-md-2"><p align="right"> Hb</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'hb')->textInput()->label(FALSE); ?>  </div>
    </div>
    <div class="row">
        <div class="col-md-2"><p align="right"> NON HDL-C</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'non_hdl_c')->textInput()->label(FALSE); ?></div>
        <div class="col-md-2"><p align="right"> CO2</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'co2')->textInput()->label(FALSE); ?> </div>
        <div class="col-md-2"><p align="right"> ALT</p> </div>
        <div class="col-md-2"> <?= $form->field($model, 'alt_lab')->textInput()->label(FALSE); ?>  </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-2"><h3>IDNT diagnosis</h3></div>
        <div class="col-md-2" style="margin-top:18px "> <?= $form->field($model, 'idnt_diag1')->textInput(['placeholder' => '1'])->label(FALSE); ?></div>
        <div class="col-md-2" style="margin-top:18px "> <?= $form->field($model, 'idnt_diag2')->textInput(['placeholder' => '2'])->label(FALSE); ?> </div>
        <div class="col-md-2" style="margin-top:18px "> <?= $form->field($model, 'idnt_diag3')->textInput(['placeholder' => '3'])->label(FALSE); ?> </div>
        <div class="col-md-2" style="margin-top:18px "> <?= $form->field($model, 'idnt_diag4')->textInput(['placeholder' => '4'])->label(FALSE); ?> </div>
        <div class="col-md-2" style="margin-top:18px "> <?= $form->field($model, 'idnt_diag5')->textInput(['placeholder' => '5'])->label(FALSE); ?> </div>
    </div>


</div>

<div class="row" style="margin-top:10px">
    <div class="col-md-4">
        <div class="well well-sm">Client subjective data</div>
        <div class="col-md-9"> - Stage of chang</div>
        <div class="col-md-3"><?= $form->field($model, 'stage_of_chang')->textInput(['placeholder' => '1-5'])->label(FALSE); ?></div>


    </div>
    <div class="col-md-8">
        <div class="well well-sm">Target of behavior midification</div>
        <div class="col-md-6">

            <div class="col-md-9">1) At least 2 servings of fish/wk.</div>
            <div class="col-md-3"><?= $form->field($model, 'lest_2_serving')->textInput(['placeholder' => '1-5'])->label(FALSE); ?></div>
            <div class="col-md-9">2) Limit high fat or fried food less then 2 meals/d</div>
            <div class="col-md-3"><?= $form->field($model, 'limit_high')->textInput(['placeholder' => '1-5'])->label(FALSE); ?></div>
            <div class="col-md-9" style="margin-top:7px">3) Control protein intake</div>
            <div class="col-md-3"><?= $form->field($model, 'control_protein')->textInput(['placeholder' => '1-5'])->label(FALSE); ?></div>
            <div class="col-md-9" style="margin-top:7px">4) Control CHO intake</div>
            <div class="col-md-3"><?= $form->field($model, 'control_cho')->textInput(['placeholder' => '1-5'])->label(FALSE); ?></div>
            <div class="col-md-9" style="margin-top:7px">5) limit added sugar,high CHO snack and beverage less than</div>
            <div class="col-md-3"><?= $form->field($model, 'limit_added_sugar')->textInput(['placeholder' => '1-5'])->label(FALSE); ?></div>
        </div>

        <div class="col-md-6">

            <div class="col-md-9">6) Control fruit intake.</div>
            <div class="col-md-3"><?= $form->field($model, 'control_fruit')->textInput(['placeholder' => '1-5'])->label(FALSE); ?></div>
            <div class="col-md-9" style="margin-top:7px">7) At least 4 serving of leafy vegetable/d</div>
            <div class="col-md-3"><?= $form->field($model, 'least_4_serving')->textInput(['placeholder' => '1-5'])->label(FALSE); ?></div>
            <div class="col-md-9" style="margin-top:7px">8) Limit sodium intake</div>
            <div class="col-md-3"><?= $form->field($model, 'limit_sodium')->textInput(['placeholder' => '1-5'])->label(FALSE); ?></div>
            <div class="col-md-9" style="margin-top:7px">9) Limit alcohol intake</div>
            <div class="col-md-3"><?= $form->field($model, 'limit_alcohol')->textInput(['placeholder' => '1-5'])->label(FALSE); ?></div>
            <div class="col-md-9" style="margin-top:7px">10) Pysical activity Describe Type/Duration/Time per wk.</div>
            <div class="col-md-3"><?= $form->field($model, 'physical_activity')->textInput(['placeholder' => '1-5'])->label(FALSE); ?></div>
        </div>

    </div>

</div>
<hr>
<div class="row">
    <div class="col-md-6">
        <div class="col-md-3" style="text-align: ri">
            <h5>Next Follow Up : </h5>
        </div>
        <div class="col-md-2" style="margin-top: 10px">
            <?php $list = [0 => ' N', 1 => ' Y']; ?>
            <?= $form->field($model, 'next_follow_check')->radioList($list, ['inline' => true])->label(FALSE); ?>
        </div>
        <div class="col-md-7" > <?= $form->field($model, 'next_followup')->textInput(['placeholder' => 'date'])->label(FALSE); ?> </div>

    </div>
</div>



<div class="form-group" style="text-align: right;">
    <?= Html::a("Reset", Url::toRoute(['index']), ['class' => 'btn btn-danger', 'style' => 'width:100px;height:50px;font-size:16px']) ?>
    <?= Html::submitButton('Save', ['class' => 'btn btn-success', 'style' => 'width:100px;height:50px']) ?>
</div>



<?php ActiveForm::end(); ?>