<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Workper */

$this->title = '更新: ' . $model->peridbasic0->name;
$this->params['breadcrumbs'][] = ['label' => '工作业绩', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->peridbasic0->name, 'url' => ['view', 'id' => $model->idper]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="workper-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
