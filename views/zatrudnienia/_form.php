<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Zatrudnienia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zatrudnienia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status_zatrudnienia_id')->textInput() ?>

    <?= $form->field($model, 'rodzaj_umowy_id')->textInput() ?>

    <?= $form->field($model, 'zatrudnienie_od')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zatrudnienie_do')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dochod_netto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'czestotliwosc_wplywu_dochodu')->textInput() ?>

    <?= $form->field($model, 'data_wplywu_dochodu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nazwa_zaklad_pracy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stanowisko')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ulica')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nr_lokalu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'miejscowosc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kod_pocztowy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nr_umowy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'klient_ID')->textInput() ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <?= $form->field($model, 'godzina')->textInput() ?>

    <?= $form->field($model, 'uzytkownik')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
