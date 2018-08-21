<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MX_Controller{
    function __construct()
    {
        parent::__construct();
        $this->lang->load('data');
        $this->load->model('common/common_model');
        $this->load->model('profile_model');
        modules::run('admin/login/is_admin_logged_in');
    }


    public function index()
    {
        
        $ids = "1,3";
        $category = $this->common_model->get_cat_list($ids);
        //echo '<pre>'; print_r($category);exit;
        $data['category'] = array(''=>'Select one');
        foreach($category as $row):
            $data['category'][$row['c_id']] = $row['c_name'];
        endforeach;
        
        $info_com = array(
            'select_fields' => '',
            'where' => array(
            ),
            'where_in' => array(
            ),
            'tablename' => 'company_types'
        );
        $this->load->model('seller/seller_model');
        $com_types = $this->seller_model->get_tz_list($info_com);
        $data['com_types'] = array(''=>'Select one');
        foreach($com_types as $row):
            $data['com_types'][$row['ct_id']] = $row['ct_name'];
        endforeach;
        
        $info_tz = array(
            'select_fields' => '',
            'where' => array(
            ),
            'where_in' => array(
            ),
            'tablename' => 'timezones'
        );
        
        $info_tz = $this->common_model->get_list_where_in($info_tz);
        $data['tz_list'] = array(''=>'Select one');
        foreach($info_tz as $row):
            $data['tz_list'][$row['tz_id']] = $row['timezone'].' (GMT'.$row['utc_offset'].')';
        endforeach;
        
        $info_cn = array(
            'select_fields' => '',
            'where' => array(
            ),
            'where_in' => array(
            ),
            'tablename' => 'countries'
        );
        
        $info_country = $this->common_model->get_list_where_in($info_cn);
        $data['cn_list'] = array(''=>'Select one','0'=>'No Country');
        foreach($info_country as $row):
            $data['cn_list'][$row['id']] = $row['name'].' - '.$row['sortname'];
        endforeach;
        
        $info_sts = array(
            'select_fields' => '',
            'where' => array(
            ),
            'where_in' => array(
            ),
            'tablename' => 'states'
        );
        
        $info_states = $this->common_model->get_list_where_in($info_sts);
        $data['states_list'] = array(''=>'Select one','0'=>'No State');
        foreach($info_states as $row):
            $data['states_list'][$row['id']] = $row['name'];
        endforeach;
        
        $info_cts = array(
            'select_fields' => '',
            'where' => array(
            ),
            'where_in' => array(
            ),
            'tablename' => 'cities'
        );
        
        $info_cities = $this->common_model->get_list_where_in($info_cts);
        $data['cities_list'] = array(''=>'Select one','0'=>'No City');
        foreach($info_cities as $row):
            $data['cities_list'][$row['id']] = $row['name'];
        endforeach;
        
        $info = array(
            'select_fields' => '',
            'where' => array(
                'user_id' => $_SESSION['admin_user_id']
            ),
            'tablename' => 'company_details'
        );
        $data['item_details'] = $this->common_model->get_individual_details($info);
        $this->load->view('profile', $data);
    }
    
    /**
    * change_password
    * Change Password
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    function change_password()
    {
        if (!isset($_POST['change_pass']))
        {
            $this->load->view('common/settings/change_password');
        } else
        {
           //echo 'nopost<pre>'; print_r($_POST);exit;
           $admin_user_id = $_SESSION['admin_user_id'];
           $this->load->model('loginmdl');
           $pass = $this->loginmdl->get_user_info($admin_user_id,array('password'));
           //echo '<pre>'; print_r($pass);exit;
           if($pass['password'] == md5($this->input->post('password')))
           {
                $user_info = array(
                    'password' => md5($this->input->post('npassword')),
                    );
                //echo '<pre>'; print_r($admin_email);exit;
                $res = $this->loginmdl->update_user($admin_user_id,$user_info);
    
                if ($res)
                {
                    $status = array(
                        'status' => '0',
                        //'go_to' => 'common/profile/change_password',
                        'message' => 'Password updated successfully'
                    );
                    $this->session->set_flashdata('insert_record', $status);
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
    
    /**
    * create_banner
    * Create Banner
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function view_buyer($id){
        $data['mode'] = 'details';
        $data['msg'] = '';
        $info = array(
            'select_fields' => '',
            'where' => array(
                'user_id' => $id
            ),
            'tablename' => 'users'
        );
        $data['item_details'] = $this->common_model->get_individual_details($info);
        $list = array(
            'select_fields' => '',
            'where' => array(),
            'tablename' => 'categories'
        );
        $data['categories'] = array('' => 'Select One') + $this->common_model->get_list($list);
        //echo '<pre>';print_r($data);exit;
        $this->load->view('buyers/create_buyer', $data);
    }
    
    function profile_edit()
    {
        //$this->lang->load('data');
//        if($this->session->userdata('is_admin_logged_in')!="TRUE"){
//            $data['info_msg'] = 'Please Login below';
//            $data['go_to_url'] = '';
//			$this->load->view('common/logins/seller_login', $data);
//        }else{
//            redirect('admin/dashboard');
//        }
        //$this->dashboard();
        //$info = array(
//            'select_fields' => '',
//            'where' => array(
//            ),
//            'where_in' => array(
//                'ut_id' => "'1','3'"
//            ),
//            'tablename' => 'categories'
//        );

        
        
        
        $info_bank = array(
            'select_fields' => '',
            'where' => array(
                'user_id' => $_SESSION['admin_user_id']
            ),
            'tablename' => 'bank_details'
        );
        $data['bank_details'] = $this->common_model->get_individual_details($info_bank);
        
        
        
        $info = array(
            'select_fields' => '',
            'where' => array(
                'user_id' => $_SESSION['admin_user_id']
            ),
            'tablename' => 'users'
        );
        $data['item_details'] = $this->common_model->get_individual_details($info);
        
        
        $info_com = array(
            'select_fields' => '',
            'where' => array(
                'user_id' => $_SESSION['admin_user_id']
            ),
            'tablename' => 'company_details'
        );
        $data['com_details'] = $this->common_model->get_individual_details($info_com);
        
        $this->load->model('common_model');
        $ids = "1,3";
        $category = $this->common_model->get_cat_list($ids);
        //echo '<pre>'; print_r($category);exit;
        $data['category'] = array(''=>'Select one');
        foreach($category as $row):
            $data['category'][$row['c_id']] = $row['c_name'];
        endforeach;
        
        $info_com = array(
            'select_fields' => '',
            'where' => array(
            ),
            'where_in' => array(
            ),
            'tablename' => 'company_types'
        );
        $this->load->model('seller/seller_model');
        $com_types = $this->seller_model->get_tz_list($info_com);
        $data['com_types'] = array(''=>'Select one');
        foreach($com_types as $row):
            $data['com_types'][$row['ct_id']] = $row['ct_name'];
        endforeach;
        
        $info_tz = array(
            'select_fields' => '',
            'where' => array(
            ),
            'where_in' => array(
            ),
            'tablename' => 'timezones'
        );
        $this->load->model('common_model');
        $info_tz = $this->common_model->get_list_where_in($info_tz);
        $data['tz_list'] = array(''=>'Select one');
        foreach($info_tz as $row):
            $data['tz_list'][$row['tz_id']] = $row['timezone'].' (GMT'.$row['utc_offset'].')';
        endforeach;
        
        $info_cn = array(
            'select_fields' => '',
            'where' => array(
            ),
            'where_in' => array(
            ),
            'tablename' => 'countries'
        );
        
        $info_country = $this->common_model->get_list_where_in($info_cn);
        $data['cn_list'] = array(''=>'Select one','0'=>'No Country');
        foreach($info_country as $row):
            $data['cn_list'][$row['id']] = $row['name'].' - '.$row['sortname'];
        endforeach;
        
        $info_sts = array(
            'select_fields' => '',
            'where' => array(
                'country_id'=> $data['com_details']['cd_country_id']
            ),
            'where_in' => array(
            ),
            'tablename' => 'states'
        );
        
        $info_states = $this->common_model->get_list_where_in($info_sts);
        $data['states_list'] = array(''=>'Select one','0'=>'No State');
        foreach($info_states as $row):
            $data['states_list'][$row['id']] = $row['name'];
        endforeach;
        
        $info_cts = array(
            'select_fields' => '',
            'where' => array(
                'state_id'=> $data['com_details']['cd_state_id']
            ),
            'where_in' => array(
            ),
            'tablename' => 'cities'
        );
        
        $info_cities = $this->common_model->get_list_where_in($info_cts);
        $data['cities_list'] = array(''=>'Select one','0'=>'No City');
        foreach($info_cities as $row):
            $data['cities_list'][$row['id']] = $row['name'];
        endforeach;
        //$data['category'] = $this->common_model->get_list_where_in($info);
        //echo '<pre>'; print_r($data);exit;
        $this->load->view('common/profile_edit',$data);

    }
    
    /**
    * save_profile_edit
    * Save Profile Edit Data Of Buyer and Seller
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function save_profile_edit(){
        //echo '<pre>';print_r($_SESSION);
        //echo '<pre>';print_r($_FILES);
        //echo '<pre>';print_r($_POST);exit;
        if(isset($_POST['image'])&&$_POST['image']=='undefined'){
            $image = $_SESSION['admin_image'];            
        }else{            
            if($_FILES['image']['name'] != ''){
                $this->load->model('common/upload_model');
                $files = $_FILES;
                $time = time();
                $string1 = str_replace(' ', '-', $_POST['com_name']); // Replaces all spaces with hyphens.
                $string1 = preg_replace('/[^A-Za-z0-9\-]/', '', $string1); // Removes special chars.
                $random_string = random_string('alnum', 16);
                $title_product = $string1.'-'.$random_string;
                $image_ext = explode(".",$_FILES['image']['name']);
                $image_ext = end($image_ext);
                $_FILES['image']['name'] = $title_product . "." . $image_ext;
                $file_upl_data = $this->upload_model->uploadDocuments('image', 'image');
                if ($file_upl_data['success'] == 1) {
                    $image = $file_upl_data['file_name'];
                    $this->session->set_userdata('admin_image',$image);
                } else {
                    $status = array(
                        'status' => '1',
                        'message' => $file_upl_data['msg']
                    );
                    $image = $_SESSION['admin_image'];
                    //$this->session->set_flashdata('insert_record', $status);
                    //echo '<pre>';print_r($_POST);exit;
                    //redirect('admin/create_banner/' . $_POST['id']);
                    echo json_encode($status);exit;
                }
            }
        }
        $info = array(
            'where' => array(
                'user_id' => $_SESSION['admin_user_id']
            ),
            'data' => array(
                'name' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'c_id' => $this->input->post('c_id'),
                'address' => $this->input->post('address'),
                'gender' => $this->input->post('gender'),
                'image' => $image
            ),
            'tablename' => 'users'
        );
        //echo "<pre>";print_r($info); exit;
        $result = $this->common_model->update_details($info);
        //echo $this->db->last_query();
        //echo "<pre>";print_r($info); exit;
        if ($result) {
        $info_com = array(
            'where' => array(
                'user_id' => $_SESSION['admin_user_id']
            ),
            'data' => array(
                'cd_name' => $this->input->post('cd_name'),
                'cd_contact_name' => $this->input->post('cd_contact_name'),
                'cd_mobile' => $this->input->post('cd_mobile'),
                'cd_email' => $this->input->post('cd_email'),
                'cd_address' => $this->input->post('cd_address'),
                'ct_id' => $this->input->post('ct_id'),
                'cd_vendor_name' => $this->input->post('cd_vendor_name'),
                'cd_country_id' => $this->input->post('cd_country_id'),
                'cd_state_id' => $this->input->post('cd_state_id'),
                'cd_city_id' => $this->input->post('cd_city_id'),
                'cd_area' => $this->input->post('cd_area'),
                'cd_postal_code' => $this->input->post('cd_postal_code'),
                'cd_exporter_no' => $this->input->post('cd_exporter_no'),
                'cd_reg_no' => $this->input->post('cd_reg_no'),
                'cd_incorp_date' => date('Y-m-d',strtotime($this->input->post('cd_incorp_date'))),
                'tz_id' => $this->input->post('tz_id')
            ),
            'tablename' => 'company_details'
        );
        //echo "<pre>";print_r($info_com); exit;
        $result_com = $this->common_model->update_details($info_com);
        
        $info_bank = array(
            'where' => array(
                'user_id' => $_SESSION['admin_user_id']
            ),
            'data' => array(
                'bd_name_of_acct' => $this->input->post('bd_name_of_acct'),
                'bd_acct_no' => $this->input->post('bd_acct_no'),
                'bd_bank_name' => $this->input->post('bd_bank_name'),
                'bd_bank_branch' => $this->input->post('bd_bank_branch'),
                'bd_bank_ifsc' => $this->input->post('bd_bank_ifsc')
            ),
            'tablename' => 'bank_details'
        );
        //echo "<pre>";print_r($info_bank); exit;
        $result_bank = $this->common_model->update_details($info_bank);
            if ($result_com&&$result_bank) {
                $status = array(
                    'status' => '0',
                    'go_to' => 'common/profile/profile_edit',
                    'message' => 'Profile updated successfully'
                );
                echo json_encode($status);exit;
            }
        } else {
            $status = array(
            'status' => '1',
            'message' => 'Sorry something is wrong please try again.!'
            );
            echo json_encode($status);exit;
        }
    }
    
    /**
    * get_states_list
    * Get States List
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function get_states_list(){
        //echo '<pre>'; print_r($_POST);exit;
        $id = $this->input->post('id');
        $data['states'] = $this->profile_model->get_states_list($id);
        if($data['states']){
            $data['status'] = 0;
        }else{
            $data['status'] = 1;
        }
        //echo '<pre>'; print_r($states);exit;
        echo json_encode($data);
    }
    
    /**
    * get_states_list
    * Get States List
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function get_cities_list(){
        $id = $this->input->post('id');
        $data['states'] = $this->profile_model->get_cities_list($id);
        if($data['states']){
            $data['status'] = 0;
        }else{
            $data['status'] = 1;
        }
        //echo '<pre>'; print_r($states);exit;
        echo json_encode($data);
    }	
}
