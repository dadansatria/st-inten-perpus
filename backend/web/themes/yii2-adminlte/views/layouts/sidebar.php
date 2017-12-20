<?php

use yii\web\View;
use app\themes\SideNav;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Html;
use app\models\User;

//use yii\helpers\Html;

/* @var $this View */

$items = ArrayHelper::getValue($this->params, 'sideMenu', []);
?>
<aside class="main-sidebar">
	<div class="user-panel">
	  <div class="pull-left image">
		<img src="<?= Yii::getAlias('@web/themes/yii2-adminlte') ?>/img/avatar.png" class="img-circle" alt="User Image">
	  </div>
	  <div class="pull-left info">
		<p><?= 'User' ?></p>
		<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
	  </div>
	</div><!-- /.user-panel -->
	<?php $class_active = ''; $class_menu_open = ''; ?>
	<section class="sidebar">
		<?php if(/*User::isAdmin() OR User::isSuperAdmin()*/true) { ?>
		<ul class="sidebar-menu">
			<li class="header">MENU NAVIGASI</li>
			<!-- Optionally, you can add icons to the links -->
			<li><a href="<?= Url::to(['admin/index'])?>"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
			<li><a href="<?= Url::to(['buku/index'])?>"><i class="fa fa-book"></i> <span>Buku</span></a></li>  

			<li class="treeview <?= $class_active; ?>">
			    <?= Html::a('<i class="fa fa-building"></i> <span>Peminjaman</span>', '#'); ?>
				<ul class="treeview-menu <?= $class_menu_open; ?>">
					<li><a href="<?= Url::to(['peminjaman/index'])?>"><i class="fa fa-warning"></i> <span>Daftar Peminjaman</span></a></li>
					<li><a href="<?= Url::to(['peminjaman/index'])?>"><i class="fa fa-circle-o-notch"></i> <span>Daftar Keterlambatan</span></a></li>  
			    </ul>
			</li>
			<li><a href="<?= Url::to(['penerbit/index'])?>"><i class="fa fa-bug"></i> <span>Penerbit</span></a></li>  
			<li><a href="<?= Url::to(['penulis/index'])?>"><i class="fa fa-pencil"></i> <span>Penulis</span></a></li>  

			<li><a href="<?= Url::to(['user/index'])?>"><i class="fa fa-user"></i> <span>User</span></a></li>  
			<?php 
			//TODO: tambahkan pada array jika menambah menu baru ke dalam menu pengaturan
			if(in_array(Yii::$app->controller->id, ['peminjaman','denda']) ) 
			{ 
				$class_active = 'active'; $class_menu_open = 'menu-open'; 
			} ?>
			<li><a href="<?= Url::to(['site/logout'])?>" data-method="post"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>

		</ul><!-- /.sidebar-menu -->
		<?php } ?>
	</section>
</aside>
