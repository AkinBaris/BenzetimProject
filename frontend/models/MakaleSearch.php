<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Makale;

/**
 * MakaleSearch represents the model behind the search form about `frontend\models\Makale`.
 */
class MakaleSearch extends Makale
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'CID'], 'integer'],
            [['MName', 'Text', 'FDate', 'CDC'], 'safe'],
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
        $query = Makale::find();

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
            'FDate' => $this->FDate,
            'CID' => $this->CID,
        ]);

        $query->andFilterWhere(['like', 'MName', $this->MName])
            ->andFilterWhere(['like', 'Text', $this->Text])
            ->andFilterWhere(['like', 'CDC', $this->CDC]);

        return $dataProvider;
    }
}
