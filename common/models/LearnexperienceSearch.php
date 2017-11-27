<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Learnexperience;

/**
 * LearnexperienceSearch represents the model behind the search form about `common\models\Learnexperience`.
 */
class LearnexperienceSearch extends Learnexperience
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idlearnexperience', 'basicid'], 'integer'],
            [['period', 'scmajor', 'scduty', 'witness'], 'safe'],
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
        $query = Learnexperience::find();

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
            'idlearnexperience' => $this->idlearnexperience,
            'basicid' => $this->basicid,
        ]);

        $query->andFilterWhere(['like', 'period', $this->period])
            ->andFilterWhere(['like', 'scmajor', $this->scmajor])
            ->andFilterWhere(['like', 'scduty', $this->scduty])
            ->andFilterWhere(['like', 'witness', $this->witness]);

        return $dataProvider;
    }
}
