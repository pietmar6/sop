<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ZatrudnieniaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Zatrudnienias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zatrudnienia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Zatrudnienia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_zatrudnienia',
            'status_zatrudnienia_id',
            'rodzaj_umowy_id',
            'zatrudnienie_od',
            'zatrudnienie_do',
            // 'dochod_netto',
            // 'czestotliwosc_wplywu_dochodu',
            // 'data_wplywu_dochodu',
            // 'nazwa_zaklad_pracy',
            // 'stanowisko',
            // 'ulica',
            // 'nr_lokalu',
            // 'miejscowosc',
            // 'kod_pocztowy',
            // 'telefon',
            // 'nr_umowy',
            // 'klient_ID',
            // 'data',
            // 'godzina',
            // 'uzytkownik',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
