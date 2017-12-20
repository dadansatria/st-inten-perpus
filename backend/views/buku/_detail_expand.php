<?php 
use yii\helpers\Html;
?>

<table width="50%" class="table table-bordered table-striped table-condensed">
	<tr>
		<td width="20%" style="padding: 10px" rowspan="4">
			<?php echo Html::img('@web/images/book.png',['width'=>'200px']) ?>
		</td>
		<th>Judul</th>
		<th><?= $model->nama; ?></th>
	</tr>
	<tr>
		<th>Tahun</th>
		<th><?= $model->tahun; ?></th>
	</tr>
	<tr>
		<th>Penulis</th>
		<th><?= $model->getRelationField('penulis','nama'); ?></th>
	</tr>
	<tr>
		<th>Penerbit</th>
		<th><?= $model->getRelationField('penerbit','nama'); ?></th>
	</tr>
</table>

<div style="text-align: right">
    <p>
    	<?= Html::a('<i class="fa fa-eye"></i> Detail', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('<i class="fa fa-trash"></i> Hapus', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn-flat',
            'data' => [
                'confirm' => 'Yakin Akan Menghapus Data?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>
