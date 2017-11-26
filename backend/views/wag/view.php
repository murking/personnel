<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\wage */

$this->title = $model->idwage;
$this->params['breadcrumbs'][] = ['label' => 'Wages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wage-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idwage], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idwage], [
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
            'idwage',
            'wagname',
            'wagbas',
            'wagpost',
            'wagdiff',
            'wagage',
            'wagalone',
            'wagother',
            'wagreward',
            'wagde',
            'wagshould',
            'wagpension',
            'wagmedical',
            'waglost',
            'wagfund',
            'wagup',
            'wagtax',
            'wagptax',
            'wagunion',
            'wagget',
            'wagdepart',
            'wagcreatedate',
            'wagupdatedate',
        ],
    ]) ?>

</div>
