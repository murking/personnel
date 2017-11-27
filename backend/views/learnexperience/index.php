<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LearnexperienceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '学习经历';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="learnexperience-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新建', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idlearnexperience',
            'basicid',
            [
              'attribute'=>'basicid',
              'label'=>'员工姓名',
              'value'=>'basic.name',
            ],
            'period',
            'scmajor',
            'scduty',
            'witness',


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
