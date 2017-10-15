<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StatusyZatrudnienia;

/**
 * StatusyZatrudnieniaSearch represents the model behind the search form about `app\models\StatusyZatrudnienia`.
 */
class StatusyZatrudnieniaSearch extends StatusyZatrudnienia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_statusu_zatrudnienia'], 'integer'],
            [['status_zatrudnienia'], 'safe'],
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
        $query = StatusyZatrudnienia::find();

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
            'ID_statusu_zatrudnienia' => $this->ID_statusu_zatrudnienia,
        ]);

        $query->andFilterWhere(['like', 'status_zatrudnienia', $this->status_zatrudnienia]);

        return $dataProvider;
    }
}
