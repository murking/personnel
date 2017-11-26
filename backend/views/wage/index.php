<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\WageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wage-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wage', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idwage',
            'wagname',
            'wagbas',
            'wagpost',
            'wagdiff',
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
            // 'wagget',
            // 'wagdepart',
            // 'wagcreatedate',
            // 'wagupdatedate',
            ['attribute'=>'wagupdatedate',
                'format'=>['date','php:Y-m-d H:i:s'],

            ],
            ['class' => 'yii\grid\ActionColumn'],

        ],
    ]); ?>
</div>
