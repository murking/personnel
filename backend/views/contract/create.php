<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Contract */

$this->title = '新建';
$this->params['breadcrumbs'][] = ['label' => '合同管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
