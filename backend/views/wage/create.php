<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\wage */

$this->title = 'Create Wage';
$this->params['breadcrumbs'][] = ['label' => 'Wages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
