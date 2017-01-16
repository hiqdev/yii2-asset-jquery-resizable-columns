Yii2 jquery-resizable-columns
=============================

**Yii2 asset for jQuery resizable columns**

[![Latest Stable Version](https://poser.pugx.org/hiqdev/yii2-asset-jquery-resizable-columns/v/stable)](https://packagist.org/packages/hiqdev/yii2-asset-jquery-resizable-columns)
[![Total Downloads](https://poser.pugx.org/hiqdev/yii2-asset-jquery-resizable-columns/downloads)](https://packagist.org/packages/hiqdev/yii2-asset-jquery-resizable-columns)
[![Build Status](https://img.shields.io/travis/hiqdev/yii2-asset-jquery-resizable-columns.svg)](https://travis-ci.org/hiqdev/yii2-asset-jquery-resizable-columns)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/yii2-asset-jquery-resizable-columns.svg)](https://scrutinizer-ci.com/g/hiqdev/yii2-asset-jquery-resizable-columns/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/yii2-asset-jquery-resizable-columns.svg)](https://scrutinizer-ci.com/g/hiqdev/yii2-asset-jquery-resizable-columns/)
[![Dependency Status](https://www.versioneye.com/php/hiqdev:yii2-asset-jquery-resizable-columns/dev-master/badge.svg)](https://www.versioneye.com/php/hiqdev:yii2-asset-jquery-resizable-columns/dev-master)

This package is Yii2 asset bundle for [jquery-resizable-columns](https://github.com/dobtco/jquery-resizable-columns).

## Installation

The preferred way to install this yii2-extension is through [composer](http://getcomposer.org/download/).

Either run

```sh
php composer.phar require "hiqdev/yii2-asset-jquery-resizable-columns"
```

or add

```json
"hiqdev/yii2-asset-jquery-resizable-columns": "*"
```

to the require section of your composer.json.

## Usage

It's just a normal Yii2 asset bundle.

You can use it directly inside of a view:

```php
use hiqdev\yii2\assets\JqueryResizableColumns\ResizableColumnsAsset;

ResizableColumnsAsset::register($this);
```

Or you can add it as a dependency to other asset:

```php
class AppAsset extends \yii\web\AssetBundle
{
    public $depends = [
        \yii\web\YiiAsset::class,
        ...
        \hiqdev\yii2\assets\JqueryResizableColumns\ResizableColumnsAsset::class,
    ];
}
```

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2015-2017, HiQDev (http://hiqdev.com/)
