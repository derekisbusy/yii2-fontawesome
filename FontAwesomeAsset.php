<?php
namespace derekisbusy\fa;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/derekisbusy/yii2-fontawesome';
    
    public $css = [
        YII_ENV_DEV ? 'css/font-awesome.css' : 'css/font-awesome.min.css',
    ];
    
    public $js = [
        'js/fa.min.js',
    ];
}