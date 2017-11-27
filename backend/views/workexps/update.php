<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Workexps */

$this->title = $model->basic->name;
$this->params['breadcrumbs'][] = ['label' => '工作经历', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->basic->name, 'url' => ['view', 'id' => $model->idworkexps]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="workexps-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
