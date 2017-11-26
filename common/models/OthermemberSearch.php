<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Othermember;

/**
 * OthermemberSearch represents the model behind the search form about `common\models\Othermember`.
 */
class OthermemberSearch extends Othermember
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idothermember'], 'integer'],
            [['ottitle', 'otname', 'otbirth', 'otwduty', 'otpolitic'], 'safe'],
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
        $query = Othermember::find();

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
            'idothermember' => $this->idothermember,
            'otbirth' => $this->otbirth,
        ]);

        $query->andFilterWhere(['like', 'ottitle', $this->ottitle])
            ->andFilterWhere(['like', 'otname', $this->otname])
            ->andFilterWhere(['like', 'otwduty', $this->otwduty])
            ->andFilterWhere(['like', 'otpolitic', $this->otpolitic]);

        return $dataProvider;
    }
}
