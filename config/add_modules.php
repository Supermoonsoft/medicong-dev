<?php

//เพิ่ม module ที่นี่ที่เดียว
$modules = [];
$modules['gridview'] =  ['class' => '\kartik\grid\Module'];//system 
$modules['test'] = ['class' => 'app\modules_share\test\Test']; //share //tehn
$modules['patient'] = ['class' => 'app\modules_share\patient\Patient']; //share //tehn
$modules['test2'] = ['class' => 'app\modules_nurse\test2\Test2'];
$modules['newpatient'] = ['class' => 'app\modules_share\newpatient\NewPatient'];
$modules['patiententry'] = ['class' => 'app\modules_nurse\patiententry\PatientEntry'];
$modules['servicedummy'] = ['class' => 'app\modules_nurse\servicedummy\ServiceDummy'];
$modules['opdvisit'] = ['class' => 'app\modules_share\opdvisit\OpdVisit'];
$modules['foot'] = ['class' => 'app\modules_share\foot\Foot'];


return $modules;

