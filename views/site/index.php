<?php
/* @var $this yii\web\View */
$this->title = 'Главная';
?>
<? if (isset($cat_model)) {
    foreach ($cat_model as $cat) {
        $cat_link[$cat->id] = $cat->link;
    }
    //echo "<pre>".print_r($slider_model, 1)."</pre>";
} ?>
<div id="main" class="clearfix">
    <div id="container" class="no-sidebar">
        <div id="content">
            <article id="post-7" class="clearfix post-7 page type-page status-publish hentry" role="article">
                <div class="entry-content clearfix">
                    <section class="wpb_row main_row  no-seperator" style="padding-top:0px; padding-bottom:0px;">
                        <div class="row-inner row-inner-full">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <section class="wpb_wrapper">
                                        <div class="wpb_revslider_element wpb_content_element">
                                            <link href="http://fonts.googleapis.com/css?family=Roboto:400"
                                                  rel="stylesheet" property="stylesheet" type="text/css"
                                                  media="all">
                                            <div id="rev_slider_2_1_wrapper"
                                                 class="rev_slider_wrapper fullscreen-container"
                                                 data-source="gallery" style="background:#ffffff;padding:0px;">
                                                <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->

                                                <div id="rev_slider_2_1" class="rev_slider fullscreenbanner"
                                                     style="display:none;" data-version="5.4.1">
                                                    <ul>    <!-- SLIDE  -->
                                                        <? foreach ($slider_model as $slider): ?>
                                                            <li data-index="rs-7" data-transition="fade"
                                                                data-slotamount="7" data-hideafterloop="0"
                                                                data-hideslideonmobile="off" data-easein="default"
                                                                data-easeout="default" data-masterspeed="500"
                                                                data-delay="9000" data-rotate="0"
                                                                data-saveperformance="off"
                                                                data-title="Cover Image Slide" data-param1=""
                                                                data-param2="" data-param3="" data-param4=""
                                                                data-param5="" data-param6="" data-param7=""
                                                                data-param8="" data-param9="" data-param10=""
                                                                data-description="">
                                                                <!-- MAIN IMAGE -->
                                                                <img
                                                                    src="<?= $slider->img ?>"
                                                                    alt="" title="tools" width="1400" height="1137"
                                                                    data-bgposition="center center" data-bgfit="cover"
                                                                    data-bgrepeat="no-repeat" class="rev-slidebg"
                                                                    data-no-retina>
                                                                <!-- LAYERS -->

                                                                <!-- LAYER NR. 1 -->
                                                                <div class="tp-caption   tp-resizeme tp-svg-layer"
                                                                     id="slide-7-layer-2"
                                                                     data-x="center" data-hoffset=""
                                                                     data-y="bottom" data-voffset="20"
                                                                     data-width="['35']"
                                                                     data-height="['35']"

                                                                     data-type="svg"
                                                                     data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                                                                     data-svg_src="http://mnkythemes.com/craftsman/wp-content/plugins/revslider/public/assets/assets/svg/hardware/ic_keyboard_arrow_right_24px.svg"
                                                                     data-svg_idle="sc:transparent;sw:0;sda:0;sdo:0;"
                                                                     data-responsive_offset="on"

                                                                     data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":3000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                                                     data-textAlign="['left','left','left','left']"
                                                                     data-paddingtop="[0,0,0,0]"
                                                                     data-paddingright="[0,0,0,0]"
                                                                     data-paddingbottom="[0,0,0,0]"
                                                                     data-paddingleft="[0,0,0,0]"

                                                                     style="z-index: 5; min-width: 35px; max-width: 35px; max-width: 35px; max-width: 35px; color: rgba(255,255,255,1);cursor:pointer;"></div>
                                                            </li>
                                                        <? endforeach ?>


                                                    </ul>
                                                    <? // Описание в слайдере?>
                                                    <? if (0): ?>
                                                        <div style="" class="tp-static-layers">

                                                            <!-- LAYER NR. 4 -->
                                                            <div
                                                                class="tp-caption roboto-normal-text   tp-resizeme tp-static-layer"
                                                                id="slider-2-layer-3"
                                                                data-x="center" data-hoffset=""
                                                                data-y="bottom" data-voffset="70"
                                                                data-width="['auto']"
                                                                data-height="['auto']"

                                                                data-type="text"
                                                                data-responsive_offset="on"

                                                                data-startslide="0"
                                                                data-endslide="1"
                                                                data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                                                data-textAlign="['center','center','center','center']"
                                                                data-paddingtop="[0,0,0,0]"
                                                                data-paddingright="[0,0,0,0]"
                                                                data-paddingbottom="[0,0,0,0]"
                                                                data-paddingleft="[0,0,0,0]"

                                                                style="z-index: 8; white-space: nowrap; line-height: 22px; color: rgba(255,255,255,1);">
                                                                Craftsman is a specialized theme for people who love to
                                                                create, starting from potters to wood crafters.<br/>We
                                                                provide you with all necessary tools to build your own
                                                                website easily and continue creating.<br/></div>

                                                            <!-- LAYER NR. 5 -->
                                                            <div
                                                                class="tp-caption roboto-normal-title   tp-resizeme tp-static-layer"
                                                                id="slider-2-layer-4"
                                                                data-x="center" data-hoffset=""
                                                                data-y="bottom" data-voffset="130"
                                                                data-width="['auto']"
                                                                data-height="['auto']"

                                                                data-type="text"
                                                                data-responsive_offset="on"

                                                                data-startslide="0"
                                                                data-endslide="1"
                                                                data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                                                data-textAlign="['center','center','center','center']"
                                                                data-paddingtop="[0,0,0,0]"
                                                                data-paddingright="[0,0,0,0]"
                                                                data-paddingbottom="[0,0,0,0]"
                                                                data-paddingleft="[0,0,0,0]"

                                                                style="z-index: 9; white-space: nowrap; line-height: 22px; color: rgba(255,255,255,1);text-transform:none;">
                                                                test.
                                                            </div>
                                                        </div>
                                                    <? endif ?>
                                                    <div class="tp-bannertimer tp-bottom"
                                                         style="visibility: hidden !important;"></div>
                                                </div>
                                            </div><!-- END REVOLUTION SLIDER -->
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="wpb_row main_row  no-seperator" style="text-align:center; padding-top:50px; padding-bottom:150px;">
                        <div class="row-inner row-inner-fixed">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="heading_wrapper">
                                            <h2><?=$main_page->title?></h2>
                                            <div class="heading_subtitle">
                                                <?=$main_page->description?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div><!-- .entry-content -->
            </article>
        </div><!-- #content -->
    </div><!-- #container -->
</div><!-- #main  -->