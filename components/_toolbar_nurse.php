<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
?>

<div style="width: 100%; margin-top: 0px;box-shadow: 5px 3px 2px grey;" >

    <div class="container-fluid">
        <div class="navbar-header">
            <ul class="nav navbar-nav na">

                <li class="active" >
                    <a href="<?= Url::to(['/nursescreen/default/index']) ?>"><i class="fa fa-wheelchair"></i>  Patient Entry</a><!-- POND -->
                </li>              
                <li>
                    <a href="<?= Url::to(['/qmanage/default/index']) ?>"><i class="fa fa-bullhorn"></i> Q.manage</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-thermometer"></i> LAB</a>
                </li>
                <li>
                    <a href="<?= Url::to(['/nursescreen/dm-assessment/index']) ?>"><i class="fa fa-stethoscope"></i> DM Nurse Manager</a><!-- POND -->
                </li>
                
                 <li>
                    <a href="#"><i class="fa fa-ambulance"></i> ORDER</a>
                </li>
                
                <li>
                    <a href="<?= Url::to(['/dietitian']) ?>"><i class="fa fa-bed"></i> Dietitian</a>
                </li>
                <li>
                    <a href="<?= Url::to(['/foot/default/index']) ?>"><i class="fa fa-wheelchair"></i> FOOT</a>

                </li>
                <li>
                    <a href="#"><i class="fa fa-archive"></i> HBOT</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-support"></i> HD</a>
                </li>
                 <li>
                    <a href="<?= Url::to(['/emr/default/index']) ?>"><i class="fa fa-ambulance"></i> E-DOC</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-ambulance"></i> E-FORM</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-ambulance"></i> QUESTIONNAIRE</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-clipboard"></i> Print Out</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-file-text"></i> Report</a>
                </li>
            </ul>

        </div>
    </div>

</div>

