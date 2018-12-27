<?php

	namespace app\controllers;

	use app\common\WCController;
	use isnlab\auth\models\LoginForm;
	use Yii;
	use yii\filters\VerbFilter;
	use app\models\ContactForm;

	/**
	 * Class MainController
	 * @package app\controllers
	 */
	class MainController extends WCController
	{
		/**
		 * @return array
		 */
		public function appendBehaviors()
		{
			return [
				'verbs' => [
					'class' => VerbFilter::class,
					'actions' => [
						'logout' => ['post'],
					],
				],
			];
		}

		/**
		 * @return array
		 */
		public function appendActions()
		{
			return [
				'captcha' => [
					'class' => 'yii\captcha\CaptchaAction',
					'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
				],
			];
		}

		/**
		 * @return mixed
		 */
		public function actionIndex()
		{
			return $this->render('index');
		}

		/**
		 * @return mixed
		 */
		public function actionLogin()
		{
			if (!\Yii::$app->user->isGuest) {
				return $this->goHome();
			}

			$model = new LoginForm();
			if ($model->load(Yii::$app->request->post()) && $model->login()) {
				return $this->goBack();
			}
			return $this->render('login', [
				'model' => $model,
			]);
		}

		/**
		 * @return mixed
		 */
		public function actionLogout()
		{
			Yii::$app->user->logout();

			return $this->goHome();
		}

		/**
		 * @return mixed
		 */
		public function actionContact()
		{
			$model = new ContactForm();
			if ($model->load(Yii::$app->request->post()) && $model->contact()) {
				Yii::$app->session->setFlash('contactFormSubmitted');

				return $this->refresh();
			}
			return $this->render('contact', [
				'model' => $model,
			]);
		}

		/**
		 * @return mixed
		 */
		public function actionAbout()
		{
			return $this->render('about');
		}
	}
