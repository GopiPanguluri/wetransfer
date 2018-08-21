<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php $this->load->view('common/common/css') ?>
  <!--link rel="stylesheet" href="<?php //echo config_item('ui_base_path'); ?>/plugins/progressbar/jQuery-plugin-progressbar.css"/-->
  <style>
    /*.fix_heig{
        height: 350px;
    }
    .fix_scroll{
        overflow: auto;
        height: 250px;
    }*/
    .progress-bar{
        box-shadow: inset 0 0px 0 rgba(0,0,0,.15);
        background-color: #ffffff;
        color: #0e0e0e;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php $this->load->view('common/admin-top_nav') ?>
  <?php $this->load->view('common/admin-left_nav') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <input type="hidden" id="page" value="nav-dashbooard"/>
    <section class="content">
      <div class="row">
         <div class="col-md-12">
            <!--h3><b>Appearence:</b></h3-->
            <ul class="list-unstyled clearfix">
               <li style="float:left; width: 33.33333%; padding: 5px;"><a onclick="test('blue');" href="javascript:void(0);" data-skin="skin-blue" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9;"></span><span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 80px; background: #222d32;"></span><span style="display:block; width: 80%; float: left; height: 80px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin">Blue</p></li>
               <li style="float:left; width: 33.33333%; padding: 5px;"><a onclick="test('black');" href="javascript:void(0);" data-skin="skin-black" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span style="display:block; width: 20%; float: left; height: 7px; background: #fefefe;"></span><span style="display:block; width: 80%; float: left; height: 7px; background: #fefefe;"></span></div><div><span style="display:block; width: 20%; float: left; height: 80px; background: #222;"></span><span style="display:block; width: 80%; float: left; height: 80px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin">Black</p></li>
               <li style="float:left; width: 33.33333%; padding: 5px;"><a onclick="test('indigo');" href="javascript:void(0);" data-skin="skin-purple" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-purple-active"></span><span class="bg-purple" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 80px; background: #222d32;"></span><span style="display:block; width: 80%; float: left; height: 80px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin">Purple</p></li>
               <li style="float:left; width: 33.33333%; padding: 5px;"><a onclick="test('green');" href="javascript:void(0);" data-skin="skin-green" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-green-active"></span><span class="bg-green" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 80px; background: #222d32;"></span><span style="display:block; width: 80%; float: left; height: 80px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin">Green</p></li>
               <li style="float:left; width: 33.33333%; padding: 5px;"><a onclick="test('red');" href="javascript:void(0);" data-skin="skin-red" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-red-active"></span><span class="bg-red" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 80px; background: #222d32;"></span><span style="display:block; width: 80%; float: left; height: 80px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin">Red</p></li>
               <li style="float:left; width: 33.33333%; padding: 5px;"><a onclick="test('orange');" href="javascript:void(0);" data-skin="skin-yellow" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-yellow-active"></span><span class="bg-yellow" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 80px; background: #222d32;"></span><span style="display:block; width: 80%; float: left; height: 80px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin">Orange</p></li>
               <!--li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);" data-skin="skin-blue-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9;"></span><span class="bg-light-blue" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 80px; background: #f9fafc;"></span><span style="display:block; width: 80%; float: left; height: 80px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Blue Light</p></li>
               <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);" data-skin="skin-black-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span style="display:block; width: 20%; float: left; height: 7px; background: #fefefe;"></span><span style="display:block; width: 80%; float: left; height: 7px; background: #fefefe;"></span></div><div><span style="display:block; width: 20%; float: left; height: 80px; background: #f9fafc;"></span><span style="display:block; width: 80%; float: left; height: 80px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Black Light</p></li>
               <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);" data-skin="skin-purple-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-purple-active"></span><span class="bg-purple" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 80px; background: #f9fafc;"></span><span style="display:block; width: 80%; float: left; height: 80px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Purple Light</p></li>
               <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);" data-skin="skin-green-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-green-active"></span><span class="bg-green" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 80px; background: #f9fafc;"></span><span style="display:block; width: 80%; float: left; height: 80px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Green Light</p></li>
               <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);" data-skin="skin-red-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-red-active"></span><span class="bg-red" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 80px; background: #f9fafc;"></span><span style="display:block; width: 80%; float: left; height: 80px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin" style="font-size: 12px">Red Light</p></li>
               <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0);" data-skin="skin-yellow-light" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover"><div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-yellow-active"></span><span class="bg-yellow" style="display:block; width: 80%; float: left; height: 7px;"></span></div><div><span style="display:block; width: 20%; float: left; height: 80px; background: #f9fafc;"></span><span style="display:block; width: 80%; float: left; height: 80px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin" style="font-size: 12px;">Yellow Light</p></li-->
            </ul>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <?php $this->load->view('common/common/footer'); ?>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php $this->load->view('common/common/js') ?>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--script src="<?php echo config_item('ui_base_path'); ?>dist/js/pages/dashboard2.js"></script-->
<!-- ChartJS 1.0.1 -->
<script src="<?php echo config_item('ui_base_path'); ?>plugins/chartjs/Chart.min.js"></script>
<!-- DOC -->
<script src="<?php echo config_item('ui_base_path'); ?>documentation/docs.js"></script>
<!--script src="<?php //echo config_item('ui_base_path'); ?>/plugins/progressbar/jQuery-plugin-progressbar.js"></script-->
<script>
    //$(".progress-bar").loading();
    $('.product-list-in-box1').slimScroll({
      //color: '#fff',
      //railVisible: true,
      size: '10px',
      height: '350px'
  });	
</script>
</body>
</html>
