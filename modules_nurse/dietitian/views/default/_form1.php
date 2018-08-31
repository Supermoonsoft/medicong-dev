<?php

use kartik\checkbox\CheckboxX;
?>

<center><h4>OPD NURTITION VISIT RECORD</h4></center>
<div class="row" style="margin-top:40px;">
    <div class="col-md-2">Principal Diagnosis </div>
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

<div class="row" style="margin-top:10px">
    <div class="col-md-2"></div>
    <div  class="col-md-2"  > 
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Thyroid</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 't3',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">S/P Thyroiddectomy</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 't4',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">i-131 RX</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 't5',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Befor</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 't6',
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
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Obesity</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 't3',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">HT</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 't4',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">DLP</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 't5',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">CAD</label>';
        ?>
    </div>
    <div  class="col-md-2 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 't6',
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
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">CKD (with out RRF)</label>';
        ?>
    </div>
    <div  class="col-md-4 "> 
        <?php
        echo CheckboxX::widget([
            'name' => 't3',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Malignancy</label>';
        echo '<input type="text" style="margin-left:10px" >';
        ?>
    </div>
    <div  class="col-md-2"  > 
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
            'pluginOptions' => ['threeState' => false]
        ]);
        echo '<label class="cbx-label" for="s_1">Chemotherapy</label>';
        ?>
    </div>
    <div  class="col-md-2"  > 
        <?php
        echo CheckboxX::widget([
            'name' => 't2',
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
            'name' => 't3',
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
        <textarea rows="5" cols="130">
 
        </textarea>
    </div>

</div>

<div class="row" style="margin-top:10px">
    <div class="well well-sm">Lab Result Today</div>
    <div class="row">
        <div class="col-md-2"><p align="right"> PG</p> </div>
        <div class="col-md-2"> <input type=text""> </div>
        <div class="col-md-2"><p align="right"> Bun</p> </div>
        <div class="col-md-2"> <input type=text"">  </div>
        <div class="col-md-2"><p align="right"> Albumin</p> </div>
        <div class="col-md-2"> <input type=text"">  </div>
    </div>
    <div class="row">
        <div class="col-md-2"><p align="right"> A1c</p> </div>
        <div class="col-md-2"> <input type=text""> </div>
        <div class="col-md-2"><p align="right"> Cr</p> </div>
        <div class="col-md-2"> <input type=text"">  </div>
        <div class="col-md-2"><p align="right"> Calcium</p> </div>
        <div class="col-md-2"> <input type=text"">  </div>
    </div>
    <div class="row">
        <div class="col-md-2"><p align="right"> Tc</p> </div>
        <div class="col-md-2"> <input type=text""> </div>
        <div class="col-md-2"><p align="right"> eGFR</p> </div>
        <div class="col-md-2"> <input type=text"">  </div>
        <div class="col-md-2"><p align="right"> Phoshorus</p> </div>
        <div class="col-md-2"> <input type=text"">  </div>
    </div>
    <div class="row">
        <div class="col-md-2"><p align="right"> TG</p> </div>
        <div class="col-md-2"> <input type=text""> </div>
        <div class="col-md-2"><p align="right"> Sodium</p> </div>
        <div class="col-md-2"> <input type=text"">  </div>
        <div class="col-md-2"><p align="right"> Magnisium</p> </div>
        <div class="col-md-2"> <input type=text"">  </div>
    </div>

    <div class="row">
        <div class="col-md-2"><p align="right"> HDL-C</p> </div>
        <div class="col-md-2"> <input type=text""> </div>
        <div class="col-md-2"><p align="right"> Potassium</p> </div>
        <div class="col-md-2"> <input type=text"">  </div>
        <div class="col-md-2"><p align="right"> Uric Asid</p> </div>
        <div class="col-md-2"> <input type=text"">  </div>
    </div>

    <div class="row">
        <div class="col-md-2"><p align="right"> LDL-C</p> </div>
        <div class="col-md-2"> <input type=text""> </div>
        <div class="col-md-2"><p align="right"> Chloride</p> </div>
        <div class="col-md-2"> <input type=text"">  </div>
        <div class="col-md-2"><p align="right"> Hb</p> </div>
        <div class="col-md-2"> <input type=text"">  </div>
    </div>
    <div class="row">
        <div class="col-md-2"><p align="right"> NON HDL-C</p> </div>
        <div class="col-md-2"> <input type=text""> </div>
        <div class="col-md-2"><p align="right"> CO2</p> </div>
        <div class="col-md-2"> <input type=text"">  </div>
        <div class="col-md-2"><p align="right"> ALT</p> </div>
        <div class="col-md-2"> <input type=text"">  </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-2"><h3>IDNT diagnosis</h3></div>
        <div class="col-md-2" style="margin-top:18px "> <input type="text" placeholder="1"> </div>
        <div class="col-md-2" style="margin-top:18px "> <input type="text"  placeholder="2"> </div>
        <div class="col-md-2" style="margin-top:18px "> <input type="text"  placeholder="3"> </div>
        <div class="col-md-2" style="margin-top:18px "> <input type="text"  placeholder="4"> </div>
        <div class="col-md-2" style="margin-top:18px "> <input type="text"  placeholder="5"> </div>
    </div>


</div>

<div class="row" style="margin-top:10px">
    <div class="col-md-4">
        <div class="well well-sm">Client subjective data</div>
        <div class="col-md-9"> - Stage of chang</div>
        <div class="col-md-1"><input type="text"  placeholder="1-5" style="width: 60px" ></div>


    </div>
    <div class="col-md-8">
        <div class="well well-sm">Target of behavior midification</div>
        <div class="col-md-6">

            <div class="col-md-9">1) At least 2 servings of fish/wk.</div>
            <div class="col-md-1"><input type="text"  placeholder="1-5" style="width: 60px" ></div>
            <div class="col-md-9">2) Limit high fat or fried food less then 2 meals/d</div>
            <div class="col-md-1"><input type="text"  placeholder="1-5" style="width: 60px;margin-top:7px" ></div>
            <div class="col-md-9" style="margin-top:7px">3) Control protein intake</div>
            <div class="col-md-1"><input type="text"  placeholder="1-5" style="width: 60px;margin-top:7px" ></div>
            <div class="col-md-9" style="margin-top:7px">4) Control CHO intake</div>
            <div class="col-md-1"><input type="text"  placeholder="1-5" style="width: 60px;margin-top:7px" ></div>
            <div class="col-md-9" style="margin-top:7px">5) limit added sugar,high CHO snack and beverage less than</div>
            <div class="col-md-1"><input type="text"  placeholder="1-5" style="width: 60px;margin-top:7px" ></div>
        </div>
        
        <div class="col-md-6">

            <div class="col-md-9">6) Control fruit intake.</div>
            <div class="col-md-1"><input type="text"  placeholder="1-5" style="width: 60px" ></div>
            <div class="col-md-9" style="margin-top:7px">7) At least 4 serving of leafy vegetable/d</div>
            <div class="col-md-1"><input type="text"  placeholder="1-5" style="width: 60px;margin-top:7px" ></div>
            <div class="col-md-9" style="margin-top:7px">8) Limit sodium intake</div>
            <div class="col-md-1"><input type="text"  placeholder="1-5" style="width: 60px;margin-top:7px" ></div>
            <div class="col-md-9" style="margin-top:7px">9) Limit alcohol intake</div>
            <div class="col-md-1"><input type="text"  placeholder="1-5" style="width: 60px;margin-top:7px" ></div>
            <div class="col-md-9" style="margin-top:7px">10) Pysical activity Describe Type/Duration/Time per wk.</div>
            <div class="col-md-1"><input type="text"  placeholder="1-5" style="width: 60px;margin-top:7px" ></div>
        </div>

    </div>

</div>
<hr>
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