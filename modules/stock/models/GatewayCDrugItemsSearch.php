<?php

namespace app\modules\stock\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\stock\models\GatewayCDrugItems;

/**
 * GatewayCDrugItemsSearch represents the model behind the search form of `app\modules\stock\models\GatewayCDrugItems`.
 */
class GatewayCDrugItemsSearch extends GatewayCDrugItems
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'hospcode', 'hospname', 'icode', 'drug_name', 'qty', 'unit', 'usage_line1', 'usage_line2', 'usage_line3', 'tmt24_code', 'drugtype'], 'safe'],
            [['costprice', 'unitprice'], 'number'],
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
        $query = GatewayCDrugItems::find();

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
            'costprice' => $this->costprice,
            'unitprice' => $this->unitprice,
        ]);

        $query->andFilterWhere(['ilike', 'id', $this->id])
            ->andFilterWhere(['ilike', 'hospcode', $this->hospcode])
            ->andFilterWhere(['ilike', 'hospname', $this->hospname])
            ->andFilterWhere(['ilike', 'icode', $this->icode])
            ->andFilterWhere(['ilike', 'drug_name', $this->drug_name])
            ->andFilterWhere(['ilike', 'qty', $this->qty])
            ->andFilterWhere(['ilike', 'unit', $this->unit])
            ->andFilterWhere(['ilike', 'usage_line1', $this->usage_line1])
            ->andFilterWhere(['ilike', 'usage_line2', $this->usage_line2])
            ->andFilterWhere(['ilike', 'usage_line3', $this->usage_line3])
            ->andFilterWhere(['ilike', 'tmt24_code', $this->tmt24_code])
            ->andFilterWhere(['ilike', 'drugtype', $this->drugtype]);

        return $dataProvider;
    }
}
