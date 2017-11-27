<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Workper */

$this->title = '新建';
$this->params['breadcrumbs'][] = ['label' => '工作业绩', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workper-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
