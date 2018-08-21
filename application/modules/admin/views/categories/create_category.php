<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
  <?php $this->load->view('common/common/css'); ?>
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path') ?>plugins/bootstrap-select/bootstrap-select.min.css"/>
  <style>
    
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
        <h1><?php if ($mode == 'edit') {
                echo "Edit";
            }  else if($mode == 'details'){
                echo "Details of";
            }else {
                echo "Add";
            } ?> category
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home </a></li>
            <li><a href="#"><i class="fa fa-cog"></i> Site Setting </a></li>
            <li><a href="<?php echo site_url('admin/categories'); ?>"><i class="fa fa-circle-o"></i> categories </a></li>
            <li class="active"> <?php if ($mode == 'edit') {echo "<i class='fa fa-pencil'></i>&nbsp;&nbsp;Edit";}  else if($mode == 'details'){ echo "<i class='fa fa-eye'></i>&nbsp;&nbsp;Details of"; } else {echo "<i class='fa fa-plus'></i>&nbsp;&nbsp;Add";} ?> category </li>
        </ol>
      </section>

    <!-- Main content -->
    <input type="hidden" id="page" value="nav-categories"/>    
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
            <div class="error_msg alert alert-danger alert-dismissible"></div>
            <div class="info_msg alert alert-success alert-dismissible"></div>
            <?php
                echo form_open_multipart('admin/categories/create_category', array('id' => 'customer_form', 'class' => 'form-horizontal'));
                if ($mode == 'edit') {
            ?>
                <div class="form-group">
                    <label class="col-md-2"> Name </label>
                    <div class="col-md-4">
                        <input name="c_name" id="c_name" type="text" class="form-control" value="<?php echo $item_details['c_name']; ?>"/>
                    </div>
                    <label class="col-md-2"> User Type </label>
                    <div class="col-md-4">
                        <?php echo form_dropdown('ut_id',$user_types,$item_details['ut_id'],'class="form-control" id="ut_id"') ?>
                    </div>
                </div>
                
                <div class="col-md-9 col-md-offset-2">
                    <input type="hidden" name="id" id="id" value="<?php echo $item_details['c_id']; ?>" />
                    <button type="submit" name="submit" id="submit" val="update" class="btn btn-success">Update </button>
                    <a href="<?php echo site_url('admin/categories') ?>" class="btn btn-default">Cancel</a>
                </div>
                
            <?php } else if($mode == 'details'){ ?> 
                
                <div class="form-group">
                    <label class="col-md-2"> Categories </label>
                    <div class="col-md-4">
                        <?php echo $item_details['c_name']; ?>
                    </div>
                    <label class="col-md-2"> User Type </label>
                    <div class="col-md-4">
                        <?php echo $user_types[$item_details['ut_id']]; ?>
                    </div>
                </div>
                <div class="col-md-9">
                    <a href="<?php echo site_url('admin/categories') ?>" class="btn btn-default">Back</a>
                </div>
                
            <?php } else { ?>
            
                <div class="form-group">
                    <label class="col-md-2"> Name </label>
                    <div class="col-md-4">
                        <input name="c_name" id="c_name" type="text" class="form-control" value=""/>
                    </div>
                    <label class="col-md-2"> User Type </label>
                    <div class="col-md-4">
                        <?php echo form_dropdown('ut_id',$user_types,'','class="form-control" id="ut_id"') ?>
                    </div>
                </div>
                <div class="col-md-9 col-md-offset-2">
                    <button type="submit" name="submit" class="btn btn-success" id="submit" val="insert">Save </button>
                    <a href="<?php echo site_url('admin/categories') ?>" class="btn btn-default">Cancel</a>
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
<script src="<?php echo config_item('ui_base_path') ?>custom/js/additional-methods.js"></script>
<script src="<?php echo config_item('ui_base_path') ?>plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script type="">
    $(document).ready(function() {
    $.validator.setDefaults({
            ignore: []
    });
    $("#customer_form").validate({
    <?php if ($mode == 'create') { ?>
        rules: {
        c_name: {
            required: true,
            //letterswithbasicpunc: true,
            minlength:3,
            maxlength:35
        },
        ut_id: {
            required: true
        }
        },
        
        messages: {				
            //teacher_email: {					
//                required: "Email should not leave empty.",
//                remote:"email id is already taken please enter anoter"
//                }
        },
    <?php }else{ ?>
        rules: {
        c_name: {
            required: true,
            letterswithbasicpunc: true,
            minlength:3,
            maxlength:35
        },
        ut_id: {
            required: true
        }
        },
        
        messages: {				
            //teacher_email: {					
//                required: "Email should not leave empty."
//                }
        },
    <?php } ?>
        submitHandler: function(form){
        event.preventDefault();// using this page stop being refreshing
        var formData = new FormData();
        formData.append('c_name', $('#c_name').val());
        formData.append('ut_id', $('#ut_id').val());
        <?php if ($mode == 'edit') { ?>
        formData.append('id', $('#id').val());
        <?php } ?>
        formData.append('submit', $("#submit").attr('val'));
        $.ajax({
            url: form.action,
            type: form.method,
            async: false,
            cache: false,
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            dataType: "json",
            //data: $(form).serialize(),
            data: formData,
            success: function(res) {
                if(res.status=='success'){
                    $('.error_msg').hide();
                    $('.info_msg').show();
                    $('.info_msg').html(res.message);
                    $(location).attr('href', BASE_URL + res.go_to)
                    redirect(res.go_to);
                }else{
                    $('.info_msg').hide();
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