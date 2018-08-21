<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends MX_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->lang->load('data');
        $this->load->model('common/common_model');
        $this->load->model('loginmdl');
    }

    // Login from search login page
    /**
	 * index()
	 * Login from search login page
	 * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
	 */
    public function index()
    {
        if ($this->session->userdata('is_admin_logged_in') == true && $this->session->userdata('admin_user_id') != '')
        {
            redirect('admin');
        }else{
            $data['info_msg'] = 'Please Login below';
            $data['go_to_url'] = '';
    		$this->load->view('common/logins/login', $data);
        }
    }

    // Login from search login page
    /**
	 * social_login()
	 * Login from social login page
	 * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
	 */
    public function social_login()
    {
        $data['info_msg'] = 'Please Login below';
        $data['go_to_url'] = '';
		$this->load->view('common/logins/social_login', $data);
    }

    // Login from search login page
    /**
	 * social_login()
	 * Login from social login page
	 * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
	 */
    public function social_register()
    {
        $data['info_msg'] = 'Please Login below';
        $data['go_to_url'] = '';
		$this->load->view('common/logins/social_register', $data);
    }
    
    
    public function save_register_social(){
       //echo '<pre>';print_r($_POST);exit;
        $ch_ed_data = array(
            'select_fields' => '',
            'where' => array(
                'email' => $this->input->post('email')
            ),
            'tablename' => 'users'
        );
        $check_unique = $this->common_model->get_list($ch_ed_data);
        if(count($check_unique)!=0){
            $status = array(
                'status' => '1',
                'message' => 'Entered email is already exists please enter another'
            );
            //$this->session->set_flashdata('insert_record', $status);
            echo json_encode($status);exit;
        }
        $info = array(
            'name' => $this->input->post('first_name').' '.$this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'status' => '3',
            'password' => md5($this->input->post('password'))
        );
        $info['confcode'] = random_string('alnum', 16);
        //echo "<pre>";print_r($info);exit;
        $result = $this->common_model->insert_details_id('users', $info);
        //echo "<pre>";print_r($result);exit;
        $info_com = array(
            'user_id' => $result,
        );
        $result_com = $this->common_model->insert_details_id('company_details', $info_com);
        $result_bank = $this->common_model->insert_details_id('bank_details', $info_com);
        $result_vendor = $this->common_model->insert_details_id('vendor_details', $info_com);
        
        //echo "<pre>";print_r($result);exit;
        //$result = true;
       if($result&&$result_com&&$result_bank&&$result_vendor)
       {
            $info['to'] = $info['email'];
            $info['conflink'] = base_url("admin/login/confirmuser/".$info['confcode']."_".$result."_" . md5($info['email']));
            $info['subject'] = 'Activation For '.$this->config->item('site_title');
            $message = $this->load->view('common/common/templates/mail_view', $info, true);
            //echo "<pre>";print_r($info);exit;
            $this->load->model('common/mail_model');
            $send_ml = $this->mail_model->send_mail($info['to'], $info['subject'], $message);
            $data['message'] = 'Successfully registered with '.$this->config->item('site_title').' in.please check you mail to active your account';
            $data['status'] = 0;
            $data['go_to'] = 'social';
       }else{
            $data['message'] =  'Something went wrong,please try again.';
			$data['status'] = 1;
       }
       log_message('INFO', 'Login status '.$info['email'].' '.'Successfully registered');
       //log_message('INFO', 'SEND ACTIVATION LINK '.$info['conflink']);
       echo json_encode($data);exit;
    }
    
    

    // Register page
    /**
	 * index()
	 * Login from search login page
	 * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
	 */
    public function register()
    {
        $data['info_msg'] = 'Please Register below';
        //$ids = "1,3";
        $data['category'] = $this->common_model->get_cat_list();
        //echo '<pre>'; print_r($category);exit;
        $data['go_to_url'] = '';
		$this->load->view('common/logins/register', $data);
    }

    // Login from search login page
    /**
	 * index()
	 * Login from search login page
	 * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
	 */
    public function buyer_login()
    {
        $data['info_msg'] = 'Please Login below';
        $data['go_to_url'] = '';
		$this->load->view('common/logins/buyer_login', $data);
    }

    // Login from search login page
    /**
	 * index()
	 * Login from search login page
	 * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
	 */
    public function buyer_register()
    {
        $data['info_msg'] = 'Please Login below';
        $data['go_to_url'] = '';
		$this->load->view('common/logins/buyer_register', $data);
    }

    // Login from search login page
    /**
	 * index()
	 * Login from search login page
	 * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
	 */
    public function seller_login()
    {
        $data['info_msg'] = 'Please Login below';
        $data['go_to_url'] = '';
		$this->load->view('common/logins/seller_login', $data);
    }

    // Login from search login page
    /**
	 * index()
	 * Login from search login page
	 * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
	 */
    public function seller_register()
    {
        $data['info_msg'] = 'Please Login below';
        $data['go_to_url'] = '';
		$this->load->view('common/logins/seller_register', $data);
    }

    // Save Register Member
    /**
	 * save_register_member()
	 * Save Register Member
	 * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
	 */
    public function save_register_member(){
       //echo '<pre>';print_r($_POST);exit;
        $ch_ed_data = array(
            'select_fields' => '',
            'where' => array(
                'email' => $this->input->post('email')
            ),
            'tablename' => 'users'
        );
        $check_unique = $this->common_model->get_list($ch_ed_data);
        if(count($check_unique)!=0){
            $status = array(
                'status' => '1',
                'message' => 'Entered email is already exists please enter another'
            );
            //$this->session->set_flashdata('insert_record', $status);
            echo json_encode($status);exit;
        }
        $info = array(
            'c_id' => $this->input->post('c_id'),
            'type_indi_com' => $this->input->post('type_indi_com'),
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'type' => $this->input->post('type'),
            'status' => '3',
            'password' => md5($this->input->post('password'))
        );
        $info['confcode'] = random_string('alnum', 16);
        //echo "<pre>";print_r($info);exit;
        $result = $this->common_model->insert_details_id('users', $info);
        //echo "<pre>";print_r($result);exit;
        $info_com = array(
            'user_id' => $result,
        );
        $result_com = $this->common_model->insert_details_id('company_details', $info_com);
        $result_bank = $this->common_model->insert_details_id('bank_details', $info_com);
        $result_vendor = $this->common_model->insert_details_id('vendor_details', $info_com);
        
        //echo "<pre>";print_r($result);exit;
        //$result = true;
       if($result&&$result_com&&$result_bank&&$result_vendor)
       {
            $info['to'] = $info['email'];
            $info['conflink'] = base_url("admin/login/confirmuser/".$info['confcode']."_".$result."_" . md5($info['email']));
            $info['subject'] = 'Activation For '.$this->config->item('site_title');
            $message = $this->load->view('common/common/templates/mail_view', $info, true);
            //echo "<pre>";print_r($info);exit;
            $this->load->model('common/mail_model');
            $send_ml = $this->mail_model->send_mail($info['to'], $info['subject'], $message);
            $data['message'] = 'Successfully registered with '.$this->config->item('site_title').' in.please check you mail to active your account';
            $data['status'] = 0;
            $data['go_to'] = '';
       }else{
            $data['message'] =  'Something went wrong,please try again.';
			$data['status'] = 1;
       }
       log_message('INFO', 'Login status '.$info['email'].' '.'Successfully registered');
       //log_message('INFO', 'SEND ACTIVATION LINK '.$info['conflink']);
       echo json_encode($data);exit;
    }
    
    public function login_status(){
       //echo '<pre>';print_r($_POST);exit;
       $pid = $this->input->post('email');
       
       $credentials = array('email'=>$this->input->post('email'),'password'=>md5($this->input->post('password')),'user_type'=>$this->input->post('user_type'));
       //$go_to_url = $this->input->post('go_to_url');
       log_message('INFO', 'Email starts for '.$this->input->post('email').' fn:'.__FUNCTION__.' lc:'.__FILE__);
       $this->load->model('loginmdl');
       $res = $this->loginmdl->validate_user($credentials);
       log_message('INFO', 'Login status '.$credentials['email'].' - '.$res['status']);
       //echo '<pre>';print_r($res);exit;
       if($res['status'] == 'failure')
       {
            //$data['info_msg'] = 'Please login below';
            //$this->session->set_flashdata('message', 'Invalid E-mail or Password.');
			$data['errmsg'] =  'Invalid Login id or Password.';
			$data['status'] = 1;
       }elseif($res['status'] == 'blocked')
	   {
            //$data['info_msg'] = 'Please login below';
            //$this->session->set_flashdata('message', 'Your Profile is Blocked.');
            $data['errmsg'] = 'Your Profile is Blocked.';
			$data['status'] = 1;
	   }elseif($res['status'] == 'deleted')
	   {
            //$data['info_msg'] = 'Please login below';
            //$this->session->set_flashdata('message', 'Your Profile is Blocked.');
            $data['errmsg'] = 'Your Profile is Deleted.';
			$data['status'] = 1;
	   }elseif($res['status'] == 'not_verified')
	   {
            //$data['info_msg'] = 'Please login below';
            //$this->session->set_flashdata('message', 'Your Profile is Blocked.');
            $data['errmsg'] = 'Your profile is not activated.Kindly check your mail inbox and Click on the link given to activate your account.';
			$data['status'] = 1;
	   }elseif ($res['status'] == 'success' && $this->session->userdata('admin_user_id') != ''||$this->session->userdata('home_user_id') != '')
       {
            //$user_type = '';
            //$go_to = 'admin';
            switch($res['user_type']){
                    case 1: $go_to = 'admin/dashboard'; break;
                    case 2: $go_to = 'home'; break;
                    default: $go_to = 'admin/dashboard'; break; 
                    
            }
            $data['info_msg'] = 'Successfully logged in.';
            $data['status'] = 0;
            $data['go_to'] = $_POST['redirect_url'];
       }
       //echo '<pre>';print_r($data);exit;
       echo json_encode($data);
    }
    
    public function register_status(){
        //echo '<pre>';print_r($_POST);exit;
        $ch_ed_data = array(
            'select_fields' => '',
            'where' => array(
                'email' => $this->input->post('form_email')
            ),
            'tablename' => 'users'
        );
        
        $check_unique = $this->common_model->get_list($ch_ed_data);
        
        if(count($check_unique)!=0){
            $status = array(
                'status' => '1',
                'message' => 'Entered email is already exists please enter another'
            );
            //$this->session->set_flashdata('insert_record', $status);
            echo json_encode($status);exit;
        }
        $info = array(
            'first_name' => $this->input->post('form_first_name'),
            'last_name' => $this->input->post('form_last_name'),
            'email' => $this->input->post('form_email'),
            'mobile' => $this->input->post('form_phone'),
            'status' => 0,
            'role_id' => 3,
            'password' => md5($this->input->post('form_password'))
        );
        $info['confcode'] = random_string('alnum', 16);
        //echo "<pre>";print_r($info);exit;
        $result = $this->common_model->insert_details('users', $info);
        //echo "<pre>";print_r($result);exit;
        //$result = true;
       if($result){
            $info['to'] = $info['email'];
            $info['conflink'] = base_url("admin/login/confirmuser/".$info['confcode']."_".$result."_" . md5($info['email']));
            $info['subject'] = 'Activation For '.$this->config->item('site_title');
            $message = $this->load->view('common/common/templates/mail_view', $info, true);
            //echo "<pre>";print_r($info);exit;
            $this->load->model('common/mail_model');
            //$send_ml = $this->mail_model->send_mail($info['to'], $info['subject'], $message);
            $data['message'] = 'Successfully registered with '.$this->config->item('site_title').'.';
            $data['status'] = 0;
            $data['go_to'] = 'home';
       }else{
            $data['message'] =  'Something went wrong,please try again.';
			$data['status'] = 1;
       }
       log_message('INFO', 'Login status '.$info['email'].' '.'Successfully registered');
       //log_message('INFO', 'SEND ACTIVATION LINK '.$info['conflink']);
       echo json_encode($data);exit;
    }
    
    function confirmuser($rest_hash = ''){
        //echo $rest_hash; exit();
        if ($rest_hash != '') {
            $url_vars = explode('_', $rest_hash);
            if (count($url_vars) == 3) {
                if (!empty($url_vars[1])) {
                    $user_id = $url_vars[1];
					//echo $user_id;
                    
                    $user_check = $this->loginmdl->get_user_by_id($user_id);
                    
                    //echo "heyy<pre>";print_r($user_check);exit;
					//echo $this->db->last_query();exit;
                    if (count($user_check) > 0 && $url_vars[0] == $user_check['confcode'] && $url_vars[2] == md5($user_check['email'])){
                        //echo "hiiiiiiiii<pre>";print_r($user_check);exit;
                        $data = array(
                               'last_login' => date('Y-m-d H:i:s'),
                               'status' => '0'
                           );
                        $this->db->where('user_id', $user_check['user_id']);
                        $update = $this->db->update('users', $data);
                        $user = $this->loginmdl->get_user_by_id($user_id);
                        //echo "heyy<pre>";print_r($user);exit;
                        $result_ary['status'] = 'success';
                        $result_ary['msg'] = 'Logged in successfully';
                        $loggedin_user = array('is_admin_logged_in' => TRUE, 'admin_user_id' => $user['user_id'],
                        'admin_name' => $user['name'],'admin_username' => $row['username'],'admin_type' => $user['type'],'admin_category' => $user['category'],
                        'admin_email' => $user['email'],'admin_last_login' => $user['last_login'],
                        'admin_role_id' => $user['role_id'],'admin_image' => $user['image'],'admin_gender' => $user['gender']);
                        $this->session->set_userdata($loggedin_user);
                        log_message('INFO', 'User session created for '.$user['user_id']);
                        log_message('INFO', 'Login status '.$_SESSION['admin_user_id'].' - '.$result_ary['status'].' - '.$result_ary['msg']);
                        $data['message'] = 'Successfully activated your '.$this->config->item('site_title').' profile.';
                        $data['status'] = 'success';
                        if($user['type']==1){
                            $go_to = 'seller';
                        }elseif($user['type']==2){
                            $go_to = 'buyer';
                        }elseif($user['type']==3){
                            $go_to = 'student';
                        }elseif($user['type']==4){
                            $go_to = 'franchise';
                        }
                        $this->session->set_flashdata('insert_record', $data);
                        //echo "heyy<pre>";print_r($data);
                        //echo "heyy<pre>";print_r($go_to);exit;
                        redirect($go_to);
                    } else {
						// echo "naan3";exit;
                        $data['msg'] = 'Invalid link';
                        echo $data['msg'];exit;
                    }
                    } else {
						// echo "naan3";exit;
                        $data['msg'] = 'Invalid link';
                        echo $data['msg'];exit;
                    }
                } else {
					// echo "naan4";exit;
                    $data['msg'] = 'Invalid link';
                    echo $data['msg'];exit;
                }
            } else {
				// echo "naan5";exit;
                $data['msg'] = 'Invalid link';
                echo $data['msg'];exit;
            }
        }
    
    function confirmuser_pass($rest_hash = ''){
        //echo $rest_hash; exit();
        if ($rest_hash != '') {
            $url_vars = explode('_', $rest_hash);
            if (count($url_vars) == 3) {
                if (!empty($url_vars[2])) {
                    $dealer_id = $url_vars[2];
					// echo $dealer_id;
                    $user = $this->loginmdl->get_emp_by_id($dealer_id);
					// echo $this->db->last_query();exit;
					
                    if(count($user) > 0 && $url_vars[0] == md5($user['email'])) {
                       // echo "naan";exit;
                        if ($this->form_validation->run() == false) {
							// echo "naan1";exit;
                            $data['showform'] = 1;
                            $this->load->view('settings/reset_password', $data);
                        } else {
							// echo "naan2";exit;
                            $res = $this->loginmdl->update_user_password($dealer_id, array('password' => $newpass));
							// echo $this->db->last_query();exit;
                            log_message('INFO', 'PASSWORD RESET for ' . $dealer_id);
                            $data['msg'] = "Your password has been changed successfully";
                            $this->load->view('settings/reset_password', $data);
                            $data['showform'] = 1;   //redirect('home');
                        }
                    } else {
						// echo "naan3";exit;
                        $data['msg'] = 'Invalid link';
                        $this->load->view('settings/reset_password', $data);
                    }
                } else {
					// echo "naan4";exit;
                    $data['msg'] = 'Invalid link';
                    $this->load->view('settings/reset_password', $data);
                }
            } else {
				// echo "naan5";exit;
                $data['msg'] = 'Invalid link';
                $this->load->view('settings/reset_password', $data);
            }
        } else {
			// echo "naan6";exit;
            $data['msg'] = 'Invalid link';
            $this->load->view('settings/reset_password', $data);
        }
    }
    
    //function register(){
