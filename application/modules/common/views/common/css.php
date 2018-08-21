  <title><?php echo $this->config->item('site_title'); ?> </title>
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>bootstrap/css/bootstrap.min.css"/>
  <!-- Font Awesome -->
  <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"/-->
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>bootstrap/fonts/font-awesome.min.css"/>
  <!-- Ionicons -->
  <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"/-->
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>bootstrap/fonts/ionicons.min.css"/>
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>dist/css/AdminLTE.min.css"/>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>dist/css/skins/_all-skins.min.css"/>
  <!-- iCheck -->  
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>plugins/iCheck/flat/blue.css"/>
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>plugins/morris/morris.css"/>
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css"/>
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>plugins/datepicker/datepicker3.css"/>
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>plugins/daterangepicker/daterangepicker.css"/>
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>plugins/timepicker/bootstrap-timepicker.min.css"/>
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>plugins/select2/select2.min.css"/>
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"/>
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>plugins/iCheck/all.css"/>
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>plugins/colorpicker/bootstrap-colorpicker.min.css"/>
  <!-- custom css -->
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>custom/css/custom.css"/>
  
  <!--link rel="icon" href="<?php //echo config_item('root_dir').'assets/images/'.$this->config->item('favicon'); ?>" type="image/x-icon"/-->
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->        
    <!-- Pace style -->
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>plugins/pace/pace.min.css"/>
  <style>
        .error{
            color: red;
            display: inline;
        }
        .error_msg,.info_msg{
            display: none;
        }
        .fa_size{
            font-size: 20px;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #3c8dbc;
            border: 1px solid #fff;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            color: #fff;
        }
        .no_display_col,.post_bidd_div,.info_msg_bid,.error_msg_bid{
            display: none;
        }
        .direct-chat-messages {
            height: 337px;
        }
        .input-feilds_send{
            line-height: 0.75;
            width: 710px !important;
        }
        .inputs_row{
            margin-right: 1px;
        }
        .table_row_border{
            border: 2px;
        }
        .table_row_border th, td {
            /*border: medium solid #00F;*/
        }
  </style> 