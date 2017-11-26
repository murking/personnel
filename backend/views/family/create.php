<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Family */

$this->title = '新建家庭成员';
$this->params['breadcrumbs'][] = ['label' => '家庭成员', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="family-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
