<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Klienci */

$this->title = 'Create Klienci';
$this->params['breadcrumbs'][] = ['label' => 'Kliencis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klienci-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
