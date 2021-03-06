<?php

namespace app\modules_nurse\nurse_screen\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules_nurse\nurse_screen\models\OpdVisit;
use app\components\PatientHelper;

/**
 * OpdVisitSearch represents the model behind the search form of `app\modules_nurse\nurse_screen\models\OpdVisit`.
 */
class OpdVisitSearch extends OpdVisit
{
    
    public function rules()
    {
        return [
            [['id', 'vn', 'hn', 'data_json', 'requester', 'created_at', 'created_by', 'updated_at', 'updated_by', 'service_start_date', 'service_start_time', 'service_end_date', 'service_end_time', 'service_type', 'service_department'], 'safe'],
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
        $query = OpdVisit::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params=null);
            

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'hn'=> PatientHelper::getCurrentHn(),
            'vn'=> PatientHelper::getCurrentVn(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'service_start_date' => $this->service_start_date,
            'service_start_time' => $this->service_start_time,
            'service_end_date' => $this->service_end_date,
            'service_end_time' => $this->service_end_time,
        ]);

        $query->andFilterWhere(['ilike', 'id', $this->id])
            //->andFilterWhere(['ilike', 'vn', $this->vn])
            //->andFilterWhere(['ilike', 'hn', $this->hn])
            ->andFilterWhere(['ilike', 'data_json', $this->data_json])
            ->andFilterWhere(['ilike', 'requester', $this->requester])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'service_type', $this->service_type])
            ->andFilterWhere(['ilike', 'service_department', $this->service_department]);

        return $dataProvider;
    }
}
