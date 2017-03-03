<?php
	/**
	 * ISNLab.
	 * Sedov Sergey
	 * sedov.sergey@isnlab.com
	 * http://isnlab.com
	 * Date: 24.01.2017
	 */
	namespace app\controllers;

	use app\traits\BaseControllersTrait;

	class ContentController extends \isnlab\mods\content\controllers\ContentController {

		use BaseControllersTrait;

		public function init() {
			parent::init();

			$this->showBreadCrumbs = true;
		}


	}


	?>