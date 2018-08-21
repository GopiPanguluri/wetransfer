<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8"/>
    <title>CONSTRUCTION BAY - SHOP PAGE</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="CB - Responsive HTML5 Template"/>
    <meta name="author" content="CB"/>
    <link rel="shortcut icon" href="<?php echo config_item('frontend_assets');?>favicon.ico"/>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- External Plugins CSS -->
    <link rel="stylesheet" href="<?php echo config_item('frontend_assets');?>shop-external/slick/slick.css"/>
    <link rel="stylesheet" href="<?php echo config_item('frontend_assets');?>shop-external/slick/slick-theme.css"/>
    <link rel="stylesheet" href="<?php echo config_item('frontend_assets');?>shop-external/magnific-popup/magnific-popup.css"/>
    <link rel="stylesheet" href="<?php echo config_item('frontend_assets');?>shop-external/nouislider/nouislider.css"/>
    <link rel="stylesheet" href="<?php echo config_item('frontend_assets');?>shop-external/bootstrap-select/bootstrap-select.css"/>
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('frontend_assets');?>shop-external/rs-plugin/css/settings.css" media="screen" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo config_item('frontend_assets');?>shop-css/style.css"/>
    <!-- Icon Fonts  -->
    <link rel="stylesheet" href="<?php echo config_item('frontend_assets');?>css/icons-fonts.css"/>
    <link rel="stylesheet" href="<?php echo config_item('frontend_assets');?>shop-font/style.css"/>
    <!-- Head Libs -->
    <!-- Modernizr -->
    <!-- CSS begin -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo config_item('frontend_assets');?>css/bootstrap.min.css"/>
    <!--GOOGLE FONT-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,700,300,400' rel='stylesheet' type='text/css'/>
    <!-- REVOSLIDER CSS SETTINGS in custom.css-->
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('frontend_assets');?>rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('frontend_assets');?>css/revo-slider/custom.css" />
    <!-- IE warning CSS -->
    <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie-warning.css" ><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8-fix.css" ><![endif]-->
    <!--Icons ELEGANT FONT & FONT AWESOME-->
    <!--[if lte IE 7]><script src="js/lte-ie7.js"></script><![endif]-->
    <!-- Magnific popup  in style.css-->
    <!-- Owl Carousel Assets in style.css -->
    <!--CSS theme-->
    <link rel="stylesheet" href="<?php echo config_item('frontend_assets');?>css/style.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>plugins/iCheck/all.css"/>
    <!--STILE SWITCHER in style.css-->
    <link rel="stylesheet" href="<?php echo config_item('frontend_assets');?>css/layout/wide.css" id="layout">
    <link rel="stylesheet" href="<?php echo config_item('frontend_assets');?>css/colors/blue.css" id="colors">
    <!-- ANIMATE -->
    <link rel='stylesheet' href="<?php echo config_item('frontend_assets');?>css/animate.min.css">
    <!-- MODERNIZR -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <!-- CSS end -->
    <!-- JS begin some js files in bottom of file-->
    <!--[if lte IE 7]><script src="js/lte-ie7.js"></script><![endif]-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <script src="<?php echo config_item('frontend_assets');?>shop-external/modernizr/modernizr.js"></script>
    <style>
        .product__inside__image img{
            max-width: 250px;
            height: 250px;
        }
    </style>
</head>
<body class="fixed-header preloader-overflow normal-page">
    <!-- Pre LOADER -->
    <div id="preloader" class="se-pre-con">
        <div class="preloader-container">

            <div id="fountainG">
                <div id="fountainG_1" class="fountainG">
                </div>
                <div id="fountainG_2" class="fountainG">
                </div>
                <div id="fountainG_3" class="fountainG">
                </div>
            </div>

        </div>
    </div>

    <div id="wrap" class="boxed ">
        <div class="grey-bg ">
            <!-- Grey bg  -->

            <!--[if lte IE 7]>
	<div id="ie-container">
		<div id="ie-cont-close">
			<a href='#' onclick='javascript&#058;this.parentNode.parentNode.style.display="none"; return false;'><img src='images/ie-warn/ie-warning-close.jpg' style='border: none;' alt='Close'></a>
		</div>
		<div id="ie-cont-content" >
			<div id="ie-cont-warning">
				<img src='images/ie-warn/ie-warning.jpg' alt='Warning!'>
			</div>
			<div id="ie-cont-text" >
				<div id="ie-text-bold">
					You are using an outdated browser
				</div>
				<div id="ie-text">
					For a better experience using this site, please upgrade to a modern web browser.
				</div>
			</div>
			<div id="ie-cont-brows" >
				<a href='http://www.firefox.com' target='_blank'><img src='images/ie-warn/ie-warning-firefox.jpg' alt='Download Firefox'></a>
				<a href='http://www.opera.com/download/' target='_blank'><img src='images/ie-warn/ie-warning-opera.jpg' alt='Download Opera'></a>
				<a href='http://www.apple.com/safari/download/' target='_blank'><img src='images/ie-warn/ie-warning-safari.jpg' alt='Download Safari'></a>
				<a href='http://www.google.com/chrome' target='_blank'><img src='images/ie-warn/ie-warning-chrome.jpg' alt='Download Google Chrome'></a>
			</div>
		</div>
	</div>
	<![endif]-->

            <!-- HEADER 1 -->
            <?php $this->load->view('common/header_menu'); ?>
            <!-- header -->