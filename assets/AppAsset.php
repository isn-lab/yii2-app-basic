<?php
/**
 * Copyright (c) 2020.
 * ISNLab
 * Sedov Sergey
 */

namespace app\assets;

    use yii\web\AssetBundle;

    /**
     * Class AppAsset
     * @package app\assets
     */
    class AppAsset extends AssetBundle
    {
        public $basePath = '@webroot';
        public $baseUrl = '@web';

        public $depends = [
            'yii\web\YiiAsset',
            'yii\bootstrap\BootstrapAsset',
            'app\assets\BaseThemeAsset',
        ];

        /**
         * @param \yii\web\View $view
         *
         * @return AppAsset
         */
        public static function register($view)
        {
            //<link rel="shortcut icon" href="/images/favicon.png" type="image/png">
            $view->registerLinkTag(['rel' => 'shortcut icon', 'href' => '/favicon.png', 'type' => 'image/png']);
            return parent::register($view);
        }
    }
