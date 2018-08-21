<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Chapters extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->lang->load('data');
        $this->load->model('chapters_model');
        $this->load->model('common/common_model');
        modules::run('admin/login/is_admin_logged_in');
    }
    
    public function index()
    {
        $this->load->view('chapters/chapters');
    }
    
    /**
    * get_chapters_list
    * Get Photo chapter List
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function get_chapters_list()
    {
        $result = $this->chapters_model->get_chapters_list();
        $aaData = array();
        foreach($result['aaData'] as $row){
            $row[0] = '<input type="checkbox" id="checkbox-1-' . intval($row[0]) . '" class="checkbox1 regular-checkbox" name="regular-checkbox"
                                value="' . $row[0] . '"/><label for="checkbox-1-' . intval($row[0]) . '"></label>';
            //$row[2] = '<a href="'. base_url('assets/images/chapters/'.$row[2]).'" target="_blank"> View File </a>';
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
            $row[5] = '<a href="'.base_url('admin/chapters/create_chapter/')  ."/". $row[5] . '" title="Edit Record" data-toggle="tooltip">
                                    <i class="fa_size fa fa-pencil" ></i></a>
                           <a href="javascript:void(0)" data-toggle="tooltip" id="' . $row[5] . '" class="deleteme show-tooltip deleteitem_' . $row[5] . '"" title="Delete Record" data-tablename="chapters" data-fieldname="chapter_id" url="'. site_url('admin/admin/delete_all_record') .'">
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
    public function create_chapter($id = '') {
        //echo '<pre>';print_r($_FILES);
        //echo '<pre>';print_r($_POST);exit;
        $info_ls = array(
            'select_fields' => '',
            'where' => array(
                //'chapter_id' => $id
            ),
            'tablename' => 'programs'
        );
        $programs = $this->common_model->get_list($info_ls);
        $rw_programs_ls = array(''=>'Select Program');
        foreach($programs as $rw_programs){
            $rw_programs_ls[$rw_programs['program_id']] = $rw_programs['program_name']; 
        }
        $data['programs'] = $rw_programs_ls;
        //echo '<pre>';print_r($data['programs']);exit;
        if ($id != '') {
            $data['mode'] = 'edit';
            $data['msg'] = '';
            $info = array(
                'select_fields' => '',
                'where' => array(
                    'chapter_id' => $id
                ),
                'tablename' => 'chapters'
            );
            $data['item_details'] = $this->common_model->get_individual_details($info);
            $this->load->view('chapters/create_chapter', $data);
        } else {
            if(isset($_POST['submit'])&&$_POST['submit']=='insert'){
                //echo '<pre>';print_r($_POST);exit;
                $ch_ed_data = array(
                    'select_fields' => '',
                    'where' => array(
                        'chapter_name' => $this->input->post('chapter_name'),
                        'program_id' => $this->input->post('program_id')
                    ),
                    'tablename' => 'chapters'
                );
                $check_unique = $this->common_model->get_list($ch_ed_data);
                if(count($check_unique)!=0){
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Entered name is already taken please enter another....'
                    );
                    echo json_encode($status);exit;
                }
                /* roles:-1= super admin,2= admin,3= user,4= School admin,5= chapter,6= parent,7= vendor */
                $info = array(
                    'chapter_name' => $this->input->post('chapter_name'),
                    'program_id' => $this->input->post('program_id')
                );
                //echo "<pre>";print_r($info);exit;
                $result_id = $this->common_model->insert_details('chapters', $info);
                //echo "<pre>";print_r($result);exit;
                  if($result_id!=''){
                      $status = array(
                            'status' => 'success',
                            'go_to' => 'admin/chapters',
                            'message' => 'Chapter added successfully'
                      );
                      echo json_encode($status);exit;
               }else{
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Error while adding chapter details...'
                    );
                    echo json_encode($status);exit;
               }
            } if(isset($_POST['submit'])&&$_POST['submit']=='update') {
                //echo '<pre>';print_r($_FILES);
                //echo '<pre>';print_r($_POST);exit;
                
                $ch_ed_data = array(
                    'select_fields' => '',
                    'where' => array(
                        'chapter_name' => $this->input->post('chapter_name'),
                        'chapter_id !=' => $this->input->post('id')
                    ),
                    'tablename' => 'chapters'
                );
                $check_unique = $this->common_model->get_list($ch_ed_data);
                if(count($check_unique)!=0){
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Entered chapter name is already taken please enter another....'
                    );
                    echo json_encode($status);exit;
                }
                
                $info = array(
                    'where' => array(
                        'chapter_id' => $this->input->post('id')
                    ),
                    'data' => array(
                        'chapter_name' => $this->input->post('chapter_name'),
                        'program_id' => $this->input->post('program_id')
                    ),
                    'tablename' => 'chapters'
                );
                $result = $this->common_model->update_details($info);
                if($result){
                    $status = array(
                                'status' => 'success',
                                'go_to' => 'admin/chapters',
                                'message' => 'chapter updated successfully'
                            );
                    echo json_encode($status);exit;
               }else{
                //echo '<pre>not ok';print_r($_FILES);exit;
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Error while adding chapter details...'
                    );
                    echo json_encode($status);exit;
               }
            } else {
                $data['mode'] = 'create';
                $data['msg'] = '';
                $this->load->view('chapters/create_chapter', $data);
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
        $data['states'] = $this->chapters_model->get_states_list($id);
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
        $data['states'] = $this->chapters_model->get_cities_list($id);
        if($data['states']){
            $data['status'] = 0;
        }else{
            $data['status'] = 1;
        }
        //echo '<pre>'; print_r($states);exit;
        echo json_encode($data);
    }
    
    /**
    * chapter_details
    * chapter Details
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function chapter_details($id){
        $data['subjects_list'] = $this->chapters_model->get_subjects_list();
        $data['classes_list'] = $this->chapters_model->get_classes_list();
        $data['mode'] = 'details';
        $data['msg'] = '';
        $info = array(
            'select_fields' => '',
            'where' => array(
                'chapter_id' => $id
            ),
            'tablename' => 'chapters'
        );
        $data['item_details'] = $this->common_model->get_individual_details($info);
        //echo '<pre>';print_r($data);exit;
        $info_certi = array(
            'select_fields' => '',
            'where' => array(
                'chapter_id' => $data['item_details']['chapter_id']
            ),
            'tablename' => 'chapter_certificates'
        );
        $data['certificates'] = $this->common_model->get_list($info_certi);
        $this->load->view('chapters/create_chapter', $data);
    }
}