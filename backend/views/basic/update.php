<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Basic */

$this->title = '更新: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '员工基本信息', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->idbasic]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="basic-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
