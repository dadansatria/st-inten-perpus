<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PeminjamanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kelola Peminjaman';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary peminjaman-index">

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="box-header with-border">
        <p>
            <?= Html::a('Tambah Peminjaman', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
        </p>
    </div>
    <div class="box-body">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => 'No',
                'headerOptions'=>['style'=>'text-align:center;width:20px;'],
                'contentOptions'=>['style'=>'text-align:center;width:20px;']
            ],

            'id',
            'id_buku',
            'id_anggota',
            'tanggal_peminjaman',
            'tanggal_pengembalian',
            // 'status',

            [
                'class' => 'app\components\ToggleActionColumn',
                'headerOptions'=>['style'=>'text-align:center;width:80px'],
                'contentOptions'=>['style'=>'text-align:center']
            ],
        ],
    ]); ?>
    </div>
    <?php Pjax::end(); ?>
</div>
