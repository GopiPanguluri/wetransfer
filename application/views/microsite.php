<?php //echo '<pre>'; print_r($company_details);exit; ?>
<!-- PAGE TITLE 1 -->
<div class="page-title-bg indent-header-1 page-main-content m-bot-40">
    <div class="container">
        <div class="page-title-container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php echo $company_details['cd_name']; ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a class="a-invert" href="<?php echo base_url(); ?>">HOME</a></li>
                        <li class="active"><?php echo $company_details['cd_name']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
 <div class="container">

                <div class="row">
                    <div class="col-md-12">

    <div class="profile clearfix">                            
        <div class="image">
            <img src="<?php echo microsite_banner($microsite_details['mic_banner_image']);?>" style="height: 200px; width: -webkit-fill-available;"  alt="project">
        </div>                            
        <div class="user clearfix">
            <div class="avatar">
                <img src="<?php echo microsite_img($microsite_details['mic_prof_image']);?>" class="img-thumbnail img-profile">
            </div>                                
            <!--h2><?php //echo $company_details['cd_name']; ?></h2--> 
            <div class="actions">
                <div class="btn-group">
                    <button class="btn btn-default btn-sm tip btn-responsive" title="" data-original-title="Add to friends"><span class="glyphicon glyphicon-plus glyphicon glyphicon-white"></span> FOLLOW</button>
                    <button class="btn btn-default btn-sm tip btn-responsive" title="" data-original-title="Send message" data-toggle="modal" data-target="#send_message"><span class="glyphicon glyphicon-envelope glyphicon glyphicon-white"></span> Message</button>
                    <!--button class="btn btn-default btn-sm tip btn-responsive" title="" data-original-title="Recommend"><span class="glyphicon glyphicon-share-alt glyphicon glyphicon-white"></span> GET FREE QUOTE</button-->
                </div>
            </div>                                                                                                
        </div>                          
        <div class="info">
            <p><i class="fa fa-university" aria-hidden="true"></i> <span class="title"><?php echo $type_categories[$user_details['c_id']]; ?></span></p>                                  
            <p><span class="glyphicon glyphicon-gift"></span> <span class="title">Incorporation Date:</span><?php echo date('d M Y',strtotime($company_details['cd_incorp_date'])); ?></p>
            <div>      
              <!--span><i class="fa fa-money" aria-hidden="true"></i> Rs. 6 Lacs</span-->
      <span><i class="fa fa-building-o" aria-hidden="true"></i><?php echo $company_details['cd_area'].'-'.$company_details['cd_address']; ?></span>    </div>
        </div>                              
    </div>
                   
     </div>
            </div>
            <div class="col-md-12 mrg_bot">
                                    <div class="tabs custom-tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab1" data-toggle="tab">Description</a>
                                            </li>
                                            <!--li>
                                                <a href="#tab2" data-toggle="tab">DESIGN BOARDS</a>
                                            </li-->
                                        </ul>
                                        <div class="tab-content">
                                            <div id="tab1" class="tab-pane tab-content-container active">
                                                <p><?php echo $company_details['cd_desc']; ?></p>
                                                <div class="row">
                                                  <div class="col-md-6">
                                                    <table class="table table-params">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-right"><span class="color">Contact Name</span></td>
                                                                <td><?php echo $company_details['cd_contact_name']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-right"><span class="color">Mobile</span></td>
                                                                <td><?php echo $company_details['cd_mobile']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-right"><span class="color">Email</span></td>
                                                                <td><?php echo $company_details['cd_email']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-right"><span class="color">Country</span></td>
                                                                <td><?php echo $countries[$company_details['cd_country_id']]; ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <table class="table table-params">
                                                        <tbody>
                                                            
                                                            <tr>
                                                                <td class="text-right"><span class="color">State</span></td>
                                                                <td><?php echo $states[$company_details['cd_state_id']]; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-right"><span class="color">City</span></td>
                                                                <td><?php echo $cities[$company_details['cd_city_id']]; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-right"><span class="color">Address</span></td>
                                                                <td><?php echo $company_details['cd_address']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-right"><span class="color">Postal code</span></td>
                                                                <td><?php echo $company_details['cd_postal_code']; ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                    <?php /* foreach($products_list as $rw_prods){ ?>
                                                    	<div class="col-xs-12 col-sm-6 col-md-3 wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
                                                    		<div class="m-top-30 m-bot-30 clearfix">	
                                                    			<div class="team-img-container clearfix">	
                                                    				<a class="" href="#">
                                                    					<img alt="" src="<?php echo products_img($rw_prods['product_image']); ?>">
                                                    				</a>	
                                                    			</div>
                                                    			<div class="team-item-descr">
                                                    				<div class="team-item-name"><a class="a-invert" href="#">TEAM MEMBER1</a></div>
                                                    				<div class="team-item-role">CEO</div>
                                                    			</div>
                                                    		</div>
                                                    	</div>
                                                    <?php } */ ?>
                                                </div>
                                            </div>
                                            <!--div id="tab2" class="tab-pane tab-content-container">
                                                <p>Nesciunt tofu stumptown aliqua, sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                                            </div-->
                                        </div>
                                    </div>
                                </div>
      </div>
                    
