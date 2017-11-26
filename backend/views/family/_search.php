<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FamilySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="family-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idfamily') ?>

    <?= $form->field($model, 'spname') ?>

    <?= $form->field($model, 'spbirth') ?>

    <?= $form->field($model, 'sppleace') ?>

    <?= $form->field($model, 'spethnic') ?>

    <?php // echo $form->field($model, 'spdegree') ?>

    <?php // echo $form->field($model, 'sppolitic') ?>

    <?php // echo $form->field($model, 'spwduty') ?>

    <?php // echo $form->field($model, 'spphone') ?>

    <?php // echo $form->field($model, 'spbasic') ?>

    <?php // echo $form->field($model, 'other') ?>

    <?php // echo $form->field($model, 'othe') ?>

    <?php // echo $form->field($model, 'oth') ?>

    <?php // echo $form->field($model, 'ot') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
