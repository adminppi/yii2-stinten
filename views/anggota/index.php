<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnggotaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Anggota';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anggota-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Tambah Anggota', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],



            [
                'attribute' => 'id',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data) {
                    return $data->id;
                }
            ],
        
            [
                'attribute' => 'nama',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data) {
                    return $data->nama;
                }
            ],
        
            [
                'attribute' => 'alamat',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data) {
                    return $data->alamat;
                }
            ],
        
            [
                'attribute' => 'tempat_lahir',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data) {
                    return $data->tempat_lahir;
                }
            ],
        
            [
                'attribute' => 'tanggal_lahir',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data) {
                    return $data->tanggal_lahir;
                }
            ],
        
            /*
            [
                'attribute' => 'telepon',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data) {
                    return $data->telepon;
                }
            ],
            */
        
            /*
            [
                'attribute' => 'email',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data) {
                    return $data->email;
                }
            ],
            */
        
            /*
            [
                'attribute' => 'id_jenis_kelamin',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data) {
                    return $data->id_jenis_kelamin;
                }
            ],
            */
        
            /*
            [
                'attribute' => 'id_pendidikan',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data) {
                    return $data->id_pendidikan;
                }
            ],
            */
        
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
