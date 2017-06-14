<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'О компании';
$this->params['breadcrumbs'][] = $this->title;
if(isset($model)):?>
<div class="page-header">
	<div class="row-inner">
		<h1 class="page-title"><?=$this->title?></h1>
		<nav class="breadcrumbs-trail" role="navigation">
			<a href="/" class="home">Главная</a>
			<span class="breadcrumbs-separator">/</span> <?=$this->title?>
		</nav>
	</div>
</div>
	
<section class="wpb_row main_row  no-seperator" style="padding-top:70px; padding-bottom:0px;"><div class="row-inner row-inner-fixed"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h2><?=$model->title?></h2>
			<?=$model->description?>    
		</div>
	</div>
</section>
<?endif?>