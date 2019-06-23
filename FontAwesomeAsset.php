<?php
namespace derekisbusy\fa;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/derekisbusy/yii2-fontawesome';
    
    public $js = [
        'js/fa.min.js',
    ];
}