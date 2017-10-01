<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KlienciSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kliencis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klienci-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Klienci', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_klienta',
            'imie',
            'nazwisko',
            'dyskretny',
            'oferta',
            // 'pesel',
            // 'dowod',
            // 'data_urodzenia',
            // 'plec',
            // 'nr_tel1',
            // 'nr_tel2',
            // 'stan_cywilny',
            // 'status_zamieszkania',
            // 'ulica',
            // 'nr_domu',
            // 'nr_mieszkania',
            // 'kod_pocztowy',
            // 'miasto',
            // 'adres_zameldowania_inny',
            // 'ulica_zameldowania',
            // 'nr_domu_zameldowania',
            // 'nr_mieszkania_zameldowania',
            // 'kod_pocztowy_zameldowania',
            // 'miasto_zameldowania',
            // 'imie_osoba_kontakt',
            // 'nazwisko_osoba_kontakt',
            // 'ulica_osoba_kontakt',
            // 'nr_domu_osoba_kontakt',
            // 'nr_mieszkania_osoba_kontakt',
            // 'kod_pocztowy_osoba_kontakt',
            // 'miasto_osoba_kontakt',
            // 'tel_osoba_kontakt',
            // 'pokrewienstwo_osoba_kontakt',
            // 'ktora_umowa',
            // 'ktora_umowa_start_programu',
            // 'data',
            // 'godzina',
            // 'uzytkownik',
            // 'czarna_lista',
            // 'ru',
            // 'upadlosc',
            // 'data_upadlosc',
            // 'sygnatura_upadlosc',
            // 'uwagi:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
