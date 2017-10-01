<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Klienci */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="klienci-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'imie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nazwisko')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dyskretny')->textInput() ?>

    <?= $form->field($model, 'oferta')->textInput() ?>

    <?= $form->field($model, 'pesel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dowod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_urodzenia')->textInput() ?>

    <?= $form->field($model, 'plec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nr_tel1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nr_tel2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stan_cywilny')->textInput() ?>

    <?= $form->field($model, 'status_zamieszkania')->textInput() ?>

    <?= $form->field($model, 'ulica')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nr_domu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nr_mieszkania')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kod_pocztowy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'miasto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adres_zameldowania_inny')->textInput() ?>

    <?= $form->field($model, 'ulica_zameldowania')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nr_domu_zameldowania')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nr_mieszkania_zameldowania')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kod_pocztowy_zameldowania')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'miasto_zameldowania')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imie_osoba_kontakt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nazwisko_osoba_kontakt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ulica_osoba_kontakt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nr_domu_osoba_kontakt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nr_mieszkania_osoba_kontakt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kod_pocztowy_osoba_kontakt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'miasto_osoba_kontakt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel_osoba_kontakt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pokrewienstwo_osoba_kontakt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ktora_umowa')->textInput() ?>

    <?= $form->field($model, 'ktora_umowa_start_programu')->textInput() ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <?= $form->field($model, 'godzina')->textInput() ?>

    <?= $form->field($model, 'uzytkownik')->textInput() ?>

    <?= $form->field($model, 'czarna_lista')->textInput() ?>

    <?= $form->field($model, 'ru')->textInput() ?>

    <?= $form->field($model, 'upadlosc')->textInput() ?>

    <?= $form->field($model, 'data_upadlosc')->textInput() ?>

    <?= $form->field($model, 'sygnatura_upadlosc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uwagi')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
