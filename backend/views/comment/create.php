<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Comment */

$this->title = '新建工资';
$this->params['breadcrumbs'][] = ['label' => '工资管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
