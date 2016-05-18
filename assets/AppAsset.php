<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'app\assets\BaseThemeAsset'
    ];

	public static function register($view)
	{
		//<link rel="shortcut icon" href="/images/favicon.png" type="image/png">
		$view->registerLinkTag(['rel'=>'shortcut icon', 'href' => '/favicon.png', 'type' => 'image/png']);

		return parent::register($view);
	}
}
