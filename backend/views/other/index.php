<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OthermemberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Othermembers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="othermember-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Othermember', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idothermember',
            'ottitle',
            'otname',
            'otbirth',
            'otwduty',
            // 'otpolitic',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
