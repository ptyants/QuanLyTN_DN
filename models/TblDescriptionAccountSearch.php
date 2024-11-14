<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblDescriptionAccount;

/**
 * TblDescriptionAccountSearch represents the model behind the search form of `app\models\TblDescriptionAccount`.
 */
class TblDescriptionAccountSearch extends TblDescriptionAccount
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description_account_id', 'account_id', 'phone', 'id_card'], 'integer'],
            [['sex', 'address', 'nation', 'religion'], 'safe'],
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
        $query = TblDescriptionAccount::find();

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
            'description_account_id' => $this->description_account_id,
            'account_id' => $this->account_id,
            'phone' => $this->phone,
            'id_card' => $this->id_card,
        ]);

        $query->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'nation', $this->nation])
            ->andFilterWhere(['like', 'religion', $this->religion]);

        return $dataProvider;
    }
}
