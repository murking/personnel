<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\WorkperSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Workpers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workper-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Workper', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idper',
            'perdate',
            'perstatus',
            'perlevel',
            'percom',
            // 'peridbasic',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
