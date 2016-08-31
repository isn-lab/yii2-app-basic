<?php

	/* @var $this yii\web\View */
	/* @var $form yii\bootstrap\ActiveForm */
	/* @var $model \isnlab\auth\models\LoginForm */

	use yii\helpers\Html;
	use yii\bootstrap\ActiveForm;

	$this->title = 'Login';
	$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
	<h1><?= Html::encode($this->title) ?></h1>

	<p>Please fill out the following fields to login:</p>

	<?php $form = ActiveForm::begin([
		                                'id' => 'login-form',
		                                'options' => ['class' => 'form-horizontal'],
		                                'fieldConfig' => [
			                                'template' => "{label}\n<div class=\"col-md-4\">{input}</div>\n<div class=\"col-md-6\">{error}</div>",
			                                'labelOptions' => ['class' => 'col-md-2 control-label'],
		                                ],
	                                ]); ?>

	<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

	<?= $form->field($model, 'password')->passwordInput() ?>

	<?= $form->field($model, 'rememberMe')->checkbox([
		                                                 'template' => "<div class=\"col-md-offset-2 col-md-4\">{input} {label}</div>\n<div class=\"col-lg-6\">{error}</div>",
	                                                 ]) ?>

	<div class="form-group">
		<div class="col-lg-offset-2 col-lg-10">
			<?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
		</div>
	</div>

	<?php ActiveForm::end(); ?>
</div>
