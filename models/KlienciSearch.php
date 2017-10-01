<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Klienci;

/**
 * KlienciSearch represents the model behind the search form about `app\models\Klienci`.
 */
class KlienciSearch extends Klienci
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_klienta', 'dyskretny', 'oferta', 'stan_cywilny', 'status_zamieszkania', 'adres_zameldowania_inny', 'ktora_umowa', 'ktora_umowa_start_programu', 'uzytkownik', 'czarna_lista', 'ru', 'upadlosc'], 'integer'],
            [['imie', 'nazwisko', 'pesel', 'dowod', 'data_urodzenia', 'plec', 'nr_tel1', 'nr_tel2', 'ulica', 'nr_domu', 'nr_mieszkania', 'kod_pocztowy', 'miasto', 'ulica_zameldowania', 'nr_domu_zameldowania', 'nr_mieszkania_zameldowania', 'kod_pocztowy_zameldowania', 'miasto_zameldowania', 'imie_osoba_kontakt', 'nazwisko_osoba_kontakt', 'ulica_osoba_kontakt', 'nr_domu_osoba_kontakt', 'nr_mieszkania_osoba_kontakt', 'kod_pocztowy_osoba_kontakt', 'miasto_osoba_kontakt', 'tel_osoba_kontakt', 'pokrewienstwo_osoba_kontakt', 'data', 'godzina', 'data_upadlosc', 'sygnatura_upadlosc', 'uwagi'], 'safe'],
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
        $query = Klienci::find();

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
            'ID_klienta' => $this->ID_klienta,
            'dyskretny' => $this->dyskretny,
            'oferta' => $this->oferta,
            'data_urodzenia' => $this->data_urodzenia,
            'stan_cywilny' => $this->stan_cywilny,
            'status_zamieszkania' => $this->status_zamieszkania,
            'adres_zameldowania_inny' => $this->adres_zameldowania_inny,
            'ktora_umowa' => $this->ktora_umowa,
            'ktora_umowa_start_programu' => $this->ktora_umowa_start_programu,
            'data' => $this->data,
            'godzina' => $this->godzina,
            'uzytkownik' => $this->uzytkownik,
            'czarna_lista' => $this->czarna_lista,
            'ru' => $this->ru,
            'upadlosc' => $this->upadlosc,
            'data_upadlosc' => $this->data_upadlosc,
        ]);

        $query->andFilterWhere(['like', 'imie', $this->imie])
            ->andFilterWhere(['like', 'nazwisko', $this->nazwisko])
            ->andFilterWhere(['like', 'pesel', $this->pesel])
            ->andFilterWhere(['like', 'dowod', $this->dowod])
            ->andFilterWhere(['like', 'plec', $this->plec])
            ->andFilterWhere(['like', 'nr_tel1', $this->nr_tel1])
            ->andFilterWhere(['like', 'nr_tel2', $this->nr_tel2])
            ->andFilterWhere(['like', 'ulica', $this->ulica])
            ->andFilterWhere(['like', 'nr_domu', $this->nr_domu])
            ->andFilterWhere(['like', 'nr_mieszkania', $this->nr_mieszkania])
            ->andFilterWhere(['like', 'kod_pocztowy', $this->kod_pocztowy])
            ->andFilterWhere(['like', 'miasto', $this->miasto])
            ->andFilterWhere(['like', 'ulica_zameldowania', $this->ulica_zameldowania])
            ->andFilterWhere(['like', 'nr_domu_zameldowania', $this->nr_domu_zameldowania])
            ->andFilterWhere(['like', 'nr_mieszkania_zameldowania', $this->nr_mieszkania_zameldowania])
            ->andFilterWhere(['like', 'kod_pocztowy_zameldowania', $this->kod_pocztowy_zameldowania])
            ->andFilterWhere(['like', 'miasto_zameldowania', $this->miasto_zameldowania])
            ->andFilterWhere(['like', 'imie_osoba_kontakt', $this->imie_osoba_kontakt])
            ->andFilterWhere(['like', 'nazwisko_osoba_kontakt', $this->nazwisko_osoba_kontakt])
            ->andFilterWhere(['like', 'ulica_osoba_kontakt', $this->ulica_osoba_kontakt])
            ->andFilterWhere(['like', 'nr_domu_osoba_kontakt', $this->nr_domu_osoba_kontakt])
            ->andFilterWhere(['like', 'nr_mieszkania_osoba_kontakt', $this->nr_mieszkania_osoba_kontakt])
            ->andFilterWhere(['like', 'kod_pocztowy_osoba_kontakt', $this->kod_pocztowy_osoba_kontakt])
            ->andFilterWhere(['like', 'miasto_osoba_kontakt', $this->miasto_osoba_kontakt])
            ->andFilterWhere(['like', 'tel_osoba_kontakt', $this->tel_osoba_kontakt])
            ->andFilterWhere(['like', 'pokrewienstwo_osoba_kontakt', $this->pokrewienstwo_osoba_kontakt])
            ->andFilterWhere(['like', 'sygnatura_upadlosc', $this->sygnatura_upadlosc])
            ->andFilterWhere(['like', 'uwagi', $this->uwagi]);

        return $dataProvider;
    }
}
