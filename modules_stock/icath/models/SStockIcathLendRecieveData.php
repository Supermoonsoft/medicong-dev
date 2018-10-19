<?php

namespace app\modules_stock\icath\models;

use Yii;

/**
 * This is the model class for table "s_stock_icath_lend_recieve_data".
 *
 * @property string $id
 * @property int $receive_id
 * @property string $code รหัสเวชภัณฑ์
 * @property int $qty จำนวน
 * @property string $unitprice ราคาขาย/หน่วย
 * @property string $unitcost ราคาทุน/หน่วย
 * @property string $lot LOT
 * @property string $mfd_date วันผลิต
 * @property string $exp_date วันหมดอายุ
 * @property string $detail รายละเอียด
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
 * @property string $vendor_dispen_lot เลขที่อ้างอิง
 */
class SStockIcathLendRecieveData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 's_stock_icath_lend_recieve_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            //[['date_start_service', 'time_start_service', 'vendor_dispen_lot'], 'required'],
            [['id'], 'string'],
            [['receive_id', 'qty'], 'default', 'value' => null],
            [[ 'qty'], 'integer'],
            [['unitprice', 'unitcost'], 'number'],
            [['mfd_date', 'exp_date', 'data_json', 'created_at', 'updated_at', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service'], 'safe'],
            [['receive_id','code', 'lot', 'detail', 'requester', 'created_by', 'updated_by', 'vendor_dispen_lot'], 'string', 'max' => 255],
            [['vn'], 'string', 'max' => 12],
            [['hn'], 'string', 'max' => 9],
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
            'receive_id' => 'Receive ID',
            'code' => 'รหัสเวชภัณฑ์',
            'qty' => 'จำนวน',
            'unitprice' => 'ราคาขาย/หน่วย',
            'unitcost' => 'ราคาทุน/หน่วย',
            'lot' => 'LOT',
            'mfd_date' => 'วันผลิต',
            'exp_date' => 'วันหมดอายุ',
            'detail' => 'รายละเอียด',
            'vn' => 'Vn',
            'hn' => 'Hn',
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
            'vendor_dispen_lot' => 'เลขที่อ้างอิง',
        ];
    }
}
