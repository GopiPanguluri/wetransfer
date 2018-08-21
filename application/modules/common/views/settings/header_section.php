<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php $this->load->view('common/common/css') ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php $this->load->view('common/common/top_nav') ?>
  <?php $this->load->view('common/common/left_nav') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Update Settings
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home </a></li>
            <li class="active"><a href="javascript:void(0)"><i class="fa fa-gears"></i> Update Settings </a> </li>
        </ol>
      </section>

    <!-- Main content -->
    <input type="hidden" id="page" value="nav-settings"/>    
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
                echo form_open_multipart('admin/settings/save_header_section', array('id' => 'settings_form', 'class' => 'form-horizontal'));
            ?>
                <div class="form-group">
                    <label class="col-md-2"> Site Title </label>
                    <div class="col-md-4">
                        <input name="site_title" id="site_title" type="text" class="form-control" value="<?php echo $settings['site_title']; ?>"/>
                    </div>
                </div>
                <hr/>
                    <h3>Header Section Details</h3>
                <hr/>
                <div class="form-group">
                    <label class="col-md-2"> Mobile Number </label>
                    <div class="col-md-4">
                        <input name="phone" id="phone" type="text" class="form-control" value="<?php echo $settings['phone']; ?>"/>
                    </div>
                    <label class="col-md-2"> Email </label>
                    <div class="col-md-4">
                        <input name="email" id="email" type="email" class="form-control" value="<?php echo $settings['email']; ?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Address </label>
                    <div class="col-md-4">
                        <textarea name="address" id="address" class="form-control"><?php echo $settings['address']; ?></textarea>
                    </div>
                </div>
                <hr/>
                    <h3>Social Links</h3>
                <hr/>
                <div class="form-group">
                    <label class="col-md-2"> Facebook </label>
                    <div class="col-md-4">
                        <input name="facebook" id="facebook" type="text" class="form-control" value="<?php echo $settings['facebook']; ?>"/>
                    </div>
                    <label class="col-md-2"> Twitter </label>
                    <div class="col-md-4">
                        <input name="twitter" id="twitter" type="text" class="form-control" value="<?php echo $settings['twitter']; ?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Google Plus </label>
                    <div class="col-md-4">
                        <input name="google_plus" id="google_plus" type="text" class="form-control" value="<?php echo $settings['google_plus']; ?>"/>
                    </div>
                </div>
                <hr/>
                <div class="col-md-9 col-md-offset-2">
                    <input type="hidden" name="old_site_logo" value="<?php echo $settings['site_logo']; ?>" />
                    <button type="submit" name="update" class="btn btn-success">Update </button>
                    <a href="<?php echo site_url('admin') ?>" class="btn btn-default">Cancel</a>
                </div>
                
            <?php echo form_close(); ?>
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
<!-- CK Editor -->
<script src="<?php echo config_item('ui_base_path') ?>plugins/ckeditor/ckeditor.js"></script>
<script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        //CKEDITOR.replace('footer_abt_us');
      });
      $(document).ready(function() {
        $("#credential_image_title,#credential_image_alt").keypress(function(event){
                var inputValue = event.which;
                // allow letters and whitespaces only.
                if(!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)) { 
                    event.preventDefault(); 
                }
        });
        $("#settings_form").validate({
            rules: {
            site_title: {
                required: true,
                minlength:2,
                maxlength:40,
            },
            credential_image_title: {
                required: true
            },
            phone: {
                minlength:10,
                maxlength:12,
                number: true
            },
            email: {
                email: true
            },
            facebook: {
                url: true
            },
            twitter: {
                url: true
            },
            google_plus: {
                url: true
            }
            },
            
            messages: {				
                //pincode: {					
    //                required: "Pincode should not leave empty."
    //                }
            }
        });
    });
</script>
</body>
</html>