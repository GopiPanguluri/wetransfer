<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
  <?php $this->load->view('common/common/css'); ?>
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo config_item('ui_base_path'); ?>plugins/datatables/dataTables.bootstrap.css"/>
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
  <?php $this->load->view('common/admin-top_nav') ?>
  <?php $this->load->view('common/admin-left_nav') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
        <!--small>advanced tables</small-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home </a></li>
        <li class="active"> Profile </li>
      </ol>
    </section>

    <!-- Main content -->
    <input type="hidden" id="page" value="nav-profile"/>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
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
            <div class="box-header with-border" style="text-align: -webkit-right;">
            <!--a href="<?php echo site_url('admin/schools/create_school'); ?>" data-toggle="tooltip" title="Add New Record" class="btn btn-success btn-background"><i class="fa fa-plus"></i></a>
            <a class="btn btn-danger btn-background deleteme action-links" data-toggle="tooltip" data-tablename="schools" data-fieldname="sc_id" title="Delete Selected Records" href="javascript:void(0);" id="" url="<?php echo site_url('admin/delete_all_record'); ?>">
                <i class="fa fa-trash-o"></i>
            </a>
            <a href="javascript:void(0)" onclick="location.reload();" data-toggle="tooltip" class="btn btn-primary btn-background" title="Reload Page"><i class="fa fa-refresh"></i></a-->
            </div>
            <!-- /.box-header -->
            <div class="row">
                <div class="col-md-3">
        
                  <!-- Profile Image -->
                    <div class="box-body box-profile">
                      <img style="background-color: #d2d6de;border-radius: 5%;" class="profile_seta profile-user-img img-responsive img-circle" src="<?php echo profile_img($_SESSION['admin_image']); ?>" alt="User profile picture"/>
                      <h3 class="profile-username text-center"><?php echo character_limiter($this->session->userdata('admin_name'),10);?></h3>
                    </div>
                  <!-- /.box -->
        
                  <!-- About Me Box -->
                  <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-8">
                  <h3>Profile Details</h3>
                  <?php //echo '<pre>'; print_r($_SESSION); ?>
                      <div class="col-xs-12 table-responsive">
                          <table class="table table-striped">
                            <thead>
                            <tr>
                              <th></th>
                              <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td> First Name </td>
                              <td><?php echo $_SESSION['admin_name'];?></td>
                            </tr>
                            <tr>
                              <td> Second Name </td>
                              <td><?php echo $_SESSION['admin_last_name'];?></td>
                            </tr>
                            <tr>
                              <td> Email </td>
                              <td><?php echo $_SESSION['admin_email'];?></td>
                            </tr>
                            </tbody>
                          </table>
                      </div>
                <!-- /.nav-tabs-custom -->
                </div>        
              <!-- /.col -->
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
<!-- DataTables -->
<script src="<?php echo config_item('ui_base_path'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo config_item('ui_base_path'); ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#banners').DataTable({
      "bServerSide": true,
      "sAjaxSource": "<?php echo site_url('admin/seller/get_sellers_list'); ?>",
      "sServerMethod": "POST",
      "sPaginationType": "full_numbers",
      "iDisplayLength": 10,
      "aoColumns": [
                {
                    "sName": "ID",
                    "bSearchable": false,
                    "bSortable": false,
                    "fnRender": function (oObj) {
                        return oObj;
                    }
                },
                {
                    "sName": "Schools name",
                    // "sClass": "text-center",
                    "bSearchable": false,
                    "bSortable": true,
                    "fnRender": function (oObj) {
                        return oObj;
                    }
                },
                {
                    "sName": "Contact name",
                    // "sClass": "text-center",
                    "bSearchable": false,
                    "bSortable": true,
                    "fnRender": function (oObj) {
                        return oObj;
                    }
                },
                {
                    "sName": "Contact number",
                    // "sClass": "text-center",
                    "bSearchable": false,
                    "bSortable": true,
                    "fnRender": function (oObj) {
                        return oObj;
                    }
                },
                {
                    "sName": "Schools email",
                    "sClass": "text-center",
                    "bSearchable": false,
                    "bSortable": true,
                    "fnRender": function (oObj) {
                        return oObj;
                    }
                },
                {
                    "sName": "Schools email",
                    "sClass": "text-center",
                    "bSearchable": false,
                    "bSortable": true,
                    "fnRender": function (oObj) {
                        return oObj;
                    }
                },
                {
                    "sName": "Actions",
                    "sClass": "text-center",
                    "bSearchable": false,
                    "bSortable": false,
                    "fnRender": function (oObj) {
                        return oObj;
                    }
                }
            ]      
    });
  });
  
  // change the product active or in active status
    function changestatus(id, status) {
        $('#status' + id).html('<img src="<?php echo config_item('root_dir'); ?>assets/images/loading_small.gif">');
        $.ajax({
            url: BASE_URL + 'admin/changestatus',
            method: 'POST',
            data: {
                row_id: id,
                status: status,
                field_name: 'user_id',
                table_name: 'users'
            },
            success: function (response) {
                //alert(status)
                if (response == "1") {
                    var html_dom= '';
                    if (status == "1") {
                        var html_dom = '<a href="javascript:void(0)" onclick="changestatus(' + id + ', 0)" title="Active">\n\
                                            <i class="glyphicon glyphicon-ok"></i> &nbsp;</a>';
                        //$('#status' + id).html('');
                        $('#status' + id).empty();
                        $('#status' + id).html(html_dom);
                    } else {
                        var html_dom = '<a href="javascript:void(0)" onclick="changestatus(' + id + ', 1)" title="In Active">\n\
                                            <i class="glyphicon glyphicon-remove"></i> &nbsp;</a>';
                        $('#status' + id).empty();
                        $('#status' + id).html(html_dom);
                    }
                } else {

                }
            }
        });
    }
</script>
</body>
</html>
