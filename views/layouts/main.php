<?php

	/* @var $this \yii\web\View */
	/* @var $content string */
	/** @var $controller \app\common\WCController */

	use yii\helpers\Html;
	use yii\bootstrap\Nav;
	use yii\bootstrap\NavBar;
	use yii\widgets\Breadcrumbs;
	use app\assets\AppAsset;

	AppAsset::register($this);
	$controller = Yii::$app->controller;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

	<?= $this->render('header', $this->params) ?>

	<?= ($controller->showSlider) ? $this->render('slider', $this->params) : '' ?>

	<div class="container">
		<?= ($controller->showBreadCrumbs) ? Breadcrumbs::widget([
			                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
		                        ]) : '' ?>
		<?= $content ?>
	</div>
</div>

<?= ($controller->showFooter) ? $this->render('footer') : ''; ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
