<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\wage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wage-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'wagname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wagbas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wagpost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wagdiff')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wagage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wagalone')->radioList(['是','否']) ?>

    <?= $form->field($model, 'wagother')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wagreward')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wagde')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wagshould')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wagpension')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wagmedical')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'waglost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wagfund')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wagup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wagtax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wagptax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wagunion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wagget')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wagdepart')->dropDownList((\common\models\department::find())
                                                    ->select(['depname','iddepartment'])
                                                    ->indexBy('iddepartment')
                                                    ->column(),
                                                    ['prompt'=>'请选择状态']);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
