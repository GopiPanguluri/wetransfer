<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php $this->load->view('common/common/css'); ?>
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>plugins/datatables/dataTables.bootstrap.css">
  
  <style>
        .profile_seta{
            width: 200px !important;
            height: 200px !important;
        }      
  </style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php $this->load->view('common/common/top_nav') ?>
  <?php $this->load->view('common/common/left_nav') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Profile
        <!--small>advanced tables</small-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home </a></li>
        <li class="active"> Edit Profile </li>
      </ol>
    </section>

    <!-- Main content -->
    <input type="hidden" id="page" value="nav-profile"/>
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
                echo form_open_multipart('common/profile/save_profile_edit', array('id' => 'customer_form', 'class' => 'form-horizontal'));
            ?>    
            <div id="smartwizard">
                <ul>
                <li><a href="#step-1">Step 1<br /><small>Profile Information</small></a></li>
                <li><a href="#step-2">Step 2<br /><small>Company details</small></a></li>
                <li><a href="#step-3">Step 3<br /><small>Bank Details</small></a></li>
                <!--li><a href="#step-4">Step 4<br /><small>This is step description</small></a></li-->
                </ul>
                <div>
                    <div id="step-1" class="">
                        <h2>Profile Details</h2>
                        <div class="form-group">
                            <label class="col-md-2"> Name </label>
                            <div class="col-md-4">
                                <input name="name" id="name" type="text" class="form-control" value="<?php echo $item_details['name']; ?>"/>
                            </div>
                            <label class="col-md-2"> User Name </label>
                            <div class="col-md-4">
                                <input name="username" id="username" type="text" class="form-control" value="<?php echo $item_details['username']; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2"> Email </label>
                            <div class="col-md-4">
                                <input name="email" id="email" type="email" class="form-control" value="<?php echo $item_details['email']; ?>"/>
                            </div>
                            <label class="col-md-2"> Mobile </label>
                            <div class="col-md-4">
                                <input name="mobile" id="mobile" type="number" class="form-control" value="<?php echo $item_details['mobile']; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2"> Image </label>
                            <div class="col-md-4">
                                <input name="image" id="image" type="file" class="form-control" value=""/>
                                <img src="<?php echo config_item('root_dir')."assets/images/users/".$item_details['image']; ?>" alt="Image" height="150" width="250"/>
                            </div>
                            <label class="col-md-2"> Category </label>
                            <div class="col-md-4">
                                <?php echo form_dropdown('c_id',$category,$item_details['c_id'],'id="c_id" class="form-control"'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2"> Address </label>
                            <div class="col-md-4">
                                <textarea name="address" id="address" class="form-control"><?php echo $item_details['address']; ?></textarea>
                            </div>
                            <label class="col-md-2"> Gender </label>
                            <div class="col-md-4">
                                <label>
                                  <input type="radio" id="gender" name="gender" class="minimal" value="0" <?php if($item_details['address']==0){ echo 'checked'; } ?>/>
                                  Male &nbsp;&nbsp;&nbsp;&nbsp;
                                </label>
                                <label>
                                  <input type="radio" id="gender" name="gender" class="minimal" value="1" <?php if($item_details['address']==1){ echo 'checked'; } ?>/>
                                  Female
                                </label>
                                <label id="gender-error" class="error" for="gender"></label>
                            </div>
                        </div>
                    </div>
                    <div id="step-2" class="">
                        <h2>Company Details</h2>
                        <div class="form-group">
                            <label class="col-md-2"> Company Name </label>
                            <div class="col-md-4">
                                <input name="cd_name" id="cd_name" type="text" class="form-control" value="<?php echo $com_details['cd_name']; ?>"/>
                            </div>
                            <label class="col-md-2"> Contact name </label>
                            <div class="col-md-4">
                                <input name="cd_contact_name" id="cd_contact_name" type="text" class="form-control" value="<?php echo $com_details['cd_contact_name']; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2"> Company number </label>
                            <div class="col-md-4">
                                <input name="cd_mobile" id="cd_mobile" type="number" class="form-control" value="<?php echo $com_details['cd_mobile']; ?>"/>
                            </div>
                            <label class="col-md-2"> Company email </label>
                            <div class="col-md-4">
                                <input name="cd_email" id="cd_email" type="email" class="form-control" value="<?php echo $com_details['cd_email']; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2"> Company Address </label>
                            <div class="col-md-4">
                                <textarea name="cd_address" id="cd_address" class="form-control"><?php echo $com_details['cd_address']; ?></textarea>
                            </div>
                            <label class="col-md-2"> Company Type </label>
                            <div class="col-md-4">
                                <?php echo form_dropdown('ct_id',$com_types,$com_details['ct_id'],'class="form-control" id="ct_id"'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2"> Vendor Name </label>
                            <div class="col-md-4">
                                <input name="cd_vendor_name" id="cd_vendor_name" type="text" class="form-control" value="<?php echo $com_details['cd_vendor_name']; ?>"/>
                            </div>
                            <label class="col-md-2"> Country </label>
                            <div class="col-md-4">
                                <?php echo form_dropdown('cd_country_id',$cn_list,$com_details['cd_country_id'],'class="form-control" id="cd_country_id"'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2"> State </label>
                            <div class="col-md-4">
                                <?php echo form_dropdown('cd_state_id',$states_list,$com_details['cd_state_id'],'class="form-control" id="cd_state_id"'); ?>
                            </div>
                            <label class="col-md-2"> City </label>
                            <div class="col-md-4">
                                <?php echo form_dropdown('cd_city_id',$cities_list,$com_details['cd_city_id'],'class="form-control" id="cd_city_id"'); ?>
                            </div>
                        </div>                        
                        <div class="form-group">
                            <label class="col-md-2"> Company Area </label>
                            <div class="col-md-4">
                                <textarea name="cd_area" id="cd_area" class="form-control"><?php echo $com_details['cd_area']; ?></textarea>
                            </div>
                            <label class="col-md-2"> Company Postal </label>
                            <div class="col-md-4">
                                <input name="cd_postal_code" id="cd_postal_code" type="number" class="form-control" value="<?php echo $com_details['cd_postal_code']; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2"> Company Exporter No </label>
                            <div class="col-md-4">
                                <input name="cd_exporter_no" id="cd_exporter_no" type="number" class="form-control" value="<?php echo $com_details['cd_exporter_no']; ?>"/>
                            </div>
                            <label class="col-md-2"> Company Registration No </label>
                            <div class="col-md-4">
                                <input name="cd_reg_no" id="cd_reg_no" type="number" class="form-control" value="<?php echo $com_details['cd_reg_no']; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2"> Incorporation Date </label>
                            <div class="col-md-4">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input name="cd_incorp_date" type="text" class="form-control pull-right" class="form-control" id="cd_incorp_date" value="<?php echo date('m/d/Y',strtotime($com_details['cd_incorp_date'])); ?>"/>
                                </div>
                                <label id="cd_incorp_date-error" class="error" for="cd_incorp_date"></label>
                            </div>
                            <label class="col-md-2"> Time Zone </label>
                            <div class="col-md-4">
                                <?php echo form_dropdown('tz_id',$tz_list,$com_details['tz_id'],'id="tz_id" class="form-control"'); ?>
                            </div>
                        </div>
                    </div>
                    <div id="step-3" class="">
                        <h2>Bank Details</h2>
                        <div class="form-group">
                            <label class="col-md-2"> Name Of Acct </label>
                            <div class="col-md-4">
                                <input name="bd_name_of_acct" id="bd_name_of_acct" type="text" class="form-control" value="<?php echo $bank_details['bd_name_of_acct']; ?>"/>
                            </div>
                            <label class="col-md-2"> Account Number </label>
                            <div class="col-md-4">
                                <input name="bd_acct_no" id="bd_acct_no" type="number" class="form-control" value="<?php echo $bank_details['bd_acct_no']; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2"> Bank Name </label>
                            <div class="col-md-4">
                                <input name="bd_bank_name" id="bd_bank_name" type="text" class="form-control" value="<?php echo $bank_details['bd_bank_name']; ?>"/>
                            </div>
                            <label class="col-md-2"> Bank Branch </label>
                            <div class="col-md-4">
                                <input name="bd_bank_branch" id="bd_bank_branch" type="text" class="form-control" value="<?php echo $bank_details['bd_bank_branch']; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2"> Bank IFSC Code </label>
                            <div class="col-md-4">
                                <input name="bd_bank_ifsc" id="bd_bank_ifsc" type="text" class="form-control" value="<?php echo $bank_details['bd_bank_ifsc']; ?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
            </div>            
        </div>
      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('common/common/footer') ?>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php $this->load->view('common/common/js') ?>
<script src="<?php echo config_item('ui_base_path') ?>custom/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo config_item('ui_base_path') ?>plugins/smartwizard/js/validator.min.js"></script>
<script type="text/javascript" src="<?php echo config_item('ui_base_path') ?>plugins/smartwizard/js/jquery.smartWizard.js"></script>
<!-- page script -->
<script type="text/javascript">
        $(document).ready(function(){

        $("#cd_country_id").change(function(){
            var selectedValue = this.value;
            $.ajax({
            url: BASE_URL + 'common/profile/get_states_list',
            method: 'POST',
            dataType: 'json',
            data: {id : selectedValue},
            success: function(data) {
                if(data.status==0){
                    var content = '';
                    content = '<option value="">Select One</option>';
                    $.each(data.states, function(i, post) {
                     content += '<option value="'+post.id+'">'  + post.name + '</option>';
                    });
                    $('#cd_state_id').empty();                
                    $('#cd_state_id').append(content);
                }else{
                    alert('There is a problem with states');
                }
            }
        });
        });
        $("#cd_state_id").change(function(){
            var selectedValue = this.value;
            $.ajax({
            url: BASE_URL + 'common/profile/get_cities_list',
            method: 'POST',
            dataType: 'json',
            data: {id : selectedValue},
            success: function(data) {
                if(data.status==0){
                    var content = '';
                    content = '<option value="">Select One</option>';
                    $.each(data.states, function(i, post) {
                     content += '<option value="'+post.id+'">'  + post.name + '</option>';
                    });
                    $('#cd_city_id').empty();                
                    $('#cd_city_id').append(content);
                }else{
                    alert('There is a problem with cities');
                }
            }
        });
        });
        
        //Date picker
        $('#cd_incorp_date').datepicker({
          autoclose: true
        });
    
        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
            //form validation        
    var $validator = $("#customer_form").validate({
        rules: {
                name: {
                    required: true
                },
                username: {
                    required: true,
                    minlength:3
                },
                email: {
                    required: true,
                    minlength:3
                },
                mobile: {
                    required: true,
                    minlength:3
                },
                c_id: {
                    required: true
                },
                address: {
                    required: true,
                },
                gender: {
                    required: true,
                },
                cd_name: {
                    required: true,
                },
                cd_contact_name: {
                    required: true,
                },
                cd_mobile: {
                    required: true,
                    number:true
                },
                cd_email: {
                    required: true,
                    email:true
                },
                cd_address: {
                    required: true
                },
                ct_id: {
                    required: true
                },
                cd_vendor_name: {
                    required: true
                },
                cd_country_id: {
                    required: true
                },
                cd_state_id: {
                    required: true
                },
                cd_city_id: {
                    required: true
                },
                cd_area: {
                    required: true
                },
                cd_postal_code: {
                    required: true
                },
                cd_exporter_no: {
                    required: true
                },
                cd_reg_no: {
                    required: true
                },
                cd_incorp_date: {
                    required: true
                },
                tz_id: {
                    required: true
                },
                bd_name_of_acct: {
                    required: true
                },
                bd_acct_no: {
                    required: true
                },
                bd_bank_name: {
                    required: true
                },
                bd_bank_branch: {
                    required: true
                },
                bd_bank_ifsc: {
                    required: true
                }
            },
            submitHandler: function(form){
            event.preventDefault();// using this page stop being refreshing
            var formData = new FormData();
            if($('#image')[0].files[0]!==''){
                formData.append('image', $('#image')[0].files[0]);
            }
            formData.append('name', $('#name').val());
            formData.append('username', $('#username').val());
            formData.append('email', $('#email').val());
            formData.append('mobile', $('#mobile').val());
            formData.append('c_id', $('#c_id').val());
            formData.append('address', $('#address').val());
            formData.append('gender', $('input[name="gender"]:checked').val());
            formData.append('cd_name', $('#cd_name').val());
            formData.append('cd_contact_name', $('#cd_contact_name').val());
            formData.append('cd_mobile', $('#cd_mobile').val());
            formData.append('cd_email', $("#cd_email").val());
            formData.append('cd_address', $("#cd_address").val());
            formData.append('ct_id', $("#ct_id").val());
            formData.append('cd_vendor_name', $("#cd_vendor_name").val());
            formData.append('cd_country_id', $("#cd_country_id").val());
            formData.append('cd_state_id', $("#cd_state_id").val());
            formData.append('cd_city_id', $("#cd_city_id").val());
            formData.append('cd_area', $("#cd_area").val());
            formData.append('cd_postal_code', $("#cd_postal_code").val());
            formData.append('cd_exporter_no', $("#cd_exporter_no").val());
            formData.append('cd_reg_no', $("#cd_reg_no").val());
            formData.append('cd_incorp_date', $("#cd_incorp_date").val());
            formData.append('tz_id', $("#tz_id").val());
            formData.append('bd_name_of_acct', $("#bd_name_of_acct").val());
            formData.append('bd_acct_no', $("#bd_acct_no").val());
            formData.append('bd_bank_name', $("#bd_bank_name").val());
            formData.append('bd_bank_branch', $("#bd_bank_branch").val());
            formData.append('bd_bank_ifsc', $("#bd_bank_ifsc").val());
            //alert($('input[name="gender"]:checked').val());
            $.ajax({
                url: form.action,
                type: form.method,
                async: false,
                cache: false,
                contentType: false,
                enctype: 'multipart/form-data',
                processData: false,
                dataType: "json",
                data: formData,
                success: function(res) {
                    if(res.status==0){
                        $('.error_msg').hide();
                        $('.info_msg').show();
                        $('.info_msg').html(res.message);
                        $(location).attr('href', BASE_URL + res.go_to)
                        redirect(res.go_to);
                    }else{
                        $('.error_msg').show();
                        $('.error_msg').html(res.message);
                    }
                }            
            });
        } 
        });
            // Step show event 
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
               //alert("You are on step "+stepNumber+" now");
               if(stepPosition === 'first'){
                   $("#prev-btn").addClass('disabled');
                   $("#prev-btn").addClass('disabled');
                   $("#finish").addClass('disabled');
                   //$("#finish").removeAttr('type', 'submit');
                   $("#finish").removeClass('submit_details');
                   $("#finish").css('display', 'none');
               }else if(stepPosition === 'final'){
                   $("#next-btn").addClass('disabled');
                   $("#finish").addClass('submit_details');
                   $("#finish").removeClass('disabled');
                   $("#finish").attr('type', 'submit');
                   $("#finish").css('display', 'block');
               }else{
                   $("#prev-btn").removeClass('disabled');
                   $("#next-btn").removeClass('disabled');
                   $("#finish").addClass('disabled');
                   $("#finish").removeAttr('type', 'submit');
                   $("#finish").removeClass('submit_details');
                   $("#finish").css('display', 'none');
               }
            });
            
            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Save')
                                             .addClass('btn btn-info disabled')
                                             .attr('id', 'finish')
                                             .attr('type', 'button');                         
            
            
            // Smart Wizard
            $('#smartwizard').smartWizard({ 
                    selected: 0, 
                    theme: 'arrows',
                    transitionEffect:'fade',
                    showStepURLhash: true,
                    toolbarSettings: {toolbarPosition: 'down',
                                      toolbarExtraButtons: [btnFinish]
                                    }
            });
            
            $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
                var elmForm = $("#form-step-" + stepNumber);
                // stepDirection === 'forward' :- this condition allows to do the form validation 
                // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
                if(stepDirection === 'forward' && elmForm){
                    //alert(stepDirection)
                    var $valid = $("#customer_form").valid();
                    if(!$valid) {
                        $validator.focusInvalid();
                        return false;
                    }
                }
                return true;
            });
                                         
            
            // External Button Events
            $("#reset-btn").on("click", function() {
                // Reset wizard
                $('#smartwizard').smartWizard("reset");
                return true;
            });
            
            $("#prev-btn").on("click", function() {
                // Navigate previous
                $('#smartwizard').smartWizard("prev");
                return true;
            });
            
            $("#next-btn").on("click", function() {
                // Navigate next
                $('#smartwizard').smartWizard("next");
                return true;
            });
            
            //$("#theme_selector").on("change", function() {
//                // Change theme
//                $('#smartwizard').smartWizard("theme", $(this).val());
//                return true;
//            });
            
            // Set selected theme on page refresh
            //$("#theme_selector").change();
            $('#smartwizard').smartWizard("reset");
        });   
</script>
</body>
</html>
