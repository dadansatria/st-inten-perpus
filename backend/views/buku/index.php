<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use app\models\Penerbit;
use app\models\Penulis;

use kartik\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BukuSearach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kelola Buku';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary buku-index">

    <?php Pjax::begin(); ?>
    <div class="box-header with-border">
        <p>
            <?= Html::a('Tambah Buku', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
        </p>
    </div>
    <div class="box-body">

    <?= 
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => 'No',
                'headerOptions'=>['style'=>'text-align:center;width:20px;'],
                'contentOptions'=>['style'=>'text-align:center;width:20px;']
            ],
            [
                'class'=>'kartik\grid\ExpandRowColumn',
                'width'=>'50px',
                'value'=>function ($model, $key, $index, $column) {
                    return GridView::ROW_COLLAPSED;
                },
                'detail'=>function ($model, $key, $index, $column) {
                    return Yii::$app->controller->renderPartial('_detail_expand', ['model'=>$model]);
                },
                'headerOptions'=>['class'=>'kartik-sheet-style'],
                'expandOneOnly'=>true
            ],
            'nama',
            [
               'attribute' => 'id_penulis',
                'filterType'=>GridView::FILTER_SELECT2,
                'filter'=>Penulis::getList(), 
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'filterInputOptions'=>['placeholder'=>'Filter Penulis'],
                'format'=>'raw',
               'value' => function($model){
                    return $model->getRelationField('penulis','nama');
               }
            ],
            [
                'attribute' => 'id_penerbit',
                'filterType'=>GridView::FILTER_SELECT2,
                'filter'=>Penerbit::getList(), 
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'filterInputOptions'=>['placeholder'=>'Filter Penerbit'],
                'format'=>'raw',
                'value' => function($model){
                    return $model->getRelationField('penerbit','nama');
               }
            ], //kono mantap
            'kota',
            'tahun',


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
