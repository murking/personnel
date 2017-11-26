<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Othermember */

$this->title = 'Create Othermember';
$this->params['breadcrumbs'][] = ['label' => 'Othermembers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="othermember-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
