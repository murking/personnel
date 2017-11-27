<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Learnexperience */

$this->title = $model->basic->name;
$this->params['breadcrumbs'][] = ['label' => '学习经历', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="learnexperience-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->idlearnexperience], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->idlearnexperience], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除这条信息吗',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'basicid',
           //'idlearnexperience',
            [
                'attribute'=>'basicid',
                'label'=>'员工姓名',
                'value'=>$model->basic->name,
            ],
            'period',
            'scmajor',
            'scduty',
            'witness',


        ],
    ]) ?>

</div>
