<?php

namespace app\modules_stock\icath\models;

use Yii;

/**
 * This is the model class for table "m_stock_icath_insurance".
 *
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $requester
 * @property array $data_json
 * @property string $data1
 * @property string $data2
 * @property string $insuranse_name คู่สัญญา
 * @property string $address ที่อยู่
 * @property string $telephone หมายเลขโทรศัพท์
 * @property string $id
 */
class MStockIcathInsurance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'm_stock_icath_insurance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'data_json'], 'safe'],
            [['created_by', 'updated_by', 'requester', 'data1', 'data2', 'insuranse_name', 'address', 'telephone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'requester' => 'Requester',
            'data_json' => 'Data Json',
            'data1' => 'Data1',
            'data2' => 'Data2',
            'insuranse_name' => 'คู่สัญญา',
            'address' => 'ที่อยู่',
            'telephone' => 'หมายเลขโทรศัพท์',
            'id' => 'ID',
        ];
    }
}
