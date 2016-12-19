<?php

namespace app\assets;

use yii\web\AssetBundle;

class BlogAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/template';
    public $css = [
        'css/main.css',
        'css/font-awesome.min.css',
    ];
    public $js = [
        'js/vendor/jquery.jpanelmenu.min.js',
        'js/vendor/fastclick.min.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
