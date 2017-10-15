<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Klienci */

$this->title = 'Nowy Klient';
$this->params['breadcrumbs'][] = ['label' => 'Klienci', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klienci-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'zatrudnienie' => $zatrudnienie,
    ]) ?>

</div>
