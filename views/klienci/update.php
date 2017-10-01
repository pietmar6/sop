<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Klienci */

$this->title = 'Update Klienci: ' . $model->ID_klienta;
$this->params['breadcrumbs'][] = ['label' => 'Kliencis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_klienta, 'url' => ['view', 'id' => $model->ID_klienta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="klienci-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
