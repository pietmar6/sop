<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KlienciSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="klienci-search">
    <div class="row">
        <div class="col-xs-12">
            <h3>Znajdź klienta:</h3>
        </div>
    </div>
    <div class="row">
        <?php
        $form = ActiveForm::begin([
                    'action' => ['index'],
                    'method' => 'get',
                    'fieldConfig' => [
                        'template' => "<div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-12 padding-bottom-15\">{input}</div>",
                        'options' => [
                            'tag' => false,
                        ],
                    ],
        ]);
        ?>
        <?= $form->field($model, 'imie')->textInput(['placeholder' => 'Imie', 'class' => 'form-control input-sm border-radius-none'])->label(false) ?>
        <?= $form->field($model, 'nazwisko')->textInput(['placeholder' => 'Nazwisko', 'class' => 'form-control input-sm border-radius-none'])->label(false) ?>
        <?= $form->field($model, 'pesel')->textInput(['placeholder' => 'Pesel', 'class' => 'form-control input-sm border-radius-none'])->label(false) ?>
        <?= $form->field($model, 'data_urodzenia')->textInput(['placeholder' => 'Data urodzenia', 'class' => 'form-control input-sm border-radius-none'])->label(false) ?>
        <?= $form->field($model, 'nr_tel1')->textInput(['placeholder' => 'Nr telefonu', 'class' => 'form-control input-sm border-radius-none'])->label(false) ?>
        <?= $form->field($model, 'ulica')->textInput(['placeholder' => 'Ulica', 'class' => 'form-control input-sm border-radius-none'])->label(false) ?>
        <?= $form->field($model, 'nr_domu')->textInput(['placeholder' => 'Nr domu', 'class' => 'form-control input-sm border-radius-none'])->label(false) ?>
        <?= $form->field($model, 'nr_mieszkania')->textInput(['placeholder' => 'Nr mieszkania', 'class' => 'form-control input-sm border-radius-none'])->label(false) ?>
        <?= $form->field($model, 'kod_pocztowy')->textInput(['placeholder' => 'Kod pocztowy', 'class' => 'form-control input-sm border-radius-none'])->label(false) ?>
        <?= $form->field($model, 'miasto')->textInput(['placeholder' => 'Miasto', 'class' => 'form-control input-sm border-radius-none'])->label(false) ?>

        <div class="col-xs-12">
            <div class="row">
                <div class="col-lg-2 col-lg-offset-8 col-md-3 col-md-offset-6 col-sm-4 col-sm-offset-4 col-xs-12">
                    <div class="form-group">
                        <?= Html::submitButton('Search', ['class' => 'btn btn-primary form-control border-radius-none']) ?>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <?= Html::input('reset', 'reset', 'Reset', ['class' => 'btn btn-default form-control border-radius-none']) ?>
                    </div>
                </div>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
