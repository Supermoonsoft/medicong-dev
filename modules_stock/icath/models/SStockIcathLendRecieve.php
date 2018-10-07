<?php

namespace app\modules_stock\icath\models;

use Yii;

/**
 * This is the model class for table "s_stock_icath_lend_recieve".
 *
 * @property string $id
 * @property string $vn
 * @property string $hn
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $date_start_service
 * @property string $time_start_service
 * @property string $date_end_service
 * @property string $time_end_service
 * @property string $date_in วันที่รับเข้า/ยืม
 * @property string $vendor บริษัท
 * @property string $invoice
 * @property string $date_invoice
 * @property string $detail รายละเอียด
 * @property double $totalprice มูลค่ารวม
 * @property string $requester
 * @property array $data_json
 */
class SStockIcathLendRecieve extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 's_stock_icath_lend_recieve';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'date_start_service', 'time_start_service'], 'required'],
            [['id'], 'string'],
            [['created_at', 'updated_at', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service', 'date_in', 'date_invoice', 'data_json'], 'safe'],
            [['totalprice'], 'number'],
            [['vn'], 'string', 'max' => 12],
            [['hn'], 'string', 'max' => 9],
            [['created_by', 'updated_by', 'vendor', 'invoice', 'detail', 'requester'], 'string', 'max' => 255],
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
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'date_start_service' => 'Date Start Service',
            'time_start_service' => 'Time Start Service',
            'date_end_service' => 'Date End Service',
            'time_end_service' => 'Time End Service',
            'date_in' => 'วันที่รับเข้า/ยืม',
            'vendor' => 'บริษัท',
            'invoice' => 'Invoice',
            'date_invoice' => 'Date Invoice',
            'detail' => 'รายละเอียด',
            'totalprice' => 'มูลค่ารวม',
            'requester' => 'Requester',
            'data_json' => 'Data Json',
        ];
    }
}
