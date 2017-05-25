<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [       
        'css/settings.css',        
        'css/craftsman/style.css',
        'css/font-awesome.min.css',
        'css/js_composer.min.css',
        'css/core-extend.css',
        'css/jquery.mmenu.css',        
        'css/animate.min.css',
        'css/vc_entypo.min.css',
        'css/flexslider.min.css',
        'css/all.css',
        'css/styles.css',
        'css/woocommerce.css',
        'css/style.css',
        
    ];
    public $js = [
	"js/jquery.js",
	"js/style-switcher.js",
	"js/jquery.cookie.min.js",
	"js/woocommerce-add-to-cart.js",
	"js/jquery.countdown.min.js",
	"js/jquery.flexslider-min.js",
	"js/wp-embed.min.js",
	"js/jquery.themepunch.revolution.min.js",
	"js/lightbox.js",
	"js/js_composer_front.min.js",
	"js/init.js",
	"js/jquery.blockUI.min.js",
	"js/woocommerce.min.js",
	"js/jquery.themepunch.tools.min.js",
	"js/jquery-migrate.min.js",
	"js/jquery.form.min.js",
	"js/comment-reply.min.js",
	//"js/jquery.mmenu.js",
	"js/parallax-bg.js",
	"js/sticky-header.js",
	"js/cart-fragments.min.js",
	"js/waypoints.min.js",
	"js/add-to-cart.min.js",
	"js/scripts.js",
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
        //'yiister\adminlte\assets\Asset',
    ];
}

