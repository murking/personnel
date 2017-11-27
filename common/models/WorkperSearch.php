<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Workper;

/**
 * WorkperSearch represents the model behind the search form about `common\models\Workper`.
 */
class WorkperSearch extends Workper
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idper', 'peridbasic'], 'integer'],
            [['perdate', 'perstatus', 'perlevel', 'percom'], 'safe'],
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
        $query = Workper::find();

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
            'idper' => $this->idper,
            'peridbasic' => $this->peridbasic,
        ]);

        $query->andFilterWhere(['like', 'perdate', $this->perdate])
            ->andFilterWhere(['like', 'perstatus', $this->perstatus])
            ->andFilterWhere(['like', 'perlevel', $this->perlevel])
            ->andFilterWhere(['like', 'percom', $this->percom]);

        return $dataProvider;
    }
}
