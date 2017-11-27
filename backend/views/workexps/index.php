<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\WorkexpsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '工作经历';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workexps-index">

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

            //'idworkexps',
            'basicid',
            [
                'attribute'=>'basicid',
                'label'=>'员工姓名',
                'value'=>'basic.name',
            ],
            'wkperiod',
            'wkdepart',
            'wkduty',
            'wkwitness',


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
