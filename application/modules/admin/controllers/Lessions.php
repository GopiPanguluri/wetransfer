<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lessions extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->lang->load('data');
        $this->load->model('lessions_model');
        $this->load->model('common/common_model');
        $this->load->model('common/upload_model');
        modules::run('admin/login/is_admin_logged_in');
    }
    
    public function index()
    {
        $this->load->view('lessions/lessions');
    }
    
    /**
    * get_lessions_list
    * Get Photo lession List
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function get_lessions_list()
    {
        $result = $this->lessions_model->get_lessions_list();
        //echo '<pre>'; print_r($result);exit;
        $aaData = array();
        foreach($result['aaData'] as $row){
            $row[0] = '<input type="checkbox" id="checkbox-1-' . intval($row[0]) . '" class="checkbox1 regular-checkbox" name="regular-checkbox"
                                value="' . $row[0] . '"/><label for="checkbox-1-' . intval($row[0]) . '"></label>';
            //$row[2] = '<a href="'. base_url('assets/images/lessions/'.$row[2]).'" target="_blank"> View File </a>';
            //$row[2] = word_limiter($row[2], 30);
            //$row[3] = date('M,Y',strtotime($row[3]));
            if($row[5]==1){
            $row[5] = '<div id="status' . $row[6] . '">
                    <a href="javascript:void(0);" class="show-tooltip" title="Change Status" onclick="changestatus(' . $row[6] . ', ' . $row[5] . ')" >
                            <i class="glyphicon glyphicon-remove"></i>
                    </a></div> ';   
            }else{
                $row[5] = '<div id="status' . $row[6] . '">
                        <a href="javascript:void(0);" class="show-tooltip" title="Change Status" onclick="changestatus(' . $row[6] . ', ' . $row[5] . ')" >
                                <i class="glyphicon glyphicon-ok"></i>
                        </a></div> ';
            }
            $row[6] = '<a href="'.base_url('admin/lessions/create_lession/'). $row[6] . '" title="Edit Record" data-toggle="tooltip">
                                    <i class="fa_size fa fa-pencil" ></i></a>
                           <a href="javascript:void(0)" data-toggle="tooltip" id="' . $row[6] . '" class="deleteme show-tooltip deleteitem_' . $row[6] . '"" title="Delete Record" data-tablename="lessions" data-fieldname="lession_id" url="'. site_url('admin/admin/delete_all_record') .'">
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
    public function create_lession($id = ''){
        //echo '<pre>';print_r($_FILES);
        //echo '<pre>';print_r($_POST);exit;
            $info_ls = array(
                'select_fields' => '',
                'where' => array(
                    //'program_id' => $data['item_details']['program_id']
                ),
                'tablename' => 'chapters'
            );
            $chapters = $this->common_model->get_list($info_ls);
            $rw_chapters_ls = array(''=>'Select Chapter');
            foreach($chapters as $rw_chapters){
                $rw_chapters_ls[$rw_chapters['chapter_id']] = $rw_chapters['chapter_name']; 
            }
            $data['chapters'] = $rw_chapters_ls;
            $info_prg = array(
                'select_fields' => '',
                'where' => array(
                    //'lession_id' => $id
                ),
                'tablename' => 'programs'
            );
            $programs = $this->common_model->get_list($info_prg);
            //echo '<pre>';print_r($programs);exit;
            $rw_programs_ls = array(''=>'Select Program');
            foreach($programs as $rw_programs){
                $rw_programs_ls[$rw_programs['program_id']] = $rw_programs['program_name']; 
            }
            $data['programs'] = $rw_programs_ls;
            //echo '<pre>';print_r($data['programs']);exit;
        if($id != ''){
            $data['mode'] = 'edit';
            $data['msg'] = '';
            $info = array(
                'select_fields' => '',
                'where' => array(
                    'lession_id' => $id
                ),
                'tablename' => 'lessions'
            );
            $data['item_details'] = $this->common_model->get_individual_details($info);
            $info_ls = array(
                'select_fields' => '',
                'where' => array(
                    'program_id' => $data['item_details']['program_id']
                ),
                'tablename' => 'chapters'
            );
            $chapters = $this->common_model->get_list($info_ls);
            $rw_chapters_ls = array(''=>'Select Chapter');
            foreach($chapters as $rw_chapters){
                $rw_chapters_ls[$rw_chapters['chapter_id']] = $rw_chapters['chapter_name']; 
            }
            $data['chapters'] = $rw_chapters_ls;
            $info_prg = array(
                'select_fields' => '',
                'where' => array(
                    //'lession_id' => $id
                ),
                'tablename' => 'programs'
            );
            $programs = $this->common_model->get_list($info_prg);
            //echo '<pre>';print_r($programs);exit;
            $rw_programs_ls = array(''=>'Select Program');
            foreach($programs as $rw_programs){
                $rw_programs_ls[$rw_programs['program_id']] = $rw_programs['program_name']; 
            }
            $data['programs'] = $rw_programs_ls;
            //echo '<pre>';print_r($data['programs']);exit;
            $this->load->view('lessions/create_lession', $data);
        }else{
            if(isset($_POST['submit'])&&$_POST['submit']=='insert'){
                //echo '<pre>';print_r($_POST);exit;
                $ch_ed_data = array(
                    'select_fields' => '',
                    'where' => array(
                        'lession_name' => $this->input->post('lession_name'),
                        'program_id' => $this->input->post('program_id'),
                        'chapter_id' => $this->input->post('chapter_id')
                    ),
                    'tablename' => 'lessions'
                );
                $check_unique = $this->common_model->get_list($ch_ed_data);
                if(count($check_unique)!=0){
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Entered lession name is already taken please enter another....'
                    );
                    echo json_encode($status);exit;
                }
                $info = array(
                    'lession_name' => $this->input->post('lession_name'),
                    'program_id' => $this->input->post('program_id'),
                    'chapter_id' => $this->input->post('chapter_id')
                );
                //echo "<pre>";print_r($info);exit;
                $result_id = $this->common_model->insert_details('lessions', $info);
                //echo "<pre>";print_r($result);exit;
                  if($result_id!=''){
                      $status = array(
                            'status' => 'success',
                            'go_to' => 'admin/lessions',
                            'message' => 'Lession added successfully'
                      );
                      echo json_encode($status);exit;
               }else{
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Error while adding lession details...'
                    );
                    echo json_encode($status);exit;
               }
            } if(isset($_POST['submit'])&&$_POST['submit']=='update') {
                //echo '<pre>';print_r($_FILES);
                //echo '<pre>';print_r($_POST);exit;
                
                $ch_ed_data = array(
                    'select_fields' => '',
                    'where' => array(
                        'lession_name' => $this->input->post('lession_name'),
                        'program_id' => $this->input->post('program_id'),
                        'chapter_id' => $this->input->post('chapter_id'),
                        'lession_id !=' => $this->input->post('id')
                    ),
                    'tablename' => 'lessions'
                );
                $check_unique = $this->common_model->get_list($ch_ed_data);
                if(count($check_unique)!=0){
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Entered lession name is already taken please enter another....'
                    );
                    echo json_encode($status);exit;
                }
                $info = array(
                    'where' => array(
                        'lession_id' => $this->input->post('id')
                    ),
                    'data' => array(
                        'lession_name' => $this->input->post('lession_name'),
                        'program_id' => $this->input->post('program_id'),
                        'chapter_id' => $this->input->post('chapter_id')
                    ),
                    'tablename' => 'lessions'
                );
                $result = $this->common_model->update_details($info);
                if($result){
                    $status = array(
                                'status' => 'success',
                                'go_to' => 'admin/lessions',
                                'message' => 'Lession updated successfully'
                            );
                    echo json_encode($status);exit;
               }else{
                //echo '<pre>not ok';print_r($_FILES);exit;
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Error while adding lession details...'
                    );
                    echo json_encode($status);exit;
               }
            } else {
                $data['mode'] = 'create';
                $data['msg'] = '';
                $this->load->view('lessions/create_lession', $data);
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
        $data['states'] = $this->lessions_model->get_states_list($id);
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
        $data['states'] = $this->lessions_model->get_cities_list($id);
        if($data['states']){
            $data['status'] = 0;
        }else{
            $data['status'] = 1;
        }
        //echo '<pre>'; print_r($states);exit;
        echo json_encode($data);
    }
    
    /**
    * lession_details
    * lession Details
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function lession_details($id){
        $data['subjects_list'] = $this->lessions_model->get_subjects_list();
        $data['classes_list'] = $this->lessions_model->get_classes_list();
        $data['mode'] = 'details';
        $data['msg'] = '';
        $info = array(
            'select_fields' => '',
            'where' => array(
                'lession_id' => $id
            ),
            'tablename' => 'lessions'
        );
        $data['item_details'] = $this->common_model->get_individual_details($info);
        //echo '<pre>';print_r($data);exit;
        $info_certi = array(
            'select_fields' => '',
            'where' => array(
                'lession_id' => $data['item_details']['lession_id']
            ),
            'tablename' => 'lession_certificates'
        );
        $data['certificates'] = $this->common_model->get_list($info_certi);
        $this->load->view('lessions/create_lession', $data);
    }
    
    public function get_all_chapters(){
        $program_id = $this->input->post('program_id');
        $info = array(
            'select_fields' => '',
            'where' => array(
                'program_id' => $program_id
            ),
            'tablename' => 'chapters'
        );
        $data['chapters'] = $this->common_model->get_list($info);
        if($data['chapters']){
            $data['status'] = true;   
        }else{
            $data['status'] = false;
        }
        //echo '<pre>';print_r($data);exit;
        echo json_encode($data);exit;
    }
}