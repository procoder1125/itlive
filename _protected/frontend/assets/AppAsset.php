<?php
/**
 * -----------------------------------------------------------------------------
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * -----------------------------------------------------------------------------
 */

namespace frontend\assets;

use yii\web\AssetBundle;
use Yii;

// set @themes alias so we do not have to update baseUrl every time we change themes
Yii::setAlias('@themes', Yii::$app->view->theme->baseUrl);

/**
 * -----------------------------------------------------------------------------
 * @author Qiang Xue <qiang.xue@gmail.com>
 *
 * @since 2.0
 * -----------------------------------------------------------------------------
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@themes';
    
    public $css = [
        "css/bootstrap.min.css",
        "https://fonts.gstatic.com",
        "https://unpkg.com/swiper/swiper-bundle.min.css",
        "fonts/font-awesome.min.css",
        "style/main.css",
        //"style/news.css",
        
        
        "style2/cource.css",
        // "academic/css/bootstrap.min.css",
        // "academic/css/font-awesome.min.css",
        // "academic/css/flaticon.css",
        // "academic/css/owl.carousel.css",
        // "academic/css/style.css",
    ];
    public $js = [
        "https://unpkg.com/swiper/swiper-bundle.min.js",
        "js/jquery.min.js",
        "js/popper.min.js ",
        "js/bootstrap.min.js",
        "js/particles.min.js",
        "js/config.js",
        "js/main.js",

        

        // "academic/js/jquery-3.2.1.min.js",
        // "academic/js/bootstrap.min.js",
        // "academic/js/owl.carousel.min.js",
        // "academic/js/circle-progress.min.js",
        // "academic/js/main.js",
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
    ];
}

