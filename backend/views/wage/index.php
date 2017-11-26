<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models;

/* @var $this yii\web\View */
/* @var $searchModel common\models\WageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '员工工资';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wage-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idwage',
            [
                    'attribute'=>'idwage',
                'contentOptions'=>['width'=>'120px'],
            ],
            'wagname',
            'wagbas',
            //'wagpost',
            //'wagdiff',
            // 'wagage',
            // 'wagalone',
            // 'wagother',
            // 'wagreward',
            // 'wagde',
            // 'wagshould',
            // 'wagpension',
            // 'wagmedical',
            // 'waglost',
            // 'wagfund',
            // 'wagup',
            // 'wagtax',
            // 'wagptax',
            // 'wagunion',
             'wagget',
            //'wagdepart',

           [
                'attribute'=>'wagdepart',
                'value'=>'wagdepart0.depname'
            ],

            // 'wagcreatedate',
            // 'wagupdatedate',
            ['attribute'=>'wagupdatedate',
                'format'=>['date','php:Y-m-d H:i:s'],

            ],
            ['class' => 'yii\grid\ActionColumn'],

        ],
    ]); ?>
</div>
