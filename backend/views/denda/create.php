<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Denda */

$this->title = 'Tambah Denda';
$this->params['breadcrumbs'][] = ['label' => 'Denda', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="denda-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
