<?php if(count($list_companies)!==0){ foreach($list_companies as $row_prod){ ?>
    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
      <!-- product -->
        <div class="product product--zoom">
            <div class="product__inside">
                <div class="product__inside__image">
                    <a href="<?php $company_name = str_replace(' ', '-', $row_prod['cd_name']); echo base_url('micro_site/index/'.$company_name);?>"> <img src="<?php echo company_img($row_prod['cd_image']); ?>" alt=""/> </a>
                </div>
                <div class="product__inside__name">
                    <h2><a href="<?php echo base_url('micro_site/index/'.$company_name);?>"><?php echo $row_prod['cd_name'];?></a></h2>
                </div>
                <div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
                <div class="product__inside__hover">
                    <div class="product__inside__info">
                        <?php /*<div class="product__inside__info__btns"><a href="javascript:void(0)" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
                            <a href="javascript:void(0)" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                            <a href="javascript:void(0)" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a>
                        </div>*/ ?>
                        <ul class="product__inside__info__link hidden-sm">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } } ?>