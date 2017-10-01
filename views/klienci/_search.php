<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KlienciSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="klienci-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_klienta') ?>

    <?= $form->field($model, 'imie') ?>

    <?= $form->field($model, 'nazwisko') ?>

    <?= $form->field($model, 'dyskretny') ?>

    <?= $form->field($model, 'oferta') ?>

    <?php // echo $form->field($model, 'pesel') ?>

    <?php // echo $form->field($model, 'dowod') ?>

    <?php // echo $form->field($model, 'data_urodzenia') ?>

    <?php // echo $form->field($model, 'plec') ?>

    <?php // echo $form->field($model, 'nr_tel1') ?>

    <?php // echo $form->field($model, 'nr_tel2') ?>

    <?php // echo $form->field($model, 'stan_cywilny') ?>

    <?php // echo $form->field($model, 'status_zamieszkania') ?>

    <?php // echo $form->field($model, 'ulica') ?>

    <?php // echo $form->field($model, 'nr_domu') ?>

    <?php // echo $form->field($model, 'nr_mieszkania') ?>

    <?php // echo $form->field($model, 'kod_pocztowy') ?>

    <?php // echo $form->field($model, 'miasto') ?>

    <?php // echo $form->field($model, 'adres_zameldowania_inny') ?>

    <?php // echo $form->field($model, 'ulica_zameldowania') ?>

    <?php // echo $form->field($model, 'nr_domu_zameldowania') ?>

    <?php // echo $form->field($model, 'nr_mieszkania_zameldowania') ?>

    <?php // echo $form->field($model, 'kod_pocztowy_zameldowania') ?>

    <?php // echo $form->field($model, 'miasto_zameldowania') ?>

    <?php // echo $form->field($model, 'imie_osoba_kontakt') ?>

    <?php // echo $form->field($model, 'nazwisko_osoba_kontakt') ?>

    <?php // echo $form->field($model, 'ulica_osoba_kontakt') ?>

    <?php // echo $form->field($model, 'nr_domu_osoba_kontakt') ?>

    <?php // echo $form->field($model, 'nr_mieszkania_osoba_kontakt') ?>

    <?php // echo $form->field($model, 'kod_pocztowy_osoba_kontakt') ?>

    <?php // echo $form->field($model, 'miasto_osoba_kontakt') ?>

    <?php // echo $form->field($model, 'tel_osoba_kontakt') ?>

    <?php // echo $form->field($model, 'pokrewienstwo_osoba_kontakt') ?>

    <?php // echo $form->field($model, 'ktora_umowa') ?>

    <?php // echo $form->field($model, 'ktora_umowa_start_programu') ?>

    <?php // echo $form->field($model, 'data') ?>

    <?php // echo $form->field($model, 'godzina') ?>

    <?php // echo $form->field($model, 'uzytkownik') ?>

    <?php // echo $form->field($model, 'czarna_lista') ?>

    <?php // echo $form->field($model, 'ru') ?>

    <?php // echo $form->field($model, 'upadlosc') ?>

    <?php // echo $form->field($model, 'data_upadlosc') ?>

    <?php // echo $form->field($model, 'sygnatura_upadlosc') ?>

    <?php // echo $form->field($model, 'uwagi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
