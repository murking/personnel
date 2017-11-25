<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Basic;

/**
 * BasicSearch represents the model behind the search form about `common\models\Basic`.
 */
class BasicSearch extends Basic
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idbasic'], 'integer'],
            [['name', 'department', 'duty', 'idcard', 'sex', 'politic', 'brithdate', 'educationbk', 'degree', 'graduationdate', 'graduationsc', 'major', 'jobtitle', 'householdreg', 'householdadd', 'address', 'zip', 'phone', 'homephone', 'entrydate'], 'safe'],
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
        $query = Basic::find();

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
            'idbasic' => $this->idbasic,
            'brithdate' => $this->brithdate,
            'graduationdate' => $this->graduationdate,
            'entrydate' => $this->entrydate,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'duty', $this->duty])
            ->andFilterWhere(['like', 'idcard', $this->idcard])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'politic', $this->politic])
            ->andFilterWhere(['like', 'educationbk', $this->educationbk])
            ->andFilterWhere(['like', 'degree', $this->degree])
            ->andFilterWhere(['like', 'graduationsc', $this->graduationsc])
            ->andFilterWhere(['like', 'major', $this->major])
            ->andFilterWhere(['like', 'jobtitle', $this->jobtitle])
            ->andFilterWhere(['like', 'householdreg', $this->householdreg])
            ->andFilterWhere(['like', 'householdadd', $this->householdadd])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'zip', $this->zip])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'homephone', $this->homephone]);

        return $dataProvider;
    }
}
