<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Settings extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->lang->load('data');
        $this->load->model('common/common_model');
        $this->load->model('settings_model');
        modules::run('admin/login/is_admin_logged_in');
    }

    
    public function index()
    {
        $result = $this->settings_model->get_settings();
        foreach($result->result() as $row){
            $res[$row->setting_name] = $row->setting_value;
        }
        $data['settings'] = $res;
        //echo '<pre>'; print_r($result);exit;
        $this->load->view('settings',$data);
    }
    
    public function header_section()
    {
        $this->load->model('settings_model');
        $result = $this->settings_model->get_settings();
        foreach($result->result() as $row){
            $res[$row->setting_name] = $row->setting_value;
        }
        $data['settings'] = $res;
        //echo '<pre>'; print_r($result);exit;
        $this->load->view('settings/header_section',$data);
    }
    
    public function footer_section()
    {
        $this->load->model('settings_model');
        $result = $this->settings_model->get_settings();
        foreach($result->result() as $row){
            $res[$row->setting_name] = $row->setting_value;
        }
        $data['settings'] = $res;
        //echo '<pre>'; print_r($result);exit;
        $this->load->view('footer_section',$data);
    }
    
   /**
    * save_settings
    * Save Settings
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function save_settings(){
            if (isset($_POST['update'])) {
                //echo '<pre>'; print_r($_POST);
                //echo '<pre>'; print_r($_FILES);exit;
                $this->load->model('common/upload_model');
                $this->load->model('common/common_model');
                if($_FILES['back_image']['name'] != ''){
                $files = $_FILES;
                $time = time();
                $image = explode(".",$_FILES['back_image']['name']);
                $image_ext = end($image);
                $_FILES['back_image']['name'] =  $time.'.'.$image_ext ;
                //unlink(FCPATH . 'assets/images/' . $_POST['old_back_image']);
                    $file_upl_data = $this->upload_model->uploadDocuments('back_image', 'back_image_pros');
                    //echo '<pre>'; print_r($file_upl_data);exit;
                    if ($file_upl_data['success'] == 1) {
                        $back_image = $file_upl_data['file_name'];
                        if(isset($_POST['old_back_image'])&&$_POST['old_back_image']!==''){
                            if(file_exists( 'assets/images/'.$this->input->post('old_back_image'))){
                                unlink(FCPATH . 'assets/images/' . $_POST['old_back_image']);
                            }
                        }
                    } else {
                        $status = array(
                            'status' => 'fail',
                            'message' => strip_tags($file_upl_data['msg'])
                        );
                        $this->session->set_flashdata('insert_record', $status);
                        redirect('admin/settings');
                    }
                } else {
                    $back_image = $this->input->post('old_back_image');
                }
                $back_image_ext = explode(".",$back_image);
                $back_image_ext = end($back_image_ext);
                if($back_image_ext=='JPG'||$back_image_ext=='jpg'||$back_image_ext=='png'||$back_image_ext=='PNG'){
                    $back_image_vid = '1';
                }else{
                    $back_image_vid = '2';
                }
                $data = array(
                        'back_image' => $back_image,
                        'back_image_vid' => $back_image_vid
                    );
                //echo '<pre>'; print_r($data);exit;
                foreach($data as $key => $value){
                    $row = $row;
                    $info = array(
                            'where' => array(
                                'setting_name' => $key
                            ),
                            'data' => array(
                                'setting_value' => $value
                            ),
                            'tablename' => 'settings'
                        );
                    $result = $this->common_model->update_details($info);
                }
                if ($result) {
                    $status = array(
                        'status' => 'success',
                        'message' => 'About Us Updated Successfully'
                    );
                    $this->session->set_flashdata('insert_record', $status);
                    redirect('admin/settings');
                } else {
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Invalid Image Size'
                    );
                    $this->session->set_flashdata('insert_record', $status);
                    redirect('admin/settings');
                }
            } else {
                    redirect('admin/settings');
            }
    }
    
    
    /**
    * save_header_section
    * Save Header Section
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function save_header_section(){
            if (isset($_POST['update'])) {
                //echo '<pre>'; print_r($_POST);exit;
                
                $this->load->model('common_model');
                $this->load->model('upload_model');
                if($_FILES['site_logo']['name'] != ''){
                $files = $_FILES;
                $time = time();
                $site_logo_string1 = str_replace(' ', '-', $_POST['site_logo_img_title']); // Replaces all spaces with hyphens.
                $site_logo_string2 = str_replace(' ', '-', $_POST['site_logo_img_alt']); // Replaces all spaces with hyphens.
                $site_logo_string1 = preg_replace('/[^A-Za-z0-9\-]/', '', $site_logo_string1); // Removes special chars.
                $site_logo_string2 = preg_replace('/[^A-Za-z0-9\-]/', '', $site_logo_string2); // Removes special chars.
                $random_string = random_string('alnum', 16);
                $title_site_logo = $site_logo_string1.'-'.$site_logo_string2.'-'.$random_string;
                $image = explode(".",$_FILES['site_logo']['name']);
                $image_ext = end($image);
                $_FILES['site_logo']['name'] =  $title_site_logo.'.'.$image_ext;
                //unlink(FCPATH . 'assets/images/' . $_POST['old_site_logo']);
                    $file_upl_data = $this->upload_model->uploadDocuments('site_logo', 'site_logo');
                    if ($file_upl_data['success'] == 1) {
                        $site_logo = $file_upl_data['file_name'];
                        unlink(FCPATH . 'assets/images/' . $_POST['old_site_logo']);
                    } else {
                        $status = array(
                            'status' => 'fail',
                            'message' => 'Invalid Image Size'
                        );
                        $this->session->set_flashdata('insert_record', $status);
                        redirect('admin/settings/header_section');
                    }
                } else {
                    $site_logo = $this->input->post('old_site_logo');
                }

                $data = array(
                        'site_title' => $this->input->post('site_title'),
                        'site_logo_img_title' => $this->input->post('site_logo_img_title'),
                        'site_logo_img_alt' => $this->input->post('site_logo_img_alt'),
                        'facebook' => $this->input->post('facebook'),
                        'twitter' => $this->input->post('twitter'),
                        'google_plus' => $this->input->post('google_plus'),
                        'site_logo' => $site_logo,
                        'phone' => $this->input->post('phone'),
                        'address' => $this->input->post('address'),
                        'footer_abt_us' => $this->input->post('footer_abt_us'),
                        'email' => $this->input->post('email')
                    );
                //echo '<pre>'; print_r($data);exit;
                foreach($data as $key => $value){
                    $row = $row;
                    $info = array(
                            'where' => array(
                                'setting_name' => $key
                            ),
                            'data' => array(
                                'setting_value' => $value
                            ),
                            'tablename' => 'settings'
                        );
                    $result = $this->common_model->update_details($info);
                }
                if ($result) {
                    $status = array(
                        'status' => 'success',
                        'message' => 'Settings Updated Successfully'
                    );
                    $this->session->set_flashdata('insert_record', $status);
                    redirect('admin/settings/header_section');
                } else {
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Sorry something is wrong please try again.!'
                    );
                    $this->session->set_flashdata('insert_record', $status);
                    redirect('admin/settings/header_section');
                }
            } else {
                    redirect('admin/settings/header_section');
            }
    }
    
   /**
    * save_settings
    * Save Settings
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function save_footer_section(){
            if (isset($_POST['update'])) {
                $this->load->model('common_model');
                $data = array(
                        'footer_about_us' => $this->input->post('footer_about_us')
                    );
                //echo '<pre>'; print_r($data);exit;
                foreach($data as $key => $value){
                    $row = $row;
                    $info = array(
                            'where' => array(
                                'setting_name' => $key
                            ),
                            'data' => array(
                                'setting_value' => $value
                            ),
                            'tablename' => 'settings'
                        );
                    $result = $this->common_model->update_details($info);
                }
                if ($result) {
                    $status = array(
                        'status' => 'success',
                        'message' => 'Footer Updated Successfully'
                    );
                    $this->session->set_flashdata('insert_record', $status);
                    redirect('admin/settings/footer_section');
                } else {
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Invalid Image Size'
                    );
                    $this->session->set_flashdata('insert_record', $status);
                    redirect('admin/settings/footer_section');
                }
            } else {
                    redirect('admin/settings/footer_section');
            }
    }
    
    /**
    * contact_us
    * Contact Us Page
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function contact_us()
    {
        $this->load->view('contact_us');
    }
    
    /**
    * get_cantact_us_list
    * Get Cantact Us List
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function get_cantact_us_list()
    {
        $this->load->model('settings_model');
        $result = $this->settings_model->get_cantact_us_list();
        $aaData = array();
        foreach($result['aaData'] as $row){
            $row[0] = '<input type="checkbox" id="checkbox-1-' . intval($row[0]) . '" class="checkbox1 regular-checkbox" name="regular-checkbox"
                                value="' . $row[0] . '"/><label for="checkbox-1-' . intval($row[0]) . '"></label>';
            //$row[2] = '<img src="'. base_url('assets/images/credentials/'.$row[2]).'" height="120" width="150"/>';
            $row[5] = '<p style="text-align: justify;">'.$row[5].'</p>';
            $row[6] = '<a href="javascript:void(0)" data-toggle="tooltip" id="' . $row[6] . '" class="deleteme show-tooltip deleteitem_' . $row[6] . '"" title="Delete Record" data-tablename="contact_us" data-fieldname="contact_us_id" url="'. site_url('admin/admin/delete_all_record') .'">
                                <i class="fa_size fa fa-trash-o "></i></a>';
            $aaData[] = $row;
        }
        $result['aaData'] = $aaData;
        //echo '<pre>'; print_r($result);exit;
        print_r(json_encode($result));
    }
    
    /**
    * contact_us
    * Contact Us Page
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function careers()
    {
        $this->load->view('careers');
    }
    
    /**
    * get_cantact_us_list
    * Get Cantact Us List
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function get_careers_list()
    {
        $this->load->model('settings_model');
        $jobs = $this->config->item('jobs');
        $result = $this->settings_model->get_careers_list();
        $aaData = array();
        foreach($result['aaData'] as $row){
            $row[0] = '<input type="checkbox" id="checkbox-1-' . intval($row[0]) . '" class="checkbox1 regular-checkbox" name="regular-checkbox"
                                value="' . $row[0] . '"/><label for="checkbox-1-' . intval($row[0]) . '"></label>';
            $row[4] = $jobs[$row[4]];
            $row[5] = '<a href="'. base_url('assets/images/resumes/'.$row[5]).'">'.$row[5].'<a/>';
            $row[6] = '<p style="text-align: justify;">'.$row[6].'</p>';
            $row[7] = '<a href="javascript:void(0)" data-toggle="tooltip" id="' . $row[7] . '" class="deleteme show-tooltip deleteitem_' . $row[7] . '"" title="Delete Record" data-tablename="apply_for_job" data-fieldname="job_id" url="'. site_url('admin/admin/delete_all_record') .'">
                                <i class="fa_size fa fa-trash-o "></i></a>';
            $aaData[] = $row;
        }
        $result['aaData'] = $aaData;
        //echo '<pre>'; print_r($result);exit;
        print_r(json_encode($result));
    }
    
    /**
    * contact_us
    * Contact Us Page
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function send_enquiry()
    {
        $this->load->view('send_enquiry');
    }
    
    /**
    * get_cantact_us_list
    * Get Cantact Us List
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function get_send_enquiry_list()
    {
        $this->load->model('settings_model');
        //$this->config->load('brics_data');
        $courses = $this->config->item('courses');
        $result = $this->settings_model->get_send_enquiry_list();
        $aaData = array();
        foreach($result['aaData'] as $row){
            $row[0] = '<input type="checkbox" id="checkbox-1-' . intval($row[0]) . '" class="checkbox1 regular-checkbox" name="regular-checkbox"
                                value="' . $row[0] . '"/><label for="checkbox-1-' . intval($row[0]) . '"></label>';
            //$row[2] = '<img src="'. base_url('assets/images/credentials/'.$row[2]).'" height="120" width="150"/>';
            $row[4] = $courses[$row[4]];
            $row[5] = '<p style="text-align: justify;">'.$row[5].'</p>';
            $row[6] = '<a href="javascript:void(0)" data-toggle="tooltip" id="' . $row[6] . '" class="deleteme show-tooltip deleteitem_' . $row[6] . '"" title="Delete Record" data-tablename="enquiry" data-fieldname="en_id" url="'. site_url('admin/admin/delete_all_record') .'">
                                <i class="fa_size fa fa-trash-o "></i></a>';
            $aaData[] = $row;
        }
        $result['aaData'] = $aaData;
        //echo '<pre>'; print_r($result);exit;
        print_r(json_encode($result));
    }
    
}