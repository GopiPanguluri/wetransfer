<!DOCTYPE html>
<!--[if lt IE 7 ]> <html  class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html  class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html  class="ie8"> <![endif]-->
<!--[if (gt IE 8)|!(IE)]><!-->
<html>
<!--<![endif]-->
<head>
    <title>Constructions Bay- home</title>
    <meta charset=utf-8>
    <!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<![endif]-->
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="CB - Responsive HTML5 Template">
    <meta name="author" content="CB">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="favicon.ico">
    <!-- CSS begin -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo config_item('frontend_assets');?>css/bootstrap.min.css">
    <!--GOOGLE FONT-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,700,300,400' rel='stylesheet' type='text/css'>
    <!-- REVOSLIDER CSS SETTINGS in custom.css-->
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('frontend_assets');?>rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('frontend_assets');?>css/revo-slider/custom.css" />
    <!-- IE warning CSS -->
    <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie-warning.css" ><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8-fix.css" ><![endif]-->
    <!--Icons ELEGANT FONT & FONT AWESOME-->
    <link rel="stylesheet" href="<?php echo config_item('frontend_assets');?>css/icons-fonts.css"/>
    <!--[if lte IE 7]><script src="js/lte-ie7.js"></script><![endif]-->
    <!-- Magnific popup  in style.css-->
    <!-- Owl Carousel Assets in style.css -->
    <!--CSS theme-->
    <link rel="stylesheet" href="<?php echo config_item('frontend_assets');?>css/style.css"/>    
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>plugins/iCheck/all.css"/>
    <!--STILE SWITCHER in style.css-->
    <link rel="stylesheet" href="<?php echo config_item('frontend_assets');?>css/layout/wide.css" id="layout"/>
    <link rel="stylesheet" href="<?php echo config_item('frontend_assets');?>css/colors/blue.css" id="colors"/>
    <!-- ANIMATE -->
    <link rel='stylesheet' href="<?php echo config_item('frontend_assets');?>css/animate.min.css"/>
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
    <style>
        #myModal { overflow-y:scroll }
        #login-modal { overflow-y:scroll }
        .error{
            color: red;
            display: block;
        }
        .error_msg,.info_msg{
            display: none;
        }
        .buttons_row button{
            padding: 10px;
            margin-left: 5px;
            margin-right: 5px;
        }
        .our-services-categories .feature5-content{
            cursor: pointer;
        }
        .team-img-container img{
            height: 250px;
        }
        .navbar{
            padding: 0 0 !important;
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
			<a href='#' onclick='javascript&#058;this.parentNode.parentNode.style.display="none"; return false;'><img src='<?php echo config_item('frontend_assets');?>images/ie-warn/ie-warning-close.jpg' style='border: none;' alt='Close'></a>
		</div>
		<div id="ie-cont-content" >
			<div id="ie-cont-warning">
				<img src='<?php echo config_item('frontend_assets');?>images/ie-warn/ie-warning.jpg' alt='Warning!'>
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
				<a href='http://www.firefox.com' target='_blank'><img src='<?php echo config_item('frontend_assets');?>images/ie-warn/ie-warning-firefox.jpg' alt='Download Firefox'></a>
				<a href='http://www.opera.com/download/' target='_blank'><img src='<?php echo config_item('frontend_assets');?>images/ie-warn/ie-warning-opera.jpg' alt='Download Opera'></a>
				<a href='http://www.apple.com/safari/download/' target='_blank'><img src='<?php echo config_item('frontend_assets');?>images/ie-warn/ie-warning-safari.jpg' alt='Download Safari'></a>
				<a href='http://www.google.com/chrome' target='_blank'><img src='<?php echo config_item('frontend_assets');?>images/ie-warn/ie-warning-chrome.jpg' alt='Download Google Chrome'></a>
			</div>
		</div>
	</div>
	<![endif]-->

            <!-- HEADER 1 -->
            <?php $this->load->view('common/header_menu'); ?>
            <!-- header -->


