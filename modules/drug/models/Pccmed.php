<?php

namespace app\modules\drug\models;

use Yii;

/**
 * This is the model class for table "pcc_medication".
 *
 * @property string $id
 * @property string $vn
 * @property string $hn
 * @property string $an
 * @property string $icode รหัสรายการ
 * @property string $qty จำนวนจ่าย
 * @property string $unitprice ราคาขาย/หน่วย
 * @property string $druguse วิธีใช้
 * @property string $costprice ราคาทุน/หน่วย
 * @property string $totalprice รวมราคาขาย
 * @property string $provider_code
 * @property string $provider_name
 * @property string $date_service
 * @property string $time_service
 * @property array $data_json
 * @property string $unit
 * @property string $tmt24_code
 * @property string $usage_line1 วิธีใช้ 1
 * @property string $usage_line2 วิธีใช้ 2
 * @property string $usage_line3 วิธีใช้ 3
 * @property string $drug_name
 */
class Pccmed extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pcc_medication';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'vn', 'hn', 'icode'], 'required'],
            [['id'], 'string'],
            [['qty', 'unitprice', 'costprice', 'totalprice'], 'number'],
            [['date_service', 'time_service', 'data_json'], 'safe'],
            [['vn'], 'string', 'max' => 12],
            [['hn'], 'string', 'max' => 9],
            [['an', 'unit'], 'string', 'max' => 50],
            [['icode', 'tmt24_code'], 'string', 'max' => 24],
            [['druguse'], 'string', 'max' => 200],
            [['provider_code'], 'string', 'max' => 5],
            [['provider_name'], 'string', 'max' => 100],
            [['usage_line1', 'usage_line2', 'usage_line3', 'drug_name'], 'string', 'max' => 255],
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
            'icode' => 'Icode',
            'qty' => 'Qty',
            'unitprice' => 'Unitprice',
            'druguse' => 'Druguse',
            'costprice' => 'Costprice',
            'totalprice' => 'Totalprice',
            'provider_code' => 'Provider Code',
            'provider_name' => 'Provider Name',
            'date_service' => 'Date Service',
            'time_service' => 'Time Service',
            'data_json' => 'Data Json',
            'unit' => 'Unit',
            'tmt24_code' => 'Tmt24 Code',
            'usage_line1' => 'Usage Line1',
            'usage_line2' => 'Usage Line2',
            'usage_line3' => 'Usage Line3',
            'drug_name' => 'Drug Name',
        ];
    }
    public function afterFind()
    {
        foreach($this->attributes as $column_name => $value){
            if(preg_match('/(\d{4}-\d{2}-\d{2})/', $value)){ //ถ้ามีค่าในรูปแบบ 2016-05-20 13:30:45

                if($value == '0000-00-00'){ //ถ้าไม่มีข้อมูล
                    $this->setAttribute($column_name, null); //กำหนดให้เป็นค่าว่าง
                }else{
                    $date_and_time = explode('.', $value);
                    $date_time = explode(' ', $date_and_time[0]); //แยกวันและเวลา

                    $ymd = explode('-', $date_time[0]);//แยก ปี-เดือน-วัน
                    $year = (int) $ymd[0];//กำหนดให้เป็น int เพื่อการคำนวณ
                    $year = $year + 543;// นำปี +543
                    $result = $ymd[2] . '/' . $ymd[1] . '/' . $year ;//ได้รูปแบบ วัน/เดือน/ปี ชั่วโมง:นาที:วินาทีี
                    $this->setAttribute($column_name, $result);//กำหนดค่าใหม่
                }
            }

        }
        return parent::afterFind();
    }
}
