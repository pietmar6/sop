<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Zatrudnienia;

/**
 * ZatrudnieniaSearch represents the model behind the search form about `app\models\Zatrudnienia`.
 */
class ZatrudnieniaSearch extends Zatrudnienia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_zatrudnienia', 'status_zatrudnienia_id', 'rodzaj_umowy_id', 'czestotliwosc_wplywu_dochodu', 'klient_ID', 'uzytkownik'], 'integer'],
            [['zatrudnienie_od', 'zatrudnienie_do', 'dochod_netto', 'data_wplywu_dochodu', 'nazwa_zaklad_pracy', 'stanowisko', 'ulica', 'nr_lokalu', 'miejscowosc', 'kod_pocztowy', 'telefon', 'nr_umowy', 'data', 'godzina'], 'safe'],
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
        $query = Zatrudnienia::find();

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
            'ID_zatrudnienia' => $this->ID_zatrudnienia,
            'status_zatrudnienia_id' => $this->status_zatrudnienia_id,
            'rodzaj_umowy_id' => $this->rodzaj_umowy_id,
            'czestotliwosc_wplywu_dochodu' => $this->czestotliwosc_wplywu_dochodu,
            'klient_ID' => $this->klient_ID,
            'data' => $this->data,
            'godzina' => $this->godzina,
            'uzytkownik' => $this->uzytkownik,
        ]);

        $query->andFilterWhere(['like', 'zatrudnienie_od', $this->zatrudnienie_od])
            ->andFilterWhere(['like', 'zatrudnienie_do', $this->zatrudnienie_do])
            ->andFilterWhere(['like', 'dochod_netto', $this->dochod_netto])
            ->andFilterWhere(['like', 'data_wplywu_dochodu', $this->data_wplywu_dochodu])
            ->andFilterWhere(['like', 'nazwa_zaklad_pracy', $this->nazwa_zaklad_pracy])
            ->andFilterWhere(['like', 'stanowisko', $this->stanowisko])
            ->andFilterWhere(['like', 'ulica', $this->ulica])
            ->andFilterWhere(['like', 'nr_lokalu', $this->nr_lokalu])
            ->andFilterWhere(['like', 'miejscowosc', $this->miejscowosc])
            ->andFilterWhere(['like', 'kod_pocztowy', $this->kod_pocztowy])
            ->andFilterWhere(['like', 'telefon', $this->telefon])
            ->andFilterWhere(['like', 'nr_umowy', $this->nr_umowy]);

        return $dataProvider;
    }
}
