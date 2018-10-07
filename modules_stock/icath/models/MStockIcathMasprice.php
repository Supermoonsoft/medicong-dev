<?php

namespace app\modules_stock\icath\models;

use Yii;

/**
 * This is the model class for table "m_stock_icath_masprice".
 *
 * @property string $section
 * @property string $code
 * @property string $name
 * @property string $charge_code
 * @property string $charge_name
 * @property string $opd_price
 * @property string $opd_dr_percent
 * @property string $opd_dr_amt
 * @property string $ipd_price
 * @property string $ipd_dr_percent
 * @property string $ipd_dr_amt
 * @property string $price_cost
 * @property string $recieve_code
 * @property string $recieve_thai_name
 * @property string $recieve_eng_name
 * @property string $change_date
 * @property string $update_time
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $requester
 * @property array $data_json
 * @property string $id
 */
class MStockIcathMasprice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'm_stock_icath_masprice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'data_json'], 'safe'],
            [['section', 'code', 'name', 'charge_code', 'charge_name', 'opd_price', 'opd_dr_percent', 'opd_dr_amt', 'ipd_price', 'ipd_dr_percent', 'ipd_dr_amt', 'price_cost', 'recieve_code', 'recieve_thai_name', 'recieve_eng_name', 'change_date', 'update_time', 'created_by', 'updated_by', 'requester'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'section' => 'Section',
            'code' => 'Code',
            'name' => 'Name',
            'charge_code' => 'Charge Code',
            'charge_name' => 'Charge Name',
            'opd_price' => 'Opd Price',
            'opd_dr_percent' => 'Opd Dr Percent',
            'opd_dr_amt' => 'Opd Dr Amt',
            'ipd_price' => 'Ipd Price',
            'ipd_dr_percent' => 'Ipd Dr Percent',
            'ipd_dr_amt' => 'Ipd Dr Amt',
            'price_cost' => 'Price Cost',
            'recieve_code' => 'Recieve Code',
            'recieve_thai_name' => 'Recieve Thai Name',
            'recieve_eng_name' => 'Recieve Eng Name',
            'change_date' => 'Change Date',
            'update_time' => 'Update Time',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'requester' => 'Requester',
            'data_json' => 'Data Json',
            'id' => 'ID',
        ];
    }
}
