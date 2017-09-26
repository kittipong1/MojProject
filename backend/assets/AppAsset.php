<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '../backend/web/css/site.css',
        '../backend/web/css/datepicker.css',
        '../backend/web/css/editor.css',
    ];
    public $js = [
        '../backend/web/js/bootstrap-datepicker.js',
        '../backend/web/js/ckeditor.js',
        '../backend/web/js/config.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
