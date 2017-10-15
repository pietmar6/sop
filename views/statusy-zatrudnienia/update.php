<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StatusyZatrudnienia */

$this->title = 'Update Statusy Zatrudnienia: ' . $model->ID_statusu_zatrudnienia;
$this->params['breadcrumbs'][] = ['label' => 'Statusy Zatrudnienias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_statusu_zatrudnienia, 'url' => ['view', 'id' => $model->ID_statusu_zatrudnienia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="statusy-zatrudnienia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
