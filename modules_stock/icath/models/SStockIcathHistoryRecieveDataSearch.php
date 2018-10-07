<?php

namespace app\modules_stock\icath\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules_stock\icath\models\SStockIcathHistoryRecieveData;

/**
 * SStockIcathHistoryRecieveDataSearch represents the model behind the search form of `app\modules_stock\icath\models\SStockIcathHistoryRecieveData`.
 */
class SStockIcathHistoryRecieveDataSearch extends SStockIcathHistoryRecieveData
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'vn', 'hn', 'an', 'code', 'detail', 'receive_data_lot', 'data_json', 'requester', 'created_at', 'created_by', 'updated_at', 'updated_by', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service'], 'safe'],
            [['dispen_id', 'qty', 'receive_data_id', 'vendor_id'], 'integer'],
            [['price', 'totalprice'], 'number'],
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
        $query = SStockIcathHistoryRecieveData::find();

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
            'dispen_id' => $this->dispen_id,
            'qty' => $this->qty,
            'price' => $this->price,
            'totalprice' => $this->totalprice,
            'receive_data_id' => $this->receive_data_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'date_start_service' => $this->date_start_service,
            'time_start_service' => $this->time_start_service,
            'date_end_service' => $this->date_end_service,
            'time_end_service' => $this->time_end_service,
            'vendor_id' => $this->vendor_id,
        ]);

        $query->andFilterWhere(['ilike', 'id', $this->id])
            ->andFilterWhere(['ilike', 'vn', $this->vn])
            ->andFilterWhere(['ilike', 'hn', $this->hn])
            ->andFilterWhere(['ilike', 'an', $this->an])
            ->andFilterWhere(['ilike', 'code', $this->code])
            ->andFilterWhere(['ilike', 'detail', $this->detail])
            ->andFilterWhere(['ilike', 'receive_data_lot', $this->receive_data_lot])
            ->andFilterWhere(['ilike', 'data_json', $this->data_json])
            ->andFilterWhere(['ilike', 'requester', $this->requester])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by]);

        return $dataProvider;
    }
}
