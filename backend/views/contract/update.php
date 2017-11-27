<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Contract */

$this->title = '更新: ' . $model->idcontract;
$this->params['breadcrumbs'][] = ['label' => '合同管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcontract, 'url' => ['view', 'id' => $model->idcontract]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contract-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
