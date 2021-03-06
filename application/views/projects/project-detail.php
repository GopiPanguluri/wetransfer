            <!-- PAGE TITLE 1 -->
            <div class="page-title-bg indent-header-1 page-main-content m-bot-40">
                <div class="container">
                    <div class="page-title-container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Project Details</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="breadcrumb">
                                    <li><a class="a-invert" href="index.html">HOME</a></li>
                                    <li class="active">Project Details</li>
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
                        <li class="home-link"><a href="index.html" class="icon icon-home"></a></li>
                        <li><a href="#">Electronics</a></li>
                        <li class="active">Phones</li>
                    </ol>
                </div>
            </div>
            <!-- /breadcrumbs -->
            <!-- CONTENT section -->
            <div id="pageContent">
                <section class="content offset-top-0">
                    <div class="container">
                        <div class="row product-info-outer">
                            <div id="productPrevNext" class="hidden-xs hidden-sm">
                                <a href="#" class="product-prev"><img src="<?php echo config_item('frontend_assets');?>images/product/product-2.jpg" alt="" /></a>
                                <a href="#" class="product-next"><img src="<?php echo config_item('frontend_assets');?>images/product/product-3.jpg" alt="" /></a>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 hidden-xs">
                                        <div class="product-main-image">
                                            <div class="product-main-image__item"><img class="product-zoom" src="<?php echo products_img(''); ?>" data-zoom-image="<?php echo products_img(''); ?>" alt="" /></div>
                                            <div class="product-main-image__zoom"></div>
                                        </div>
                                        <div class="product-images-carousel">
                                            <ul id="smallGallery">
                                                <li><a href="#" data-image="<?php echo config_item('frontend_assets');?>images/product/product-big-1.jpg" data-zoom-image="<?php echo config_item('frontend_assets');?>images/product/product-big-1-zoom.jpg"><img src="<?php echo config_item('frontend_assets');?>images/product/product-1.jpg" alt="" /></a></li>
                                                <li><a href="#" data-image="<?php echo config_item('frontend_assets');?>images/product/product-big-2.jpg" data-zoom-image="<?php echo config_item('frontend_assets');?>images/product/product-big-2-zoom.jpg"><img src="<?php echo config_item('frontend_assets');?>images/product/product-1.jpg" alt="" /></a></li>
                                                <li><a href="#" data-image="<?php echo config_item('frontend_assets');?>images/product/product-big-3.jpg" data-zoom-image="<?php echo config_item('frontend_assets');?>images/product/product-big-3-zoom.jpg"><img src="<?php echo config_item('frontend_assets');?>images/product/product-1.jpg" alt="" /></a></li>
                                                <li><a href="#" data-image="<?php echo config_item('frontend_assets');?>images/product/product-big-4.jpg" data-zoom-image="<?php echo config_item('frontend_assets');?>images/product/product-big-4-zoom.jpg"><img src="<?php echo config_item('frontend_assets');?>images/product/product-1.jpg" alt="" /></a></li>
                                                <li><a href="#" data-image="<?php echo config_item('frontend_assets');?>images/product/product-big-5.jpg" data-zoom-image="<?php echo config_item('frontend_assets');?>images/product/product-big-5-zoom.jpg"><img src="<?php echo config_item('frontend_assets');?>images/product/product-1.jpg" alt="" /></a></li>
                                            </ul>
                                        </div>
                                        <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="video-link"><span class="icon icon-videocam"></span>Video</a>
                                    </div>
                                    <div class="product-info col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                        <?php /* <div class="wrapper hidden-xs">
                                            <!--div class="product-info__sku pull-left color-dark">SKU: <strong class="text-color">mtk012c</strong></div-->
                                            <div class="product-info__availability pull-right color-dark">Availability: <strong class="color">In Stock</strong> &nbsp; <strong class="color-red">Out stock</strong></div>
                                        </div> */ ?>
                                        <div class="product-info__title">
                                            <h2><?php echo $product_details['description']; ?></h2>
                                        </div>
                                        <!--div class="wrapper visible-xs">
                                            <div class="product-info__sku pull-left">SKU: <strong>mtk012c</strong></div>
                                            <div class="product-info__availability pull-right">Availability: <strong class="color">In Stock</strong></div>
                                        </div-->
                                        <div class="visible-xs">
                                            <div class="clearfix"></div>
                                            <ul id="mobileGallery">
                                                <li><a href="#" data-image="<?php echo config_item('frontend_assets');?>images/product/product-big-1.jpg" data-zoom-image="<?php echo config_item('frontend_assets');?>images/product/product-big-1-zoom.jpg"><img src="<?php echo config_item('frontend_assets');?>images/product/product-small-1.jpg" alt="" /></a></li>
                                                <li><a href="#" data-image="<?php echo config_item('frontend_assets');?>images/product/product-big-2.jpg" data-zoom-image="<?php echo config_item('frontend_assets');?>images/product/product-big-2-zoom.jpg"><img src="<?php echo config_item('frontend_assets');?>images/product/product-small-2.jpg" alt="" /></a></li>
                                                <li><a href="#" data-image="<?php echo config_item('frontend_assets');?>images/product/product-big-3.jpg" data-zoom-image="<?php echo config_item('frontend_assets');?>images/product/product-big-3-zoom.jpg"><img src="<?php echo config_item('frontend_assets');?>images/product/product-small-3.jpg" alt="" /></a></li>
                                                <li><a href="#" data-image="<?php echo config_item('frontend_assets');?>images/product/product-big-4.jpg" data-zoom-image="<?php echo config_item('frontend_assets');?>images/product/product-big-4-zoom.jpg"><img src="<?php echo config_item('frontend_assets');?>images/product/product-small-4.jpg" alt="" /></a></li>
                                                <li><a href="#" data-image="<?php echo config_item('frontend_assets');?>images/product/product-big-5.jpg" data-zoom-image="<?php echo config_item('frontend_assets');?>images/product/product-big-5-zoom.jpg"><img src="<?php echo config_item('frontend_assets');?>images/product/product-small-5.jpg" alt="" /></a></li>
                                            </ul>
                                        </div>
                                        <div class="price-box product-info__price"><span class="price-box__new">&#8377;<?php //echo $product_details['product_price']; ?>.00</span> <!--span class="price-box__old">Inr<?php echo $product_details['product_price']; ?>.00</span--></div>
                                        <!--div class="product-info__review">
                                            <div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                            <a href="#">1 Review(s)</a> <a href="#">Add Your Review</a>
                                        </div-->
                                        <div class="divider divider--xs product-info__divider hidden-xs"></div>
                                        <!--div class="product-info__description hidden-xs">
                                            <div class="product-info__description__brand"><img src="<?php echo config_item('frontend_assets');?>images/custom/brand.png" alt="" /> </div>
                                            <div class="product-info__description__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</div>
                                        </div-->
                                        <?php /* <div class="divider divider--xs product-info__divider"></div>*/ ?>
                                        <?php /* <div class="product-info__description">
                                            <div class="color-red"><span class="font35 font-lighter">35% Off.</span> Hurry, there are only 33 item(s) left! </div>
                                            <!-- countdown_box -->
                                            <div class="countdown-product">
                                                <div id="countdown1"></div>
                                            </div>
                                            <!-- /countdown_box -->
                                        </div>
                                        <div class="divider divider--xs product-info__divider"></div>
                                         
                                        <div class="wrapper">
                                            <div class="pull-left"><span class="option-label">COLOR:</span> Red + $10.00 <span class="required">*</span></div>
                                            <div class="pull-right required">* Required Fields</div>
                                        </div>
                                        
                                        <ul class="options-swatch options-swatch--color options-swatch--lg">
                                            <li><a href="#"><span class="swatch-label"><img src="<?php echo config_item('frontend_assets');?>images/colors/oldlace.png" alt=""/></span></a></li>
                                            <li><a href="#"><span class="swatch-label"><img src="<?php echo config_item('frontend_assets');?>images/colors/dark-grey.png" alt=""/></span></a></li>
                                            <li><a href="#"><span class="swatch-label"><img src="<?php echo config_item('frontend_assets');?>images/colors/grey.png" alt=""/></span></a></li>
                                            <li><a href="#"><span class="swatch-label"><img src="<?php echo config_item('frontend_assets');?>images/colors/light-grey.png" alt=""/></span></a></li>
                                        </ul>
                                        
                                        <div class="wrapper">
                                            <div class="pull-left"><span class="option-label">SIZE:</span></div>
                                            <div class="pull-left required">*</div>
                                        </div>
                                        
                                        <ul class="options-swatch options-swatch--size options-swatch--lg">
                                            <li><a href="#">S</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">L</a></li>
                                            <li><a href="#">XL</a></li>
                                            <li><a href="#">2XL</a></li>
                                            <li><a href="#">3XL</a></li>
                                        </ul>
                                        
                                        <div class="divider divider--sm"></div>
                                        
                                        <table class="table-product">
                                            <thead>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Price</th>
                                                    <th>Qty</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Product 1</td>
                                                    <td><span class="color">$25.00</span></td>
                                                    <td>
                                                        <input type="text" placeholder="0">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Product 2</td>
                                                    <td>
                                                        <span class="color">$25.00</span>
                                                        <span class="color-red line-through">$25.00</span>
                                                    </td>
                                                    <td>
                                                        <input type="text" placeholder="0">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Product 3</td>
                                                    <td><span class="color">$85.00</span></td>
                                                    <td>
                                                        <input type="text" placeholder="0">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        */ ?>
                                        <div class="wrapper">
                                            <div class="pull-left"><span class="qty-label">QTY:</span></div>
                                            <div class="pull-left"><input type="text" name="quantity" class="input--ys qty-input pull-left" value="1"></div>
                                            <div class="pull-left"><button type="submit" class="btn btn--ys btn--xxl"><span class="icon icon-shopping_basket"></span> Add to cart</button></div>
                                        </div>
                                        <?php /*
                                        <ul class="product-link">
                                            <li class="text-right"><a href="#"><span class="icon icon-favorite_border  tooltip-link"></span><span class="text">Add to wishlist</span></a></li>
                                            <li class="text-left"><a href="#"><span class="icon icon-sort  tooltip-link"></span><span class="text">Add to compare</span></a></li>
                                        </ul>
                                        */ ?>
                                    </div>
                                </div>
                                <div class="content">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-tabs--ys" role="tablist">
                                        <li class="active"><a href="#Tab1" role="tab" data-toggle="tab" class="text-uppercase">DESCRIPTION</a></li>
                                        <li><a href="#Tab2" role="tab" data-toggle="tab" class="text-uppercase">Reviews</a></li>
                                        <?php /*<li><a href="#Tab3" role="tab" data-toggle="tab" class="text-uppercase">Tags</a></li>
                                        <li><a href="#Tab4" role="tab" data-toggle="tab" class="text-uppercase">CUSTOM TAB</a></li>
                                        <li><a href="#Tab5" role="tab" data-toggle="tab" class="text-uppercase">Sizing Guide</a></li>
                                        */ ?>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content tab-content--ys">
                                        <div role="tabpanel" class="tab-pane active" id="Tab1">
                                            <p><?php echo $product_details['description']; ?></p>
                                            <div class="divider divider--md"></div>
                                            <table class="table table-params">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-right"><span class="color">PROOF</span></td>
                                                        <td>PDF Proof</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><span class="color">SAMPLES</span></td>
                                                        <td>Digital, Printed</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><span class="color">WRAPPING</span></td>
                                                        <td>Yes, No</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><span class="color">UV GLOSS COATING</span></td>
                                                        <td>Yes</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><span class="color">SHRINK WRAPPING</span></td>
                                                        <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><span class="color">WEIGHT</span></td>
                                                        <td>0.05, 0.06, 0.07ess cards</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="Tab2">
                                            <h5><strong class="color">CUSTOMER REVIEWS 1 ITEM(S)</strong></h5>
                                            <p> GREAT!</p>
                                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                            <div class="divider divider--xs"></div>
                                            <table class="table table-params">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-right"><span class="color">QUALITY</span></td>
                                                        <td>
                                                            <div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><span class="color">PRICE</span></td>
                                                        <td>
                                                            <div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><span class="color">VALUE</span></td>
                                                        <td>
                                                            <div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="color-light">Review by User / (posted on 16/9/2016)</p>
                                            <div class="divider divider--xs"></div>
                                            <h5><strong class="color">WRITE YOUR OWN REVIEW</strong></h5>
                                            <p><span class="color">YOU'RE REVIEWING:</span> Lorem ipsum dolor sit amet conse ctetur</p>
                                            <p><span class="color">HOW DO YOU RATE THIS PRODUCT?</span></p>
                                            <div class="divider divider--xs"></div>
                                            <div class="table-responsive">
                                                <table class="table table-params">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-right"></td>
                                                            <td class="text-center">
                                                                <div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right"><span class="color">QUALITY</span></td>
                                                            <td class="text-center"><span class="icon-enable">&#x25cf;</span></td>
                                                            <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                                                            <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                                                            <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                                                            <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right"><span class="color">PRICE</span></td>
                                                            <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                                                            <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                                                            <td class="text-center"><span class="icon-enable">&#x25cf;</span></td>
                                                            <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                                                            <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right"><span class="color">VALUE</span></td>
                                                            <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                                                            <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                                                            <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                                                            <td class="text-center"><span class="icon-enable">&#x25cf;</span></td>
                                                            <td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="divider divider--xs"></div>
                                            <form action="#" class="contact-form">
                                                <label>Nickname<span class="required">*</span></label>
                                                <input type="text" class="input--ys input--ys--full">
                                                <label>Summary of Your Review<span class="required">*</span></label>
                                                <input type="text" class="input--ys input--ys--full">
                                                <label>Review<span class="required">*</span></label>
                                                <textarea class="textarea--ys input--ys--full"></textarea>
                                                <div class="divider divider--xs"></div>
                                                <button type="submit" class="btn btn--ys text-uppercase">Submit Review</button>
                                            </form>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="Tab3">
                                            <h5><strong class="color">OTHER PEOPLE MARKED THIS PRODUCT WITH THESE TAGS:</strong></h5>
                                            <p>Pattern (1)</p>
                                            <div class="divider divider--xs"></div>
                                            <h5><strong class="color">ADD YOUR TAGS:</strong></h5>
                                            <form action="#" class="contact-form">
                                                <input type="text" class="input--ys input--ys--full">
                                                <p>Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                                <div class="divider divider--xs"></div>
                                                <button type="submit" class="btn btn--ys">Add Tags</button>
                                            </form>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="Tab4">
                                            <h5><strong class="color text-uppercase">Lorem ipsum dolor sit amet conse ctetur adipisicing elit</strong></h5>
                                            <div class="divider divider--xs"></div>
                                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. orem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                            <ul class="marker-list-circle">
                                                <li><span class="text-uppercase">Lorem ipsum dolor sit amet</span></li>
                                                <li><span class="text-uppercase">Conse ctetur adipisicing</span></li>
                                                <li><span class="text-uppercase">Elit sed do eiusmod tempor</span></li>
                                                <li><span class="text-uppercase">Incididunt ut laborev</span></li>
                                                <li><span class="text-uppercase">Et dolore magna aliqua</span></li>
                                                <li><span class="text-uppercase">Ut enim ad min</span></li>
                                            </ul>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="Tab5">
                                            <h5><strong class="color text-uppercase">Clothing - Single Size Conversion (Continued)</strong></h5>
                                            <div class="divider divider--xs"></div>
                                            <div class="table-responsive">
                                                <table class="table table-params">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-right"><span class="color">UK</span></td>
                                                            <td>
                                                                <ul class="sizes-row">
                                                                    <li>18</li>
                                                                    <li>20</li>
                                                                    <li>22</li>
                                                                    <li>24</li>
                                                                    <li>26</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right"><span class="color">European</span></td>
                                                            <td>
                                                                <ul class="sizes-row">
                                                                    <li>46</li>
                                                                    <li>48</li>
                                                                    <li>50</li>
                                                                    <li>52</li>
                                                                    <li>54</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right"><span class="color">US</span></td>
                                                            <td>
                                                                <ul class="sizes-row">
                                                                    <li>14</li>
                                                                    <li>16</li>
                                                                    <li>18</li>
                                                                    <li>20</li>
                                                                    <li>22</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right"><span class="color">Australia</span></td>
                                                            <td>
                                                                <ul class="sizes-row">
                                                                    <li>8</li>
                                                                    <li>10</li>
                                                                    <li>12</li>
                                                                    <li>14</li>
                                                                    <li>16</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-product-block col-xl-4 visible-xl">
                                <div class="delivery-banner" onclick="window.location.href = '#'">
                                    <div class="delivery-banner__icon"><span class="icon-redeem"></span></div>
                                    <div class="delivery-banner__text">
                                        <h3>SPECIAL OFFER 1+1=3</h3>
                                        <h5>Get a gift!</h5>
                                        <p>Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis.</p>
                                    </div>
                                </div>
                                <div class="delivery-banner" onclick="window.location.href = '#'">
                                    <div class="delivery-banner__icon"><span class="icon-card_membership"></span></div>
                                    <div class="delivery-banner__text">
                                        <h3>FREE REWARD CARD</h3>
                                        <h5>Worth 10$, 50$, 100$</h5>
                                        <p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
                                    </div>
                                </div>
                                <div class="delivery-banner" onclick="window.location.href = '#'">
                                    <div class="delivery-banner__icon"><span class="icon-local_shipping"></span></div>
                                    <div class="delivery-banner__text">
                                        <h3>Free Shipping</h3>
                                        <h5>on orders over $100</h5>
                                        <p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
                                    </div>
                                </div>
                                <div class="delivery-banner" onclick="window.location.href = '#'">
                                    <div class="delivery-banner__icon"><span class="icon-replay_5"></span></div>
                                    <div class="delivery-banner__text">
                                        <h3>Order Return</h3>
                                        <h5>Returns within 5 days</h5>
                                        <p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
                                    </div>
                                </div>
                                <div class="divider-line"></div>
                                <h4 class="text-uppercase">Related Products</h4>
                                <p>Check items to add to the cart or <a href="#" class="color">select all</a></p>
                                <div class="vertical-carousel vertical-carousel-2 with-checkbox offset-top-40">
                                    <div class="vertical-carousel__item">
                                        <div class="vertical-carousel__item__select pull-left">
                                            <div class="checkbox-group"><input type="checkbox" name="checkbox1" value="product1" id="checkBox1"><label for="checkBox1"><span class="check"></span> <span class="box"></span> &nbsp;</label></div>
                                        </div>
                                        <div class="vertical-carousel__item__image pull-left"><a href="#"><img src="<?php echo config_item('frontend_assets');?>images/product/product-80x100-3.jpg" alt=""></a></div>
                                        <div class="vertical-carousel__item__title">
                                            <h2><a href="#">Quis nostrud exercit ation</a></h2>
                                        </div>
                                        <div class="price-box">$26.00<span class="price-box__old">$28.00</span></div>
                                        <div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                    </div>
                                    <div class="vertical-carousel__item">
                                        <div class="vertical-carousel__item__select pull-left">
                                            <div class="checkbox-group"><input type="checkbox" name="checkbox2" value="product2" id="checkBox2"><label for="checkBox2"><span class="check"></span> <span class="box"></span> &nbsp;</label></div>
                                        </div>
                                        <div class="vertical-carousel__item__image pull-left"><a href="#"><img src="<?php echo config_item('frontend_assets');?>images/product/product-80x100-4.jpg" alt=""></a></div>
                                        <div class="vertical-carousel__item__title">
                                            <h2><a href="#">Quis nostrud exercit ation</a></h2>
                                        </div>
                                        <div class="price-box">$26.00<span class="price-box__old">$28.00</span></div>
                                        <div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                    </div>
                                    <div class="vertical-carousel__item">
                                        <div class="vertical-carousel__item__select pull-left">
                                            <div class="checkbox-group"><input type="checkbox" name="checkbox3" value="product3" id="checkBox3"><label for="checkBox3"><span class="check"></span> <span class="box"></span> &nbsp;</label></div>
                                        </div>
                                        <div class="vertical-carousel__item__image pull-left"><a href="#"><img src="<?php echo config_item('frontend_assets');?>images/product/product-80x100-1.jpg" alt=""></a></div>
                                        <div class="vertical-carousel__item__title">
                                            <h2><a href="#">Quis nostrud exercit ation</a></h2>
                                        </div>
                                        <div class="price-box">$26.00<span class="price-box__old">$28.00</span></div>
                                        <div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                    </div>
                                    <div class="vertical-carousel__item">
                                        <div class="vertical-carousel__item__select pull-left">
                                            <div class="checkbox-group"><input type="checkbox" name="checkbox4" value="product4" id="checkBox4"><label for="checkBox4"><span class="check"></span> <span class="box"></span> &nbsp;</label></div>
                                        </div>
                                        <div class="vertical-carousel__item__image pull-left"><a href="#"><img src="<?php echo config_item('frontend_assets');?>images/product/product-80x100-2.jpg" alt=""></a></div>
                                        <div class="vertical-carousel__item__title">
                                            <h2><a href="#">Quis nostrud exercit ation</a></h2>
                                        </div>
                                        <div class="price-box">$26.00<span class="price-box__old">$28.00</span></div>
                                        <div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- related products -->
                <section class="content">
                    <div class="container">
                        <!-- title -->
                        <div class="title-with-button">
                            <div class="carousel-products__center pull-right"> <span class="btn-prev"></span> <span class="btn-next"></span> </div>
                            <h2 class="text-left text-uppercase title-under pull-left">YOU MAY ALSO BE INTERESTED IN THE FOLLOWING PRODUCT(S)</h2>
                        </div>
                        <!-- /title -->
                        <!-- carousel -->
                        <div class="carousel-products row" id="carouselRelated">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-one-six">
                                <!-- product -->
                                <div class="product">
                                    <div class="product__inside">
                                        <!-- product image -->
                                        <div class="product__inside__image">
                                            <a href="#"> <img src="<?php echo config_item('frontend_assets');?>images/product/product-1.jpg" alt=""> </a>
                                            <!-- quick-view -->
                                            <a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>
                                            <!-- /quick-view -->
                                        </div>
                                        <!-- /product image -->
                                        <!-- product name -->
                                        <div class="product__inside__name">
                                            <h2><a href="#">Mauris lacinia lectus</a></h2>
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
                                            <a href="#">1 Review(s)</a> <a href="#">Add Your Review</a>
                                        </div>
                                        <!-- /product review -->
                                        <div class="product__inside__hover">
                                            <!-- product info -->
                                            <div class="product__inside__info">
                                                <div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
                                                    <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                                                    <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                                                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a>
                                                </div>
                                                <ul class="product__inside__info__link hidden-xs">
                                                    <li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
                                                    <li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
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
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-one-six">
                                <!-- product -->
                                <div class="product">
                                    <div class="product__inside">
                                        <!-- product image -->
                                        <div class="product__inside__image">
                                            <a href="#"> <img src="<?php echo config_item('frontend_assets');?>images/product/product-1.jpg" alt=""> </a>
                                            <!-- quick-view -->
                                            <a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>
                                            <!-- /quick-view -->
                                        </div>
                                        <!-- /product image -->
                                        <!-- product name -->
                                        <div class="product__inside__name">
                                            <h2><a href="#"> Mauris lacinia lectus</a></h2>
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
                                            <a href="#">1 Review(s)</a> <a href="#">Add Your Review</a>
                                        </div>
                                        <!-- /product review -->
                                        <div class="product__inside__hover">
                                            <!-- product info -->
                                            <div class="product__inside__info">
                                                <ul class="options-swatch options-swatch--color">
                                                    <li><a href="#"><span class="swatch-label"><img src="<?php echo config_item('frontend_assets');?>images/colors/blue.png"  alt=""/></span></a></li>
                                                    <li><a href="#"><span class="swatch-label"><img src="<?php echo config_item('frontend_assets');?>images/colors/yellow.png"  alt=""/></span></a></li>
                                                    <li><a href="#"><span class="swatch-label"><img src="<?php echo config_item('frontend_assets');?>images/colors/red.png"  alt=""/></span></a></li>
                                                </ul>
                                                <div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
                                                    <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                                                    <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                                                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a>
                                                </div>
                                                <ul class="product__inside__info__link hidden-xs">
                                                    <li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
                                                    <li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
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
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-one-six">
                                <!-- product -->
                                <div class="product">
                                    <div class="product__inside">
                                        <!-- product image -->
                                        <div class="product__inside__image">
                                            <a href="#"> <img src="<?php echo config_item('frontend_assets');?>images/product/product-1.jpg" alt=""> </a>
                                            <!-- quick-view -->
                                            <a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>
                                            <!-- /quick-view -->
                                        </div>
                                        <!-- /product image -->
                                        <!-- product name -->
                                        <div class="product__inside__name">
                                            <h2><a href="#">Mauris lacinia lectus</a></h2>
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
                                            <a href="#">1 Review(s)</a> <a href="#">Add Your Review</a>
                                        </div>
                                        <!-- /product review -->
                                        <div class="product__inside__hover">
                                            <!-- product info -->
                                            <div class="product__inside__info">
                                                <div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
                                                    <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                                                    <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                                                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a>
                                                </div>
                                                <ul class="product__inside__info__link hidden-xs">
                                                    <li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
                                                    <li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
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
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-one-six">
                                <!-- product -->
                                <div class="product">
                                    <div class="product__inside">
                                        <!-- product image -->
                                        <div class="product__inside__image">
                                            <a href="#"> <img src="<?php echo config_item('frontend_assets');?>images/product/product-1.jpg" alt=""> </a>
                                            <!-- quick-view -->
                                            <a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>
                                            <!-- /quick-view -->
                                        </div>
                                        <!-- /product image -->
                                        <!-- product name -->
                                        <div class="product__inside__name">
                                            <h2><a href="#">Mauris lacinia lectus</a></h2>
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
                                            <a href="#">1 Review(s)</a> <a href="#">Add Your Review</a>
                                        </div>
                                        <!-- /product review -->
                                        <div class="product__inside__hover">
                                            <!-- product info -->
                                            <div class="product__inside__info">
                                                <div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
                                                    <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                                                    <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                                                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a>
                                                </div>
                                                <ul class="product__inside__info__link hidden-xs">
                                                    <li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
                                                    <li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
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
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-one-six">
                                <!-- product -->
                                <div class="product sold-out">
                                    <div class="product__inside">
                                        <!-- product image -->
                                        <div class="product__inside__image">
                                            <a href="#"> <img src="<?php echo config_item('frontend_assets');?>images/product/product-1.jpg" alt=""> </a>
                                            <!-- label sold-out -->
                                            <div class="product__label--sold-out"> <span>sold<br>
											out</span>
                                            </div>
                                            <!-- /label sold-out -->
                                        </div>
                                        <!-- /product image -->
                                        <!-- product name -->
                                        <div class="product__inside__name">
                                            <h2><a href="#">Mauris lacinia lectus</a></h2>
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
                                            <a href="#">1 Review(s)</a> <a href="#">Add Your Review</a>
                                        </div>
                                        <!-- /product review -->
                                        <div class="product__inside__hover">
                                            <!-- product info -->
                                            <div class="product__inside__info">
                                                <div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
                                                    <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                                                    <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                                                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a>
                                                </div>
                                                <ul class="product__inside__info__link hidden-xs">
                                                    <li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
                                                    <li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
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
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-one-six">
                                <!-- product -->
                                <div class="product">
                                    <div class="product__inside">
                                        <!-- product image -->
                                        <div class="product__inside__image">
                                            <a href="#"> <img src="<?php echo config_item('frontend_assets');?>images/product/product-1.jpg" alt=""> </a>
                                            <!-- quick-view -->
                                            <a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>
                                            <!-- /quick-view -->
                                        </div>
                                        <!-- /product image -->
                                        <!-- product name -->
                                        <div class="product__inside__name">
                                            <h2><a href="#">Mauris lacinia lectus</a></h2>
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
                                            <a href="#">1 Review(s)</a> <a href="#">Add Your Review</a>
                                        </div>
                                        <!-- /product review -->
                                        <div class="product__inside__hover">
                                            <!-- product info -->
                                            <div class="product__inside__info">
                                                <div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
                                                    <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                                                    <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                                                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a>
                                                </div>
                                                <ul class="product__inside__info__link hidden-xs">
                                                    <li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
                                                    <li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
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
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-one-six">
                                <!-- product -->
                                <div class="product">
                                    <div class="product__inside">
                                        <!-- product image -->
                                        <div class="product__inside__image">
                                            <a href="#"> <img src="<?php echo config_item('frontend_assets');?>images/product/product-6.jpg" alt=""> </a>
                                            <!-- quick-view -->
                                            <a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>
                                            <!-- /quick-view -->
                                        </div>
                                        <!-- /product image -->
                                        <!-- product name -->
                                        <div class="product__inside__name">
                                            <h2><a href="#">Mauris lacinia lectus</a></h2>
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
                                            <a href="#">1 Review(s)</a> <a href="#">Add Your Review</a>
                                        </div>
                                        <!-- /product review -->
                                        <div class="product__inside__hover">
                                            <!-- product info -->
                                            <div class="product__inside__info">
                                                <div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
                                                    <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                                                    <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                                                    <a href="#" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a>
                                                </div>
                                                <ul class="product__inside__info__link hidden-xs">
                                                    <li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
                                                    <li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
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
                        </div>
                        <!-- /carousel -->
                    </div>
                </section>
                <!-- /related products -->
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