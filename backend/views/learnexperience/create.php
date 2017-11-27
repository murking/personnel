<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Learnexperience */

$this->title = '新建';
$this->params['breadcrumbs'][] = ['label' => '学习经历', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="learnexperience-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
