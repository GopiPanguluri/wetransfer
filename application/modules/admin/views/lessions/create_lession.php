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
            } ?> lession
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home </a></li>
            <li><a href="<?php echo site_url('admin/lessions'); ?>"><i class="fa fa-university"></i> lessions </a></li>
            <li class="active"> <?php if ($mode == 'edit') {echo "<i class='fa fa-pencil'></i>&nbsp;&nbsp;Edit";}  else if($mode == 'details'){ echo "<i class='fa fa-eye'></i>&nbsp;&nbsp;Details of"; } else {echo "<i class='fa fa-plus'></i>&nbsp;&nbsp;Add";} ?> lession </li>
        </ol>
      </section>

    <!-- Main content -->
    <input type="hidden" id="page" value="nav-lessions"/>    
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
                echo form_open_multipart('admin/lessions/create_lession', array('id' => 'customer_form', 'class' => 'form-horizontal'));
                if ($mode == 'edit') {
            ?>  
                <div class="form-group">
                    <label class="col-md-2"> Name </label>
                    <div class="col-md-10">
                        <input name="lession_name" id="lession_name" type="text" class="form-control" value="<?php echo $item_details['lession_name']; ?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Program </label>
                    <div class="col-md-10">
                        <?php echo form_dropdown('program_id',$programs,$item_details['program_id'],'id="program_id" class="form-control"'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Chapter </label>
                    <div class="col-md-10">
                        <?php echo form_dropdown('chapter_id',$chapters,$item_details['chapter_id'],'id="chapter_id" class="form-control"'); ?>
                    </div>
                </div>
                <div class="col-md-9 col-md-offset-2">
                    <input type="hidden" name="id" id="id" value="<?php echo $item_details['lession_id']; ?>"/>
                    <button type="submit" name="submit" id="submit" val="update" class="btn btn-success">Update </button>
                    <a href="<?php echo site_url('admin/lessions') ?>" class="btn btn-default">Cancel</a>
                </div>
                
            <?php } else if($mode == 'details'){ ?> 
                
                <div class="col-md-9">
                    <a href="<?php echo site_url('admin/lessions') ?>" class="btn btn-default">Back</a>
                </div>
                
            <?php } else { ?>
            
                <div class="form-group">
                    <label class="col-md-2"> Name </label>
                    <div class="col-md-10">
                        <input name="lession_name" id="lession_name" type="text" class="form-control" value=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Program </label>
                    <div class="col-md-10">
                        <?php echo form_dropdown('program_id',$programs,'','id="program_id" class="form-control"'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Chapter </label>
                    <div class="col-md-10">
                        <?php echo form_dropdown('chapter_id','','','id="chapter_id" class="form-control"'); ?>
                    </div>
                </div>
                <div class="col-md-9 col-md-offset-2">
                    <button type="submit" name="submit" class="btn btn-success" id="submit" val="insert">Save </button>
                    <a href="<?php echo site_url('admin/lessions') ?>" class="btn btn-default">Cancel</a>
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
<script src="<?php echo config_item('ui_base_path') ?>plugins/ckeditor/ckeditor.js"></script>
<script src="<?php echo config_item('ui_base_path') ?>plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script type="">
    //$(function () {
//        CKEDITOR.replace('lession_full_desc',{customConfig:'in-page'},{autoEmbed_widget :'embed,embedSemantic'});
//    });
    $(document).ready(function() {
    $.validator.setDefaults({
            ignore: []
    });
    $("#customer_form").validate({
    <?php if ($mode == 'create') { ?>
        rules:{
            lession_name:{
                required:true
            },
            lession_act:{
                required:true
            },
            program_id:{
                required:true
            },
            chapter_id:{
                required:true
            }
        },
        messages:{				
            lession_name:{					
                required:"lession Name should not leave empty.",
            },
            program_id:{					
                required:"Please select Atlease Program."
            },
            chapter_id:{					
                required:"Please select Atlease Chapter."
            }
        },
    <?php }else{ ?>
        rules:{
            lession_name:{
                required:true
            },
            chapter_id:{
                required:true
            }
        },
        messages:{				
            lession_name:{					
                required:"lession Name should not leave empty."
            },
            chapter_id:{					
                required:"Please select Atleast Chapter."
            }
        },
    <?php } ?>
        submitHandler: function(form){
        event.preventDefault();// using this page stop being refreshing
        var formData = new FormData();
        formData.append('lession_name', $('#lession_name').val());
        formData.append('program_id', $('#program_id').val());
        formData.append('chapter_id', $('#chapter_id').val());
        formData.append('lession_short_desc', $('#lession_short_desc').val());
        formData.append('lession_full_desc', $('#lession_full_desc').val());
        formData.append('lession_act', $('#lession_act').val());
        //if($('#lession_act')[0].files[0]!==''){
//            formData.append('lession_act', $('#lession_act')[0].files[0]);
//        }
        <?php if ($mode == 'edit') { ?>
        formData.append('id', $('#id').val());
        formData.append('old_lession_act', $('#old_lession_act').val());
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
    $(document).on('change','#program_id',function() {
        var program_id = $(this).val();
        var html='';
        html += '<option value="">Select One</option>';
        if(program_id!=''){
            $.ajax({
                url: BASE_URL + 'admin/lessions/get_all_chapters',
                type: 'POST',
                dataType: "json",
                data: {'program_id':program_id},
                success: function(res) {                        
                    if(res.status==1){
                        $.each(res.chapters, function( index, value ) {
                            //alert(value.chapter_name);
                            html +='<option value="'+value.chapter_id+'">'+value.chapter_name+'</option>';
                        });
                        $('#chapter_id').empty();
                        $('#chapter_id').html(html);
                    }else{
                        $('#chapter_id').empty();
                    }
                }
            });
        }
    });
</script>
</body>
</html>