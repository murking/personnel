<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BasicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '员工基本信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="basic-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新建', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?= Html::a('Excel导出', ['export'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Excel导入', ['import'], ['class' => 'btn btn-success']) ?>

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
