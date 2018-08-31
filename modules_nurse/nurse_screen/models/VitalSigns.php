<?php

namespace app\modules_nurse\nurse_screen\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use app\modules_nurse\nurse_screen\models\OpdVisit;

class VitalSigns extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return '{{%s_nurse_vitalsings}}';
    }

    public function rules()
    {
        return [
            //[['hn', 'date_start_service', 'time_start_service','requester'], 'required'],
            [['id'], 'string'],
            [['data_json', 'created_at', 'updated_at', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service'], 'safe'],
            [['btemp_1', 'sbp_1', 'dbp_1', 'position_1', 'arm_1', 'pr_1', 'pr_rhythm_1', 'rr_1', 'o2sat_1', 'btemp_2', 'sbp_2', 'dbp_2', 'position_2', 'arm_2', 'pr_2', 'pr_rhythm_2', 'rr_2', 'o2sat_2', 'bheight', 'bweight'], 'number'],
            [['vn'], 'string', 'max' => 12],
            [['hn'], 'string', 'max' => 9],
            [['requester', 'created_by', 'updated_by'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

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
            'btemp_1' => 'Btemp 1',
            'sbp_1' => 'Sbp_1',
            'dbp_1' => 'Dbp_1',
            'position_1' => 'Position_1',
            'arm_1' => 'Arm_1',
            'pr_1' => 'Pr_1',
            'pr_rhythm_1' => 'Pr_Rhythm_1',
            'rr_1' => 'Rr_1',
            'o2sat_1' => 'O2sat_1',
            'btemp_2' => 'Btemp_2',
            'sbp_2' => 'Sbp_2',
            'dbp_2' => 'Dbp_2',
            'position_2' => 'Position_2',
            'arm_2' => 'Arm_2',
            'pr_2' => 'Pr_2',
            'pr_rhythm_2' => 'Pr_Rhythm_2',
            'rr_2' => 'Rr_2',
            'o2sat_2' => 'O2s_2',
            'bheight' => 'ส่วนสูง',
            'bweight' => 'น้ำหนัก',
        ];
    }

/*
	public function getVisit() {
        return $this->hasOne(OpdVisit::className(), ['vn' => 'vn']);
    }
*/

/*
    public function beforeSave($insert){
            //$visit = OpdVisit::find()->where(['vn'=>$this->vn])->one();

    	if (VitalSigns::beforeSave($insert)) {
            $this->date_start_service = date('Y-m-d');
            $this->time_start_service = date('H:i:s');

    		return true;
    	} else {
    		$this->date_start_service = date('Y-m-d');
            $this->time_start_service = date('H:i:s');

    		return false;
    	}
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
*/
}
