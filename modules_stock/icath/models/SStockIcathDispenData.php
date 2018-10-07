<?php

namespace app\modules_stock\icath\models;

use Yii;

/**
 * This is the model class for table "s_stock_icath_dispen_data".
 *
 * @property string $id
 * @property string $vn
 * @property string $hn
 * @property string $an
 * @property int $dispen_id
 * @property string $code รหัสเวชภัณฑ์
 * @property int $qty จำนวนจ่าย
 * @property string $price ราคา/หน่วย
 * @property string $totalprice ราคารวม
 * @property string $detail รายละเอียด
 * @property string $dispen_data_lot LOTที่จ่าย
 * @property int $dispen_data_id เลขที่LOTที่จ่าย
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
 */
class SStockIcathDispenData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 's_stock_icath_dispen_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'hn', 'date_start_service', 'time_start_service'], 'required'],
            [['id'], 'string'],
            [['dispen_id', 'qty', 'dispen_data_id', 'vendor_id'], 'default', 'value' => null],
            [['dispen_id', 'qty', 'dispen_data_id', 'vendor_id'], 'integer'],
            [['price', 'totalprice'], 'number'],
            [['data_json', 'created_at', 'updated_at', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service'], 'safe'],
            [['vn', 'an'], 'string', 'max' => 12],
            [['hn'], 'string', 'max' => 9],
            [['code'], 'string', 'max' => 50],
            [['detail', 'dispen_data_lot', 'requester', 'created_by', 'updated_by'], 'string', 'max' => 255],
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
            'qty' => 'จำนวนจ่าย',
            'price' => 'ราคา/หน่วย',
            'totalprice' => 'ราคารวม',
            'detail' => 'รายละเอียด',
            'dispen_data_lot' => 'LOTที่จ่าย',
            'dispen_data_id' => 'เลขที่LOTที่จ่าย',
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
        ];
    }
}