<div class="container portfolio-filter-container">
<div class="row m-bot-30">
<div id="options" class="col-md-12">
	<ul id="filters" class="option-set clearfix" data-option-key="filter"> 
		<li><a href="#filter" data-option-value="*" class="selected">ALL</a></li> 
		<li><a href="#filter" data-option-value=".category1" class=""><?php echo $type_categories[$user_details['c_id']]; ?></a></li> 
		<!--li><a href="#filter" data-option-value=".category2" class="">CRAES NUSTRO</a></li> 
		<li><a href="#filter" data-option-value=".category3" class="">IPSUM LECTUS</a></li--> 
	</ul>
</div>
</div>

<div class="row box-with-hover">
<div class="filter-portfolio clearfix">
	<div id="filter-container" class="clearfix" style="position: relative; height: 1200px;">
	<!-- PORTFOLIO ITEM 1-->
		<!--div class="element category1 col-xs-12 col-sm-6 col-md-4 m-bot-30" style="position: absolute; left: 0px; top: 0px;">
				<div class="view view-first hovered">
					<a href="<?php //echo config_item('frontend_assets');?>images/content/blog-1.jpg" class="lightbox">
						<img src="<?php //echo config_item('frontend_assets');?>images/content/blog-1.jpg" alt="Ipsum"/>
						<div class="mask">
							<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
						</div>
					</a>
				</div>
				<div class="portfolio-item-caption-container">
					<a class="a-invert" href="#">LOREM IPSUM</a>
				</div>
		</div-->
        <div class="row">
            <?php foreach($products_list as $rw_prods){ ?>
            	<div class="category1 col-xs-12 col-sm-6 col-md-3 wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
            		<div class="m-top-30 m-bot-30 clearfix">	
            			<div class="team-img-container clearfix">	
            				<a class="" href="<?php echo base_url('micro_site/product_details/'.$rw_prods['product_id']); ?>">
            					<img alt="" src="<?php echo products_img($rw_prods['product_image']); ?>"/>
            				</a>	
            			</div>
            			<div class="team-item-descr">
            				<div class="team-item-name"><a class="a-invert" href="<?php echo base_url('micro_site/product_details/'.$rw_prods['product_id']); ?>"><?php echo $rw_prods['product_name']; ?></a></div>
            				<div class="team-item-role">CEO</div>
            			</div>
            		</div>
            	</div>
            <?php } ?>
         </div>
		
<!-- PORTFOLIO ITEM 2-->
		<!--div class="element category2 col-xs-12 col-sm-6 col-md-4 m-bot-30" style="position: absolute; left: 400px; top: 0px;">
				<div class="view view-first hovered">
					<a href="images/content/blog-3.jpg" class="lightbox">
						<img src="<?php echo config_item('frontend_assets');?>images/content/blog-3.jpg" alt="Ipsum">
						<div class="mask">
							<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
						</div>
					</a>
				</div>
				<div class="portfolio-item-caption-container">
					<a class="a-invert" href="#">CRAES NUSTRO</a>
				</div>
		</div-->
<!-- PORTFOLIO ITEM 3 YOUTUBE VIDEO-->
		<!--div class="element category1 col-xs-12 col-sm-6 col-md-4 m-bot-30" style="position: absolute; left: 800px; top: 0px;">
						<div class="view view-first blog-hover hovered">
							<a class="popup-youtube" href="https://www.youtube.com/watch?v=0gv7OC9L2s8">
								<img src="<?php echo config_item('frontend_assets');?>images/content/blog-2.jpg" alt="Ipsum">
								<div class="mask">
									<div class="zoom info"><span aria-hidden="true" class="icon_film"></span></div>
								</div>
							</a>
						</div>
				<div class="portfolio-item-caption-container">
					<a class="a-invert" href="#">YOUTUBE VIDEO</a>
				</div>
		</div-->
<!-- PORTFOLIO ITEM 4-->
		<!--div class="element category1 col-xs-12 col-sm-6 col-md-4 m-bot-30" style="position: absolute; left: 0px; top: 400px;">
				<div class="view view-first hovered">
					<a href="images/content/blog-2.jpg" class="lightbox">
						<img src="<?php echo config_item('frontend_assets');?>images/content/blog-2.jpg" alt="Ipsum">
						<div class="mask">
							<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
						</div>
					</a>
				</div>
				<div class="portfolio-item-caption-container">
					<a class="a-invert" href="#">IPSUM LECTUS</a>
				</div>
		</div-->
											
