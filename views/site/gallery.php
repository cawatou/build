<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\GallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Галерея';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-header">
	<div class="row-inner">
		<h1 class="page-title"><?=$this->title?></h1>
		<nav class="breadcrumbs-trail" role="navigation">
			<a href="/" class="home">Главная</a>
			<span class='breadcrumbs-separator'>/</span> <?=$this->title?>
		</nav>
	</div><!-- .row-inner -->
</div><!-- .page-header -->


<div id="main" class="clearfix">
	<div id="container" class="no-sidebar">
		<div id="content">
			<article class="clearfix page type-page status-publish hentry" role="article">
				<div class="entry-content clearfix">
					<section class="wpb_row main_row  no-seperator" style="padding-top:70px; padding-bottom:0px;">
						<div class="row-inner row-inner-fixed">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner ">
									<div class="wpb_wrapper">
										<div class="wpb_text_column wpb_content_element ">
											<div class="wpb_wrapper">
												<h2><?=$page->title?></h2>
												<p><?=$page->description?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="wpb_row main_row  no-seperator" style="padding-top:70px; padding-bottom:80px;">
						<div class="row-inner row-inner-fixed">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner ">
									<div class="wpb_wrapper">
										<!-- THE ESSENTIAL GRID 2.1.0.2 POST -->
										<article class="myportfolio-container craftsman-nav" id="esg-grid-1-1-wrap"
												 style="position: relative; z-index: 0; min-height: 100px; height: auto;">
											<div class="esg-container-fullscreen-forcer"
												 style="position:relative;left:0px;top:0px;width:100%;height:auto;">
												<div id="esg-grid-1-1" class="esg-grid esg-layout-even esg-container"
													 style="background-color: transparent;padding: 0px 0px 0px 0px ; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;">
													<article class="esg-filters esg-singlefilters"
															 style="margin-bottom: 25px; text-align: center; z-index: 70;">
														<!-- THE FILTER BUTTONS -->
														<div class="esg-filter-wrapper  esg-fgc-1"
															 style="margin-left: 2.5px; margin-right: 2.5px;">
															<div class="esg-filterbutton selected esg-allfilter"
																 data-filter="filterall" data-fid="-1"><span>Все элементы</span>
															</div>
															<?if(isset($gcat_model)):?>
																<?foreach($gcat_model as $cat):?>	
																	<div class="esg-filterbutton"
																		 data-filter="filter-<?=$cat->id?>">
																		<span><?=$cat->title?></span>
																		<span class="esg-filter-checked">
																			<i class="eg-icon-ok-1"></i>
																		</span>
																	</div>
																<?endforeach;?>	
															<?endif?>
															<div class="eg-clearfix"></div>
														</div>
													</article>
													<div class="esg-clear-no-height"></div>
													<div class="esg-overflowtrick" style="width: 100%; height: 2227px;">
														<ul class="mainul" style="height: 2227px;">
															<?if(isset($gallery_model)):?>
																<?foreach($gallery_model as $image):?>
																<li id="eg-1-post-id-1276"
																	class="filterall filter-<?=$image->cat_id?> eg-craftsman-wrapper tp-esg-item itemtoshow isvisiblenow"
																	style="opacity: 1; visibility: inherit; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0.01, 0.999992); display: block; height: 491px; width: 323px; top: 0px; left: 0px; transform-origin: left bottom 0px;">
																	<div class="esg-media-cover-wrapper">
																		<div class="esg-entry-media-wrapper"
																			 style="width:100%;height:100%;overflow:hidden;position:relative;">
																			<div class="esg-entry-media"
																				 style="padding-bottom: 152.012%;">
																				<img
																					src="<?=$image->src?>"
																					alt="" width="1600" height="1200"
																					style="display: none;">
																				<div class="esg-media-poster"
																					 src="<?=$image->src?>"
																					 data-src="<?=$image->src?>"
																					 data-lazythumb="undefined"
																					 style="
																						background-image: url(&quot;<?=$image->src?>&quot;);
																						visibility: inherit; opacity: 1;
																						transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
																						">
																				</div>
																			</div>
																		</div>
																		<div class="esg-entry-cover"
																			 style="visibility: visible; transform-style: flat; height: 491px;">

																			<div
																				class="esg-overlay esg-zoomback eg-craftsman-container"
																				data-delay="0"
																				style="visibility: hidden; opacity: 0;
																					transform-origin: 50% 50% 0px;
																					transform-style: flat;
																					transform: matrix3d(0.2, 0, 0, 0, 0, 0.2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
																					">

																			</div>

																			<div class="esg-cc eec" style="top: 194px;">
																				<div
																					class="esg-center eg-post-1276 eg-craftsman-element-0-a esg-zoomback"
																					data-delay="0.05"
																					style="visibility: hidden; opacity: 0; transform-origin: 50% 50% 0px; transform-style: flat;">
																					<a class="eg-craftsman-element-0 esgbox"
																					   href="<?=$image->src?>"
																					   lgtitle="Praesent porta" rel="group"><i
																							class="eg-icon-search"></i></a>
																				</div>
																				<div
																					class="esg-center eg-post-1276 eg-craftsman-element-1-a esg-zoomback"
																					data-delay="0.1"
																					style="visibility: hidden; opacity: 0; transform-origin: 50% 50% 0px; transform-style: flat;">
																					<a class="eg-craftsman-element-1"
																					   href="<?=$image->src?>"
																					   target="_self"><i
																							class="eg-icon-link"></i></a>
																				</div>
																				<div
																					class="esg-center eg-craftsman-element-6 esg-none esg-clear"
																					style="height: 5px; visibility: inherit; opacity: 1; transform-style: flat; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0.999167);"></div>
																				<div
																					class="esg-center eg-post-1276 eg-craftsman-element-3 esg-zoomback"
																					data-delay="0.15"
																					style="visibility: hidden; opacity: 0; transform-origin: 50% 50% 0px; transform-style: flat;">
																					<?=$image->title?>
																				</div>
																				<div
																					class="esg-center eg-craftsman-element-7 esg-none esg-clear"
																					style="height: 5px; visibility: inherit; opacity: 1; transform-style: flat; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0.999167);"></div>
																				<div></div>
																			</div>


																		</div>
																	</div>

																</li>
															<?endforeach;?>	
														<?endif?>	
														</ul>
													</div>
													<article class="esg-filters esg-singlefilters"
															 style="margin-top: 0px; text-align: center; z-index: 69;">
														<div class="esg-pagination  esg-fgc-1"
															 style="margin-left: 2.5px; margin-right: 2.5px; display: none;">
															<div
																class="esg-navigationbutton esg-filterbutton esg-pagination-button selected"
																data-page="0"
																style="display: none; visibility: visible;">1
															</div>
														</div>
													</article>
													<div class="esg-clear-no-height"></div>
												</div>
											</div>

											<div class="esg-loader spinner-1" style="visibility: hidden; opacity: 0;">
												<div class="dot1"></div>
												<div class="dot2"></div>
												<div class="bounce1"></div>
												<div class="bounce2"></div>
												<div class="bounce3"></div>
											</div>
											<div class="esg-relative-placeholder" style="width:100%;height:auto"></div>
										</article>
										<div class="clear"></div>

									</div>
								</div>
							</div>
						</div>
					</section>
				</div><!-- .entry-content -->
			</article>
		</div><!-- #content -->
	</div><!-- #container -->
</div>

<style>
	.esg-cc {
		height: 50% !important;
	}

	a.eg-henryharrison-element-1, a.eg-henryharrison-element-2 {
		-webkit-transition: all .4s linear;
		-moz-transition: all .4s linear;
		-o-transition: all .4s linear;
		-ms-transition: all .4s linear;
		transition: all .4s linear
	}

	.eg-jimmy-carter-element-11 i:before {
		margin-left: 0px;
		margin-right: 0px
	}

	.eg-harding-element-17 {
		letter-spacing: 1px
	}

	.eg-harding-wrapper .esg-entry-media {
		overflow: hidden;
		box-sizing: border-box;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		padding: 30px 30px 0px 30px
	}

	.eg-harding-wrapper .esg-entry-media img {
		overflow: hidden;
		border-radius: 50%;
		-webkit-border-radius: 50%;
		-moz-border-radius: 50%
	}

	.eg-ulysses-s-grant-wrapper .esg-entry-media {
		overflow: hidden;
		box-sizing: border-box;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		padding: 30px 30px 0px 30px
	}

	.eg-ulysses-s-grant-wrapper .esg-entry-media img {
		overflow: hidden;
		border-radius: 50%;
		-webkit-border-radius: 50%;
		-moz-border-radius: 50%
	}

	.eg-richard-nixon-wrapper .esg-entry-media {
		overflow: hidden;
		box-sizing: border-box;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		padding: 30px 30px 0px 30px
	}

	.eg-richard-nixon-wrapper .esg-entry-media img {
		overflow: hidden;
		border-radius: 50%;
		-webkit-border-radius: 50%;
		-moz-border-radius: 50%
	}

	.eg-herbert-hoover-wrapper .esg-entry-media img {
		filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");
		filter: gray;
		-webkit-filter: grayscale(100%)
	}

	.eg-herbert-hoover-wrapper:hover .esg-entry-media img {
		filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");
		-webkit-filter: grayscale(0%)
	}

	.eg-lyndon-johnson-wrapper .esg-entry-media img {
		filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");
		filter: gray;
		-webkit-filter: grayscale(100%)
	}

	.eg-lyndon-johnson-wrapper:hover .esg-entry-media img {
		filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");
		-webkit-filter: grayscale(0%)
	}

	.esg-overlay.eg-ronald-reagan-container {
		background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(50%, rgba(0, 0, 0, 0)), color-stop(99%, rgba(0, 0, 0, 0.83)), color-stop(100%, rgba(0, 0, 0, 0.85)));
		background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
		background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
		background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
		background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#d9000000', GradientType=0)
	}

	.eg-georgebush-wrapper .esg-entry-cover {
		background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(50%, rgba(0, 0, 0, 0)), color-stop(99%, rgba(0, 0, 0, 0.83)), color-stop(100%, rgba(0, 0, 0, 0.85)));
		background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
		background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
		background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
		background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#d9000000', GradientType=0)
	}

	.eg-jefferson-wrapper {
		-webkit-border-radius: 5px !important;
		-moz-border-radius: 5px !important;
		border-radius: 5px !important;
		-webkit-mask-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC) !important
	}

	.eg-monroe-element-1 {
		text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1)
	}

	.eg-lyndon-johnson-wrapper .esg-entry-cover {
		background: -moz-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.35) 0%, rgba(18, 18, 18, 0) 96%, rgba(19, 19, 19, 0) 100%);
		background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(0, 0, 0, 0.35)), color-stop(96%, rgba(18, 18, 18, 0)), color-stop(100%, rgba(19, 19, 19, 0)));
		background: -webkit-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.35) 0%, rgba(18, 18, 18, 0) 96%, rgba(19, 19, 19, 0) 100%);
		background: -o-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.35) 0%, rgba(18, 18, 18, 0) 96%, rgba(19, 19, 19, 0) 100%);
		background: -ms-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.35) 0%, rgba(18, 18, 18, 0) 96%, rgba(19, 19, 19, 0) 100%);
		background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.35) 0%, rgba(18, 18, 18, 0) 96%, rgba(19, 19, 19, 0) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#59000000', endColorstr='#00131313', GradientType=1)
	}

	.eg-wilbert-wrapper .esg-entry-cover {
		background: -moz-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.35) 0%, rgba(18, 18, 18, 0) 96%, rgba(19, 19, 19, 0) 100%);
		background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(0, 0, 0, 0.35)), color-stop(96%, rgba(18, 18, 18, 0)), color-stop(100%, rgba(19, 19, 19, 0)));
		background: -webkit-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.35) 0%, rgba(18, 18, 18, 0) 96%, rgba(19, 19, 19, 0) 100%);
		background: -o-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.35) 0%, rgba(18, 18, 18, 0) 96%, rgba(19, 19, 19, 0) 100%);
		background: -ms-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.35) 0%, rgba(18, 18, 18, 0) 96%, rgba(19, 19, 19, 0) 100%);
		background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.35) 0%, rgba(18, 18, 18, 0) 96%, rgba(19, 19, 19, 0) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#59000000', endColorstr='#00131313', GradientType=1)
	}

	.eg-wilbert-wrapper .esg-entry-media img {
		-webkit-transition: 0.4s ease-in-out;
		-moz-transition: 0.4s ease-in-out;
		-o-transition: 0.4s ease-in-out;
		transition: 0.4s ease-in-out;
		filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");
		filter: gray;
		-webkit-filter: grayscale(100%)
	}

	.eg-wilbert-wrapper:hover .esg-entry-media img {
		filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");
		-webkit-filter: grayscale(0%)
	}

	.eg-phillie-element-3:after {
		content: " ";
		width: 0px;
		height: 0px;
		border-style: solid;
		border-width: 5px 5px 0 5px;
		border-color: #000 transparent transparent transparent;
		left: 50%;
		margin-left: -5px;
		bottom: -5px;
		position: absolute
	}

	.eg-howardtaft-wrapper .esg-entry-media img, .eg-howardtaft-wrapper .esg-media-poster {
		filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");
		-webkit-filter: grayscale(0%)
	}

	.eg-howardtaft-wrapper:hover .esg-entry-media img, .eg-howardtaft-wrapper:hover .esg-media-poster {
		filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");
		filter: gray;
		-webkit-filter: grayscale(100%)
	}

	.myportfolio-container .added_to_cart.wc-forward {
		font-family: "Open Sans";
		font-size: 13px;
		color: #fff;
		margin-top: 10px
	}

	.esgbox-title.esgbox-title-outside-wrap {
		font-size: 15px;
		font-weight: 700;
		text-align: center
	}

	.esgbox-title.esgbox-title-inside-wrap {
		padding-bottom: 10px;
		font-size: 15px;
		font-weight: 700;
		text-align: center
	}

	.esg-content.eg-twitterstream-element-33-a {
		display: inline-block
	}

	.eg-twitterstream-element-35 {
		word-break: break-all
	}

	.esg-overlay.eg-twitterstream-container {
		background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(50%, rgba(0, 0, 0, 0)), color-stop(99%, rgba(0, 0, 0, 0.83)), color-stop(100%, rgba(0, 0, 0, 0.85)));
		background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
		background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
		background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
		background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#d9000000', GradientType=0)
	}

	.esg-content.eg-facebookstream-element-33-a {
		display: inline-block
	}

	.eg-facebookstream-element-0 {
		word-break: break-all
	}
	.esg-overlay.eg-flickrstream-container{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}


