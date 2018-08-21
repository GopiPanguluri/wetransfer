<script src="<?php echo config_item('ui_base_path') ?>custom/js/jquery.validate.min.js"></script>
<script src="<?php echo config_item('ui_base_path'); ?>plugins/iCheck/icheck.min.js"></script>
<script>
    var BASE_URL = "<?php //echo base_url(); ?>";
    //var BASE_URL = "<?php //echo cofig_item("root_dir"); ?>";
    $(document).ready(function(){
    $.validator.setDefaults({
            ignore: []
    });
    $("#login_form").validate({
        rules:{
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength:5
            }
        },
        messages:{				
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
                    $('#login_form .error_msg').hide();
                    $('#login_form .info_msg').show();
                    $('#login_form .info_msg').html(res.info_msg);
                    $(location).attr('href', BASE_URL + res.go_to)
                    redirect(res.go_to);
                }else{
                    $('#login_form .error_msg').show();
                    $('#login_form .error_msg').html(res.errmsg);
                }
            }            
        });
    }
    });
    });
    
    $(document).ready(function(){
    $.validator.setDefaults({
            ignore: []
    });
    $("#registr_form").validate({
        rules:{
            type_indi_com:{
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
        messages:{				
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
                    $('#registr_form .error_msg').hide();
                    $('#registr_form .info_msg').show();
                    $('#registr_form .info_msg').html(res.message);
                    $('#registr_form').trigger('reset');
                    //$(location).attr('href', BASE_URL + res.go_to)
                    window.setTimeout(function () {
                        $('#myModal').modal('hide');
                        $('#login-modal').modal('show');                        
                    }, 5000);
                }else{
                    $('#registr_form .error_msg').show();
                    $('#registr_form .error_msg').html(res.message);
                }
            }            
        });
    }
    });
    });
</script>