<!-- PORTFOLIO ITEM 5 CAROUSEl AUTO-->
		<?php /* <div class="element category2 col-xs-12 col-sm-6 col-md-4 m-bot-30" style="position: absolute; left: 400px; top: 400px;">
				<div class="owl-no-row pos-relative">
					<div id="owl-1-pag-auto" class="owl-carousel popup-gallery2 owl-controls-style-2 box-with-hover owl-theme" style="opacity: 1; display: block;">
					<!-- ITEM -->	
						<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 2220px; left: 0px; display: block; transition: all 800ms ease; transform: translate3d(-740px, 0px, 0px);"><div class="owl-item" style="width: 370px;"><div class="item m-bot-0">	
							<div class="view view-first hovered">
								<a href="images/content/blog-4.jpg">
									<img src="<?php echo config_item('frontend_assets');?>images/content/blog-4.jpg" alt="Ipsum">
									<div class="mask">
										<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
									</div>
								</a>
							</div>
						</div></div><div class="owl-item" style="width: 370px;"><div class="item m-bot-0">	
							<div class="view view-first hovered ">
								<a href="images/content/blog-3.jpg">
									<img src="<?php echo config_item('frontend_assets');?>images/content/blog-3.jpg" alt="Ipsum">
									<div class="mask">
										<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
									</div>
								</a>
							</div>
						</div></div><div class="owl-item" style="width: 370px;"><div class="item m-bot-0">	
							<div class="view view-first hovered ">
								<a href="images/content/blog-4.jpg">
									<img src="<?php echo config_item('frontend_assets');?>images/content/blog-4.jpg" alt="Ipsum">
									<div class="mask">
										<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
									</div>
								</a>
							</div>
						</div></div></div></div>
					<!-- ITEM -->		
						
					
					<!-- ITEM -->		
						
						
					<div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page active"><span class=""></span></div></div></div></div>
					<div class="customNavigation-container">	
						<a class="prev-carousel-default"><span aria-hidden="true" class="arrow_carrot-left"></span></a>
						<a class="next-carousel-default"><span aria-hidden="true" class="arrow_carrot-right"></span></a>
					</div>
				</div>	
				<div class="portfolio-item-caption-container">
					<a class="a-invert" href="#">SIT AMETIN</a>
				</div>
		</div> 
<!-- PORTFOLIO ITEM 6-->
		<div class="element category3 col-xs-12 col-sm-6 col-md-4 m-bot-30" style="position: absolute; left: 800px; top: 400px;">
				<div class="view view-first hovered">
					<a href="images/content/blog-4.jpg" class="lightbox">
						<img src="<?php echo config_item('frontend_assets');?>images/content/blog-4.jpg" alt="Ipsum">
						<div class="mask">
							<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
						</div>
					</a>
				</div>
				<div class="portfolio-item-caption-container">
					<a class="a-invert" href="#">NEC LOREM</a>
				</div>
		</div> 
<!-- PORTFOLIO ITEM 7-->
		<div class="element category1 col-xs-12 col-sm-6 col-md-4 m-bot-30" style="position: absolute; left: 0px; top: 800px;">
				<div class="view view-first hovered">
					<a href="images/content/blog-4.jpg" class="lightbox">
						<img src="<?php echo config_item('frontend_assets');?>images/content/blog-4.jpg" alt="Ipsum">
						<div class="mask">
							<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
						</div>
					</a>
				</div>
				<div class="portfolio-item-caption-container">
					<a class="a-invert" href="#">DONEC ALIQUET</a>
				</div>
		</div>
<!-- PORTFOLIO ITEM 8 VIMEO VIDEO-->
		<div class="element category2 col-xs-12 col-sm-6 col-md-4 m-bot-30" style="position: absolute; left: 400px; top: 800px;">
				<div class="view view-first blog-hover hovered">
							<a class="popup-vimeo" href="https://vimeo.com/45830194">
								<img src="<?php echo config_item('frontend_assets');?>images/content/blog-2.jpg" alt="Ipsum">
								<div class="mask">
									<div class="zoom info"><span aria-hidden="true" class="icon_film"></span></div>
								</div>
							</a>
						</div>
				<div class="portfolio-item-caption-container">
					<a class="a-invert" href="#">VIMEO VIDEO</a>
				</div>
		</div> 

<!-- PORTFOLIO ITEM 9-->
		<div class="element category1 col-xs-12 col-sm-6 col-md-4 m-bot-30" style="position: absolute; left: 800px; top: 800px;">
				<div class="view view-first hovered">
					<a href="images/content/blog-4.jpg" class="lightbox">
						<img src="<?php echo config_item('frontend_assets');?>images/content/blog-4.jpg" alt="Ipsum">
						<div class="mask">
							<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
						</div>
					</a>
				</div>
				<div class="portfolio-item-caption-container">
					<a class="a-invert" href="#">LOREM IPSUM</a>
				</div>
		</div> */ ?>

	</div>
</div>
</div>

</div>
<div id="footer-offset">
    <!-- NEWS LETTER -->
    <div class="title-lines-container">
        <div class="container">

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
        <!-- container end -->
    </div>
</div>
<div id="send_message" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Send message</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Subject</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="subject" placeholder="Subject"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Message</label>
                    <div class="col-sm-10">
                        <textarea name="message" id="message" class="form-control" placeholder="Message"></textarea>
                    </div>
                  </div>
               </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send</button>
            </div>
        </div>
    </div>
</div>