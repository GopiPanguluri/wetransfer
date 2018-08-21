<!DOCTYPE html>
<html lang="en">
<head>
    <title>Muslim Marriages - Muslim Matrimony, Muslim Brides & Grooms: SiasatMatri.com</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Muslim Matrimony, Muslim Matrimonial, Muslim Matrimonials, Muslim Marriages, Muslim Brides, Muslim Grooms, Muslim Brides & Grooms, Muslim Girls, Muslim Boys, free muslim matrimonial, muslim matrimony site">
    <meta name="description" content="Muslim Matrimony, search for a  Muslim partner. Search for  Muslim Brides & Grooms. Quick Muslim Matrimonial search">
    <?php $this->load->view('common/common/css'); ?>
    <?php $this->load->view('common/common/js'); ?>
</head>
<body>
    <div class="page_content">
<section>

    <div class="main_wraper">

        <div class="page_content">

        	<div class="page_wraper text-center">

                <?php 

				if(!$this->session->userdata('profileid'))

				{

					echo '<div class="noresults text-center">Reset your password.</div>';

            	?>
				<br />
	   
    <?php $this->form_validation->set_error_delimiters('<div class="errormsg">', '</div>'); 
         echo validation_errors();
         
         if(isset($msg) && $msg != '') echo '<div class="errormsg">'.$msg.'</div>';
        ?>
        <br />

                <div class="logindiv">

                    <form id="login" method="post" action="<?php echo site_url('login/reset_password/'.$profileid.'/'.$confcode) ;?>">

                    <div>

                    	<input type="hidden" name="user_id" value="<?php echo $profileid; ?>" />
    <input type="hidden" name="activation_code" value="<?php  echo $confcode; ?>"/>
	
   <input type="password" required="" id="pass" name="newpass" placeholder="password" class="span14">

   <input type="password" required="" id="cpass" name="cpass" placeholder="Confirm password" class="span14">

                    </div>

                    <div class="text-center" >

                        <input type="submit" class="login_btn1" id="login_btn1" value="Submit"> 

                    </div>

                    </form>

                </div>

                <?php }

				if(isset($_GET['incorrectlogin']))

					echo '<div class="errormsg text-center">'.$_GET['incorrectlogin'].'</div>';

				 ?>

               <div id="infoMessage"><?php echo $this->session->flashdata('message');?></div>



            </div>

        </div>

    </div>

</section>
<?php $this->load->view('common/common/footer') ?>
</div>
</body>
</html>