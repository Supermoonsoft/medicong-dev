<?php

namespace app\modules_stock\icath\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules_stock\icath\models\SStockIcathDispen;

/**
 * SStockIcathDispenSearch represents the model behind the search form of `app\modules_stock\icath\models\SStockIcathDispen`.
 */
class SStockIcathDispenSearch extends SStockIcathDispen
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'vn', 'hn', 'an', 'icd101', 'icd9', 'date_visit', 'datetime_or_start', 'datetime_or_end', 'ward', 'room_or', 'date_admit', 'date_dch', 'doc_date', 'ortype', 'data_json', 'requester', 'created_at', 'created_by', 'updated_at', 'updated_by', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service', 'send_stock', 'send_account', 'send_patient'], 'safe'],
            [['doctor', 'insurance_id', 'doc_no'], 'integer'],
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
        $query = SStockIcathDispen::find();

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
            'doctor' => $this->doctor,
            'date_visit' => $this->date_visit,
            'datetime_or_start' => $this->datetime_or_start,
            'datetime_or_end' => $this->datetime_or_end,
            'insurance_id' => $this->insurance_id,
            'date_admit' => $this->date_admit,
            'date_dch' => $this->date_dch,
            'doc_no' => $this->doc_no,
            'doc_date' => $this->doc_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'date_start_service' => $this->date_start_service,
            'time_start_service' => $this->time_start_service,
            'date_end_service' => $this->date_end_service,
            'time_end_service' => $this->time_end_service,
        ]);

        $query->andFilterWhere(['ilike', 'id', $this->id])
            ->andFilterWhere(['ilike', 'vn', $this->vn])
            ->andFilterWhere(['ilike', 'hn', $this->hn])
            ->andFilterWhere(['ilike', 'an', $this->an])
            ->andFilterWhere(['ilike', 'icd101', $this->icd101])
            ->andFilterWhere(['ilike', 'icd9', $this->icd9])
            ->andFilterWhere(['ilike', 'ward', $this->ward])
            ->andFilterWhere(['ilike', 'room_or', $this->room_or])
            ->andFilterWhere(['ilike', 'ortype', $this->ortype])
            ->andFilterWhere(['ilike', 'data_json', $this->data_json])
            ->andFilterWhere(['ilike', 'requester', $this->requester])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'send_stock', $this->send_stock])
            ->andFilterWhere(['ilike', 'send_account', $this->send_account])
            ->andFilterWhere(['ilike', 'send_patient', $this->send_patient]);

        return $dataProvider;
    }
}
