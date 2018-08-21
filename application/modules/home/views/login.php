<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<style type="text/css">
		.upper-block{
			/*background-color: black;*/
			margin-left: 33%;
			margin-right: 33%;
			margin-top: 8%;
            border:1px solid black;
			height: 120px;
		}
		.lower-block{
			/*background-color: white;*/
			margin-left: 33%;
			margin-right: 33%;
			height: auto;
			border:1px solid black;
            padding-bottom: 15px;
		}
		.form-group input{
			border: 2px solid #ebeeef;
		}
		button{
			/*margin-left: 30%;
			margin-top: 10%;
			background-color: blue;
			border-radius: 5px;
			color: white;
			width: 120px;
			height: 40px;*/
		}
        .error{
                color: red !important;
            }
        .error_msg,.info_msg{
            display: none;
        }
<?php if(isset($settings['back_image_vid'])&&$settings['back_image_vid']=='1'){ ?>
/*for background image*/
    .imgn
      {
            background-image: url("<?php echo back_image($settings['back_image']); ?>");
            background-repeat: no-repeat;
            background-position: center; 
            background-size: 1368px 771px;
      }
 
/*for background image*/
<?php } ?>

/*for background video*/
<?php if(isset($settings['back_image_vid'])&&$settings['back_image_vid']=='2'){ ?>
  #myVideo 
      {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%; 
        min-height: 100%;
      }
    .content 
      {
        position: fixed;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        color: #f1f1f1;
        width: 100%;
        padding: 95px;
      }
<?php } ?>
/*for background video*/
  </style>
</head>
<body class="<?php if(isset($settings['back_image_vid'])&&$settings['back_image_vid']=='1'){ echo 'imgn'; }?>">
 <?php if(isset($settings['back_image_vid'])&&$settings['back_image_vid']=='2'){ ?>
<!-- for background video-->
<video autoplay muted loop id="myVideo">
  <source src="<?php echo back_image($settings['back_image']); ?>" type="video/mp4"/>
  Your browser does not support HTML5 video.
</video>
<?php } ?>
<!--for background video-->
	<div class="container content">
		<div class="row" style="padding: 20px;">
			<div class="upper-block">
				<img src="<?php echo config_item('site_base_path'); ?>images/consulting.com_logo@2x.png" style="margin-left: 30%;width: 50%;vertical-align: middle;margin-top: 3%;"/>
			</div>
			<div class="lower-block">
				<form action="<?php echo base_url('admin/login/login_status'); ?>" style="margin-left: 10%;margin-right: 10%;margin-top: 5%;" id="login_form" method="post">
                  <div class="error_msg alert alert-danger alert-dismissible"></div>
                  <div class="info_msg alert alert-success alert-dismissible"></div>
                  <div class="form-group">
					<label for="email">User name</label>
					<input type="text" name="email" class="form-control" id="email" required=""/>
                    <?php $url1 = $this->uri->segment(1); $url2 = $this->uri->segment(2); $url3 = $this->uri->segment(3);
                          $url4 = $this->uri->segment(4); $url5 = $this->uri->segment(5); $url6 = $this->uri->segment(6);     
                        $final_url = '';
                        $url1_if = strlen($this->uri->segment(1));
                        $url2_if = strlen($this->uri->segment(2));
                        $url3_if = strlen($this->uri->segment(3));
                        $url4_if = strlen($this->uri->segment(4));
                        $url5_if = strlen($this->uri->segment(5));
                        $url6_if = strlen($this->uri->segment(6));
                        if($url1_if!==0){
                            //echo '<pre>'; var_dump($this->uri->segment(1)); exit;
                            $final_url = $url1.'/';
                            if($url2_if!==0){
                                $final_url .= $url2.'/';
                                if($url3_if!==0){
                                    $final_url .= $url3.'/';
                                    if($url4_if!==0){
                                        $final_url .= $url4.'/';
                                        if($url5_if!==0){
                                            $final_url .= $url5.'/';
                                            if($url6_if!==0){
                                                $final_url .= $url6.'/';
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    ?>
                    <input type="hidden" name="redirect_url" id="redirect_url" value="<?php echo $final_url; ?>"/>
				  </div>
				  <div class="form-group">
					<label for="pwd">Password</label>
					<input type="password" name="password" class="form-control" id="password" required=""/>
                    <input name="user_type" type="hidden" value="3"/>
				  </div>
				  <div class="checkbox">
					<label><input type="checkbox"/> Remember me</label>
				  </div>
				  <button type="submit" class="btn btn-default" style="background-color: #2D99E2; color: white;">Log In</button>
                  <!--a style="margin-left: 88px;background-color: #2D99E2; color: white;float: right;" href="<?php //echo base_url('home/register'); ?>" class="btn btn-default">Register</a-->
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