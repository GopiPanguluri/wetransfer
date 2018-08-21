<link href="<?php echo config_item('ui_base_path').'custom/projects/'; ?>css/owl.carousel.css" rel="stylesheet"/>
<link href="<?php echo config_item('ui_base_path').'custom/projects/'; ?>css/owl.transitions.css" rel="stylesheet"/>
<link href="<?php echo config_item('ui_base_path').'custom/projects/'; ?>css/main.css" rel="stylesheet"/>
<style>
body {
    padding-top: 0;
}
</style>
<section id="main-slider">
    <div class="owl-carousel">
        <div class="item" style="background-image: url(<?php echo config_item('ui_base_path').'custom/projects/'; ?>images/bg1.jpg);">
            <div class="slider-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="carousel-content">
                                <h2 class="content-h2">Construction Bay Projects</h2>
                                <p class="content-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br/>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                <form>
                                  <div class="form-group">
                                     <input type="text" class="form-control" id="q1" placeholder="Keywords">
                                  </div>
                                  
                                </form>
                                <a class="btn btn-primary btn-lg search_q" data-val='q1'  href="javascript:void(0)">Find Out More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.item-->
         <div class="item" style="background-image: url(<?php echo config_item('ui_base_path').'custom/projects/'; ?>images/bg2.jpg);">
            <div class="slider-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="carousel-content">
                                <h2 class="content-h2">Construction Bay Projects</h2>
                                <p class="content-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br/>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                <form>
                                  <div class="form-group">
                                     <input type="text" class="form-control" id="q2" placeholder="Keywords">
                                  </div>
                                  
                                </form>
                                <a class="btn btn-primary btn-lg search_q" data-val='q2'  href="javascript:void(0)">Find Out More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.item-->
    </div><!--/.owl-carousel-->
</section>
<?php 
$random_keys=array_rand($category,6);
?>
<section id="services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Browse Category</h2>
            <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
        <div class="row">
            <div class="features">
                <?php foreach($random_keys as $key=>$value){?>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                    <div class="media service-box">
                        <div class="pull-left">
                            <img src="<?php echo config_item('ui_base_path').'custom/projects/'; ?>images/icon1.png" alt="img">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading "><?php echo $category[$value];?></h4>
                          
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <?php } ?>

                
            
             
            </div>
        </div><!--/.row-->    
    </div><!--/.container-->
</section>






