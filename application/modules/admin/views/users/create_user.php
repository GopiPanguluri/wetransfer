<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php $this->load->view('common/common/css'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php $this->load->view('common/admin-top_nav'); ?>
  <?php $this->load->view('common/admin-left_nav'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><?php if ($mode == 'edit') {
                echo "Edit";
            } else {
                echo "Add";
            } ?> User
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home </a></li>
            <li><a href="<?php echo site_url('admin/users'); ?>"><i class="fa fa-users"></i> Users </a></li>
            <li class="active"> <?php if ($mode == 'edit') {echo "<i class='fa fa-pencil'></i>&nbsp;&nbsp;Edit";} else {echo "<i class='fa fa-plus'></i>&nbsp;&nbsp;Add";} ?> User </li>
        </ol>
    </section>

    <!-- Main content -->
    <input type="hidden" id="page" value="nav-users"/>    
    <section class="content">
        <div class="box box-primary">
          <div class="panel-body">
            <?php
                $success_message = $this->session->flashdata('insert_record');
                if ($success_message['status'] == "success") {
                    echo '<p class="alert alert-success sas-succcess-message">' . $success_message['message'] . '</p><div class="clearfix"></div>';
                } else if ($success_message['status'] == "fail") {
                    echo '<p class="alert alert-danger sas-succcess-message">' . $success_message['message'] . '</p><div class="clearfix"></div>';
                }
            ?>
            <?php
                echo form_open_multipart('admin/users/create_user', array('id' => 'customer_form', 'class' => 'form-horizontal'));
                if ($mode == 'edit') {
            ?>                
                <div class="form-group">
                    <label class="col-md-2"> First Name <span class="error">*</span> </label>
                    <div class="col-md-10">
                        <input name="first_name" id="first_name" type="text" class="form-control" value="<?php echo $item_details['first_name']; ?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Last Name <span class="error">*</span> </label>
                    <div class="col-md-10">
                        <input name="last_name" id="last_name" type="text" class="form-control" value="<?php echo $item_details['last_name']; ?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Email<span class="error">*</span> </label>
                    <div class="col-md-10">
                        <input name="user_email" id="user_email" type="email" class="form-control" value="<?php echo $item_details['email']; ?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Role<span class="error">*</span> </label>
                    <div class="col-md-10">
                        <?php  $attributs= 'id="role_id" class="form-control"';
                        echo form_dropdown('role_id', $roles, $item_details['role_id'], $attributs); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Users Image<span class="error">*</span> </label>
                    <div class="col-md-10">
                        <input name="image" id="image" type="file" class="form-control" />
                        <div id="file_error"></div>
                        <!--div class="alert alert-info fade in">
                          <strong>Note!</strong> Image Size should below 10MB.
                        </div-->
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Password<span class="error">*</span> </label>
                    <div class="col-md-10">
                        <input name="user_password" id="user_password" type="password" class="form-control" value=""/>
                        <div class="alert alert-info fade in">
                          <strong>Note!</strong> ( Please change the password if you want ).
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Confirm Password<span class="error">*</span> </label>
                    <div class="col-md-10">
                        <input name="con_password" id="con_password" type="password" class="form-control" value=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Old Users Image<span class="error">*</span> </label>
                    <div class="col-md-10">
                        <img src="<?php echo config_item('root_dir').'assets/images/users/'.$item_details['image']; ?>" height="200" width="200" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Payment Method <span class="error">*</span> </label>
                    <div class="col-md-10">
                        <label> 
                            <input name="payment_method" id="payment_method" type="checkbox" value="1" <?php if($item_details['payment_method_fin']=='1'){ echo 'checked'; } ?>/> Financed &nbsp;&nbsp;&nbsp;
                            <input name="payment_method_date" id="payment_method_date" type="text" value="<?php echo date('Y-m-d',strtotime($item_details['finance_date'])); ?>" readonly=""/>
                        </label>
                        <div id="payment_method_error"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Course Selection <span class="error">*</span> </label>
                    <div class="col-md-10">
                        <?php echo form_dropdown('course_selection[]',$pr_ls,$item_details['course_selection'],'id="course_selection" class="form-control select2" multiple=""'); ?>
                        <div id="course_selection_error"></div>
                    </div>
                </div>
                <div class="col-md-9 col-md-offset-2">
                    <input type="hidden" name="old_image" value="<?php echo $item_details['image']; ?>"/>
                    <input type="hidden" name="id" id="id" value="<?php echo $item_details['user_id']; ?>" />
                    <button type="submit" name="update" class="btn btn-success">Update </button>
                    <a href="<?php echo site_url('admin/users') ?>" class="btn btn-default">Cancel</a>
                </div>
                
            <?php } else { ?>
            
                <div class="form-group">
                    <label class="col-md-2"> First Name <span class="error">*</span> </label>
                    <div class="col-md-10">
                        <input name="first_name" id="first_name" type="text" class="form-control" value=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Last Name <span class="error">*</span> </label>
                    <div class="col-md-10">
                        <input name="last_name" id="last_name" type="text" class="form-control" value=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Email<span class="error">*</span> </label>
                    <div class="col-md-10">
                        <input name="user_email" id="user_email" type="email" class="form-control" value=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Role<span class="error">*</span> </label>
                    <div class="col-md-10">
                        <?php  $attributs= 'id="role_id" class="form-control"';
                        echo form_dropdown('role_id', $roles, '', $attributs); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Users Image<span class="error">*</span> </label>
                    <div class="col-md-10">
                        <input name="image" id="image" type="file" class="form-control" />
                        <div id="file_error"></div>
                        <!--div class="alert alert-info fade in">
                          <strong>Note!</strong> Image Size should below 10MB.
                        </div-->
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Payment Method <span class="error">*</span> </label>
                    <div class="col-md-10">
                        <label> 
                            <input name="payment_method" id="payment_method" type="checkbox" value="1"/> Financed &nbsp;&nbsp;&nbsp;
                            <input name="payment_method_date" id="payment_method_date" type="text" placeholder="Click Here To Select Date" readonly=""/>
                        </label>
                        <div id="payment_method_error"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Course Selection <span class="error">*</span> </label>
                    <div class="col-md-10">
                        <?php echo form_dropdown('course_selection[]',$pr_ls,'','id="course_selection" class="form-control select2" multiple=""'); ?>
                        <div id="course_selection_error"></div>
                    </div>
                </div>
                <!--div class="form-group">
                    <label class="col-md-2"> Password<span class="error">*</span> </label>
                    <div class="col-md-10">
                        <input name="user_password" id="user_password" type="password" class="form-control" value=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Confirm Password<span class="error">*</span> </label>
                    <div class="col-md-10">
                        <input name="con_password" id="con_password" type="password" class="form-control" value=""/>
                    </div>
                </div-->
                <div class="col-md-9 col-md-offset-2">
                    <button type="submit" name="insert" class="btn btn-success">Save </button>
                    <a href="<?php echo site_url('admin/users') ?>" class="btn btn-default">Cancel</a>
                </div>
                
            <?php } echo form_close(); ?>
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
<script src="<?php echo config_item('ui_base_path') ?>custom/js/jquery.validate.min.js"></script>
<script type="">
    $(document).ready(function(){
    $("#payment_method").click(function(){
        if($('#payment_method').is(':checked')){ 
            $('#payment_method_date').show();
        }else{
            $('#payment_method_date').hide();
        }
    });
    $("#testimonial_image_title,#testimonial_image_alt").keypress(function(user){
            var inputValue = user.which;
            // allow letters and whitespaces only.
            if(!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)) { 
                user.pruserDefault(); 
            }
    });
    //Date picker
    $('#payment_method_date').datepicker({
      autoclose: true,
      format:"yyyy-mm-dd"
    });
    //$("#payment_method").checked(function(){});
    //Initialize Select2 Elements
    $(".select2").select2(
        //'placeholder': 'Select an option'
    );
    <?php if ($mode == 'create') { ?>
    $('#payment_method_date').hide();
    $.validator.setDefaults({
            ignore: []
    });
    $("#customer_form").validate({
        rules: {
        first_name: {
            required: true,
            minlength:2,
            maxlength:100
        },
        last_name: {
            required: true,
            minlength:2,
            maxlength:100
        },
        lname: {
            required: true,
            minlength:2,
            maxlength:35
        },
        user_email: {
            required: true,
            email: true,
            remote:BASE_URL+"admin/users/check_email_id"
        },
        role_id: {
            required: true
        },
        payment_method: {
            required: true
        },
        payment_method_date: {
            required: true
        },
        'course_selection[]': {
            required: true
        },
        user_password: {
            minlength: 5,
            required: true
        },
        con_password: {
            minlength: 5,
            required: true,
            equalTo: "#user_password"
        },
        image: {
            required: true
        }
        },
        
        messages: {				
            user_email: {					
                required: "Email should not leave empty.",
                remote:"Email is already taken please enter another"
                }
        }
    });
    <?php }else{ ?>
    $.validator.setDefaults({
            ignore: []
    });
    $("#customer_form").validate({
        rules:{
        first_name: {
            required: true,
            minlength:2,
            maxlength:100
        },
        last_name: {
            required: true,
            minlength:2,
            maxlength:100
        },
        lname: {
            required: true,
            minlength: 2,
            maxlength: 35,
        },
        user_email: {
            required: true,
            email: true
        },
        role_id: {
            required: true
        },
        payment_method: {
            required: true
        },
        payment_method_date: {
            required: true
        },
        'course_selection[]': {
            required: true
        },
        user_password: {
            minlength: 5
        },
        con_password: {
            minlength: 5,
            equalTo: "#user_password"
        }
        },
        
        messages: {				
            user_email: {					
                required: "Email should not leave empty.",
                remote: "Please enter another email"
                }
        }
    });
    <?php } ?>
    });
</script>
</body>
</html>