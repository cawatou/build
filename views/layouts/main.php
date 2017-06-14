<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\ActiveForm;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Articles;
use app\models\Contacts;
use app\models\ContactForm;

AppAsset::register($this);
?>
<?
$model = new ContactForm();
$contact_model = Contacts::find()->one();
$articles = Articles::find()->limit(5)->orderBy(['id' => SORT_DESC])->all();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<?php $this->beginBody() ?>
<style type="text/css">
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 .07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
</style>
<style id='rs-plugin-settings-inline-css' type='text/css'>
    .tp-caption a {
        color: #ff7302;
        text-shadow: none;
        -webkit-transition: all 0.2s ease-out;
        -moz-transition: all 0.2s ease-out;
        -o-transition: all 0.2s ease-out;
        -ms-transition: all 0.2s ease-out
    }

    .tp-caption a:hover {
        color: #ffa902
    }

    .largeredbtn {
        font-family: "Raleway", sans-serif;
        font-weight: 900;
        font-size: 16px;
        line-height: 60px;
        color: #fff !important;
        text-decoration: none;
        padding-left: 40px;
        padding-right: 80px;
        padding-top: 22px;
        padding-bottom: 22px;
        background: rgb(234, 91, 31);
        background: -moz-linear-gradient(top, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(234, 91, 31, 1)), color-stop(100%, rgba(227, 58, 12, 1)));
        background: -webkit-linear-gradient(top, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
        background: -o-linear-gradient(top, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
        background: -ms-linear-gradient(top, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
        background: linear-gradient(to bottom, rgba(234, 91, 31, 1) 0%, rgba(227, 58, 12, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ea5b1f', endColorstr='#e33a0c', GradientType=0)
    }

    .largeredbtn:hover {
        background: rgb(227, 58, 12);
        background: -moz-linear-gradient(top, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(227, 58, 12, 1)), color-stop(100%, rgba(234, 91, 31, 1)));

        background: -webkit-linear-gradient(top, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
        background: -o-linear-gradient(top, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
        background: -ms-linear-gradient(top, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
        background: linear-gradient(to bottom, rgba(227, 58, 12, 1) 0%, rgba(234, 91, 31, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e33a0c', endColorstr='#ea5b1f', GradientType=0)
    }

    .fullrounded img {
        -webkit-border-radius: 400px;
        -moz-border-radius: 400px;
        border-radius: 400px
    }
</style>
<style id='main-inline-css' type='text/css'>

    .themecolor_bg, .wpb_button.wpb_btn_themecolor, .wpb_button.wpb_btn_themecolor:hover, input[type='submit'], button, th, #wp-calendar #today, .vc_progress_bar .vc_single_bar.bar_themecolor .vc_bar, #site-navigation .header_cart_button .cart_product_count, .header-search .search-input, .pricing-box .plan-badge, .scrollToTop, .special, .more-link, .mm-header, .widget-area .widget .tagcloud a:hover, .post-navigation a:hover, .page-header {
        background-color: #e74c3c;
    }

    ::selection {
        background-color: #e74c3c;
    }

    ::-moz-selection {
        background-color: #e74c3c;
    }

    dt, .wpb_button.wpb_btn_themecolor.wpb_btn-minimal, .themecolor_txt, #site-header #site-navigation ul li a:hover, #site-header #site-navigation .search_button:hover, #site-header #site-navigation .header_cart_button:hover, #site-header #site-navigation ul li.current-menu-item > a, .single-post #site-header #site-navigation ul li.current_page_parent > a, #site-header #site-navigation ul li.current-menu-ancestor > a, a:hover, .widget a, #sidebar .widget_nav_menu ul li a:hover, #sidebar .widget_nav_menu ul li.current-menu-item a, span.required, #comments .comment-reply-link:hover, #comments .comment-meta a:hover, .vc_toggle_default .vc_toggle_title .vc_toggle_icon:after, .post-entry-header .entry-meta a:hover, .tag-links:before, #comments p.comment-notes:before, p.logged-in-as:before, p.must-log-in:before, .entry-meta-footer .meta-date:before, article.sticky .post-preview:after, .separator_w_icon i, blockquote:after, article.format-quote .quoute-text:after, article.format-link .link-text:after, article.format-status .status-text:after, article.format-chat p:nth-child(odd):before, .entry-meta-footer a:hover, .footer-sidebar a:hover, .team_member_position, .heading_wrapper .heading_subtitle:after, .testimonials-slider .flex-control-paging li a.flex-active:after, .wpb_tour .wpb_tabs_nav li.ui-tabs-active a, .wpb_tour .wpb_tabs_nav li a:hover, .wpb_accordion .wpb_accordion_wrapper .wpb_accordion_header a:hover, .wpb_accordion .wpb_accordion_wrapper .wpb_accordion_header.ui-accordion-header-active a, .woocommerce-MyAccount-navigation ul li.is-active a {
        color: #e74c3c;
    }

    .wpb_button.wpb_btn_themecolor, .wpb_button.wpb_btn_themecolor:hover, input[type='submit'], th, #comments .comment-reply-link:hover, article.format-quote .quoute-text, article.format-link .link-text, article.format-status .status-text, .woocommerce-MyAccount-navigation ul li.is-active {
        border-color: #e74c3c;
    }

    article.format-image .post-preview a:after {
        background-color: #e74c3c;
        background-color: rgba(231, 76, 60, 1);
    }

    .woocommerce div.product span.price, .woocommerce div.product p.price, .woocommerce #content div.product span.price, .woocommerce #content div.product p.price, .woocommerce-page div.product span.price, .woocommerce-page div.product p.price, .woocommerce-page #content div.product span.price, .woocommerce-page #content div.product p.price, .woocommerce ul.products li.product .price, .woocommerce-page ul.products li.product .price, #site-header #site-navigation .header_cart_widget .woocommerce ul li a:hover, #site-navigation .header_cart_widget .woocommerce .buttons a:hover, .woocommerce ul li.product-category:hover h3, .woocommerce ul li.product-category:hover h3 mark {
        color: #e74c3c;
    }

    .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit, .woocommerce #content input.button, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce-page #respond input#submit, .woocommerce-page #content input.button, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce #content input.button.alt, .woocommerce-page a.button.alt, .woocommerce-page button.button.alt, .woocommerce-page input.button.alt, .woocommerce-page #respond input#submit.alt, .woocommerce-page #content input.button.alt, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce a.added_to_cart, .woocommerce-page a.added_to_cart, .woocommerce .widget_layered_nav ul li.chosen a, .woocommerce-page .widget_layered_nav ul li.chosen a {
        background-color: #e74c3c;
    }

    .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce #content nav.woocommerce-pagination ul li span.current, .woocommerce #content nav.woocommerce-pagination ul li a:hover, .woocommerce #content nav.woocommerce-pagination ul li a:focus, .woocommerce-page nav.woocommerce-pagination ul li span.current, .woocommerce-page nav.woocommerce-pagination ul li a:hover, .woocommerce-page nav.woocommerce-pagination ul li a:focus, .woocommerce-page #content nav.woocommerce-pagination ul li span.current, .woocommerce-page #content nav.woocommerce-pagination ul li a:hover, .woocommerce-page #content nav.woocommerce-pagination ul li a:focus {
        background-color: #e74c3c;
    }

    .woocommerce .widget_layered_nav ul li.chosen a, .woocommerce-page .widget_layered_nav ul li.chosen a {
        border-color: #e74c3c;
    }

    #site-navigation .header_cart_widget .woocommerce .buttons a, #site-navigation .header_cart_widget .woocommerce .total {
        color: #2b2b2b
    }

    .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit:hover, .woocommerce #content input.button:hover, .woocommerce-page a.button:hover, .woocommerce-page button.button:hover, .woocommerce-page input.button:hover, .woocommerce-page #respond input#submit:hover, .woocommerce-page #content input.button:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce #content input.button.alt:hover, .woocommerce-page a.button.alt:hover, .woocommerce-page button.button.alt:hover, .woocommerce-page input.button.alt:hover, .woocommerce-page #respond input#submit.alt:hover, .woocommerce-page #content input.button.alt:hover {
        background-color: #2b2b2b
    }

    .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit, .woocommerce #content input.button, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce-page #respond input#submit, .woocommerce-page #content input.button, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce #content input.button.alt, .woocommerce-page a.button.alt, .woocommerce-page button.button.alt, .woocommerce-page input.button.alt, .woocommerce-page #respond input#submit.alt, .woocommerce-page #content input.button.alt {
        color: #ffffff
    }

    #site-header #header-container, #top-bar, #site-navigation ul li.megamenu > ul {
        max-width: 1060px;
    }

    #top-bar-wrapper {
        padding: 0px;
    }

    #topleft-widget-area {
        padding-left: 40px;
    }

    #topright-widget-area {
        padding-right: 40px;
    }

    .row-inner {
        max-width: 1010px;
    }

    #container.no-sidebar.no-vc, #container.row-inner, .site-info .row-inner, .page-header .row-inner {
        max-width: 980px;
    }

    body {
        font-family: Roboto;
        color: #454545;
        font-size: 16px
    }

    select, input, textarea {
        font-family: Roboto
    }

    .woocommerce .shipping-calculator-form p button.button {
        font-family: Roboto
    }

    #site-navigation ul li a {
        font-family: Roboto;
        letter-spacing: 0.1em
    }

    h1, h2, h3, h4, h5, h6 {
        font-family: Roboto
    }

    .heading_wrapper h2, .heading_wrapper .heading_subtitle {
        font-family: Roboto
    }

    .widget .widget-title {
        font-family: Roboto
    }

    #site-header #header-container, #site-header.header-sticked .sticky-background, #site-navigation ul li ul {
        background-color: #ffffff;
    }

    #site-header, #site-header #header-container, .sticky-background {
        height: 70px;
    }

    #site-navigation ul li a, #site-navigation .search_button, #site-navigation .header_cart_link, #site-logo .site-title {
        line-height: 70px;
    }

    #site-logo img {
        max-height: 70px;
    }

    #top-bar-wrapper {
        background: #d1b7a3
    }

    #top-bar-wrapper, #top-bar-wrapper a, #top-bar ul li ul li a:after {
        color: #ffffff
    }

    #site-logo h1.site-title a, #site-header #site-navigation ul li a, #site-header #site-navigation ul li ul li a:hover, #site-header #site-navigation .search_button, #site-header #site-navigation .header_cart_button, .toggle-mobile-menu i, #site-header #site-navigation ul li ul li.current-menu-item > a, .single-post #site-header #site-navigation ul li ul li.current_page_parent > a, #site-header #site-navigation ul li ul li.current-menu-ancestor > a {
        color: #444444
    }

    #site-navigation ul li ul {
        background-color: #ffffff
    }

    #site-navigation ul li ul:after {
        border-bottom-color: #ffffff;
    }

    #site-header #site-navigation ul li ul li a, #site-header #site-navigation ul li ul li a:hover, #site-header #site-navigation ul li ul li.current-menu-item > a, #site-header #site-navigation ul li ul li.current-menu-item > a:hover, .single-post #site-header #site-navigation ul li ul li.current_page_parent > a, #site-header #site-navigation ul li ul li.current-menu-ancestor > a {
        color: #444444
    }

    #site-header #site-navigation ul li ul li a:hover, #site-header #site-navigation ul li ul li.current-menu-item > a:hover {
        color: #444444
    }

    #site-header #site-navigation ul li.megamenu ul li ul li a:hover, #site-header #site-navigation ul li.megamenu ul li.current-menu-item > a {
        color: #e74c3c;
    }

    #site-header #site-navigation ul li.megamenu > ul > li > a, #site-header #site-navigation ul li.megamenu > ul > li > a:hover {
        color: #444444 !important
    }

    #site-logo {
        margin-top: 0px
    }

    #site-logo {
        margin-left: -5px
    }

    #site-logo img.retina-logo {
        width: 152px;
        height: 70px;
    }

    h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
        color: #2b2b2b
    }

    input[type='submit']:hover, button:hover, .more-link:hover {
        background-color: #2b2b2b
    }

    input[type='submit'], button, input[type='submit']:active, button:active, a.more-link, a.more-link:hover {
        color: #ffffff
    }

    a, .tag-links span:after {
        color: #999999
    }

    .post-entry-header .entry-meta, .post-entry-header .entry-meta a, .entry-meta-footer, .entry-meta-footer a {
        color: #999999
    }

    .page-header h1.page-title {
        color: #ffffff;
    }

    .page-header h1.page-title, .breadcrumbs-trail {
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
    }

    .breadcrumbs-trail, .breadcrumbs-trail a, .breadcrumbs-separator {
        color: #ffffff;
    }

    .breadcrumbs-trail a:hover {
        color: #efefef;
    }

    .blog article.post-entry {
        text-align: left
    }

    .single-post article.post-entry {
        text-align: left
    }

    #content h4.wpb_toggle {
        color: #454545
    }

    .flat-light .esg-sortbutton-order, .simple-light .esg-sortbutton-order, .minimal-light .esg-sortbutton-order {
        text-align: center;
    }

    .eg-search-wrapper .eg-search-submit {
        margin-left: 10px;
    }

    .page-id-143 #site-navigation ul li ul li.current-menu-item > a, .page-id-143 #site-navigation ul li ul li.current-menu-ancestor > a {
        background: none;
    }

    .page-id-143 #site-navigation ul li ul li.current-menu-item > a:hover {
        background: #f2f2f2;
    }
