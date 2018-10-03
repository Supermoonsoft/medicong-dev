<?php

namespace app\modules\queuemanage\models;

use Yii;

/**
 * This is the model class for table "c_doctor_room".
 *
 * @property int $id
 * @property string $room_title
 * @property string $doctor_id
 * @property bool $is_active
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
            [['doctor_id'], 'string'],
            [['is_active'], 'boolean'],
            [['room_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'room_title' => 'Room Title',
            'doctor_id' => 'Doctor ID',
            'is_active' => 'Is Active',
        ];
    }
}
