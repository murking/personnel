<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Department;

/**
 * DepartmentSearch represents the model behind the search form about `common\models\Department`.
 */
class DepartmentSearch extends Department
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iddepartment'], 'integer'],
            [['depname', 'depup', 'depshort', 'depmanager'], 'safe'],
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
        $query = Department::find();

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
            'iddepartment' => $this->iddepartment,
        ]);

        $query->andFilterWhere(['like', 'depname', $this->depname])
            ->andFilterWhere(['like', 'depup', $this->depup])
            ->andFilterWhere(['like', 'depshort', $this->depshort])
            ->andFilterWhere(['like', 'depmanager', $this->depmanager]);

        return $dataProvider;
    }
}
