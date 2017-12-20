<?php

use yii\helpers\Html;
use app\themes\AdminlteAsset;
use app\assets\AppAsset;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
AdminlteAsset::register($this);
AppAsset::register($this);

$hide = "$('.hide-alert').animate({opacity: 1.0}, 3000).fadeOut('slow')";
$this->registerJs($hide, $this::POS_END, '');

$this->registerCssFile(Yii::$app->request->baseUrl.'/css/login.css');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo Html::encode($this->title); ?></title>
    <meta name="author" content="Digital Data Studio">
    <meta name="robots" content="noodp,noydir"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php
      $baseUrl = Yii::$app->request->baseUrl;
      $resources = Yii::$app->request->baseUrl.'/resources'; 
    ?>
    <?php $this->head() ?>
  </head>
  <body class="login-page">
  <?php foreach (Yii::$app->session->getAllFlashes() as $key => $message) {
            echo '<div class="alert hide-alert alert-' . $key . '" style="border-radius:0px;margin-bottom:0px">' . $message . '</div>';
        } ?>
      <?php echo $content; ?>
  </div>
    <script src="<?php echo $resources;?>/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
    <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>
