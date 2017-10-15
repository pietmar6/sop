<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StatusyZatrudnieniaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Statusy Zatrudnienias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statusy-zatrudnienia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Statusy Zatrudnienia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_statusu_zatrudnienia',
            'status_zatrudnienia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
