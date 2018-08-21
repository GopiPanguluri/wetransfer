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
            } ?> program
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home </a></li>
            <li><a href="<?php echo site_url('admin/programs'); ?>"><i class="fa fa-university"></i> programs </a></li>
            <li class="active"> <?php if ($mode == 'edit') {echo "<i class='fa fa-pencil'></i>&nbsp;&nbsp;Edit";}  else if($mode == 'details'){ echo "<i class='fa fa-eye'></i>&nbsp;&nbsp;Details of"; } else {echo "<i class='fa fa-plus'></i>&nbsp;&nbsp;Add";} ?> program </li>
        </ol>
      </section>

    <!-- Main content -->
    <input type="hidden" id="page" value="nav-programs"/>    
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
                echo form_open_multipart('admin/programs/create_program', array('id' => 'customer_form', 'class' => 'form-horizontal'));
                if ($mode == 'edit') {
            ?>  
                <div class="form-group">
                    <label class="col-md-2"> Name </label>
                    <div class="col-md-10">
                        <input name="program_name" id="program_name" type="text" class="form-control" value="<?php echo $item_details['program_name']; ?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Description </label>
                    <div class="col-md-10">
                        <textarea name="program_description" id="program_description" class="form-control"><?php echo $item_details['program_description']; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> File </label>
                    <div class="col-md-10">
                        <input type="file" name="prg_img_vid_name" id="prg_img_vid_name" value="" class="form-control"/>
                        <div class="alert alert-info fade in">
                          <strong>Note!</strong> Please select image(jpg,png) or videos(MP4, avi, mov formats).
                        </div>
                        <?php if($item_details['prg_img_or_vid']=='1'){ ?>
                            <img src="<?php echo prg_img_vid_name($item_details['prg_img_vid_name']); ?>" alt="File" height="200" width="200"/>
                        <?php }else{ ?>
                            <video width="320" height="240" controls=""><source src="<?php echo prg_img_vid_name($item_details['prg_img_vid_name']);
                             $image_ext = explode(".",$item_details['prg_img_vid_name']); $image_ext = end($image_ext); ?>" type="video/<?php echo $image_ext; ?>"/></video>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-9 col-md-offset-2">
                    <input type="hidden" name="id" id="id" value="<?php echo $item_details['program_id']; ?>" />
                    <input type="hidden" name="old_prg_img_vid_name" id="old_prg_img_vid_name" value="<?php echo $item_details['prg_img_vid_name']; ?>" />
                    <button type="submit" name="submit" id="submit" val="update" class="btn btn-success">Update </button>
                    <a href="<?php echo site_url('admin/programs') ?>" class="btn btn-default">Cancel</a>
                </div>
            <?php } else if($mode == 'details'){ ?>
            <?php } else { ?>
                <div class="form-group">
                    <label class="col-md-2"> Name </label>
                    <div class="col-md-10">
                        <input name="program_name" id="program_name" type="text" class="form-control" value=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Description </label>
                    <div class="col-md-10">
                        <textarea name="program_description" id="program_description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> File </label>
                    <div class="col-md-10">
                        <input type="file" name="prg_img_vid_name" id="prg_img_vid_name" value="" class="form-control"/>
                        <div class="alert alert-info fade in">
                          <strong>Note!</strong> Please select image(jpg,png) or videos(MP4, avi, mov formats).
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-md-offset-2">
                    <button type="submit" name="submit" class="btn btn-success" id="submit" val="insert">Save </button>
                    <a href="<?php echo site_url('admin/programs') ?>" class="btn btn-default">Cancel</a>
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
<!--script src="<?php //echo config_item('ui_base_path') ?>custom/js/additional-methods.js"></script-->
<script src="<?php echo config_item('ui_base_path') ?>plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script type="">
    $(document).ready(function() {
    $.validator.setDefaults({
            ignore: []
    });
    $("#customer_form").validate({
    <?php if ($mode == 'create') { ?>
        rules:{
            program_name:{
                required:true
            },
            program_description:{
                required:true
            },
            prg_img_vid_name:{
                required:true
            }
        },
        messages:{				
            program_name:{					
                required:"Program Name should not leave empty.",
            },
            program_description:{					
                required:"Program Description should not leave empty."
            },
            prg_img_vid_name:{
                required:"Please select Image or Video."
            }
        },
    <?php }else{ ?>
        rules:{
            program_name:{
                required:true
            },
            program_description:{
                required:true
            }
        },
        messages:{				
            program_name:{					
                required:"Program Name should not leave empty."
            },
            program_description:{					
                required:"Program Description should not leave empty."
            },
            prg_img_vid_name:{
                required:"Please select Image or Video."
            }
        },
    <?php } ?>
        submitHandler: function(form){
        event.preventDefault();// using this page stop being refreshing
        var formData = new FormData();
        formData.append('program_name', $('#program_name').val());
        if($('#prg_img_vid_name')[0].files[0]!==''){
            formData.append('prg_img_vid_name', $('#prg_img_vid_name')[0].files[0]);
        }
        formData.append('program_description', $('#program_description').val());
        <?php if ($mode == 'edit') { ?>
        formData.append('id', $('#id').val());
        formData.append('old_prg_img_vid_name', $('#old_prg_img_vid_name').val());
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
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                }
            }            
        });
    }
    });
    });
</script>
</body>
</html>