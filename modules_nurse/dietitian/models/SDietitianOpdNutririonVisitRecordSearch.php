<?php

namespace app\modules_nurse\dietitian\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules_nurse\dietitian\models\SDietitianOpdNutritionVisitRecord;

/**
 * SDietitianOpdNutririonVisitRecordSearch represents the model behind the search form of `app\modules_nurse\dietitian\models\SDietitianOpdNutritionVisitRecord`.
 */
class SDietitianOpdNutririonVisitRecordSearch extends SDietitianOpdNutritionVisitRecord
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'vn', 'hn', 'data_json', 'requester', 'created_at', 'created_by', 'updated_at', 'updated_by', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service', 'data1', 'data2', 'principal_diag', 'nutritional_histiry', 'pg', 'a1c', 'tc', 'hdl_c', 'ldl_c', 'non_hdl_c', 'bun', 'cr', 'egfr', 'sodium', 'potassium', 'chloride', 'co2', 'albumin', 'calcium', 'phosphorus', 'magnesium', 'uric_acid', 'hb', 'alt_lab', 'idnt_diag1', 'idnt_diag2', 'idnt_diag3', 'idnt_diag4', 'idnt_diag5', 'lest_2_serving', 'limit_high', 'control_protein', 'control_cho', 'limit_added_sugar', 'control_fruit', 'least_4_serving', 'limit_sodium', 'limit_alcohol', 'physical_activity', 'next_followup'], 'safe'],
            [['stage_of_chang'], 'integer'],
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
        $query = SDietitianOpdNutritionVisitRecord::find();

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
            'stage_of_chang' => $this->stage_of_chang,
        ]);

        $query->andFilterWhere(['ilike', 'id', $this->id])
            ->andFilterWhere(['ilike', 'vn', $this->vn])
            ->andFilterWhere(['ilike', 'hn', $this->hn])
            ->andFilterWhere(['ilike', 'data_json', $this->data_json])
            ->andFilterWhere(['ilike', 'requester', $this->requester])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'data1', $this->data1])
            ->andFilterWhere(['ilike', 'data2', $this->data2])
            ->andFilterWhere(['ilike', 'principal_diag', $this->principal_diag])
            ->andFilterWhere(['ilike', 'nutritional_histiry', $this->nutritional_histiry])
            ->andFilterWhere(['ilike', 'pg', $this->pg])
            ->andFilterWhere(['ilike', 'a1c', $this->a1c])
            ->andFilterWhere(['ilike', 'tc', $this->tc])
            ->andFilterWhere(['ilike', 'hdl_c', $this->hdl_c])
            ->andFilterWhere(['ilike', 'ldl_c', $this->ldl_c])
            ->andFilterWhere(['ilike', 'non_hdl_c', $this->non_hdl_c])
            ->andFilterWhere(['ilike', 'bun', $this->bun])
            ->andFilterWhere(['ilike', 'cr', $this->cr])
            ->andFilterWhere(['ilike', 'egfr', $this->egfr])
            ->andFilterWhere(['ilike', 'sodium', $this->sodium])
            ->andFilterWhere(['ilike', 'potassium', $this->potassium])
            ->andFilterWhere(['ilike', 'chloride', $this->chloride])
            ->andFilterWhere(['ilike', 'co2', $this->co2])
            ->andFilterWhere(['ilike', 'albumin', $this->albumin])
            ->andFilterWhere(['ilike', 'calcium', $this->calcium])
            ->andFilterWhere(['ilike', 'phosphorus', $this->phosphorus])
            ->andFilterWhere(['ilike', 'magnesium', $this->magnesium])
            ->andFilterWhere(['ilike', 'uric_acid', $this->uric_acid])
            ->andFilterWhere(['ilike', 'hb', $this->hb])
            ->andFilterWhere(['ilike', 'alt_lab', $this->alt_lab])
            ->andFilterWhere(['ilike', 'idnt_diag1', $this->idnt_diag1])
            ->andFilterWhere(['ilike', 'idnt_diag2', $this->idnt_diag2])
            ->andFilterWhere(['ilike', 'idnt_diag3', $this->idnt_diag3])
            ->andFilterWhere(['ilike', 'idnt_diag4', $this->idnt_diag4])
            ->andFilterWhere(['ilike', 'idnt_diag5', $this->idnt_diag5])
            ->andFilterWhere(['ilike', 'lest_2_serving', $this->lest_2_serving])
            ->andFilterWhere(['ilike', 'limit_high', $this->limit_high])
            ->andFilterWhere(['ilike', 'control_protein', $this->control_protein])
            ->andFilterWhere(['ilike', 'control_cho', $this->control_cho])
            ->andFilterWhere(['ilike', 'limit_added_sugar', $this->limit_added_sugar])
            ->andFilterWhere(['ilike', 'control_fruit', $this->control_fruit])
            ->andFilterWhere(['ilike', 'least_4_serving', $this->least_4_serving])
            ->andFilterWhere(['ilike', 'limit_sodium', $this->limit_sodium])
            ->andFilterWhere(['ilike', 'limit_alcohol', $this->limit_alcohol])
            ->andFilterWhere(['ilike', 'physical_activity', $this->physical_activity])
            ->andFilterWhere(['ilike', 'next_followup', $this->next_followup]);

        return $dataProvider;
    }
}
