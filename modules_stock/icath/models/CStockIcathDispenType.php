<?php

namespace app\modules_stock\icath\models;

use Yii;

/**
 * This is the model class for table "c_stock_icath_dispen_type".
 *
 * @property string $id
 * @property string $title ประเภทการจ่าย
 * @property string $map_code
 * @property bool $is_active
 */
class CStockIcathDispenType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'c_stock_icath_dispen_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['is_active'], 'boolean'],
            [['title', 'map_code'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'ประเภทการจ่าย',
            'map_code' => 'Map Code',
            'is_active' => 'Is Active',
        ];
    }
}
