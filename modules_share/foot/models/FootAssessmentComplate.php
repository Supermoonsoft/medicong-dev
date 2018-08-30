<?php
namespace app\modules_share\foot\models;
use Yii;
use yii\helpers\ArrayHelper;
use app\models\Skill;
use yii\behaviors\AttributeBehavior;
use yii\db\ActiveRecord;


class FootAssessmentComplate extends ActiveRecord{
    public $occupation;
    public $smoking;
    public $activity;
    public $using_ambulation;
    public $previous_foot_ulcer;
    public $previous_foot_ulcer_right;
    public $previous_foot_ulcer_left;

    public $previous_amputation;
    public $previous_amputation_right;
    public $previous_amputation_left;

    public $prosthesis;
    public $prosthesis_right;
    public $prosthesis_left;
    public $previous_revascularization;

    public $evt_right;
    public $evt_note_right;
    public $evt_date_right;

    public $bypass_right;
    public $bypass_date_right;

    public $hybrid_right;
    public $hybrid_date_right;

    public $evt_left;
    public $evt_note_left;
    public $evt_date_left;

    public $bypass_left;
    public $bypass_date_left;

    public $hybrid_left;
    public $hybrid_date_left;

    public $chief_complaint;
    public $hair_loss_right;
    public $hair_loss_left;
    public $fungal_infection_right;
    public $fungal_infection_left;
    public $color_change_right;
    public $color_change_left;
    public $skin_condition_right;
    public $skin_condition_left;
    public $interspace_right;
    public $interspace_left;
    public $temperature_change_right;
    public $temperature_change_left;
    public $toenail_problem;  

    public $fungal_nail_right;
    public $hypertrophic_right;
    public $distrophic_right;
    public $discolored_right;
    public $elongated_right;
    public $ingrown_right;
    public $involuted_right;
    public $fungal_nail_left;
    public $hypertrophic_left;
    public $distrophic_left;
    public $discolored_left;
    public $elongated_left;
    public $ingrown_left;
    public $involuted_left;
    public $splitting_right;
    public $splitting_left;
    public $skin_lesion;
    public $skin_lesion_type_right;
    public $skin_lesion_type_left;
    public $foot_type_right;
    public $foot_type_left;
    public $silfverskiold_test_right;
    public $silfverskiold_test_left;
    public $deformities;
    public $claw_toe_right;
    public $hammer_toe_right;
    public $mallet_toe_right;
    public $hallux_valgus_right;
    public $hallux_varus_right;
    public $hallux_rigidus_limitus_right;
    public $bunion_right;
    public $bunionette_right;
    public $charcot_foot_right;
    public $post_surgical_deformity_right;
    public $claw_toe_left;
    public $hammer_toe_left;
    public $mallet_toe_left;
    public $hallux_valgus_left;
    public $hallux_varus_left;
    public $hallux_rigidus_limitus_left;
    public $bunion_left;
    public $bunionette_left;
    public $charcot_foot_left;
    public $post_surgical_deformity_left;

    public $neuropathic_symptom;
    public $neuropathic_symptom_right;
    public $neuropathic_symptom_left;
    public $monofilament_right;
    public $monofilament_left;
    public $tuning_fork_right;
    public $tuning_fork_left;
    // Tabs3
    public $foot_size_right;  
    public $foot_size_left;  
    public $type_of_footwear_indoor;
    public $type_of_footwear_outdoor;
    public $type_of_footwear_exercise;
    public $sock;

    //Tabs4
    public $foot_take_care;
    public $foot_general_footcare;  
    public $foot_usually_take;  
    public $foot_take_care_his;
    public $foot_take_check_his;

    // Tabs5
    public $risk_categorization_diabetic;

    //Tabs6

    public $daily_foot;
    public $always_wear;
    public $regular_callus;
    public $avoid_foot;
    public $contact_your;

