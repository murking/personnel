<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\wage;

/**
 * WageSearch represents the model behind the search form about `common\models\wage`.
 */
class WageSearch extends wage
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idwage', 'wagdepart'], 'integer'],
            [['wagname', 'wagbas', 'wagpost', 'wagdiff', 'wagage', 'wagalone', 'wagother', 'wagreward', 'wagde', 'wagshould', 'wagpension', 'wagmedical', 'waglost', 'wagfund', 'wagup', 'wagtax', 'wagptax', 'wagunion', 'wagget', 'wagcreatedate', 'wagupdatedate'], 'safe'],
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
        $query = wage::find();

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
            'idwage' => $this->idwage,
            'wagdepart' => $this->wagdepart,
        ]);

        $query->andFilterWhere(['like', 'wagname', $this->wagname])
            ->andFilterWhere(['like', 'wagbas', $this->wagbas])
            ->andFilterWhere(['like', 'wagpost', $this->wagpost])
            ->andFilterWhere(['like', 'wagdiff', $this->wagdiff])
            ->andFilterWhere(['like', 'wagage', $this->wagage])
            ->andFilterWhere(['like', 'wagalone', $this->wagalone])
            ->andFilterWhere(['like', 'wagother', $this->wagother])
            ->andFilterWhere(['like', 'wagreward', $this->wagreward])
            ->andFilterWhere(['like', 'wagde', $this->wagde])
            ->andFilterWhere(['like', 'wagshould', $this->wagshould])
            ->andFilterWhere(['like', 'wagpension', $this->wagpension])
            ->andFilterWhere(['like', 'wagmedical', $this->wagmedical])
            ->andFilterWhere(['like', 'waglost', $this->waglost])
            ->andFilterWhere(['like', 'wagfund', $this->wagfund])
            ->andFilterWhere(['like', 'wagup', $this->wagup])
            ->andFilterWhere(['like', 'wagtax', $this->wagtax])
            ->andFilterWhere(['like', 'wagptax', $this->wagptax])
            ->andFilterWhere(['like', 'wagunion', $this->wagunion])
            ->andFilterWhere(['like', 'wagget', $this->wagget])
            ->andFilterWhere(['like', 'wagcreatedate', $this->wagcreatedate])
            ->andFilterWhere(['like', 'wagupdatedate', $this->wagupdatedate]);

        return $dataProvider;
    }
}
