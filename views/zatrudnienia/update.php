<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Zatrudnienia */

$this->title = 'Update Zatrudnienia: ' . $model->ID_zatrudnienia;
$this->params['breadcrumbs'][] = ['label' => 'Zatrudnienias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_zatrudnienia, 'url' => ['view', 'id' => $model->ID_zatrudnienia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="zatrudnienia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