    public function rules()
    {
        return [
            [[
            'occupation',
            'smoking',
            'activity',
            'using_ambulation',
            'previous_foot_ulcer',
            'previous_foot_ulcer_right',
            'previous_foot_ulcer_left',

            'previous_amputation',
            'previous_amputation_right',
            'previous_amputation_left',
            'prosthesis',
            'prosthesis_right',
            'prosthesis_left',
            'previous_revascularization',
            'previous_revascularization_right',
            'previous_revascularization_left',
            'evt_right',
            'evt_note_right',
            'evt_date_right',
        
            'bypass_right',
            'bypass_date_right',
        
            'hybrid_right',
            'hybrid_date_right',
        
            'evt_left',
            'evt_note_left',
            'evt_date_left',
        
            'bypass_left',
            'bypass_date_left',
        
            'hybrid_left',
            'hybrid_date_left',

            'chief_complaint',
            'hair_loss_right',
            'hair_loss_left',
            'fungal_infection_right',
            'fungal_infection_left',
            'color_change_right',
            'color_change_left',
            'skin_condition_right',
            'skin_condition_left',
            'interspace_right',
            'interspace_left',
            'temperature_change_right',
            'temperature_change_left',
            'toenail_problem',

            'fungal_nail_right',
            'hypertrophic_right',
            'distrophic_right',
            'discolored_right',
            'elongated_right',
            'ingrown_right',
            'involuted_right',
            'fungal_nail_left',
            'hypertrophic_left',
            'distrophic_left',
            'discolored_left',
            'elongated_left',
            'ingrown_left',
            'involuted_left',
            'splitting_right',
            'splitting_left',
            'skin_lesion',
            'skin_lesion_type_right',
            'skin_lesion_type_left',
            'foot_type_right',
            'foot_type_left',
            'silfverskiold_test_right',
            'silfverskiold_test_left',
            'deformities',

            'claw_toe_right',
            'hammer_toe_right',
            'mallet_toe_right',
            'hallux_valgus_right',
            'hallux_varus_right',
            'hallux_rigidus_limitus_right',
            'bunion_right',
            'bunionette_right',
            'charcot_foot_right',
            'post_surgical_deformity_right',
            'claw_toe_left',
            'hammer_toe_left',
            'mallet_toe_left',
            'hallux_valgus_left',
            'hallux_varus_left',
            'hallux_rigidus_limitus_left',
            'bunion_left',
            'bunionette_left',
            'charcot_foot_left',
            'post_surgical_deformity_left',

            'neuropathic_symptom',
            'neuropathic_symptom_right',
            'neuropathic_symptom_left',
            'monofilament_right',
            'monofilament_left',
            'tuning_fork_right',
            'tuning_fork_left',

            'foot_size_right',  
            'foot_size_left',  
            'type_of_footwear_indoor',
            'type_of_footwear_outdoor',
            'type_of_footwear_exercise',
            'sock',
            'foot_take_care',
            'foto_general_footcare',
            'foot_take_care_his',
            'foot_take_check_his',

            'risk_categorization_diabetic',

            'daily_foot',
            'always_wear',
            'regular_callus',
            'avoid_foot',
            'contact_your',


            

        ], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'occupation' => 'occupation',
            'smoking' => 'smoking',
            'activity' => 'activity',
            'using_ambulation'=> 'using_ambulation',
            'previous_foot_ulcer' => 'previous_foot_ulcer',
            'previous_foot_ulcer_right' => 'previous_foot_ulcer_right',
            'previous_foot_ulcer_left' => 'previous_foot_ulcer_left',
            'prosthesis' => 'prosthesis',
            'prosthesis_right' => 'prosthesis_right',
            'prosthesis_left' => 'prosthesis_left',
            'previous_revascularization' => 'previous_revascularization',
            'previous_revascularization_right' => 'previous_revascularization_right',
            'previous_revascularization_left' => 'previous_revascularization_left',
            'evt_right' => 'evt_right',
            'evt_note_right' => 'evt_note_right',
            'evt_date_right' => 'evt_date_right',
        
            'bypass_right' => 'bypass_right',
            'bypass_date_right' => 'bypass_date_right',
        
            'hybrid_right' => 'hybrid_right',
            'hybrid_date_right' => 'hybrid_date_right',
        
            'evt_left' => 'evt_left',
            'evt_note_left' => 'evt_note_left',
            'evt_date_left' => 'evt_date_left',
        
            'bypass_left' => 'bypass_left',
            'bypass_date_left' => 'bypass_date_left',
        
            'hybrid_left' => 'hybrid_left',
            'hybrid_date_left' => 'hybrid_date_left',

            'chief_complaint' => 'chief_complaint',
            'hair_loss_right' => 'hair_loss_right',
            'hair_loss_left' => 'hair_loss_left',
            'fungal_infection_right' => 'fungal_infection_right',
            'fungal_infection_left' => 'fungal_infection_left',
            'color_change_right' => 'color_change_right',
            'color_change_left' => 'color_change_left',
            'skin_condition_right' => 'skin_condition_right',
            'skin_condition_left' => 'skin_condition_left',
            'interspace_right' => 'interspace_right',
            'interspace_left' => 'interspace_left',
            'temperature_change' => 'temperature_change',
            'temperature_change_right' => 'temperature_change_right',
            'temperature_change_left' => 'temperature_change_left',
            'toenail_problem' => 'toenail_problem',
            'fungal_nail_right' => 'fungal_nail_right',
            'hypertrophic_right' => 'hypertrophic_right',
            'distrophic_right' => 'distrophic_right',
            'discolored_right' => 'discolored_right',
            'elongated_right' => 'elongated_right',
            'ingrown_right' => 'ingrown_right',
            'involuted_right' => 'involuted_right',
            'fungal_nail_left' => 'fungal_nail_left',
            'hypertrophic_left' => 'hypertrophic_left',
            'distrophic_left' => 'distrophic_left',
            'discolored_left' => 'discolored_left',
            'elongated_left' => 'elongated_left',
            'ingrown_left' => 'ingrown_left',
            'involuted_left' => 'involuted_left',
            'splitting_right' => 'splitting_right',
            'splitting_left' => 'splitting_left',
            'skin_lesion' => 'skin_lesion',
             'skin_lesion_type_right' => 'skin_lesion_type_right',
            'skin_lesion_type_left'  => 'skin_lesion_type_left',
            'foot_type_right' => 'foot_type_right',
            'foot_type_left' => 'foot_type_left',
            'silfverskiold_test_right' => 'silfverskiold_test_right',
            'silfverskiold_test_left' => 'silfverskiold_test_left',
            'deformities' => 'deformities',
            'claw_toe_right' =>	'claw_toe_right',
            'hammer_toe_right'=>	'hammer_toe_right',
            'mallet_toe_right'=>	'mallet_toe_right',
            'hallux_valgus_right'=>	'hallux_valgus_right',
            'hallux_varus_right'=>	'hallux_varus_right',
            'hallux_rigidus_limitus_right'=>	'hallux_rigidus_limitus_right',
            'bunion_right'=>	'bunion_right',
            'bunionette_right'=>	'bunionette_right',
            'charcot_foot_right'=>	'charcot_foot_right',
            'post_surgical_deformity_right'=>	'post_surgical_deformity_right',
            'claw_toe_left'=>	'claw_toe_left',
            'hammer_toe_left'=>	'hammer_toe_left',
            'mallet_toe_left'=>	'mallet_toe_left',
            'hallux_valgus_left'=>	'hallux_valgus_left',
            'hallux_varus_left'=>	'hallux_varus_left',
            'hallux_rigidus_limitus_left'=>	'hallux_rigidus_limitus_left',
            'bunion_left'=>	'bunion_left',
            'bunionette_left'=>	'bunionette_left',
            'charcot_foot_left'=>	'charcot_foot_left',
            'post_surgical_deformity_left'=>	'post_surgical_deformity_left',

            'neuropathic_symptom' => 'neuropathic_symptom',
            'neuropathic_symptom_right' => 'neuropathic_symptom_right',
            'neuropathic_symptom_left' => 'neuropathic_symptom_left',
            'monofilament_right' => 'monofilament_right',
            'monofilament_left' => 'monofilament_left',
            'tuning_fork_right' => 'tuning_fork_right',
            'tuning_fork_left' => 'tuning_fork_left',

            'foot_size_right' => 'foot_size_right',  
            'foot_size_left' => 'foot_size_left',  
            'type_of_footwear_indoor' => 'type_of_footwear_indoor',
            'type_of_footwear_outdoor' => 'type_of_footwear_outdoor',
            'type_of_footwear_exercise' => 'type_of_footwear_exercise',
            'sock' => 'sock',
            'foot_take_care' => 'foot_take_care',
            'foot_general_footcare' => 'foot_general_footcare',
            'foot_take_care_his' => 'foot_take_care_his',
            'foot_take_check_his' => 'foot_take_check_his',
            'risk_categorization_diabetic' => 'risk_categorization_diabetic',

            'daily_foot' => 'daily_foot',
            'always_wear' => 'daily_foot',
            'regular_callus' => 'daily_foot',
            'avoid_foot' => 'daily_foot',
            'contact_your' => 'daily_foot',

        ];
    }

}
?>