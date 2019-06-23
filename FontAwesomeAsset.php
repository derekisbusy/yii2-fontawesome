<?php
namespace derekisbusy\fa;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/derekisbusy/fa';
    
    public $js = [
        'js/fa.min.js',
    ];
}