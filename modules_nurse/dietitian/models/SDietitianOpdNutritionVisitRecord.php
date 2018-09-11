<?php

namespace app\modules_nurse\dietitian\models;

use Yii;

/**
 * This is the model class for table "s_dietitian_opd_nutrition_visit_record".
 *
 * @property string $id
 * @property string $vn
 * @property string $hn
 * @property array $data_json
 * @property string $requester
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $date_start_service
 * @property string $time_start_service
 * @property string $date_end_service
 * @property string $time_end_service
 * @property string $data1
 * @property string $data2
 * @property array $principal_diag
 * @property string $nutritional_histiry
 * @property string $pg
 * @property string $a1c
 * @property string $tc
  @property string $tg
 * @property string $hdl_c
 * @property string $ldl_c
 * @property string $non_hdl_c
 * @property string $bun
 * @property string $cr
 * @property string $egfr
 * @property string $sodium
 * @property string $potassium
 * @property string $chloride
 * @property string $co2
 * @property string $albumin
 * @property string $calcium
 * @property string $phosphorus
 * @property string $magnesium
 * @property string $uric_acid
 * @property string $hb
 * @property string $alt_lab
 * @property string $idnt_diag1
 * @property string $idnt_diag2
 * @property string $idnt_diag3
 * @property string $idnt_diag4
 * @property string $idnt_diag5
 * @property int $stage_of_chang
 * @property string $lest_2_serving
 * @property string $limit_high
 * @property string $control_protein
 * @property string $control_cho
 * @property string $limit_added_sugar
 * @property string $control_fruit
 * @property string $least_4_serving
 * @property string $limit_sodium
 * @property string $limit_alcohol
 * @property string $physical_activity
 * @property string $next_followup
 * @property string $next_follow_check
 */
class SDietitianOpdNutritionVisitRecord extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 's_dietitian_opd_nutrition_visit_record';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            //[['id', 'hn', 'date_start_service', 'time_start_service'], 'required'],
            [['id', 'nutritional_histiry'], 'string'],
            [['data_json', 'created_at', 'updated_at', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service', 'principal_diag'], 'safe'],
            [['stage_of_chang'], 'default', 'value' => null],
            [['stage_of_chang'], 'integer'],
            [['vn'], 'string', 'max' => 12],
            [['hn'], 'string', 'max' => 9],
            [['requester', 'created_by', 'updated_by', 'data1','next_follow_check', 'data2', 'pg', 'a1c', 'tc','tg', 'hdl_c', 'ldl_c', 'non_hdl_c', 'bun', 'cr', 'egfr', 'sodium', 'potassium', 'chloride', 'co2', 'albumin', 'calcium', 'phosphorus', 'magnesium', 'hb', 'alt_lab', 'idnt_diag1', 'idnt_diag2', 'idnt_diag3', 'idnt_diag4', 'idnt_diag5', 'lest_2_serving', 'limit_high', 'control_protein', 'control_cho', 'limit_added_sugar', 'control_fruit', 'least_4_serving', 'limit_sodium', 'limit_alcohol', 'physical_activity', 'next_followup'], 'string', 'max' => 255],
            [['uric_acid'], 'string', 'max' => 32],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vn' => 'Vn',
            'hn' => 'Hn',
            'data_json' => 'Data Json',
            'requester' => 'Requester',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'date_start_service' => 'Date Start Service',
            'time_start_service' => 'Time Start Service',
            'date_end_service' => 'Date End Service',
            'time_end_service' => 'Time End Service',
            'data1' => 'Data1',
            'data2' => 'Data2',
            'principal_diag' => 'Principal Diag',
            'nutritional_histiry' => 'Nutritional Histiry',
            'pg' => 'Pg',
            'a1c' => 'A1c',
            'tc' => 'Tc',
            'tg' => 'Tg',
            'hdl_c' => 'Hdl C',
            'ldl_c' => 'Ldl C',
            'non_hdl_c' => 'Non Hdl C',
            'bun' => 'Bun',
            'cr' => 'Cr',
            'egfr' => 'Egfr',
            'sodium' => 'Sodium',
            'potassium' => 'Potassium',
            'chloride' => 'Chloride',
            'co2' => 'Co2',
            'albumin' => 'Albumin',
            'calcium' => 'Calcium',
            'phosphorus' => 'Phosphorus',
            'magnesium' => 'Magnesium',
            'uric_acid' => 'Uric Acid',
            'hb' => 'Hb',
            'alt_lab' => 'Alt Lab',
            'idnt_diag1' => 'Idnt Diag1',
            'idnt_diag2' => 'Idnt Diag2',
            'idnt_diag3' => 'Idnt Diag3',
            'idnt_diag4' => 'Idnt Diag4',
            'idnt_diag5' => 'Idnt Diag5',
            'stage_of_chang' => 'Stage Of Chang',
            'lest_2_serving' => 'Lest 2 Serving',
            'limit_high' => 'Limit High',
            'control_protein' => 'Control Protein',
            'control_cho' => 'Control Cho',
            'limit_added_sugar' => 'Limit Added Sugar',
            'control_fruit' => 'Control Fruit',
            'least_4_serving' => 'Least 4 Serving',
            'limit_sodium' => 'Limit Sodium',
            'limit_alcohol' => 'Limit Alcohol',
            'physical_activity' => 'Physical Activity',
            'next_followup' => 'Next Followup',
            'next_follow_check'=>'next_follow_check'
        ];
    }
}
