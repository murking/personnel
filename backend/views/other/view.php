<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Othermember */

$this->title = $model->idothermember;
$this->params['breadcrumbs'][] = ['label' => 'Othermembers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="othermember-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idothermember], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idothermember], [
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
            'idothermember',
            'ottitle',
            'otname',
            'otbirth',
            'otwduty',
            'otpolitic',
        ],
    ]) ?>

</div>