.craftsman-nav .navigationbuttons, .craftsman-nav .esg-pagination, .craftsman-nav .esg-filters {
		text-transform: uppercase;
		text-align: center
	}

	.craftsman-nav .esg-filterbutton, .craftsman-nav .esg-navigationbutton, .craftsman-nav .esg-sortbutton, .craftsman-nav .esg-cartbutton {
		color: #222;
		margin-right: 5px;
		cursor: pointer;
		position: relative;
		z-index: 2;
		padding: 1px 15px;
		border: none;
		line-height: 38px;
		border-radius: 5px;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		font-size: 12px;
		font-family: "Open Sans", sans-serif;
		font-weight: 600;
		display: inline-block;
		margin-bottom: 5px;
		-webkit-transition: color 0.10s ease-in-out;
		-moz-transition: color 0.10s ease-in-out;
		transition: color 0.10s ease-in-out
	}

	.craftsman-nav .esg-navigationbutton {
		padding: 2px 5px
	}

	.craftsman-nav .esg-navigationbutton * {
		color: #222;
		-webkit-transition: color 0.10s ease-in-out;
		-moz-transition: color 0.10s ease-in-out;
		transition: color 0.10s ease-in-out
	}

	.craftsman-nav .esg-pagination-button:last-child {
		margin-right: 0
	}

	.craftsman-nav .esg-sortbutton-wrapper, .craftsman-nav .esg-cartbutton-wrapper {
		display: inline-block
	}

	.craftsman-nav .esg-sortbutton-order, .craftsman-nav .esg-cartbutton-order {
		display: inline-block;
		vertical-align: top;
		border: none;
		width: 20px;
		line-height: 40px;
		border-radius: 5px;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		font-size: 12px;
		font-weight: 600;
		color: #222;
		cursor: pointer;
		margin-left: 5px;
		-webkit-transition: color 0.10s ease-in-out;
		-moz-transition: color 0.10s ease-in-out;
		transition: color 0.10s ease-in-out
	}

	.craftsman-nav .esg-cartbutton {
		color: #fff;
		cursor: default !important
	}

	.craftsman-nav .esg-cartbutton .esgicon-basket {
		color: #fff;
		font-size: 15px;
		line-height: 15px;
		margin-right: 10px
	}

	.craftsman-nav .esg-cartbutton-wrapper {
		cursor: default !important
	}

	.craftsman-nav .esg-sortbutton, .craftsman-nav .esg-cartbutton {
		display: inline-block;
		position: relative;
		cursor: pointer;
		margin-right: 0px;
		border-radius: 5px;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px
	}

	.craftsman-nav .esg-navigationbutton:hover, .craftsman-nav .esg-filterbutton:hover, .craftsman-nav .esg-sortbutton:hover, .craftsman-nav .esg-sortbutton-order:hover, .craftsman-nav .esg-cartbutton-order:hover, .craftsman-nav .esg-filterbutton.selected {
		border-color: none;
		color: #e74c3c
	}

	.craftsman-nav .esg-filterbutton.selected span {
		border-bottom: 2px solid #e74c3c
	}

	.craftsman-nav .esg-navigationbutton:hover * {
		color: #e74c3c
	}

	.craftsman-nav .esg-sortbutton-order.tp-desc:hover {
		color: #e74c3c
	}

	.craftsman-nav .esg-filter-checked {
		padding: 1px 3px;
		color: #999;
		background: #999;
		margin-left: 7px;
		font-size: 9px;
		font-weight: 300;
		line-height: 9px;
		vertical-align: middle
	}

	.craftsman-nav .esg-filterbutton.selected .esg-filter-checked, .craftsman-nav .esg-filterbutton:hover .esg-filter-checked {
		padding: 1px 3px 1px 3px;
		color: #fff;
		background: #000;
		margin-left: 7px;
		font-size: 9px;
		font-weight: 300;
		line-height: 9px;
		vertical-align: middle
	}
	.eg-craftsman-element-0 {
		font-size: 16px;
		line-height: 22px;
		color: #fff;
		font-weight: 400;
		padding: 17px 17px 17px 17px;
		border-radius: 60px 60px 60px 60px;
		background-color: rgba(255, 255, 255, 0.10);
		z-index: 2 !important;
		display: block;
		border-top-width: 0px;
		border-right-width: 0px;
		border-bottom-width: 0px;
		border-left-width: 0px;
		border-color: #ffffff;
		border-style: solid
	}

	.eg-craftsman-element-1 {
		font-size: 16px;
		line-height: 22px;
		color: #fff;
		font-weight: 400;
		padding: 17px 17px 17px 17px;
		border-radius: 60px 60px 60px 60px;
		background-color: rgba(255, 255, 255, 0.10);
		z-index: 2 !important;
		display: block;
		border-top-width: 0px;
		border-right-width: 0px;
		border-bottom-width: 0px;
		border-left-width: 0px;
		border-color: #ffffff;
		border-style: solid
	}

	.eg-craftsman-element-3 {
		font-size: 16px;
		line-height: 20px;
		color: #ffffff;
		font-weight: 600;
		display: inline-block;
		float: none;
		clear: both;
		margin: 15px 0px 0px 0px;
		padding: 0px 0px 0px 0px;
		border-radius: 0px 0px 0px 0px;
		background-color: rgba(0, 10, 0, 0);
		position: relative;
		z-index: 2 !important;
		font-family: Roboto;
		text-transform: uppercase
	}
	
	.eg-craftsman-element-0:hover {
		font-size: 16px;
		line-height: 22px;
		color: #e74c3c;
		font-weight: 400;
		border-radius: 60px 60px 60px 60px;
		background-color: rgba(255, 255, 255, 1.00);
		border-top-width: 0px;
		border-right-width: 0px;
		border-bottom-width: 0px;
		border-left-width: 0px;
		border-color: #ffffff;
		border-style: solid
	}

	.eg-craftsman-element-1:hover {
		font-size: 16px;
		line-height: 22px;
		color: #e74c3c;
		font-weight: 400;
		border-radius: 60px 60px 60px 60px;
		background-color: rgba(255, 255, 255, 1.00);
		border-top-width: 0px;
		border-right-width: 0px;
		border-bottom-width: 0px;
		border-left-width: 0px;
		border-color: #ffffff;
		border-style: solid
	}
	.eg-craftsman-element-0-a {
		display: inline-block;
		float: none;
		clear: none;
		margin: 0px 10px 0px 0px;
		position: relative
	}
	.eg-craftsman-element-1-a {
		display: inline-block;
		float: none;
		clear: none;
		margin: 0px 0px 0px 0px;
		position: relative
	}
	.eg-craftsman-container {
		background-color: rgba(231, 76, 60, 1.00)
	}
	.eg-craftsman-content {
		background-color: #ffffff;
		padding: 0px 0px 0px 0px;
		border-width: 0px 0px 0px 0px;
		border-radius: 0px 0px 0px 0px;
		border-color: transparent;
		border-style: none;
		text-align: center
	}
	.esg-grid .mainul li.eg-craftsman-wrapper {
		background-color: #ffffff;
		padding: 0px 0px 0px 0px;
		border-width: 0px 0px 0px 0px;
		border-radius: 0px 0px 0px 0px;
		border-color: transparent;
		border-style: none
	}
	.esg-grid .mainul li.eg-craftsman-wrapper .esg-media-poster {
		background-size: cover;
		background-position: center center;
		background-repeat: no-repeat
	}
</style>