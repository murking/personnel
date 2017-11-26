<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Othermember */

$this->title = 'Update Othermember: ' . $model->idothermember;
$this->params['breadcrumbs'][] = ['label' => 'Othermembers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idothermember, 'url' => ['view', 'id' => $model->idothermember]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="othermember-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
