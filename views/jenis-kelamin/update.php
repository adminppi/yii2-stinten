<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JenisKelamin */

$this->title = 'Sunting Jenis Kelamin';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Kelamin', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Sunting';
?>
<div class="jenis-kelamin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div>&nbsp;</div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
