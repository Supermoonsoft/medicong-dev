<?php

namespace app\modules\drug\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\drug\models\Hosdrug;

/**
 * HosdrugSearch represents the model behind the search form of `app\modules\drug\models\Hosdrug`.
 */
class HosdrugSearch extends Hosdrug
{

    function __construct($cid=NULL){ 
        $this->cid = $cid;
    }

    public function rules()
    {
        return [
            [['id', 'cid', 'hos_hn', 'hos_vn', 'hos_date_visit', 'drug_code_hos', 'drug_name_hos', 'data_json', 'drug_code_moph', 'drug_name_moph', 'drug_usage', 'drug_units'], 'safe'],
            [['drug_pay_amount', 'drug_pay_unit'], 'number'],
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
        $query = Hosdrug::find()->where(['cid' => '2222222222222'])->OrderBy(['hos_date_visit'=>SORT_DESC,]);

        // add conditions that should always apply here
        if ($this->load($params) && $this->validate()) {
            $query->where(['cid' => $this->cid]);
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
/*
        // grid filtering conditions
        $query->andFilterWhere([
            'hos_date_visit' => $this->hos_date_visit,
            'drug_pay_amount' => $this->drug_pay_amount,
            'drug_pay_unit' => $this->drug_pay_unit,
        ]);

        $query->andFilterWhere(['ilike', 'id', $this->id])
            ->andFilterWhere(['ilike', 'cid', $this->cid])
            ->andFilterWhere(['ilike', 'hos_hn', $this->hos_hn])
            ->andFilterWhere(['ilike', 'hos_vn', $this->hos_vn])
            ->andFilterWhere(['ilike', 'drug_code_hos', $this->drug_code_hos])
            ->andFilterWhere(['ilike', 'drug_name_hos', $this->drug_name_hos])
            ->andFilterWhere(['ilike', 'data_json', $this->data_json])
            ->andFilterWhere(['ilike', 'drug_code_moph', $this->drug_code_moph])
            ->andFilterWhere(['ilike', 'drug_name_moph', $this->drug_name_moph]);
*/
        return $dataProvider;
    }
}
