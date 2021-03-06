<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
foreach($cat_model as $cat){
	$category[$cat->id] = $cat->name;
}
?>
<?if(isset($item_model)):
	//echo "<pre>".print_r($cat_model, 1)."</pre>";
	$this->title = $item_model->title;
	$this->params['breadcrumbs'][] = $this->title;?>
	<div class="page-header">
		<div class="row-inner">
			<h1 class="page-title"><?=$this->title?></h1>
			<nav class="breadcrumbs-trail" role="navigation">
				<a href="/" class="home">Главная</a> 
				<span class="breadcrumbs-separator">/</span> 
				<a href="/catalog/" title="Products">Каталог</a> 
				<span class="breadcrumbs-separator">/</span> <?=$this->title?>
			</nav>			
		</div>
	</div>


	<div id="main" class="clearfix">
		<div id="container" class="row-inner">
			<div id="content" class="shop-template product-col-4">
				<article class="clearfix product type-product status-publish has-post-thumbnail shipping-taxable purchasable product-type-simple">
					<div class="entry-content clearfix">
						<div class="product shipping-taxable purchasable product-type-simple">
							<div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
								style="opacity: 1; transition: opacity 0.25s ease-in-out;">
								<figure class="woocommerce-product-gallery__wrapper">
									<div class="woocommerce-product-gallery__image">
										<img
											width="1000" height="1000"
											src="<?=($item_model->img != 'none')? $item_model->img : '/images/shop/11.jpg'?>"
											class="attachment-shop_single size-shop_single wp-post-image" alt=""
											title=""
											sizes="(max-width: 1000px) 100vw, 1000px">
									</div>									
								</figure>
							</div>

							<div class="summary entry-summary">
								<h1 class="product_title entry-title"><?=$item_model->title?></h1>
								<p class="price">
									<span class="woocommerce-Price-amount amount">
										<span class="woocommerce-Price-currencySymbol"></span><?=$item_model->price?> руб./<?=$item_model->unit?>
									</span>
								</p>
								<div class="woocommerce-product-details__short-description">
									<?if(isset($item_model->color)):?><p>Цвет: <?=$item_model->color?></p><?endif?>
									<?if(isset($item_model->size)):?><p>Размер: <?=$item_model->size?></p><?endif?>
									<p>Категория: <?=$category[$item_model->cat_id]?></p>
								</div>
							</div>

							<div class="woocommerce-tabs wc-tabs-wrapper">								
								<div
									class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab"
									id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews"
									style="display: block;">
									<div id="reviews" class="woocommerce-Reviews">
													

										<div id="review_form_wrapper">
											<div id="review_form">
												<div id="respond" class="comment-respond">
													<form id="order_form">
														<p class="comment-form-comment">
															<label for="comment">Отправить заявку</label><br>
															<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" placeholder="Ваше сообщение"></textarea>
														</p>
														<div class="comment-form-info-fields col_container">
															<div class="col_3 comment-form-author">
																<label for="author">Имя</label>
																<input id="name" name="name" type="text" size="30">
															</div>
															<div class="col_3 comment-form-email">
																<label for="email">Email</label>
																<input id="email" name="email" type="text" size="30">
															</div>
															<div class="col_3 comment-form-url">
																<label for="url">Телефон</label>
																<input id="url" name="phone" type="text" size="30">
															</div>
														</div>
														<input type="hidden" name="item_title" value="<?=$item_model->title?>">
														<br>
														<p class="form-submit">
															<input type="submit" id="sbmt_btn" value="Отправить">
														</p>
													</form>
												</div><!-- #respond -->
											</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- .entry-content -->
				</article>
			</div><!-- #content -->
		</div><!-- #container -->
	</div>	
<?endif?>