<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Basic;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model common\models\Family */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="family-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idfamily')->textInput() ?>

    <?= $form->field($model, 'spname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spbirth')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => ''],
        'pluginOptions' => [
            'autoclose' => true,
            'todayHighlight' => true,
            'format' => 'yyyy-mm-dd',
            'language'=>'zh'
        ]])?>

    <?= $form->field($model, 'sppleace')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spethnic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spdegree')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sppolitic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spwduty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spphone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spbasic')->dropDownList(
            Basic::find()
            ->select(['name','idbasic'])
            ->orderBy('name')
            ->indexBy('idbasic')
            ->column(),['prompt'=>'请选择员工']
    ) ?>

    <?= $form->field($model, 'relation')->radioList(['0'=>'配偶','1'=>'父亲','2'=>'母亲','3'=>'直系兄妹']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
