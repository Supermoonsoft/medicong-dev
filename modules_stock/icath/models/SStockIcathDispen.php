<?php

namespace app\modules_stock\icath\models;

use Yii;

/**
 * This is the model class for table "s_stock_icath_dispen".
 *
 * @property string $id
 * @property string $vn
 * @property string $hn
 * @property string $an
 * @property string $icd101 รหัสโรค
 * @property string $icd9 หัตถการ
 * @property int $doctor แพทย์
 * @property string $date_visit วันที่มา
 * @property string $datetime_or_start วันเวลาเริ่มผ่าตัด
 * @property string $datetime_or_end วันเวลาสิ้นสุดผ่าตัด
 * @property string $ward ตึก
 * @property string $room_or ห้องผ่าตัด
 * @property int $insurance_id คู่สัญญา
 * @property string $date_admit วันที่แอดมิด
 * @property string $date_dch วันที่จำหน่าย
 * @property int $doc_no เลขที่เอกสาร
 * @property string $doc_date วันที่บันทึกเอกสาร
 * @property string $ortype ประเภทการผ่าตัด
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
 * @property string $send_stock โอนเข้าคลัง
 * @property string $send_account โอนเข้าการเงิน
 * @property string $send_patient อนุมัติเก็บเงืน
 */
class SStockIcathDispen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 's_stock_icath_dispen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'hn', 'date_start_service', 'time_start_service'], 'required'],
            [['id'], 'string'],
            [['doctor', 'insurance_id', 'doc_no'], 'default', 'value' => null],
            [['doctor', 'insurance_id', 'doc_no'], 'integer'],
            [['date_visit', 'datetime_or_start', 'datetime_or_end', 'date_admit', 'date_dch', 'doc_date', 'data_json', 'created_at', 'updated_at', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service'], 'safe'],
            [['vn', 'an'], 'string', 'max' => 12],
            [['hn'], 'string', 'max' => 9],
            [['icd101', 'icd9', 'ward', 'room_or', 'ortype', 'requester', 'created_by', 'updated_by', 'send_stock', 'send_account', 'send_patient'], 'string', 'max' => 255],
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
            'icd101' => 'รหัสโรค',
            'icd9' => 'หัตถการ',
            'doctor' => 'แพทย์',
            'date_visit' => 'วันที่มา',
            'datetime_or_start' => 'วันเวลาเริ่มผ่าตัด',
            'datetime_or_end' => 'วันเวลาสิ้นสุดผ่าตัด',
            'ward' => 'ตึก',
            'room_or' => 'ห้องผ่าตัด',
            'insurance_id' => 'คู่สัญญา',
            'date_admit' => 'วันที่แอดมิด',
            'date_dch' => 'วันที่จำหน่าย',
            'doc_no' => 'เลขที่เอกสาร',
            'doc_date' => 'วันที่บันทึกเอกสาร',
            'ortype' => 'ประเภทการผ่าตัด',
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
            'send_stock' => 'โอนเข้าคลัง',
            'send_account' => 'โอนเข้าการเงิน',
            'send_patient' => 'อนุมัติเก็บเงืน',
        ];
    }
}
