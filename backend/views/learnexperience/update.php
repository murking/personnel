<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Learnexperience */

$this->title = $model->basic->name ;
$this->params['breadcrumbs'][] = ['label' => '学习经历', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->basic->name, 'url' => ['view', 'id' => $model->idlearnexperience]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="learnexperience-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
