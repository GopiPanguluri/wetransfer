<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer extends MX_Controller{
    function __construct()
    {
        parent::__construct();
        $this->lang->load('data');
        $this->load->model('common/common_model');
        modules::run('admin/login/is_admin_logged_in');
    }


    public function index()
    {
        $this->dashboard();
    }


    public function dashboard()
    {
        
       $this->load->view('buyers/buyers');
    }
    
    public function get_buyers_list()
    {
        $this->load->model('buyer_model');
        $result = $this->buyer_model->get_buyers_list();
        $aaData = array();
        foreach($result['aaData'] as $row){
            $row[0] = '<input type="checkbox" id="checkbox-1-' . intval($row[0]) . '" class="checkbox1 regular-checkbox" name="regular-checkbox"
                                value="' . $row[0] . '"/><label for="checkbox-1-' . intval($row[0]) . '"></label>';
            //$row[2] = '<img src="'. base_url('assets/images/banners/'.$row[2]).'" height="120" width="150"/>';
            if($row[5]==1){
                $row[5] = '<div id="status' . $row[6] . '">
                        <a href="javascript:void(0);" class="show-tooltip" title="Change Status" onclick="changestatus(' . $row[6] . ', ' . $row[5] . ')" >
                                <i class="glyphicon glyphicon-remove"></i>
                        </a></div> ';   
            }else if($row[5]==0){
                $row[5] = '<div id="status' . $row[6] . '">
                        <a href="javascript:void(0);" class="show-tooltip" title="Change Status" onclick="changestatus(' . $row[6] . ', ' . $row[5] . ')" >
                                <i class="glyphicon glyphicon-ok"></i>
                        </a></div> ';
            }else if($row[5]==2){
                $row[5] = '<span class="label bg-yellow">Account Not Activated</span>';
            }else if($row[5]==3){
                $row[5] = '<span class="label bg-red">Deleted</span>';
            }
            $row[6] = '<a href="'.base_url('admin/buyer/view_buyer/').$row[6].'" title="View Record" data-toggle="tooltip">
                                <i class="fa_size fa fa-eye" ></i></a>';
            $aaData[] = $row;
        }
        $result['aaData'] = $aaData;
        //echo '<pre>'; print_r($result);exit;
        print_r(json_encode($result));
    }
    
    /**
    * create_banner
    * Create Banner
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function create_banner($id = ''){
        if ($id != '') {
            $data['mode'] = 'edit';
            $data['msg'] = '';
            $info = array(
                'select_fields' => '',
                'where' => array(
                    'banner_id' => $id
                ),
                'tablename' => 'banners'
            );
            $data['banners_details'] = $this->common_model->get_individual_details($info);
            $this->load->view('banners/create_banner', $data);
        } else {
            if (isset($_POST['insert'])) {
                //echo '<pre>';print_r($_POST);exit;
                $image = '';
                $this->load->model('upload_model');
                $files = $_FILES;
                $time = time();
                $string1 = str_replace(' ', '-', $_POST['banner_title']); // Replaces all spaces with hyphens.
                $string2 = str_replace(' ', '-', $_POST['banner_alt']); // Replaces all spaces with hyphens.
                $string1 = preg_replace('/[^A-Za-z0-9\-]/', '', $string1); // Removes special chars.
                $string2 = preg_replace('/[^A-Za-z0-9\-]/', '', $string2); // Removes special chars.
                $random_string = random_string('alnum', 16);
                $title_product = $string1.'-'.$string2.'-'.$random_string;
                $_FILES['banner_image']['name'] =  $title_product . ".jpg";
                if ($_FILES['banner_image']['name'] != '') {
                    $file_upl_data = $this->upload_model->uploadDocuments('banner_image', 'banner_image');
                    if ($file_upl_data['success'] == 1) {
                        $image = $file_upl_data['file_name'];
                    } else {
                        
                    }
                }
                $info = array(
                    'banner_title' => $this->input->post('banner_title'),
                    'banner_alt' => $this->input->post('banner_alt'),
                    'bannner_image' => $image
                );
                //echo "<pre>";print_r($info); exit;
                $result = $this->common_model->insert_details('banners', $info);
                if ($result) {
                    $status = array(
                        'status' => 'success',
                        'message' => 'Banner Insert Successfully'
                    );
                    $this->session->set_flashdata('insert_record', $status);
                    redirect('admin/banners/');
                } else {
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Sorry something is wrong please try again.!'
                    );
                    $this->session->set_flashdata('insert_record', $status);
                    redirect('admin/banners/');
                }
            } if (isset($_POST['update'])) {
                $this->load->model('upload_model');
                if ($_FILES['banner_image']['name'] != '') {
                    $files = $_FILES;
                    $time = time();
                    $string1 = str_replace(' ', '-', $_POST['banner_title']); // Replaces all spaces with hyphens.
                    $string2 = str_replace(' ', '-', $_POST['banner_alt']); // Replaces all spaces with hyphens.
                    $string1 = preg_replace('/[^A-Za-z0-9\-]/', '', $string1); // Removes special chars.
                    $string2 = preg_replace('/[^A-Za-z0-9\-]/', '', $string2); // Removes special chars.
                    $random_string = random_string('alnum', 16);
                    $title_product = $string1.'-'.$string2.'-'.$random_string;
                    $_FILES['banner_image']['name'] = $title_product . ".jpg";
                    $file_upl_data = $this->upload_model->uploadDocuments('banner_image', 'banner_image');
                    if ($file_upl_data['success'] == 1) {
                        $image = $file_upl_data['file_name'];
                        unlink(FCPATH . 'assets/images/banners/' . $_POST['old_image']);
                    } else {
                        $status = array(
                            'status' => 'fail',
                            'message' => 'Invalid Image Size'
                        );
                        $this->session->set_flashdata('insert_record', $status);
                        //echo '<pre>';print_r($_POST);exit;
                        redirect('admin/create_banner/' . $_POST['id']);
                    }
                } else {
                    $image = $this->input->post('old_image');
                }

                $info = array(
                    'where' => array(
                        'banner_id' => $this->input->post('id')
                    ),
                    'data' => array(
                        'banner_title' => $this->input->post('banner_title'),
                        'banner_alt' => $this->input->post('banner_alt'),
                        'bannner_image' => $image
                    ),
                    'tablename' => 'banners'
                );
                $result = $this->common_model->update_details($info);
                if ($result) {
                    $status = array(
                        'status' => 'success',
                        'message' => 'Banner Updated Successfully'
                    );
                    $this->session->set_flashdata('insert_record', $status);
                    redirect('admin/banners/');
                } else {
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Sorry something is wrong please try again.!'
                    );
                    $this->session->set_flashdata('insert_record', $status);
                    redirect('admin/banners/' . $_POST['banner_id']);
                }
            } else {
                $data['mode'] = 'create';
                $data['msg'] = '';
                $this->load->view('banners/create_banner', $data);
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
        $categoty = $this->common_model->get_list($list);
        foreach($categoty as $row){
            $cat_ls[$row['c_id']] = $row['c_name'];
        }
        $data['categories'] = array('' => 'Select One') + $cat_ls;
        //echo '<pre>';print_r($data);exit;
        $this->load->view('buyers/create_buyer', $data);
    }
    
    function page_not_found()
    {
        //$this->output->cache(360);
        log_message("INFO", '404:' . $this->uri->uri_string());
        $this->load->view('page_not_found');
    }	
}
