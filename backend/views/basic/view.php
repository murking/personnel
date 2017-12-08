<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Basic */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '员工基本信息', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="basic-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->idbasic], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->idbasic], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定删除这条信息吗？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idbasic',
            'name',
            'department',
            'duty',
            'idcard',
            'sex',
            'politic',
            //'brithdate',
            [
                'attribute'=>'brithdate',
                'format'=>['date','php:Y-m-d'],
            ],
            'educationbk',
            'degree',
            //'graduationdate',
            [
                'attribute'=>'graduationdate',
                'format'=>['date','php:Y-m-d'],
            ],
            'graduationsc',
            'major',
            'jobtitle',
            'householdreg',
            'householdadd',
            'address',
            'zip',
            'phone',
            'homephone',
            'entrydate',

        ],
    ]) ?>
    <p>家庭成员信息</p>

    <?php

        foreach ($model->families as $v)
        {
            ?>
            <?=
            DetailView::widget([
                'model' => $v,
                'attributes' => [
                    'spname',
                    //'spbirth',
                    [
                        'attribute'=>'spbirth',
                        'format'=>['date','php:Y-m-d'],
                    ],
                    'sppleace',
                    'spethnic',
                    'spdegree',
                    'sppolitic',
                    'spwduty',
                    'spphone',

                    //'relation',
                    ['label'=>'关系',
                        'value'=>function($v){
                            switch ($v->relation){
                                case '0':
                                    return "配偶";
                                case '1':
                                    return "父亲";
                                case '2':
                                    return "母亲";
                                case '3':
                                    return "直系兄妹";
                            }
                        }
                    ]
                ],
            ])
            ?>
    <?php
        }
    ?>
    <p>
        合同信息
    </p>
    <?php

    foreach ($model->contracts as $v)
    {
        ?>
        <?=
        DetailView::widget([
            'model' => $v,
            'attributes' => [
                'idcontract',
                'contype',
                'connumber',
                'conbegin',
                'conend',
                'conpleace',
                'conbook',
                'applydate',
                'insurancedate',
                'funddate',
                'departdate',
                'conbasic',
            ],
        ])
        ?>
        <?php
    }
    ?>
    <!-- 学习经历部分 -->
    <p>
        学习经历
    </p>
    <?php
    foreach ($model->learnexperiences as $v)
    {
        ?>
        <?=
        DetailView::widget([
            'model' => $v,
            'attributes' => [
                'basicid',
                'period',
                'scmajor',
                'scduty',
                'witness',
            ],
        ])
        ?>
        <?php
    }
    ?>

    <!-- 工作经历部分 -->
    <p>
        工作经历
    </p>
    <?php
    foreach ($model->workexps as $v)
    {
        ?>
        <?=
        DetailView::widget([
            'model' => $v,
            'attributes' => [
                'wkperiod',
                'wkdepart',
                'wkduty',
                'wkwitness'
            ],
        ])
        ?>
        <?php
    }
    ?>
    <p>
        学习奖惩
    </p>
    <!--  -->
    <?php
    foreach ($model->workpers as $v)
    {
        ?>
        <?=
        DetailView::widget([
            'model' => $v,
            'attributes' => [
                'perdate',
                'perstatus',
                'perlevel',
                'percom',
            ],
        ])
        ?>
        <?php
    }
    ?>
</div>
