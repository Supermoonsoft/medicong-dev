<?php

namespace app\modules_nurse\nurse_screen\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules_nurse\nurse_screen\models\VitalSigns;

/**
 * NurseScreenSearch represents the model behind the search form of `app\modules_nurse\nurse_screen\models\NurseScreen`.
 */
class VitalSignsSearch extends VitalSigns
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'vn', 'hn', 'data_json', 'requester', 'created_at', 'created_by', 'updated_at', 'updated_by', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service'], 'safe'],
            [['btemp_1', 'sbp_1', 'dbp_1', 'position_1', 'arm_1', 'pr_1', 'pr_rhythm_1', 'rr_1', 'o2sat_1', 'btemp_2', 'sbp_2', 'dbp_2', 'position_2', 'arm_2', 'pr_2', 'pr_rhythm_2', 'rr_2', 'o2sat_2', 'bheight', 'bweight'], 'number'],
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
        $query = VitalSigns::find();

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
            'btemp_1' => $this->btemp_1,
            'sbp_1' => $this->sbp_1,
            'dbp_1' => $this->dbp_1,
            'position_1' => $this->position_1,
            'arm_1' => $this->arm_1,
            'pr_1' => $this->pr_1,
            'pr_rhythm_1' => $this->pr_rhythm_1,
            'rr_1' => $this->rr_1,
            'o2sat_1' => $this->o2sat_1,
            'btemp_2' => $this->btemp_2,
            'sbp_2' => $this->sbp_2,
            'dbp_2' => $this->dbp_2,
            'position_2' => $this->position_2,
            'arm_2' => $this->arm_2,
            'pr_2' => $this->pr_2,
            'pr_rhythm_2' => $this->pr_rhythm_2,
            'rr_2' => $this->rr_2,
            'o2sat_2' => $this->o2sat_2,
            'bheight' => $this->bheight,
            'bweight' => $this->bweight,
        ]);

        $query->andFilterWhere(['ilike', 'id', $this->id])
            ->andFilterWhere(['ilike', 'vn', $this->vn])
            ->andFilterWhere(['ilike', 'hn', $this->hn])
            ->andFilterWhere(['ilike', 'data_json', $this->data_json])
            ->andFilterWhere(['ilike', 'requester', $this->requester])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by]);

        return $dataProvider;
    }
}
