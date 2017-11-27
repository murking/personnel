<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Department */

$this->title = $model->depname;
$this->params['breadcrumbs'][] = ['label' => '部门信息', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->iddepartment], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->iddepartment], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定删除这条信息吗？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'iddepartment',
            'depname',
            'depup',
            'depshort',
            'depmanager',
        ],
    ]) ?>

</div>
