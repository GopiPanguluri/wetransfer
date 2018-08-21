<!--script data-cfasync="false" src="<?php //echo config_item('site_base_path'); ?>js/email-decode.min.js"></script-->
<script src="<?php echo config_item('site_base_path'); ?>js/app.js"></script>
<script>
    //var billingIssues = $('.has-billing-issue').length > 0
//    var isSuspended = $('.is-suspended').length > 0
//    if(billingIssues) {
//        var billignReveal = new Foundation.Reveal($('#billing-issue'))
//        billignReveal.open()
//    } else if (isSuspended){
//        var name = $('.is-suspended').data('name');
//        var messageHtml = 'Unfortunately your access to the ' + name + ' content has been suspended.<br>' +
//        'If you have any questions please email us to <a href="#">support@consulting.com</a>';
//        $('#suspend-modal-message').html(messageHtml);
//        var accountSuspended = new Foundation.Reveal($('#account-suspended'))
//        accountSuspended.open()
//    }
//    $('.continue-link').each(function(index, value) {
//    var link = localStorage.getItem('product-last-location-' + $(value).data().id)
//    if(link)
//    $(this).attr('href', link)
//    })
</script>
<script type="text/javascript">
  // function redfunction()
  // { 
  //   document.getElementById('app1').removeAttribute('disabled');
  // }
  var pre_color = "<?php echo $_SESSION['home_user_theme']; ?>";
  test(pre_color);
  //alert(pre_color);
  function test(c_value) {
  	localStorage.setItem('pre_color', c_value);
    $.ajax({
            url: "<?php echo base_url('home/set_theme_color_status'); ?>",
            type: "post",
            dataType: "json",
            data: {
                user_theme: c_value,
                user_id: "<?php echo $_SESSION['home_user_id']; ?>",
            },
            success: function(res) {
                if(res.status=='1'){
                      
                }else{
                    alert('Something went Wrong! Please try again.');
                }
            }            
   });
   if(c_value === 'red'){
      // document.getElementById("app").disabled = true;
      document.getElementById('app1').removeAttribute('disabled');
      document.getElementById("app2").disabled = true;
      document.getElementById("app3").disabled = true;
      document.getElementById("app4").disabled = true;
      document.getElementById("app5").disabled = true;
      document.getElementById("app6").disabled = true;
      document.getElementById("app7").disabled = true;
      document.getElementById("app8").disabled = true;
      document.getElementById("selectid").style.backgroundColor = "red";
      //document.getElementById("selectid2").style.backgroundColor = "red";
      document.getElementById("offCanvas").style.backgroundColor = "red";
      $('.mobile-menu ul li a').css('background-color','red'); 
      $('.accordion ul li a').css('background-color','white');
  }else if (c_value === 'blue'){
      document.getElementById('app2').removeAttribute('disabled');
      document.getElementById("app1").disabled = true;
      document.getElementById("app3").disabled = true;
      document.getElementById("app4").disabled = true;
      document.getElementById("app5").disabled = true;
      document.getElementById("app6").disabled = true;
      document.getElementById("app7").disabled = true;
      document.getElementById("app8").disabled = true;
      document.getElementById("selectid").style.backgroundColor = "blue";
      //document.getElementById("selectid2").style.backgroundColor = "blue";
      document.getElementById("offCanvas").style.backgroundColor = "blue";
      $('.mobile-menu ul li a').css('background-color','blue'); 
      $('.accordion ul li a').css('background-color','white'); 

  }else if(c_value === 'green'){
      document.getElementById('app3').removeAttribute('disabled');
      document.getElementById("app2").disabled = true;
      document.getElementById("app1").disabled = true;
      document.getElementById("app4").disabled = true;
      document.getElementById("app5").disabled = true;
      document.getElementById("app6").disabled = true;
      document.getElementById("app7").disabled = true;
      document.getElementById("app8").disabled = true;
      document.getElementById("selectid").style.backgroundColor = "green";
      //document.getElementById("selectid2").style.backgroundColor = "green";
      document.getElementById("offCanvas").style.backgroundColor = "green";
      $('.mobile-menu ul li a').css('background-color','green');  
      $('.accordion ul li a').css('background-color','white'); 

  }else if(c_value === 'black'){
      document.getElementById('app4').removeAttribute('disabled');
      document.getElementById("app2").disabled = true;
      document.getElementById("app1").disabled = true;
      document.getElementById("app3").disabled = true;
      document.getElementById("app5").disabled = true;
      document.getElementById("app6").disabled = true;
      document.getElementById("app7").disabled = true;
      document.getElementById("app8").disabled = true;
      document.getElementById("selectid").style.backgroundColor = "black";
      //document.getElementById("selectid2").style.backgroundColor = "black";
      document.getElementById("offCanvas").style.backgroundColor = "black";
      $('.mobile-menu ul li a').css('background-color','black'); 
      $('.accordion ul li a').css('background-color','white');
  }else if(c_value === 'orange'){
      document.getElementById('app5').removeAttribute('disabled');
      document.getElementById("app2").disabled = true;
      document.getElementById("app1").disabled = true;
      document.getElementById("app4").disabled = true;
      document.getElementById("app3").disabled = true;
      document.getElementById("app6").disabled = true;
      document.getElementById("app7").disabled = true;
      document.getElementById("app8").disabled = true;
      document.getElementById("selectid").style.backgroundColor = "orange";
      //document.getElementById("selectid2").style.backgroundColor = "orange";
      document.getElementById("offCanvas").style.backgroundColor = "orange";
      $('.mobile-menu ul li a').css('background-color','orange');   
      $('.accordion ul li a').css('background-color','white');

  }else if(c_value === 'aqua'){
      document.getElementById('app6').removeAttribute('disabled');
      document.getElementById("app2").disabled = true;
      document.getElementById("app1").disabled = true;
      document.getElementById("app4").disabled = true;
      document.getElementById("app5").disabled = true;
      document.getElementById("app3").disabled = true;
      document.getElementById("app7").disabled = true;
      document.getElementById("app8").disabled = true;
      document.getElementById("selectid").style.backgroundColor = "aqua";
      //document.getElementById("selectid2").style.backgroundColor = "aqua";
      document.getElementById("offCanvas").style.backgroundColor = "aqua";
      $('.mobile-menu ul li a').css('background-color','aqua'); 
      $('.accordion ul li a').css('background-color','white');
  }else if(c_value === 'indigo'){
      document.getElementById('app7').removeAttribute('disabled');
      document.getElementById("app2").disabled = true;
      document.getElementById("app1").disabled = true;
      document.getElementById("app4").disabled = true;
      document.getElementById("app5").disabled = true;
      document.getElementById("app6").disabled = true;
      document.getElementById("app3").disabled = true;
      document.getElementById("app8").disabled = true;
      document.getElementById("selectid").style.backgroundColor = "indigo";
      //document.getElementById("selectid2").style.backgroundColor = "indigo";
      document.getElementById("offCanvas").style.backgroundColor = "indigo";
      $('.mobile-menu ul li a').css('background-color','indigo'); 
      $('.accordion ul li a').css('background-color','white');
  }else if(c_value === 'violet'){
      document.getElementById('app8').removeAttribute('disabled');
      document.getElementById("app2").disabled = true;
      document.getElementById("app1").disabled = true;
      document.getElementById("app4").disabled = true;
      document.getElementById("app5").disabled = true;
      document.getElementById("app6").disabled = true;
      document.getElementById("app7").disabled = true;
      document.getElementById("app3").disabled = true;
      document.getElementById("selectid").style.backgroundColor = "violet";
      //document.getElementById("selectid2").style.backgroundColor = "violet";
      document.getElementById("offCanvas").style.backgroundColor = "violet";
      $('.mobile-menu ul li a').css('background-color','violet'); 
      $('.accordion ul li a').css('background-color','white');
  }else if(c_value === 'null'){
      document.getElementById('app4').removeAttribute('disabled');
      document.getElementById("app2").disabled = true;
      document.getElementById("app1").disabled = true;
      document.getElementById("app3").disabled = true;
      document.getElementById("app5").disabled = true;
      document.getElementById("app6").disabled = true;
      document.getElementById("app7").disabled = true;
      document.getElementById("app8").disabled = true;
      document.getElementById("selectid").style.backgroundColor = "black";
      //document.getElementById("selectid2").style.backgroundColor = "black";
      document.getElementById("offCanvas").style.backgroundColor = "black";
      $('.mobile-menu ul li a').css('background-color','black'); 
      $('.accordion ul li a').css('background-color','white');
  }
}
</script>