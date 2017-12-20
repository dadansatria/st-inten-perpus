<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Peminjaman */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="box box-primary peminjaman-form">
    <div class="box-header with-border">
        <h3 class="box-title">Form peminjaman</h3>
    </div>
    <div class="box-body">
    <?php $form = ActiveForm::begin([            
                        'layout'=>'horizontal',
                        'fieldConfig' => [
                        'horizontalCssClasses' => [
                            'label' => 'col-sm-3',
                            'wrapper' => 'col-sm-4',
                            'error' => '',
                            'hint' => '',
                    ],
                    ]]); ?>

    <?= $form->field($model, 'id_buku')->textInput() ?>

    <?= $form->field($model, 'id_anggota')->textInput() ?>

    <?= $form->field($model, 'tanggal_peminjaman')->textInput() ?>

    <?= $form->field($model, 'tanggal_pengembalian')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    </div>
    <div class="box-footer with-border form-group">
        <div class="col-sm-3 col-sm-offset-3">
            <?= Html::submitButton('Simpan', ['class' => 'btn btn-success btn-flat']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
