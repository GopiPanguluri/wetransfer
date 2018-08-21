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
        .buttons_row button{
            padding: 10px;
            margin-left: 5px;
            margin-right: 5px;
        }
    </style>
</head>
<body class="hold-transition login-page">
    
    <div class="login-box">
        <div class="login-logo" style="width: 380px;">
            <a href="javascript:void(0)"><b>MEMBER REGISTRATION</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
        <p class="login-box-msg">Register as new membership</p>
            <div class="error_msg alert alert-danger alert-dismissible"></div>
            <div class="info_msg alert alert-success alert-dismissible"></div>
            <div><?php if(isset($errmsg)) echo '<p class="alert alert-danger">' . $errmsg. '</p>'; ?></div>
            <form action="<?php echo base_url('admin/login/save_register_member'); ?>" method="post" id="registr_form">
                <div class="form-group text-center">
                    <label>
                      <input type="radio" id="type" name="type" class="minimal" value="1"/>
                      Seller
                    </label>
                    <label>
                      <input type="radio" id="type" name="type" class="minimal" value="2"/>
                      Buyer
                    </label>
                    <label>
                      <input type="radio" id="type" name="type" class="minimal" value="3"/>
                      Student
                    </label>
                    <label>
                      <input type="radio" id="type" name="type" class="minimal" value="4"/>
                      Franchise
                    </label>
                    <label id="type-error" class="error" for="type"></label>
                </div>
                <div class="form-group has-feedback">
                    <?php echo form_dropdown('c_id',$category,'','id="c_id" class="form-control"'); ?>
                    <span class="glyphicon glyphicon-th-list form-control-feedback"></span>
                    <label id="c_id-error" class="error" for="c_id"></label>
                </div>
                <div class="form-group text-center">
                    <label>
                      <input type="radio" id="type_indi_com" name="type_indi_com" class="minimal" value="1"/>
                      Company
                    </label>
                    <label>
                      <input type="radio" id="type_indi_com" name="type_indi_com" class="minimal" value="2"/>
                      Individual
                    </label>
                    <label id="type_indi_com-error" class="error" for="type_indi_com"></label>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Full name"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    <label id="name-error" class="error" for="name"></label>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" id="username" placeholder="User Name"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    <label id="name-error" class="error" for="username"></label>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email"/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <label id="name-error" class="error" for="email"></label>
                </div>
                <div class="form-group has-feedback">
                    <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Mobile No"/>
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                    <label id="name-error" class="error" for="mobile"></label>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <label id="name-error" class="error" for="password"></label>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="con_password" id="con_password" placeholder="Retype password"/>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    <label id="name-error" class="error" for="con_password"></label>
                </div>
                
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                              <input type="checkbox" name="terms" id="terms"/> I agree to the <a href="#">terms</a>
                              <label id="terms-error" class="error" for="terms"></label>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <a href="<?php echo base_url('admin'); ?>">I already have a membership</a>
        </div>
        
    <!-- /.login-box-body -->
</div>
<!--div class="row buttons_row" style="margin-top: -70px;margin-left: 320px;">
    <button onclick="window.location='<?php echo base_url('admin/login/school_login'); ?>';" class="col-md-2 btn bg-primary"> School Login </button>
    <button onclick="window.location='<?php echo base_url('admin/login/teacher_login'); ?>';" class="col-md-2 btn bg-primary"> Teacher Login </button>
    <button onclick="window.location='<?php echo base_url('admin/login/parent_login'); ?>';" class="col-md-2 btn bg-primary"> Parent Login </button>
    <button onclick="window.location='<?php echo base_url('admin/login/vendor_login'); ?>';" class="col-md-2 btn bg-primary"> Vendor Login </button>
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
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      }); 
       //$('#type').on('ifChecked', function(event){
//          alert('Checked');
//        });
        //$('#type.icheck').on('change', function (event) {
//            if ($("input#CreatePart").is(':checked')) {
//                alert('checked');
//            }else{
//               alert("unchecked");
//            }
//        });     
  </script>
  <script>
    var BASE_URL = '<?php echo base_url(); ?>';
    $(document).ready(function() {
    $.validator.setDefaults({
            ignore: []
    });
    $("#registr_form").validate({
        rules: {
        type_indi_com: {
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
                    $('.info_msg').html(res.message);
                    $('#registr_form').trigger('reset');
                    //$(location).attr('href', BASE_URL + res.go_to)
                    window.setTimeout(function () {
                        location.href = BASE_URL + res.go_to;
                    }, 5000);
                    redirect(res.go_to);
                }else{
                    $('.error_msg').show();
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