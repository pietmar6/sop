<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Klienci */
/* @var $zatrudnienie app\models\Zatrudnienia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="klienci-form">

    <?php
    $form = ActiveForm::begin([
                'id' => 'dynamic-form',
                'fieldConfig' => [
                    'options' => ['class' => 'form-group col-lg-2 col-md-3 col-sm-4 col-xs-12'],
                ],
    ]);
    ?>
    <h4>Dane podstawowe</h4>
    <div class="row">
        <?= $form->field($model, 'imie')->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
        <?= $form->field($model, 'nazwisko')->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
        <?php
        echo $form->field($model, 'data_urodzenia')->widget(DatePicker::classname(), [
            'language' => 'pl',
            'removeButton' => false,
            'type' => 1,
            'readonly' => true,
            'options' => [
                'class' => 'input-sm border-radius-none',
            ],
            'pluginOptions' => [
                'format' => 'dd-mm-yyyy',
                'autoclose' => true,
                'todayHighlight' => true,
            ]
        ]);
        ?>
        <?php // $form->field($model, 'data_urodzenia')->textInput(['class' => 'input-sm border-radius-none']) ?>
        <?= $form->field($model, 'pesel')->textInput(['type' => 'number', 'minlength' => true, 'maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
        <?= $form->field($model, 'dowod')->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
        <?= $form->field($model, 'nr_tel1')->textInput(['type' => 'number', 'minlength' => true, 'maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
        <?= $form->field($model, 'nr_tel2')->textInput(['type' => 'number', 'minlength' => true, 'maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
        <?= $form->field($model, 'dyskretny')->checkbox() ?>
        <?= $form->field($model, 'oferta')->checkbox() ?>
        <?php //$form->field($model, 'plec')->textInput(['maxlength' => true]) ?>
        <?php //$form->field($model, 'stan_cywilny')->textInput() ?>
        <?php //$form->field($model, 'status_zamieszkania')->textInput()  ?>
    </div>
    <h4>Adres zamieszkania</h4>
    <div class="row">
        <?= $form->field($model, 'ulica')->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
        <?= $form->field($model, 'nr_domu')->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
        <?= $form->field($model, 'nr_mieszkania')->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
        <?=
        $form->field($model, 'kod_pocztowy')->widget(\yii\widgets\MaskedInput::className(), [
            'mask' => '99-999',
            'clientOptions' => [
//                'removeMaskOnSubmit' => true,
                'autoUnmask' => true,
                'clearMaskOnLostFocus' => false,
            ],
            'options' => [
                'class' => 'input-sm border-radius-none',
                'minlength' => true,
                'maxlength' => true,
            ],
        ])
        ?>
        <?= $form->field($model, 'miasto')->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
    </div>
    <h4>Adres zameldowania</h4>
    <?php
    if ($model->isNewRecord) {
        $model->adres_zameldowania_inny = 1;
    }
    ?>
    <div class="row">
        <?=
        $form->field($model, 'adres_zameldowania_inny', ['options' => ['class' => 'form-group col-xs-12']
        ])->checkbox()
        ?>
    </div>
    <?php
    if ($model->adres_zameldowania_inny) {
        echo '<div class="row adres-zameldowania-taki-sam hide">';
    } else {
        echo '<div class="row adres-zameldowania-taki-sam">';
    }
    ?>
    <?= $form->field($model, 'ulica_zameldowania')->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
    <?= $form->field($model, 'nr_domu_zameldowania')->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
    <?= $form->field($model, 'nr_mieszkania_zameldowania')->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
    <?=
    $form->field($model, 'kod_pocztowy_zameldowania')->widget(\yii\widgets\MaskedInput::className(), [
            'mask' => '99-999',
            'clientOptions' => [
//                'removeMaskOnSubmit' => true,
                'autoUnmask' => true,
                'clearMaskOnLostFocus' => false,
            ],
            'options' => [
                'class' => 'input-sm border-radius-none',
                'minlength' => true,
                'maxlength' => true,
            ],
        ])
    ?>
    <?= $form->field($model, 'miasto_zameldowania')->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
</div>
<h4>Osoba kontaktowa</h4>
<div class="row">
    <?= $form->field($model, 'imie_osoba_kontakt')->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
    <?= $form->field($model, 'nazwisko_osoba_kontakt')->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
    <?= $form->field($model, 'tel_osoba_kontakt')->textInput(['type' => 'number', 'minlength' => true, 'maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
    <?= $form->field($model, 'pokrewienstwo_osoba_kontakt')->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
</div><div class="row">
    <?= $form->field($model, 'ulica_osoba_kontakt')->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
    <?= $form->field($model, 'nr_domu_osoba_kontakt')->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
    <?= $form->field($model, 'nr_mieszkania_osoba_kontakt')->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
    <?=
        $form->field($model, 'kod_pocztowy_osoba_kontakt')->widget(\yii\widgets\MaskedInput::className(), [
            'mask' => '99-999',
            'clientOptions' => [
//                'removeMaskOnSubmit' => true,
                'autoUnmask' => true,
                'clearMaskOnLostFocus' => false,
            ],
            'options' => [
                'class' => 'input-sm border-radius-none',
                'minlength' => true,
                'maxlength' => true,
            ],
        ])         
    ?>
    <?= $form->field($model, 'miasto_osoba_kontakt')->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
</div>

<!--*************************************************************-->
<?php
DynamicFormWidget::begin([
    'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
    'widgetBody' => '.container-items', // required: css class selector
    'widgetItem' => '.item', // required: css class
    'limit' => 10, // the maximum times, an element can be added (default 999)
    'min' => 0, // 0 or 1 (default 1)
    'insertButton' => '.add-item', // css class
    'deleteButton' => '.remove-item', // css class
    'model' => $zatrudnienie[0],
    'formId' => 'dynamic-form',
    'formFields' => [
        'status_zatrudnienia_id',
        'rodzaj_umowy_id',
        'zatrudnienie_od',
        'zatrudnienie_do',
        'dochod_netto',
        'czestotliwosc_wplywu_dochodu',
        'data_wplywu_dochodu',
        'nazwa_zaklad_pracy',
        'stanowisko',
        'ulica',
        'nr_lokalu',
        'miejscowosc',
        'kod_pocztowy',
        'telefon',
        'nr_umowy',
    ],
]);
?>
<h4>Zatrudnienie</h4><button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Dodaj zatrudnienie</button>
<div class="row">

    <div class="panel-body">
        <div class="container-items">
            <?php foreach ($zatrudnienie as $index => $praca): ?>
                <div class="item panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left"> Zatrudnienie <?= ($index + 1) ?></h3>
                        <div class="pull-right">
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                        // necessary for update action.
                        if (!$praca->isNewRecord) {
                            echo Html::activeHiddenInput($praca, "[{$index}]id");
                        }
                        ?>
                        <?= $form->field($praca, "[{$index}]status_zatrudnienia_id")->dropDownList(yii\helpers\ArrayHelper::map(\app\models\StatusyZatrudnienia::find()->all(), 'ID_statusu_zatrudnienia', 'status_zatrudnienia'), ['class' => 'form-control input-sm border-radius-none']) ?>
                        <?= $form->field($praca, "[{$index}]rodzaj_umowy_id")->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
                        <?= $form->field($praca, "[{$index}]zatrudnienie_od")->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
                        <?= $form->field($praca, "[{$index}]zatrudnienie_do")->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
                        <?= $form->field($praca, "[{$index}]dochod_netto")->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
                        <?= $form->field($praca, "[{$index}]czestotliwosc_wplywu_dochodu")->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
                        <?= $form->field($praca, "[{$index}]data_wplywu_dochodu")->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
                        <?= $form->field($praca, "[{$index}]nazwa_zaklad_pracy")->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
                        <?= $form->field($praca, "[{$index}]stanowisko")->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
                        <?= $form->field($praca, "[{$index}]ulica")->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
                        <?= $form->field($praca, "[{$index}]nr_lokalu")->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
                        <?= $form->field($praca, "[{$index}]miejscowosc")->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
                        <?= $form->field($praca, "[{$index}]kod_pocztowy")->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
                        <?= $form->field($praca, "[{$index}]telefon")->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
                        <?= $form->field($praca, "[{$index}]nr_umowy")->textInput(['maxlength' => true, 'class' => 'input-sm border-radius-none']) ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php DynamicFormWidget::end(); ?>
<!--*************************************************************-->
<?php //$form->field($model, 'ktora_umowa')->textInput()    ?>
<?php //$form->field($model, 'ktora_umowa_start_programu')->textInput()    ?>
<?php //$form->field($model, 'data')->textInput() ?>
<?php //$form->field($model, 'godzina')->textInput() ?>
<?php //$form->field($model, 'uzytkownik')->textInput() ?>
<?php //$form->field($model, 'czarna_lista')->textInput() ?>
<?php //$form->field($model, 'ru')->textInput() ?>
<?php //$form->field($model, 'upadlosc')->textInput() ?>
<?php //$form->field($model, 'data_upadlosc')->textInput()   ?>
<?php //$form->field($model, 'sygnatura_upadlosc')->textInput(['maxlength' => true])    ?>
<h4>Dodatkowe informacje</h4>
<div class="row">
    <?= $form->field($model, 'uwagi', ['options' => ['class' => 'form-group col-xs-12']])->textarea(['rows' => 6]) ?>
</div>
<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Dodaj nowego klienta' : 'Zaktualizuj dane klienta', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>
