<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Buku */


?>
<div class="box box-primary buku-view">
    <div class="box-header with-border">
        <h1 class="box-title">Detail Buku <?= Html::encode($this->title) ?></h1>
    </div>
    <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            'nama',
            [
                'attribute' => 'id_penulis',
                'value' => $model->getRelationField('penulis','nama')
            ],
            [
                'attribute' => 'id_penerbit',
                'value' => $model->getRelationField('penerbit','nama')
            ],
            'tahun',
            'kota',
            'katalog',
            'keterangan:ntext',
            'eksemplar',
            'stok',
            'no_rak',
        ],
    ]) ?>
        
    </div>
    <div class="box-footer with-border">
        <p>
            <?= Html::a('Sunting', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-flat']) ?>
            <?= Html::a('Hapus', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger btn-flat',
                'data' => [
                    'confirm' => 'Yakin Akan Menghapus Data?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    </div>

</div>
