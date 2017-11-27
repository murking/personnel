<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ContractSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '合同管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-index">

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

            'conbasic',
            [
                'attribute' => 'conbasic',
                'label' => '员工姓名',
                'value' => 'conbasic0.name'
            ],
            //'idcontract',
            'contype',
            'connumber',
            //'conbegin',
            //'conend',
            // 'conpleace',
            // 'conbook',
            // 'applydate',
            // 'insurancedate',
            // 'funddate',
            // 'departdate',


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
