$(document).ready(function (){

    $('#c_a_all').click(function(event) {  //on click 

    alert()

        if(this.checked) { // check select status

            $('.checkbox1').each(function() { //loop through each checkbox

                this.checked = true;  //select all checkboxes with class "checkbox1"               

            });

        }else{

            $('.checkbox1').each(function() { //loop through each checkbox

                this.checked = false; //deselect all checkboxes with class "checkbox1"                       

            });         

        }

    });

	

	//Check all and uncheck all table rows

	$('.table > thead > tr > th:first-child > input[type="checkbox"]').change(function() {

		var check = false;

		if ($(this).is(':checked')) {

			check = true;

		}

		$(this).parents('thead').next().find('tr > td:first-child > input[type="checkbox"]').prop('checked', check);

	})

		

	//-------------------  delete multiple records --------------------------//

	$(document).on("click", ".deleteme" ,function(e){
			var check_id = $(this).attr("id");
			var table_name = $(this).attr("data-tablename");
			var field_name = $(this).attr("data-fieldname");
            var url = $(this).attr("url");
		    //alert(table_name)
			if(check_id != "") {
			   var data = check_id;
			} else {
				var checked = $(".regular-checkbox:checked").length > 0;
				if (!checked){
					bootbox.alert("Please check at least one checkbox");
					return false;
				}
				var data = new Array();
				$("input[name='regular-checkbox']:checked").each(function(i) {
					data.push($(this).val());
				});
			}
			if (!data){
				bootbox.alert("Please check at least one checkbox");
				return false;
			} else {
				bootbox.confirm({
                message: "Do you really want to delete?",
                buttons: {
                confirm: {
                label: 'Yes',
                className: 'btn-success'
                },
                cancel: {
                label: 'No',
                className: 'btn-danger'
                }
                },
                callback: function (result) {
                console.log('This was logged in the callback: ' + result);
                if(result){
					$.ajax({
						type: "POST",
						url: url,
						data: 'deleteme='+ data + "&& table_name=" + table_name + "&& field_name=" + field_name,
						success: function (msg) {
							$("#"+check_id).parent().parent().hide();
							if(msg) {
								if($.isArray(data)) {
									for (var i=0;i<data.length;i++) {
										$(".deleteitem_"+data[i]).parent().parent().fadeOut("slow");
									}
									$(".response_alert").show(function(){
										$(this).html('<div class="alert alert-success" style="padding: 10px;"><strong>Success! </strong>Successfully deleted.</div>');
									});
								} else {
									$("#deleteitem_"+data).fadeOut("slow");
									$(".response_alert").show(function(){
										$(this).html('<div class="alert alert-success" style="padding: 10px;"><strong>Success!</strong>Successfully deleted.</div>');
										$(".response_alert").fadeOut(8000);
									});
								}
							} else {
								$(".response_alert").show(function(){
									$(this).html('<div class="alert alert-danger" style="padding: 10px;"><strong>Fail!</strong>Error on deleting.</div>');
									$(".response_alert").fadeOut(8000);
								});
							}
						}
					});
				}
             }
		});
      }
    });


    //-------------------  change multiple records status--------------------------//

	$(document).on("click", ".change_status" ,function(e){
			var check_id = $(this).attr("id");
			var table_name = $(this).attr("data-tablename");
			var field_name = $(this).attr("data-fieldname");
            var sts_fld = $(this).attr("sts_fld");
            var status = $(this).attr("sts");
            var url = $(this).attr("url");
		    //alert(table_name)
			if(check_id != "") {
			   var data = check_id;
			} else {
				var checked = $(".regular-checkbox:checked").length > 0;
				if (!checked){
					bootbox.alert("Please check at least one checkbox");
					return false;
				}
				var data = new Array();
				$("input[name='regular-checkbox']:checked").each(function(i) {
					data.push($(this).val());
				});
			}
			if (!data){
				bootbox.alert("Please check at least one checkbox");
				return false;
			} else {
			    bootbox.confirm({
                message: "Do you really want to delete?",
                buttons: {
                confirm: {
                label: 'Yes',
                className: 'btn-success'
                },
                cancel: {
                label: 'No',
                className: 'btn-danger'
                }
                },
                callback: function (result) {
                console.log('This was logged in the callback: ' + result);
                if(result){
					$.ajax({
						type: "POST",
						url: url,
						data: 'change_status='+ data + "&& table_name=" + table_name + "&& field_name=" + field_name+ "&& status=" + status+ "&& field_status=" + sts_fld,
						success: function (msg) {
							$("#"+check_id).parent().parent().hide();
							if(msg) {
								if($.isArray(data)) {
									for (var i=0;i<data.length;i++) {
										$(".change_status_"+data[i]).parent().parent().fadeOut("slow");
									}
									$(".response_alert").show(function(){
										$(this).html('<div class="alert alert-success" style="padding: 10px;"><strong>Success! </strong>Successfully deleted.</div>');
									});
								} else {
									$("#change_status_"+data).fadeOut("slow");
									$(".response_alert").show(function(){
										$(this).html('<div class="alert alert-success" style="padding: 10px;"><strong>Success!</strong>Successfully deleted.</div>');
										$(".response_alert").fadeOut(8000);
									});
								}
							} else {
								$(".response_alert").show(function(){
									$(this).html('<div class="alert alert-danger" style="padding: 10px;"><strong>Fail!</strong>Error on deleting.</div>');
									$(".response_alert").fadeOut(8000);
								});
							}
						}
					});
                  }
                } 
             });
		}
	});


	//-------------------  Add multiple presents records --------------------------//

	$(document).on("click", ".add_presents,.add_absents,.add_leaves" ,function(e){
			var check_id = $(this).attr("id");
            var url = $(this).attr("url");
            var data_value = $(this).attr("data-value");
            var date = $(this).attr("data-date");
            //var id = $(this).attr("data-id");
		    //alert(date)
			if(check_id != ""){
			   var data = check_id;
			} else {
				var checked = $(".regular-checkbox:checked").length > 0;
				if (!checked){
					bootbox.alert("Please check at least one checkbox!");
					return false;
				}
				var data = new Array();
				$("input[name='regular-checkbox']:checked").each(function(i) {
					data.push($(this).val());
				});
			}

			if(!data){
                bootbox.alert("Please check at least one checkbox!");
				return false;
			}else{
            bootbox.confirm({
                message: "This is a confirm with custom button text and color! Do you like it?",
                buttons: {
                confirm: {
                label: 'Yes',
                className: 'btn-success'
                },
                cancel: {
                label: 'No',
                className: 'btn-danger'
                }
                },
                callback: function (result) {
                console.log('This was logged in the callback: ' + result);
                if(result){
                    $.ajax({
						type: "POST",
						url: url,
						data: 'attendence='+ data + "&& data_value=" + data_value + "&& date=" + date,
						success: function (msg) {							
							$("#"+check_id).parent().parent().hide();
							if(msg) {
								if($.isArray(data)){
									for (var i=0;i<data.length;i++){
										//$(".attendence_"+data[i]).parent().parent().fadeOut("slow");
                                        if(data_value==1){
                                            $("#attendence_res_"+data[i]).removeClass();
                                            $("#attendence_res_"+data[i]).addClass('label bg-green');
                                            $("#attendence_res_"+data[i]).html('Present');
                                        }else if(data_value==2){
                                            $("#attendence_res_"+data[i]).removeClass();
                                            $("#attendence_res_"+data[i]).addClass('label bg-red');
                                            $("#attendence_res_"+data[i]).html('Absent');
                                        }else if(data_value==3){
                                            $("#attendence_res_"+data[i]).removeClass();
                                            $("#attendence_res_"+data[i]).addClass('label bg-yellow');
                                            $("#attendence_res_"+data[i]).html('Leave');
                                        }
									}
                                    $('.table > thead > tr > th:first-child > input[type="checkbox"],.table > tbody > tr > td:first-child > input[type="checkbox"]').each(function() { //loop through each checkbox
                                        this.checked = false;  //select all checkboxes with class "checkbox1"
                                    });
                                    $('').parents('thead').next().find('tr > td:first-child > input[type="checkbox"]').prop('checked', 'false');
									$(".response_alert").show(function(){
										$(this).html('<div class="alert alert-success" style="padding: 10px;"><strong>Success! </strong>Attendence updated successfully.</div>');
                                        $(".response_alert").fadeOut(7000);
									});
								} else{
									$("#attendence_"+data).fadeOut("slow");
									$(".response_alert").show(function(){
										$(this).html('<div class="alert alert-success" style="padding: 10px;"><strong>Success!</strong>Successfully deleted.</div>');
										$(".response_alert").fadeOut(8000);
									});
								}      
							} else {
								$(".response_alert").show(function(){
									$(this).html('<div class="alert alert-danger" style="padding: 10px;"><strong>Fail!</strong>Error on deleting.</div>');
									$(".response_alert").fadeOut(8000);
								});
							}
						}
					});
                }
                }
            })
			}

		});
  //-------------------  /Add multiple presents records --------------------------//

});



$(function () {

        $('.enquiry_myform').submit('click', function (event) {

        $('#myModal').modal('hide');

        event.preventDefault();// using this page stop being refreshing

        $.ajax({

        type: 'POST',

        url: HOME_URL+'home/save_enquiry',

        dataType: 'json',

        data: $('form').serialize(),

        success: function(res){

            if(res.status==0){

                alert(res.message);

                $('.enquiry_myform').trigger("reset");

            }else{

                alert(res.message);

            }

        }

        });

        

        });

    });

    



$(function () {

        $('.add_periods').on('click', function (event) {
        $('#myModal').modal('show');
        });

    });



$(function () {

        $('#download_myform').submit('click', function (event) {

        $('#myModal').modal('hide');

        //alert($(this).attr("action"));        

        event.preventDefault();// using this page stop being refreshing

        $.ajax({

        type: 'POST',

        url: $(this).attr("action"),

        dataType: 'json',

        data: $('form').serialize(),

        success: function(res){

            if(res.status==0){

                //alert(res.message);

                $('#download_myform').trigger("reset");

                $('#dn_message').html(res.message);

                $('#dn_message .otp_popup').modal('show');

            }else{

                alert(res.message);

            }

        }

        });

        

        });

    });

 