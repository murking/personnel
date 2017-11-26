<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Family */

$this->title = '更新: ' . $model->idfamily;
$this->params['breadcrumbs'][] = ['label' => '家庭成员', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idfamily, 'url' => ['view', 'id' => $model->idfamily]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="family-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
