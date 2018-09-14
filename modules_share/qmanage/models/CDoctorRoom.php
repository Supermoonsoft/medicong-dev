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
            [['title'],'required'],
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
            'id' => 'รหัสห้อง',
            'title' => 'ชื่อห้อง',
            'doctor_id'=>'แพทย์ประจำห้อง',
            'is_active' => 'เปิดทำการ',
            'created_by' => 'เพิ่มโดย',
            'created_at' => 'เวลาเพิ่ม',
            'updated_by' => 'แก้ไขโดย',
            'updated_at' => 'เวลาแก้ไข',
        ];
    }
}
