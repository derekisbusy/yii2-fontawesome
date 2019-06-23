Yii2 Font Awesome
=================
Font Awesome assets for Yii2 projects

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist derekisbusy/yii2-fontawesome:dev-master
```

or add

```
"derekisbusy/yii2-fontawesome": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it by adding it to your view  :

```php
use \derekisbusy\fa\FontAwesomeAsset;

FontAwesomeAsset::register($this);
```

or by adding it to another assets dependencies list :

```php
  public $depends = [
    'derekisbusy\fa\FontAwesomeAsset'
  ];
```

Then use the icons in your HTML

```html
<i class="fas fa-camera"></i> 
```

Documentation
-------------

 * [Font Awesome](https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use)
 * [Yii2 assets](https://www.yiiframework.com/doc/guide/2.0/en/structure-assets)
