<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Penulis */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Penulis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penulis-view">

    <h1>Detail Penulis</h1>

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [

            [
                'attribute' => 'id',
                'format' => 'raw',
                    'value' => $model->id,
            ],
    
            [
                'attribute' => 'nama',
                'format' => 'raw',
                    'value' => $model->nama,
            ],
    
            [
                'attribute' => 'id_jenis_kelamin',
                'format' => 'raw',
                    'value' => $model->id_jenis_kelamin,
            ],
    
            [
                'attribute' => 'id_pendidikan',
                'format' => 'raw',
                    'value' => $model->id_pendidikan,
            ],
    
            [
                'attribute' => 'alamat',
                'format' => 'raw',
                    'value' => $model->alamat,
            ],
    
            [
                'attribute' => 'telepon',
                'format' => 'raw',
                    'value' => $model->telepon,
            ],
    
            [
                'attribute' => 'email',
                'format' => 'raw',
                    'value' => $model->email,
            ],
    
        ],
    ]) ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-pencil"></i> Sunting', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="glyphicon glyphicon-trash"></i> Hapus', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Yakin akan menghapus data?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('<i class="glyphicon glyphicon-list"></i> Daftar Penulis', ['index', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
    </p>
</div>
