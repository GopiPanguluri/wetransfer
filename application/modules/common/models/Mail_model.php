<?php

class Mail_model extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
        $this->load->helper('file');
    }
    
	 //*  Email Function
	function send_mail($to, $subject, $message, $tpl_type=''){
	// function gng_mail($to, $subject, $message, $tpl_type='',$header){
       //echo $message;exit;
       $from_name = $this->config->item('site_title');
       $from = $this->config->item('email');
       $cc=''; 
       $bcc='';
       
       
        $config = Array(
                    'protocol' => 'smtp',
                    'charset' => 'utf-8',
                    'wordwrap' => TRUE,
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'gopi.panguluri@mindtechlabs.com',
                    'smtp_pass' => 'gopikirshna!@#mr',
                    'mailtype' => 'html'
                );
                
        $this->load->library('email', array('mailtype' => 'html'));
        //$this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');
		if(!empty($from)){
			if(!empty($from_name))
				$this->email->from($from, $from_name);
			else
				$this->email->from($from);
		}
		if(!empty($to))
			$this->email->to($to);
		if(!empty($cc))
			$this->email->cc($cc);
		if(!empty($bcc))
			$this->email->bcc($bcc); 
		if(!empty($subject))
			$this->email->subject($subject);
		if(!empty($message)){
			$data['message'] = $message;
			$message = $this->load->view('common/common/mail_view', $data, TRUE);
            $file_data = '<br/><br/><br/>'.date('Y-m-d h:i:s A').$to.' - '.$message;
            if(!write_file('application/logs/log.html', $file_data, 'a'))
            {
                log_message('ERROR', 'Unable to wrote email to log');
            }
            else
            {
                log_message('INFO', 'Mail logged successfully');
            }
            return true;
			$this->email->message($message);
		}
		//echo 'Mail has been Sent';
		
		if($this->email->send()){
		  log_message("INFO", "MAIL Sent");
          //echo $this->email->print_debugger();exit();
		  return true;
		}
        else{
           log_message("ERROR", "MAIL sending failed");
           //echo $this->email->print_debugger();exit();           
           //$this->email->debug_print();
           return false;
        }
	}
    

    function send_sms($mobile_number, $message = '')
    {
        $user='BRICSTRANS';
        $password='brics123';
        $genkey='552861439';
        $sender='BRICSS';
        if(!write_file('application/logs/sms_log.html', '/n/n'.$mobile_number.' - '.$message,'a'))
        {
            log_message('ERROR', 'Unable to log SMS');
        }
        else
        {
            log_message('INFO', 'SMS logged successfully');
        }
//        return true;
        //$this->load->library('curl');
        $message = 'Your%20Otp%20for%20download%20material%20is%20'.$message;
        //$responce = $this->curl->simple_get($url); //file_get_contents($url);
        
        //$url = 'http://bulksmsapps.com/apisms.aspx?';
      //  $params = 'http://bulksmsapps.com/apisms.aspx?user='.$user.'&password='.$password.'&genkey='.$genkey.'&sender='.$sender.'&number='.$mobile_number.'&message='.$message;
      $params="http://www.bulksmsapps.com/apisms.aspx?user=".$user."&password=".$password."&genkey=".$genkey."&sender=".$sender."&number=".$mobile_number."&message=".$message;
      //echo '<pre>';print_r($params);exit;
        
        //echo $url.$params; exit();
        
        $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output=curl_exec($ch);
        curl_close($ch); 
        log_message('INFO', $output);
        //echo '<pre>';print_r($output);exit;
        if(strpos($output, 'OK'))
        {
            log_message('INFO', 'SMS Sent successfully to - '.$mobile_number);
            return true;    
        }
        else
        {
            log_message('ERROR', 'SMS Sending failed for no - '.$mobile_number);
        }
        
        return true;
    }	
	
}