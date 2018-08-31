<?php

namespace app\modules_nurse\nurse_screen\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules_nurse\nurse_screen\models\NurseScreening;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use app\modules_nurse\nurse_screen\models\OpdVisit;

/**
 * NurseScreeningSearch represents the model behind the search form of `app\modules_nurse\nurse_screen\models\NurseScreening`.
 */
class NurseScreeningSearch extends NurseScreening
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'vn', 'hn', 'data_json', 'requester', 'created_at', 'created_by', 'updated_at', 'updated_by', 'date_start_service', 'time_start_service', 'date_end_service', 'time_end_service', 'chk_other_text', 'chk_triage', 'chk_access', 'chk_contact_type', 'chk_loc', 'pain_type', 'pain_scale', 'chk_risk_infe'], 'safe'],
            [['cnk_er', 'chk_dm', 'chk_followup', 'chk_insurace', 'chk_contract', 'chk_im', 'chk_anc', 'chk_other', 'chk_risk', 'chk_risk_1', 'chk_risk_2', 'chk_risk_3', 'chk_risk_4', 'chk_risk_5', 'chk_thyroid', 'chk_eye', 'chk_illness', 'chk_checkup'], 'boolean'],
            [['pain_score'], 'number'],
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
        $query = NurseScreening::find();

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
            'cnk_er' => $this->cnk_er,
            'chk_dm' => $this->chk_dm,
            'chk_dm_type' => $this->chk_dm_type,
            'chk_followup' => $this->chk_followup,
            'chk_insurace' => $this->chk_insurace,
            'chk_contract' => $this->chk_contract,
            'chk_im' => $this->chk_im,
            'chk_anc' => $this->chk_anc,
            'chk_other' => $this->chk_other,
            'pain_score' => $this->pain_score,
            'chk_risk' => $this->chk_risk,
            'chk_risk_1' => $this->chk_risk_1,
            'chk_risk_2' => $this->chk_risk_2,
            'chk_risk_3' => $this->chk_risk_3,
            'chk_risk_4' => $this->chk_risk_4,
            'chk_risk_5' => $this->chk_risk_5,
            'chk_thyroid'=> $this->chk_risk_infe,
            'chk_eye'=> $this->chk_risk_infe,
            'chk_illness'=> $this->chk_risk_infe,
            'chk_checkup'=> $this->chk_risk_infe,
        ]);

        $query->andFilterWhere(['ilike', 'id', $this->id])
            ->andFilterWhere(['ilike', 'vn', $this->vn])
            ->andFilterWhere(['ilike', 'hn', $this->hn])
            ->andFilterWhere(['ilike', 'data_json', $this->data_json])
            ->andFilterWhere(['ilike', 'requester', $this->requester])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'chk_other_text', $this->chk_other_text])
            ->andFilterWhere(['ilike', 'chk_triage', $this->chk_triage])
            ->andFilterWhere(['ilike', 'chk_access', $this->chk_access])
            ->andFilterWhere(['ilike', 'chk_contact_type', $this->chk_contact_type])
            ->andFilterWhere(['ilike', 'chk_loc', $this->chk_loc])
            ->andFilterWhere(['ilike', 'pain_type', $this->pain_type])
            ->andFilterWhere(['ilike', 'pain_scale', $this->pain_scale])
            ->andFilterWhere(['ilike', 'chk_risk_infe', $this->chk_risk_infe])

            ->andFilterWhere(['ilike', 'chk_thyroid', $this->chk_risk_infe])
            ->andFilterWhere(['ilike', 'chk_eye', $this->chk_risk_infe])
            ->andFilterWhere(['ilike', 'chk_illness', $this->chk_risk_infe])
            ->andFilterWhere(['ilike', 'chk_checkup', $this->chk_risk_infe]);


        return $dataProvider;
    }

    public function beforeSave($insert){
        //$visit = OpdVisit::find()->where(['vn'=>$this->vn])->one();

    if (NurseScreening::beforeSave($insert)) {
        $this->date_start_service = date('Y-m-d');
        $this->time_start_service = date('H:i:s');

        return true;
    } else {
        $this->date_start_service = date('Y-m-d');
        $this->time_start_service = date('H:i:s');

        return false;
    }
}

public function behaviors() {
    return[
        [
          'class' => BlameableBehavior::className(),
          'createdByAttribute' => 'created_by',
          'updatedByAttribute' => 'updated_by',
        ],
        [
            'class' => TimestampBehavior::className(),
            'createdAtAttribute' => 'created_at',
            'updatedAtAttribute' => 'updated_at',
            'value' => new Expression('NOW()')
        ]
    ];
  }

}
