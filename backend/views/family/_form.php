<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Family */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="family-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idfamily')->textInput() ?>

    <?= $form->field($model, 'spname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spbirth')->textInput() ?>

    <?= $form->field($model, 'sppleace')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spethnic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spdegree')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sppolitic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spwduty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spphone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spbasic')->textInput() ?>

    <?= $form->field($model, 'other')->textInput() ?>

    <?= $form->field($model, 'othe')->textInput() ?>

    <?= $form->field($model, 'oth')->textInput() ?>

    <?= $form->field($model, 'ot')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
