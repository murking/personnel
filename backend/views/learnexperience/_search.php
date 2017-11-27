<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LearnexperienceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="learnexperience-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idlearnexperience') ?>

    <?= $form->field($model, 'period') ?>

    <?= $form->field($model, 'scmajor') ?>

    <?= $form->field($model, 'scduty') ?>

    <?= $form->field($model, 'witness') ?>

    <?php // echo $form->field($model, 'basicid') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
