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
            } ?> package
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home </a></li>
            <li><a href="#"><i class="fa fa-cog"></i> Site Setting </a></li>
            <li><a href="<?php echo site_url('admin/packages'); ?>"><i class="fa fa-circle-o"></i> Packages </a></li>
            <li class="active"> <?php if ($mode == 'edit') {echo "<i class='fa fa-pencil'></i>&nbsp;&nbsp;Edit";}  else if($mode == 'details'){ echo "<i class='fa fa-eye'></i>&nbsp;&nbsp;Details of"; } else {echo "<i class='fa fa-plus'></i>&nbsp;&nbsp;Add";} ?> package </li>
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
                echo form_open_multipart('admin/packages/create_package', array('id' => 'customer_form', 'class' => 'form-horizontal'));
                if ($mode == 'edit') {
            ?>
                <div class="form-group">
                    <label class="col-md-2"> Package name </label>
                    <div class="col-md-4">
                      <?php echo form_input('p_feature_name', $item_details['p_feature_name'], 'id="p_feature_name" class="form-control"') ?>
                    </div>
                    <label class="col-md-2"> Package price </label>
                    <div class="col-md-4">
                      <?php echo form_input('p_pric_quoterly', $item_details['p_pric_quoterly'], 'id="p_pric_quoterly" class="form-control"') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Priority ranking </label>
                    <div class="col-md-4">
                      <?php 
                      $data = array('id'=>'p_priority_ranking','style'=>'','class'=>'form-control');
                      echo form_dropdown('p_priority_ranking',$p_ranking,$item_details['p_priority_ranking'],$data) ?>
                    </div>
                    <label class="col-md-2"> Free auctions per month </label>
                    <div class="col-md-4">
                      <?php 
                      $data = array('id'=>'p_free_auct_per_mon','style'=>'','class'=>'form-control');
                      echo form_dropdown('p_free_auct_per_mon',$p_auct_per_mon,$item_details['p_free_auct_per_mon'],$data) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Mailers per month </label>
                    <div class="col-md-4">
                      <?php 
                      $data = array('id'=>'p_mail_per_mon','style'=>'','class'=>'form-control');
                      echo form_dropdown('p_mail_per_mon',$mail_per_mon,$item_details['p_mail_per_mon'],$data) ?>
                    </div>
                    <label class="col-md-2"> Ability to quote buying request </label>
                    <div class="col-md-4">
                      <?php 
                      $data = array('id'=>'p_abil_quote_buy_req','style'=>'','class'=>'form-control');
                      echo form_dropdown('p_abil_quote_buy_req',$abil_to_quo_buy_req,$item_details['p_abil_quote_buy_req'],$data) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Verified icon </label>
                    <div class="col-md-4">
                      <?php 
                      $data = array('id'=>'p_veri_ico','style'=>'','class'=>'form-control');
                      echo form_dropdown('p_veri_ico',$e_opts_selec,$item_details['p_veri_ico'],$data) ?>
                    </div>
                    <label class="col-md-2"> Microsite </label>
                    <div class="col-md-4">
                      <?php 
                      $data = array('id'=>'p_microsite','style'=>'','class'=>'form-control');
                      echo form_dropdown('p_microsite',$p_microsite,$item_details['p_microsite'],$data) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> E brochure </label>
                    <div class="col-md-4">
                      <?php 
                      $data = array('id'=>'p_e_brochure','style'=>'','class'=>'form-control');
                      echo form_dropdown('p_e_brochure',$e_opts_selec,$item_details['p_e_brochure'],$data) ?>
                    </div>
                    <label class="col-md-2"> Standard service </label>
                    <div class="col-md-4">
                      <?php 
                      $data = array('id'=>'p_standard_service','style'=>'','class'=>'form-control');
                      echo form_dropdown('p_standard_service',$p_stand_serv,$item_details['p_standard_service'],$data) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Commission </label>
                    <div class="col-md-4">
                      <?php 
                      $data = array('id'=>'p_commission','style'=>'','class'=>'form-control');
                      echo form_dropdown('p_commission',$p_commission,$item_details['p_commission'],$data) ?>
                    </div>
                    <label class="col-md-2"> Standard digital marketing </label>
                    <div class="col-md-4">
                      <?php 
                      $data = array('id'=>'p_stadard_digi_market','style'=>'','class'=>'form-control');
                      echo form_dropdown('p_stadard_digi_market',$p_stand_digi_market,$item_details['p_stadard_digi_market'],$data) ?>
                    </div>
                </div>
                
                
                
                
                
                <div class="col-md-9 col-md-offset-2">
                    <input type="hidden" name="id" id="id" value="<?php echo $item_details['p_id']; ?>" />
                    <button type="submit" name="submit" id="submit" val="update" class="btn btn-success"> Update </button>
                    <a href="<?php echo site_url('admin/packages') ?>" class="btn btn-default">Cancel</a>
                </div>
                
            <?php } else if($mode == 'details'){ ?> 
                
                <div class="form-group">
                    <label class="col-md-2"> Package name </label>
                    <div class="col-md-4">
                      :<?php echo $item_details['p_feature_name']; ?>
                    </div>
                    <label class="col-md-2"> Package price </label>
                    <div class="col-md-4">
                      :<?php echo $item_details['p_pric_quoterly'].' /-'; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Priority ranking </label>
                    <div class="col-md-4">
                      :<?php echo $p_ranking[$item_details['p_mail_per_mon']]; ?>
                    </div>
                    <label class="col-md-2"> Free auctions per month </label>
                    <div class="col-md-4">
                      :<?php echo $p_auct_per_mon[$item_details['p_free_auct_per_mon']]; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Mailers per month </label>
                    <div class="col-md-4">
                      :<?php echo $mail_per_mon[$item_details['p_mail_per_mon']]; ?>
                    </div>
                    <label class="col-md-2"> Ability to quote buying request </label>
                    <div class="col-md-4">
                      :<?php echo $abil_to_quo_buy_req[$item_details['p_abil_quote_buy_req']]; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Verified icon </label>
                    <div class="col-md-4">
                      :<?php echo $e_opts_selec[$item_details['p_veri_ico']]; ?>
                    </div>
                    <label class="col-md-2"> Microsite </label>
                    <div class="col-md-4">
                      :<?php echo $p_microsite[$item_details['p_microsite']]; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> E brochure </label>
                    <div class="col-md-4">
                      :<?php echo $e_opts_selec[$item_details['p_e_brochure']]; ?>
                    </div>
                    <label class="col-md-2"> Standard service </label>
                    <div class="col-md-4">
                      :<?php echo $p_stand_serv[$item_details['p_standard_service']]; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Commission </label>
                    <div class="col-md-4">
                      :<?php echo $p_commission[$item_details['p_commission']]; ?>
                    </div>
                    <label class="col-md-2"> Standard digital marketing </label>
                    <div class="col-md-4">
                      :<?php echo $p_stand_digi_market[$item_details['p_stadard_digi_market']]; ?>
                    </div>
                </div>
                <div class="col-md-9">
                    <a href="<?php echo site_url('admin/packages') ?>" class="btn btn-default">Back</a>
                </div>
                
            <?php } else { ?>
            
                <div class="form-group">
                    <label class="col-md-2"> Package name </label>
                    <div class="col-md-4">
                      <?php echo form_input('p_feature_name', '', 'id="p_feature_name" class="form-control"') ?>
                    </div>
                    <label class="col-md-2"> Package price </label>
                    <div class="col-md-4">
                      <?php echo form_input('p_pric_quoterly', '', 'id="p_pric_quoterly" class="form-control"') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Priority ranking </label>
                    <div class="col-md-4">
                      <?php 
                      $data = array('id'=>'p_priority_ranking','style'=>'','class'=>'form-control');
                      echo form_dropdown('p_priority_ranking',$p_ranking,'',$data) ?>
                    </div>
                    <label class="col-md-2"> Free auctions per month </label>
                    <div class="col-md-4">
                      <?php 
                      $data = array('id'=>'p_free_auct_per_mon','style'=>'','class'=>'form-control');
                      echo form_dropdown('p_free_auct_per_mon',$p_auct_per_mon,'',$data) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Mailers per month </label>
                    <div class="col-md-4">
                      <?php 
                      $data = array('id'=>'p_mail_per_mon','style'=>'','class'=>'form-control');
                      echo form_dropdown('p_mail_per_mon',$mail_per_mon,'',$data) ?>
                    </div>
                    <label class="col-md-2"> Ability to quote buying request </label>
                    <div class="col-md-4">
                      <?php 
                      $data = array('id'=>'p_abil_quote_buy_req','style'=>'','class'=>'form-control');
                      echo form_dropdown('p_abil_quote_buy_req',$abil_to_quo_buy_req,'',$data) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Verified icon </label>
                    <div class="col-md-4">
                      <?php 
                      $data = array('id'=>'p_veri_ico','style'=>'','class'=>'form-control');
                      echo form_dropdown('p_veri_ico',$e_opts_selec,'',$data) ?>
                    </div>
                    <label class="col-md-2"> Microsite </label>
                    <div class="col-md-4">
                      <?php 
                      $data = array('id'=>'p_microsite','style'=>'','class'=>'form-control');
                      echo form_dropdown('p_microsite',$p_microsite,'',$data) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> E brochure </label>
                    <div class="col-md-4">
                      <?php 
                      $data = array('id'=>'p_e_brochure','style'=>'','class'=>'form-control');
                      echo form_dropdown('p_e_brochure',$e_opts_selec,'',$data) ?>
                    </div>
                    <label class="col-md-2"> Standard service </label>
                    <div class="col-md-4">
                      <?php 
                      $data = array('id'=>'p_standard_service','style'=>'','class'=>'form-control');
                      echo form_dropdown('p_standard_service',$p_stand_serv,'',$data) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"> Commission </label>
                    <div class="col-md-4">
                      <?php 
                      $data = array('id'=>'p_commission','style'=>'','class'=>'form-control');
                      echo form_dropdown('p_commission',$p_commission,'',$data) ?>
                    </div>
                    <label class="col-md-2"> Standard digital marketing </label>
                    <div class="col-md-4">
                      <?php 
                      $data = array('id'=>'p_stadard_digi_market','style'=>'','class'=>'form-control');
                      echo form_dropdown('p_stadard_digi_market',$p_stand_digi_market,'',$data) ?>
                    </div>
                </div>
                <div class="col-md-9 col-md-offset-2">
                    <button type="submit" name="submit" class="btn btn-success" id="submit" val="insert">Save </button>
                    <a href="<?php echo site_url('admin/packages') ?>" class="btn btn-default">Cancel</a>
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
        p_feature_name: {
            required: true,
            letterswithbasicpunc: true,
            minlength:3,
            maxlength:40
        },
        p_pric_quoterly: {
            required: true,
            number: true
        },
        p_priority_ranking: {
            required: true
        },
        p_free_auct_per_mon: {
            required: true
        },
        p_mail_per_mon: {
            required: true
        },
        p_veri_ico: {
            required: true
        },
        p_microsite: {
            required: true
        },
        p_e_brochure: {
            required: true
        },
        p_standard_service: {
            required: true
        },
        p_commission: {
            required: true
        },
        p_stadard_digi_market: {
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
        submitHandler: function(form,event){
        event.preventDefault();// using this page stop being refreshing
        var formData = new FormData();
        formData.append('p_feature_name', $('#p_feature_name').val());
        formData.append('p_pric_quoterly', $('#p_pric_quoterly').val());
        formData.append('p_priority_ranking', $('#p_priority_ranking').val());
        formData.append('p_free_auct_per_mon', $('#p_free_auct_per_mon').val());
        formData.append('p_mail_per_mon', $('#p_mail_per_mon').val());
        formData.append('p_abil_quote_buy_req', $('#p_abil_quote_buy_req').val());
        formData.append('p_veri_ico', $('#p_veri_ico').val());
        formData.append('p_microsite', $('#p_microsite').val());
        formData.append('p_e_brochure', $('#p_e_brochure').val());
        formData.append('p_standard_service', $('#p_standard_service').val());
        formData.append('p_commission', $('#p_commission').val());
        formData.append('p_stadard_digi_market', $('#p_stadard_digi_market').val());
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