<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'О компании';
$this->params['breadcrumbs'][] = $this->title;
if(isset($model)):?>
<?if(2 == 1):?>
<section id="subheader" data-stellar-background-ratio=".3" style="background-size: cover; background-position: 50% 0%;">
    <div class="container" style="background-size: cover;">
	<div class="row" style="background-size: cover;">
	    <div class="col-md-12" style="background-size: cover;">
		<h1><?=$this->title?></h1>
		<div class="small-border-deco" style="background-size: cover;"><span></span></div>
		<ul class="crumb">		
		    <li><a href="/">Главная</a></li>
		    <li class="sep"></li>
		    <li><?=$this->title?></li>
		</ul>
	    </div>
	</div>
    </div>
</section>
<div id="content" class="no-bottom no-top">
    <section id="section-news" data-bgcolor="#f5f5f5">
	<div class="container">
	    <div class="row">

		<div class="col-md-12">
		    <h2><?=$model->title?><span class="tiny-border"></span></h2>
		    <div class="text_descr"><?=$model->description?></div>
		</div>
	    </div>
	</div>
    </section>
</div>
<?endif?>

<section class="wpb_row main_row  no-seperator" style="padding-top:70px; padding-bottom:0px;"><div class="row-inner row-inner-fixed"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h2><?=$model->title?></h2>
			<?=$model->description?>    
		</div>
	</div>
</section>
<?endif?>