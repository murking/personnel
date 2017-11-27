<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Workexps */

$this->title = '新建';
$this->params['breadcrumbs'][] = ['label' => 'Workexps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workexps-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
