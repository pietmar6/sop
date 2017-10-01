<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "klienci".
 *
 * @property integer $ID_klienta
 * @property string $imie
 * @property string $nazwisko
 * @property integer $dyskretny
 * @property integer $oferta
 * @property string $pesel
 * @property string $dowod
 * @property string $data_urodzenia
 * @property string $plec
 * @property string $nr_tel1
 * @property string $nr_tel2
 * @property integer $stan_cywilny
 * @property integer $status_zamieszkania
 * @property string $ulica
 * @property string $nr_domu
 * @property string $nr_mieszkania
 * @property string $kod_pocztowy
 * @property string $miasto
 * @property integer $adres_zameldowania_inny
 * @property string $ulica_zameldowania
 * @property string $nr_domu_zameldowania
 * @property string $nr_mieszkania_zameldowania
 * @property string $kod_pocztowy_zameldowania
 * @property string $miasto_zameldowania
 * @property string $imie_osoba_kontakt
 * @property string $nazwisko_osoba_kontakt
 * @property string $ulica_osoba_kontakt
 * @property string $nr_domu_osoba_kontakt
 * @property string $nr_mieszkania_osoba_kontakt
 * @property string $kod_pocztowy_osoba_kontakt
 * @property string $miasto_osoba_kontakt
 * @property string $tel_osoba_kontakt
 * @property string $pokrewienstwo_osoba_kontakt
 * @property integer $ktora_umowa
 * @property integer $ktora_umowa_start_programu
 * @property string $data
 * @property string $godzina
 * @property integer $uzytkownik
 * @property integer $czarna_lista
 * @property integer $ru
 * @property integer $upadlosc
 * @property string $data_upadlosc
 * @property string $sygnatura_upadlosc
 * @property string $uwagi
 */
class Klienci extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'klienci';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imie', 'nazwisko', 'pesel', 'dowod', 'nr_tel1', 'ulica', 'nr_domu', 'kod_pocztowy', 'miasto', 'data', 'godzina', 'uzytkownik'], 'required'],
            [['dyskretny', 'oferta', 'stan_cywilny', 'status_zamieszkania', 'adres_zameldowania_inny', 'ktora_umowa', 'ktora_umowa_start_programu', 'uzytkownik', 'czarna_lista', 'ru', 'upadlosc'], 'integer'],
            [['data_urodzenia', 'data', 'godzina', 'data_upadlosc'], 'safe'],
            [['uwagi'], 'string'],
            [['imie'], 'string', 'max' => 10],
            [['nazwisko', 'ulica', 'ulica_zameldowania', 'imie_osoba_kontakt', 'ulica_osoba_kontakt', 'miasto_osoba_kontakt', 'pokrewienstwo_osoba_kontakt', 'sygnatura_upadlosc'], 'string', 'max' => 20],
            [['pesel'], 'string', 'max' => 11],
            [['dowod'], 'string', 'max' => 9],
            [['plec'], 'string', 'max' => 1],
            [['nr_tel1', 'nr_tel2', 'tel_osoba_kontakt'], 'string', 'max' => 12],
            [['nr_domu', 'nr_mieszkania', 'kod_pocztowy', 'nr_domu_zameldowania', 'nr_mieszkania_zameldowania', 'kod_pocztowy_zameldowania', 'nr_domu_osoba_kontakt', 'nr_mieszkania_osoba_kontakt', 'kod_pocztowy_osoba_kontakt'], 'string', 'max' => 6],
            [['miasto', 'miasto_zameldowania', 'nazwisko_osoba_kontakt'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_klienta' => 'Id Klienta',
            'imie' => 'Imie',
            'nazwisko' => 'Nazwisko',
            'dyskretny' => 'Dyskretny',
            'oferta' => 'Oferta',
            'pesel' => 'Pesel',
            'dowod' => 'Dowod',
            'data_urodzenia' => 'Data Urodzenia',
            'plec' => 'Plec',
            'nr_tel1' => 'Nr Tel1',
            'nr_tel2' => 'Nr Tel2',
            'stan_cywilny' => 'Stan Cywilny',
            'status_zamieszkania' => 'Status Zamieszkania',
            'ulica' => 'Ulica',
            'nr_domu' => 'Nr Domu',
            'nr_mieszkania' => 'Nr Mieszkania',
            'kod_pocztowy' => 'Kod Pocztowy',
            'miasto' => 'Miasto',
            'adres_zameldowania_inny' => 'Adres Zameldowania Inny',
            'ulica_zameldowania' => 'Ulica Zameldowania',
            'nr_domu_zameldowania' => 'Nr Domu Zameldowania',
            'nr_mieszkania_zameldowania' => 'Nr Mieszkania Zameldowania',
            'kod_pocztowy_zameldowania' => 'Kod Pocztowy Zameldowania',
            'miasto_zameldowania' => 'Miasto Zameldowania',
            'imie_osoba_kontakt' => 'Imie Osoba Kontakt',
            'nazwisko_osoba_kontakt' => 'Nazwisko Osoba Kontakt',
            'ulica_osoba_kontakt' => 'Ulica Osoba Kontakt',
            'nr_domu_osoba_kontakt' => 'Nr Domu Osoba Kontakt',
            'nr_mieszkania_osoba_kontakt' => 'Nr Mieszkania Osoba Kontakt',
            'kod_pocztowy_osoba_kontakt' => 'Kod Pocztowy Osoba Kontakt',
            'miasto_osoba_kontakt' => 'Miasto Osoba Kontakt',
            'tel_osoba_kontakt' => 'Tel Osoba Kontakt',
            'pokrewienstwo_osoba_kontakt' => 'Pokrewienstwo Osoba Kontakt',
            'ktora_umowa' => 'Ktora Umowa',
            'ktora_umowa_start_programu' => 'Ktora Umowa Start Programu',
            'data' => 'Data',
            'godzina' => 'Godzina',
            'uzytkownik' => 'Uzytkownik',
            'czarna_lista' => 'Czarna Lista',
            'ru' => 'Ru',
            'upadlosc' => 'Upadlosc',
            'data_upadlosc' => 'Data Upadlosc',
            'sygnatura_upadlosc' => 'Sygnatura Upadlosc',
            'uwagi' => 'Uwagi',
        ];
    }
}
