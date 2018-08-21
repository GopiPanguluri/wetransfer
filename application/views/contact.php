 <div class="page-title-bg indent-header-1 page-main-content m-bot-40">
                <div class="container">
                    <div class="page-title-container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>CONTACT</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="breadcrumb">
                                    <li><a class="a-invert" href="<?php echo config_item('root_dir');?>">HOME</a></li>
                                    <li class="active">CONTACT</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Google Maps -->
            <!--<div id="contact-link" class="google-map-container-footer">
			<div id="big-map-contact" class="google-map-footer"></div>
		</div>-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243480.39506283702!2d78.43127411593841!3d17.537029744614554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb84ad48255d29%3A0x410841a999b3433!2sSecunderabad%2C+Telangana!5e0!3m2!1sen!2sin!4v1507288324822" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- Google Maps / End -->

            <!-- CONTACT ONE PAGE FOOTER -->
            <div class="title-lines-container m-top-min-35">
                <div class="container">

                    <div class="row">
                        <div class="col-md-6 m-bot-50">
                            <!-- TITLE -->
                            <div class="title-lines">
                                <div class="title-lines-white-bg"></div>
                                <div class="title-block">
                                    SEND US A MESSAGE
                                </div>
                            </div>
                            <!-- CONTACT FORM -->
                            <div class="gray-bg-container m-top-min-35 ">
                                <div class="contact-form-container ">
                                    <form id="contact-form" action="php/contact-form.php" method="POST">
                                        <div class="row">
                                            <div>
                                                <div class="col-md-6 m-bot-15">
                                                    <!-- <label>Your name *</label> -->
                                                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" placeholder="NAME" required>
                                                </div>
                                                <div class="col-md-6 m-bot-15">
                                                    <!-- <label>Your email address *</label> -->
                                                    <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" placeholder="EMAIL" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div>
                                                <div class="col-md-12 m-bot-15">
                                                    <!-- <label>Subject</label> -->
                                                    <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" placeholder="SUBJECT" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div>
                                                <div class="col-md-12 m-bot-15">
                                                    <!-- <label>Message *</label> -->
                                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="7" class="form-control" name="message" id="message" placeholder="MESSAGE" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="submit" value="SEND MESSAGE" class="button medium thin-bg-dark" data-loading-text="Loading...">
                                            </div>
                                        </div>
                                    </form>
                                    <div class="alert alert-success hidden" id="contactSuccess">
                                        <strong>Success!</strong> Your message has been sent to us.
                                    </div>

                                    <div class="alert alert-danger hidden" id="contactError">
                                        <strong>Error!</strong> There was an error sending your message.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 m-bot-50">
                            <!-- TITLE -->
                            <div class="title-lines-2 m-bot-40">
                                <div class="title-block">
                                    CONTACT INFO
                                </div>
                            </div>
                            <!-- CONTACT INFO -->
                            <div class="contact-info-container wow fadeInRight" data-wow-duration="1100ms">
                                <div class="contact-info-item-container m-bot-20">
                                    <!-- Icon -->
                                    <div class="contact-info-icon-container">
                                        <span aria-hidden="true" class="icon_pin_alt contact-info-icon"></span>
                                    </div>
                                    <!-- <div class="contact-info-title">ADDRESS</div> -->
                                    <h2 class="title-20">ADDRESS</h2>
                                    <div class="contact-info-text">Company, 123 Aolsom, Suite 700, New York</div>
                                </div>
                                <div class="contact-info-item-container m-bot-20">
                                    <!-- Icon -->
                                    <div class="contact-info-icon-container">
                                        <span aria-hidden="true" class="icon_phone contact-info-icon"></span>
                                    </div>
                                    <h2 class="title-20">PHONE</h2>
                                    <div class="contact-info-text">(123) 4560-789, (123) 9870-654</div>
                                </div>
                                <div class="contact-info-item-container m-bot-40">
                                    <!-- Icon -->
                                    <div class="contact-info-icon-container">
                                        <span aria-hidden="true" class="icon_mail_alt contact-info-icon"></span>
                                    </div>
                                    <h2 class="title-20">EMAIL</h2>
                                    <div class="contact-info-text"><a class=" a-invert" href="mailto:email@felius.com">email@felius.com</a></div>
                                </div>
                                <div class="m-bot-20">
                                    <h2 class="title-20">WORK HOURS</h2>
                                    <div class="contact-info-text">
                                        <p>Monday - Friday: <strong>9:00 am - 10:00 pm</strong><br>Saturday - Sunday: <strong>Closed</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- PORTFOILIO CAROUSEL -->
            <!-- <div class="title-lines-container">
                <div class="container">
                    <div class="title-lines m-bot-30">
                        <div class="title-block">
                            OUR WORK
                        </div>
                        <div class="view-all-container">
                            <div class="customNavigation clearfix">
                                <div class="carousel-va-container">
                                    <a class="button medium gray-lite" href="#">VIEW ALL</a>
                                </div>
                                <div class="customNavigation-container">
                                    <a class="prev-blog"></a>
                                    <a class="next-blog"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row box-with-hover m-bot-40">
                        <div class="filter-portfolio clearfix">
                            <div id="owl-blog" class="owl-carousel portfolio-filter clearfix">
                               
                                <div class="item m-bot-30">
                                    <div class="view view-first hovered">
                                        <a href="images/content/blog-1.jpg" class="lightbox">
												<img src="images/content/blog-1.jpg" alt="Ipsum" >
												<div class="mask">
													<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
												</div>
											</a>
                                    </div>
                                    <div class="portfolio-item-caption-container">
                                        <a class="a-invert" href="#">LOREM IPSUM</a>
                                    </div>
                                </div>

                                
                                <div class="item m-bot-30">
                                    <div class="view view-first hovered">
                                        <a href="images/content/blog-sqr-2.jpg" class="lightbox">
												<img src="images/content/blog-sqr-2.jpg" alt="Ipsum" >
												<div class="mask">
													<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
												</div>
											</a>
                                    </div>
                                    <div class="portfolio-item-caption-container">
                                        <a class="a-invert" href="#">CRAES NUSTRO</a>
                                    </div>
                                </div>
                                
                                <div class="item m-bot-30">
                                    <div class="view view-first hovered">
                                        <a href="images/content/blog-sqr-3.jpg" class="lightbox">
												<img src="images/content/blog-sqr-3.jpg" alt="Ipsum" >
												<div class="mask">
													<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
												</div>
											</a>
                                    </div>
                                    <div class="portfolio-item-caption-container">
                                        <a class="a-invert" href="#">SED LECTUS</a>
                                    </div>
                                </div>
                                
                                <div class="item m-bot-30">
                                    <div class="view view-first hovered">
                                        <a href="images/content/blog-sqr-4.jpg" class="lightbox">
												<img src="images/content/blog-sqr-4.jpg" alt="Ipsum" >
												<div class="mask">
													<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
												</div>
											</a>
                                    </div>
                                    <div class="portfolio-item-caption-container">
                                        <a class="a-invert" href="#">IPSUM LECTUS</a>
                                    </div>
                                </div>
                                
                                <div class="item m-bot-30">
                                    <div class="view view-first hovered">
                                        <a href="images/content/blog-sqr-1.jpg" class="lightbox">
												<img src="images/content/blog-sqr-1.jpg" alt="Ipsum" >
												<div class="mask">
													<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
												</div>
											</a>
                                    </div>
                                    <div class="portfolio-item-caption-container">
                                        <a class="a-invert" href="#">SIT AMETIN</a>
                                    </div>
                                </div>
                               
                                <div class="item m-bot-30">
                                    <div class="view view-first hovered">
                                        <a href="images/content/blog-sqr-2.jpg" class="lightbox">
												<img src="images/content/blog-sqr-2.jpg" alt="Ipsum" >
												<div class="mask">
													<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
												</div>
											</a>
                                    </div>
                                    <div class="portfolio-item-caption-container">
                                        <a class="a-invert" href="#">NEC LOREM</a>
                                    </div>
                                </div>
                                
                                <div class="item m-bot-30">
                                    <div class="view view-first hovered">
                                        <a href="images/content/blog-sqr-3.jpg" class="lightbox">
												<img src="images/content/blog-sqr-3.jpg" alt="Ipsum" >
												<div class="mask">
													<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
												</div>
											</a>
                                    </div>
                                    <div class="portfolio-item-caption-container">
                                        <a class="a-invert" href="#">DONEC ALIQUET</a>
                                    </div>
                                </div>
                               
                                <div class="item m-bot-30">
                                    <div class="view view-first hovered">
                                        <a href="images/content/blog-sqr-4.jpg" class="lightbox">
												<img src="images/content/blog-sqr-4.jpg" alt="Ipsum" >
												<div class="mask">
													<div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
												</div>
											</a>
                                    </div>
                                    <div class="portfolio-item-caption-container">
                                        <a class="a-invert" href="#">FRINGILLA LACUS</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
               
            </div> -->
            <!-- End title-lines-container -->


       