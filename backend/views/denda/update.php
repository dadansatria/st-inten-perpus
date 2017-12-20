<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Denda */

$this->title = 'Sunting Denda';
$this->params['breadcrumbs'][] = ['label' => 'Denda', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Sunting';
?>
<div class="denda-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
