<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Nod_bill;

/**
 * Nod_billSearch represents the model behind the search form of `backend\models\Nod_bill`.
 */
class Nod_billSearch extends Nod_bill
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'date', 'loan_type', 'date_1'], 'integer'],
            [['ref_num', 'def_name', 'def_address', 'plantif_name', 'plantif_number', 'overdue'], 'safe'],
            [['loan_amount', 'total'], 'number'],
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
        $query = Nod_bill::find();

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
            'date' => $this->date,
            'loan_type' => $this->loan_type,
            'loan_amount' => $this->loan_amount,
            'date_1' => $this->date_1,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'ref_num', $this->ref_num])
            ->andFilterWhere(['like', 'def_name', $this->def_name])
            ->andFilterWhere(['like', 'def_address', $this->def_address])
            ->andFilterWhere(['like', 'plantif_name', $this->plantif_name])
            ->andFilterWhere(['like', 'plantif_number', $this->plantif_number])
            ->andFilterWhere(['like', 'overdue', $this->overdue]);

        return $dataProvider;
    }
}
