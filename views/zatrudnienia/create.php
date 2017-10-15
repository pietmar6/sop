<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Zatrudnienia */

$this->title = 'Create Zatrudnienia';
$this->params['breadcrumbs'][] = ['label' => 'Zatrudnienias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zatrudnienia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
