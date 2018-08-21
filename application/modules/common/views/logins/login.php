<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $this->lang->line('title_default'); ?></title>
    <?php //$this->load->view('admin/common/css') ?>
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
    <style>
        .error{
            color: red;
            display: block;
        }
        .error_msg,.info_msg{
            display: none;
        }
        .buttons_row{
            margin: -30px;
            margin-top: -40px;
        }
        .buttons_row button{
            padding: 10px;
            margin-left: 475px;
            margin-right: 10px;
            margin-bottom: 15px;
            width: 450px;
        }
    </style>
</head>
<body class="hold-transition login-page">
    
    <div class="login-box">
        <div class="login-logo" style="width: 380px;">
            <a href="javascript:void(0)"> <b><?php echo $this->lang->line('title_default'); ?></b> </a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
            <div class="error_msg alert alert-danger alert-dismissible"></div>
            <div class="info_msg alert alert-success alert-dismissible"></div>
            <div><?php if(isset($errmsg)) echo '<p class="alert alert-danger">' . $errmsg. '</p>'; ?></div>
            <form method="post" action="<?php echo base_url('admin/login/login_status'); ?>" id="login_form">
                <div class="form-group has-feedback">
                    <input name="email" type="text" class="form-control" placeholder="User name" required=""/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <label id="email-error" class="error" for="email"></label>
                </div>
                <?php $url1 = $this->uri->segment(1); $url2 = $this->uri->segment(2); $url3 = $this->uri->segment(3);
                    $final_url = '';
                    $url1_if = strlen($this->uri->segment(1));
                    $url2_if = strlen($this->uri->segment(2));
                    $url3_if = strlen($this->uri->segment(3)); 
                    if($url1_if!==0){
                        //echo '<pre>'; var_dump($this->uri->segment(1)); exit;
                        $final_url = $url1.'/';
                        if($url2_if!==0){
                            $final_url .= $url2.'/';
                            if($url3_if!==0){
                                $final_url .= $url3.'/';
                            }
                        }
                    }
                ?>
                <input type="hidden" name="redirect_url" id="redirect_url" value="<?php echo $final_url; ?>"/>
                <div class="form-group has-feedback">
                    <input name="password" type="password" class="form-control" placeholder="Password" required=""/>
                    <input name="user_type" type="hidden" value=""/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <label id="password-error" class="error" for="password"></label>        
                </div>
                <div class="row">
                    <div class="col-xs-8">
                      <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"/> Remember Me
                        </label>
                      </div>
                    </div>
                    
                    <!-- /.col -->
                    <div class="col-xs-4">
                      <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->    
                </div>
                <a href="#">I forgot my password</a><br />
                <!--a href="<?php //echo base_url('admin/login/register'); ?>">Register as new membership</a-->
            </form>
        </div>
        
    <!-- /.login-box-body -->
</div>
<!--div class="row buttons_row">
    <div><button onclick="window.location='<?php echo base_url('admin/login/seller_login'); ?>';" class="col-md-4 btn bg-primary"> SIGN IN AS SELLER </button></div>
</div>
<div class="row buttons_row">
    <div><button onclick="window.location='<?php echo base_url('admin/login/buyer_login'); ?>';" class="col-md-4 btn bg-primary"> SIGN IN AS BUYER </button></div>
</div-->
 <?php //$this->load->view('admin/common/js') ?>
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
<script src="<?php echo config_item('ui_base_path') ?>custom/js/jquery.validate.min.js"></script>
 <script>
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });      
  </script>
  <script>
    var BASE_URL = '<?php echo base_url(); ?>';
    $(document).ready(function() {
    $.validator.setDefaults({
            ignore: []
    });
    $("#login_form").validate({
        rules: {
        email: {
            required: true
        },
        password: {
            required: true,
            minlength:5
        }
        },
        messages: {				
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
                    $('.error_msg').hide();
                    $('.info_msg').show();
                    $('.info_msg').html(res.info_msg);
                    $(location).attr('href', BASE_URL + res.go_to)
                    redirect(res.go_to);
                }else{
                    $('.error_msg').show();
                    $('.error_msg').html(res.errmsg);
                }
            }            
        });
    }
    });
    });
</script>  
</body>
</html>