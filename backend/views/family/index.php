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

            //'idfamily',
            ['attribute' => 'spbasic',
                'label' => '员工id',
            ],
            ['attribute' => 'spbasic',
                'label' => '员工姓名',
                'value' => 'spbasic0.name',
                ],
            'spname',
            //'spbirth',
            ['attribute' => 'spbirth',
                'format' => ['date','php: Y-m-d']
            ],
            'sppleace',
            'spethnic',
            // 'spdegree',
            // 'sppolitic',
            // 'spwduty',
            // 'spphone',
            // 'spbasic',

             'relation',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
