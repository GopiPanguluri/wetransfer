<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller{
    function __construct()
    {
        parent::__construct();
        $this->lang->load('data');
        modules::run('admin/login/is_admin_logged_in');
    }


    public function index()
    {
        $this->dashboard();
        //redirect('admin/login');
    }


    public function dashboard()
    {
        //echo '<pre>'; print_r($_SESSION);exit;
        $this->load->view('dashboard');
    }
    
    public function banners()
    {
        $this->load->view('banners/banners');
    }
    
    public function get_banners_list()
    {
        $this->load->model('admin_model');
        $result = $this->admin_model->get_banners_list();
        $aaData = array();
        foreach($result['aaData'] as $row){
            $row[0] = '<input type="checkbox" id="checkbox-1-' . intval($row[0]) . '" class="checkbox1 regular-checkbox" name="regular-checkbox"
                                value="' . $row[0] . '"/><label for="checkbox-1-' . intval($row[0]) . '"></label>';
            $row[2] = '<img src="'. base_url('assets/images/banners/'.$row[2]).'" height="120" width="150"/>';
            if($row[4]==1){
                $row[4] = '<div id="status' . $row[5] . '">
                        <a href="javascript:void(0);" class="show-tooltip" title="Change Status" onclick="changestatus(' . $row[5] . ', ' . $row[4] . ')" >
                                <i class="glyphicon glyphicon-remove"></i>
                        </a></div> ';   
            }else{ 
                $row[4] = '<div id="status' . $row[5] . '">
                        <a href="javascript:void(0);" class="show-tooltip" title="Change Status" onclick="changestatus(' . $row[5] . ', ' . $row[4] . ')" >
                                <i class="glyphicon glyphicon-ok"></i>
                        </a></div> ';
            }
            $row[5] = '<a href="'.base_url('admin/create_banner/')  ."/". $row[5] . '" title="Edit Record" data-toggle="tooltip">
                                <i class="fa_size fa fa-pencil" ></i></a>
                         <a href="javascript:void(0)" data-toggle="tooltip" id="' . $row[5] . '" class="deleteme show-tooltip deleteitem_' . $row[5] . '"" title="Delete Record" data-tablename="banners" data-fieldname="banner_id" url="'. site_url('admin/admin/delete_all_record') .'">
                                <i class="fa_size fa fa-trash-o "></i></a>';
            $aaData[] = $row;
        }
        $result['aaData'] = $aaData;
        //echo '<pre>'; print_r($result);exit;
        print_r(json_encode($result));
    }
    
    public function create_banner($id = '') {
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
            $this->load->model('common/common_model');
            $data['banners_details'] = $this->common_model->get_individual_details($info);
            $this->load->view('banners/create_banner', $data);
        } else {
            if (isset($_POST['insert'])) {
                //echo '<pre>';print_r($_POST);exit;
                $image = '';
                $this->load->model('upload_model');
                $this->load->model('common/common_model');
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
                $this->load->model('common/common_model');
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
    
    public function changestatus() {
        //echo '<pre>'; print_r($_POST);
        $this->load->model('common/common_model');
        if ($_POST['status'] == "1") {
            $status = "0";
        } else {
            $status = "1";
        }
        $info = array(
            'where' => array(
                $_POST['field_name'] => $_POST['row_id']
            ),
            'data' => array(
                'status' => $status,
            ),
            'tablename' => $_POST['table_name']
        );
        //echo '<pre>'; print_r($info);exit;
        $result = $this->common_model->update_details($info);
        //echo $this->db->last_query();exit;
        if ($result) {
            echo "1";
        } else {
            echo "0";
        }
    }
    
    public function delete_all_record() {
        //print_r($_POST); exit;
        $this->load->model('common/common_model');
        $info = array(
            'where' => array(
                $_POST['field_name'] => $_POST['deleteme']
            ),
            'tablename' => $_POST['table_name']
        );
        $result = $this->common_model->delete_all_record($_POST['table_name'], $_POST['field_name'], $_POST['deleteme']);
        if ($result) {
            echo "1";
        } else {
            echo "0";
        }
    }
    
    function page_not_found()
    {
        //$this->output->cache(360);
        log_message("INFO", '404:' . $this->uri->uri_string());
        $this->load->view('page_not_found');
    }	
}