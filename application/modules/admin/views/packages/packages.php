<?php $role_id = $this->session->userdata('admin_role_id'); ?>
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
        Packages
        <!--small>advanced tables</small-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home </a></li>
        <li class="active"> Packages </li>
      </ol>
    </section>

    <!-- Main content -->
    <input type="hidden" id="page" value="nav-categories"/>
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
                echo '<div class="response_alert"></div>';
              ?>
            <div class="box-header with-border" style="text-align: -webkit-right;">
            <a href="<?php echo site_url('admin/packages/create_package'); ?>" data-toggle="tooltip" title="Add New Record" class="btn btn-success btn-background"><i class="fa fa-plus"></i></a>
            <a class="btn btn-danger btn-background deleteme action-links" data-toggle="tooltip" data-tablename="packages" data-fieldname="p_id" title="Delete Selected Records" href="javascript:void(0);" id="" url="<?php echo site_url('admin/delete_all_record'); ?>">
                <i class="fa fa-trash-o"></i>
            </a>
            <a href="javascript:void(0)" onclick="location.reload();" data-toggle="tooltip" class="btn btn-primary btn-background" title="Reload Page"><i class="fa fa-refresh"></i></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="banners" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width:18px" class="sorting-disabled">
                        <input type="checkbox" id="checkbox-1-0" class="regular-checkbox" />
                        <label for="checkbox-1-0"></label>
                    </th>
                    <th> Name </th>
                    <th> Added Date </th>
                    <th> Status </th>
                    <th class="text-center sorting-disabled">Actions</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="7" class="text-center">
                            <img src="<?php echo config_item('root_dir');?>assets/images/small-loader.gif">
                        </td>
                    </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
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
      "sAjaxSource": "<?php echo site_url('admin/packages/get_packages_list'); ?>",
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
                    "sName": "teachers name",
                    // "sClass": "text-center",
                    "bSearchable": false,
                    "bSortable": true,
                    "fnRender": function (oObj) {
                        return oObj;
                    }
                },
                {
                    "sName": "teachers email",
                    "sClass": "text-center",
                    "bSearchable": false,
                    "bSortable": true,
                    "fnRender": function (oObj) {
                        return oObj;
                    }
                },
                {
                    "sName": "teachers email",
                    "sClass": "text-center",
                    "bSearchable": false,
                    "bSortable": false,
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
                field_name: 'p_id',
                table_name: 'packages'
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
