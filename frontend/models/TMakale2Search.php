<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TMakale2;

/**
 * TMakale2Search represents the model behind the search form about `frontend\models\TMakale2`.
 */
class TMakale2Search extends TMakale2
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'C_ID'], 'integer'],
            [['M_Name', 'M_Text', 'M_FDate', 'C_DC'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = TMakale2::find();

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
            'ID' => $this->ID,
            'M_FDate' => $this->M_FDate,
            'C_ID' => $this->C_ID,
        ]);

        $query->andFilterWhere(['like', 'M_Name', $this->M_Name])
            ->andFilterWhere(['like', 'M_Text', $this->M_Text])
            ->andFilterWhere(['like', 'C_DC', $this->C_DC]);

        return $dataProvider;
    }
}
