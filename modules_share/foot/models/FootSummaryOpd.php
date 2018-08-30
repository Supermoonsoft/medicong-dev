<?php
namespace app\modules_share\foot\models;
use Yii;
use yii\helpers\ArrayHelper;
use app\models\Skill;
use yii\behaviors\AttributeBehavior;
use yii\db\ActiveRecord;


class FootSummaryOpd extends ActiveRecord{
    public $risk_of_foot_ulceration;
    public $right_monofilament;
    public $right_tuning_fork;
    public $right_dp;
    public $right_pt;
    public $right_abi;
    public $right_abi_non;
    public $right_claw_toe;
    public $right_hammer_toe;
    public $right_maillet_toe;
    public $right_hallux_algus;
    public $right_flat_foot;
    public $right_charcot_foot;
    public $right_post_surgical_deformity;
    public $right_callus;
    public $right_corn;
    public $right_nails;
    public $right_previon_foot_ulcer;
    public $right_previon_amputation;

    public $left_monofilament;
    public $left_tuning_fork;
    public $left_dp;
    public $left_pt;
    public $left_abi;
    public $left_abi_non;
    public $left_claw_toe;
    public $left_hammer_toe;
    public $left_maillet_toe;
    public $left_hallux_algus;
    public $left_flat_foot;
    public $left_charcot_foot;
    public $left_post_surgical_deformity;
    public $left_callus;
    public $left_corn;
    public $left_nails;
    public $left_previon_foot_ulcer;
    public $left_previon_amputation;

    public $daily_foot;
    public $always_wear;
    public $regular_callus;
    public $avoid_foot;
    public $contact_your;
    public function rules()
    {
        return [
            [[
            'risk_of_foot_ulceration',
            'right_monofilament',
            'right_tuning_fork',
            'right_dp',
            'right_pt',
            'right_abi',
            'right_abi_non',
            'right_claw_toe',
            'right_hammer_toe',
            'right_maillet_toe',
            'right_hallux_algus',
            'right_flat_foot',
            'right_charcot_foot',
            'right_post_surgical_deformity',
            'right_callus',
            'right_corn',
            'right_nails',
            'right_previon_foot_ulcer',
            'right_previon_amputation',

            'left_monofilament',
            'left_tuning_fork',
            'left_dp',
            'left_pt',
            'left_abi',
            'left_abi_non',
            'left_claw_toe',
            'left_hammer_toe',
            'left_maillet_toe',
            'left_hallux_algus',
            'left_flat_foot',
            'left_charcot_foot',
            'left_post_surgical_deformity',
            'left_callus',
            'left_corn',
            'left_nails',
            'left_previon_foot_ulcer',
            'left_previon_amputation',

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
            'risk_of_foot_ulceration' => 'risk_of_foot_ulceration',
            'right_monofilament' => 'monofilament',
            'right_tuning_fork' => 'tuning_fork',
            'right_dp' => 'right_dp',
            'right_pt' => 'right_pt',
            'right_abi' => 'right_abi',
            'right_abi_non' => 'right_abi_non',
            'right_claw_toe' => 'right_claw_toe',
            'right_hammer_toe' => 'right_hammer_toe',
            'right_maillet_toe' => 'right_maillet_toe',
            'right_flat_foot' => 'right_flat_foot',
            'right_charcot_foot' => 'right_charcot_foot',
            'right_post_surgical_deformity'=> 'right_post_surgical_deformity',
            'right_callus' => 'right_callus',
           'right_corn' => 'right_corn',
           'right_nails' => 'right_nails',
           'right_previon_foot_ulcer' => 'right_previon_foot_ulcer',
           'right_previon_amputation' =>'right_previon_amputation',

           'left_monofilament' => 'monofilament',
            'left_tuning_fork' => 'tuning_fork',
            'left_dp' => 'left_dp',
            'left_pt' => 'left_pt',
            'left_abi' => 'left_abi',
            'left_abi_non' => 'left_abi_non',
            'left_claw_toe' => 'left_claw_toe',
            'left_hammer_toe' => 'left_hammer_toe',
            'left_maillet_toe' => 'left_maillet_toe',
            'left_flat_foot' => 'left_flat_foot',
            'left_charcot_foot' => 'left_charcot_foot',
            'left_post_surgical_deformity'=> 'left_post_surgical_deformity',
            'left_callus' => 'left_callus',
           'left_corn' => 'left_corn',
           'left_nails' => 'left_nails',
           'left_previon_foot_ulcer' => 'left_previon_foot_ulcer',
           'left_previon_amputation' =>'left_previon_amputation',
           'daily_foot' => 'daily_foot',
           'always_wear' => 'daily_foot',
           'regular_callus' => 'daily_foot',
           'avoid_foot' => 'daily_foot',
           'contact_your' => 'daily_foot',
        ];
    }

}
?>