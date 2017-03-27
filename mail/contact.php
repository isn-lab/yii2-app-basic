<?php
	/**
	 * ISNLab.
	 * User: Sedov Sergey
	 * sedov.sergey@isnlab.com
	 * http://isnlab.com
	 * Date: 13.12.2016
	 */
	/* @var $this yii\web\View */
	/** @var $model \app\models\ContactForm */
?>

Email: <?= $model->email ?><br>
Name: <?= $model->name ?><br>
-------------------------------------<br>
<?= $model->subject ?><br>
-------------------------------------<br>
<?= $model->body ?>
