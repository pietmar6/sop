<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zatrudnienia".
 *
 * @property integer $ID_zatrudnienia
 * @property integer $status_zatrudnienia_id
 * @property integer $rodzaj_umowy_id
 * @property string $zatrudnienie_od
 * @property string $zatrudnienie_do
 * @property string $dochod_netto
 * @property integer $czestotliwosc_wplywu_dochodu
 * @property string $data_wplywu_dochodu
 * @property string $nazwa_zaklad_pracy
 * @property string $stanowisko
 * @property string $ulica
 * @property string $nr_lokalu
 * @property string $miejscowosc
 * @property string $kod_pocztowy
 * @property string $telefon
 * @property string $nr_umowy
 * @property integer $klient_ID
 * @property string $data
 * @property string $godzina
 * @property integer $uzytkownik
 *
 * @property StatusyZatrudnienia $statusZatrudnienia
 * @property Klienci $klient
 */
class Zatrudnienia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zatrudnienia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status_zatrudnienia_id', 'rodzaj_umowy_id', 'dochod_netto', 'czestotliwosc_wplywu_dochodu', 'nazwa_zaklad_pracy', 'stanowisko', 'ulica', 'nr_lokalu', 'miejscowosc', 'kod_pocztowy', 'telefon', 'nr_umowy', 'klient_ID', 'data', 'godzina', 'uzytkownik'], 'required', 'message' => 'Pole jest wymagane'],
            [['status_zatrudnienia_id', 'rodzaj_umowy_id', 'czestotliwosc_wplywu_dochodu', 'klient_ID', 'uzytkownik'], 'integer'],
            [['data', 'godzina'], 'safe'],
            [['zatrudnienie_od', 'zatrudnienie_do'], 'string', 'max' => 10],
            [['dochod_netto', 'nr_lokalu'], 'string', 'max' => 50],
            [['data_wplywu_dochodu'], 'string', 'max' => 20],
            [['nazwa_zaklad_pracy'], 'string', 'max' => 200],
            [['stanowisko', 'ulica', 'miejscowosc'], 'string', 'max' => 100],
            [['kod_pocztowy'], 'string', 'max' => 6],
            [['telefon'], 'string', 'max' => 15],
            [['nr_umowy'], 'string', 'max' => 30],
            [['status_zatrudnienia_id'], 'exist', 'skipOnError' => true, 'targetClass' => StatusyZatrudnienia::className(), 'targetAttribute' => ['status_zatrudnienia_id' => 'ID_statusu_zatrudnienia']],
            [['klient_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Klienci::className(), 'targetAttribute' => ['klient_ID' => 'ID_klienta']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_zatrudnienia' => 'Id Zatrudnienia',
            'status_zatrudnienia_id' => 'Rodzaj',
            'rodzaj_umowy_id' => 'Okres',
            'zatrudnienie_od' => 'Od kiedy',
            'zatrudnienie_do' => 'Do kiedy',
            'dochod_netto' => 'Dochód Netto',
            'czestotliwosc_wplywu_dochodu' => 'Częstotliwość wpływu',
            'data_wplywu_dochodu' => 'Dzień Wpływu',
            'nazwa_zaklad_pracy' => 'Zakład pracy',
            'stanowisko' => 'Stanowisko',
            'ulica' => 'Ulica',
            'nr_lokalu' => 'Nr lokalu',
            'miejscowosc' => 'Miejscowość',
            'kod_pocztowy' => 'Kod pocztowy',
            'telefon' => 'Telefon',
            'nr_umowy' => 'Umowa',
            'klient_ID' => 'Klient',
            'data' => 'Data',
            'godzina' => 'Godzina',
            'uzytkownik' => 'Użytkownik',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatusZatrudnienia()
    {
        return $this->hasOne(StatusyZatrudnienia::className(), ['ID_statusu_zatrudnienia' => 'status_zatrudnienia_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKlient()
    {
        return $this->hasOne(Klienci::className(), ['ID_klienta' => 'klient_ID']);
    }
}
