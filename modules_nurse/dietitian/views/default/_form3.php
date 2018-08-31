<?php

use kartik\checkbox\CheckboxX;
?>

<center><h4>OPD NURTITION ASSESSMENT FOR HEMODIALY PATIENT</h4></center>

<div class="row" style="margin-top:30px">
    <div class="col-md-3">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">First visit</label>';
        ?>

        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Follow up visit</label>';
        ?>


    </div>
</div>

<div class="row" style="margin-top:20px;">
    <div class="col-md-2">Co-morbidities </div>
    <div  class="col-md-2" > 
        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">DM</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 't1',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">T1</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">T2</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'Uncertain',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Uncertain</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'dmwith',
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
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Thyroid</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 't1',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Obesity</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">HT</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'Uncertain',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">DLP</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'dmwith',
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
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">CHF</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 't1',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">CVA</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Malignancy</label>';
        ?>
    </div>
    <div  class="col-md-4 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 'Uncertain',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Other</label>';
        ?>
        <input type="text" >
    </div>

</div>

<div class="row" style="margin-top:5px;">
    <div class="col-md-2"> Type of HD</div>
    <div  class="col-md-10" > 
        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Acute HD,Starting date </label>';
        ?>
        <input type="text" > The number of HD  <input type="text" > 

    </div>


</div>
<div class="row" style="margin-top:5px;">
    <div class="col-md-2"> </div>
    <div  class="col-md-10" > 
        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Chronic HD,Duration</label>';
        ?>
        <input type="text" style="width: 50px" > d  <input type="text" style="width: 50px" > m 
        <input type="text" style="width: 50px" > y Frequency  <input type="text" style="width: 50px" > /wk
        Dialysis time <input type="text" > hrs/session

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
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> N</label>';
        ?>

        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Y</label>';
        ?>
        <input type="text" style="width: 70%"  >

    </div>


</div>

<div class="row" style="margin-top:5px;">

    <div  class="col-md-2" > 
        Impaired vision
    </div  >
    <div class="col-md-10">



        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> N</label>';
        ?>

        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Y</label>';
        ?>
        <input type="text" style="width: 30%"  >
        Impaired hearing 
        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> N</label>';
        ?>

        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Y</label>';
        ?>
        <input type="text" style="width: 34%"  >

    </div>


</div>

<div class="row" style="margin-top:5px;">


    <div  class="col-md-2" > 
        Food Allergy 
    </div  >
    <div class="col-md-10">

        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> N</label>';
        ?>

        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Y</label>';
        ?>
        <input type="text" style="width: 30%"  >

    </div>


</div>

<div class="row" style="margin-top:5px;">

    <div  class="col-md-2" > 
        Dietary supplement
    </div  >
    <div class="col-md-10">
        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> N</label>';
        ?>

        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Y</label>';
        ?>
        <input type="text" style="width: 30%"  >

    </div>


</div>
<div class="row" style="margin-top:5px;">

    <div  class="col-md-2" > 
        Smoking
    </div  >
    <div class="col-md-10">

        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> N</label>';
        ?>


        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Y</label>';
        ?>
        <input type="text" style="width: 30%"  >
        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Ex when</label>';
        ?>
        <input type="text" style="width: 34%"  > yr

    </div>


</div>

<div class="row" style="margin-top:5px;">

    <div  class="col-md-2" > 
        Alcohol drinking
    </div  >
    <div class="col-md-10">

        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> N</label>';
        ?>


        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Y</label>';
        ?>
        <input type="text" style="width: 25%"  > drink/time,how many time

        <input type="text" style="width: 25%"  >  /week 
        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Ex when</label>';
        ?>
        <input type="text" style="width: 10%"  > yr


    </div>


</div>

<div class="row" style="margin-top:5px;">


    <div  class="col-md-2" > 
        Insulin
    </div  >
    <div class="col-md-10">

        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> N</label>';
        ?>

        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Y</label>';
        ?>
        <input type="text" style="width: 30%"  >

    </div>


</div>

