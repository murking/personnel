<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\WorkexpsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workexps-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idworkexps') ?>

    <?= $form->field($model, 'wkperiod') ?>

    <?= $form->field($model, 'wkdepart') ?>

    <?= $form->field($model, 'wkduty') ?>

    <?= $form->field($model, 'wkwitness') ?>

    <?php // echo $form->field($model, 'basicid') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
