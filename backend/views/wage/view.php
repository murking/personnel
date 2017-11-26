<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\wage */

$this->title = $model->wagname;
$this->params['breadcrumbs'][] = ['label' => '员工工资表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wage-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->idwage], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->idwage], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定删除者条记录吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idwage',
            'wagname',
            'wagbas',
            'wagpost',
            'wagdiff',
            'wagage',
           // 'wagalone',
            [
              'label'=>'独子',
              'value'=>function($model)
                 {
                    switch($model->wagalone)
                    {
                        case '0':
                            return '是';
                        case '1':
                            return '否';
                    }

                 }
            ],
            'wagother',
            'wagreward',
            'wagde',
            'wagshould',
            'wagpension',
            'wagmedical',
            'waglost',
            'wagfund',
            'wagup',
            'wagtax',
            'wagptax',
            'wagunion',
            'wagget',
            //'wagdepart',
            [
                'attribute'=>'wagdepart',
                'value'=>$model->wagdepart0->depname,
            ],
            //'wagcreatedate',
        [
            'attribute'=>'wagcreatedate',
            'value'=>date('Y-m-d H：i：s',$model->wagcreatedate)
        ],
            //'wagupdatedate',
            [
                'attribute'=>'wagupdatedate',
                'value'=>date('Y-m-d H：i：s',$model->wagupdatedate)
            ],

        ],
    ]) ?>

</div>
