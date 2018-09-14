<?php

namespace app\modules_share\qmanage\models;

use Yii;

/**
 * This is the model class for table "c_doctor_room".
 *
 * @property int $id
 * @property string $title
 * @property string $doctor_id
 * @property bool $is_active
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 */
class CDoctorRoom extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'c_doctor_room';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['is_active'], 'boolean'],
            [['title','doctor_id', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'doctor_id'=>'Doctoe Id',
            'is_active' => 'Is Active',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
        ];
    }
}
