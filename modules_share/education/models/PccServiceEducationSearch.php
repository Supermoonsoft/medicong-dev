<?php

namespace app\modules_share\education\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules_share\education\models\PccServiceEducation;

/**
 * PccServiceEducationSearch represents the model behind the search form of `app\modules\education\models\PccServiceEducation`.
 */
class PccServiceEducationSearch extends PccServiceEducation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'hn', 'date_service', 'education_code', 'education_name', 'data_json', 'last_update', 'hospcode', 'cid', 'pcc_vn', 'provider'], 'safe'],
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
        $query = PccServiceEducation::find();

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
            'date_service' => $this->date_service,
            'last_update' => $this->last_update,
        ]);

        $query->andFilterWhere(['ilike', 'id', $this->id])
            ->andFilterWhere(['ilike', 'hn', $this->hn])
            ->andFilterWhere(['ilike', 'education_code', $this->education_code])
            ->andFilterWhere(['ilike', 'education_name', $this->education_name])
            ->andFilterWhere(['ilike', 'data_json', $this->data_json])
            ->andFilterWhere(['ilike', 'hospcode', $this->hospcode])
            ->andFilterWhere(['ilike', 'cid', $this->cid])
            ->andFilterWhere(['ilike', 'pcc_vn', $this->pcc_vn])
            ->andFilterWhere(['ilike', 'provider', $this->provider]);

        return $dataProvider;
    }
}
