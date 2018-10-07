<?php

namespace app\modules_stock\icath\models;

use Yii;

/**
 * This is the model class for table "m_stock_icath_vendor".
 *
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $requester
 * @property array $data_json
 * @property string $data1
 * @property string $data2
 * @property string $vendor_name บริษัท
 * @property string $address ที่อยู่
 * @property string $telephone หมายเลขโทรศัพท์
 * @property string $id
 */
class MStockIcathVendor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'm_stock_icath_vendor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'data_json'], 'safe'],
            [['created_by', 'updated_by', 'requester', 'data1', 'data2', 'vendor_name', 'address', 'telephone'], 'string', 'max' => 255],
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
            'vendor_name' => 'บริษัท',
            'address' => 'ที่อยู่',
            'telephone' => 'หมายเลขโทรศัพท์',
            'id' => 'ID',
        ];
    }
}
