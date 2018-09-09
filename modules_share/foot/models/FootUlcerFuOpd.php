<?php
namespace app\modules_share\foot\models;
use Yii;
use yii\helpers\ArrayHelper;
use app\models\Skill;
use yii\behaviors\AttributeBehavior;
use yii\db\ActiveRecord;


class FootUlcerFuOpd extends ActiveRecord{
    public $visit_date;
    public $type_of_duf;
    public $date_of_onset;
    public $duration_of_days;
    public $duration_of_months;
    public $cause_of_dfu;
    public $foot_wear;
    public $recurrent_ulcer;
    public $location_of_ulcer_right;
    public $location_of_ulcer_left;
    public $size_of_ulcer_right;
    public $size_of_ulcer_left;
    public $bone_test_right;
    public $bone_test_left;
    public $characteristics_of_ulcer_right;
    public $characteristics_of_ulcer_left;
    public $drainage_amount_right;
    public $drainage_amount_left;
    public $drainage_type_right;
    public $drainage_type_left;
    public $drainage_odor_right;
    public $drainage_odor_left;
    public $infection_right;
    public $infection_left;
    public $infection_y_right;
    public $infection_y_left;
    public $monofilament_right;
    public $monofilament_left;
    public $tuning_fork_right;
    public $tuning_fork_left;
    public $vessel_palpation_dp_right;
    public $vessel_palpation_dp_left;
    public $vessel_palpation_pt_right;
    public $vessel_palpation_pt_left;
    public $doppler_right;
    public $doppler_left;
    public $abi_right;
    public $abi_left;
    public $toe_pressure_right;
    public $toe_pressure_left;
    public $tbi_right;
    public $tbi_left;
    public $progress_note;
    public $off_loading_technique;
    public $off_loading_technique_y;
    public $local_procedure_performed;
    public $local_dressing_performed;
    public $post_revascularization;
    public $post_hbot;
    public $period_number;
    public $post_amputation;
    

    
    public function rules()
    {
        return [
        [[
        'visit_date',
        'wagner',
        'ut_grade',
        'ut_stage',
        'type_of_duf',
        'date_of_onset',
        'duration_of_days',
        'duration_of_months',
        'cause_of_dfu',
        'foot_wear',
        'recurrent_ulcer',
        'location_of_ulcer_right',
        'location_of_ulcer_left',
        'size_of_ulcer_right',
        'size_of_ulcer_left',
        'bone_test_right',
        'bone_test_left',
        'characteristics_of_ulcer_right',
        'characteristics_of_ulcer_left',
        'drainage_amount_right',
        'drainage_amount_left',
        'drainage_type_right',
        'drainage_type_left',
        'drainage_odor_right',
        'drainage_odor_left',
        'infection_right',
        'infection_left',
        'infection_y_right',
        'infection_y_left',
        'monofilament_right',
        'monofilament_left',
        'tuning_fork_right',
        'tuning_fork_left',
        'vessel_palpation_dp_right',
        'vessel_palpation_dp_left',
        'vessel_palpation_pt_right',
        'vessel_palpation_pt_left',
        'doppler_right',
        'doppler_left',
        'abi_right',
        'abi_left',
        'toe_pressure_right',
        'toe_pressure_left',
        'tbi_right',
        'tbi_left',
        'progress_note',
        'off_loading_technique',
        'off_loading_technique_y',
        'local_procedure_performed',
        'local_dressing_performed',
        'local_dressing_performed_note',
        'post_revascularization',
        'post_hbot',
        'post_amputation',
        'period_number',
    ], 'safe'],
    ];
}

public function attributeLabels()
{
    return [
        'location_of_ulcer_right'=>'location_of_ulcer_right',	
        'location_of_ulcer_left'=>'location_of_ulcer_left',	
        'size_of_ulcer_right'=>'size_of_ulcer_right',	
        'size_of_ulcer_left'=>'size_of_ulcer_left',	
        'bone_test_right'=>'bone_test_right',	
        'bone_test_left'=>'bone_test_left',	
        'characteristics_of_ulcer_right'=>'characteristics_of_ulcer_right',	
        'characteristics_of_ulcer_left'=>'characteristics_of_ulcer_left',	
        'drainage_amount_right'=>'drainage_amount_right',	
        'drainage_amount_left'=>'drainage_amount_left',	
        'drainage_type_right'=>'drainage_type_right',	
        'drainage_type_left'=>'drainage_type_left',	
        'drainage_odor_right'=>'drainage_odor_right',	
        'drainage_odor_left'=>'drainage_odor_left',	
        'infection_right'=>'infection_right',	
        'infection_left'=>'infection_left',	
        'infection_y_right'=>'infection_y_right',	
        'infection_y_left'=>'infection_y_left',	
        'monofilament_right'=>'monofilament_right',	
        'monofilament_left'=>'monofilament_left',	
        'tuning_fork_right'=>'tuning_fork_right',	
        'tuning_fork_left'=>'tuning_fork_left',	
        'vessel_palpation_dp_right'=>'vessel_palpation_dp_right',	
        'vessel_palpation_dp_left'=>'vessel_palpation_dp_left',	
        'vessel_palpation_pt_right'=>'vessel_palpation_pt_right',	
        'vessel_palpation_pt_left'=>'vessel_palpation_pt_left',	
        'doppler_right'=>'doppler_right',	
        'doppler_left'=>'doppler_left',	
        'abi_right'=>'abi_right',	
        'abi_left'=>'abi_left',	
        'toe_pressure_right'=>'toe_pressure_right',	
        'toe_pressure_left'=>'toe_pressure_left',	
        'tbi_right'=>'tbi_right',	
        'tbi_left'=>'tbi_left',	
        'progress_note' => 'progress_note',
        'off_loading_technique'=>'off_loading_technique',	
        'off_loading_technique_y'=>'off_loading_technique_y',	
        'local_procedure_performed'=>'local_procedure_performed',	
        'local_dressing_performed'=>'local_dressing_performed',	
        'post_revascularization'=>'post_revascularization',	
        'post_hbot'=>'post_hbot',	
        'post_amputation'=>'post_amputation',
        'period_number' => 'period_number',	


    ];
}

}
?>