<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Programs extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->lang->load('data');
        $this->load->model('programs_model');
        $this->load->model('common/common_model');
        modules::run('admin/login/is_admin_logged_in');
    }
    
    public function index()
    {
        $this->load->view('programs/programs');
    }
    
    /**
    * get_programs_list
    * Get Photo program List
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function get_programs_list()
    {
        $result = $this->programs_model->get_programs_list();
        $aaData = array();
        foreach($result['aaData'] as $row){
            $row[0] = '<input type="checkbox" id="checkbox-1-' . intval($row[0]) . '" class="checkbox1 regular-checkbox" name="regular-checkbox"
                                value="' . $row[0] . '"/><label for="checkbox-1-' . intval($row[0]) . '"></label>';
            //$row[2] = '<a href="'. base_url('assets/images/programs/'.$row[2]).'" target="_blank"> View File </a>';
            $row[2] = word_limiter($row[2], 30);
            //$row[3] = date('M,Y',strtotime($row[3]));
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
            $row[5] = '<a href="'.base_url('admin/programs/create_program/')  . $row[5] . '" title="Edit Record" data-toggle="tooltip">
                                    <i class="fa_size fa fa-pencil" ></i></a>
                           <a href="javascript:void(0)" data-toggle="tooltip" id="' . $row[5] . '" class="deleteme show-tooltip deleteitem_' . $row[5] . '"" title="Delete Record" data-tablename="programs" data-fieldname="program_id" url="'. site_url('admin/admin/delete_all_record') .'">
                                    <i class="fa_size fa fa-trash-o "></i></a>';
            $aaData[] = $row;
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
    public function create_program($id = '') {
        //echo '<pre>';print_r($_FILES);
        //echo '<pre>';print_r($_POST);exit;
        if ($id != '') {
            $data['mode'] = 'edit';
            $data['msg'] = '';
            $info = array(
                'select_fields' => '',
                'where' => array(
                    'program_id' => $id
                ),
                'tablename' => 'programs'
            );
            $data['item_details'] = $this->common_model->get_individual_details($info);
            //echo '<pre>';print_r($data);exit;
            $this->load->view('programs/create_program', $data);
        } else {
            if(isset($_POST['submit'])&&$_POST['submit']=='insert'){
                //echo '<pre>';print_r($_FILES);
                //echo '<pre>';print_r($_POST);exit;
                $ch_ed_data = array(
                    'select_fields' => '',
                    'where' => array(
                        'program_name' => $this->input->post('program_name')
                    ),
                    'tablename' => 'programs'
                );
                $check_unique = $this->common_model->get_list($ch_ed_data);
                if(count($check_unique)!=0){
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Entered name is already taken please enter another....'
                    );
                    echo json_encode($status);exit;
                }
                /* roles:-1= super admin,2= admin,3= user,4= School admin,5= program,6= parent,7= vendor */
                $prg_img_vid_name = '';
                $this->load->model('common/upload_model');
                $this->load->model('common/common_model');
                $files = $_FILES;
                $time = time();
                $image_ext = explode(".",$_FILES['prg_img_vid_name']['name']);
                $image_ext = end($image_ext);
                $_FILES['prg_img_vid_name']['name'] =  $time .'.'.$image_ext;
                if ($_FILES['prg_img_vid_name']['name'] != '') {
                    $file_upl_data = $this->upload_model->uploadDocuments('prg_img_vid_name', 'program');
                    //echo '<pre>';print_r($file_upl_data);exit;
                    if ($file_upl_data['success'] == 1) {
                        $prg_img_vid_name = $file_upl_data['file_name'];
                    } else {
                        $status = array(
                            'status' => 'fail',
                            'message' => 'Invalid Image Size'
                        );
                        $this->session->set_flashdata('insert_record', $status);
                        redirect('admin/programs/create_program');
                    }
                }
                if($image_ext=='JPG'||$image_ext=='jpg'||$image_ext=='png'||$image_ext=='PNG'){
                    $prg_img_or_vid = '1';
                }else{
                    $prg_img_or_vid = '2';
                }
                $info = array(
                    'program_name' => $this->input->post('program_name'),
                    'prg_img_vid_name' => $prg_img_vid_name,
                    'prg_img_or_vid' => $prg_img_or_vid,
                    'program_description' => $this->input->post('program_description')
                );
                //echo "<pre>";print_r($info);exit;
                $result_id = $this->common_model->insert_details('programs', $info);
                //echo "<pre>";print_r($result);exit;
                  if($result_id!=''){
                      $status = array(
                            'status' => 'success',
                            'go_to' => 'admin/programs',
                            'message' => 'Company type added successfully'
                      );
                      echo json_encode($status);exit;
               }else{
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Error while adding program details...'
                    );
                    echo json_encode($status);exit;
               }
            } if(isset($_POST['submit'])&&$_POST['submit']=='update') {
                //echo '<pre>asdf';print_r($_FILES);
                //echo '<pre>fdsa';print_r($_POST);exit;
                
                $ch_ed_data = array(
                    'select_fields' => '',
                    'where' => array(
                        'program_name' => $this->input->post('program_name'),
                        'program_id !=' => $this->input->post('id')
                    ),
                    'tablename' => 'programs'
                );
                $check_unique = $this->common_model->get_list($ch_ed_data);
                if(count($check_unique)!=0){
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Entered Program name is already taken please enter another....'
                    );
                    echo json_encode($status);exit;
                }
                //echo '<pre>';print_r($_POST);exit;
                $this->load->model('common/common_model');
                $this->load->model('common/upload_model');
                if(isset($_FILES['prg_img_vid_name'])&&$_FILES['prg_img_vid_name']['name'] != 'undefined'){
                $files = $_FILES;
                $time = time();
                $image = explode(".",$_FILES['prg_img_vid_name']['name']);
                $image_ext = end($image);
                $_FILES['prg_img_vid_name']['name'] =  $time .'.'.$image_ext;
                //unlink(FCPATH . 'assets/images/users/' . $_POST['old_prg_img_vid_name']);
                    $file_upl_data = $this->upload_model->uploadDocuments('prg_img_vid_name', 'program');
                    //echo '<pre>';print_r($file_upl_data);exit;
                    if($file_upl_data['success'] == 1){
                        $image = $file_upl_data['file_name'];
                        if(isset($_POST['old_prg_img_vid_name'])&&$_POST['old_prg_img_vid_name']!==''){
                            if(file_exists( 'assets/images/programs/'.$this->input->post('old_prg_img_vid_name'))){
                                unlink(FCPATH . 'assets/images/programs/' . $_POST['old_prg_img_vid_name']);
                            }
                        }
                    }else{
                        $status = array(
                            'status' => 'fail',
                            'message' => $file_upl_data['msg']
                        );
                        echo json_encode($status);exit;
                    }
                }else{
                    $image = $this->input->post('old_prg_img_vid_name');
                }
                $image_ext = explode(".",$image);
                $image_ext = end($image_ext);
                if($image_ext=='JPG'||$image_ext=='jpg'||$image_ext=='png'||$image_ext=='PNG'){
                    $prg_img_or_vid = '1';
                }else{
                    $prg_img_or_vid = '2';
                }
                //echo $prg_img_or_vid;exit;
                $info = array(
                    'where' => array(
                        'program_id' => $this->input->post('id')
                    ),
                    'data' => array(
                        'program_name' => $this->input->post('program_name'),
                        'program_description' => $this->input->post('program_description'),
                        'prg_img_or_vid' => $prg_img_or_vid,
                        'prg_img_vid_name' => $image
                    ),
                    'tablename' => 'programs'
                );
                //echo '<pre>not ok';print_r($info);exit;
                $result = $this->common_model->update_details($info);
                if($result){
                    $status = array(
                                'status' => 'success',
                                'go_to' => 'admin/programs',
                                'message' => 'Program updated successfully'
                            );
                    echo json_encode($status);exit;
               }else{
                //echo '<pre>not ok';print_r($_FILES);exit;
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Error while adding program details...'
                    );
                    echo json_encode($status);exit;
               }
            } else {
                $data['mode'] = 'create';
                $data['msg'] = '';
                $this->load->view('programs/create_program', $data);
            }
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
        $data['states'] = $this->programs_model->get_states_list($id);
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
        $data['states'] = $this->programs_model->get_cities_list($id);
        if($data['states']){
            $data['status'] = 0;
        }else{
            $data['status'] = 1;
        }
        //echo '<pre>'; print_r($states);exit;
        echo json_encode($data);
    }
    
    /**
    * program_details
    * program Details
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function program_details($id){
        $data['subjects_list'] = $this->programs_model->get_subjects_list();
        $data['classes_list'] = $this->programs_model->get_classes_list();
        $data['mode'] = 'details';
        $data['msg'] = '';
        $info = array(
            'select_fields' => '',
            'where' => array(
                'program_id' => $id
            ),
            'tablename' => 'programs'
        );
        $data['item_details'] = $this->common_model->get_individual_details($info);
        //echo '<pre>';print_r($data);exit;
        $info_certi = array(
            'select_fields' => '',
            'where' => array(
                'program_id' => $data['item_details']['program_id']
            ),
            'tablename' => 'program_certificates'
        );
        $data['certificates'] = $this->common_model->get_list($info_certi);
        $this->load->view('programs/create_program', $data);
    }
}