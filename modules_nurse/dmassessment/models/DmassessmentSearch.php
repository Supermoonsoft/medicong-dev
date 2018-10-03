<?php

namespace app\modules_nurse\dmassessment\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules_nurse\dmassessment\models\Dmassessment;
use app\components\PatientHelper;

/**
 * DmassessmentSearch represents the model behind the search form of `app\modules_nurse\dmassessment\models\Dmassessment`.
 */
class DmassessmentSearch extends Dmassessment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'vn', 'hn', 'data_json', 'requester', 'created_at', 'created_by', 'updated_at', 'updated_by', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service', 'last_meal_eating', 'last_meal_eating_data', 'last_insulin', 'last_insulin_data', 'psychosocial_problem', 'key_presenting', 'hbpm', 'hbpm_day', 'hbpm_week', 'hbpm_month', 'hbpm_sbp_data', 'hbpm_dbp_data', 'hbpm_pulse_data', 'smbg', 'smbg_day', 'smbg_week', 'smbg_month', 'smbg_sbp_data', 'smbg_dbp_data', 'smbg_pulse_data', 'hyperglycemic', 'hyperglycemic_data', 'hypoglycemic', 'hypoglycemic_data', 'hypoglycemic_risk', 'hypoglycemic_risk1', 'hypoglycemic_risk1_data', 'hypoglycemic_risk2', 'hypoglycemic_risk2_data', 'hypoglycemic_risk3', 'hypoglycemic_risk3_data', 'diet_data1', 'diet_data2', 'exercise_data1', 'exercise_data2', 'drug_data1', 'drug_data2', 'smooking', 'smooking_ex1_day', 'smooking_ex1_year', 'smooking_ex2', 'smooking_ex2_day', 'smooking_ex2_year', 'vaccination_date1', 'vaccination_date2', 'smooking2'], 'safe'],
            [['chest_discomfort', 'blurred_vision', 'numbness', 'foot_ulcer', 'hbpm_frequency', 'hbpm_result', 'hbpm_sbp', 'hbpm_dbp', 'hbpm_pulse', 'smbg_frequency', 'smbg_result', 'smbg_sbp', 'smbg_dbp', 'smbg_pulse', 'smooking_ex1'], 'boolean'],
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
        $query = Dmassessment::find();

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
            'hn'=> PatientHelper::getCurrentHn(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'date_start_service' => $this->date_start_service,
            'time_start_service' => $this->time_start_service,
            'date_end_service' => $this->date_end_service,
            'time_end_service' => $this->time_end_service,
            'chest_discomfort' => $this->chest_discomfort,
            'blurred_vision' => $this->blurred_vision,
            'numbness' => $this->numbness,
            'foot_ulcer' => $this->foot_ulcer,
            'hbpm_frequency' => $this->hbpm_frequency,
            'hbpm_result' => $this->hbpm_result,
            'hbpm_sbp' => $this->hbpm_sbp,
            'hbpm_dbp' => $this->hbpm_dbp,
            'hbpm_pulse' => $this->hbpm_pulse,
            'smbg_frequency' => $this->smbg_frequency,
            'smbg_result' => $this->smbg_result,
            'smbg_sbp' => $this->smbg_sbp,
            'smbg_dbp' => $this->smbg_dbp,
            'smbg_pulse' => $this->smbg_pulse,
            'smooking_ex1' => $this->smooking_ex1,
            'vaccination_date1' => $this->vaccination_date1,
            'vaccination_date2' => $this->vaccination_date2,
        ]);

        $query->andFilterWhere(['ilike', 'id', $this->id])
            ->andFilterWhere(['ilike', 'vn', $this->vn])
            //->andFilterWhere(['ilike', 'hn', $this->hn])
            ->andFilterWhere(['ilike', 'data_json', $this->data_json])
            ->andFilterWhere(['ilike', 'requester', $this->requester])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'last_meal_eating', $this->last_meal_eating])
            ->andFilterWhere(['ilike', 'last_meal_eating_data', $this->last_meal_eating_data])
            ->andFilterWhere(['ilike', 'last_insulin', $this->last_insulin])
            ->andFilterWhere(['ilike', 'last_insulin_data', $this->last_insulin_data])
            ->andFilterWhere(['ilike', 'psychosocial_problem', $this->psychosocial_problem])
            ->andFilterWhere(['ilike', 'key_presenting', $this->key_presenting])
            ->andFilterWhere(['ilike', 'hbpm', $this->hbpm])
            ->andFilterWhere(['ilike', 'hbpm_day', $this->hbpm_day])
            ->andFilterWhere(['ilike', 'hbpm_week', $this->hbpm_week])
            ->andFilterWhere(['ilike', 'hbpm_month', $this->hbpm_month])
            ->andFilterWhere(['ilike', 'hbpm_sbp_data', $this->hbpm_sbp_data])
            ->andFilterWhere(['ilike', 'hbpm_dbp_data', $this->hbpm_dbp_data])
            ->andFilterWhere(['ilike', 'hbpm_pulse_data', $this->hbpm_pulse_data])
            ->andFilterWhere(['ilike', 'smbg', $this->smbg])
            ->andFilterWhere(['ilike', 'smbg_day', $this->smbg_day])
            ->andFilterWhere(['ilike', 'smbg_week', $this->smbg_week])
            ->andFilterWhere(['ilike', 'smbg_month', $this->smbg_month])
            ->andFilterWhere(['ilike', 'smbg_sbp_data', $this->smbg_sbp_data])
            ->andFilterWhere(['ilike', 'smbg_dbp_data', $this->smbg_dbp_data])
            ->andFilterWhere(['ilike', 'smbg_pulse_data', $this->smbg_pulse_data])
            ->andFilterWhere(['ilike', 'hyperglycemic', $this->hyperglycemic])
            ->andFilterWhere(['ilike', 'hyperglycemic_data', $this->hyperglycemic_data])
            ->andFilterWhere(['ilike', 'hypoglycemic', $this->hypoglycemic])
            ->andFilterWhere(['ilike', 'hypoglycemic_data', $this->hypoglycemic_data])
            ->andFilterWhere(['ilike', 'hypoglycemic_risk', $this->hypoglycemic_risk])
            ->andFilterWhere(['ilike', 'hypoglycemic_risk1', $this->hypoglycemic_risk1])
            ->andFilterWhere(['ilike', 'hypoglycemic_risk1_data', $this->hypoglycemic_risk1_data])
            ->andFilterWhere(['ilike', 'hypoglycemic_risk2', $this->hypoglycemic_risk2])
            ->andFilterWhere(['ilike', 'hypoglycemic_risk2_data', $this->hypoglycemic_risk2_data])
            ->andFilterWhere(['ilike', 'hypoglycemic_risk3', $this->hypoglycemic_risk3])
            ->andFilterWhere(['ilike', 'hypoglycemic_risk3_data', $this->hypoglycemic_risk3_data])
            ->andFilterWhere(['ilike', 'diet_data1', $this->diet_data1])
            ->andFilterWhere(['ilike', 'diet_data2', $this->diet_data2])
            ->andFilterWhere(['ilike', 'exercise_data1', $this->exercise_data1])
            ->andFilterWhere(['ilike', 'exercise_data2', $this->exercise_data2])
            ->andFilterWhere(['ilike', 'drug_data1', $this->drug_data1])
            ->andFilterWhere(['ilike', 'drug_data2', $this->drug_data2])
            ->andFilterWhere(['ilike', 'smooking', $this->smooking])
            ->andFilterWhere(['ilike', 'smooking_ex1_day', $this->smooking_ex1_day])
            ->andFilterWhere(['ilike', 'smooking_ex1_year', $this->smooking_ex1_year])
            ->andFilterWhere(['ilike', 'smooking_ex2', $this->smooking_ex2])
            ->andFilterWhere(['ilike', 'smooking_ex2_day', $this->smooking_ex2_day])
            ->andFilterWhere(['ilike', 'smooking_ex2_year', $this->smooking_ex2_year])
            ->andFilterWhere(['ilike', 'smooking2', $this->smooking2]);

        return $dataProvider;
    }
}
