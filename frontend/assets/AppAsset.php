<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $sourcePath = '@km/dist';
    public $css = [
         'css/bootstrap.min.css',
  'css/fullcalendar.css',
  'css/fotorama.css',
  'css/gallery.css',
  'css/settings.css',
  'css/font-awesome.min.css',
  'css/slicknav.css',
  'css/style.css',
  'css/responsive.css',
  'css/animate.css',
  'css/colors/sky-blue.css',
  'css/custom.css',
  './backend/web/css/datepicker.css',
          './backend/web/js/skins/moono-lisa/editor.css',
        './backend/web/js/plugins/scayt/skins/moono-lisa/scayt.css',
        './backend/web/js/plugins/tableselection/styles/tableselection.css',
        './backend/web/js/plugins/wsc/skins/moono-lisa/wsc.css',
        './backend/web/js/plugins/scayt/dialogs/dialog.css',
        './backend/web/js/skins/moono-lisa/dialog.css',
    ];

    public $js = [
 
 'js/moment.js',
 'js/jquery.migrate.js',
 'js/modernizrr.js',
 'js/bootstrap.min.js',
 'js/jquery.fitvids.js',
 'js/owl.carousel.min.js',
 'js/nivo-lightbox.min.js',
 'js/jquery.isotope.min.js',
 'js/jquery.appear.js',
 'js/count-to.js',
 'js/jquery.textillate.js',
 'js/jquery.lettering.js',
 'js/jquery.easypiechart.min.js',
 'js/smooth-scroll.js',
 'js/skrollr.js',
 'js/jquery.parallax.js',
 'js/mediaelement-and-player.js',
 'js/jquery.slicknav.js',   
 'js/fullcalendar.js',   
 'js/fotorama.js', 
 'js/gallery.js',  
 'js/th.js',
 'js/script.js',
 'js/jquery.themepunch.revolution.min.js',
 'js/jquery.themepunch.tools.min.js',  
 './backend/web/js/bootstrap-datepicker.js',
        './backend/web/js/ckeditor.js',
        './backend/web/js/config.js',
        './backend/web/js/th.js',
        './backend/web/js/styles.js',
        './backend/web/js/plugins/image/dialogs/image.js',
        './backend/web/js/plugins/table/dialogs/table.js',
        './backend/web/js/plugins/specialchar/dialogs/lang/th.js',
        './backend/web/js/plugins/specialchar/dialogs/specialchar.js',
        './backend/web/js/plugins/link/dialogs/link.js',
        './backend/web/js/plugins/link/dialogs/anchor.js',
        './backend/web/js/plugins/about/dialogs/about.js',
        './backend/web/js/plugins/wsc/dialogs/wsc.js',
        './backend/web/js/plugins/pastefromword/filter/default.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}