</style>
<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
<!--[if lte IE 9]>
<link rel="stylesheet" type="text/css"
      href="css/vc_lte_ie9.min.css"
      media="screen"><![endif]-->
<meta name="generator"
      content="Powered by Slider Revolution 5.4.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface."/>
<style type="text/css" data-type="vc_custom-css">
    .client-1 img {
        max-width: 156px;
    }

    .client-2 img {
        max-width: 134px;
    }

    .client-3 img {
        max-width: 138px;
    }

    .client-4 img {
        max-width: 162px;
    }
</style>
<style type="text/css" data-type="vc_shortcodes-custom-css">
    .vc_custom_1426712644596 {
        border-right-width: 1px !important;
        border-bottom-width: 1px !important;
        padding-right: 40px !important;
        padding-bottom: 40px !important;
        padding-left: 40px !important;
        border-right-color: #e2e2e2 !important;
        border-right-style: solid !important;
        border-bottom-color: #e2e2e2 !important;
        border-bottom-style: solid !important;
    }

    .vc_custom_1423656591442 {
        border-right-width: 1px !important;
        border-bottom-width: 1px !important;
        padding-right: 40px !important;
        padding-bottom: 40px !important;
        padding-left: 40px !important;
        border-right-color: #e2e2e2 !important;
        border-right-style: solid !important;
        border-bottom-color: #e2e2e2 !important;
        border-bottom-style: solid !important;
    }

    .vc_custom_1426712664252 {
        border-bottom-width: 1px !important;
        padding-right: 40px !important;
        padding-bottom: 40px !important;
        padding-left: 40px !important;
        border-bottom-color: #e2e2e2 !important;
        border-bottom-style: solid !important;
    }

    .vc_custom_1475495706682 {
        border-right-width: 1px !important;
        padding-top: 40px !important;
        padding-right: 40px !important;
        padding-bottom: 40px !important;
        padding-left: 40px !important;
        border-right-color: #e2e2e2 !important;
        border-right-style: solid !important;
    }

    .vc_custom_1475495710610 {
        border-right-width: 1px !important;
        padding-top: 40px !important;
        padding-right: 40px !important;
        padding-bottom: 40px !important;
        padding-left: 40px !important;
        border-right-color: #e2e2e2 !important;
        border-right-style: solid !important;
    }

    .vc_custom_1475495713905 {
        padding-top: 40px !important;
        padding-right: 40px !important;
        padding-bottom: 40px !important;
        padding-left: 40px !important;
    }

    .vc_custom_1426777723722 {
        padding-right: 60px !important;
    }</style>
