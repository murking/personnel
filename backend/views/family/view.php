<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Family */

$this->title = $model->idfamily;
$this->params['breadcrumbs'][] = ['label' => '家庭成员', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="family-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->idfamily], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->idfamily], [
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
            'idfamily',
            'spname',
            'spbirth',
            'sppleace',
            'spethnic',
            'spdegree',
            'sppolitic',
            'spwduty',
            'spphone',
            //'spbasic',
            ['label'=>'员工姓名',
             'value'=>$model->spbasic0->name,

            ],
            'other',
            'othe',
            'oth',
            'ot',
        ],
    ]) ?>

</div>
