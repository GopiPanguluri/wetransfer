<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php $this->load->view('common/common/css'); ?>
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>plugins/datatables/dataTables.bootstrap.css">
  <style>
        .profile_seta{
            width: 200px !important;
            height: 200px !important;
        }      
  </style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php $this->load->view('common/common/top_nav') ?>
  <?php $this->load->view('common/common/left_nav') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Change Password</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home </a></li>
        <li class="active"> Change Password </li>
      </ol>
    </section>

    <!-- Main content -->
    <input type="hidden" id="page" value="nav-profile"/>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
              <?php
                $success_message = $this->session->flashdata('insert_record');
                if ($success_message['status'] == "success") {
                    echo '<p class="alert alert-success sas-succcess-message">' . $success_message['message'] . '</p><div class="clearfix"></div>';
                } else if ($success_message['status'] == "fail") {
                    echo '<p class="alert alert-danger sas-succcess-message">' . $success_message['message'] . '</p><div class="clearfix"></div>';
                }
              ?>
            <div class="error_msg alert alert-danger alert-dismissible"></div>
            <div class="info_msg alert alert-success alert-dismissible"></div>
            <!-- /.box-header -->
            <div class="row">
            <div class="col-md-3">
    
              <!-- Profile Image -->
                <div class="box-body box-profile">
                  <img class="profile_seta profile-user-img img-responsive img-circle" src="<?php echo profile_img($_SESSION['admin_image']); ?>" alt="User profile picture"/>
    
                  <h3 class="profile-username text-center"><?php echo character_limiter($this->session->userdata('admin_name'),10);?></h3>
                </div>
              <!-- /.box -->
    
              <!-- About Me Box -->
              <!-- /.box -->
            </div>
        <!-- /.col -->
        <div class="col-md-9">
          <?php //echo '<pre>'; print_r($_SESSION); ?>
            <br/>
            <form  class="form-horizontal" role="form" method="POST" action="<?php echo site_url('common/profile/change_password') ?>" id="change_pass">
            <div class="form-group">
            <label for="inputPassword3" class="col-sm-3 control-label">Current Password</label>
            <div class="col-sm-8">
            <input type="password" name="password" id="password" class="form-control"  placeholder="Password" />
            </div>
            </div>
            
            <div class="form-group">
            <label for="inputPassword4" class="col-sm-3 control-label">New Password</label>
            <div class="col-sm-8">
            <input type="password" name="npassword" id="npassword" class="form-control"  placeholder="New Password" />
            </div>
            </div>
            
            <div class="form-group">
            <label for="inputPassword5" class="col-sm-3 control-label">Confirm New Password</label>
            <div class="col-sm-8">
            <input type="password" name="cnpassword" id="cnpassword" class="form-control" placeholder="Confirm Password" />
            </div>
            </div>
            
            <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" name="change_pass" class="btn btn-success">Update</button>
            <a href="<?php echo site_url('admin'); ?>" class="btn btn-default">Cancel</a>
            </div>
            </div>
            </form>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('common/common/footer') ?>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php $this->load->view('common/common/js') ?>
<script src="<?php echo config_item('ui_base_path') ?>custom/js/jquery.validate.min.js"></script>
<!-- page script -->
<script type="text/javascript">
    $(document).ready(function(){
       $("#change_pass").validate({
           rules: {
               password:"required",
               npassword: {
                   required: true,
                   minlength:5
               },
               cnpassword: {
                   required: true,
                   minlength:5,
                   equalTo:"#npassword"
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
                        $('.error_msg').hide();
                        $('.info_msg').show();
                        $('.info_msg').html(res.message);
                        //$(location).attr('href', BASE_URL + res.go_to)
                        //redirect(res.go_to);
                        $('#change_pass').trigger('reset');
                    }else{
                        $('.error_msg').show();
                        $('.info_msg').hide();
                        $('.error_msg').html(res.message);
                    }
                }            
            });
        }
       });
    });
    </script>
</body>
</html>
