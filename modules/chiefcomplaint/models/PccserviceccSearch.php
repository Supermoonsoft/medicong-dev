<?php

namespace app\modules\chiefcomplaint\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\chiefcomplaint\models\Pccservicecc;

/**
 * PccserviceccSearch represents the model behind the search form of `app\modules\chiefcomplaint\models\Pccservicecc`.
 */
class PccserviceccSearch extends Pccservicecc
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pcc_vn', 'data_json', 'pcc_start_service_datetime', 'pcc_end_service_datetime', 'data1', 'data2', 'hoscode', 'cc_text'], 'safe'],
            [['sbp', 'dbp', 'temp', 'pp', 'pr', 'o2sat', 'height', 'weight'], 'number'],
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
        $query = Pccservicecc::find();

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
            'sbp' => $this->sbp,
            'dbp' => $this->dbp,
            'temp' => $this->temp,
            'pp' => $this->pp,
            'pr' => $this->pr,
            'o2sat' => $this->o2sat,
            'height' => $this->height,
            'weight' => $this->weight,
        ]);

        $query->andFilterWhere(['ilike', 'id', $this->id])
            ->andFilterWhere(['ilike', 'pcc_vn', $this->pcc_vn])
            ->andFilterWhere(['ilike', 'data_json', $this->data_json])
            ->andFilterWhere(['ilike', 'data1', $this->data1])
            ->andFilterWhere(['ilike', 'data2', $this->data2])
            ->andFilterWhere(['ilike', 'hoscode', $this->hoscode])
            ->andFilterWhere(['ilike', 'cc_text', $this->cc_text]);

        return $dataProvider;
    }
}
