<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $this->lang->line('title_default'); ?></title>
    <?php //$this->load->view('admin/common/common/css') ?>
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>bootstrap/css/bootstrap.min.css"/>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>dist/css/skins/_all-skins.min.css"/>    
	<!-- Theme style -->
    <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>dist/css/AdminLTE.min.css"/>
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>plugins/iCheck/square/blue.css"/>
    <link rel="icon" href="<?php echo config_item('root_dir').'assets/images/'.$this->config->item('favicon'); ?>" type="image/x-icon"/>
</head>
<body class="hold-transition login-page">
    
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="login-box-body">
        <p class="login-box-msg">Please enter registered email </p>
            <div><?php if(isset($errmsg)) echo '<p class="alert alert-warning">' . $errmsg. '</p>'; ?></div>
            <!--div><?php //if(isset($msg)) echo '<p class="alert alert-warning">'.$msg.'</p>'; ?></div-->
            <form method="post" action="<?php echo site_url('admin/login/resend_action'); ?>" id="">
                <div class="form-group has-feedback">
                    <input name="email" type="email" class="form-control" placeholder="Email" required=""/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                      <div class="checkbox icheck">
                        <label>
                            <a href="#">Back to Login</a>
                        </label>
                      </div>
                      
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-8">
                      <button type="submit" class="btn btn-primary btn-block btn-flat">Re Send Confirmation email</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            
        </div>
    <!-- /.login-box-body -->
</div>
 <?php //$this->load->view('admin/common/common/js') ?>
 <!-- jQuery 2.2.3 -->
<script src="<?php echo config_item('ui_base_path'); ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo config_item('ui_base_path'); ?>bootstrap/js/bootstrap.min.js"></script>
 <script src="<?php echo config_item('ui_base_path'); ?>plugins/iCheck/icheck.min.js"></script>
 <!-- AdminLTE App -->
<script src="<?php echo config_item('ui_base_path'); ?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo config_item('ui_base_path'); ?>dist/js/demo.js"></script>
<!-- custom js -->
<script src="<?php echo config_item('ui_base_path'); ?>custom/js/custom.js"></script>
<!-- bootbox js -->
<script src="<?php echo config_item('ui_base_path'); ?>custom/js/bootbox.js"></script>
 <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });      
  </script>  
</body>
</html>