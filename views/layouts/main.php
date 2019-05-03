<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
	<!DOCTYPE html>
	<html lang="<?= Yii::$app->language ?>">
	<head>
		<meta charset="<?= Yii::$app->charset ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php $this->registerCsrfMetaTags() ?>
		<title><?= Html::encode($this->title) ?></title>
		<?php $this->head() ?>
	</head>
	<body>
	<?php $this->beginBody() ?>

	<div class="wrap">
		<?php NavBar::begin([
			'brandLabel' => 'ActiveRecord Logger test app',
			'brandUrl' => '/data/index',
			'options' => [
				'class' => 'navbar-inverse navbar-fixed-top',
			],
		]); ?>
		<?= Nav::widget([
			'options' => ['class' => 'navbar-nav navbar-right'],
			'items' => [
				['label' => 'Data items', 'url' => ['/data/index']],
				['label' => 'Item types', 'url' => ['/data-types/index']],
				['label' => 'Item kinds', 'url' => ['/data-kinds/index']],
			],
		]); ?>
		<?php NavBar::end(); ?>

		<div class="container">
			<?= Breadcrumbs::widget([
				'links' => isset($this->params['breadcrumbs'])?$this->params['breadcrumbs']:[],
			]) ?>
			<?= Alert::widget() ?>
			<?= $content ?>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
			<p class="pull-left">This is test application for
				<a href="https://github.com/pozitronik/arlogger">Yii2 ActiveRecord Logger</a></p>
		</div>
	</footer>

	<?php $this->endBody() ?>
	</body>
	</html>
<?php $this->endPage() ?>