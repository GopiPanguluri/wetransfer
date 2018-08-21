<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MX_Controller  {

	function __construct(){
        parent::__construct();
        $this->load->model('home_model');
        $this->load->model('common/common_model');
        $this->load->model('common/upload_model');
        modules::run('admin/login/is_home_logged_in');
    }
    
	public function index(){
        $data['user_details'] = $this->home_model->get_profile_data($_SESSION['home_user_id']);
        //echo '<pre>'; print_r($data);exit;
        $this->load->view('profile',$data);
	}
    
	public function reset_password(){
        if (!isset($_POST['change_pass']))
        {
            $this->load->view('reset_password');
        } else
        {
           //echo 'nopost<pre>'; print_r($_POST);exit;
           $home_user_id = $_SESSION['home_user_id'];
           $this->load->model('loginmdl');
           //echo '<pre>'; print_r($home_user_id);exit;
           $pass = $this->loginmdl->get_user_info($home_user_id,array('password'));
           //echo '<pre>'; print_r($pass);exit;
           if($pass['password'] == md5($this->input->post('password')))
           {
                $user_info = array(
                    'password' => md5($this->input->post('new_password')),
                    );
                
                $res = $this->loginmdl->update_user($home_user_id,$user_info);
                //echo $this->db->last_query();
                //echo '<pre>'; print_r($res);exit;
                if ($res)
                {
                    $status = array(
                        'status' => '0',
                        //'go_to' => 'common/profile/change_password',
                        'message' => 'Password updated successfully'
                    );
                    //$this->session->set_flashdata('insert_record', $status);
                    echo json_encode($status);exit;
                } else
                {
                    $status = array(
                        'status' => '1',
                        'message' => 'Failed to update the password'
                    );
                    echo json_encode($status);exit;
                }
            }
            else
            {
                    $status = array(
                        'status' => '1',
                        'message' => 'Current Password is wrong'
                    );
                    echo json_encode($status);exit;
            }
        }
    }
    
	public function addresses(){
        $info = array(
            'select_fields' => '',
            'where' => array(
                'user_id' => $_SESSION['home_user_id']
            ),
            'tablename' => 'addresses'
        );
        $data['addresses'] = $this->common_model->get_individual_details($info);
        $info_cn = array(
            'select_fields' => '',
            'where' => array(
                //'user_id' => $_SESSION['home_user_id']
            ),
            'tablename' => 'countries'
        );
        $countries = $this->common_model->get_list($info_cn);
        $cn_ls = array('Select country');
        foreach($countries as $rw_countries){
            $cn_ls[$rw_countries['id']] = $rw_countries['name']; 
        }
        $data['cn_ls'] = $cn_ls;
        //echo '<pre>'; print_r($data);exit;
        $this->load->view('addresses',$data);
	}
    
    public function save_addresses(){
        //echo '<pre>'; print_r($_POST);exit;
        $user_id = $_SESSION['home_user_id'];
        $info = array(
            'select_fields' => '',
            'where' => array(
                'user_id' => $user_id
            ),
            'tablename' => 'addresses'
        );
        $addresses = $this->common_model->get_individual_details($info);
        //echo '<pre>';print_r($addresses);exit;
        //if(count($addresses)==0){
        if(!isset($addresses)){
                //echo '<pre>';print_r($_POST);exit;
                $info_insrt = array(
                    'ads_bil_street' => $this->input->post('ads_bil_street'),
                    'ads_bil_etd_street' => $this->input->post('ads_bil_etd_street'),
                    'ads_bil_city' => $this->input->post('ads_bil_city'),
                    'ads_bil_state' => $this->input->post('ads_bil_state'),
                    'ads_bil_zip_code' => $this->input->post('ads_bil_zip_code'),
                    'ads_bil_country' => $this->input->post('ads_bil_country'),
                    'ads_bil_same' => $this->input->post('ads_bil_same'),
                    'ads_ship_street' => $this->input->post('ads_ship_street'),
                    'ads_ship_etd_street' => $this->input->post('ads_ship_etd_street'),
                    'ads_ship_city' => $this->input->post('ads_ship_city'),
                    'ads_ship_state' => $this->input->post('ads_ship_state'),
                    'ads_ship_zip_code' => $this->input->post('ads_ship_zip_code'),
                    'ads_ship_country' => $this->input->post('ads_ship_country'),
                    'user_id' => $user_id
                );
                //echo "<pre>";print_r($info_insrt);exit;
                $result_id = $this->common_model->insert_details('addresses', $info_insrt);
                  if($result_id!=''){
                    $status = array(
                        'status' => 0,
                        'message' => 'Address added successfully'
                    );
                    echo json_encode($status);exit;
               }else{
                    $status = array(
                        'status' => 1,
                        'message' => 'Error while adding Teacher details...'
                    );
                    echo json_encode($status);exit;
               }
            }else{
                //echo '<pre>';print_r($_FILES);
                //echo '<pre>';print_r($_POST);exit;
                $info_uptd = array(
                    'where' => array(
                        'user_id' => $user_id
                    ),
                    'data' => array(
                        'ads_bil_street' => $this->input->post('ads_bil_street'),
                        'ads_bil_etd_street' => $this->input->post('ads_bil_etd_street'),
                        'ads_bil_city' => $this->input->post('ads_bil_city'),
                        'ads_bil_state' => $this->input->post('ads_bil_state'),
                        'ads_bil_zip_code' => $this->input->post('ads_bil_zip_code'),
                        'ads_bil_country' => $this->input->post('ads_bil_country'),
                        'ads_bil_same' => $this->input->post('ads_bil_same'),
                        'ads_ship_street' => $this->input->post('ads_ship_street'),
                        'ads_ship_etd_street' => $this->input->post('ads_ship_etd_street'),
                        'ads_ship_city' => $this->input->post('ads_ship_city'),
                        'ads_ship_state' => $this->input->post('ads_ship_state'),
                        'ads_ship_zip_code' => $this->input->post('ads_ship_zip_code'),
                        'ads_ship_country' => $this->input->post('ads_ship_country'),
                    ),
                    'tablename' => 'addresses'
                );
                //echo '<pre>';print_r($info_uptd);exit;
                $result = $this->common_model->update_details($info_uptd);
                if($result){
                    $status = array(
                        'status' => 0,
                        'message' => 'Address updated successfully'
                    );
                }else{
                //echo '<pre>not ok';print_r($_FILES);exit;
                    $status = array(
                        'status' => 1,
                        'message' => 'Error while adding Teacher details...'
                    );
               }
               echo json_encode($status);exit;
            }    
    }
    
	public function billing(){
        $this->load->view('billing');
	}
    
	public function email_preferences(){
        $this->load->view('email_preferences');
	}
    
	public function save_user_data(){
        //echo '<pre>'; print_r($_FILES);
//        echo '<pre>'; print_r($_POST);exit;
        $profile_image='';
        if(isset($_FILES['profile_image'])&&$_FILES['profile_image']['name']!=''){
            $profile_image='';
            $time = time();
            $profile_image_ext = explode(".",$_FILES['profile_image']['name']);
            $profile_image_ext = end($profile_image_ext);
            //echo '<pre>';print_r($_FILES);exit;
            $_FILES['profile_image']['name'] =  $time .'.'.$profile_image_ext;
            //echo '<pre>';print_r($_FILES);exit;
            $file_upl_data = $this->upload_model->uploadDocuments('profile_image', 'users');
            //echo '<pre>';print_r($file_upl_data);exit;
            if($file_upl_data['success'] == 1){
                $profile_image = $file_upl_data['file_name'];
                unlink(FCPATH . 'assets/images/users/' . $_POST['old_profile_image']);
                if(file_exists(config_item('root_dir').'assets/images/users/'.$_POST['old_profile_image'])){ 
                   unlink(FCPATH . 'assets/images/users/' . $_POST['old_profile_image']);
                }
            }else{
                $status = array(
                    'status' => 'fail',
                    'message' => $file_upl_data['msg']
                );
                $this->session->set_flashdata('insert_record', $status);
                redirect('school/teachers/create_teacher');
                echo json_encode($status);exit;
            }
        }else{
            $profile_image = $this->input->post('old_profile_image');
        }
        $info = array(
            'where' => array(
                'user_id' => $_SESSION['home_user_id']
            ),
            'data' => array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'mobile' => $this->input->post('phone_number'),
                'image' => $profile_image
            ),
            'tablename' => 'users'
        );
        //echo '<pre>';print_r($info);exit;
        $result = $this->common_model->update_details($info);
        if($result){
            $status = array(
                        'status' => 0,
                        'message' => 'Profile updated successfully'
                    );
            echo json_encode($status);exit;
        }else{
        //echo '<pre>not ok';print_r($_FILES);exit;
            $status = array(
                'status' => 1,
                'message' => 'Error while updating profile...'
            );
            echo json_encode($status);exit;
        }        
	}
}
