<!DOCTYPE html>
<html lang="en">
<head>
    <title>Muslim Marriages - Muslim Matrimony, Muslim Brides & Grooms: SiasatMatri.com</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Muslim Matrimony, Muslim Matrimonial, Muslim Matrimonials, Muslim Marriages, Muslim Brides, Muslim Grooms, Muslim Brides & Grooms, Muslim Girls, Muslim Boys, free muslim matrimonial, muslim matrimony site">
    <meta name="description" content="Muslim Matrimony, search for a  Muslim partner. Search for  Muslim Brides & Grooms. Quick Muslim Matrimonial search">
    <?php $this->load->view('common/css'); ?>
    <?php $this->load->view('common/js'); ?>
</head>
<body>
    <div class="page_content">
      <?php $this->load->view('common/header1'); ?>
<section>

    <div class="main_wraper">

        <div class="page_content">

        	<div class="page_wraper text-center">

                
					<div class="noresults text-center">Please enter your email below to reset your password.</div>

            	
				<?php //if($status == 0) { ?>
    <?php $this->form_validation->set_error_delimiters('<div class="error_msg">', '</div>'); 
        echo '<div class="InformationMsg">'.validation_errors().'</div>';
         
        if(isset($msg)) echo '<div class="InformationMsg">'.$msg.'</div>';
    ?>
    <br />
    
    <?php // } ?> 

                <div class="logindiv">

                    <form id="login" method="post" action="<?php echo site_url('/login/forgot_password'); ?>">

                    <div>

                    	<input type="hidden" name="profileid" value="<?php if(isset($_GET['pid'])) echo $_GET['pid']; ?>"/>

                        <input type="email" required="" id="email" name="email" placeholder="Email" class="span14"/>

                    </div>

                    <div class="text-center">

                        <input type="submit" class="login_btn1" id="login_btn1" value="Submit"/> 

                    </div>

                    </form>

                </div>

                

            </div>

        </div>

    </div>

</section>
<?php $this->load->view('common/footer1') ?>
</div>
</body>
</html>