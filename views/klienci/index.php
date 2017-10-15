<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KlienciSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Klienci';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klienci-index">

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>        
        <?= Html::a('Dodaj nowego klienta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>
    <?=
    GridView::widget([
        'summary' => "Pokazano {begin} - {end} z {totalCount} klientów",
        'layout' => "{summary}\n{items}\n<div class='text-center'>{pager}</div>",
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'imie',
                'label' => 'Imie i Nazwisko',
                'value' => function($model) {
                    return $model->imie . ' ' . $model->nazwisko;
                },
            ],
            [
                'attribute' => 'ulica',
                'label' => 'Adres',
                'value' => function($model) {
                    return $model->ulica . ' ' . $model->nr_domu . ' ' . $model->nr_mieszkania . ' ' . $model->kod_pocztowy . ' ' . $model->miasto;
                },
            ],
            'pesel',
            'data_urodzenia',
            [
                'attribute' => 'nr_tel1',
                'label' => 'Telefon',
                'value' => function($model) {
                    return $model->nr_tel1 . ' ' . $model->nr_tel2;
                },
            ],
//            'nr_tel1',
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
    ]);
    ?>
<?php Pjax::end(); ?>
</div>
