<?php

namespace app\modules\lab\models;

use Yii;

/**
 * This is the model class for table "pcc_service_preorderlab".
 *
 * @property string $id
 * @property string $pcc_vn อ้างอิงตาราง pcc_visit
 * @property array $data_json
 * @property string $pcc_start_service_datetime
 * @property string $pcc_end_service_datetime
 * @property string $data1
 * @property string $data2
 * @property string $hospcode
 * @property string $lab_code
 * @property string $lab_name
 * @property string $lab_request_date
 * @property string $lab_result_date
 * @property string $lab_result
 * @property string $standard_result
 * @property string $lab_price
 * @property string $lab_code_moph
 * @property string $last_update
 */
class Preorderlab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pcc_service_preorderlab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'string'],
            [['data_json', 'pcc_start_service_datetime', 'pcc_end_service_datetime', 'lab_request_date', 'lab_result_date', 'last_update'], 'safe'],
            [['lab_price'], 'number'],
            [['pcc_vn'], 'string', 'max' => 12],
            [['data1', 'data2', 'lab_code', 'lab_name', 'lab_result', 'standard_result', 'lab_code_moph'], 'string', 'max' => 255],
            [['hospcode'], 'string', 'max' => 5],
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
            'pcc_vn' => 'Pcc Vn',
            'data_json' => 'Data Json',
            'pcc_start_service_datetime' => 'Pcc Start Service Datetime',
            'pcc_end_service_datetime' => 'Pcc End Service Datetime',
            'data1' => 'Data1',
            'data2' => 'Data2',
            'hospcode' => 'Hospcode',
            'lab_code' => 'Lab Code',
            'lab_name' => 'Lab Name',
            'lab_request_date' => 'Lab Request Date',
            'lab_result_date' => 'Lab Result Date',
            'lab_result' => 'Lab Result',
            'standard_result' => 'Standard Result',
            'lab_price' => 'Lab Price',
            'lab_code_moph' => 'Lab Code Moph',
            'last_update' => 'Last Update',
        ];
    }
}
