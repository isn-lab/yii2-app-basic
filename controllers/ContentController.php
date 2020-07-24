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

    /**
     * Class ContentController
     * @package app\controllers
     */
    class ContentController extends \isnlab\mods\content\controllers\ContentController {

		use BaseControllersTrait;

        /**
         * Init
         */
        public function init() {
			parent::init();

			$this->showBreadCrumbs = true;
		}


	}
