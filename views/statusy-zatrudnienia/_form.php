<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StatusyZatrudnienia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="statusy-zatrudnienia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status_zatrudnienia')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
