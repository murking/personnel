<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Family;

/**
 * FamilySearch represents the model behind the search form about `common\models\Family`.
 */
class FamilySearch extends Family
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idfamily', 'spbasic', 'other', 'othe', 'oth', 'ot'], 'integer'],
            [['spname', 'spbirth', 'sppleace', 'spethnic', 'spdegree', 'sppolitic', 'spwduty', 'spphone'], 'safe'],
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
        $query = Family::find();

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
            'idfamily' => $this->idfamily,
            'spbirth' => $this->spbirth,
            'spbasic' => $this->spbasic,
            'other' => $this->other,
            'othe' => $this->othe,
            'oth' => $this->oth,
            'ot' => $this->ot,
        ]);

        $query->andFilterWhere(['like', 'spname', $this->spname])
            ->andFilterWhere(['like', 'sppleace', $this->sppleace])
            ->andFilterWhere(['like', 'spethnic', $this->spethnic])
            ->andFilterWhere(['like', 'spdegree', $this->spdegree])
            ->andFilterWhere(['like', 'sppolitic', $this->sppolitic])
            ->andFilterWhere(['like', 'spwduty', $this->spwduty])
            ->andFilterWhere(['like', 'spphone', $this->spphone]);

        return $dataProvider;
    }
}
