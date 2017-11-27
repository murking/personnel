<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Workexps */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workexps-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idworkexps')->textInput() ?>

    <?= $form->field($model, 'basicid')->textInput() ?>

    <?= $form->field($model, 'wkperiod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wkdepart')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wkduty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wkwitness')->textInput(['maxlength' => true]) ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新建' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
