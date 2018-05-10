<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PenulisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penulis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penulis-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Tambah Penulis', ['create'], ['class' => 'btn btn-success']) ?>
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
                'attribute' => 'id_jenis_kelamin',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data) {
                    return $data->id_jenis_kelamin;
                }
            ],
        
            [
                'attribute' => 'id_pendidikan',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data) {
                    return $data->id_pendidikan;
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
        
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