<noscript>
    <style type="text/css"> .wpb_animate_when_almost_visible {
            opacity: 1;
        }</style>
</noscript>
<body>
<div id="wrapper">
    <header id="site-header" role="banner">
        <div id="header-wrapper">
            <div id="header-container" class="clearfix">
                <div id="site-logo">
                    <a href="/">
                        <img src="/images/craftsman_logo.png"
                             alt="Craftsman" class="default-logo"/>
                        <img src="/images/craftsman_logo@2x.png"
                             width="152" height="70" alt="Craftsman" class="retina-logo"/>
                    </a></div>

                <nav id="site-navigation" role="navigation">
                    <div class="menu-container">
                        <?$url = explode('/', $_SERVER['REQUEST_URI']);?>
                        <ul id="menu-main-menu" class="menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page <?=($_SERVER['REQUEST_URI'] == '/')?'current-menu-item':'';?>">
                                <a href="/">Главная</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page <?=(in_array('catalog', $url))?'current-menu-item':'';?>">
                                <a href="/catalog/">Каталог</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page <?=(in_array('gallery', $url))?'current-menu-item':'';?>">
                                <a href="/gallery">Галерея</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page <?=(in_array('about', $url))?'current-menu-item':'';?>">
                                <a href="/about">О компании</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page <?=(in_array('contacts', $url))?'current-menu-item':'';?>">
                                <a href="/contacts">Контакты</a>
                        </ul>
                    </div>
                    <div class="header_cart_wrapper">
                        <a href="" title="Отправьте заявку на обратный звонок" class="header_cart_link">
                            <span class="header_cart_button">
			                    <i class="fa fa-phone"></i>
					        </span>
                        </a>                       
                    </div>
                </nav><!-- #site-navigation -->

                <a href="#mobile-site-navigation" class="toggle-mobile-menu"><i class="fa fa-bars"></i></a>
            </div><!-- #header-container -->
        </div><!-- #header-wrapper -->
    </header><!-- #site-header -->

    <?= $content ?>

    <footer class="site-footer">
        <div class="wpb_row">

            <div class="footer-sidebar">
                <div class="row-inner">
                    <div class="vc_col-sm-4">
                        <div class="widget-area">
                            <aside id="text-2" class="widget widget_text"><h3 class="widget-title">About Craftsman</h3>			<div class="textwidget">Craftsman is a specialized theme for people who love to create, starting from potters to wood crafters. We provide you with all necessary tools to build your own website easily and continue creating.</div>
                            </aside>							</div>
                    </div>

                    <div class="vc_col-sm-4">
                        <div class="widget-area">
                            <aside id="text-4" class="widget widget_text"><h3 class="widget-title">Disclaimer</h3>			<div class="textwidget">All images used for preview are copyrighted by their respective owners. Suspendisse quis felis id risus laoreet suscipit. Etiam tincidunt id sem ac vestibulum.</div>
                            </aside>							</div>
                    </div>

                    <div class="vc_col-sm-4">
                        <div class="widget-area">
                            <aside id="text-6" class="widget widget_text">	
                                <div class="textwidget">                                    
                                    <ul>
                                        <li><a href="/">Главная</a></li>
                                        <li><a href="/catalog/">Каталог</a></li>
                                        <li><a href="/gallery">Галерея</a></li>
                                        <li><a href="/about">О компании</a></li>
                                        <li><a href="/contacts">Контакты</a></li>
                                    </ul>
                                </div>
                            </aside>							
                        </div>
                    </div>

                </div><!-- .row-inner -->
            </div>          
            
            
            <div class="site-info">
                <div class="row-inner">
                    <aside id="text-7" class="widget widget_text">
                        <div class="textwidget">
                            <div>
                                <div class="row-inner">
                                    <aside id="text-7" class="widget widget_text">
                                        <div class="textwidget">
                                            <span class="mnky-font-icon change-color" style="color:#e74c3c;">
                                                <i class="fa fa-facebook" style="font-size:22px; color:#bcbcbc; padding-left:15px; padding-right:15px;"></i>
                                            </span>                                            
                                            <span class="mnky-font-icon change-color" style="color:#e74c3c;">
                                                <i class="fa fa-dribbble" style="font-size:25px; color:#bcbcbc; padding-left:15px; padding-right:15px;"></i>
                                            </span>
                                            <span class="mnky-font-icon change-color" style="color:#e74c3c;">
                                                <i class="fa fa-twitter" style="font-size:28px; color:#bcbcbc; padding-left:15px; padding-right:15px;"></i>
                                            </span>
                                            <span class="mnky-font-icon change-color" style="color:#e74c3c;">
                                                <i class="fa fa-google-plus" style="font-size:24px; color:#bcbcbc; padding-left:15px; padding-right:15px;"></i>
                                            </span>
                                            <span class="mnky-font-icon change-color" style="color:#e74c3c;">
                                                <i class="fa fa-github" style="font-size:27px; color:#bcbcbc; padding-left:15px; padding-right:15px;"></i>
                                            </span>
                                            <span class="mnky-font-icon change-color" style="color:#e74c3c;">
                                                <i class="fa fa-instagram" style="font-size:25px; color:#bcbcbc; padding-left:15px; padding-right:15px;"></i>
                                            </span>
                                            <span class="mnky-font-icon change-color" style="color:#e74c3c;">
                                                <i class="fa fa-linkedin" style="font-size:23px; color:#bcbcbc; padding-left:15px; padding-right:15px;"></i>
                                            </span>
                                            <div class="vc_empty_space"
                                                style="height: 25px"> 
                                            </div>
                                        </div>
                                    </aside>
                                    <aside id="text-3"
                                           class="widget widget_text">
                                        <div class="textwidget">
                                            © developer cawatou                                            
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div><!-- .row-inner -->
                </div><!-- .footer-sidebar -->
            </div><!-- .wpb_row -->
    </footer><!-- .site-footer -->
    <a href="#top" class="scrollToTop scrollactive"><i class="fa fa-angle-up"></i></a>
