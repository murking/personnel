<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Workexps */

$this->title = $model->basic->name;
$this->params['breadcrumbs'][] = ['label' => '工作经历', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workexps-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->idworkexps], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->idworkexps], [
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
            //'idworkexps',
            'basicid',
            [
              'attribute'=>'basicid',
              'label'=>'员工姓名',
              'value'=> $model->basic->name,
            ],
            'wkperiod',
            'wkdepart',
            'wkduty',
            'wkwitness',

        ],
    ]) ?>

</div>
