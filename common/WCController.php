<?php
	/**
	 * Created by ISNLab.
	 * User: Sedov Sergey
	 * Date: 01.10.2015
	 * Time: 23:03
	 * Comment:
	 */
	namespace app\common;

	use isnlab\auth\common\CController;
	use Yii;

	/**
	 * Class WCController
	 * @package app\common
	 */
	class WCController extends CController {

		/**
		 * @var bool
		 */
		public $isHome = false;
		/**
		 * @var bool
		 */
		public $showBreadCrumbs = true;
		/**
		 * @var bool
		 */
		public $showFooter = true;
		/**
		 * @var bool
		 */
		public $showSlider = false;


	}
