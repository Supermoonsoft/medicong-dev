<?php

namespace app\modules_nurse\nurse_screen\models;

use Yii;

/**
 * This is the model class for table "{{%s_nurse_cc}}".
 *
 * @property string $id
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
 * @property bool $chk_cc_1  1.ไข้ เป็นมา
 * @property string $chk_cc_1_data
 * @property bool $chk_cc_2 2.เจ็บคอ เป็นมา
 * @property string $chk_cc_2_data
 * @property bool $chk_cc_3 3.ไอ เป็นมา
 * @property string $chk_cc_3_data
 * @property bool $chk_cc_4 4.ปวดท้อง เป็นมา
 * @property string $chk_cc_4_data
 * @property bool $chk_cc_5 5.คลื่นไส้อาเจียน
 * @property string $chk_cc_5_data
 * @property bool $chk_cc_6 6.เวียนศีรษะ เป็นมา
 * @property string $chk_cc_6_data
 * @property bool $chk_cc_7 7.ปวดศีรษะ เป็นมา
 * @property string $chk_cc_7_data
 * @property bool $chk_cc_8 8.มึนงง เป็นมา
 * @property string $chk_cc_8_data
 * @property bool $chk_cc_9 9.ใจสั่น เป็นมา
 * @property string $chk_cc_9_data
 * @property bool $chk_cc_10 10.เจ็บแน่นหน้าอก เป็นมา
 * @property string $chk_cc_10_data
 * @property bool $chk_cc_11 11.เหนื่อยหอบหายใจลำบาก เป็นมา
 * @property string $chk_cc_11_data
 * @property bool $chk_cc_12 12.ปัสสาวะแสบขัด เป็นมา
 * @property string $chk_cc_12_data
 * @property bool $chk_cc_13 13.ถ่ายเหลว เป็นมา
 * @property string $chk_cc_13_data
 * @property bool $chk_con_1 1.ปรึกษาตรวจเบาหวาน
 * @property string $chk_con_1_data
 * @property bool $chk_con_2 2.ปรึกษาตรวจไทรอยด์
 * @property string $chk_con_2_data
 * @property bool $chk_con_3 3.ปรึกษาตรวจความดันสูง
 * @property string $chk_con_3_data
 * @property bool $chk_con_4 4.ปรึกษาตรวจไขมัน
 * @property string $chk_con_4_data
 * @property bool $chk_con_5 5.ปรึกษาตรวจโปรแกรมตรวจสุขภาพ
 * @property string $chk_con_5_data
 * @property bool $chk_con_6 6.ปรึกษารับยาต่อเนื่อง
 * @property string $chk_con_6_data
 * @property bool $chk_con_7 7.ปรึกษาเรื่องวัคซีน
 * @property string $chk_con_7_data
 * @property bool $chk_fu_1 1.ติดตามตามนัด เบาหวาน
 * @property string $chk_fu_1_data
 * @property bool $chk_fu_2 2.ติดตามตามนัด ไทยรอยด์
 * @property string $chk_fu_2_data
 * @property bool $chk_fu_3 3.ติดตามตามนัด ความดันสูง
 * @property string $chk_fu_3_data
 * @property bool $chk_fu_4 4.ติดตามตามนัด ไขมัน
 * @property string $chk_fu_4_data
 * @property bool $chk_fu_5 5.ติดตามตามนัด อาการทั่วไปปกติ
 * @property string $chk_fu_5_data
 * @property bool $chk_fu_6 6.ติดตามตามนัด หลังผ่าตัด
 * @property string $chk_fu_6_data
 * @property bool $chk_fu_7 7.ติดตามตามนัด ทำแผลบริเวณ
 * @property string $chk_fu_7_data
 * @property bool $chk_fu_8 8.ติดตามตามนัด ตัดเล็บเท้า
 * @property string $chk_fu_8_data
 * @property bool $chk_fu_9 9.ติดตามตามนัด รับบริการวัคซีนไข้หวัดใหญ่
 * @property string $chk_fu_9_data
 * @property bool $chk_fu_10 10.ติดตามตามนัด รับบริการวัคซีน
 * @property string $chk_fu_10_data
 * @property bool $chk_fu_11 11.ติดตามตามนัด เรื่องแผลที่เท้า
 * @property string $chk_fu_11_data
 * @property bool $chk_chk_1 1.ตรวจสุขภาพประจำปี โปรแกรม
 * @property string $chk_chk_1_data
 * @property bool $chk_chk_2 2.ตรวจสุขภาพก่อนแต่งงานหรือวางแผนตั้งครรภ์
 * @property string $chk_chk_2_data
 * @property bool $chk_chk_3 3.ตรวจสุขภาพก่อนทำประกัน
 * @property string $chk_chk_3_data
 * @property bool $chk_chk_4 4.ตรวจสุขภาพขอใบขับขี่
 * @property string $chk_chk_4_data
 * @property bool $chk_chk_5 5.ตรวจสุขภาพขอใบรับรองแพทย์
 * @property string $chk_chk_5_data
 * @property string $nurse_text
 */
