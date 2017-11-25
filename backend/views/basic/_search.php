<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BasicSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="basic-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idbasic') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'department') ?>

    <?= $form->field($model, 'duty') ?>

    <?= $form->field($model, 'idcard') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'politic') ?>

    <?php // echo $form->field($model, 'brithdate') ?>

    <?php // echo $form->field($model, 'educationbk') ?>

    <?php // echo $form->field($model, 'degree') ?>

    <?php // echo $form->field($model, 'graduationdate') ?>

    <?php // echo $form->field($model, 'graduationsc') ?>

    <?php // echo $form->field($model, 'major') ?>

    <?php // echo $form->field($model, 'jobtitle') ?>

    <?php // echo $form->field($model, 'householdreg') ?>

    <?php // echo $form->field($model, 'householdadd') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'zip') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'homephone') ?>

    <?php // echo $form->field($model, 'entrydate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