</div>
<?php $this->endBody() ?>

<script type="text/javascript">
    var ajaxRevslider;

    jQuery(document).ready(function () {
        // CUSTOM AJAX CONTENT LOADING FUNCTION
        ajaxRevslider = function (obj) {

            // obj.type : Post Type
            // obj.id : ID of Content to Load
            // obj.aspectratio : The Aspect Ratio of the Container / Media
            // obj.selector : The Container Selector where the Content of Ajax will be injected. It is done via the Essential Grid on Return of Content

            var content = "";

            data = {};

            data.action = 'revslider_ajax_call_front';
            data.client_action = 'get_slider_html';
            data.token = '19d03b661a';
            data.type = obj.type;
            data.id = obj.id;
            data.aspectratio = obj.aspectratio;

            // SYNC AJAX REQUEST
            jQuery.ajax({
                type: "post",
                url: "http://mnkythemes.com/craftsman/wp-admin/admin-ajax.php",
                dataType: 'json',
                data: data,
                async: false,
                success: function (ret, textStatus, XMLHttpRequest) {
                    if (ret.success == true)
                        content = ret.data;
                },
                error: function (e) {
                    console.log(e);
                }
            });

            // FIRST RETURN THE CONTENT WHEN IT IS LOADED !!
            return content;
        };

        // CUSTOM AJAX FUNCTION TO REMOVE THE SLIDER
        var ajaxRemoveRevslider = function (obj) {
            return jQuery(obj.selector + " .rev_slider").revkill();
        };

        // EXTEND THE AJAX CONTENT LOADING TYPES WITH TYPE AND FUNCTION
        var extendessential = setInterval(function () {
            if (jQuery.fn.tpessential != undefined) {
                clearInterval(extendessential);
                if (typeof(jQuery.fn.tpessential.defaults) !== 'undefined') {
                    jQuery.fn.tpessential.defaults.ajaxTypes.push({
                        type: "revslider",
                        func: ajaxRevslider,
                        killfunc: ajaxRemoveRevslider,
                        openAnimationSpeed: 0.3
                    });
                    // type:  Name of the Post to load via Ajax into the Essential Grid Ajax Container
                    // func: the Function Name which is Called once the Item with the Post Type has been clicked
                    // killfunc: function to kill in case the Ajax Window going to be removed (before Remove function !
                    // openAnimationSpeed: how quick the Ajax Content window should be animated (default is 0.3)
                }
            }
        }, 30);
    });
