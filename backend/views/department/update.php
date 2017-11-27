<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Department */

$this->title = $model->depname;
$this->params['breadcrumbs'][] = ['label' => '部门信息', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->depname, 'url' => ['view', 'id' => $model->iddepartment]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="department-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
