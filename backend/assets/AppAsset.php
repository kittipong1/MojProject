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
        '../backend/web/js/skins/moono-lisa/editor.css',
        '../backend/web/js/plugins/scayt/skins/moono-lisa/scayt.css',
        '../backend/web/js/plugins/tableselection/styles/tableselection.css',
        '../backend/web/js/plugins/wsc/skins/moono-lisa/wsc.css',
        '../backend/web/js/plugins/scayt/dialogs/dialog.css',
        '../backend/web/js/skins/moono-lisa/dialog.css',
    ];
    public $js = [
        '../backend/web/js/bootstrap-datepicker.js',
        '../backend/web/js/ckeditor.js',
        '../backend/web/js/config.js',
        '../backend/web/js/th.js',
        '../backend/web/js/styles.js',
        '../backend/web/js/plugins/image/dialogs/image.js',
        '../backend/web/js/plugins/table/dialogs/table.js',
        '../backend/web/js/plugins/specialchar/dialogs/lang/th.js',
        '../backend/web/js/plugins/specialchar/dialogs/specialchar.js',
        '../backend/web/js/plugins/link/dialogs/link.js',
        '../backend/web/js/plugins/link/dialogs/anchor.js',
        '../backend/web/js/plugins/about/dialogs/about.js',
        '../backend/web/js/plugins/wsc/dialogs/wsc.js',
        '../backend/web/js/plugins/pastefromword/filter/default.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