<div class="row" style="margin-top:5px;">


    <div  class="col-md-2" > 
        Food preparation by
    </div  >
    <div class="col-md-10">

        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Self</label>';
        ?>

        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Caregiver</label>';
        ?>
        <?php
        echo CheckboxX::widget([
            'name' => 'dm',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1"> Eating out ( frequency of eating out</label>';
        ?>
        <input type="text" style="width: 10%"  > )

    </div>


</div>

<div class="row" style="margin-top:5px;">


    <div  class="col-md-2" > 
        Daily activities
    </div  >
    <div class="col-md-10">
        <input type="text" style="width: 50%"  > 

    </div>


</div>


<div class="row" style="margin-top:20px;">
    <div class="col-md-3">
        <div class="well well-sm"><center>Clinical data</center></div>
        <div class="row" style="margin-left: 20px;margin-top: 5px">Pre HD BP <input type="text" style="width: 40px;margin-left: 25px;" > / <input type="text" style="width: 40px"></div>
        <div class="row" style="margin-left: 20px;margin-top: 5px">Post HD BP <input type="text" style="width: 40px;margin-left: 20px;"> / <input type="text" style="width: 40px"></div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Dry BW <input type="text" style="width: 95px;;margin-left: 45px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">IBM <input type="text" style="width: 95px;;margin-left: 68px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Last BW<input type="text" style="width: 95px;;margin-left: 45px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Pre HD BW<input type="text" style="width: 95px;;margin-left: 26px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Post HD BW<input type="text" style="width: 95px;;margin-left: 20px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Goal of UF<input type="text" style="width: 95px;;margin-left: 31px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">BMI<input type="text" style="width: 95px;;margin-left: 73px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Edema<input type="text" style="width: 95px;;margin-left: 55px;"> </div>
        <div class="row" style="margin-left: 8px;margin-top: 5px">
            <div class="col-md-4">
                Pitting
            </div>
            <div class="col-md-6">
                <?php
                echo CheckboxX::widget([
                    'name' => 'dm',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> N</label>';
                ?>

                <?php
                echo CheckboxX::widget([
                    'name' => 'dm',
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
                    'name' => 'dm',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> N</label>';
                ?>

                <?php
                echo CheckboxX::widget([
                    'name' => 'dm',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> Y</label>';
                ?>
            </div>
        </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Site<input type="text" style="width: 95px;;margin-left: 75px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 8px;font-size:16px">Symptoms</div>
        <div class="row" style="margin-left: 8px;margin-top: 5px">
            <div class="col-md-4">
                Nausea
            </div>
            <div class="col-md-6">

                <?php
                echo CheckboxX::widget([
                    'name' => 'dm',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> N</label>';
                ?>

                <?php
                echo CheckboxX::widget([
                    'name' => 'dm',
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
                    'name' => 'dm',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> N</label>';
                ?>

                <?php
                echo CheckboxX::widget([
                    'name' => 'dm',
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
                    'name' => 'dm',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> N</label>';
                ?>

                <?php
                echo CheckboxX::widget([
                    'name' => 'dm',
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
                    'name' => 'dm',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> N</label>';
                ?>

                <?php
                echo CheckboxX::widget([
                    'name' => 'dm',
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
                    'name' => 'dm',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> N</label>';
                ?>

                <?php
                echo CheckboxX::widget([
                    'name' => 'dm',
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
                    'name' => 'dm',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> N</label>';
                ?>

                <?php
                echo CheckboxX::widget([
                    'name' => 'dm',
                    'pluginOptions' => ['threeState' => false]
                ]);
                echo '<label class="cbx-label" for="s_1"> Y</label>';
                ?>
            </div>
        </div>


    </div>
    <div class="col-md-3">
        <div class="well well-sm"><center>Lab Result Today</center></div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Pre HD Burn<input type="text" style="width: 95px;;margin-left: 27px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Post HD Burn<input type="text" style="width: 95px;;margin-left: 20px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Pre HD Cr<input type="text" style="width: 95px;;margin-left: 41px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Post HD Cr<input type="text" style="width: 95px;;margin-left: 34px;"> </div>
        <div class="row" style="margin-left: 20px;margin-top: 5px">PG <input type="text" style="width: 40px;margin-left: 80px;" > / <input type="text" style="width: 40px"> hr</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">A1C<input type="text" style="width: 95px;;margin-left: 77px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Hb<input type="text" style="width: 95px;;margin-left: 85px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Hct<input type="text" style="width: 95px;;margin-left: 82px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">TP<input type="text" style="width: 95px;;margin-left: 85px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Alb<input type="text" style="width: 95px;;margin-left: 82px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Na<input type="text" style="width: 95px;;margin-left: 84px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">K<input type="text" style="width: 95px;;margin-left: 93px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Ci<input type="text" style="width: 95px;;margin-left: 89px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">CO2<input type="text" style="width: 95px;;margin-left: 73px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Ca<input type="text" style="width: 95px;;margin-left: 85px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">P<input type="text" style="width: 95px;;margin-left: 93px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Uric acid<input type="text" style="width: 95px;;margin-left: 47px;"> </div>
    </div>
    <div class="col-md-3">
        <div class="well well-sm"><center>Dietary intake</center></div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">
            <textarea rows="15" cols="30">
            </textarea>
        </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 8px;font-size:16px">Summary</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Energy<input type="text" style="width: 95px;;margin-left: 42px;"> kcal</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">En/Wt<input type="text" style="width: 95px;;margin-left: 47px;"> kcal/kg/d</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Protein<input type="text" style="width: 95px;;margin-left: 42px;"> g</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Prot/Wt<input type="text" style="width: 95px;;margin-left: 40px;"> g/kg/d</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">High BV<input type="text" style="width: 95px;;margin-left: 35px;"> %</div>
    </div>
    <div class="col-md-3">
        <div class="well well-sm"><center>Assessment and Plan</center></div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">
            <textarea rows="15" cols="30">
            </textarea>
        </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 8px;font-size:16px">Summary</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Energy<input type="text" style="width: 95px;;margin-left: 42px;"> kcal</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">En/Wt<input type="text" style="width: 95px;;margin-left: 47px;"> kcal/kg/d</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Protein<input type="text" style="width: 95px;;margin-left: 42px;"> g</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Prot/Wt<input type="text" style="width: 95px;;margin-left: 40px;"> g/kg/d</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">High BV<input type="text" style="width: 95px;;margin-left: 35px;"> %</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Meat<input type="text" style="width: 95px;;margin-left: 56px;"> g</div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Egg white<input type="text" style="width: 95px;;margin-left: 26px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Fluid<input type="text" style="width: 95px;;margin-left: 57px;"> </div>
        <div class="row" style="margin-left: 20px;margin-right: 20px;margin-top: 5px">Seasoning<input type="text" style="width: 95px;;margin-left: 21px;"> </div>
    </div>

</div>

<div class="row">
    <div class="col-md-2"><h3>IDNT diagnosis</h3></div>
    <div class="col-md-2" style="margin-top:18px "> <input type="text" placeholder="1"> </div>
    <div class="col-md-2" style="margin-top:18px "> <input type="text"  placeholder="2"> </div>
    <div class="col-md-2" style="margin-top:18px "> <input type="text"  placeholder="3"> </div>
    <div class="col-md-2" style="margin-top:18px "> <input type="text"  placeholder="4"> </div>
    <div class="col-md-2" style="margin-top:18px "> <input type="text"  placeholder="5"> </div>
</div>

<div class="row">
    <div class="col-md-2">
        <h3>Next Follow Up : </h3>
    </div>
    <div class="col-md-1" style="margin-top: 20px">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">N</label>';
        ?>
    </div>
    <div class="col-md-1" style="margin-top: 20px">
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Y</label>';
        ?>
    </div>
    <div class="col-md-2" style="margin-top:18px "> <input type="text" placeholder="date"> </div>
</div>