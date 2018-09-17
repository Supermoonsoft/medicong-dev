<?php

namespace app\modules_nurse\dietitian\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules_nurse\dietitian\models\SDietitianOpdNutritionalAssessment;

/**
 * SDietitianOpdNutritionalAssessmentSearch represents the model behind the search form of `app\modules_nurse\dietitian\models\SDietitianOpdNutritionalAssessment`.
 */
class SDietitianOpdNutritionalAssessmentSearch extends SDietitianOpdNutritionalAssessment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'vn', 'hn', 'data_json', 'requester', 'created_at', 'created_by', 'updated_at', 'updated_by', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service', 'data1', 'data2', 'visit_type', 'co_morbidities', 'Type_of_hd', 'nutrition_history', 'clinical_data', 'lab_result_today', 'dietary_intake', 'assessment_and_plan', 'idnt_diag1', 'idnt_diag2', 'idnt_diag3', 'idnt_diag4', 'idnt_diag5', 'next_followup', 'next_followup_date'], 'safe'],
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
        $query = SDietitianOpdNutritionalAssessment::find();

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
            'next_followup_date' => $this->next_followup_date,
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
            ->andFilterWhere(['ilike', 'visit_type', $this->visit_type])
            ->andFilterWhere(['ilike', 'co_morbidities', $this->co_morbidities])
            ->andFilterWhere(['ilike', 'Type_of_hd', $this->Type_of_hd])
            ->andFilterWhere(['ilike', 'nutrition_history', $this->nutrition_history])
            ->andFilterWhere(['ilike', 'clinical_data', $this->clinical_data])
            ->andFilterWhere(['ilike', 'lab_result_today', $this->lab_result_today])
            ->andFilterWhere(['ilike', 'dietary_intake', $this->dietary_intake])
            ->andFilterWhere(['ilike', 'assessment_and_plan', $this->assessment_and_plan])
            ->andFilterWhere(['ilike', 'idnt_diag1', $this->idnt_diag1])
            ->andFilterWhere(['ilike', 'idnt_diag2', $this->idnt_diag2])
            ->andFilterWhere(['ilike', 'idnt_diag3', $this->idnt_diag3])
            ->andFilterWhere(['ilike', 'idnt_diag4', $this->idnt_diag4])
            ->andFilterWhere(['ilike', 'idnt_diag5', $this->idnt_diag5])
            ->andFilterWhere(['ilike', 'next_followup', $this->next_followup]);

        return $dataProvider;
    }
}
