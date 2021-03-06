<?php

namespace app\modules_nurse\nurse_screen\models;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

use Yii;


class DmAssessment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%s_dm_assessment}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['requester', 'hn','vn', 'date_start_service', 'time_start_service'], 'required'],
            [['id'], 'string'],
            [['data_json', 'created_at', 'updated_at', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service', 'vaccination_date1', 'vaccination_date2'], 'safe'],
            [['chest_discomfort', 'blurred_vision', 'numbness', 'foot_ulcer', 'hbpm_frequency', 'hbpm_result', 'hbpm_sbp', 'hbpm_dbp', 'hbpm_pulse', 'smbg_frequency', 'smbg_result', 'smbg_sbp', 'smbg_dbp', 'smbg_pulse','smooking_ex1'], 'boolean'],
            [['vn'], 'string', 'max' => 12],
            [['hn'], 'string', 'max' => 9],
            [['requester', 'created_by', 'updated_by', 'last_meal_eating', 'last_meal_eating_data', 'last_insulin', 'last_insulin_data', 'psychosocial_problem', 'key_presenting', 'hbpm', 'hbpm_day', 'hbpm_week', 'hbpm_month','smooking2', 'hbpm_sbp_data', 'hbpm_dbp_data', 'hbpm_pulse_data', 'smbg', 'smbg_day', 'smbg_week', 'smbg_month', 'smbg_sbp_data', 'smbg_dbp_data', 'smbg_pulse_data', 'hyperglycemic', 'hyperglycemic_data', 'hypoglycemic', 'hypoglycemic_data', 'hypoglycemic_risk', 'hypoglycemic_risk1', 'hypoglycemic_risk1_data', 'hypoglycemic_risk2', 'hypoglycemic_risk2_data', 'hypoglycemic_risk3', 'hypoglycemic_risk3_data', 'diet_data1', 'diet_data2', 'exercise_data1', 'exercise_data2', 'drug_data1', 'drug_data2', 'smooking', 'smooking_ex1_day', 'smooking_ex1_year', 'smooking_ex2', 'smooking_ex2_day', 'smooking_ex2_year'], 'string', 'max' => 255],
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
            'last_meal_eating' => '1. Last meal eating time',
            'last_meal_eating_data' => 'Last Meal Eating Data',
            'last_insulin' => '2. Last insulin or SU usage time',
            'last_insulin_data' => 'Last Insulin Data',
            'psychosocial_problem' => '3. Psychosocial problem',
            'key_presenting' => '4. Key Presenting Symptom',
            'chest_discomfort' => ' Chest discomfort',
            'blurred_vision' => 'Blurred vision',
            'numbness' => 'Numbness',
            'foot_ulcer' => 'Foot Ulcer',
            'hbpm' => '5. HBPM',
            'hbpm_frequency' => 'Frequency',
            'hbpm_day' => 'Day',
            'hbpm_week' => 'Week',
            'hbpm_month' => 'Month',
            'hbpm_result' => 'Average Result',
            'hbpm_sbp' => 'SBP',
            'hbpm_sbp_data' => 'Hbpm Sbp Data',
            'hbpm_dbp' => 'DBP',
            'hbpm_dbp_data' => 'Hbpm Dbp Data',
            'hbpm_pulse' => 'PULSE',
            'hbpm_pulse_data' => 'Hbpm Pulse Data',
            'smbg' => '6. SMBG',
            'smbg_frequency' => 'Frequency',
            'smbg_day' => 'Day',
            'smbg_week' => 'Week',
            'smbg_month' => 'Month',
            'smbg_result' => 'Average Result',
            'smbg_sbp' => 'SBP',
            'smbg_sbp_data' => 'Smbg Sbp Data',
            'smbg_dbp' => 'DBP',
            'smbg_dbp_data' => 'Smbg Dbp Data',
            'smbg_pulse' => 'PULSE',
            'smbg_pulse_data' => 'Smbg Pulse Data',
            'hyperglycemic' => '7. Hyperglycemic Symptom at home',
            'hyperglycemic_data' => 'Hyperglycemic Data',
            'hypoglycemic' => '8. Hypoglycemic Symptom at home',
            'hypoglycemic_data' => 'Hypoglycemic Data',
            'hypoglycemic_risk' => '8.1 Hypoglycemia Risk',
            'hypoglycemic_risk1' => '8.2 Hypoglycemia Level 1',
            'hypoglycemic_risk1_data' => 'Hypoglycemic Risk1 Data',
            'hypoglycemic_risk2' => '8.3 Hypoglycemia Level 2',
            'hypoglycemic_risk2_data' => 'Hypoglycemic Risk2 Data',
            'hypoglycemic_risk3' => '8.4 Hypoglycemia Level 3',
            'hypoglycemic_risk3_data' => 'Hypoglycemic Risk3 Data',
            'diet_data1' => '9. Diet',
            'diet_data2' => 'Previous data',
            'exercise_data1' => '10. Exercise',
            'exercise_data2' => 'Previous data',
            'drug_data1' => '11. Drug Adherence',
            'drug_data2' => 'Previous data',
            'smooking' => '12. Smooking',
            'smooking2' => 'Previous data',
            'smooking_ex1' => 'Ex',
            'smooking_ex1_day' => 'Peak',
            'smooking_ex1_year' => 'When',
            'smooking_ex2' => 'Ex.',
            'smooking_ex2_day' => 'Peak',
            'smooking_ex2_year' => 'When',
            'vaccination_date1' => '13. Vaccination : Name & Data 1.',
            'vaccination_date2' => 'Vaccination : Name & Data 2.',
        ];
    }

    public function getVisit() {
        return $this->hasOne(OpdVisit::className(), ['vn' => 'vn']);
    }

    public function getDvisit() {
        return $this->visit->service_start_date;
    }

    public function getTvisit() {
        return $this->visit->service_start_time;
    }


    public function behaviors() {
        return[
            [
              'class' => BlameableBehavior::className(),
              'createdByAttribute' => 'created_by',
              'updatedByAttribute' => 'updated_by',
            ],
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new Expression('NOW()')
            ]
        ];
      }

}
