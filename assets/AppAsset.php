<?php
namespace app\assets;
use yii\web\AssetBundle;

class AppAsset extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'libs/swiper/swiper-bundle.min.css',
        'libs/@fancyapps/ui/fancybox/fancybox.css',
        'libs/select2/css/select2.min.css',
        'libs/daterangepicker/daterangepicker.css',
        'css/main.min.css',
    ];
    public $js = [
        //'libs/libs/jquery/jquery.min.js',
        'libs/@fancyapps/ui/fancybox/fancybox.umd.js',
        'libs/swiper/swiper-bundle.min.js',
        'libs/inputmask/inputmask.min.js',
        'libs/select2/js/select2.min.js',
        'libs/daterangepicker/moment.min.js',
        'libs/daterangepicker/daterangepicker.js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js',
        'js/common.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapPluginAsset'
    ];
}
