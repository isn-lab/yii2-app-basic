<?php
    /**
     * Created by ISNLab.
     * User: Sedov Sergey
     * Date: 16.04.2016
     * Time: 0:56
     * Comment:
     */

    namespace app\assets;

    use yii\web\AssetBundle;

    /**
     * Class BaseThemeAsset
     * @package app\assets
     */
    class BaseThemeAsset extends AssetBundle
    {

        /**
         * @var string
         */
        public $sourcePath = '@app/theme/';

        /**
         * @var string[]
         */
        public $css = [
            'css/site.css',
        ];

        /**
         * @var array
         */
        public $publishOptions = [
            'forceCopy' => YII_ENV_DEV, //no cache
        ];

        /**
         * @var string[]
         */
        public $depends = [
            'yii\web\JqueryAsset',
            'yii\web\YiiAsset',
            'yii\bootstrap\BootstrapAsset',
            'yii\bootstrap\BootstrapPluginAsset',
            'isnlab\common\assets\CommonWebAsset',
            'isnlab\common\assets\MagnificPopupAsset',
        ];
    }
