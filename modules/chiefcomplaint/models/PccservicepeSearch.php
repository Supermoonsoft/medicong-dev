<?php

namespace app\modules\chiefcomplaint\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\chiefcomplaint\models\Pccservicepe;

/**
 * PccservicepeSearch represents the model behind the search form of `app\modules\chiefcomplaint\models\Pccservicepe`.
 */
class PccservicepeSearch extends Pccservicepe
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pcc_vn', 'data_json', 'pcc_start_service_datetime', 'pcc_end_service_datetime', 'data1', 'data2', 'hospcode', 'pe_text'], 'safe'],
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
        $query = Pccservicepe::find();

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
            'pcc_start_service_datetime' => $this->pcc_start_service_datetime,
            'pcc_end_service_datetime' => $this->pcc_end_service_datetime,
        ]);

        $query->andFilterWhere(['ilike', 'id', $this->id])
            ->andFilterWhere(['ilike', 'pcc_vn', $this->pcc_vn])
            ->andFilterWhere(['ilike', 'data_json', $this->data_json])
            ->andFilterWhere(['ilike', 'data1', $this->data1])
            ->andFilterWhere(['ilike', 'data2', $this->data2])
            ->andFilterWhere(['ilike', 'hospcode', $this->hospcode])
            ->andFilterWhere(['ilike', 'pe_text', $this->pe_text]);

        return $dataProvider;
    }
}
