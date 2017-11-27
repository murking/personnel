<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Workper */

$this->title = 'Update Workper: ' . $model->idper;
$this->params['breadcrumbs'][] = ['label' => 'Workpers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idper, 'url' => ['view', 'id' => $model->idper]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="workper-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
