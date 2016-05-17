<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TCategory;

/**
 * TCategorySearch represents the model behind the search form about `frontend\models\TCategory`.
 */
class TCategorySearch extends TCategory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'C_UpID'], 'integer'],
            [['C_Name'], 'safe'],
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
        $query = TCategory::find();

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
            'C_UpID' => $this->C_UpID,
        ]);

        $query->andFilterWhere(['like', 'C_Name', $this->C_Name]);

        return $dataProvider;
    }
}
