<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Klienci */

$this->title = $model->ID_klienta;
$this->params['breadcrumbs'][] = ['label' => 'Kliencis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klienci-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_klienta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_klienta], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_klienta',
            'imie',
            'nazwisko',
            'dyskretny',
            'oferta',
            'pesel',
            'dowod',
            'data_urodzenia',
            'plec',
            'nr_tel1',
            'nr_tel2',
            'stan_cywilny',
            'status_zamieszkania',
            'ulica',
            'nr_domu',
            'nr_mieszkania',
            'kod_pocztowy',
            'miasto',
            'adres_zameldowania_inny',
            'ulica_zameldowania',
            'nr_domu_zameldowania',
            'nr_mieszkania_zameldowania',
            'kod_pocztowy_zameldowania',
            'miasto_zameldowania',
            'imie_osoba_kontakt',
            'nazwisko_osoba_kontakt',
            'ulica_osoba_kontakt',
            'nr_domu_osoba_kontakt',
            'nr_mieszkania_osoba_kontakt',
            'kod_pocztowy_osoba_kontakt',
            'miasto_osoba_kontakt',
            'tel_osoba_kontakt',
            'pokrewienstwo_osoba_kontakt',
            'ktora_umowa',
            'ktora_umowa_start_programu',
            'data',
            'godzina',
            'uzytkownik',
            'czarna_lista',
            'ru',
            'upadlosc',
            'data_upadlosc',
            'sygnatura_upadlosc',
            'uwagi:ntext',
        ],
    ]) ?>

</div>
