<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        //$this->lang->load('site');
        $this->load->model(array('common/common_model','users_model'));
        $this->load->helper('file');
        modules::run('admin/login/is_admin_logged_in');
    }


    public function index()
    {
        $this->load->view('users/users');
    }
    
    /**
    * get_users_list
    * Get Photo user List
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function get_users_list()
    {
        $this->load->model('users_model');
        $result = $this->users_model->get_users_list();
        //echo '<pre>'; print_r($result);exit;
        $roles = array(''=>'Select One') + $this->users_model->get_role_list();
        $aaData = array();
        foreach($result['aaData'] as $row){
            //echo '<pre>'; print_r($row);exit;
            $row[3] = '<img style="background-color: grey;" src="'.$this->config->item('root_dir').'assets/images/users/'.$row[3].'" height="120" width="150"/>';
            //$row[3] = word_limiter($row[3], 30);
            if($row[8]!=1){
                //var_dump($row);
                //echo '<pre>'; print_r($row);exit;
                //$row[4] = $roles[$row[4]];
                //if($_SESSION['admin_role_id']==2){
                if($row[8]!=='2'||$_SESSION['admin_role_id']!=='2'){
                    $row[0] = '<input type="checkbox" id="checkbox-1-' . intval($row[0]) . '" class="checkbox1 regular-checkbox" name="regular-checkbox"
                                        value="' . $row[0] . '"/><label for="checkbox-1-' . intval($row[0]) . '"></label>';
                    if($row[6]==1){
                    $row[6] = '<div id="status' . $row[7] . '">
                            <a href="javascript:void(0);" class="show-tooltip" title="Change Status" onclick="changestatus(' . $row[7] . ', ' . $row[6] . ')" >
                                    <i class="glyphicon glyphicon-remove"></i>
                            </a></div> ';   
                    }else{
                        $row[6] = '<div id="status' . $row[7] . '">
                                <a href="javascript:void(0);" class="show-tooltip" title="Change Status" onclick="changestatus(' . $row[7] . ', ' . $row[6] . ')" >
                                        <i class="glyphicon glyphicon-ok"></i>
                                </a></div> ';
                    }
                    $row[7] = '<a href="'.base_url('admin/users/create_user/') . $row[7] . '" title="Edit Record" data-toggle="tooltip">
                                    <i class="fa_size fa fa-pencil" ></i></a>
                           <a href="javascript:void(0)" data-toggle="tooltip" id="' . $row[7] . '" class="deleteme show-tooltip deleteitem_' . $row[7] . '"" title="Delete Record" data-tablename="users" data-fieldname="user_id" url="'. site_url('admin/admin/delete_all_record') .'">
                                    <i class="fa_size fa fa-trash-o "></i></a>';
                }else{
                    $row[4] = 'Sales Team';
                    $row[0] = '<i class="fa fa-lock"></i>';
                    $row[6] = '<span class="label bg-green">Active</span>';
                    $row[7] = '<p class="text-aqua">No Permissions</p>';
                }
            }else{
                $row[4] = 'Super Admin';
                $row[0] = '<i class="fa fa-lock"></i>';
                $row[6] = '<span class="label bg-green">Active</span>';
                $row[7] = '<p class="text-aqua">No Permissions</p>';
            }
            //<a href="'.base_url('admin/view_banner') ."/". $row[5] . '" title="View Record" data-toggle="tooltip">
            //<i class="fa_size fa fa-eye"></i></a>
            
            if($_SESSION['admin_role_id']=='2'){
                if($row[8]=='3'){
                    $aaData[] = $row;
                }
                
            }else{
                $aaData[] = $row;
            }
            //var_dump($row[8]);
            unset($row[8]);
        }
        $result['aaData'] = $aaData;
        //echo '<pre>'; print_r($result);exit;
        print_r(json_encode($result));
    }
    
   /**
    * create_news
    * Create News
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function create_user($id = '') {
        //echo '<pre>'; print_r($_SESSION);exit;
        $this->load->model(array('users_model','home/home_model'));
        $data['roles'] = array(''=>'Select One') + $this->users_model->get_role_list($_SESSION['admin_role_id']);
        $programs = $this->home_model->get_programs_list();
        //echo '<pre>'; print_r($programs);exit;
        $pr_ls = array(''=>'Select Programs');
        foreach($programs as $rw_programs){
            $pr_ls[$rw_programs['program_id']] = $rw_programs['program_name'];
        }
        //echo '<pre>'; print_r($pr_ls);exit;
        
        $data['pr_ls'] = $pr_ls;
        if ($id != '') {
            $data['mode'] = 'edit';
            $data['msg'] = '';
            $info = array(
                'select_fields' => '',
                'where' => array(
                    'user_id' => $id
                ),
                'tablename' => 'users'
            );
            $this->load->model('common/common_model');
            $data['users_list'] = $this->config->item('users_list');
            $data['item_details'] = $this->common_model->get_individual_details($info);
            $info_cour_sel = array(
                'select_fields' => 'program_id',
                'where' => array(
                    'user_id' => $data['item_details']['user_id']
                ),
                'tablename' => 'users_programs'
            );
            $data_course_selection = $this->common_model->get_list($info_cour_sel);
            //$data_course_selection = array_values($data_course_selection);
            $dt_cour_sel_ls = array();
            foreach($data_course_selection as $dt_cour_sel_k=>$dt_cour_sel_v){
                //echo '<pre>';print_r($dt_cour_sel_v);exit();
                $dt_cour_sel_ls[] = $dt_cour_sel_v['program_id'];
            }
            //echo '<pre>';print_r($dt_cour_sel_ls);exit();
            $data['item_details']['course_selection'] = $dt_cour_sel_ls;
            $this->load->view('users/create_user', $data);
        } else {
            if (isset($_POST['insert'])) {
                //echo '<pre>';print_r($_FILES);
                //echo '<pre>';print_r($_SESSION);exit();
                //echo '<pre>';print_r($_POST);exit();
                $image = '';
                $this->load->model('common/upload_model');
                $this->load->model('common/common_model');
                $files = $_FILES;
                $time = time();
                $string1 = str_replace(' ', '-', $_POST['first_name']); // Replaces all spaces with hyphens.
                $string1 = preg_replace('/[^A-Za-z0-9\-]/', '', $string1); // Removes special chars.
                $random_string = random_string('alnum', 16);
                $title_product = $string1.'-'.$random_string;
                $image_ext = explode(".",$_FILES['image']['name']);
                $image_ext = end($image_ext);
                $_FILES['image']['name'] =  $title_product .'.'.$image_ext;
                if ($_FILES['image']['name'] != '') {
                    $file_upl_data = $this->upload_model->uploadDocuments('image', 'users');
                    //echo '<pre>';print_r($file_upl_data);exit;
                    if ($file_upl_data['success'] == 1) {
                        $image = $file_upl_data['file_name'];
                    } else {
                        $status = array(
                            'status' => 'fail',
                            'message' => 'Invalid Image Size'
                        );
                        $this->session->set_flashdata('insert_record', $status);
                        redirect('admin/users/create_user');
                    }
                }
                $x = 3; // Amount of digits
                $min = pow(10,$x);
                $max = pow(10,$x+1)-1;
                $value = rand($min, $max);
                //echo $value;exit;
                $rand_pass = $this->input->post('first_name').$this->input->post('last_name').$value;
                $value = rand($min, $max);
                //echo $rand_pass.'-asdf'.$value;exit();
                $username = $this->input->post('first_name').$this->input->post('last_name').$value;
                $info = array(
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'payment_method_fin' => $this->input->post('payment_method'),
                    'finance_date' => date('Y-m-d',strtotime($this->input->post('payment_method_date'))),
                    'username' => $username,
                    'email' => $this->input->post('user_email'),
                    'role_id' => $this->input->post('role_id'),
                    'password' => MD5($rand_pass),
                    'image' => $image
                );
                //echo "<pre>";print_r($info); exit;
                $result = $this->common_model->insert_details_id('users', $info);
                //$result = true;
                if($result){
                    $user_prgms = $this->input->post('course_selection');
                    foreach($user_prgms as $rw_user_prgms){
                        $info_course = array(
                        'program_id' => $rw_user_prgms,
                        'user_id' => $result
                        );
                        $this->users_model->insert_details('users_programs', $info_course);
                    }
                    $info['name'] = $info['first_name'];
                    $info['username'] = $info['username'];
                    $info['to'] = $info['email'];
                    $info['subject'] = 'Colin.com Credentials';
                    $info['Password'] = $rand_pass;
                    $file_data = '<br/><br/>'.date('Y-m-d h:i:s A').' - '.$info['to'].' -:: '.$rand_pass;
                    if(!write_file('application/logs/log.html', $file_data, 'a'))
                    {
                        log_message('ERROR', 'Unable to wrote password for - '.$info['to'].' - to log');
                    }
                    else
                    {
                        log_message('INFO', "Passsword for email - ".$info['to']." - is :: ".$rand_pass);
                    }
                    //log_message("INFO", "Passsword for email - ".$info['to']." - is :: ".$rand_pass);
                    $message = $this->load->view('common/common/templates/credentials', $info, true);
                    //echo $message;exit;
                    $this->load->model('common/mail_model');
                    $send_ml = $this->mail_model->send_mail($info['to'], $info['subject'], $message);
                    $status = array(
                        'status' => 'success',
                        'message' => 'User Added Successfully'
                    );
                    $this->session->set_flashdata('insert_record', $status);
                    redirect('admin/users');
                } else {
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Sorry something is wrong please try again.!'
                    );
                    $this->session->set_flashdata('insert_record', $status);
                    redirect('admin/users/create_course');
                }
            } if(isset($_POST['update'])) {
                //echo '<pre>';print_r($_POST);exit;
                $this->load->model('common/common_model');
                $this->load->model('common/upload_model');
                if ($_FILES['image']['name'] != '') {
                    $files = $_FILES;
                    $time = time();
                    $string1 = str_replace(' ', '-', $_POST['name']); // Replaces all spaces with hyphens.
                $string1 = preg_replace('/[^A-Za-z0-9\-]/', '', $string1); // Removes special chars.
                $random_string = random_string('alnum', 16);
                $title_product = $string1.'-'.$random_string;
                $image = explode(".",$_FILES['image']['name']);
                $image_ext = end($image);
                $_FILES['image']['name'] =  $title_product .'.'.$image_ext;
                //unlink(FCPATH . 'assets/images/users/' . $_POST['old_image']);
                    $file_upl_data = $this->upload_model->uploadDocuments('image', 'users');
                    if ($file_upl_data['success'] == 1) {
                        $image = $file_upl_data['file_name'];
                        unlink(FCPATH . 'assets/images/users/' . $_POST['old_image']);
                    } else {
                        $status = array(
                            'status' => 'fail',
                            'message' => 'Invalid Image Size'
                        );
                        $this->session->set_flashdata('insert_record', $status);
                        redirect('admin/users/create_user/' . $_POST['id']);
                    }
                } else {
                    $image = $this->input->post('old_image');
                }
                
                $ch_ed_data = array(
                    'select_fields' => '',
                    'where' => array(
                        'email' => $this->input->post('email'),
                        'user_id !=' => $this->input->post('id')
                    ),
                    'tablename' => 'users'
                );
                $check_unique = $this->common_model->get_list($ch_ed_data);
                if(count($check_unique)!=0){
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Entered email is already taken please enter another email'
                    );
                    $this->session->set_flashdata('insert_record', $status);
                    redirect('admin/users/create_user/' . $_POST['id']);
                }
                
                $info = array(
                    'where' => array(
                        'user_id' => $this->input->post('id')
                    ),
                    'data' => array(
                        'first_name' => $this->input->post('first_name'),
                        'last_name' => $this->input->post('last_name'),
                        'payment_method_fin' => $this->input->post('payment_method'),
                        'finance_date' => date('Y-m-d',strtotime($this->input->post('payment_method_date'))),
                        'username' => $this->input->post('first_name').$this->input->post('last_name'),
                        'email' => $this->input->post('user_email'),
                        'role_id' => $this->input->post('role_id'),
                        'image' => $image
                    ),
                    'tablename' => 'users'
                );
                if($this->input->post('user_password')!=''){
                    $info['data']['password'] = MD5($this->input->post('user_password'));
                }
                //echo '<pre>';print_r($info);exit;
                $result = $this->common_model->update_details($info);
                if ($result) {
                    $user_prgms = $this->input->post('course_selection');
                    $data_delete_item = $this->users_model->delete_course_sel('users_programs',$this->input->post('id'),$user_prgms);
                    foreach($user_prgms as $rw_user_prgms){
                        $info = array(
                            'select_fields' => '',
                            'where' => array(
                                'program_id' => $rw_user_prgms,
                                'user_id' => $this->input->post('id')
                                ),
                            'tablename' => 'users_programs'
                        );
                        $data_item_details = $this->common_model->get_individual_details($info);
                        //echo $data_item_details.'fsdf';exit;
                        if(count($data_item_details)==0){
                            $info_course = array(
                                'program_id' => $rw_user_prgms,
                                'user_id' => $this->input->post('id')
                            );
                            $this->users_model->insert_details('users_programs', $info_course);
                        }
                    }
                    $status = array(
                        'status' => 'success',
                        'message' => 'User Updated Successfully'
                    );
                    $this->session->set_flashdata('insert_record', $status);
                    redirect('admin/users');
                } else {
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Sorry something is wrong please try again.!'
                    );
                    $this->session->set_flashdata('insert_record', $status);
                    redirect('admin/users/create_user/' . $_POST['id']);
                }
            } else {
                $data['mode'] = 'create';
                $data['msg'] = '';
                $data['users_list'] = $this->config->item('users_list');
                $this->load->view('users/create_user', $data);
            }
        }
    }
    public function user_roles()
    {
        $this->load->view('user_roles/user_roles');
    }
    
    /**
    * get_user_roles_list
    * Get User Roles List
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function get_user_roles_list()
    {
        $this->load->model('users_model');
        $result = $this->users_model->get_user_roles_list();
        $aaData = array();
        foreach($result['aaData'] as $row){

            //$row[2] = '<img src="'. base_url('assets/images/users/'.$row[2]).'" height="120" width="150"/>';
            //$row[3] = word_limiter($row[3], 30);
              
             if($row[4]==1){
                $row[0] = '<i class="fa fa-lock"></i>';
                $row[3] = '<span class="label bg-green">Active</span>';
                $row[4] = '<p class="text-aqua">No Permissions</p>';
              }else {
                $row[0] = '<input type="checkbox" id="checkbox-1-' . intval($row[0]) . '" class="checkbox1 regular-checkbox" name="regular-checkbox"
                    value="' . $row[0] . '"/><label for="checkbox-1-' . intval($row[0]) . '"></label>';
                if($row[3]==1){
                $row[3] = '<div id="status' . $row[4] . '">
                        <a href="javascript:void(0);" class="show-tooltip" title="Change Status" onclick="changestatus(' . $row[4] . ', ' . $row[3] . ')" >
                                <i class="glyphicon glyphicon-remove"></i>
                        </a></div> ';   
                }else{
                    $row[3] = '<div id="status' . $row[4] . '">
                            <a href="javascript:void(0);" class="show-tooltip" title="Change Status" onclick="changestatus(' . $row[4] . ', ' . $row[3] . ')" >
                                    <i class="glyphicon glyphicon-ok"></i>
                            </a></div> ';
                }
                $row[4] = '<a href="'.base_url('admin/users/create_user_role/')  ."/". $row[4] . '" title="Edit Record" data-toggle="tooltip">
                                <i class="fa_size fa fa-pencil" ></i></a>
                       <a href="javascript:void(0)" data-toggle="tooltip" id="' . $row[4] . '" class="deleteme show-tooltip deleteitem_' . $row[4] . '"" title="Delete Record" data-tablename="user_roles" data-fieldname="ur_id" url="'. site_url('admin/admin/delete_all_record') .'">
                                <i class="fa_size fa fa-trash-o "></i></a>';
              }
            //<a href="'.base_url('admin/view_banner') ."/". $row[5] . '" title="View Record" data-toggle="tooltip">
                        //<i class="fa_size fa fa-eye"></i></a>
            
            $aaData[] = $row;
        }
        $result['aaData'] = $aaData;
        //echo '<pre>'; print_r($result);exit;
        print_r(json_encode($result));
    }
    
    public function create_user_role($id = ''){
        if ($id != '') {
            $data['mode'] = 'edit';
            $data['msg'] = '';
            $info = array(
                'select_fields' => '',
                'where' => array(
                    'ur_id' => $id
                ),
                'tablename' => 'user_roles'
            );
            $this->load->model('common/common_model');
            $data['users_list'] = $this->config->item('users_list');
            $data['item_details'] = $this->common_model->get_individual_details($info);
            $this->load->view('user_roles/create_user_role', $data);
        } else {
            if (isset($_POST['insert'])) {
                //echo '<pre>';print_r($_POST);exit;
                $image = '';
                $this->load->model('common/upload_model');
                $this->load->model('common/common_model');
                $info = array(
                    'ur_name' => $this->input->post('ur_name')
                );
                //echo "<pre>";print_r($info); exit;
                $result = $this->common_model->insert_details('user_roles', $info);
                if ($result) {
                    $status = array(
                        'status' => 'success',
                        'message' => 'Photo Inserted Successfully'
                    );
                    $this->session->set_flashdata('insert_record', $status);
                    redirect('admin/users/user_roles');
                } else {
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Sorry something is wrong please try again.!'
                    );
                    $this->session->set_flashdata('insert_record', $status);
                    redirect('admin/users/create_course');
                }
            } if(isset($_POST['update'])) {
                //echo '<pre>';print_r($_POST);exit;
                
                $this->load->model('common/upload_model');

                $info = array(
                    'where' => array(
                        'ur_id' => $this->input->post('id')
                    ),
                    'data' => array(
                        'ur_name' => $this->input->post('ur_name')
                    ),
                    'tablename' => 'user_roles'
                );
                //echo '<pre>';print_r($info);exit;
                $result = $this->common_model->update_details($info);
                if ($result) {
                    $status = array(
                        'status' => 'success',
                        'message' => 'Photo Updated Successfully'
                    );
                    $this->session->set_flashdata('insert_record', $status);
                    redirect('admin/users/user_roles');
                } else {
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Sorry something is wrong please try again.!'
                    );
                    $this->session->set_flashdata('insert_record', $status);
                    redirect('admin/users/create_user_role/' . $_POST['id']);
                }
            } else {
                $data['mode'] = 'create';
                $data['msg'] = '';
                $data['users_list'] = $this->config->item('users_list');
                $this->load->view('user_roles/create_user_role', $data);
            }
        }
    }
    
    public function check_email_id(){
        $email = $this->input->get('user_email');
        //echo '<pre>';print_r($_GET);exit;
        $ch_data = array(
            'select_fields' => '',
            'where' => array(
                'email' => $email
            ),
            'tablename' => 'users'
        );
        $check_unique = $this->common_model->get_list($ch_data);
        //echo '<pre>';print_r($check_unique);exit;
        if (count($check_unique)==0){
            echo 'true';
        }else{
            echo 'false';
        }
    }
}