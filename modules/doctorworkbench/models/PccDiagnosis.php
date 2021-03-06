<?php

namespace app\modules\doctorworkbench\models;

use Yii;


class PccDiagnosis extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'pcc_service_diagnosis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icd_code', 'diag_type'], 'required'],
            [['id'], 'string'],
            [['date_service', 'time_service', 'data_json', 'last_update','cc','cid','pcc_vn'], 'safe'],
            [['hn'], 'string', 'max' => 9],
            [['vn', 'pcc_vn'], 'string', 'max' => 12],
            [['provider_code', 'hoscode'], 'string', 'max' => 5],
            [['provider_name'], 'string', 'max' => 100],
            [['icd_code'], 'string', 'max' => 50],
            [['icd_name'], 'string', 'max' => 255],
            [['diag_type'], 'string', 'max' => 10],
            [['cid'], 'string', 'max' => 13],
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
            'hn' => 'Hn',
            'vn' => 'Vn',
            'provider_code' => 'Provider Code',
            'provider_name' => 'Provider Name',
            'date_service' => 'Date Service',
            'time_service' => 'Time Service',
            'icd_code' => 'Icd Code',
            'icd_name' => 'Icd Name',
            'diag_type' => 'Diag Type',
            'data_json' => 'Data Json',
            'last_update' => 'Last Update',
            'cc' => 'cc',           
            'pcc_vn' => 'PCC_VN',
            'hoscode' => 'Hoscode',
            'cid' => 'เลขบัตรประชาชน',            
        ];
    }

    public  function getDiagtype(){
        return $this->hasOne(CDiagtype::className(), ['diagtype' => 'diag_type']);
    }
}
