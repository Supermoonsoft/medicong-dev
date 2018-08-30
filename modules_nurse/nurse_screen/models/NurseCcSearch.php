<?php

namespace app\modules_nurse\nurse_screen\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules_nurse\nurse_screen\models\NurseCc;

/**
 * NurseCcSearch represents the model behind the search form of `app\modules_nurse\nurse_screen\models\NurseCc`.
 */
class NurseCcSearch extends NurseCc
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'vn', 'hn', 'data_json', 'requester', 'created_at', 'created_by', 'updated_at', 'updated_by', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service', 'chk_cc_1_data', 'chk_cc_2_data', 'chk_cc_3_data', 'chk_cc_4_data', 'chk_cc_5_data', 'chk_cc_6_data', 'chk_cc_7_data', 'chk_cc_8_data',  'chk_cc_10_data',  'chk_cc_11_data',  'chk_cc_12_data', 'chk_cc_13_data', 'chk_con_1_data', 'chk_con_2_data', 'chk_con_3_data', 'chk_con_4_data', 'chk_con_5_data', 'chk_con_6_data', 'chk_con_7_data', 'chk_fu_1_data', 'chk_fu_2_data', 'chk_fu_3_data', 'chk_fu_4_data', 'chk_fu_5_data', 'chk_fu_6_data', 'chk_fu_7_data', 'chk_fu_8_data', 'chk_fu_9_data', 'chk_fu_10_data', 'chk_fu_11_data', 'chk_chk_1_data', 'chk_chk_2_data', 'chk_chk_3_data', 'chk_chk_4_data', 'chk_chk_5_data', 'nurse_text'], 'safe'],
            [['chk_cc_8','chk_cc_1', 'chk_cc_2', 'chk_cc_3', 'chk_cc_4', 'chk_cc_5', 'chk_cc_7','chk_cc_9_data', 'chk_cc_13', 'chk_con_1', 'chk_con_2', 'chk_con_3', 'chk_con_4', 'chk_con_5', 'chk_con_6', 'chk_con_7', 'chk_fu_1', 'chk_fu_2', 'chk_fu_3', 'chk_fu_4', 'chk_fu_5', 'chk_fu_6','chk_cc_6', 'chk_fu_7', 'chk_fu_8', 'chk_fu_9','chk_cc_9', 'chk_cc_10','chk_cc_11','chk_cc_12', 'chk_fu_10', 'chk_fu_11', 'chk_chk_1', 'chk_chk_2', 'chk_chk_3', 'chk_chk_4', 'chk_chk_5'], 'boolean'],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = NurseCc::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'date_start_service' => $this->date_start_service,
            'time_start_service' => $this->time_start_service,
            'date_end_service' => $this->date_end_service,
            'time_end_service' => $this->time_end_service,
            'chk_cc_1' => $this->chk_cc_1,
            'chk_cc_2' => $this->chk_cc_2,
            'chk_cc_3' => $this->chk_cc_3,
            'chk_cc_4' => $this->chk_cc_4,
            'chk_cc_5' => $this->chk_cc_5,
            'chk_cc_8' => $this->chk_cc_8,
            'chk_cc_9_data' => $this->chk_cc_9_data,
            'chk_cc_13' => $this->chk_cc_13,
            'chk_con_1' => $this->chk_con_1,
            'chk_con_2' => $this->chk_con_2,
            'chk_con_3' => $this->chk_con_3,
            'chk_con_4' => $this->chk_con_4,
            'chk_con_5' => $this->chk_con_5,
            'chk_con_6' => $this->chk_con_6,
            'chk_con_7' => $this->chk_con_7,
            'chk_fu_1' => $this->chk_fu_1,
            'chk_fu_2' => $this->chk_fu_2,
            'chk_fu_3' => $this->chk_fu_3,
            'chk_fu_4' => $this->chk_fu_4,
            'chk_fu_5' => $this->chk_fu_5,
            'chk_fu_6' => $this->chk_fu_6,
            'chk_fu_7' => $this->chk_fu_7,
            'chk_fu_8' => $this->chk_fu_8,
            'chk_fu_9' => $this->chk_fu_9,
            'chk_fu_10' => $this->chk_fu_10,
            'chk_fu_11' => $this->chk_fu_11,
            'chk_chk_1' => $this->chk_chk_1,
            'chk_chk_2' => $this->chk_chk_2,
            'chk_chk_3' => $this->chk_chk_3,
            'chk_chk_4' => $this->chk_chk_4,
            'chk_chk_5' => $this->chk_chk_5,
        ]);

        $query->andFilterWhere(['ilike', 'id', $this->id])
            ->andFilterWhere(['ilike', 'vn', $this->vn])
            ->andFilterWhere(['ilike', 'hn', $this->hn])
            ->andFilterWhere(['ilike', 'data_json', $this->data_json])
            ->andFilterWhere(['ilike', 'requester', $this->requester])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'chk_cc_1_data', $this->chk_cc_1_data])
            ->andFilterWhere(['ilike', 'chk_cc_2_data', $this->chk_cc_2_data])
            ->andFilterWhere(['ilike', 'chk_cc_3_data', $this->chk_cc_3_data])
            ->andFilterWhere(['ilike', 'chk_cc_4_data', $this->chk_cc_4_data])
            ->andFilterWhere(['ilike', 'chk_cc_5_data', $this->chk_cc_5_data])
            ->andFilterWhere(['ilike', 'chk_cc_6', $this->chk_cc_6])
            ->andFilterWhere(['ilike', 'chk_cc_6_data', $this->chk_cc_6_data])
            ->andFilterWhere(['ilike', 'chk_cc_7', $this->chk_cc_7])
            ->andFilterWhere(['ilike', 'chk_cc_7_data', $this->chk_cc_7_data])
            ->andFilterWhere(['ilike', 'chk_cc_8_data', $this->chk_cc_8_data])
            ->andFilterWhere(['ilike', 'chk_cc_9', $this->chk_cc_9])
            ->andFilterWhere(['ilike', 'chk_cc_10', $this->chk_cc_10])
            ->andFilterWhere(['ilike', 'chk_cc_10_data', $this->chk_cc_10_data])
            ->andFilterWhere(['ilike', 'chk_cc_11', $this->chk_cc_11])
            ->andFilterWhere(['ilike', 'chk_cc_11_data', $this->chk_cc_11_data])
            ->andFilterWhere(['ilike', 'chk_cc_12', $this->chk_cc_12])
            ->andFilterWhere(['ilike', 'chk_cc_12_data', $this->chk_cc_12_data])
            ->andFilterWhere(['ilike', 'chk_cc_13_data', $this->chk_cc_13_data])
            ->andFilterWhere(['ilike', 'chk_con_1_data', $this->chk_con_1_data])
            ->andFilterWhere(['ilike', 'chk_con_2_data', $this->chk_con_2_data])
            ->andFilterWhere(['ilike', 'chk_con_3_data', $this->chk_con_3_data])
            ->andFilterWhere(['ilike', 'chk_con_4_data', $this->chk_con_4_data])
            ->andFilterWhere(['ilike', 'chk_con_5_data', $this->chk_con_5_data])
            ->andFilterWhere(['ilike', 'chk_con_6_data', $this->chk_con_6_data])
            ->andFilterWhere(['ilike', 'chk_con_7_data', $this->chk_con_7_data])
            ->andFilterWhere(['ilike', 'chk_fu_1_data', $this->chk_fu_1_data])
            ->andFilterWhere(['ilike', 'chk_fu_2_data', $this->chk_fu_2_data])
            ->andFilterWhere(['ilike', 'chk_fu_3_data', $this->chk_fu_3_data])
            ->andFilterWhere(['ilike', 'chk_fu_4_data', $this->chk_fu_4_data])
            ->andFilterWhere(['ilike', 'chk_fu_5_data', $this->chk_fu_5_data])
            ->andFilterWhere(['ilike', 'chk_fu_6_data', $this->chk_fu_6_data])
            ->andFilterWhere(['ilike', 'chk_fu_7_data', $this->chk_fu_7_data])
            ->andFilterWhere(['ilike', 'chk_fu_8_data', $this->chk_fu_8_data])
            ->andFilterWhere(['ilike', 'chk_fu_9_data', $this->chk_fu_9_data])
            ->andFilterWhere(['ilike', 'chk_fu_10_data', $this->chk_fu_10_data])
            ->andFilterWhere(['ilike', 'chk_fu_11_data', $this->chk_fu_11_data])
            ->andFilterWhere(['ilike', 'chk_chk_1_data', $this->chk_chk_1_data])
            ->andFilterWhere(['ilike', 'chk_chk_2_data', $this->chk_chk_2_data])
            ->andFilterWhere(['ilike', 'chk_chk_3_data', $this->chk_chk_3_data])
            ->andFilterWhere(['ilike', 'chk_chk_4_data', $this->chk_chk_4_data])
            ->andFilterWhere(['ilike', 'chk_chk_5_data', $this->chk_chk_5_data])
            ->andFilterWhere(['ilike', 'nurse_text', $this->nurse_text]);

        return $dataProvider;
    }
}
