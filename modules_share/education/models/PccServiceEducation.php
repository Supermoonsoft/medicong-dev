<?php

namespace app\modules_share\education\models;

use Yii;

/**
 * This is the model class for table "pcc_service_education".
 *
 * @property string $id
 * @property string $hn
 * @property string $date_service
 * @property string $education_code
 * @property string $education_name
 * @property array $data_json
 * @property string $last_update
 * @property string $hospcode
 * @property string $cid เลขบัตรประชาชน
 * @property string $pcc_vn Vn pic
 * @property string $provider
 */
class PccServiceEducation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pcc_service_education';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['education_code',], 'required'],
            [['id'], 'string'],
            [['date_service', 'data_json', 'last_update'], 'safe'],
            [['hn'], 'string', 'max' => 9],
            [['education_code'], 'string', 'max' => 50],
            [['education_name', 'provider'], 'string', 'max' => 255],
            [['hospcode'], 'string', 'max' => 5],
            [['cid'], 'string', 'max' => 13],
            [['pcc_vn'], 'string', 'max' => 12],
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
            'date_service' => 'Date Service',
            'education_code' => 'Education Code',
            'education_name' => 'Education Name',
            'data_json' => 'Data Json',
            'last_update' => 'Last Update',
            'hospcode' => 'Hospcode',
            'cid' => 'Cid',
            'pcc_vn' => 'Pcc Vn',
            'provider' => 'Provider',
        ];
    }
    public function getEdname(){
        return CSpecialpp::find()
                ->select(['specialpp'])
                ->where(['id_specialpp'=> $this->education_code]);
    }
}
