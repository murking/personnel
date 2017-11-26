<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Basic */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '员工基本信息', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="basic-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->idbasic], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->idbasic], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idbasic',
            'name',
            'department',
            'duty',
            'idcard',
            'sex',
            'politic',
            'brithdate',
            'educationbk',
            'degree',
            'graduationdate',
            'graduationsc',
            'major',
            'jobtitle',
            'householdreg',
            'householdadd',
            'address',
            'zip',
            'phone',
            'homephone',
            'entrydate',
        ],
    ]) ?>

</div>
