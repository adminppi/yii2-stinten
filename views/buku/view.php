<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Buku */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Buku', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-view">

    <h1>Detail Buku</h1>

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
                'attribute' => 'tahun_terbit',
                'format' => 'raw',
                    'value' => $model->tahun_terbit,
            ],
    
            [
                'attribute' => 'id_penulis',
                'format' => 'raw',
                    'value' => $model->id_penulis,
            ],
    
            [
                'attribute' => 'id_penerbit',
                'format' => 'raw',
                    'value' => $model->id_penerbit,
            ],
    
            [
                'attribute' => 'id_kategori',
                'format' => 'raw',
                    'value' => $model->id_kategori,
            ],
    
            [
                'attribute' => 'sinopsis',
                'format' => 'raw',
                    'value' => $model->sinopsis,
            ],
    
            [
                'attribute' => 'stok',
                'format' => 'raw',
                    'value' => $model->stok,
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
        <?= Html::a('<i class="glyphicon glyphicon-list"></i> Daftar Buku', ['index', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
    </p>
</div>
