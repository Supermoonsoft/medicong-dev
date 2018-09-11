
<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use app\components\PatientHelper;
use app\components\MessageHelper;

$this->title = "Dm Assessments";
$this->params['breadcrumbs'][] = ['label' => 'Patient-Entry', 'url' => ['/nursescreen/default/index']];
$this->params['breadcrumbs'][] = $this->title;

$hn = PatientHelper::getCurrentHn();
if (empty($hn)) {
    MessageHelper::errorNullHn();
}

$this->params['pt_title'] = PatientHelper::getPatientTitleByHn($hn);
?>
<?php
$this->registerCss("
.box-shadow {
    -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
    box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
}
");
?>
<div class="dm-assessment-view">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="row ">
    <div class="col-md-12">
        <?= DetailView::widget([
            'model' => $model,
            'condensed'=>true,
            'hover'=>true,
            'mode'=>DetailView::MODE_VIEW,
            'hAlign' => DetailView::ALIGN_LEFT,
            'vAlign' => DetailView::ALIGN_MIDDLE,
            'labelColOptions' =>['style'=>'width:40%'],
            'panel'=>[
                'heading'=>$this->title
                        .' : '. Html::a('<i class="glyphicon glyphicon-pencil"></i>', ['update', 'id' => $model->id]) ,
                'type'=>DetailView::TYPE_INFO,
                'headingOptions'=>[
                    'template'=>'{title}'
                ]
            ],
            'attributes' => [
                [
                    'attribute'=>'last_meal_eating',
                    'format'=>'raw', 
                    'value'=>$model->last_meal_eating== "YES" ? ' At time :'.$model->last_meal_eating_data : '<span class="label label-danger">No</span>',
                    
                ],
                [
                    'attribute'=>'last_insulin',
                    'format'=>'raw', 
                    'value'=>$model->last_insulin== "YES" ? ' '.$model->last_insulin_data : '<span class="label label-danger">No</span>',
                    
                ],
                [
                    'attribute'=>'psychosocial_problem',
                    'format'=>'raw', 
                    'value'=>' At time :'.$model->psychosocial_problem ,
                    
                ],
                [
                    'attribute'=>'key_presenting',
                    'format'=>'raw', 
                    'value'=>call_user_func(function ($model) { 
                        $key_presenting="";
                        if($model->key_presenting == "YES"){
                            if($model->chest_discomfort==true){ $key_presenting .=" Chest Discomfort , ";}
                            if($model->blurred_vision==true){ $key_presenting .=" Blurred Vision , ";}
                            if($model->numbness==true){ $key_presenting .="  Numbness , ";}
                            if($model->foot_ulcer==true){ $key_presenting .=" Foot Ulcer  ";}
                        }
                        return $key_presenting;
                    },$model)
                    
                ],
                [
                    'attribute'=>'hbpm',
                    'format'=>'raw', 
                    'value'=>call_user_func(function ($model) { 
                        $hbpm="";
                        if($model->hbpm == "YES"){
                            $hbpm .="<span class='label label-success'>YES</span> ";
                            if($model->hbpm_frequency == "YES"){
                                $hbpm .=" Frequency :   ";
                                $hbpm .="__".$model->hbpm_day."__Day  __".$model->hbpm_week."__Week  __".$model->hbpm_week."__Month";
                            }
                        }
                        return $hbpm;
                    },$model),
                    'type'=>DetailView::INPUT_SWITCH,

                ],
                [
                    'attribute'=>'smbg',
                    'format'=>'raw', 
                    'value'=>call_user_func(function ($model) { 
                        $smbg="";
                        if($model->smbg == "YES"){
                            $smbg .="<span class='label label-success'>YES</span>";
                            if($model->smbg_frequency == "YES"){
                                $smbg .=" Frequency : ";
                                $smbg .="__".$model->smbg_day."__Day  __".$model->smbg_week."__Week  __".$model->smbg_week."__Month";
                            }
                        }
                        return $smbg;
                    },$model),
                    'type'=>DetailView::INPUT_SWITCH,

                ],
                [
                    'attribute'=>'hyperglycemic',
                    'format'=>'raw', 
                    'value'=>$model->hyperglycemic== "YES" ? ' <span class="label label-success">YES</span>'.$model->hyperglycemic_data : '<span class="label label-danger">No</span>',
                    
                ],
                [
                    'attribute'=>'hypoglycemic',
                    'format'=>'raw', 
                    'value'=>$model->hypoglycemic== "YES" ? ' <span class="label label-success">YES</span>'.$model->hypoglycemic_data : '<span class="label label-danger">No</span>',
                    
                ],
                [
                    'attribute'=>'hypoglycemic_risk',
                    'format'=>'raw', 
                    'value'=>call_user_func(function ($model) { 
                        $risk="";
                        if($model->hypoglycemic_risk == "YES"){
                                if($model->hypoglycemic_risk1=="YES"){ 
                                    $risk   .="<span class='label label-danger'>YES</span> 8.2 Hypoglycemia Level 1 : "
                                            .$model->hypoglycemic_risk1_data."<br>";
                                        }
                                if($model->hypoglycemic_risk2=="YES"){ 
                                    $risk   .="<span class='label label-danger'>YES</span> 8.3 Hypoglycemia Level 2 : "
                                            .$model->hypoglycemic_risk2_data."<br>";
                                        }
                                if($model->hypoglycemic_risk3=="YES"){ 
                                    $risk   .="<span class='label label-danger'>YES</span> 8.4 Hypoglycemia Level 3 : "
                                            .$model->hypoglycemic_risk3_data;
                                        }
                        }
                        return $risk;
                    },$model),
                    'type'=>DetailView::INPUT_SWITCH,

                ],
                [
                    'attribute'=>'diet_data1',
                    'format'=>'raw', 
                    'value'=>' '.$model->diet_data1.' / '.$model->diet_data2, 
                    'type'=>DetailView::INPUT_SWITCH,

                ],
                [
                    'attribute'=>'exercise_data1',
                    'format'=>'raw', 
                    'value'=>' '.$model->exercise_data1.' / '.$model->exercise_data2, 
                    'type'=>DetailView::INPUT_SWITCH,

                ],
                [
                    'attribute'=>'drug_data1',
                    'format'=>'raw', 
                    'value'=>' '.$model->drug_data1.' / '.$model->drug_data2, 
                    'type'=>DetailView::INPUT_SWITCH,

                ],
                [
                    'attribute'=>'smooking',
                    'format'=>'raw', 
                    'value'=>call_user_func(function ($model) { 
                        $smooking="";
                        if($model->smooking == "YES"){
                            if($model->smooking_ex1 == true){
                                $smooking ." Ex. ";
                                $smooking .="Peak_".$model->smooking_ex1_day."_  WHEN_".$model->smooking_ex1_year."__ <BR>";
                            }
                        }
                        if($model->smooking2 == "YES"){
                            $smooking="Previous data : ";
                            if($model->smooking_ex2 == true){
                                $smooking ." Ex. ";
                                $smooking .="Peak__".$model->smooking_ex2_day."_  WHEN_".$model->smooking_ex2_year."__ <BR>";
                            }
                        }

                        return $smooking;
                    },$model),
                    'type'=>DetailView::INPUT_SWITCH,

                ],
                [
                    'attribute'=>'vaccination_date1',
                    'format'=>'raw',
                    'label' => '13. Vaccination ', 
                    'value'=>' vaccination_date1 : '.$model->vaccination_date1.' / vaccination_date2 : '.$model->vaccination_date2, 
                    'type'=>DetailView::INPUT_DATE,

                ],

            ]
        ]) ?>
    </div>
</div>
</div>

</div><div class="col-md-2"></div>

</div>
