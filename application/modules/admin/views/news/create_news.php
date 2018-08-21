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
            } ?> News
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home </a></li>
            <li><a href="<?php echo site_url('admin/news'); ?>"><i class="fa fa-newspaper-o"></i> News </a></li>
            <li class="active"> <?php if ($mode == 'edit') {echo "<i class='fa fa-pencil'></i>&nbsp;&nbsp;Edit";}  else if($mode == 'details'){ echo "<i class='fa fa-eye'></i>&nbsp;&nbsp;Details of"; } else {echo "<i class='fa fa-plus'></i>&nbsp;&nbsp;Add";} ?> News </li>
        </ol>
      </section>

    <!-- Main content -->
    <input type="hidden" id="page" value="nav-news"/>    
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
                echo form_open_multipart('admin/news/create_news', array('id' => 'customer_form', 'class' => 'form-horizontal'));
                if ($mode == 'edit') {
            ?>  
                <div class="form-group">
                    <label class="col-md-2"> Name </label>
                    <div class="col-md-4">
                        <input name="n_name" id="n_name" type="text" class="form-control" value="<?php echo $item_details['n_name']; ?>"/>
                    </div>
                    <label class="col-md-2"> Image </label>
                    <div class="col-md-4">
                        <input name="n_image" id="n_image" type="file" class="form-control" value=""/>
                        <img src="<?php echo news_img($item_details['n_image']); ?>" alt="News Image" height="150" width="150"/>                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Description </label>
                    <div class="col-md-10">
                        <textarea name="n_description" id="n_description" class="form-control"><?php echo $item_details['n_description']; ?></textarea>
                    </div>
                </div>
                
                <div class="col-md-9 col-md-offset-2">
                    <input type="hidden" name="id" id="id" value="<?php echo $item_details['n_id']; ?>" />
                    <input type="hidden" name="old_n_image" id="old_n_image" value="<?php echo $item_details['n_image']; ?>" />
                    <button type="submit" name="submit" id="submit" val="update" class="btn btn-success">Update </button>
                    <a href="<?php echo site_url('admin/news') ?>" class="btn btn-default">Cancel</a>
                </div>
                
            <?php }else if($mode == 'details'){ ?> 
                
                <div class="form-group">
                    <label class="col-md-2"> Name </label>
                    <div class="col-md-4">
                        <?php echo $item_details['n_name']; ?>
                    </div>
                    <label class="col-md-2"> Image </label>
                    <div class="col-md-4">
                        <img src="<?php echo news_img($item_details['n_image']); ?>" alt="News Image" height="150" width="150"/>                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Description </label>
                    <div class="col-md-10">
                        <?php echo $item_details['n_description']; ?>
                    </div>
                </div>
                <div class="col-md-9">
                    <a href="<?php echo site_url('admin/news') ?>" class="btn btn-default">Back</a>
                </div>
                
            <?php } else { ?>
            
                <div class="form-group">
                    <label class="col-md-2"> Name </label>
                    <div class="col-md-4">
                        <input name="n_name" id="n_name" type="text" class="form-control" value=""/>
                    </div>
                    <label class="col-md-2"> Image </label>
                    <div class="col-md-4">
                        <input name="n_image" id="n_image" type="file" class="form-control" value=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Description </label>
                    <div class="col-md-10">
                        <textarea name="n_description" id="n_description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-md-9 col-md-offset-2">
                    <button type="submit" name="submit" class="btn btn-success" id="submit" val="insert">Save </button>
                    <a href="<?php echo site_url('admin/news') ?>" class="btn btn-default">Cancel</a>
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
        n_name: {
            required: true,
            letterswithbasicpunc: true,
            minlength:3,
            maxlength:50
        },
        n_image: {
            required: true
        },
        n_description: {
            required: true,
            minlength:3
        }
        },
        
        messages: {				
            n_name: {					
                required: "Name should not leave empty.",
                }
        },
    <?php }else{ ?>
        rules: {
        n_name: {
            required: true,
            letterswithbasicpunc: true,
            minlength:3,
            maxlength:50
        },
        n_description: {
            required: true,
            minlength:3
        }
        },
        
        messages: {				
            n_name: {					
                required: "Name should not leave empty.",
                }
        },
    <?php } ?>
        submitHandler: function(form){
        event.preventDefault();// using this page stop being refreshing
        var formData = new FormData();
        formData.append('n_name', $('#n_name').val());
        if($('#n_image')[0].files[0]!==''){
            formData.append('n_image', $('#n_image')[0].files[0]);
        }
        formData.append('n_description', $('#n_description').val());
        <?php if ($mode == 'edit') { ?>
        formData.append('old_n_image', $('#old_n_image').val());
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