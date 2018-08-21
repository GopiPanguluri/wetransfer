<!-- jQuery 2.2.3 -->
<script src="<?php echo config_item('ui_base_path'); ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<!--script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script-->
<script src="<?php echo config_item('ui_base_path'); ?>plugins/jQueryUI/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo config_item('ui_base_path'); ?>bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo config_item('ui_base_path'); ?>plugins/select2/select2.full.min.js"></script>
<!-- DataTables -->
<script src="<?php echo config_item('ui_base_path'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo config_item('ui_base_path'); ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Morris.js charts -->
<!--script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script-->
<script src="<?php echo config_item('ui_base_path'); ?>bootstrap/js/raphael-min.js"></script>
<script src="<?php echo config_item('ui_base_path'); ?>plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo config_item('ui_base_path'); ?>plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo config_item('ui_base_path'); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo config_item('ui_base_path'); ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo config_item('ui_base_path'); ?>plugins/knob/jquery.knob.js"></script>
<!-- InputMask -->
<script src="<?php echo config_item('ui_base_path'); ?>plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo config_item('ui_base_path'); ?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo config_item('ui_base_path'); ?>plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- daterangepicker -->
<!--script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script-->
<script src="<?php echo config_item('ui_base_path'); ?>bootstrap/js/moment.min.js"></script>
<script src="<?php echo config_item('ui_base_path'); ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo config_item('ui_base_path'); ?>plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo config_item('ui_base_path'); ?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo config_item('ui_base_path'); ?>plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo config_item('ui_base_path'); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo config_item('ui_base_path'); ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo config_item('ui_base_path'); ?>plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo config_item('ui_base_path'); ?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo config_item('ui_base_path'); ?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo config_item('ui_base_path'); ?>dist/js/demo.js"></script>
<!-- bootbox js -->
<script src="<?php echo config_item('ui_base_path'); ?>custom/js/bootbox.min.js"></script>
<!-- PACE -->
<script src="<?php echo config_item('ui_base_path'); ?>plugins/pace/pace.min.js"></script>

<!-- custom js -->
<script src="<?php echo config_item('ui_base_path'); ?>custom/js/custom.js"></script>

<script type="text/javascript">
    var BASE_URL = '<?php echo base_url(); ?>';
    var BASE_UI_PATH = '<?php echo config_item('root_dir'); ?>';
    var page = $("#page").val();
    $("#" + page).addClass('active');
    //$('.sidebar-menu').slimScroll({
//      color: '#fff',
//      railVisible: true,
//      size: '15px',
//      height: '530px'
//  });	
	// To make Pace works on Ajax calls
	$(document).ajaxStart(function() { Pace.restart(); });
</script>
<script type="text/javascript">
  //var pre_color = "<?php echo $_SESSION['home_user_theme']; ?>";
  //test(pre_color);
  function test(c_value) {
  	localStorage.setItem('pre_color', c_value);
    $.ajax({
            url: "<?php echo base_url('home/set_theme_color_status'); ?>",
            type: "post",
            dataType: "json",
            data: {
                user_theme: c_value
                //user_id: "<?php //echo $_SESSION['home_user_id']; ?>",
            },
            success: function(res) {
                if(res.status=='1'){
                      
                }else{
                    alert('Something went Wrong! Please try again.');
                }
            }            
   });
}

</script>