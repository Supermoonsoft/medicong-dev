<?php

namespace app\modules_nurse\dietitian\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules_nurse\dietitian\models\SDietitianIpdNutririonVisitRecord;

/**
 * SDietitianIpdNutririonVisitRecordSearch represents the model behind the search form of `app\modules_nurse\dietitian\models\SDietitianIpdNutririonVisitRecord`.
 */
class SDietitianIpdNutririonVisitRecordSearch extends SDietitianIpdNutririonVisitRecord
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'vn', 'hn', 'data_json', 'requester', 'created_at', 'created_by', 'updated_at', 'updated_by', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service', 'data1', 'data2', 'principal_diag', 'co_morbidity', 'source_data', 'long', 'arm_span', 'weighing', 'bmi', 'bmi_check', 'albumin', 'tlc', 'shape', 'nature_food', 'food_intake', 'chew', 'digestive', 'eat', 'food_access', 'disease_min', 'disease_max', 'idnt_diag1', 'idnt_diag2', 'idnt_diag3', 'idnt_diag4', 'idnt_diag5'], 'safe'],
            [['visit_no'], 'integer'],
            [['height', 'weight', 'weight_change'], 'number'],
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
        $query = SDietitianIpdNutririonVisitRecord::find();

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
            'visit_no' => $this->visit_no,
            'height' => $this->height,
            'weight' => $this->weight,
            'weight_change' => $this->weight_change,
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
            ->andFilterWhere(['ilike', 'co_morbidity', $this->co_morbidity])
            ->andFilterWhere(['ilike', 'source_data', $this->source_data])
            ->andFilterWhere(['ilike', 'long', $this->long])
            ->andFilterWhere(['ilike', 'arm_span', $this->arm_span])
            ->andFilterWhere(['ilike', 'weighing', $this->weighing])
            ->andFilterWhere(['ilike', 'bmi', $this->bmi])
            ->andFilterWhere(['ilike', 'bmi_check', $this->bmi_check])
            ->andFilterWhere(['ilike', 'albumin', $this->albumin])
            ->andFilterWhere(['ilike', 'tlc', $this->tlc])
            ->andFilterWhere(['ilike', 'shape', $this->shape])
            ->andFilterWhere(['ilike', 'nature_food', $this->nature_food])
            ->andFilterWhere(['ilike', 'food_intake', $this->food_intake])
            ->andFilterWhere(['ilike', 'chew', $this->chew])
            ->andFilterWhere(['ilike', 'digestive', $this->digestive])
            ->andFilterWhere(['ilike', 'eat', $this->eat])
            ->andFilterWhere(['ilike', 'food_access', $this->food_access])
            ->andFilterWhere(['ilike', 'disease_min', $this->disease_min])
            ->andFilterWhere(['ilike', 'disease_max', $this->disease_max])
            ->andFilterWhere(['ilike', 'idnt_diag1', $this->idnt_diag1])
            ->andFilterWhere(['ilike', 'idnt_diag2', $this->idnt_diag2])
            ->andFilterWhere(['ilike', 'idnt_diag3', $this->idnt_diag3])
            ->andFilterWhere(['ilike', 'idnt_diag4', $this->idnt_diag4])
            ->andFilterWhere(['ilike', 'idnt_diag5', $this->idnt_diag5]);

        return $dataProvider;
    }
}
