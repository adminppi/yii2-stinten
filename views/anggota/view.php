<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Anggota */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Anggota', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anggota-view">

    <h1>Detail Anggota</h1>

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
                'attribute' => 'alamat',
                'format' => 'raw',
                    'value' => $model->alamat,
            ],
    
            [
                'attribute' => 'tempat_lahir',
                'format' => 'raw',
                    'value' => $model->tempat_lahir,
            ],
    
            [
                'attribute' => 'tanggal_lahir',
                'format' => 'raw',
                    'value' => $model->tanggal_lahir,
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
        <?= Html::a('<i class="glyphicon glyphicon-list"></i> Daftar Anggota', ['index', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
    </p>
</div>
