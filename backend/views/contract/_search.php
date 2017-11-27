<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ContractSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contract-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idcontract') ?>

    <?= $form->field($model, 'contype') ?>

    <?= $form->field($model, 'connumber') ?>

    <?= $form->field($model, 'conbegin') ?>

    <?= $form->field($model, 'conend') ?>

    <?php // echo $form->field($model, 'conpleace') ?>

    <?php // echo $form->field($model, 'conbook') ?>

    <?php // echo $form->field($model, 'applydate') ?>

    <?php // echo $form->field($model, 'insurancedate') ?>

    <?php // echo $form->field($model, 'funddate') ?>

    <?php // echo $form->field($model, 'departdate') ?>

    <?php // echo $form->field($model, 'conbasic') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
