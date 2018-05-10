<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Buku */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="buku-form">

    <?php $form = ActiveForm::begin([
        'layout'=>'horizontal',
        'fieldConfig' => [
            'horizontalCssClasses' => [
                'label' => 'col-sm-2',
                'wrapper' => 'col-sm-4',
                'error' => '',
                'hint' => '',
            ],
        ]
    ]); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun_terbit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_penulis')->dropDownList(\app\models\Penulis::getList(), ['prompt' => '- Pilih -']); ?>

    <?= $form->field($model, 'id_penerbit')->dropDownList(\app\models\Penerbit::getList(), ['prompt' => '- Pilih -']); ?>

    <?= $form->field($model, 'id_kategori')->dropDownList(\app\models\Kategori::getList(), ['prompt' => '- Pilih -']); ?>

    <?= $form->field($model, 'sinopsis')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'stok')->textInput() ?>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-2">
                <?= Html::submitButton('<i class="glyphicon glyphicon-save"></i> Simpan', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
