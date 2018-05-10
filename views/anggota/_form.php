<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Anggota */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="anggota-form">

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

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->widget(\yii\jui\DatePicker::className(), [
            'dateFormat'=>'yyyy-MM-dd',
            'options' => [
            'class' => 'form-control'
        ]
    ]); ?>

    <?= $form->field($model, 'telepon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_jenis_kelamin')->dropDownList(\app\models\JenisKelamin::getList(), ['prompt' => '- Pilih -']); ?>

    <?= $form->field($model, 'id_pendidikan')->dropDownList(\app\models\Pendidikan::getList(), ['prompt' => '- Pilih -']); ?>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-2">
                <?= Html::submitButton('<i class="glyphicon glyphicon-save"></i> Simpan', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
