<?php

/*
 * Yii2 asset for jQuery resizable columns
 *
 * @link      https://github.com/hiqdev/yii2-asset-jquery-resizable-columns
 * @package   yii2-asset-jquery-resizable-columns
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii2\assets\JqueryResizableColumns;

/**
 * Asset bundle for jQuery resizable columns plugin for jQuery.
 */
class ResizableColumnAsset extends \yii\web\AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@bower/jquery-resizable-columns/dist';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'jquery.resizableColumns.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $css = [
        'jquery.resizableColumns.css',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'hiqdev\yii2\assets\StoreJs\StoreJsAsset',
    ];
}
