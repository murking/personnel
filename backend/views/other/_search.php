<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OthermemberSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="othermember-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idothermember') ?>

    <?= $form->field($model, 'ottitle') ?>

    <?= $form->field($model, 'otname') ?>

    <?= $form->field($model, 'otbirth') ?>

    <?= $form->field($model, 'otwduty') ?>

    <?php // echo $form->field($model, 'otpolitic') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
