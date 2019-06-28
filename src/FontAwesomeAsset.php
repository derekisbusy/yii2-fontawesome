<?php
namespace derekisbusy\fa;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@derekisbusy/fa/assets';
    
    public $css = [
        YII_ENV_DEV ? 'css/fontawesome.css' : 'css/fontawesome.min.css',
    ];
    
    public $js = [
//        'js/fa.min.js',
    ];
}