<?php

namespace app\modules_share\education\models;

use Yii;

/**
 * This is the model class for table "c_specialpp".
 *
 * @property string $id_specialpp
 * @property string $specialpp
 */
class CSpecialpp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'c_specialpp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_specialpp'], 'required'],
            [['id_specialpp'], 'string', 'max' => 7],
            [['specialpp'], 'string', 'max' => 100],
            [['id_specialpp'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_specialpp' => 'Id Specialpp',
            'specialpp' => 'Specialpp',
        ];
    }
}
