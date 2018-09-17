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

<center><h4>OPD NURTITION ASSESSMENT FOR HEMODIALY PATIENT</h4></center>

<?php
$form = ActiveForm::begin([
            'method' => 'post',
            'action' => ['opdassessment/create'],
        ]);
?>

<?= $form->field($model, 'vn')->hiddenInput(['maxlength' => true, 'value' => $vn])->label(FALSE); ?>
<?= $form->field($model, 'hn')->hiddenInput(['maxlength' => true, 'value' => $hn])->label(FALSE); ?>


<div class="row" style="margin-top:30px">
    <div class="col-md-3">
        <?=
        $form->field($model, 'visit_type')->widget(ICheck::className(), [
            'type' => ICheck::TYPE_RADIO_LIST,
            'style' => ICheck::STYLE_FLAT,
            'items' => [1 => 'First Visit', 2 => 'Follow up visit'],
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

<div class="row" style="margin-top:20px;">
    <div class="col-md-2">Co-morbidities </div>
    <div  class="col-md-2" > 
        <?php
        echo CheckboxX::widget([
            'name' => 'as_dm',
            'id' => 'as_dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">DM</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'as_t1',
            'id' => 'as_t1',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">T1</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'as_t2',
            'id' => 'as_t2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">T2</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'as_uncertain',
            'id' => 'as_uncertain',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Uncertain</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'as_dmwith',
            'id' => 'as_dmwith',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">DM With Foot ulcer </label>';
        ?>
    </div>
</div>
<div class="row" style="margin-top:5px;">
    <div class="col-md-2"> </div>
    <div  class="col-md-2" > 
        <?php
        echo CheckboxX::widget([
            'name' => 'as_thyroid',
            'id' => 'as_thyroid',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Thyroid</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'as_obesity',
            'id' => 'as_obesity',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Obesity</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
             'name' => 'as_ht',
            'id' => 'as_ht',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">HT</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
             'name' => 'as_dlp',
            'id' => 'as_dlp',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">DLP</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
             'name' => 'as_cad',
            'id' => 'as_cad',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">CAD </label>';
        ?>
    </div>
</div>

<div class="row" style="margin-top:5px;">
    <div class="col-md-2"> </div>
    <div  class="col-md-2" > 
        <?php
        echo CheckboxX::widget([
             'name' => 'as_chf',
            'id' => 'as_chf',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">CHF</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
             'name' => 'cva',
            'id' => 'cva',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">CVA</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
             'name' => 'as_malignancy',
            'id' => 'as_malignancy',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Malignancy</label>';
        ?>
    </div>
    <div  class="col-md-4 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'as_other',
            'id' => 'as_other',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Other</label>';
        ?>
        <input type="text"  name="other_comment" >
    </div>

</div>

<div class="row" style="margin-top:5px;">
    <div class="col-md-2"> Type of HD</div>
    <div  class="col-md-10" > 
        <?php
        echo CheckboxX::widget([
            'name' => 'acute_hd',
            'id' => 'acute_hd',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Acute HD,Starting date </label>';
        ?>
        <input type="text" name="acute_date"> The number of HD  <input type="text" name="number_hd" > 

    </div>


</div>
<div class="row" style="margin-top:5px;">
    <div class="col-md-2"> </div>
    <div  class="col-md-10" > 
        <?php
        echo CheckboxX::widget([
            'name' => 'chronic_hd',
            'id' => 'chronic_hd',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Chronic HD,Duration</label>';
        ?>
        <input type="text" name="duration_day" style="width: 50px" > d  <input type="text" name="duration_month" style="width: 50px" > m 
        <input type="text" name ="duration_year" style="width: 50px" > y Frequency  <input type="text" name="frequency" style="width: 50px" > /wk
        Dialysis time <input name="dialysis_time" type="text" > hrs/session

    </div>


</div>

<div class="row" style="margin-top:5px;">
    <div class="col-md-2" style="font-size: 18px">Nutriional history : </div>

</div>

<div class="row" style="margin-top:5px;">

    <div class="col-md-12"> 

        Chewing and swallowing problems



        <?php
        echo CheckboxX::widget([
            'name' => 'chew_n',
            'id' => 'chew_n',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> N</label>';
        ?>

        <?php
        echo CheckboxX::widget([
            'name' => 'chew_y',
            'id' => 'chew_y',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Y</label>';
        ?>
        <input type="text" name="chew_detail" style="width: 70%"  >

    </div>


</div>

<div class="row" style="margin-top:5px;">

    <div  class="col-md-2" > 
        Impaired vision
    </div  >
    <div class="col-md-10">



        <?php
        echo CheckboxX::widget([
            'name' => 'vision_n',
            'id' => 'vision_n',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> N</label>';
        ?>

        <?php
        echo CheckboxX::widget([
             'name' => 'vision_y',
            'id' => 'vision_y',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Y</label>';
        ?>
        <input type="text" name="vision_detail" style="width: 30%"  >
        Impaired hearing 
        <?php
        echo CheckboxX::widget([
            'name' => 'hearing_n',
            'id' => 'hearing_n',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> N</label>';
        ?>

        <?php
        echo CheckboxX::widget([
            'name' => 'hearing_y',
            'id' => 'hearing_y',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Y</label>';
        ?>
        <input type="text" name="hearing_detail" style="width: 34%"  >

    </div>


</div>

<div class="row" style="margin-top:5px;">


    <div  class="col-md-2" > 
        Food Allergy 
    </div  >
    <div class="col-md-10">

        <?php
        echo CheckboxX::widget([
            'name' => 'allergy_n',
            'id' => 'allergy_n',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> N</label>';
        ?>

        <?php
        echo CheckboxX::widget([
             'name' => 'allergy_y',
            'id' => 'allergy_y',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Y</label>';
        ?>
        <input type="text" name="allergy_detail" style="width: 30%"  >

    </div>


</div>

<div class="row" style="margin-top:5px;">

    <div  class="col-md-2" > 
        Dietary supplement
    </div  >
    <div class="col-md-10">
        <?php
        echo CheckboxX::widget([
             'name' => 'dietary_n',
            'id' => 'dietary_n',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> N</label>';
        ?>

        <?php
        echo CheckboxX::widget([
             'name' => 'dietary_y',
            'id' => 'dietary_y',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Y</label>';
        ?>
        <input type="text" name="dietary_detail" style="width: 30%"  >

    </div>


</div>
<div class="row" style="margin-top:5px;">

    <div  class="col-md-2" > 
        Smoking
    </div  >
    <div class="col-md-10">

        <?php
        echo CheckboxX::widget([
             'name' => 'smoke_n',
            'id' => 'smoke_n',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> N</label>';
        ?>


        <?php
        echo CheckboxX::widget([
             'name' => 'smoke_y',
            'id' => 'smoke_y',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Y</label>';
        ?>
        <input type="text" name="smoke_detail" style="width: 30%"  >
        <?php
        echo CheckboxX::widget([
             'name' => 'smoke_ex',
            'id' => 'smoke_ex',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Ex when</label>';
        ?>
        <input type="text" name="smoke_ex_detail" style="width: 34%"  > yr

    </div>


</div>

<div class="row" style="margin-top:5px;">

    <div  class="col-md-2" > 
        Alcohol drinking
    </div  >
    <div class="col-md-10">

        <?php
        echo CheckboxX::widget([
             'name' => 'alcohol_n',
            'id' => 'alcohol_n',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> N</label>';
        ?>


        <?php
        echo CheckboxX::widget([
            'name' => 'alcohol_y',
            'id' => 'alcohol_y',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Y</label>';
        ?>
        <input type="text"  name="alcohol_detail" style="width: 25%"  > drink/time,how many time

        <input type="text" name="alcohol_time" style="width: 25%"  >  /week 
        <?php
        echo CheckboxX::widget([
            'name' => 'alcohol_ex',
            'id' => 'alcohol_ex',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Ex when</label>';
        ?>
        <input type="text" name="alcohol_detail_ex" style="width: 10%"  > yr


    </div>


</div>

<div class="row" style="margin-top:5px;">


    <div  class="col-md-2" > 
        Insulin
    </div  >
    <div class="col-md-10">

        <?php
        echo CheckboxX::widget([
            'name' => 'insulin_n',
            'id' => 'insulin_n',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> N</label>';
        ?>

        <?php
        echo CheckboxX::widget([
            'name' => 'insulin_y',
            'id' => 'insulin_y',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Y</label>';
        ?>
        <input type="text" name="insulin_detail" style="width: 30%"  >

    </div>


</div>

<div class="row" style="margin-top:5px;">


    <div  class="col-md-2" > 
        Food preparation by
    </div  >
    <div class="col-md-10">

        <?php
        echo CheckboxX::widget([
            'name' => 'self',
            'id' => 'selft',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Self</label>';
        ?>

        <?php
        echo CheckboxX::widget([
            'name' => 'caregiver',
            'id' => 'caregiver',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Caregiver</label>';
        ?>
        <?php
        echo CheckboxX::widget([
             'name' => 'eating',
            'id' => 'eating',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Eating out ( frequency of eating out</label>';
        ?>
        <input type="text" name="frequency_eating" style="width: 10%"  > )

    </div>


</div>

<div class="row" style="margin-top:5px;">


    <div  class="col-md-2" > 
        Daily activities
    </div  >
    <div class="col-md-10">
        <input type="text"  name="daily" style="width: 50%"  > 

    </div>


</div>


<div class="row" style="margin-top:20px;">
    <div class="col-md-3">
        <div class="well well-sm"><center>Clinical data</center></div>
        <div class="row" style="margin-left: 20px;margin-top: 5px">Pre HD BP <input type="text" name="pre_bps" style="width: 40px;margin-left: 25px;" > / <input type="text" name="pre_bpd" style="width: 40px"></div>
        <div class="row" style="margin-left: 20px;margin-top: 5px">Post HD BP <input type="text" name="post_bps" style="width: 40px;margin-left: 20px;"> / <input type="text" name="pre_bpd" style="width: 40px"></div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Dry BW <input type="text" name="dry_bw" style="width: 95px;;margin-left: 45px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">IBM <input type="text"  name="ibm" style="width: 95px;;margin-left: 68px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Last BW<input type="text" name="last_bw" style="width: 95px;;margin-left: 45px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Pre HD BW<input type="text" name="pre_bw" style="width: 95px;;margin-left: 26px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Post HD BW<input type="text" name="post_bw" style="width: 95px;;margin-left: 20px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Goal of UF<input type="text" name="goal_uf" style="width: 95px;;margin-left: 31px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">BMI<input type="text" name="bmi" style="width: 95px;;margin-left: 73px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Edema<input type="text" name="edema" style="width: 95px;;margin-left: 55px;"> </div>
        <div class="row" style="margin-left: 8px;margin-top: 5px">
            <div class="col-md-4">
                Pitting
            </div>
            <div class="col-md-6">
                <?php
                echo CheckboxX::widget([
                    'name' => 'pitting_n',
                    'id'=>'pitting_n',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> N</label>';
                ?>

                <?php
                echo CheckboxX::widget([
                    'name' => 'pitting_y',
                    'id'=>'pitting_y',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> Y</label>';
                ?>
            </div>
        </div>
        <div class="row" style="margin-left: 8px;margin-top: 5px">
            <div class="col-md-4">
                non-Pitting
            </div>
            <div class="col-md-6">

                <?php
                echo CheckboxX::widget([
                    'name' => 'non_pitting_n',
                    'id'=>'non_pitting_n',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> N</label>';
                ?>

                <?php
                echo CheckboxX::widget([
                    'name' => 'non_pitting_y',
                    'id'=>'non_pitting_y',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> Y</label>';
                ?>
            </div>
        </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Site<input type="text" name="site" style="width: 95px;;margin-left: 75px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 8px;font-size:16px">Symptoms</div>
        <div class="row" style="margin-left: 8px;margin-top: 5px">
            <div class="col-md-4">
                Nausea
            </div>
            <div class="col-md-6">

                <?php
                echo CheckboxX::widget([
                    'name' => 'nausea_n',
                    'id'=>'nausea_n',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> N</label>';
                ?>

                <?php
                echo CheckboxX::widget([
                    'name' => 'nausea_y',
                    'id'=>'nausea_y',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> Y</label>';
                ?>
            </div>
        </div>
        <div class="row" style="margin-left: 8px;margin-top: 5px">
            <div class="col-md-4">
                vomiting
            </div>
            <div class="col-md-6">

                <?php
                echo CheckboxX::widget([
                    'name' => 'vomiting_n',
                    'id'=>'vomiting_n',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> N</label>';
                ?>

                <?php
                echo CheckboxX::widget([
                    'name' => 'vomiting_y',
                    'id'=>'vomiting_y',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> Y</label>';
                ?>
            </div>
        </div>
        <div class="row" style="margin-left: 8px;margin-top: 5px">
            <div class="col-md-4">
                Diarrhea
            </div>
            <div class="col-md-6">

                <?php
                echo CheckboxX::widget([
                    'name' => 'diarrhea_n',
                    'id'=>'diarrhea_n',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> N</label>';
                ?>

                <?php
                echo CheckboxX::widget([
                    'name' => 'diarrhea_y',
                    'id'=>'diarrhea_y',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> Y</label>';
                ?>
            </div>
        </div>
        <div class="row" style="margin-left: 8px;margin-top: 5px">
            <div class="col-md-4">
                Constipation
            </div>
            <div class="col-md-6">

                <?php
                echo CheckboxX::widget([
                    'name' => 'constipation_n',
                    'id'=>'constipation_n',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> N</label>';
                ?>

                <?php
                echo CheckboxX::widget([
                     'name' => 'constipation_y',
                    'id'=>'constipation_y',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> Y</label>';
                ?>
            </div>
        </div>
        <div class="row" style="margin-left: 8px;margin-top: 5px">
            <div class="col-md-4">
                Loss of appetite
            </div>
            <div class="col-md-6">

                <?php
                echo CheckboxX::widget([
                    'name' => 'loss_n',
                    'id' => 'loss_n',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> N</label>';
                ?>

                <?php
                echo CheckboxX::widget([
                    'name' => 'loss_y',
                    'id' => 'loss_y',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> Y</label>';
                ?>
            </div>
        </div>
        <div class="row" style="margin-left: 8px;margin-top: 5px">
            <div class="col-md-4">
                Itching
            </div>
            <div class="col-md-6">

                <?php
                echo CheckboxX::widget([
                    'name' => 'itching_n',
                    'id' => 'itching_n',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> N</label>';
                ?>

                <?php
                echo CheckboxX::widget([
                    'name' => 'itching_y',
                    'id' => 'itching_y',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> Y</label>';
                ?>
            </div>
        </div>


    </div>
    <div class="col-md-3">
        <div class="well well-sm"><center>Lab Result Today</center></div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Pre HD Burn<input type="text" name="pre_burn" style="width: 95px;;margin-left: 27px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Post HD Burn<input type="text" name="post_burn" style="width: 95px;;margin-left: 20px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Pre HD Cr<input type="text" name="pre_cr" style="width: 95px;;margin-left: 41px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Post HD Cr<input type="text" name="post_cr" style="width: 95px;;margin-left: 34px;"> </div>
        <div class="row" style="margin-left: 20px;margin-top: 5px">PG <input type="text" name="pg1" style="width: 40px;margin-left: 80px;" > / <input type="text" name="pg2" style="width: 40px"> hr</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">A1C<input type="text" name="a1c" style="width: 95px;;margin-left: 77px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Hb<input type="text" name="hb" style="width: 95px;;margin-left: 85px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Hct<input type="text" name="hct" style="width: 95px;;margin-left: 82px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">TP<input type="text" name="tp" style="width: 95px;;margin-left: 85px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Alb<input type="text" name="alb" style="width: 95px;;margin-left: 82px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Na<input type="text" name="na" style="width: 95px;;margin-left: 84px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">K<input type="text" name="k" style="width: 95px;;margin-left: 93px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Ci<input type="text" name="ci" style="width: 95px;;margin-left: 89px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">CO2<input type="text" name="co2" style="width: 95px;;margin-left: 73px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Ca<input type="text" name="ca" style="width: 95px;;margin-left: 85px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">P<input type="text" name="p" style="width: 95px;;margin-left: 93px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Uric acid<input type="text" name="uric_acid" style="width: 95px;;margin-left: 47px;"> </div>
    </div>
    <div class="col-md-3">
        <div class="well well-sm"><center>Dietary intake</center></div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">
            <textarea name="dietary_intake" rows="15" cols="30">
            </textarea>
        </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 8px;font-size:16px">Summary</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Energy<input type="text" name="d_energy" style="width: 95px;;margin-left: 42px;"> kcal</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">En/Wt<input type="text" name="d_en_wt" style="width: 95px;;margin-left: 47px;"> kcal/kg/d</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Protein<input type="text" name="d_protein" style="width: 95px;;margin-left: 42px;"> g</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Prot/Wt<input type="text" name="d_prot_wt" style="width: 95px;;margin-left: 40px;"> g/kg/d</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">High BV<input type="text" name="d_high_bv" style="width: 95px;;margin-left: 35px;"> %</div>
    </div>
    <div class="col-md-3">
        <div class="well well-sm"><center>Assessment and Plan</center></div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">
            <textarea  name="plan_assessment" rows="15" cols="30">
            </textarea>
        </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 8px;font-size:16px">Summary</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Energy<input type="text" name="p_energy" style="width: 95px;;margin-left: 42px;"> kcal</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">En/Wt<input type="text" name="p_en_wt" style="width: 95px;;margin-left: 47px;"> kcal/kg/d</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Protein<input type="text" name="p_protein" style="width: 95px;;margin-left: 42px;"> g</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Prot/Wt<input type="text" name="p_prot_wt" style="width: 95px;;margin-left: 40px;"> g/kg/d</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">High BV<input type="text" name="p_high_bv" style="width: 95px;;margin-left: 35px;"> %</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Meat<input type="text" name="p_meat" style="width: 95px;;margin-left: 56px;"> g</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Egg white<input type="text" name="p_egg_white" style="width: 95px;;margin-left: 26px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Fluid<input type="text"  name="p_fluid" style="width: 95px;;margin-left: 57px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Seasoning<input type="text" name="p_seasoning" style="width: 95px;;margin-left: 21px;"> </div>
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
    <div class="col-md-6">
        <div class="col-md-3" style="text-align: ri">
            <h5>Next Follow Up : </h5>
        </div>
        <div class="col-md-3" style="margin-top: 10px">
            <?php $list = [0 => ' N', 1 => ' Y']; ?>

            <?=
            $form->field($model, 'next_followup')->widget(ICheck::className(), [
                'type' => ICheck::TYPE_RADIO_LIST,
                'style' => ICheck::STYLE_FLAT,
                'items' => [1 => 'N', 2 => 'Y'],
                'color' => 'green',
                'options' => [
                    'item' => function ($index, $label, $name, $checked, $value) {
                        return '<input type="radio" id="radio-10-' . $index . '" name="' . $name . '" value="' . $value . '" ' . ($checked ? 'checked' : false) . '> 
                        <label for="check-7-' . $index . '">' . $label . '</label>';
                    },
        ]])->label(FALSE);
            ?>
        </div>
        <div class="col-md-6" > <?= $form->field($model, 'next_followup_date')->textInput(['placeholder' => 'date'])->label(FALSE); ?> </div>

    </div>
    
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