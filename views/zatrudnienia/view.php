<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Zatrudnienia */

$this->title = $model->ID_zatrudnienia;
$this->params['breadcrumbs'][] = ['label' => 'Zatrudnienias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zatrudnienia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_zatrudnienia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_zatrudnienia], [
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
            'ID_zatrudnienia',
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
            'klient_ID',
            'data',
            'godzina',
            'uzytkownik',
        ],
    ]) ?>

</div>
