<?php

namespace app\modules_stock\icath\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules_stock\icath\models\SStockIcathLendRecieve;

/**
 * SStockIcathLendRecieveSearch represents the model behind the search form of `app\modules_stock\icath\models\SStockIcathLendRecieve`.
 */
class SStockIcathLendRecieveSearch extends SStockIcathLendRecieve
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'vn', 'hn', 'created_at', 'created_by', 'updated_at', 'updated_by', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service', 'date_in', 'vendor', 'invoice', 'date_invoice', 'detail', 'requester', 'data_json'], 'safe'],
            [['totalprice'], 'number'],
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
        $query = SStockIcathLendRecieve::find();

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
            'date_in' => $this->date_in,
            'date_invoice' => $this->date_invoice,
            'totalprice' => $this->totalprice,
        ]);

        $query->andFilterWhere(['ilike', 'id', $this->id])
            ->andFilterWhere(['ilike', 'vn', $this->vn])
            ->andFilterWhere(['ilike', 'hn', $this->hn])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'vendor', $this->vendor])
            ->andFilterWhere(['ilike', 'invoice', $this->invoice])
            ->andFilterWhere(['ilike', 'detail', $this->detail])
            ->andFilterWhere(['ilike', 'requester', $this->requester])
            ->andFilterWhere(['ilike', 'data_json', $this->data_json]);

        return $dataProvider;
    }
}
