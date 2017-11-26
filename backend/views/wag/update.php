<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\wage */

$this->title = 'Update Wage: ' . $model->idwage;
$this->params['breadcrumbs'][] = ['label' => 'Wages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idwage, 'url' => ['view', 'id' => $model->idwage]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
