<?php

namespace app\modules_nurse\dietitian\models;

use Yii;

/**
 * This is the model class for table "s_dietitian_ipd_nutririon_visit_record".
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
 * @property string $principal_diag
 * @property string $co_morbidity
 * @property int $visit_no
 * @property string $source_data
 * @property double $height
 * @property string $long
 * @property string $arm_span
 * @property double $weight
 * @property string $weighing
 * @property string $bmi
 * @property string $bmi_check
 * @property string $albumin
 * @property string $tlc
 * @property string $shape
 * @property double $weight_change
 * @property string $nature_food
 * @property string $food_intake
 * @property array $chew
 * @property array $digestive
 * @property array $eat
 * @property array $food_access
 * @property array $disease_min
 * @property array $disease_max
 * @property string $idnt_diag1
 * @property string $idnt_diag2
 * @property string $idnt_diag3
 * @property string $idnt_diag4
 * @property string $idnt_diag5
 */
class SDietitianIpdNutririonVisitRecord extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 's_dietitian_ipd_nutririon_visit_record';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            //[['id', 'hn', 'date_start_service', 'time_start_service'], 'required'],
            [['id'], 'string'],
            [['data_json', 'created_at', 'updated_at', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service', 'chew', 'digestive', 'eat', 'food_access', 'disease_min', 'disease_max'], 'safe'],
            [['visit_no'], 'default', 'value' => null],
            [['visit_no'], 'integer'],
            [['height', 'weight', 'weight_change'], 'number'],
            [['vn'], 'string', 'max' => 12],
            [['hn'], 'string', 'max' => 9],
            [['requester', 'created_by', 'updated_by', 'data1', 'data2', 'principal_diag', 'co_morbidity', 'source_data', 'long', 'arm_span', 'bmi', 'albumin', 'tlc', 'shape', 'nature_food', 'food_intake', 'idnt_diag1', 'idnt_diag2', 'idnt_diag3', 'idnt_diag4', 'idnt_diag5'], 'string', 'max' => 255],
            [['weighing', 'bmi_check'], 'string', 'max' => 1],
            //[['id'], 'unique'],
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
            'co_morbidity' => 'Co Morbidity',
            'visit_no' => 'Visit No',
            'source_data' => 'Source Data',
            'height' => 'Height',
            'long' => 'Long',
            'arm_span' => 'Arm Span',
            'weight' => 'Weight',
            'weighing' => 'Weighing',
            'bmi' => 'Bmi',
            'bmi_check' => 'Bmi Check',
            'albumin' => 'Albumin',
            'tlc' => 'Tlc',
            'shape' => 'Shape',
            'weight_change' => 'Weight Change',
            'nature_food' => 'Nature Food',
            'food_intake' => 'Food Intake',
            'chew' => 'Chew',
            'digestive' => 'Digestive',
            'eat' => 'Eat',
            'food_access' => 'Food Access',
            'disease_min' => 'Disease Min',
            'disease_max' => 'Disease Max',
            'idnt_diag1' => 'Idnt Diag1',
            'idnt_diag2' => 'Idnt Diag2',
            'idnt_diag3' => 'Idnt Diag3',
            'idnt_diag4' => 'Idnt Diag4',
            'idnt_diag5' => 'Idnt Diag5',
        ];
    }
}
