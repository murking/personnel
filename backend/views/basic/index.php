<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BasicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Basics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="basic-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Basic', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idbasic',
            'name',
            'department',
            'duty',
            'idcard',
            // 'sex',
            // 'politic',
            // 'brithdate',
            // 'educationbk',
            // 'degree',
            // 'graduationdate',
            // 'graduationsc',
            // 'major',
            // 'jobtitle',
            // 'householdreg',
            // 'householdadd',
            // 'address',
            // 'zip',
            // 'phone',
            // 'homephone',
            // 'entrydate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
