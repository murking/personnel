<?php
/**
 * Created by PhpStorm.
 * User: zjh-mac
 * Date: 2017/12/8
 * Time: 下午6:40
 */


use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    <?= $form->field($model, 'imageFile')->fileInput() ?>
    <button>Submit</button>
<?php ActiveForm::end() ?>orm::end() ?>