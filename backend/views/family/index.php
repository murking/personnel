<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FamilySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '家庭成员';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="family-index">

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

            'idfamily',
            'spname',
            'spbirth',
            'sppleace',
            'spethnic',
            // 'spdegree',
            // 'sppolitic',
            // 'spwduty',
            // 'spphone',
            // 'spbasic',

            // 'relation',
            [
              'attribute' => 'relation',
               'value'=>function($model){
                return($model->relation == 1)?['fuqin']:['fk'];
               }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
