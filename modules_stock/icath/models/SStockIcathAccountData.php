<?php

namespace app\modules_stock\icath\models;

use Yii;

/**
 * This is the model class for table "s_stock_icath_account_data".
 *
 * @property string $id
 * @property string $vn
 * @property string $hn
 * @property string $an
 * @property int $dispen_id
 * @property string $code รหัสเวชภัณฑ์
 * @property int $qty จำนวนรับเข้า
 * @property string $price ราคา/หน่วย
 * @property string $totalprice ราคารวม
 * @property string $detail รายละเอียด
 * @property string $receive_data_lot LOTที่รับ
 * @property int $receive_data_id เลขที่LOTที่รับ
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
 * @property int $vendor_id บริษัท
 * @property string $vendor_dispen_lot เลขที่อ้างอิงvendor_dispen_lot
 */
class SStockIcathAccountData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 's_stock_icath_account_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'hn', 'date_start_service', 'time_start_service', 'vendor_dispen_lot'], 'required'],
            [['id'], 'string'],
            [['dispen_id', 'qty', 'receive_data_id', 'vendor_id'], 'default', 'value' => null],
            [['dispen_id', 'qty', 'receive_data_id', 'vendor_id'], 'integer'],
            [['price', 'totalprice'], 'number'],
            [['data_json', 'created_at', 'updated_at', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service'], 'safe'],
            [['vn', 'an'], 'string', 'max' => 12],
            [['hn'], 'string', 'max' => 9],
            [['code'], 'string', 'max' => 50],
            [['detail', 'receive_data_lot', 'requester', 'created_by', 'updated_by', 'vendor_dispen_lot'], 'string', 'max' => 255],
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
            'an' => 'An',
            'dispen_id' => 'Dispen ID',
            'code' => 'รหัสเวชภัณฑ์',
            'qty' => 'จำนวนรับเข้า',
            'price' => 'ราคา/หน่วย',
            'totalprice' => 'ราคารวม',
            'detail' => 'รายละเอียด',
            'receive_data_lot' => 'LOTที่รับ',
            'receive_data_id' => 'เลขที่LOTที่รับ',
            'data_json' => 'Data Json',
            'requester' => 'Requester',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'date_start_service' => 'Date Start Service',
            'time_start_service' => 'Time Start Service',
            'date_end_service' => 'Date End Service',
            'time_end_service' => 'Time End Service',
            'vendor_id' => 'บริษัท',
            'vendor_dispen_lot' => 'เลขที่อ้างอิงvendor_dispen_lot',
        ];
    }
}
