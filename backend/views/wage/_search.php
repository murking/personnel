<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\WageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wage-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idwage') ?>

    <?= $form->field($model, 'wagname') ?>

    <?= $form->field($model, 'wagbas') ?>

    <?= $form->field($model, 'wagpost') ?>

    <?= $form->field($model, 'wagdiff') ?>

    <?php // echo $form->field($model, 'wagage') ?>

    <?php // echo $form->field($model, 'wagalone') ?>

    <?php // echo $form->field($model, 'wagother') ?>

    <?php // echo $form->field($model, 'wagreward') ?>

    <?php // echo $form->field($model, 'wagde') ?>

    <?php // echo $form->field($model, 'wagshould') ?>

    <?php // echo $form->field($model, 'wagpension') ?>

    <?php // echo $form->field($model, 'wagmedical') ?>

    <?php // echo $form->field($model, 'waglost') ?>

    <?php // echo $form->field($model, 'wagfund') ?>

    <?php // echo $form->field($model, 'wagup') ?>

    <?php // echo $form->field($model, 'wagtax') ?>

    <?php // echo $form->field($model, 'wagptax') ?>

    <?php // echo $form->field($model, 'wagunion') ?>

    <?php // echo $form->field($model, 'wagget') ?>

    <?php // echo $form->field($model, 'wagdepart') ?>

    <?php // echo $form->field($model, 'wagcreatedate') ?>

    <?php // echo $form->field($model, 'wagupdatedate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
