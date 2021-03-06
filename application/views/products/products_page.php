<!-- PAGE TITLE 1 -->
            <div class="page-title-bg indent-header-1 page-main-content m-bot-40">
                <div class="container">
                    <div class="page-title-container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2><a href="javascript:void(0)">Projects</a></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="breadcrumb">
                                    <li><a class="a-invert" href="<?php echo config_item('root_dir');?>">HOME</a></li>
                                    <li class="active"><a href="javascript:void(0)">Projects</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- breadcrumbs -->
            <div class="breadcrumbs">
                <div class="container">
                    <ol class="breadcrumb breadcrumb--ys pull-left">
                        <li class="home-link"><a href="<?php echo config_item('root_dir');?>" class="icon icon-home"></a></li>
                        <li class="active"><a href="javascript:void(0)">Projects</a></li>
                    </ol>
                </div>
            </div>
            <!-- /breadcrumbs -->
            <!-- CONTENT section -->
            <div id="pageContent">
                <div class="container">
                    <!-- two columns -->
                    <div class="row">
                        <!-- left column -->
                        <aside class="col-md-4 col-lg-3 col-xl-2" id="leftColumn">
                            <a href="#" class="slide-column-close visible-sm visible-xs"><span class="icon icon-chevron_left"></span>back</a>
                            <div class="filters-block visible-xs">
                                <div class="filters-row__select">
                                    <label>Sort by: </label>
                                    <div class="select-wrapper">
                                        <select class="select--ys">
										<option>Position</option>
										<option>Price</option>
										<option>Rating</option>
									</select>
                                    </div>
                                    <a href="#" class="sort-direction icon icon-arrow_back"></a>
                                </div>
                                <div class="filters-row__select">
                                    <label>Show: </label>
                                    <div class="select-wrapper">
                                        <select class="select--ys">
										<option>25</option>
										<option>50</option>
										<option>100</option>
									</select>
                                    </div>
                                </div>
                                <a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a>
                            </div>
                            <!-- shopping by block -->
                            <?php /* <div class="collapse-block open">
                                <h4 class="collapse-block__title">SHOPPING BY:</h4>
                                <div class="collapse-block__content">
                                    <ul class="filter-list">
                                        <li> Color: <span>White</span><a href="#" class="icon icon-clear icon-to-right"></a> </li>
                                        <li> Size: <span>S</span><a href="#" class="icon icon-clear icon-to-right"></a> </li>
                                    </ul>
                                    <a class="btn btn--ys btn--sm btn--light">Clear All</a>
                                </div>
                            </div> */ ?>
                            <!-- /shopping by block -->
                            <!-- category block -->
                            <div class="collapse-block open">
                                <h4 class="collapse-block__title ">ALL CATEGORY</h4>
                                <div class="collapse-block__content">
                                    <ul class="expander-list">
                                       <?php foreach($list_category as $l){ // print_r($l); ?>
                                        <li class="active">
                                            <a href="javascript:void(0)"><?php echo $l['cat_name'];?></a>
                                            <?php if($l['subcat']!=''){ // explode(delimiter, string) ?>
                                            <span class="expander"></span>
                                            <ul>
                                                <?php $list_subcat_str=explode('|',$l['subcat']); foreach($list_subcat_str as $ls){
                                                      $subcat=explode('~',$ls); if(isset($subcat[1])&&$subcat[1]!==''){ ?>
                                                    <li><a href="javascript:void(0)"><?php echo $subcat[1];?></a></li>
                                                <?php } } ?>
                                            </ul>
                                        </li>
                                        <?php } } ?>
                                        <!-- <li>
                                            <a href="#">KITCHENS</a><span class="expander"></span>
                                            <ul>
                                                <li><a href="#">Modular Kitchen</a></li>
                                                <li><a href="#">Accesories & Fittings</a></li>
                                                <li><a href="#">Faucets & Sinks</a></li>
                                                <li><a href="#">Slabs and Tops</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">ELECTRICAL</a><span class="expander"></span>
                                            <ul>
                                                <li><a href="#">Conduits, Cables & Wires</a></li>
                                                <li><a href="#">Switches & DBS</a></li>
                                                <li><a href="#">LED Lights</a></li>
                                                <li><a href="#">Decorative Lights</a></li>
                                                <li><a href="#">Fans</a></li>
                                                <li><a href="#">CC </a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                            <!-- /category block -->
                            <!-- price slider block -->
                           <?php /* <div class="collapse-block open">
                                <h4 class="collapse-block__title">PRICE</h4>
                                <div class="collapse-block__content">
                                    <div id="priceSlider" class="price-slider"></div>
                                    <form action="#">
                                        <div class="price-input">
                                            <label>From:</label>
                                            <input type="text" id="priceMin" />
                                        </div>
                                        <div class="price-input-divider">-</div>
                                        <div class="price-input">
                                            <label>To:</label>
                                            <input type="text" id="priceMax" />
                                        </div>
                                        <div class="price-input">
                                            <button type="submit" class="btn btn--ys btn--md">Filter</button>
                                        </div>
                                    </form>
                                </div>
                            </div> 
                            <!-- /price slider block -->
                            <!-- size block -->
                            <div class="collapse-block open">
                                <h4 class="collapse-block__title">SIZE</h4>
                                <div class="collapse-block__content">
                                    <ul class="options-swatch options-swatch--size options-swatch--lg">
                                        <li><a href="#">XS</a></li>
                                        <li><a href="#">S</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">2XL</a></li>
                                        <li><a href="#">3XL</a></li>
                                    </ul>
                                </div>
                            </div> 
                            <!-- /size block -->
                            <!-- color block -->
                           <div class="collapse-block open">
                                <h4 class="collapse-block__title">COLOR</h4>
                                <div class="collapse-block__content">
                                    <ul class="options-swatch options-swatch--color options-swatch--lg">
                                        <li><a href="#"><span class="swatch-label color-black"></span></a></li>
                                        <li><a href="#"><span class="swatch-label color-grey"></span></a></li>
                                        <li><a href="#"><span class="swatch-label color-light-grey"></span></a></li>
                                        <li><a href="#"><span class="swatch-label color-blue"></span></a></li>
                                        <li><a href="#"><span class="swatch-label color-dark-turquoise "></span></a></li>
                                        <li><a href="#"><span class="swatch-label color-orange"></span></a></li>
                                        <li><a href="#"><span class="swatch-label color-purple"></span></a></li>
                                        <li><a href="#"><span class="swatch-label color-pale-violet-red"></span></a></li>
                                        <li><a href="#"><span class="swatch-label color-red"></span></a></li>
                                        <li><a href="#"><span class="swatch-label color-green"></span></a></li>
                                        <li><a href="#"><span class="swatch-label color-yellow"></span></a></li>
                                        <li><a href="#"><span class="swatch-label color-tan"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /color block -->
                            <!-- brands block -->
                           <div class="collapse-block">
                                <h4 class="collapse-block__title">BRANDS</h4>
                                <div class="collapse-block__content">
                                    <ul class="simple-list">
                                        <li><a href="#">Levi’s </a></li>
                                        <li><a href="#">Gap</a></li>
                                        <li><a href="#">Zara</a></li>
                                        <li><a href="#">Polo</a></li>
                                        <li><a href="#">Ecco</a></li>
                                        <li><a href="#">H&amp;M</a></li>
                                        <li><a href="#">Diesel</a></li>
                                        <li><a href="#">Bockers</a></li>
                                        <li><a href="#">Lacoste</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /brands block -->
                            <!-- gender block -->
                           <div class="collapse-block">
                                <h4 class="collapse-block__title">GENDER</h4>
                                <div class="collapse-block__content">
                                    <ul class="simple-list">
                                        <li><a href="#">Men</a></li>
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">Unisex</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /gender block -->
                            <!-- sleeve lenght block -->
                           <div class="collapse-block">
                                <h4 class="collapse-block__title">SLEEVE LENGTH</h4>
                                <div class="collapse-block__content">
                                    <ul class="simple-list">
                                        <li><a href="#">Long</a></li>
                                        <li><a href="#">Short</a></li>
                                        <li><a href="#">3/4</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /sleeve lenght block -->
                            <!-- occasion block -->
                            <div class="collapse-block">
                                <h4 class="collapse-block__title">OCCASION</h4>
                                <div class="collapse-block__content">
                                    <ul class="simple-list">
                                        <li><a href="#">Partywear</a></li>
                                        <li><a href="#">Casual</a></li>
                                        <li><a href="#">Evening</a></li>
                                        <li><a href="#">Workwear</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /occasion block -->
                            <!-- compare block -->
                            <div class="collapse-block open">
                                <h4 class="collapse-block__title">COMPARE PRODUCTS</h4>
                                <div class="collapse-block__content">
                                    <div class="compare">
                                        <div class="compare__item">
                                            <div class="compare__item__image pull-left"><a href="#"><img src="<?php echo config_item('frontend_assets');?>images/product/product-80x100-1.jpg" alt=""></a></div>
                                            <div class="compare__item__delete"><a href="#" class="icon icon-close"></a></div>
                                            <div class="compare__item__title">
                                                <h2><a href="#">Quis nostrud exercit ation ullamco</a></h2>
                                            </div>
                                        </div>
                                        <div class="compare__item">
                                            <div class="compare__item__image pull-left"><a href="#"><img src="<?php echo config_item('frontend_assets');?>images/product/product-80x100-2.jpg" alt=""></a></div>
                                            <div class="compare__item__delete"><a href="#" class="icon icon-close"></a></div>
                                            <div class="compare__item__title">
                                                <h2><a href="#">Quis nostrud exercit ation ullamco</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div><a href="#" class="btn btn--ys btn--md">Compare</a> <a href="#" class="btn btn--ys btn--md btn--light">Clear All</a></div>
                                </div>
                            </div> */ ?>
                            <!-- /compare block -->
                            <!-- poll block -->
                            <?php /* <div class="collapse-block">
                                <h4 class="collapse-block__title">COMMUNITY POLL</h4>
                                <div class="collapse-block__content">
                                    <p class="under-form-text color">What is your favorite color</p>
                                    <form id="pollForm" action="#">
                                        <ul class="filter-list">
                                            <li>
                                                <label class="radio">
											<input id="radio1" type="radio" name="radios" checked>
											<span class="outer"><span class="inner"></span></span>Green</label>
                                            </li>
                                            <li>
                                                <label class="radio">
											<input id="radio2" type="radio" name="radios">
											<span class="outer"><span class="inner"></span></span>Red</label>
                                            </li>
                                            <li>
                                                <label class="radio">
											<input id="radio3" type="radio" name="radios">
											<span class="outer"><span class="inner"></span></span>Black</label>
                                            </li>
                                            <li>
                                                <label class="radio">
											<input id="radio4" type="radio" name="radios">
											<span class="outer"><span class="inner"></span></span>Magenta</label>
                                            </li>
                                        </ul>
                                        <button type="submit" class="btn btn--ys btn--md btn--light">Vote</button>
                                    </form>
                                </div>
                            </div> */ ?>
                            <!-- /poll block -->
                            <!-- featured block -->
                            <?php /*<div class="collapse-block open coll-products-js">
                                <h4 class="collapse-block__title">FEATURED</h4>
                                <div class="collapse-block__content coll-gallery">
                                </div>

                                <div class="coll-gallery-clone" style="display:none">

                                    <div class="vertical-carousel vertical-carousel-2 offset-top-10">
                                        <div class="vertical-carousel__item">
                                            <div class="vertical-carousel__item__image pull-left"><a href="#"><img src="<?php echo config_item('frontend_assets');?>images/product/product-80x100-1.jpg" alt=""></a>
                                            </div>
                                            <div class="vertical-carousel__item__title">
                                                <h2><a href="#">Quis nostrud exercit ation</a></h2>
                                            </div>
                                            <div class="price-box">$26.00 <span class="price-box__old">$28.00</span></div>
                                            <div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                        </div>
                                        <div class="vertical-carousel__item">
                                            <div class="vertical-carousel__item__image pull-left"><a href="#"><img src="<?php echo config_item('frontend_assets');?>images/product/product-80x100-2.jpg" alt=""></a>
                                            </div>
                                            <div class="vertical-carousel__item__title">
                                                <h2><a href="#">Quis nostrud exercit ation</a></h2>
                                            </div>
                                            <div class="price-box">$26.00</div>
                                            <div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                        </div>
                                        <div class="vertical-carousel__item">
                                            <div class="vertical-carousel__item__image pull-left"><a href="#"><img src="<?php echo config_item('frontend_assets');?>images/product/product-80x100-1.jpg" alt=""></a></div>
                                            <div class="vertical-carousel__item__title">
                                                <h2><a href="#">Quis nostrud exercit ation</a></h2>
                                            </div>
                                            <div class="price-box">$26.00</div>
                                            <div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                        </div>
                                    </div>

                                </div>
                            </div> 
                            <!-- /featured block -->
                            <!-- tags block -->
                            <div class="collapse-block">
                                <h4 class="collapse-block__title">POPULAR TAGS</h4>
                                <div class="collapse-block__content">
                                    <ul class="tags-list">
                                        <li><a href="#">Grey</a></li>
                                        <li><a href="#">Shirt</a></li>
                                        <li><a href="#">suit</a></li>
                                        <li><a href="#">Dresses </a></li>
                                        <li><a href="#">Outerwear</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /tags block -->
                            <!-- custom block -->
                            <div class="collapse-block">
                                <h4 class="collapse-block__title">CUSTOM BLOCK</h4>
                                <div class="collapse-block__content">
                                    <p class="light-font">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                    <ul class="marker-list">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Conse ctetur adipisicing</li>
                                        <li>Elit sed do eiusmod tempor</li>
                                    </ul>
                                    <p class="light-font">Amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labor.</p>
                                </div>
                            </div> */ ?>
                            <!-- /custom block -->
                        </aside>
                        <!-- /left column -->
                        <!-- center column -->
                        <aside class="col-md-8 col-lg-9 col-xl-10" id="centerColumn">
                            <!-- title -->
                            <div class="title-box">
                                <h2 class="text-center text-uppercase title-under"> <?php if(isset($product_cat_id)){ echo $product_cat_id; }else{ echo 'MATERIAL AND SERVICE DATABASE'; } ?> </h2>
                            </div>
                            <!-- /title -->



                            <!-- filters row -->
                            <div class="filters-row border-top-none">
                                <div class="pull-left">
                                    <div class="filters-row__mode">
                                        <a href="javascript:void(0)" class="btn btn--ys slide-column-open visible-xs visible-sm hidden-xl hidden-lg hidden-md">Filter</a>
                                        <a class="filters-row__view active link-grid-view btn-img btn-img-view_module"><span></span></a>
                                        <a class="filters-row__view link-row-view btn-img btn-img-view_list"><span></span></a>
                                    </div>
                                    <div class="filters-row__select hidden-sm hidden-xs">
                                        <label>Sort by: </label>
                                        <div class="select-wrapper">
                                            <select class="select--ys sort-position">
											<option>Position</option>
											<option>Price</option>
											<option>Rating</option>
										</select>
                                        </div>
                                        <a href="javascript:void(0)" class="sort-direction icon icon-arrow_back"></a>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div class="filters-row__items hidden-sm hidden-xs">28 Item(s)</div>
                                    <?php /*
                                    <div class="filters-row__select hidden-sm hidden-xs">
                                        <label>Show: </label>
                                        <div class="select-wrapper">
                                            <select class="select--ys show-qty">
											<option>25</option>
											<option>50</option>
											<option>100</option>
										</select>
                                        </div>
                                        <a href="javascript:void(0)" class="icon icon-arrow-down active"></a><a href="javascript:void(0)" class="icon icon-arrow-up"></a>
                                    </div>
                                    <div class="filters-row__pagination">
                                        <ul class="pagination">
                                            <li class="active"><a href="javascript:void(0)">1</a></li>
                                            <li><a href="javascript:void(0)">2</a></li>
                                            <li><a href="javascript:void(0)">3</a></li>
                                            <li><a href="javascript:void(0)"><span class="icon icon-chevron_right"></span></a></li>
                                        </ul>
                                    </div>
                                    */ ?>
                                </div>
                            </div>
                            <!-- /filters row -->
                            <div class="product-listing row">
                                <?php  /* if(count($list_companies)!==0){ foreach($list_companies as $row_prod){ ?>
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
                                      <!-- product -->
                                        <div class="product product--zoom">
                                            <div class="product__inside">
                                                <!-- product image -->
                                                <div class="product__inside__image">
                                                    <a href="<?php $company_name = str_replace(' ', '-', $row_prod['cd_name']); echo base_url('micro_site/index/'.$company_name);?>"> <img src="<?php echo company_img($row_prod['cd_image']); ?>" alt=""/> </a>
                                                    <!-- quick-view -->
                                                    <!--a href="javascript:void(0)" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a-->
                                                    <!-- /quick-view -->
                                                </div>
                                                <!-- /product image -->
                                                <!-- product name -->
                                                <div class="product__inside__name">
                                                    <h2><a href="<?php echo base_url('micro_site/index/'.$company_name);?>"><?php echo $row_prod['cd_name'];?></a></h2>
                                                </div>
                                                <!-- /product name -->
                                                <!-- product description -->
                                                <!-- visible only in row-view mode -->
                                                <div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
                                                <!-- /product description -->
                                                <!-- product price -->
                                                <!--div class="product__inside__price price-box">$46.00</div-->
                                                <!-- /product price -->
                                                <!-- product review -->
                                                <!-- visible only in row-view mode -->
                                                <!--div class="product__inside__review row-mode-visible">
                                                    <div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                                    <a href="javascript:void(0)">1 Review(s)</a> <a href="javascript:void(0)">Add Your Review</a>
                                                </div-->
                                                <!-- /product review -->
                                                <div class="product__inside__hover">
                                                    <!-- product info -->
                                                    <div class="product__inside__info">
                                                        <div class="product__inside__info__btns"><a href="javascript:void(0)" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
                                                            <a href="javascript:void(0)" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                                                            <a href="javascript:void(0)" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a>
                                                        </div>
                                                        <ul class="product__inside__info__link hidden-sm">
                                                            <!--li class="text-right"><span class="icon icon-favorite_border  tooltip-li   nk"></span><a href="javascript:void(0)"><span class="text">Add to wishlist</span></a></li>
                                                            <li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="javascript:void(0)" class="compare-link"><span class="text">Add to compare</span></a></li-->
                                                        </ul>
                                                    </div>
                                                    <!-- /product info -->
                                                    <!-- product rating -->
                                                    <!--div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div-->
                                                    <!-- /product rating -->
                                                </div>
                                            </div>
                                        </div>
                                     <!-- /product -->
                                    </div>
                                <?php } }else{ ?>
                                    No Results found.
                                <?php } */ ?>
                                
                                <?php /* <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
                                    <!-- product -->
                                    <div class="product product--zoom">
                                        <div class="product__inside">
                                            <!-- product image -->
                                            <div class="product__inside__image">
                                                <a href="product.html"> <img src="<?php echo config_item('frontend_assets');?>images/product/product-2.jpg" alt=""> </a>
                                                <!-- quick-view -->
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>
                                                <!-- /quick-view -->
                                            </div>
                                            <!-- /product image -->
                                            <!-- product name -->
                                            <div class="product__inside__name">
                                                <h2><a href="product.html">Mauris lacinia lectus</a></h2>
                                            </div>
                                            <!-- /product name -->
                                            <!-- product description -->
                                            <!-- visible only in row-view mode -->
                                            <div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
                                            <!-- /product description -->
                                            <!-- product price -->
                                            <div class="product__inside__price price-box">$46.00</div>
                                            <!-- /product price -->
                                            <!-- product review -->
                                            <!-- visible only in row-view mode -->
                                            <div class="product__inside__review row-mode-visible">
                                                <div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                                <a href="javascript:void(0)">1 Review(s)</a> <a href="javascript:void(0)">Add Your Review</a>
                                            </div>
                                            <!-- /product review -->
                                            <div class="product__inside__hover">
                                                <!-- product info -->
                                                <div class="product__inside__info">
                                                    <div class="product__inside__info__btns"> <a href="javascript:void(0)" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
                                                        <a href="javascript:void(0)" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                                                        <a href="javascript:void(0)" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a>
                                                    </div>
                                                    <ul class="product__inside__info__link hidden-sm">
                                                        <li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="javascript:void(0)"><span class="text">Add to wishlist</span></a></li>
                                                        <li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="javascript:void(0)" class="compare-link"><span class="text">Add to compare</span></a></li>
                                                    </ul>
                                                </div>
                                                <!-- /product info -->
                                                <!-- product rating -->
                                                <div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                                <!-- /product rating -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /product -->
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
                                    <!-- product -->
                                    <div class="product product--zoom">
                                        <div class="product__inside">
                                            <!-- product image -->
                                            <div class="product__inside__image">
                                                <a href="product.html"> <img src="<?php echo config_item('frontend_assets');?>images/product/product-3.jpg" alt=""> </a>
                                                <!-- quick-view -->
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>
                                                <!-- /quick-view -->
                                            </div>
                                            <!-- /product image -->
                                            <!-- product name -->
                                            <div class="product__inside__name">
                                                <h2><a href="product.html">Mauris lacinia lectus</a></h2>
                                            </div>
                                            <!-- /product name -->
                                            <!-- product description -->
                                            <!-- visible only in row-view mode -->
                                            <div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
                                            <!-- /product description -->
                                            <!-- product price -->
                                            <div class="product__inside__price price-box">$143.00</div>
                                            <!-- /product price -->
                                            <!-- product review -->
                                            <!-- visible only in row-view mode -->
                                            <div class="product__inside__review row-mode-visible">
                                                <div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                                <a href="javascript:void(0)">1 Review(s)</a> <a href="javascript:void(0)">Add Your Review</a>
                                            </div>
                                            <!-- /product review -->
                                            <div class="product__inside__hover">
                                                <!-- product info -->
                                                <div class="product__inside__info">
                                                    <ul class="options-swatch options-swatch--color">
                                                        <li><a href="javascript:void(0)"><span class="swatch-label"><img src="<?php echo config_item('frontend_assets');?>images/colors/blue.png"  alt=""/></span></a></li>
                                                        <li><a href="javascript:void(0)"><span class="swatch-label"><img src="<?php echo config_item('frontend_assets');?>images/colors/yellow.png"  alt=""/></span></a></li>
                                                    </ul>
                                                    <div class="product__inside__info__btns"> <a href="javascript:void(0)" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
                                                        <a href="javascript:void(0)" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                                                        <a href="javascript:void(0)" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a>
                                                    </div>
                                                    <ul class="product__inside__info__link hidden-sm">
                                                        <li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="javascript:void(0)"><span class="text">Add to wishlist</span></a></li>
                                                        <li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="javascript:void(0)" class="compare-link"><span class="text">Add to compare</span></a></li>
                                                    </ul>
                                                </div>
                                                <!-- /product info -->
                                                <!-- product rating -->
                                                <div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                                <!-- /product rating -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /product -->
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
                                    <!-- product -->
                                    <div class="product product--zoom">
                                        <div class="product__inside">
                                            <!-- product image -->
                                            <div class="product__inside__image">
                                                <a href="product.html"> <img src="<?php echo config_item('frontend_assets');?>images/product/product-4.jpg" alt=""> </a>
                                                <!-- quick-view -->
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>
                                                <!-- /quick-view -->
                                            </div>
                                            <!-- /product image -->
                                            <!-- product name -->
                                            <div class="product__inside__name">
                                                <h2><a href="product.html"> Mauris lacinia lectus</a></h2>
                                            </div>
                                            <!-- /product name -->
                                            <!-- product description -->
                                            <!-- visible only in row-view mode -->
                                            <div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
                                            <!-- /product description -->
                                            <!-- product price -->
                                            <div class="product__inside__price price-box">$587.00</div>
                                            <!-- /product price -->
                                            <!-- product review -->
                                            <!-- visible only in row-view mode -->
                                            <div class="product__inside__review row-mode-visible">
                                                <div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                                <a href="javascript:void(0)">1 Review(s)</a> <a href="javascript:void(0)">Add Your Review</a>
                                            </div>
                                            <!-- /product review -->
                                            <div class="product__inside__hover">
                                                <!-- product info -->
                                                <div class="product__inside__info">
                                                    <div class="product__inside__info__btns"> <a href="javascript:void(0)" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
                                                        <a href="javascript:void(0)" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                                                        <a href="javascript:void(0)" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a>
                                                    </div>
                                                    <ul class="product__inside__info__link hidden-sm">
                                                        <li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="javascript:void(0)"><span class="text">Add to wishlist</span></a></li>
                                                        <li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="javascript:void(0)" class="compare-link"><span class="text">Add to compare</span></a></li>
                                                    </ul>
                                                </div>
                                                <!-- /product info -->
                                                <!-- product rating -->
                                                <div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                                <!-- /product rating -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /product -->
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
                                    <!-- product -->
                                    <div class="product product--zoom">
                                        <div class="product__inside">
                                            <!-- product image -->
                                            <div class="product__inside__image">
                                                <a href="product.html"> <img src="<?php echo config_item('frontend_assets');?>images/product/product-5.jpg" alt=""> </a>
                                                <!-- quick-view -->
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>
                                                <!-- /quick-view -->
                                            </div>
                                            <!-- /product image -->
                                            <!-- product name -->
                                            <div class="product__inside__name">
                                                <h2><a href="product.html">Mauris lacinia lectus</a></h2>
                                            </div>
                                            <!-- /product name -->
                                            <!-- product description -->
                                            <!-- visible only in row-view mode -->
                                            <div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
                                            <!-- /product description -->
                                            <!-- product price -->
                                            <div class="product__inside__price price-box">$54.00</div>
                                            <!-- /product price -->
                                            <!-- product review -->
                                            <!-- visible only in row-view mode -->
                                            <div class="product__inside__review row-mode-visible">
                                                <div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                                <a href="javascript:void(0)">1 Review(s)</a> <a href="javascript:void(0)">Add Your Review</a>
                                            </div>
                                            <!-- /product review -->
                                            <div class="product__inside__hover">
                                                <!-- product info -->
                                                <div class="product__inside__info">
                                                    <div class="product__inside__info__btns"> <a href="javascript:void(0)" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
                                                        <a href="javascript:void(0)" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                                                        <a href="javascript:void(0)" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a>
                                                    </div>
                                                    <ul class="product__inside__info__link hidden-sm">
                                                        <li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="javascript:void(0)"><span class="text">Add to wishlist</span></a></li>
                                                        <li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="javascript:void(0)" class="compare-link"><span class="text">Add to compare</span></a></li>
                                                    </ul>
                                                </div>
                                                <!-- /product info -->
                                                <!-- product rating -->
                                                <div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                                <!-- /product rating -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /product -->
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
                                    <!-- product -->
                                    <div class="product product--zoom">
                                        <div class="product__inside">
                                            <!-- product image -->
                                            <div class="product__inside__image">
                                                <a href="product.html"> <img src="<?php echo config_item('frontend_assets');?>images/product/product-6.jpg" alt=""> </a>
                                                <!-- quick-view -->
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>
                                                <!-- /quick-view -->
                                            </div>
                                            <!-- /product image -->
                                            <!-- product name -->
                                            <div class="product__inside__name">
                                                <h2><a href="product.html">Mauris lacinia lectus</a></h2>
                                            </div>
                                            <!-- /product name -->
                                            <!-- product description -->
                                            <!-- visible only in row-view mode -->
                                            <div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
                                            <!-- /product description -->
                                            <!-- product price -->
                                            <div class="product__inside__price price-box">$66.00</div>
                                            <!-- /product price -->
                                            <!-- product review -->
                                            <!-- visible only in row-view mode -->
                                            <div class="product__inside__review row-mode-visible">
                                                <div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                                <a href="javascript:void(0)">1 Review(s)</a> <a href="javascript:void(0)">Add Your Review</a>
                                            </div>
                                            <!-- /product review -->
                                            <div class="product__inside__hover">
                                                <!-- product info -->
                                                <div class="product__inside__info">
                                                    <div class="product__inside__info__btns"> <a href="javascript:void(0)" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
                                                        <a href="javascript:void(0)" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                                                        <a href="javascript:void(0)" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a>
                                                    </div>
                                                    <ul class="product__inside__info__link hidden-sm">
                                                        <li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="javascript:void(0)"><span class="text">Add to wishlist</span></a></li>
                                                        <li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="javascript:void(0)" class="compare-link"><span class="text">Add to compare</span></a></li>
                                                    </ul>
                                                </div>
                                                <!-- /product info -->
                                                <!-- product rating -->
                                                <div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                                <!-- /product rating -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /product -->
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
                                    <!-- product -->
                                    <div class="product product--zoom sold-out">
                                        <div class="product__inside">
                                            <!-- product image -->
                                            <div class="product__inside__image">
                                                <a href="product.html"> <img src="<?php echo config_item('frontend_assets');?>images/product/product-7.jpg" alt=""> </a>
                                                <!-- label sold-out -->
                                                <div class="product__label--sold-out"> <span>sold<br>
												out</span>
                                                </div>
                                                <!-- /label sold-out -->
                                            </div>
                                            <!-- /product image -->
                                            <!-- product name -->
                                            <div class="product__inside__name">
                                                <h2><a href="product.html">Mauris lacinia lectus</a></h2>
                                            </div>
                                            <!-- /product name -->
                                            <!-- product description -->
                                            <!-- visible only in row-view mode -->
                                            <div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
                                            <!-- /product description -->
                                            <!-- product price -->
                                            <div class="product__inside__price price-box">$73.00</div>
                                            <!-- /product price -->
                                            <!-- product review -->
                                            <!-- visible only in row-view mode -->
                                            <div class="product__inside__review row-mode-visible">
                                                <div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                                <a href="javascript:void(0)">1 Review(s)</a> <a href="javascript:void(0)">Add Your Review</a>
                                            </div>
                                            <!-- /product review -->
                                            <div class="product__inside__hover">
                                                <!-- product info -->
                                                <div class="product__inside__info">
                                                    <div class="product__inside__info__btns"> <a href="javascript:void(0)" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
                                                        <a href="javascript:void(0)" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                                                        <a href="javascript:void(0)" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a>
                                                    </div>
                                                    <ul class="product__inside__info__link hidden-sm">
                                                        <li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="javascript:void(0)"><span class="text">Add to wishlist</span></a></li>
                                                        <li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="javascript:void(0)" class="compare-link"><span class="text">Add to compare</span></a></li>
                                                    </ul>
                                                </div>
                                                <!-- /product info -->
                                                <!-- product rating -->
                                                <div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                                <!-- /product rating -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /product -->
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
                                    <!-- product -->
                                    <div class="product product--zoom">
                                        <div class="product__inside">
                                            <!-- product image -->
                                            <div class="product__inside__image">
                                                <a href="product.html"> <img src="<?php echo config_item('frontend_assets');?>images/product/product-8.jpg" alt=""> </a>
                                                <!-- quick-view -->
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>
                                                <!-- /quick-view -->
                                            </div>
                                            <!-- /product image -->
                                            <!-- product name -->
                                            <div class="product__inside__name">
                                                <h2><a href="product.html">Mauris lacinia lectus</a></h2>
                                            </div>
                                            <!-- /product name -->
                                            <!-- product description -->
                                            <!-- visible only in row-view mode -->
                                            <div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
                                            <!-- /product description -->
                                            <!-- product price -->
                                            <div class="product__inside__price price-box">$73.00</div>
                                            <!-- /product price -->
                                            <!-- product review -->
                                            <!-- visible only in row-view mode -->
                                            <div class="product__inside__review row-mode-visible">
                                                <div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                                <a href="javascript:void(0)">1 Review(s)</a> <a href="javascript:void(0)">Add Your Review</a>
                                            </div>
                                            <!-- /product review -->
                                            <div class="product__inside__hover">
                                                <!-- product info -->
                                                <div class="product__inside__info">
                                                    <div class="product__inside__info__btns"> <a href="javascript:void(0)" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
                                                        <a href="javascript:void(0)" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                                                        <a href="javascript:void(0)" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a>
                                                    </div>
                                                    <ul class="product__inside__info__link hidden-sm">
                                                        <li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="javascript:void(0)"><span class="text">Add to wishlist</span></a></li>
                                                        <li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="javascript:void(0)" class="compare-link"><span class="text">Add to compare</span></a></li>
                                                    </ul>
                                                </div>
                                                <!-- /product info -->
                                                <!-- product rating -->
                                                <div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                                <!-- /product rating -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /product -->
                                </div> */ ?>    
                            </div>
                            <div class="no_companies_found"></div>
                            <form id="refineproducts" action="#" method="post">
                                    <input type="hidden" id="start" name="start" value="1"/>
                                    <input type="hidden" id="elseflag" name="elseflag" value="1"/>
                            </form>
                            <div id="loader-icon" class="text-center"><img src="<?php echo config_item('root_dir'); ?>assets/images/sm-loader.gif" /></div>
                            <!-- filters row -->
                            <?php /*<div class="filters-row">
                                <div class="pull-left">
                                    <div class="filters-row__mode">
                                        <a href="javascript:void(0)" class="btn btn--ys slide-column-open visible-xs visible-sm hidden-xl hidden-lg hidden-md">Filter</a>
                                        <a class="filters-row__view active link-grid-view btn-img btn-img-view_module"><span></span></a>
                                        <a class="filters-row__view link-row-view btn-img btn-img-view_list"><span></span></a>
                                    </div>
                                    <div class="filters-row__select hidden-sm hidden-xs">
                                        <label>Sort by: </label>
                                        <div class="select-wrapper">
                                            <select class="select--ys sort-position">
											<option>Position</option>
											<option>Price</option>
											<option>Rating</option>
										</select>
                                        </div>
                                        <a href="javascript:void(0)" class="sort-direction icon icon-arrow_back"></a>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div class="filters-row__items hidden-sm hidden-xs">28 Item(s)</div>
                                    <div class="filters-row__select hidden-sm hidden-xs">
                                        <label>Show: </label>
                                        <div class="select-wrapper">
                                            <select class="select--ys show-qty">
											<option>25</option>
											<option>50</option>
											<option>100</option>
										</select>
                                        </div>
                                        <a href="javascript:void(0)" class="icon icon-arrow-down active"></a><a href="javascript:void(0)" class="icon icon-arrow-up"></a>
                                    </div>
                                    <div class="filters-row__pagination">
                                        <ul class="pagination">
                                            <li class="active"><a href="javascript:void(0)">1</a></li>
                                            <li><a href="javascript:void(0)">2</a></li>
                                            <li><a href="javascript:void(0)">3</a></li>
                                            <li><a href="javascript:void(0)"><span class="icon icon-chevron_right"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>*/ ?>
                            <!-- /filters row -->
                        </aside>
                        <!-- center column -->
                    </div>
                    <!-- /two columns -->
                </div>
            </div>
            <!-- End CONTENT section -->
            <div class="title-lines-container">
                <div class="container">

                    <!-- NEWS LETTER -->
                    <div class="nl-container nl-lines">
                        <div class="nl-icon-container-bg">
                            <div class="nl-icon-container">
                                <span aria-hidden="true" class="icon_mail_alt main-menu-icon"></span>
                            </div>
                        </div>
                        <div class="nl-main-container-bg">
                            <div class="nl-main-container clearfix">
                                <div class="nl-caption">NEWSLETTER</div>
                                <div id="mc_embed_signup" class="nl-form-container clearfix">

                                    <form action="http://abcgomel.us9.list-manage.com/subscribe/post-json?u=ba37086d08bdc9f56f3592af0&amp;id=e38247f7cc&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform validate" target="_blank" novalidate>
                                        <!-- EDIT THIS ACTION URL (add "post-json?u" instead of "post?u" and appended "&amp;c=?" to the end of this URL) -->

                                        <input type="email" value="" name="EMAIL" class="email nl-email-input" id="mce-EMAIL" placeholder="YOUR EMAIL HERE" required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;"><input type="text" name="b_ba37086d08bdc9f56f3592af0_e38247f7cc" tabindex="-1" value=""></div>

                                        <input type="submit" value="SIGN UP" name="subscribe" id="mc-embedded-subscribe" class="nl-button">

                                    </form>
                                    <div id="notification_container"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
