<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Penerbit */

$this->title = 'Sunting Penerbit';
$this->params['breadcrumbs'][] = ['label' => 'Penerbit', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Sunting';
?>
<div class="penerbit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div>&nbsp;</div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