class NurseCc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%s_nurse_cc}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            //[['id', 'hn', 'date_start_service', 'time_start_service'], 'required'],
            [['id', 'nurse_text'], 'string'],
            [['data_json', 'created_at', 'updated_at', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service'], 'safe'],
            [['chk_cc_1', 'chk_cc_2', 'chk_cc_3', 'chk_cc_4', 'chk_cc_5', 'chk_cc_6', 'chk_cc_7', 'chk_cc_8', 'chk_cc_9', 'chk_cc_10', 'chk_cc_11', 'chk_cc_12', 'chk_cc_13', 'chk_con_1', 'chk_con_2', 'chk_con_3', 'chk_con_4', 'chk_con_5', 'chk_con_6', 'chk_con_7', 'chk_fu_1', 'chk_fu_2', 'chk_fu_3', 'chk_fu_4', 'chk_fu_5', 'chk_fu_6', 'chk_fu_7', 'chk_fu_8', 'chk_fu_9', 'chk_fu_10', 'chk_fu_11', 'chk_chk_1', 'chk_chk_2', 'chk_chk_3', 'chk_chk_4', 'chk_chk_5'], 'boolean'],
            [['vn'], 'string', 'max' => 12],
            [['hn'], 'string', 'max' => 9],
            [['requester', 'created_by', 'updated_by', 'chk_cc_1_data', 'chk_cc_2_data', 'chk_cc_3_data', 'chk_cc_4_data', 'chk_cc_5_data', 'chk_cc_6_data', 'chk_cc_7_data', 'chk_cc_8_data', 'chk_cc_9_data', 'chk_cc_10_data', 'chk_cc_11_data', 'chk_cc_12_data', 'chk_cc_13_data', 'chk_con_1_data', 'chk_con_2_data', 'chk_con_3_data', 'chk_con_4_data', 'chk_con_5_data', 'chk_con_6_data', 'chk_con_7_data', 'chk_fu_1_data', 'chk_fu_2_data', 'chk_fu_3_data', 'chk_fu_4_data', 'chk_fu_5_data', 'chk_fu_6_data', 'chk_fu_7_data', 'chk_fu_8_data', 'chk_fu_9_data', 'chk_fu_10_data', 'chk_fu_11_data', 'chk_chk_1_data', 'chk_chk_2_data', 'chk_chk_3_data', 'chk_chk_4_data', 'chk_chk_5_data'], 'string', 'max' => 255],
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
            'chk_cc_1' => ' 1.ไข้ เป็นมา',
            'chk_cc_1_data' => 'Chk Cc 1 Data',
            'chk_cc_2' => '2.เจ็บคอ เป็นมา',
            'chk_cc_2_data' => 'Chk Cc 2 Data',
            'chk_cc_3' => '3.ไอ เป็นมา',
            'chk_cc_3_data' => 'Chk Cc 3 Data',
            'chk_cc_4' => '4.ปวดท้อง เป็นมา',
            'chk_cc_4_data' => 'Chk Cc 4 Data',
            'chk_cc_5' => '5.คลื่นไส้อาเจียน',
            'chk_cc_5_data' => 'Chk Cc 5 Data',
            'chk_cc_6' => '6.เวียนศีรษะ เป็นมา',
            'chk_cc_6_data' => 'Chk Cc 6 Data',
            'chk_cc_7' => '7.ปวดศีรษะ เป็นมา',
            'chk_cc_7_data' => 'Chk Cc 7 Data',
            'chk_cc_8' => '8.มึนงง เป็นมา',
            'chk_cc_8_data' => 'Chk Cc 8 Data',
            'chk_cc_9' => '9.ใจสั่น เป็นมา',
            'chk_cc_9_data' => 'Chk Cc 9 Data',
            'chk_cc_10' => '10.เจ็บแน่นหน้าอก เป็นมา',
            'chk_cc_10_data' => 'Chk Cc 10 Data',
            'chk_cc_11' => '11.เหนื่อยหอบหายใจลำบาก เป็นมา',
            'chk_cc_11_data' => 'Chk Cc 11 Data',
            'chk_cc_12' => '12.ปัสสาวะแสบขัด เป็นมา',
            'chk_cc_12_data' => 'Chk Cc 12 Data',
            'chk_cc_13' => '13.ถ่ายเหลว เป็นมา',
            'chk_cc_13_data' => 'Chk Cc 13 Data',
            'chk_con_1' => '1.ปรึกษาตรวจเบาหวาน',
            'chk_con_1_data' => 'Chk Con 1 Data',
            'chk_con_2' => '2.ปรึกษาตรวจไทรอยด์',
            'chk_con_2_data' => 'Chk Con 2 Data',
            'chk_con_3' => '3.ปรึกษาตรวจความดันสูง',
            'chk_con_3_data' => 'Chk Con 3 Data',
            'chk_con_4' => '4.ปรึกษาตรวจไขมัน',
            'chk_con_4_data' => 'Chk Con 4 Data',
            'chk_con_5' => '5.ปรึกษาตรวจโปรแกรมตรวจสุขภาพ',
            'chk_con_5_data' => 'Chk Con 5 Data',
            'chk_con_6' => '6.ปรึกษารับยาต่อเนื่อง',
            'chk_con_6_data' => 'Chk Con 6 Data',
            'chk_con_7' => '7.ปรึกษาเรื่องวัคซีน',
            'chk_con_7_data' => 'Chk Con 7 Data',
            'chk_fu_1' => '1.ติดตามตามนัด เบาหวาน',
            'chk_fu_1_data' => 'Chk Fu 1 Data',
            'chk_fu_2' => '2.ติดตามตามนัด ไทยรอยด์',
            'chk_fu_2_data' => 'Chk Fu 2 Data',
            'chk_fu_3' => '3.ติดตามตามนัด ความดันสูง',
            'chk_fu_3_data' => 'Chk Fu 3 Data',
            'chk_fu_4' => '4.ติดตามตามนัด ไขมัน',
            'chk_fu_4_data' => 'Chk Fu 4 Data',
            'chk_fu_5' => '5.ติดตามตามนัด อาการทั่วไปปกติ',
            'chk_fu_5_data' => 'Chk Fu 5 Data',
            'chk_fu_6' => '6.ติดตามตามนัด หลังผ่าตัด',
            'chk_fu_6_data' => 'Chk Fu 6 Data',
            'chk_fu_7' => '7.ติดตามตามนัด ทำแผลบริเวณ',
            'chk_fu_7_data' => 'Chk Fu 7 Data',
            'chk_fu_8' => '8.ติดตามตามนัด ตัดเล็บเท้า',
            'chk_fu_8_data' => 'Chk Fu 8 Data',
            'chk_fu_9' => '9.ติดตามตามนัด รับบริการวัคซีนไข้หวัดใหญ่',
            'chk_fu_9_data' => 'Chk Fu 9 Data',
            'chk_fu_10' => '10.ติดตามตามนัด รับบริการวัคซีน',
            'chk_fu_10_data' => 'Chk Fu 10 Data',
            'chk_fu_11' => '11.ติดตามตามนัด เรื่องแผลที่เท้า',
            'chk_fu_11_data' => 'Chk Fu 11 Data',
            'chk_chk_1' => '1.ตรวจสุขภาพประจำปี โปรแกรม',
            'chk_chk_1_data' => 'Chk Chk 1 Data',
            'chk_chk_2' => '2.ตรวจสุขภาพก่อนแต่งงานหรือวางแผนตั้งครรภ์',
            'chk_chk_2_data' => 'Chk Chk 2 Data',
            'chk_chk_3' => '3.ตรวจสุขภาพก่อนทำประกัน',
            'chk_chk_3_data' => 'Chk Chk 3 Data',
            'chk_chk_4' => '4.ตรวจสุขภาพขอใบขับขี่',
            'chk_chk_4_data' => 'Chk Chk 4 Data',
            'chk_chk_5' => '5.ตรวจสุขภาพขอใบรับรองแพทย์',
            'chk_chk_5_data' => 'Chk Chk 5 Data',
            'nurse_text' => 'Nurse Text',
        ];
    }
}
