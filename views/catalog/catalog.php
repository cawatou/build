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
        <h1 class="page-title">
            Merchandise Store </h1>
        <nav class="breadcrumbs-trail" role="navigation"><a href="http://mnkythemes.com/craftsman/" class="home">Home</a>
            <span class='breadcrumbs-separator'>/</span> Products
        </nav>
    </div><!-- .row-inner -->
</div><!-- .page-header -->


<div id="main" class="clearfix">
    <div id="container" class="row-inner">

        <div id="content" class="shop-template product-col-4">
            <article id="post-330"
                     class="clearfix post-330 product type-product status-publish has-post-thumbnail product_cat-clothing product_cat-t-shirts first instock shipping-taxable purchasable product-type-simple"
                     role="article">
                <div class="entry-content clearfix">


                    <h1 class="page-title">Merchandise Store</h1>


                    <p class="woocommerce-result-count">
                        Showing all 12 results</p>
                    <form class="woocommerce-ordering" method="get">
                        <select name="orderby" class="orderby">
                            <option value="menu_order">Default sorting</option>
                            <option value="popularity" selected='selected'>Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </form>

                    <ul class="products">
                    <?if(isset($item_model)):?>
                        <?foreach($item_model as $item):?>
                            <li class="product type-product status-publish has-post-thumbnail product_cat-clothing product_cat-t-shirts first instock shipping-taxable purchasable product-type-simple">
                                <a href="http://mnkythemes.com/craftsman/product/happy-ninja/"
                                   class="woocommerce-LoopProduct-link">
                                    <div class="img-wrap"><img width="486" height="486"
                                                               src="http://mnkythemes.com/craftsman/wp-content/uploads/2013/06/T_7_front-486x486.jpg"
                                                               class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                               alt="T_7_front" title="T_7_front"
                                                               srcset="http://mnkythemes.com/craftsman/wp-content/uploads/2013/06/T_7_front-486x486.jpg 486w, http://mnkythemes.com/craftsman/wp-content/uploads/2013/06/T_7_front-150x150.jpg 150w, http://mnkythemes.com/craftsman/wp-content/uploads/2013/06/T_7_front-300x300.jpg 300w, http://mnkythemes.com/craftsman/wp-content/uploads/2013/06/T_7_front-320x320.jpg 320w, http://mnkythemes.com/craftsman/wp-content/uploads/2013/06/T_7_front.jpg 1000w"
                                                               sizes="(max-width: 486px) 100vw, 486px"/></div>
                                    <div class="product-inner"><h3><?=$item->title?></h3>
                                        <span class="price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">&#36;</span>
                                                18.00
                                            </span>
                                        </span>
                                       
                                    </div>
                                </a>
                                <a rel="nofollow" href="/craftsman/shop/?orderby=popularity&#038;add-to-cart=330"
                                       data-quantity="1" data-product_id="330" data-product_sku=""
                                       class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to
                                    cart
                                </a>
                            </li>
                        <?endforeach?>
                    <?endif?>
                </div><!-- .entry-content -->
            </article>
        </div><!-- #content -->
    </div><!-- #container -->
</div><!-- #main  -->