</script>
<script>
    var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
    var htmlDivCss = ".tp-caption.roboto-normal-text,.roboto-normal-text{color:#ffffff;font-family:Roboto;font-size:16px;font-weight:400;text-decoration:none;white-space:nowrap;text-shadow:none;background-color:transparent;border-width:0px;border-color:rgb(255,255,255);border-style:none;white-space:nowrap;text-shadow:none}.tp-caption.roboto-normal-title,.roboto-normal-title{color:#ffffff;text-transform:uppercase;letter-spacing:1px;font-family:Roboto;font-size:24px;font-weight:400;text-decoration:none;white-space:nowrap;text-shadow:none;background-color:transparent;border-width:0px;border-color:rgb(255,255,255);border-style:none;text-transform:uppercase;letter-spacing:1px;white-space:nowrap;text-shadow:none}";
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement("div");
        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
    }
</script>
<script type="text/javascript">
    /******************************************
     -    PREPARE PLACEHOLDER FOR SLIDER    -
     ******************************************/

    var setREVStartSize = function () {
        try {
            var e = new Object, i = jQuery(window).width(), t = 9999, r = 0, n = 0, l = 0, f = 0, s = 0, h = 0;
            e.c = jQuery('#rev_slider_2_1');
            e.gridwidth = [980];
            e.gridheight = [400];

            e.sliderLayout = "fullscreen";
            e.fullScreenAutoWidth = 'off';
            e.fullScreenAlignForce = 'on';
            e.fullScreenOffsetContainer = '#logos';
            e.fullScreenOffset = '';
            e.minHeight = "200";
            if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                    f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                var u = (e.c.width(), jQuery(window).height());
                if (void 0 != e.fullScreenOffsetContainer) {
                    var c = e.fullScreenOffsetContainer.split(",");
                    if (c) jQuery.each(c, function (e, i) {
                        u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                    }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                }
                f = u
            } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
            e.c.closest(".rev_slider_wrapper").css({height: f})

        } catch (d) {
            //console.log("Failure at Presize of Slider:" + d)
        }
    };

    setREVStartSize();
    //  							console.log('xxxxxxxx ');
    // var tpj = jQuery;
    console.log($);
    console.log('xxxxxxxx');
    //tpj.noConflict();
    var revapi2;
    jQuery(document).ready(function () {
        if (jQuery("#rev_slider_2_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_2_1");
        } else {
            revapi2 = jQuery("#rev_slider_2_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "//mnkythemes.com/craftsman/wp-content/plugins/revslider/public/assets/js/",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        touchOnDesktop: "off",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                },
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: 980,
                gridheight: 400,
                lazyType: "none",
                minHeight: "200",
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "on",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "on",
                fullScreenOffsetContainer: "#logos",
                fullScreenOffset: "",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });
    /*ready*/
</script>
<script>
    var htmlDivCss = unescape(".videoisplaying%20.tp-video-play-button%20%7Bdisplay%3Anone%20%21important%3B%7D");
    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    }
    else {
        var htmlDiv = document.createElement('div');
        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
    }
</script>
<script type="text/javascript">
    var ajaxRevslider;

    jQuery(document).ready(function() {
        // CUSTOM AJAX CONTENT LOADING FUNCTION
        ajaxRevslider = function(obj) {

            // obj.type : Post Type
            // obj.id : ID of Content to Load
            // obj.aspectratio : The Aspect Ratio of the Container / Media
            // obj.selector : The Container Selector where the Content of Ajax will be injected. It is done via the Essential Grid on Return of Content

            var content = "";

            data = {};

            data.action = 'revslider_ajax_call_front';
            data.client_action = 'get_slider_html';
            data.token = 'd79c7dbcad';
            data.type = obj.type;
            data.id = obj.id;
            data.aspectratio = obj.aspectratio;

            // SYNC AJAX REQUEST
            jQuery.ajax({
                type:"post",
                url:"http://mnkythemes.com/craftsman/wp-admin/admin-ajax.php",
                dataType: 'json',
                data:data,
                async:false,
                success: function(ret, textStatus, XMLHttpRequest) {
                    if(ret.success == true)
                        content = ret.data;
                },
                error: function(e) {
                    console.log(e);
                }
            });

            // FIRST RETURN THE CONTENT WHEN IT IS LOADED !!
            return content;
        };

        // CUSTOM AJAX FUNCTION TO REMOVE THE SLIDER
        var ajaxRemoveRevslider = function(obj) {
            return jQuery(obj.selector+" .rev_slider").revkill();
        };

        // EXTEND THE AJAX CONTENT LOADING TYPES WITH TYPE AND FUNCTION
        var extendessential = setInterval(function() {
            if (jQuery.fn.tpessential != undefined) {
                clearInterval(extendessential);
                if(typeof(jQuery.fn.tpessential.defaults) !== 'undefined') {
                    jQuery.fn.tpessential.defaults.ajaxTypes.push({type:"revslider",func:ajaxRevslider,killfunc:ajaxRemoveRevslider,openAnimationSpeed:0.3});
                    // type:  Name of the Post to load via Ajax into the Essential Grid Ajax Container
                    // func: the Function Name which is Called once the Item with the Post Type has been clicked
                    // killfunc: function to kill in case the Ajax Window going to be removed (before Remove function !
                    // openAnimationSpeed: how quick the Ajax Content window should be animated (default is 0.3)
                }
            }
        },30);
    });
</script>
<script type="text/javascript">
    function eggbfc(winw,resultoption) {
        var lasttop = winw,
            lastbottom = 0,
            smallest =9999,
            largest = 0,
            samount = 0,
            lamoung = 0,
            lastamount = 0,
            resultid = 0,
            resultidb = 0,
            responsiveEntries = [
                { width:1400,amount:3,mmheight:0},
                { width:1170,amount:3,mmheight:0},
                { width:1024,amount:3,mmheight:0},
                { width:960,amount:3,mmheight:0},
                { width:778,amount:3,mmheight:0},
                { width:640,amount:3,mmheight:0},
                { width:480,amount:1,mmheight:0}
            ];
        if (responsiveEntries!=undefined && responsiveEntries.length>0)
            jQuery.each(responsiveEntries, function(index,obj) {
                var curw = obj.width != undefined ? obj.width : 0,
                    cura = obj.amount != undefined ? obj.amount : 0;
                if (smallest>curw) {
                    smallest = curw;
                    samount = cura;
                    resultidb = index;
                }
                if (largest<curw) {
                    largest = curw;
                    lamount = cura;
                }
                if (curw>lastbottom && curw<=lasttop) {
                    lastbottom = curw;
                    lastamount = cura;
                    resultid = index;
                }
            });
        if (smallest>winw) {
            lastamount = samount;
            resultid = resultidb;
        }
        var obj = new Object;
        obj.index = resultid;
        obj.column = lastamount;
        if (resultoption=="id")
            return obj;
        else
            return lastamount;
    }
    if ("cobbles"=="even") {
        var coh=0,
            container = jQuery("#esg-grid-1-1");
        var	cwidth = container.width(),
            ar = "4:3",
            gbfc = eggbfc(jQuery(window).width(),"id"),
            row = 20;
        ar = ar.split(":");
        aratio=parseInt(ar[0],0) / parseInt(ar[1],0);
        coh = cwidth / aratio;
        coh = coh/gbfc.column*row;
        var ul = container.find("ul").first();
        ul.css({display:"block",height:coh+"px"});
    }
    var essapi_1;
    jQuery(document).ready(function() {
        essapi_1 = jQuery("#esg-grid-1-1").tpessential({
            gridID:1,
            layout:"cobbles",
            forceFullWidth:"off",
            lazyLoad:"off",
            row:20,
            loadMoreAjaxToken:"3014499df0",
            loadMoreAjaxUrl:"http://mnkythemes.com/craftsman/wp-admin/admin-ajax.php",
            loadMoreAjaxAction:"Essential_Grid_Front_request_ajax",
            ajaxContentTarget:"ess-grid-ajax-container-",
            ajaxScrollToOffset:"0",
            ajaxCloseButton:"off",
            ajaxContentSliding:"on",
            ajaxScrollToOnLoad:"on",
            ajaxNavButton:"off",
            ajaxCloseType:"type1",
            ajaxCloseInner:"false",
            ajaxCloseStyle:"light",
            ajaxClosePosition:"tr",
            space:5,
            pageAnimation:"rotatescale",
            paginationScrollToTop:"off",
            spinner:"spinner-1",
            spinnerColor:"#FFFFFF",
            lightBoxMode:"all",
            cobblesPattern:"1x2,2x1,1x3,2x2,1x1,1x2,1x2,1x3,2x2,2x1,1x2,1x1",
            animSpeed:1000,
            delayBasic:1,
            mainhoverdelay:1,
            filterType:"single",
            showDropFilter:"hover",
            filterGroupClass:"esg-fgc-1",
            googleFonts:['Open+Sans:100,300,400,600,700'],
            aspectratio:"4:3",
            responsiveEntries: [
                { width:1400,amount:3,mmheight:0},
                { width:1170,amount:3,mmheight:0},
                { width:1024,amount:3,mmheight:0},
                { width:960,amount:3,mmheight:0},
                { width:778,amount:3,mmheight:0},
                { width:640,amount:3,mmheight:0},
                { width:480,amount:1,mmheight:0}
            ]
        });

        try{
            jQuery("#esg-grid-1-1 .esgbox").esgbox({
                padding : [0,0,0,0],
                width:800,
                height:600,
                minWidth:100,
                minHeight:100,
                maxWidth:9999,
                maxHeight:9999,
                autoPlay:false,
                playSpeed:3000,
                preload:3,
                beforeLoad:function() {
                },
                afterLoad:function() {
                    if (this.element.hasClass("esgboxhtml5")) {
                        this.type ="html5";
                        var mp = this.element.data("mp4"),
                            ogv = this.element.data("ogv"),
                            webm = this.element.data("webm");
                        ratio = this.element.data("ratio");
                        ratio = ratio==="16:9" ? "56.25%" : "75%"
                        this.content ='<div class="esg-lb-video-wrapper" style="width:100%"><video autoplay="true" loop=""  poster="" width="100%" height="auto"><source src="'+mp+'" type="video/mp4"><source src="'+webm+'" type="video/webm"><source src="'+ogv+'" type="video/ogg"></video></div>';
                    };
                },
                beforeShow : function () {
                    this.title = jQuery(this.element).attr('lgtitle');
                    if (this.title) {
                        this.title="";
                        this.title =  '<div style="padding:0px 0px 0px 0px">'+this.title+'</div>';
                    }
                },
                afterShow : function() {
                },
                openEffect : 'fade',
                closeEffect : 'fade',
                nextEffect : 'fade',
                prevEffect : 'fade',
                openSpeed : 'normal',
                closeSpeed : 'normal',
                nextSpeed : 'normal',
                prevSpeed : 'normal',
                helpers:{overlay:{locked:false}},
                helpers : {
                    media : {},
                    overlay: {
                        locked: false
                    },
                    title : {
                        type:""
                    }
                }
            });

        } catch (e) {}

    });
</script>
</body>
</html>
<?php $this->endPage() ?>
