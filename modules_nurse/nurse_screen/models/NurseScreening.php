<?php

namespace app\modules_nurse\nurse_screen\models;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

use Yii;


class NurseScreening extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%s_nurse_screening}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['requester', 'hn','vn', 'date_start_service', 'time_start_service'], 'required'],
            [['id'], 'string'],
            [['data_json', 'created_at', 'updated_at', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service'], 'safe'],
            [['cnk_er', 'chk_dm', 'chk_followup', 'chk_insurace', 'chk_contract', 'chk_im', 'chk_anc', 'chk_other', 'chk_risk', 'chk_risk_1', 'chk_risk_2', 'chk_risk_3', 'chk_risk_4', 'chk_risk_5', 'chk_thyroid', 'chk_eye', 'chk_illness', 'chk_checkup'], 'boolean'],
            [['pain_score'], 'number'],
            [['vn'], 'string', 'max' => 12],
            [['hn'], 'string', 'max' => 9],
            [['requester', 'created_by', 'updated_by', 'chk_dm_type', 'chk_other_text', 'chk_triage', 'chk_access', 'chk_contact_type', 'chk_loc', 'pain_type', 'pain_scale', 'chk_risk_infe', 'chk_thyroid_type'], 'string', 'max' => 255],
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
            'cnk_er' => 'บริการ ฉุกเฉิน',
            'chk_dm' => 'ผู้ป่วยเบาหวาน(Dm)',
            'chk_dm_type' => 'DM TYPE',
            'chk_thyroid' => 'ผู้ป่วย ไทรอยด์',
            'chk_thyroid_type' => 'ประเภทผู้ป่วยไทรอยด์',
            'chk_eye' => 'ตรวจตา',
            'chk_illness' => 'ผู้ป่วยทั่วไป',
            'chk_checkup' => 'ตรวจสุขภาพ',
            'chk_followup' => 'มาตามนัด/ติดตามอาการ',
            'chk_insurace' => 'ผู้ป่วยสิทธิ์ประกัน',
            'chk_contract' => 'Contract',
            'chk_im' => 'รับวัคซีน',
            'chk_anc' => 'Anc',
            'chk_other' => 'อื่นๆ',
            'chk_other_text' => 'หมายเหตุ',
            'chk_triage' => 'ความเร่งด่วน',
            'chk_access' => 'การมา',
            'chk_contact_type' => 'Contact_Type',
            'chk_loc' => 'ความรู้สึก',
            'pain_score' => 'PainScore',
            'pain_type' => 'PainType',
            'pain_scale' => 'PainScale',
            'chk_risk' => 'Full Risk',
            'chk_risk_1' => 'มีประวัติ',
            'chk_risk_2' => 'ได้ยา',
            'chk_risk_3' => 'ใช้อุปกรณ์',
            'chk_risk_4' => 'มีปัญหาการทรงตัว',
            'chk_risk_5' => 'แอลกอฮอล์',
            'chk_risk_infe' => 'Infection Risk Precaution',
            
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
