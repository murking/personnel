<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Basic */

$this->title = '新建员工基本信息';
$this->params['breadcrumbs'][] = ['label' => '员工基本信息', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="basic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
