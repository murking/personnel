<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Basic;
/* @var $this yii\web\View */
/* @var $model common\models\Workper */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workper-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'perdate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perstatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perlevel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'percom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'peridbasic')->dropDownList(
        Basic::find()
            ->select(['name','idbasic'])
            ->orderBy('name')
            ->indexBy('idbasic')
            ->column(),['prompt'=>'请选择员工']
    )?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
