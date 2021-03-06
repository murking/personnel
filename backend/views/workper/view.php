<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Workper */

$this->title = $model->idper;
$this->params['breadcrumbs'][] = ['label' => 'Workpers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workper-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['更新', 'id' => $model->idper], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['删除', 'id' => $model->idper], [
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
            'idper',
            'perdate',
            'perstatus',
            'perlevel',
            'percom',
            'peridbasic',
        ],
    ]) ?>

</div>
