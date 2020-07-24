<?php
	/**
	 * Created by ISNLab.
	 * User: Sedov Sergey
	 * Date: 08.12.2016
	 * Time: 14:33
	 * Comment:
	 */
	use yii\bootstrap\Nav;
	use yii\bootstrap\NavBar;

	/* @var $this yii\web\View */


	NavBar::begin([
					  'brandLabel' => 'My Company',
					  'brandUrl'   => Yii::$app->homeUrl,
					  'options'    => [
						  'class' => 'navbar navbar-default navbar-fixed-top',
					  ],
				  ]);
	echo Nav::widget([
						 'options' => ['class' => 'navbar-nav navbar-right'],
						 'items'   => [
							 ['label' => 'Home', 'url' => ['/main/index']],
							 ['label' => 'About', 'url' => ['/main/about']],
							 ['label' => 'Contact', 'url' => ['/main/contact']],
							 //['label' => 'Admin', 'url' => [ADMIN_ALIAS.'/main'], 'visible'=> !Yii::$app->user->isGuest],
							 //['label' => 'Registration', 'url' => ['/'.REGISTRATION_ALIAS], 'visible'=> Yii::$app->user->isGuest],
							 Yii::$app->user->isGuest ?
								 ['label' => 'Login', 'url' => ['/main/login']] :
								 [
									 'label'       => 'Logout (' . Yii::$app->user->identity->user_name . ')',
									 'url'         => ['/main/logout'],
									 'linkOptions' => ['data-method' => 'post']
								 ],
						 ],
					 ]);
	NavBar::end();


