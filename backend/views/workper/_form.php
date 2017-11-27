<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Workper */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workper-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idper')->textInput() ?>

    <?= $form->field($model, 'perdate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perstatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perlevel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'percom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'peridbasic')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
