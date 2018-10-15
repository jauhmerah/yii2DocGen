<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Bai_inah;

/**
 * Bai_inahSearch represents the model behind the search form of `backend\models\Bai_inah`.
 */
class Bai_inahSearch extends Bai_inah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['ref', 'client_ref', 'court_name', 'court_person', 'year', 'plantif_name', 'plantif_address', 'def_name', 'def_address', 'def_ic', 'loan_type', 'application_date', 'sale_agreement_date', 'purchase_agreement_date', 'asset_detail', 'payment_period', 'issue_date'], 'safe'],
            [['loan_amount', 'asset_price', 'asset_selling_price', 'instalment', 'outstanding_payment'], 'number'],
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
        $query = Bai_inah::find();

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
            'id' => $this->id,
            'year' => $this->year,
            'loan_amount' => $this->loan_amount,
            'application_date' => $this->application_date,
            'sale_agreement_date' => $this->sale_agreement_date,
            'purchase_agreement_date' => $this->purchase_agreement_date,
            'asset_price' => $this->asset_price,
            'asset_selling_price' => $this->asset_selling_price,
            'instalment' => $this->instalment,
            'issue_date' => $this->issue_date,
            'outstanding_payment' => $this->outstanding_payment,
        ]);

        $query->andFilterWhere(['like', 'ref', $this->ref])
            ->andFilterWhere(['like', 'client_ref', $this->client_ref])
            ->andFilterWhere(['like', 'court_name', $this->court_name])
            ->andFilterWhere(['like', 'court_person', $this->court_person])
            ->andFilterWhere(['like', 'plantif_name', $this->plantif_name])
            ->andFilterWhere(['like', 'plantif_address', $this->plantif_address])
            ->andFilterWhere(['like', 'def_name', $this->def_name])
            ->andFilterWhere(['like', 'def_address', $this->def_address])
            ->andFilterWhere(['like', 'def_ic', $this->def_ic])
            ->andFilterWhere(['like', 'loan_type', $this->loan_type])
            ->andFilterWhere(['like', 'asset_detail', $this->asset_detail])
            ->andFilterWhere(['like', 'payment_period', $this->payment_period]);

        return $dataProvider;
    }
}
