<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use common\models\Basic;
/* @var $this yii\web\View */
/* @var $model common\models\Contract */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contract-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idcontract')->textInput() ?>

    <?= $form->field($model, 'contype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'connumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conbegin')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => ''],
        'pluginOptions' => [
            'autoclose' => true,
            'todayHighlight' => true,
            'format' => 'yyyy-mm-dd',
            'language'=>'zh'
        ]] )  ?>

    <?= $form->field($model, 'conend')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => ''],
        'pluginOptions' => [
            'autoclose' => true,
            'todayHighlight' => true,
            'format' => 'yyyy-mm-dd',
            'language'=>'zh'
        ]] ) ?>

    <?= $form->field($model, 'conpleace')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conbook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'applydate')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => ''],
        'pluginOptions' => [
            'autoclose' => true,
            'todayHighlight' => true,
            'format' => 'yyyy-mm-dd',
            'language'=>'zh'
        ]] ) ?>

    <?= $form->field($model, 'insurancedate')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => ''],
        'pluginOptions' => [
            'autoclose' => true,
            'todayHighlight' => true,
            'format' => 'yyyy-mm-dd',
            'language'=>'zh'
        ]] ) ?>

    <?= $form->field($model, 'funddate')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => ''],
        'pluginOptions' => [
            'autoclose' => true,
            'todayHighlight' => true,
            'format' => 'yyyy-mm-dd',
            'language'=>'zh'
        ]] ) ?>

    <?= $form->field($model, 'departdate')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => ''],
        'pluginOptions' => [
            'autoclose' => true,
            'todayHighlight' => true,
            'format' => 'yyyy-mm-dd',
            'language'=>'zh'
        ]] ) ?>

    <?= $form->field($model, 'conbasic')->
        dropDownList(Basic::find()
        ->select(['name','idbasic'])
            ->orderBy('name')
            ->indexBy('idbasic')
            ->column(),['prompt'=>'请选择员工']
    )
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
