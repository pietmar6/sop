<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StatusyZatrudnienia */

$this->title = 'Create Statusy Zatrudnienia';
$this->params['breadcrumbs'][] = ['label' => 'Statusy Zatrudnienias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statusy-zatrudnienia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
