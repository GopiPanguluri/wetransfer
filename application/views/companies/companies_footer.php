
           <!-- FOOTER 1 - LIGHT -->
                <?php $this->load->view('common/home_footer_nav'); ?>

        </div>
        <!-- End BG -->
    </div>
    <!-- End wrap -->
    <!-- / Modal (quickViewModal) -->
    <!-- END FOOTER section -->
    <!-- External JS -->
    <!-- jQuery 1.10.1-->
    <script src="<?php echo config_item('frontend_assets');?>shop-external/jquery/jquery-2.1.4.min.js"></script>
    <!-- Bootstrap 3-->
    <script src="<?php echo config_item('frontend_assets');?>shop-external/bootstrap/bootstrap.min.js"></script>
    <!-- Specific Page External Plugins -->
    <script src="<?php echo config_item('frontend_assets');?>shop-external/slick/slick.min.js"></script>
    <script src="<?php echo config_item('frontend_assets');?>shop-external/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="<?php echo config_item('frontend_assets');?>shop-external/countdown/jquery.plugin.min.js"></script>
    <script src="<?php echo config_item('frontend_assets');?>shop-external/countdown/jquery.countdown.min.js"></script>
    <script src="<?php echo config_item('frontend_assets');?>shop-external/instafeed/instafeed.min.js"></script>
    <script src="<?php echo config_item('frontend_assets');?>shop-external/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo config_item('frontend_assets');?>shop-external/nouislider/nouislider.min.js"></script>
    <script src="<?php echo config_item('frontend_assets');?>shop-external/isotope/isotope.pkgd.min.js"></script>
    <script src="<?php echo config_item('frontend_assets');?>shop-external/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo config_item('frontend_assets');?>shop-external/colorbox/jquery.colorbox-min.js"></script>
    <!-- Custom -->
    <script src="<?php echo config_item('frontend_assets');?>shop-js/custom.js"></script>
    <script src="<?php echo config_item('frontend_assets');?>shop-js/js-product.js"></script>
    <!-- JS begin -->
    <!-- jQuery  -->
    <script type="text/javascript" src="<?php echo config_item('frontend_assets');?>js/jquery.min.js"></script>

    <script src="<?php echo config_item('frontend_assets');?>js/jquery-ui.min.js"></script>
    <!-- IMAGESLOADED -->
    <script src="<?php echo config_item('frontend_assets');?>js/jquery.imagesloaded.min.js"></script>

    <!-- REVOSLIDER SCRIPTS  -->
    <script type="text/javascript" src="<?php echo config_item('frontend_assets');?>rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo config_item('frontend_assets');?>rs-plugin/js/jquery.themepunch.revolution-custom.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo config_item('frontend_assets');?>js/bootstrap.min.js"></script>

    <!-- JS FOR OWL CAROUSEL -->
    <script src="<?php echo config_item('frontend_assets');?>js/owl-carousel/owl.carousel.min.js"></script>

    <!-- SEARCH  SCRIPT IN MAIN JS  -->

    <!--GOOLE MAP-->
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=INSERT-YOUR-API-KEY-HERE"></script>
    <script type="text/javascript" src="<?php echo config_item('frontend_assets');?>js/gmap3.min.js"></script>

    <!-- MAGNIFIC POPUP -->
    <script src='<?php echo config_item('frontend_assets');?>js/jquery.magnific-popup.js'></script>

    <!-- MAIN SCRIPT -->
    <script src="<?php echo config_item('frontend_assets');?>js/main.js"></script>
    <!--scrolling animation on-->
    <script src="<?php echo config_item('frontend_assets');?>js/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo config_item('root_dir'); ?>assets/ui/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo config_item('ui_base_path') ?>custom/js/jquery.validate.min.js"></script>
    <script src="<?php echo config_item('ui_base_path'); ?>plugins/iCheck/icheck.min.js"></script>
    <script>
        new WOW().init();
        
    </script>

    <!-- IMPORTANT SCRIPTS SETTINGS -->
    <script>
        $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
        //GOOGLE MAPS SETTINGS	--------------------------------------------------------
        var latlng = new google.maps.LatLng(-37.814199, 144.961734);

        //var latLng = [48.8620722, 2.352047];

        //GOOGLE MAP FOOTER	
        $(function() {
            $("#big-map-footer").gmap3({
                marker: {
                    //address: "385 Bourke St., Melbourne Victoria 3000 Australia", 
                    latLng: latlng,
                    data: "<h4>Office</h4>Your description is here.",
                    options: {
                        icon: "<?php echo config_item('frontend_assets');?>images/loc-marker.png"
                    },

                    events: {
                        click: function(marker, event, context) {
                            var map = $(this).gmap3("get"),
                                infowindow = $(this).gmap3({
                                    get: {
                                        name: "infowindow"
                                    }
                                });
                            if (infowindow) {
                                infowindow.open(map, marker);
                                infowindow.setContent(context.data);
                            } else {
                                $(this).gmap3({
                                    infowindow: {
                                        anchor: marker,
                                        options: {
                                            content: context.data
                                        }
                                    }
                                });
                            }
                        },
                    }

                },
                map: {

                    options: {
                        //center: latlng,
                        scrollwheel: false,
                        zoom: 18,

                        mapTypeId: "style2",
                        mapTypeControlOptions: {
                            mapTypeIds: [google.maps.MapTypeId.ROADMAP]
                        }
                    },

                },
                styledmaptype: {
                    id: "style2",
                    options: {
                        name: "Style 2"
                    },
                    styles: [{
                        stylers: [{
                                saturation: -80
                            },
                            {
                                hue: "#ffee00"
                            }
                        ]
                    }]
                },

            });
        });

        //PORTFOLIO FILTER-----------------------------------------------------

        var $container = $('#filter-container').imagesLoaded(function() {
            $container.isotope({
                itemSelector: '.element'
            });
        });


        var $optionSets = $('#options .option-set'),
            $optionLinks = $optionSets.find('a');

        $optionLinks.click(function() {
            var $this = $(this);
            // don't proceed if already selected
            if ($this.hasClass('selected')) {
                return false;
            }
            var $optionSet = $this.parents('.option-set');
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');

            // make option object dynamically, i.e. { filter: '.my-filter-class' }
            var options = {},
                key = $optionSet.attr('data-option-key'),
                value = $this.attr('data-option-value');
            // parse 'false' as false boolean
            value = value === 'false' ? false : value;
            options[key] = value;
            if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
                // changes in layout modes need extra logic
                changeLayoutMode($this, options)
            } else {
                // otherwise, apply new options
                $container.isotope(options);
            }

            return false;
        });

        //jQuery(document).ready START	------------------------------------------------
        jQuery(document).ready(function() {

            //REVOSLIDER SCRIPT-----------------------------------------------------			
            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none",
                delay: 16000,
                startwidth: 1170,
                startheight: 860,
                hideThumbs: 0,
                //hideArrows:100000,

                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 5,

                navigationType: "bullet",
                navigationArrows: "nexttobullets",
                navigationStyle: "preview4",

                hideTimerBar: "on",

                touchenabled: "on",
                onHoverStop: "on",

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                parallax: "mouse",
                parallaxBgFreeze: "on",
                parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

                keyboardNavigation: "off",

                navigationHAlign: "left",
                navigationVAlign: "bottom",
                navigationHOffset: 15,
                navigationVOffset: 216,

                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",

                spinner: "spinner4",

                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: "off",

                autoHeight: "off",
                forceFullWidth: "off",

                hideThumbsOnMobile: "on",
                hideNavDelayOnMobile: 1500,
                hideBulletsOnMobile: "on",
                hideArrowsOnMobile: "on",
                hideThumbsUnderResolution: 0,
                //hideArrowsOnMobile:"on",

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                videoJsPath: "video/",
                fullScreenOffsetContainer: ""
            });

            // Carousel CLIENTS Items-----------------------------------------------
            $("#owl-clients").owlCarousel({

                //Set AutoPlay to 3 seconds
                autoPlay: 5000,
                items: 5,
                itemsDesktop: [1000, 4], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 3], // betweem 900px and 601px
                itemsTablet: [470, 1], //2 items between 600 and 0
                itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
                // itemsDesktop : [1199,4],
                // itemsDesktopSmall : [991,1],
                // itemsTablet: [991,1],
                // itemsMobile : false,

                //Pagination
                pagination: false,
                paginationNumbers: false,

            });

            // Carousel Blog Items---------------------------------------------
            $("#owl-blog").owlCarousel({

                //Set AutoPlay to 3 seconds

                items: 4,
                itemsDesktop: [1000, 4], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 2], // betweem 900px and 601px
                itemsTablet: [470, 1], //2 items between 600 and 0
                itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
                // itemsDesktop : [1199,4],
                // itemsDesktopSmall : [991,1],
                // itemsTablet: [991,1],
                // itemsMobile : false,

                //Pagination
                pagination: false,
                paginationNumbers: false,

            });
            // Carousel Blog Items Controls------------------------------------
            var owl = $("#owl-blog");

            owl.owlCarousel();

            // Custom Navigation Events
            $(".next-blog").click(function() {
                owl.trigger('owl.next');
            })
            $(".prev-blog").click(function() {
                owl.trigger('owl.prev');
            })
            $(".play").click(function() {
                owl.trigger('owl.play', 1000);
            })
            $(".stop").click(function() {
                owl.trigger('owl.stop');
            });


        }); //document ready -END

    </script>

    <!-- Pre LOADER -->
    <script>
        window.onload = function() {
            document.body.removeChild(document.getElementById('preloader'));
            $('body').removeClass('preloader-overflow');
        }

    </script>
    <script type="text/javascript"> 
       var BASE_URL = '<?php echo base_url(); ?>';   
        $(window).scroll(function(){
        //if ($(window).scrollTop() == $(document).height() - $(window).height()){
        //if($(window).scrollTop() + $(window).height() > $(document).height() - 300) {
        if($(window).scrollTop() + $(window).height() == $(document).height()){
          //var pagenum = parseInt($(".pagenum:last").val()) ;
          if(flag){
            flag = false;
            $("#elseflag").val(2);          
            refine(2)
          }  
        }
    });
    
    $(document).ready(function(){
       $("#start").val(0);
        refine(1); 
    });
    
    //$(".category-products input[type='checkbox'], .category-products input[type='radio']").click(function(){
