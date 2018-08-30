<?php

namespace app\modules_nurse\nurse_screen\models;

use Yii;

/**
 * This is the model class for table "{{%s_opd_visit}}".
 *
 * @property string $id
 * @property string $vn gen from timestamp
 * @property string $hn
 * @property array $data_json
 * @property string $requester
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $service_start_date
 * @property string $service_start_time
 * @property string $service_end_date
 * @property string $service_end_time
 * @property string $service_type
 * @property string $service_department
 */
class OpdVisit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%s_opd_visit}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'hn'], 'required'],
            [['id'], 'string'],
            [['data_json', 'created_at', 'updated_at', 'service_start_date', 'service_start_time', 'service_end_date', 'service_end_time'], 'safe'],
            [['vn'], 'string', 'max' => 12],
            [['hn'], 'string', 'max' => 9],
            [['requester', 'created_by', 'updated_by', 'service_department'], 'string', 'max' => 255],
            [['service_type'], 'string', 'max' => 1],
            [['vn'], 'unique'],
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
            'service_start_date' => 'Service Start Date',
            'service_start_time' => 'Service Start Time',
            'service_end_date' => 'Service End Date',
            'service_end_time' => 'Service End Time',
            'service_type' => 'Service Type',
            'service_department' => 'Service Department',
        ];
    }
}
