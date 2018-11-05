<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
$module = \Yii::$app->controller->module->id;
?>

<div style="width: 100%; margin-top: 0px;box-shadow: 5px 3px 2px grey;" >

    <div class="container-fluid">
        <div class="navbar-header">
            <ul class="nav navbar-nav na">

                <li >
                    <a class="<?= $module == 'nursescreen' ? 'on-active' : 'non-active' ?>" href="<?= Url::to(['/nursescreen/default/index']) ?>"><i class="fa fa-wheelchair"></i>  Patient Entry</a><!-- POND -->
                </li>              
                <li>
                    <!--<a href="<?= Url::to(['/qmanage/default/index']) ?>"><i class="fa fa-bullhorn"></i> Q.manage</a>-->
					<a class="<?= $module == 'queuemanage' ? 'on-active' : 'non-active' ?>" href="<?= Url::to(['/queuemanage']) ?>"><i class="fa fa-bullhorn"></i> Q.manage</a>
					
                </li>
                <li>
                    <a href="#"><i class="fa fa-thermometer"></i> LAB</a>
                </li>
                <li>
                    <a class="<?= $module == 'dmassessment' ? 'on-active' : 'non-active' ?>" href="<?= Url::to(['/dmassessment/dmassessment/index']) ?>"><i class="fa fa-stethoscope"></i> DM Nurse Manager</a><!-- POND -->
                </li>
                
                 <li>
                    <a class="<?= $module == 'doctorworkbench' ? 'on-active' : 'non-active' ?>" href="<?= Url::to(['/doctorworkbench/pcc-diagnosis']) ?>"><i class="fa fa-ambulance"></i> ORDER</a>
                </li>
                
                <li>
                    <a class="<?= $module == 'dietitian' ? 'on-active' : 'non-active' ?>" href="<?= Url::to(['/dietitian']) ?>"><i class="fa fa-bed"></i> Dietitian</a>
                </li>
                <li>
                    <a class="<?= $module == 'foot' ? 'on-active' : 'non-active' ?>" href="<?= Url::to(['/foot/default/index']) ?>"><i class="fa fa-wheelchair"></i> FOOT</a>

                </li>
                <li>
                    <a href="#"><i class="fa fa-archive"></i> HBOT</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-heartbeat"></i> HD</a>
                </li>
                 <li>
                    <a class="<?= $module == 'emr' ? 'on-active' : 'non-active' ?>" href="<?= Url::to(['/emr/default/index']) ?>"><i class="fas fa-book"></i> E-DOC</a>
                </li>
<li>
<a href="<?= Url::to(['/education/education/create']) ?>"><i class="fas fa-notes-medical"></i> EDUCATE</a>
</li>
                <li>
                    <a href="#"><i class="fas fa-notes-medical"></i> E-FORM</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-file-signature"></i> QUESTIONNAIRE</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-clipboard"></i> Print Out</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-file-excel"></i> Report</a>
                </li>
                <li>
                    <a class="<?= $module == 'medicostock' ? 'on-active' : 'non-active' ?>" href="<?= Url::to(['/medicostock']) ?>"><i class="fas fa-dolly"></i> STOCK</a>
                </li>
            </ul>

        </div>
    </div>

</div>

