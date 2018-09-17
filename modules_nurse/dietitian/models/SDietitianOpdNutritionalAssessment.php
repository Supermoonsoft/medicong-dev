<?php

namespace app\modules_nurse\dietitian\models;

use Yii;

/**
 * This is the model class for table "s_dietitian_opd_nutritional_assessment".
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
 * @property string $visit_type
 * @property array $co_morbidities
 * @property array $Type_of_hd
 * @property array $nutrition_history
 * @property array $clinical_data
 * @property array $lab_result_today
 * @property string $dietary_intake
 * @property string $assessment_and_plan
 * @property string $idnt_diag1
 * @property string $idnt_diag2
 * @property string $idnt_diag3
 * @property string $idnt_diag4
 * @property string $idnt_diag5
 * @property string $next_followup
 * @property string $next_followup_date
 */
class SDietitianOpdNutritionalAssessment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 's_dietitian_opd_nutritional_assessment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['requester'], 'required'],
            [['id'], 'string'],
            [['data_json', 'created_at', 'updated_at', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service', 'Type_of_hd', 'nutrition_history', 'clinical_data', 'lab_result_today', 'next_followup_date'], 'safe'],
            [['vn'], 'string', 'max' => 12],
            [['hn'], 'string', 'max' => 9],
            [['requester', 'created_by', 'updated_by', 'data1', 'data2', 'visit_type', 'dietary_intake', 'assessment_and_plan', 'idnt_diag1', 'idnt_diag2', 'idnt_diag3', 'idnt_diag4', 'idnt_diag5', 'next_followup'], 'string', 'max' => 255],
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
            'visit_type' => 'Visit Type',
            'co_morbidities' => 'Co Morbidities',
            'Type_of_hd' => 'Type Of Hd',
            'nutrition_history' => 'Nutrition History',
            'clinical_data' => 'Clinical Data',
            'lab_result_today' => 'Lab Result Today',
            'dietary_intake' => 'Dietary Intake',
            'assessment_and_plan' => 'Assessment And Plan',
            'idnt_diag1' => 'Idnt Diag1',
            'idnt_diag2' => 'Idnt Diag2',
            'idnt_diag3' => 'Idnt Diag3',
            'idnt_diag4' => 'Idnt Diag4',
            'idnt_diag5' => 'Idnt Diag5',
            'next_followup' => 'Next Followup',
            'next_followup_date' => 'Next Followup Date',
        ];
    }
}
