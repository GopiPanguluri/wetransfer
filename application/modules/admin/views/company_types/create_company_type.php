<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php $this->load->view('common/common/css'); ?>
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path') ?>plugins/bootstrap-select/bootstrap-select.min.css"/>
  <style>
    
  </style>
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
            }  else if($mode == 'details'){
                echo "Details of";
            }else {
                echo "Add";
            } ?> company type
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home </a></li>
            <li><a href="<?php echo site_url('admin/company_types'); ?>"><i class="fa fa-university"></i> Company types </a></li>
            <li class="active"> <?php if ($mode == 'edit') {echo "<i class='fa fa-pencil'></i>&nbsp;&nbsp;Edit";}  else if($mode == 'details'){ echo "<i class='fa fa-eye'></i>&nbsp;&nbsp;Details of"; } else {echo "<i class='fa fa-plus'></i>&nbsp;&nbsp;Add";} ?> company type </li>
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
                echo form_open_multipart('admin/company_types/create_company_type', array('id' => 'customer_form', 'class' => 'form-horizontal'));
                if ($mode == 'edit') {
            ?>  
                <div class="form-group">
                    <label class="col-md-2"> Name </label>
                    <div class="col-md-4">
                        <input name="ct_name" id="ct_name" type="text" class="form-control" value="<?php echo $item_details['ct_name']; ?>"/>
                    </div>
                </div>
                
                <div class="col-md-9 col-md-offset-2">
                    <input type="hidden" name="id" id="id" value="<?php echo $item_details['ct_id']; ?>" />
                    <button type="submit" name="submit" id="submit" val="update" class="btn btn-success">Update </button>
                    <a href="<?php echo site_url('admin/company_types') ?>" class="btn btn-default">Cancel</a>
                </div>
                
            <?php } else if($mode == 'details'){ ?> 
                
                <div class="form-group">
                    <label class="col-md-2"> company_type Name </label>
                    <div class="col-md-4">
                        <?php echo $item_details['company_type_name']; ?>
                    </div>
                    <label class="col-md-2"> company_type Mobile </label>
                    <div class="col-md-4">
                        <?php echo $item_details['company_type_mobile']; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Image </label>
                    <div class="col-md-4">
                        <img src="<?php echo config_item('root_dir').'assets/images/users/'.$item_details['image']; ?>" alt="image" height="200" width="200"/>
                    </div>
                    <label class="col-md-2"> company_type Email </label>
                    <div class="col-md-4">
                        <?php echo $item_details['company_type_email']; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Subject </label>
                    <div class="col-md-4">
                        <?php echo $subjects_list[$item_details['subject']]; ?>
                    </div>
                    <label class="col-md-2"> Class company_type </label>
                    <div class="col-md-4">
                        <?php echo $classes_list[$item_details['class_company_type']]; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Resume </label>
                    <div class="col-md-4 border_files">
                        <a href="<?php if($item_details['resume']!=''){ echo config_item('root_dir').'assets/images/users/company_type_resume/'.$item_details['resume']; }else{ echo 'javascript:void(0)'; } ?>" target="_blank">Resume uploaded here..</a>
                    </div>
                    <label class="col-md-2"> Address </label>
                    <div class="col-md-4">
                        <p style="text-align: justify;"><?php echo $item_details['address']; ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Certificates </label>
                    <div class="col-md-10" style="margin-left: 156px;margin-top: -20px;">
                        <?php if(count($certificates)!=0){ $sno=1; foreach($certificates as $row):?>
                            <div class="border_files col-md-3 text-center" style="margin: 10px;"> 
                              <span class=""> <a target="_blank" href="<?php echo config_item('root_dir').'assets/images/users/company_type_certi/'.$row['tc_name']; ?>"> <i>Click here to see</i> certificate - <?php echo $sno; ?> </a> </span> 
                            </div>
                        <?php $sno++; endforeach; }else{ ?>
                            <a class="" href="javascript:void(0)"> No Certificates </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-9">
                    <a href="<?php echo site_url('admin/company_types') ?>" class="btn btn-default">Back</a>
                </div>
                
            <?php } else { ?>
            
                <div class="form-group">
                    <label class="col-md-2"> Name </label>
                    <div class="col-md-4">
                        <input name="ct_name" id="ct_name" type="text" class="form-control" value=""/>
                    </div>
                </div>
                <div class="col-md-9 col-md-offset-2">
                    <button type="submit" name="submit" class="btn btn-success" id="submit" val="insert">Save </button>
                    <a href="<?php echo site_url('admin/company_types') ?>" class="btn btn-default">Cancel</a>
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

<?php $this->load->view('common/common/js'); ?>
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
        ct_name: {
            required: true,
            letterswithbasicpunc: true,
            minlength:3,
            maxlength:35
        }
        },
        
        messages: {				
            ct_name: {					
                required: "Name should not leave empty.",
                }
        },
    <?php }else{ ?>
        rules: {
        ct_name: {
            required: true,
            letterswithbasicpunc: true,
            minlength:3,
            maxlength:35
        }
        },
        
        messages: {				
            company_type_email: {					
                required: "Email should not leave empty."
                }
        },
    <?php } ?>
        submitHandler: function(form){
        event.preventDefault();// using this page stop being refreshing
        var formData = new FormData();
        formData.append('ct_name', $('#ct_name').val());
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