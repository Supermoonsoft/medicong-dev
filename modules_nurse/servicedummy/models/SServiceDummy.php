<?php

namespace app\modules_nurse\servicedummy\models;

use Yii;

/**
 * This is the model class for table "s_service_dummy".
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
 */
class SServiceDummy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 's_service_dummy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'hn', 'date_start_service', 'time_start_service'], 'required'],
            [['id'], 'string'],
            [['data_json', 'created_at', 'updated_at', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service'], 'safe'],
            [['vn'], 'string', 'max' => 12],
            [['hn'], 'string', 'max' => 9],
            [['requester', 'created_by', 'updated_by', 'data1', 'data2'], 'string', 'max' => 255],
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
            'date_start_service' => 'วันบริการ',
            'time_start_service' => 'เวลาบริการ',
            'date_end_service' => 'Date End Service',
            'time_end_service' => 'Time End Service',
            'data1' => 'บริการที่ให้',
            'data2' => 'สรุปผล',
        ];
    }
}
