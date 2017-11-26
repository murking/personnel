<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Othermember */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="othermember-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idothermember')->textInput() ?>

    <?= $form->field($model, 'ottitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'otname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'otbirth')->textInput() ?>

    <?= $form->field($model, 'otwduty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'otpolitic')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