//        $("#start").val(0);
//        $("#elseflag").val(1);
//        refine(1);
//    });
    // ajax loading data
    var flag = true;
    function refine(type){
        //alert($("#start").val());
        $.ajax({
            url: BASE_URL + 'companies/get_items_companies',
            type: "POST",
            data: $('#refineproducts').serialize(),
            cache: false,
            beforeSend: function(){
                $('#loader-icon').show();
            },
            complete: function(){
                $('#loader-icon').hide();
            },
            success: function(data){
                
                var response = $.parseJSON(data);
                //alert(response.start);
                $("#start").val(response.start);
                flag = true;
                $("#products_count").html('');
                $(".filters-row__items").html(response.total_count+' Item(s)');
                if(type==1){
                    $(".product-listing").empty();
                    //$("#loader-icon").show();
                    //alert(response.count);
                    if(response.count==0){
                        $(".no_projects_found").html('<div class="alert alert-info no_prodts_found_mbls">No products found.</div>');
                    }else{
                        $(".product-listing").html(response.items);
                    }
                } else {
                    //$(".product-listing").empty();
                    //$(".product-listing").html('');
                    $(".product-listing").append(response.items);
                }
                
            },
            error: function(){
    		     
            } 	        
        });
    }
    </script>
    <!-- JS end -->
    <script>
        var BASE_URL = "<?php //echo base_url(); ?>";
        //var BASE_URL = "<?php //echo cofig_item("root_dir"); ?>";
        $(document).ready(function(){
        $.validator.setDefaults({
                ignore: []
        });
        $("#login_form").validate({
            rules:{
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength:5
                }
            },
            messages:{				
                email: {					
                    required: "Email should not leave empty.",
                    email: "Please enter valid email id."
                    },
                password: {					
                    required: "Password is required.",
                    minlength: "Please enter the password with minimum 5 characters"
                    }
            },
            submitHandler: function(form,event){
            event.preventDefault();// using this page stop being refreshing
            $.ajax({
                url: form.action,
                type: form.method,
                dataType: "json",
                data: $(form).serialize(),
                success: function(res) {
                    if(res.status==0){
                        $('#login_form .error_msg').hide();
                        $('#login_form .info_msg').show();
                        $('#login_form .info_msg').html(res.info_msg);
                        $(location).attr('href', BASE_URL + res.go_to)
                        redirect(res.go_to);
                    }else{
                        $('#login_form .error_msg').show();
                        $('#login_form .error_msg').html(res.errmsg);
                    }
                }            
            });
        }
        });
        });
        
        $(document).ready(function(){
        $.validator.setDefaults({
                ignore: []
        });
        $("#registr_form").validate({
            rules:{
                type_indi_com:{
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                name: {
                    required: true,
                    minlength:4
                },
                c_id: {
                    required: true
                },
                username: {
                    required: true,
                    minlength:4
                },
                mobile: {
                    required: true,
                    minlength:5
                },
                type: {
                    required: true
                },
                password: {
                    required: true,
                    minlength:5
                },
                con_password: {
                    required: true,
                    minlength:5,
                    equalTo:"#password"
                },
                terms: {
                    required: true
                }
            },
            messages:{				
                email: {					
                    required: "Email should not leave empty.",
                    email: "Please enter valid email id."
                    },
                password: {					
                    required: "Password is required.",
                    minlength: "Please enter the password with minimum 5 characters"
                    }
            },
            submitHandler: function(form,event){
            event.preventDefault();// using this page stop being refreshing
            $.ajax({
                url: form.action,
                type: form.method,
                dataType: "json",
                data: $(form).serialize(),
                success: function(res) {
                    if(res.status==0){
                        $('#registr_form .error_msg').hide();
                        $('#registr_form .info_msg').show();
                        $('#registr_form .info_msg').html(res.message);
                        $('#registr_form').trigger('reset');
                        //$(location).attr('href', BASE_URL + res.go_to)
                        window.setTimeout(function () {
                            $('#myModal').modal('hide');
                            $('#login-modal').modal('show');                        
                        }, 5000);
                    }else{
                        $('#registr_form .error_msg').show();
                        $('#registr_form .error_msg').html(res.message);
                    }
                }            
            });
        }
        });
        });
    </script>
</body>

</html>