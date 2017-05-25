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
<div id="content" class="no-top no-bottom">
    <!-- section begin -->
    <section id="section-portfolio" aria-label="section-portfolio" class="no-top no-bottom">
	<div class="container">

	    <div class="spacer-single"></div>

	</div>

	<div id="gallery" class="gallery full-gallery de-gallery pf_full_width pf_4_cols zoom-gallery">
	    <?if(isset($gallery_model)):?>
		<?foreach($gallery_model as $image):?>
		    <div class="item cat<?=$image->cat_id?>">
			<div class="picframe">
			    <a href="<?=$image->src?>">
				<span class="overlay">
				    
				</span>
				<span class="center-xy">
				    <i class="fa fa-search btn-action btn-action-hide"></i>
				</span>
				<img src="<?=$image->src?>" alt="" />
			    </a>
			    
			</div>
		    </div>
		<?endforeach?>	    
	    <?endif?>  
	</div>

    </section>
    <!-- section close -->
		
</div>
