<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Peminjaman */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="peminjaman-form">

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

    <?= $form->field($model, 'id_buku')->dropDownList(\app\models\Buku::getList(), ['prompt' => '- Pilih -']); ?>

    <?= $form->field($model, 'id_anggota')->dropDownList(\app\models\Anggota::getList(), ['prompt' => '- Pilih -']); ?>

    <?= $form->field($model, 'tanggal_pinjam')->widget(\yii\jui\DatePicker::className(), [
            'dateFormat'=>'yyyy-MM-dd',
            'options' => [
            'class' => 'form-control'
        ]
    ]); ?>

    <?= $form->field($model, 'tanggal_kembali')->widget(\yii\jui\DatePicker::className(), [
            'dateFormat'=>'yyyy-MM-dd',
            'options' => [
            'class' => 'form-control'
        ]
    ]); ?>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-2">
                <?= Html::submitButton('<i class="glyphicon glyphicon-save"></i> Simpan', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
