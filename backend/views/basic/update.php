<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Basic */

$this->title = 'Update Basic: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Basics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->idbasic]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="basic-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
