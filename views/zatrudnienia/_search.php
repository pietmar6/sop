<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ZatrudnieniaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zatrudnienia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_zatrudnienia') ?>

    <?= $form->field($model, 'status_zatrudnienia_id') ?>

    <?= $form->field($model, 'rodzaj_umowy_id') ?>

    <?= $form->field($model, 'zatrudnienie_od') ?>

    <?= $form->field($model, 'zatrudnienie_do') ?>

    <?php // echo $form->field($model, 'dochod_netto') ?>

    <?php // echo $form->field($model, 'czestotliwosc_wplywu_dochodu') ?>

    <?php // echo $form->field($model, 'data_wplywu_dochodu') ?>

    <?php // echo $form->field($model, 'nazwa_zaklad_pracy') ?>

    <?php // echo $form->field($model, 'stanowisko') ?>

    <?php // echo $form->field($model, 'ulica') ?>

    <?php // echo $form->field($model, 'nr_lokalu') ?>

    <?php // echo $form->field($model, 'miejscowosc') ?>

    <?php // echo $form->field($model, 'kod_pocztowy') ?>

    <?php // echo $form->field($model, 'telefon') ?>

    <?php // echo $form->field($model, 'nr_umowy') ?>

    <?php // echo $form->field($model, 'klient_ID') ?>

    <?php // echo $form->field($model, 'data') ?>

    <?php // echo $form->field($model, 'godzina') ?>

    <?php // echo $form->field($model, 'uzytkownik') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
