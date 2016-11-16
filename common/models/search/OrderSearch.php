<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Order;

/**
 * OrderSearch represents the model behind the search form about `common\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created', 'updated'], 'integer'],
            [['company_name', 'phone', 'email', 'container', 'st_departure', 'st_arrival', 'code', 'bag', 'bg_departure', 'bg_arrival'], 'safe'],
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
        $query = Order::find();

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
            'id' => $this->id,
            'created' => $this->created,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'container', $this->container])
            ->andFilterWhere(['like', 'st_departure', $this->st_departure])
            ->andFilterWhere(['like', 'st_arrival', $this->st_arrival])
            ->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'bag', $this->bag])
            ->andFilterWhere(['like', 'bg_departure', $this->bg_departure])
            ->andFilterWhere(['like', 'bg_arrival', $this->bg_arrival]);

        return $dataProvider;
    }
}
