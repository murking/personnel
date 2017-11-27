<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\WorkperSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workper-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idper') ?>

    <?= $form->field($model, 'perdate') ?>

    <?= $form->field($model, 'perstatus') ?>

    <?= $form->field($model, 'perlevel') ?>

    <?= $form->field($model, 'percom') ?>

    <?php // echo $form->field($model, 'peridbasic') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