//        $this->lang->load('data');
//        if($this->session->userdata('is_admin_logged_in')!="TRUE"){
//            $data['info_msg'] = 'Please Login below';
//            $data['go_to_url'] = '';
//			$this->load->view('pages/register', $data);
//        }else{
//            redirect('admin/dashboard');
//        }
//
//    }
    
    function admin_logout(){
        //echo 'hiiii';exit;
		$this->load->model('loginmdl');
		$user_id = $_SESSION['admin_user_id'];
		$this->loginmdl->logout($user_id);
        $array_items = array('is_admin_logged_in', 'admin_user_id', 'admin_fname','admin_lname','admin_email','admin_last_login');
        $go_to = 'admin';
        $this->session->unset_userdata($array_items);
        redirect($go_to);
    }
    
    function buyer_logout(){
        //echo 'hiiii';exit;
		$this->load->model('loginmdl');
		$user_id = $_SESSION['buyer_user_id'];
		$this->loginmdl->logout($user_id);
        $array_items = array('is_buyer_logged_in', 'buyer_user_id', 'buyer_fname','buyer_lname','buyer_email','buyer_last_login');
        $go_to = 'admin/login'; 
        $this->session->unset_userdata($array_items);
        redirect($go_to);
    }
    
    function home_logout(){
        //echo 'hiiii';exit;
		$this->load->model('loginmdl');
        $user_id = $_SESSION['home_user_id'];
		$this->loginmdl->logout($user_id);
        $array_items = array('is_home_logged_in', 'home_user_id', 'home_fname','home_lname','home_email','home_last_login');
        $go_to = 'home'; 
        $this->session->unset_userdata($array_items);
        redirect($go_to);
    }
    
    function student_logout(){
        //echo 'hiiii';exit;
		$this->load->model('loginmdl');
        $user_id = $_SESSION['student_user_id'];
		$this->loginmdl->logout($user_id);
        $array_items = array('is_student_logged_in', 'student_user_id', 'student_fname','student_lname','student_email','student_last_login');
        $go_to = 'admin/login'; 
        $this->session->unset_userdata($array_items);
        redirect($go_to);
    }
    
    function franchise_logout(){
        //echo 'hiiii';exit;
		$this->load->model('loginmdl');
        $user_id = $_SESSION['franchise_user_id'];
		$this->loginmdl->logout($user_id);
        $array_items = array('is_franchise_logged_in', 'franchise_user_id', 'franchise_fname','franchise_lname','franchise_email','franchise_last_login');
        $go_to = 'admin/login'; 
        $this->session->unset_userdata($array_items);
        redirect($go_to);
    }
    
    function social_logout(){
        //echo 'hiiii';exit;
		$this->load->model('loginmdl');
        $user_id = $_SESSION['social_user_id'];
		$this->loginmdl->logout($user_id);
        $array_items = array('is_social_logged_in', 'social_user_id', 'social_fname','social_lname','social_email','social_last_login');
        $go_to = 'admin/login/social_login'; 
        $this->session->unset_userdata($array_items);
        redirect($go_to);
    }

    // Check user login status
    function is_admin_logged_in()
    {
        if ($this->session->userdata('is_admin_logged_in') == true && $this->session->userdata('admin_user_id') != '')
        {
            return true;
        } else
        {
            $array_items = array('is_admin_logged_in', 'admin_user_id', 'admin_fname','admin_lname','admin_email','admin_last_login');
            $this->session->unset_userdata($array_items);
            //redirect('home');
            $data['info_msg'] = 'Please Login below';
            //$this->session->set_flashdata('message','Please login below');
            $data['go_to_url'] = uri_string();
			$this->load->view('common/logins/login', $data);
            exit();
        }

    }

    // Check seller login status
    function is_home_logged_in()
    {
        if ($this->session->userdata('is_home_logged_in') == true && $this->session->userdata('home_user_id') != '')
        {
            return true;
        } else
        {
            $array_items = array('is_home_logged_in', 'home_user_id', 'home_fname','home_lname','home_email','home_last_login');
            $this->session->unset_userdata($array_items);
            $this->load->model('settings_model');
            $result = $this->settings_model->get_settings();            
            foreach($result->result() as $row){
                $res[$row->setting_name] = $row->setting_value;
            }
            $data['settings'] = $res;                                    
            //redirect('home');
            $data['info_msg'] = 'Please Login below';
            //$this->session->set_flashdata('message','Please login below');
            $data['go_to_url'] = uri_string();
			$this->load->view('home/login', $data);
            exit();
        }

    }

    // Check buyer login status
    function is_buyer_logged_in()
    {
        if ($this->session->userdata('is_buyer_logged_in') == true && $this->session->userdata('buyer_user_id') != '')
        {
            return true;
        } else
        {
            $array_items = array('is_buyer_logged_in', 'buyer_user_id', 'buyer_fname','buyer_lname','buyer_email','buyer_last_login');
            $this->session->unset_userdata($array_items);
            //redirect('home');
            $data['info_msg'] = 'Please Login below';
            //$this->session->set_flashdata('message','Please login below');
            $data['go_to_url'] = uri_string();
			$this->load->view('common/logins/login', $data);
            exit();
        }

    }

    // Check Student login status
    function is_student_logged_in()
    {
        if ($this->session->userdata('is_student_logged_in') == true && $this->session->userdata('student_user_id') != '')
        {
            return true;
        } else
        {
            $array_items = array('is_student_logged_in', 'student_user_id', 'student_fname','student_lname','student_email','student_last_login');
            $this->session->unset_userdata($array_items);
            //redirect('home');
            $data['info_msg'] = 'Please Login below';
            //$this->session->set_flashdata('message','Please login below');
            $data['go_to_url'] = uri_string();
			$this->load->view('common/logins/login', $data);
            exit();
        }

    }

    // Check Franchise login status
    function is_franchise_logged_in()
    {
        //echo '<pre>'; print_r($_SESSION);exit;
        if ($this->session->userdata('is_franchise_logged_in') == true && $this->session->userdata('franchise_user_id') != '')
        {
            return true;
        } else
        {
            $array_items = array('is_franchise_logged_in', 'franchise_user_id', 'franchise_fname','franchise_lname','franchise_email','franchise_last_login');
            $this->session->unset_userdata($array_items);
            //redirect('home');
            $data['info_msg'] = 'Please Login below';
            //$this->session->set_flashdata('message','Please login below');
            $data['go_to_url'] = uri_string();
			$this->load->view('common/logins/login', $data);
            exit();
        }

    }

    // Check Social login status
    function is_social_logged_in()
    {
        //echo '<pre>'; print_r($_SESSION);exit;
        if ($this->session->userdata('is_social_logged_in') == true && $this->session->userdata('social_user_id') != '')
        {
            return true;
        } else
        {
            $array_items = array('is_social_logged_in', 'social_user_id', 'social_fname','social_lname','social_email','social_last_login');
            $this->session->unset_userdata($array_items);
            //redirect('home');
            $data['info_msg'] = 'Please Login below';
            //$this->session->set_flashdata('message','Please login below');
            $data['go_to_url'] = uri_string();
			$this->load->view('common/logins/social_login', $data);
            exit();
        }
    }
    
    function is_allowed($access_location,$role='')
    {
        //echo $access_location; exit();
        if($role == ''){
            $role = $this->session->userdata('user_type');
        }
        
        if($role == 1){
            return true;
            
        }elseif($role == 8 || $role == 9){
            $allowed = array('my_reports');
        }elseif($role<8){
            $allowed = array('users','reports','others');
        }
        
        if(in_array($access_location,$allowed)){
            return true;
        }else{
            redirect('home/my_reports');
        }
    }
    
      function forgot_password() {
        $data['status'] = 0;
        $data['msg'] = '';

        $this->load->library('form_validation');
        $this->load->model('loginmdl');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_error_delimiters('<p class="alert alert-danger">', '</p>');

        if ($this->form_validation->run() == false) {
            $this->load->view('login/forgot_password', $data);
        } else {
            $to = $this->input->post('email');
            $user = $this->loginmdl->get_emp_by_email($to);
            if (count($user) > 0) {
                $reset_hash = md5($to) . '_' . strtotime('now') . '_' . $user['login_id'];
                $title = config_item('SiteName').' account recovery';
                $reset_link = anchor("login/reset_password/" . $reset_hash, "Reset your password");
                $message = "Forgot your password? It's okay. <br/>Please click on the following link to reset your password<br/>" . $reset_link . '<br/>If you did not request to change your password, please ignore this email and no changes will be made to your account.<br>';
                $this->load->model('common/mail_model');
                $message .= 'Reset link: ' . $reset_link;
                // $message = array('reset_link' => $reset_link);
                //$mail_data = array('reset_link' => $reset_link);
                // $res = $this->mail_model->tpl_mail($to, $mail_data, 'forgot_password');
                $res = $this->mail_model->gng_mail($to,$subject='',$message);

                if ($res) {
                    $data['status'] = 1;
                    $data['msg'] = 'Your Recover password link has been sent to your email id';
                    log_message('INFO', 'PASSWORD RESET LINK ' . $reset_link);
                } else {
                    $data['status'] = 0;
                    $data['msg'] = 'Something went wrong. Please try again latter.';
                }
            } else {
                $data['status'] = 0;
                $data['msg'] = 'Email does not exist in our records';
            }
            $this->load->view('login/forgot_password', $data);
        }
    }

    function reset_password($rest_hash = '') {
	
        $this->load->library('form_validation');
        $this->load->model('loginmdl');
		
        $this->form_validation->set_rules('newpass', 'New password', 'trim|required|min_length[5]|xss_clean');
        $this->form_validation->set_rules('cpass', 'Confirm Password ', 'trim|required|matches[newpass]|min_length[5]|xss_clean');
        $this->form_validation->set_error_delimiters('<p class="alert alert-danger">', '</p>');
        $data['showform'] = 0;
        $data['rest_hash'] = $rest_hash;
	
        if ($rest_hash != '') {
            $url_vars = explode('_', $rest_hash);
			
				
            if (count($url_vars) == 3) {
                if (!empty($url_vars[2])) {
                    $dealer_id = $url_vars[2];
					// echo $dealer_id;
                    $user = $this->loginmdl->get_emp_by_id($dealer_id);
					// echo $this->db->last_query();exit;
					
                    if (count($user) > 0 && $url_vars[0] == md5($user['email'])) {
						// echo "naan";exit;
                        if ($this->form_validation->run() == false) {
							// echo "naan1";exit;
                            $data['showform'] = 1;
                            $this->load->view('settings/reset_password', $data);
                        } else {
							// echo "naan2";exit;
                            $newpass = md5($this->input->post('newpass'));
                            $res = $this->loginmdl->update_user_password($dealer_id, array('password' => $newpass));
							// echo $this->db->last_query();exit;
                            log_message('INFO', 'PASSWORD RESET for ' . $dealer_id);
                            $data['msg'] = "Your password has been changed successfully";
                            $this->load->view('settings/reset_password', $data);
                            $data['showform'] = 1;   //redirect('home');
                        }
                    } else {
						// echo "naan3";exit;
                        $data['msg'] = 'Invalid link';
                        $this->load->view('settings/reset_password', $data);
                    }
                } else {
					// echo "naan4";exit;
                    $data['msg'] = 'Invalid link';
                    $this->load->view('settings/reset_password', $data);
                }
            } else {
				// echo "naan5";exit;
                $data['msg'] = 'Invalid link';
                $this->load->view('settings/reset_password', $data);
            }
        } else {
			// echo "naan6";exit;
            $data['msg'] = 'Invalid link';
            $this->load->view('settings/reset_password', $data);
        }
    }

    function resend_action()
    {
        $data['status'] = 0;
        $data['msg'] = '';

        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == false)
        {
            $this->load->view('settings/confirmation', $data);
        } else
        {
            $to = $this->input->post('email');
            $this->load->model('loginmdl');
            $user = $this->loginmdl->get_pass_reset_code($to);
            //echo $this->db->last_query();exit;
            if (count($user) > 0)
            {
                $conflink = anchor("register/confirmuser?confcode=".$user['confcode']."&email=".$to."&profileid=" . $user['profileid'], "Click here");
                //$reset_link = anchor("login/reset_password/".$user['profileid']."/".$user['confcode'], "Click here");
                $mailbody = "Thank you for registering with Siasat Matrimonial! As the newest member of our community, I encourage you to explore our services and features.<br><br>
				To confirm your profile, please click the link below.<br><br>
				Please<b> <a href='" . $conflink ."'>click here</a> </b>to activate your Matrimonial account.<br><br>
				We have recorded the following registration information for you:<br><br>
				Your Profile ID: " . $user['profileid'] . "<br>
				Your registered E-Mail: " . $to . "<br>
				Please keep this information in a safe, secure place, so that you will be able to access all of the services and features available to you.<br><br>
				Thanks again for using our services, and we hope that you find your match!";

                $subject = 'Confirm your profile at Siasat Matrimonial';
                
                $this->load->model('common/mail_model');
                $res =  $this->mail_model->matri_mail($to,$subject, $mailbody);
                if ($res)
                {
                    $data['status'] = 1;
                    $data['msg'] = 'Your activation link has been sent to your email id';
                    log_message('INFO', 'RE SEND ACTIVATION LINK '.$conflink);
                } else
                {
                    $data['status'] = 0;
                    $data['msg'] = 'Something went wrong. Please try again latter.';
                }
            } else
            {
                $data['status'] = 0;
                $data['msg'] = 'Email does not exist in our records';
            }
            $this->load->view('settings/confirmation', $data);
        }

    }

}