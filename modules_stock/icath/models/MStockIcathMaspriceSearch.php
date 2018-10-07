<?php

namespace app\modules_stock\icath\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules_stock\icath\models\MStockIcathMasprice;

/**
 * MStockIcathMaspriceSearch represents the model behind the search form of `app\modules_stock\icath\models\MStockIcathMasprice`.
 */
class MStockIcathMaspriceSearch extends MStockIcathMasprice
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['section', 'code', 'name', 'charge_code', 'charge_name', 'opd_price', 'opd_dr_percent', 'opd_dr_amt', 'ipd_price', 'ipd_dr_percent', 'ipd_dr_amt', 'price_cost', 'recieve_code', 'recieve_thai_name', 'recieve_eng_name', 'change_date', 'update_time', 'created_at', 'created_by', 'updated_at', 'updated_by', 'requester', 'data_json'], 'safe'],
            [['id'], 'integer'],
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
        $query = MStockIcathMasprice::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['ilike', 'section', $this->section])
            ->andFilterWhere(['ilike', 'code', $this->code])
            ->andFilterWhere(['ilike', 'name', $this->name])
            ->andFilterWhere(['ilike', 'charge_code', $this->charge_code])
            ->andFilterWhere(['ilike', 'charge_name', $this->charge_name])
            ->andFilterWhere(['ilike', 'opd_price', $this->opd_price])
            ->andFilterWhere(['ilike', 'opd_dr_percent', $this->opd_dr_percent])
            ->andFilterWhere(['ilike', 'opd_dr_amt', $this->opd_dr_amt])
            ->andFilterWhere(['ilike', 'ipd_price', $this->ipd_price])
            ->andFilterWhere(['ilike', 'ipd_dr_percent', $this->ipd_dr_percent])
            ->andFilterWhere(['ilike', 'ipd_dr_amt', $this->ipd_dr_amt])
            ->andFilterWhere(['ilike', 'price_cost', $this->price_cost])
            ->andFilterWhere(['ilike', 'recieve_code', $this->recieve_code])
            ->andFilterWhere(['ilike', 'recieve_thai_name', $this->recieve_thai_name])
            ->andFilterWhere(['ilike', 'recieve_eng_name', $this->recieve_eng_name])
            ->andFilterWhere(['ilike', 'change_date', $this->change_date])
            ->andFilterWhere(['ilike', 'update_time', $this->update_time])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'requester', $this->requester])
            ->andFilterWhere(['ilike', 'data_json', $this->data_json]);

        return $dataProvider;
    }
}
