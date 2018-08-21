<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<style type="text/css">
		.upper-block{
			background-color: black;
			margin-left: 33%;
			margin-right: 33%;
			margin-top: 1%;
			height: 120px;
		}
		.lower-block{
			background-color: white;
			margin-left: 33%;
			margin-right: 33%;
			height: auto;
			border:1px solid black;
            padding-bottom: 15px;
		}
		.form-group input{
			border: 2px solid #ebeeef;
		}
        .error{
            color: red !important;
        }
        .error_msg,.info_msg{
            display: none;
        }
	</style>
</head>
<body>
	<div class="container">
		<div class="row" style="padding: 20px;">
			<div class="upper-block">
				<img src="<?php echo config_item('site_base_path'); ?>images/consulting.com_logo@2x.png" style="margin-left: 30%;width: 50%;vertical-align: middle;margin-top: 3%;"/>
			</div>
			<div class="lower-block">
				<form action="<?php echo base_url('admin/login/register_status'); ?>" style="margin-left: 10%;margin-right: 10%;margin-top: 5%;" id="register_form" method="post">
				  <h4 style="text-align: center;"><b>Please register here</b></h4>
                  <div class="error_msg alert alert-danger alert-dismissible"></div>
                  <div class="info_msg alert alert-success alert-dismissible"></div>
                  <div class="form-group">
					<label for="email">First Name</label>
					<input type="text" name="form_first_name" class="form-control" id="form_first_name" required=""/>
				  </div>
                  <div class="form-group">
					<label for="email">Last Name</label>
					<input type="text" name="form_last_name" class="form-control" id="form_last_name" required=""/>
				  </div>
                  <div class="form-group">
					<label for="email">Email</label>
					<input type="form_email" name="form_email" class="form-control" id="form_email" required=""/>
				  </div>
                  <div class="form-group">
					<label for="phone">Phone</label>
					<input type="form_phone" name="form_phone" class="form-control" id="form_phone" required=""/>
				  </div>
				  <div class="form-group">
					<label for="pwd">Password</label>
					<input type="password" name="form_password" class="form-control" id="form_password" required=""/>
				  </div>
                  <div class="form-group">
					<label for="pwd">Confirm Password</label>
					<input type="password" name="confir_password" class="form-control" id="confir_password" required=""/>
				  </div>
				  <button type="submit" class="btn btn-default" style="background-color: #2D99E2; color: white;">Register</button>
                  <a style="margin-left: 88px;background-color: #2D99E2; color: white;" href="<?php echo base_url('home'); ?>" class="btn btn-default">Go to Login Page</a>
				</form>
			</div>
		</div>
	</div>
<script src="<?php echo config_item('ui_base_path') ?>custom/js/jquery.validate.min.js"></script>
<script>
    var BASE_URL = '<?php echo base_url(); ?>';
    $(document).ready(function() {
    $.validator.setDefaults({
            ignore: []
    });
    $("#register_form").validate({
        rules: {
        form_first_name: {
            required: true
        },
        form_last_name: {
            required: true
        },
        form_email: {
            required: true
        },
        form_phone: {
            required: true,
            number: true
        },
        form_password: {
            required: true,
            minlength:5
        },
        confir_password: {
            required: true,
            equalTo:"#form_password"
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
                    $(location).attr('href', BASE_URL + res.go_to)
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