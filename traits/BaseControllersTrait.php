<?php
	/**
	 * ISNLab.
	 * Sedov Sergey
	 * sedov.sergey@isnlab.com
	 * http://isnlab.com
	 * Date: 24.01.2017
	 */

	namespace app\traits;


	/**
	 * Class BaseControllersTrait
	 * @package app\traits
	 */
	trait BaseControllersTrait {

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