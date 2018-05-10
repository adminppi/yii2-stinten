<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Peminjaman */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Peminjaman', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-view">

    <h1>Detail Peminjaman</h1>

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
                'attribute' => 'id_buku',
                'format' => 'raw',
                    'value' => $model->id_buku,
            ],
    
            [
                'attribute' => 'id_anggota',
                'format' => 'raw',
                    'value' => $model->id_anggota,
            ],
    
            [
                'attribute' => 'tanggal_pinjam',
                'format' => 'raw',
                    'value' => $model->tanggal_pinjam,
            ],
    
            [
                'attribute' => 'tanggal_kembali',
                'format' => 'raw',
                    'value' => $model->tanggal_kembali,
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
        <?= Html::a('<i class="glyphicon glyphicon-list"></i> Daftar Peminjaman', ['index', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
    </p>
</div>
