<?php

namespace app\modules\chiefcomplaint\models;

use Yii;

/**
 * This is the model class for table "pcc_service_pi".
 *
 * @property string $id
 * @property string $pcc_vn อ้างอิงตาราง pcc_visit
 * @property array $data_json
 * @property string $pcc_start_service_datetime
 * @property string $pcc_end_service_datetime
 * @property string $data1
 * @property string $data2
 * @property string $hospcode
 * @property string $pi_text
 */
class Pccservicepi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pcc_service_pi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'pi_text'], 'string'],
            [['data_json', 'pcc_start_service_datetime', 'pcc_end_service_datetime'], 'safe'],
            [['pcc_vn'], 'string', 'max' => 12],
            [['data1', 'data2'], 'string', 'max' => 255],
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
            'pi_text' => 'Pi Text',
        ];
    }
}
