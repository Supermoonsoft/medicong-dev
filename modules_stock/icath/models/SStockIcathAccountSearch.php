<?php

namespace app\modules_stock\icath\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules_stock\icath\models\SStockIcathAccount;

/**
 * SStockIcathAccountSearch represents the model behind the search form of `app\modules_stock\icath\models\SStockIcathAccount`.
 */
class SStockIcathAccountSearch extends SStockIcathAccount
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'vn', 'hn', 'an', 'icd101', 'icd9', 'date_visit', 'datetime_or_start', 'datetime_or_end', 'ward', 'room_or', 'date_admit', 'date_dch', 'doc_date', 'ortype', 'send_real', 'data_json', 'requester', 'created_at', 'created_by', 'updated_at', 'updated_by', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service', 'pay', 'pay_date', 'pay_no', 'bank', 'check_no', 'vendor_dispen'], 'safe'],
            [['doctor', 'insurance_id', 'doc_no', 'vendor_id', 'dispen_id'], 'integer'],
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
        $query = SStockIcathAccount::find();

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
            'vendor_id' => $this->vendor_id,
            'pay_date' => $this->pay_date,
            'dispen_id' => $this->dispen_id,
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
            ->andFilterWhere(['ilike', 'send_real', $this->send_real])
            ->andFilterWhere(['ilike', 'data_json', $this->data_json])
            ->andFilterWhere(['ilike', 'requester', $this->requester])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'pay', $this->pay])
            ->andFilterWhere(['ilike', 'pay_no', $this->pay_no])
            ->andFilterWhere(['ilike', 'bank', $this->bank])
            ->andFilterWhere(['ilike', 'check_no', $this->check_no])
            ->andFilterWhere(['ilike', 'vendor_dispen', $this->vendor_dispen]);

        return $dataProvider;
    }
}
