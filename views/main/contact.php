<?php

	/* @var $this yii\web\View */
	/* @var $form yii\bootstrap\ActiveForm */
	/* @var $model app\models\ContactForm */

	use yii\helpers\Html;
	use yii\bootstrap\ActiveForm;
	use yii\captcha\Captcha;

	$this->title = 'Обратная связь';
	$this->params['breadcrumbs'][] = $this->title;

?>
<div class="container">


	<div class="row">
		<div class="col-md-6 col-md-offset-3">

			<h1><?= Html::encode($this->title) ?></h1>

			<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

				<div class="alert alert-success">
					Благодарим Вас за обращение к нам. Мы ответим вам как можно скорее.
				</div>

			<?php else: ?>

				<p>
					Пожалуйста, заполните следующую форму, чтобы связаться с нами.
					Спасибо.
				</p>


				<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

				<?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

				<?= $form->field($model, 'email') ?>

				<?= $form->field($model, 'subject') ?>

				<?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>

				<?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
				'captchaAction' => 'main/captcha',
				'template'      => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
			]) ?>

				<div class="form-group">
					<?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
				</div>

				<?php ActiveForm::end(); ?>


			<?php endif; ?>
		</div>
	</div>
</div>
