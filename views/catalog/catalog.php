<?php
/* @var $this yii\web\View */
$this->title = 'Каталог товара';
?>
<?if(isset($cat_model)){
    foreach($cat_model as $cat){
	$cat_link[$cat->id] = $cat->link;
    }
}?>
<div class="page-header">
    <div class="row-inner">
        <h1 class="page-title"><?=$this->title?></h1>
        <nav class="breadcrumbs-trail" role="navigation">
            <a href="/" class="home">Главная</a>
            <span class='breadcrumbs-separator'>/</span> Каталог
        </nav>
    </div><!-- .row-inner -->
</div><!-- .page-header -->


<div id="main" class="clearfix">
    <div id="container" class="row-inner">

        <div id="content" class="shop-template product-col-4">
            <article id="post-330" class="clearfix post-330 product type-product status-publish has-post-thumbnail product_cat-clothing product_cat-t-shirts first instock shipping-taxable purchasable product-type-simple" role="article">
                <div class="entry-content clearfix">
                    <h1 class="page-title"><?=$this->title?></h1>
                    <ul class="products">
                        <?if(isset($item_model)):?>
                            <?foreach($item_model as $item):?>
                                <li class="product type-product status-publish has-post-thumbnail product_cat-clothing product_cat-t-shirts first instock shipping-taxable purchasable product-type-simple">
                                    <a href="/catalog/item/<?=$item->id?>" class="woocommerce-LoopProduct-link">
                                        <div class="img-wrap">
                                            <img width="486" height="486"
                                               src="/images/shop/11.jpg"
                                               class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                               alt="<?=$item->title?>" title="<?=$item->title?>"                                                                   
                                               sizes="(max-width: 486px) 100vw, 486px"/>
                                        </div>
                                        <div class="product-inner">
                                            <h3><?=$item->title?></h3>
                                            <span class="price">
                                                <span class="woocommerce-Price-amount amount">
                                                   <?=$item->price?> руб/<?=$item->unit?>
                                                </span>
                                            </span>
                                           
                                        </div>
                                    </a>
                                    <a rel="nofollow" href="/catalog/item/<?=$item->id?>" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
                                        Сделать заказ
                                    </a>
                                </li>
                            <?endforeach?>
                        <?endif?>
                    </ul>    
                </div><!-- .entry-content -->
            </article>
        </div><!-- #content -->
    </div><!-- #container -->
</div><!-- #main  -->
<?$url = trim($_SERVER['REQUEST_URI'], '/');?>
<?echo "<pre>".print_r($url, 1)."</pre>";?>