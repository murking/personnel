<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Basic;
/* @var $this yii\web\View */
/* @var $model common\models\Learnexperience */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="learnexperience-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'basicid')->dropDownList(Basic::find()
        ->select(['name','idbasic'])
        ->orderBy('name')
        ->indexBy('idbasic')
        ->column(),['prompt'=>'请选择员工']
    )
    ?>
    <?= $form->field($model, 'period')->textInput() ?>

    <?= $form->field($model, 'scmajor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scduty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'witness')->textInput(['maxlength' => true]) ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新建' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
