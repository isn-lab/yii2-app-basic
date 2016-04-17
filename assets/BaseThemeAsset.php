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
 
    class BaseThemeAsset extends AssetBundle {

        public $sourcePath = '@app/theme/';
        //public $basePath = '@webroot';
        //public $baseUrl = '@web';
    
        public $css = [
            'css/style.css',
        ];
        public $js = [
            //'js/js.min.js',
        ];
        //public $jsOptions = ['position' => \yii\web\View::POS_END];
    
        public $publishOptions = [
            'forceCopy' => YII_DEBUG, //no cache
        ];
    
        public $depends = [
            'yii\web\JqueryAsset',
            'yii\web\YiiAsset',
            'yii\bootstrap\BootstrapAsset',
            'isnlab\common\assets\CommonWebAsset',
            'isnlab\common\assets\MagnificPopupAsset',
        ];
    }


?>