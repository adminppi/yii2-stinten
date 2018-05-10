<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JenisKelamin */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="jenis-kelamin-form">

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

    <div class="form-group">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-2">
                <?= Html::submitButton('<i class="glyphicon glyphicon-save"></i> Simpan', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
