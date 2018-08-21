<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class videos extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->lang->load('data');
        $this->load->model('videos_model');
        $this->load->model('common/common_model');
        $this->load->model('common/upload_model');
        modules::run('admin/login/is_admin_logged_in');
    }
    
    public function index()
    {
        $this->load->view('videos/videos');
    }
    
    /**
    * get_videos_list
    * Get Photo video List
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function get_videos_list()
    {
        $result = $this->videos_model->get_videos_list();
        //echo '<pre>'; print_r($result);exit;
        $aaData = array();
        foreach($result['aaData'] as $row){
            $row[0] = '<input type="checkbox" id="checkbox-1-' . intval($row[0]) . '" class="checkbox1 regular-checkbox" name="regular-checkbox"
                                value="' . $row[0] . '"/><label for="checkbox-1-' . intval($row[0]) . '"></label>';
            //$row[2] = '<a href="'. base_url('assets/images/videos/'.$row[2]).'" target="_blank"> View File </a>';
            //$row[2] = word_limiter($row[2], 30);
            //$row[3] = date('M,Y',strtotime($row[3]));
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
            $row[7] = '<a href="'.base_url('admin/videos/create_video/'). $row[7] . '" title="Edit Record" data-toggle="tooltip">
                                    <i class="fa_size fa fa-pencil" ></i></a>
                           <a href="javascript:void(0)" data-toggle="tooltip" id="' . $row[7] . '" class="deleteme show-tooltip deleteitem_' . $row[7] . '"" title="Delete Record" data-tablename="videos" data-fieldname="video_id" url="'. site_url('admin/admin/delete_all_record') .'">
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
    public function create_video($id = ''){
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
                    //'video_id' => $id
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
            $info_less = array(
                'select_fields' => '',
                'where' => array(
                    //'chapter_id' => $data['item_details']['chapter_id']
                ),
                'tablename' => 'lessions'
            );
            $chapters = $this->common_model->get_list($info_less);
            $rw_lessions_ls = array(''=>'Select Lession');
            foreach($chapters as $rw_chapters){
                $rw_lessions_ls[$rw_chapters['lession_id']] = $rw_chapters['lession_name']; 
            }
            $data['lessions'] = $rw_lessions_ls;
            //echo '<pre>';print_r($data['lessions']);exit;
        if($id != ''){
            $data['mode'] = 'edit';
            $data['msg'] = '';
            $info = array(
                'select_fields' => '',
                'where' => array(
                    'video_id' => $id
                ),
                'tablename' => 'videos'
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
                    //'video_id' => $id
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
            $info_less = array(
                'select_fields' => '',
                'where' => array(
                    'chapter_id' => $data['item_details']['chapter_id']
                ),
                'tablename' => 'lessions'
            );
            $chapters = $this->common_model->get_list($info_less);
            $rw_lessions_ls = array(''=>'Select Lession');
            foreach($chapters as $rw_chapters){
                $rw_lessions_ls[$rw_chapters['lession_id']] = $rw_chapters['lession_name']; 
            }
            $data['lessions'] = $rw_lessions_ls;
            //echo '<pre>';print_r($data['programs']);exit;
            $this->load->view('videos/create_video', $data);
        }else{
            if(isset($_POST['submit'])&&$_POST['submit']=='insert'){
                //echo '<pre>';print_r($_POST);exit;
                $ch_ed_data = array(
                    'select_fields' => '',
                    'where' => array(
                        'video_name' => $this->input->post('video_name'),
                        'program_id' => $this->input->post('program_id'),
                        'chapter_id' => $this->input->post('chapter_id'),
                        'lession_id' => $this->input->post('lession_id')
                    ),
                    'tablename' => 'videos'
                );
                $check_unique = $this->common_model->get_list($ch_ed_data);
                if(count($check_unique)!=0){
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Entered video details is already taken please enter another....'
                    );
                    echo json_encode($status);exit;
                }
                /* roles:-1= super admin,2= admin,3= user,4= School admin,5= video,6= parent,7= vendor */
              //$video_act='';
//              if($_FILES['video_act']['name']!=''){
//                    $video_act='';
//                    $files = $_FILES;
//                    $time = time();
//                    $video_act_ext = explode(".",$_FILES['video_act']['name']);
//                    $video_act_ext = end($video_act_ext);
//                    //echo '<pre>';print_r($_FILES);exit;
//                    $_FILES['video_act']['name'] =  $time .'.'.$video_act_ext;
//                    //echo '<pre>';print_r($_FILES);exit;
//                    $file_upl_data = $this->upload_model->uploadDocuments('video_act', 'video_act_vid');
//                    //echo '<pre>';print_r($file_upl_data);exit;
//                    if ($file_upl_data['success'] == 1) {
//                        $video_act = $file_upl_data['file_name'];
//                    }else{
//                        $status = array(
//                            'status' => 'fail',
//                            'message' => $file_upl_data['msg']
//                        );
//                        //$this->session->set_flashdata('insert_record', $status);
//                        //redirect('school/teachers/create_teacher');
//                        echo json_encode($status);exit;
//                    }
//                }
                $info = array(
                    'video_name' => $this->input->post('video_name'),
                    'video_short_desc' => $this->input->post('video_short_desc'),
                    'video_full_desc' => $this->input->post('video_full_desc'),
                    'video_act' => $this->input->post('video_act'),
                    //'video_act' => $video_act,
                    'program_id' => $this->input->post('program_id'),
                    'chapter_id' => $this->input->post('chapter_id'),
                        'lession_id' => $this->input->post('lession_id')
                );
                //echo "<pre>";print_r($info);exit;
                $result_id = $this->common_model->insert_details('videos', $info);
                //echo "<pre>";print_r($result);exit;
                  if($result_id!=''){
                      $status = array(
                            'status' => 'success',
                            'go_to' => 'admin/videos',
                            'message' => 'Video added successfully'
                      );
                      echo json_encode($status);exit;
               }else{
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Error while adding video details...'
                    );
                    echo json_encode($status);exit;
               }
            } if(isset($_POST['submit'])&&$_POST['submit']=='update') {
                //echo '<pre>';print_r($_FILES);
                //echo '<pre>';print_r($_POST);exit;
                
                $ch_ed_data = array(
                    'select_fields' => '',
                    'where' => array(
                        'video_name' => $this->input->post('video_name'),
                        'program_id' => $this->input->post('program_id'),
                        'chapter_id' => $this->input->post('chapter_id'),
                        'lession_id' => $this->input->post('lession_id'),
                        'video_id !=' => $this->input->post('id')
                    ),
                    'tablename' => 'videos'
                );
                $check_unique = $this->common_model->get_list($ch_ed_data);
                //echo $this->db->last_query().'<br/>';
                //echo "<pre>";print_r($check_unique);exit;
                if(count($check_unique)!=0){
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Entered video details is already taken please enter another....'
                    );
                    echo json_encode($status);exit;
                }
                  //echo config_item('root_dir').'assets/images/videos/'.$_POST['old_video_act'];exit;
                  //$video_act='';
//                  if($_FILES['video_act']['name']!=''){
//                        $video_act='';
//                        $files = $_FILES;
//                        $time = time();
//                        $video_act_ext = explode(".",$_FILES['video_act']['name']);
//                        $video_act_ext = end($video_act_ext);
//                        //echo '<pre>';print_r($_FILES);exit;
//                        $_FILES['video_act']['name'] =  $time .'.'.$video_act_ext;
//                        //echo '<pre>';print_r($_FILES);exit;
//                        $file_upl_data = $this->upload_model->uploadDocuments('video_act', 'video_act_vid');
//                        //echo '<pre>';print_r($file_upl_data);exit;
//                        if ($file_upl_data['success'] == 1) {
//                            $video_act = $file_upl_data['file_name'];
//                            unlink(FCPATH . 'assets/images/videos/' . $_POST['old_video_act']);
//                            if(file_exists(config_item('root_dir').'assets/images/videos/'.$_POST['old_video_act'])){ 
//                               unlink(FCPATH . 'assets/images/videos/' . $_POST['old_video_act']);
//                            }
//                        }else{
//                            $status = array(
//                                'status' => 'fail',
//                                'message' => $file_upl_data['msg']
//                            );
//                            //$this->session->set_flashdata('insert_record', $status);
//                            //redirect('school/teachers/create_teacher');
//                            echo json_encode($status);exit;
//                        }
//                    }
                $info = array(
                    'where' => array(
                        'video_id' => $this->input->post('id')
                    ),
                    'data' => array(
                        'video_name' => $this->input->post('video_name'),
                        'video_short_desc' => $this->input->post('video_short_desc'),
                        'video_full_desc' => $this->input->post('video_full_desc'),
                        'video_act' => $this->input->post('video_act'),
                        //'video_act' => $video_act,
                        'program_id' => $this->input->post('program_id'),
                        'chapter_id' => $this->input->post('chapter_id'),
                        'lession_id' => $this->input->post('lession_id')
                    ),
                    'tablename' => 'videos'
                );
                //echo '<pre>not ok';print_r($info);exit;
                $result = $this->common_model->update_details($info);
                if($result){
                    $status = array(
                                'status' => 'success',
                                'go_to' => 'admin/videos',
                                'message' => 'Video updated successfully'
                            );
                    echo json_encode($status);exit;
               }else{
                //echo '<pre>not ok';print_r($_FILES);exit;
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Error while adding video details...'
                    );
                    echo json_encode($status);exit;
               }
            } else {
                $data['mode'] = 'create';
                $data['msg'] = '';
                $this->load->view('videos/create_video', $data);
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
        $data['states'] = $this->videos_model->get_states_list($id);
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
        $data['states'] = $this->videos_model->get_cities_list($id);
        if($data['states']){
            $data['status'] = 0;
        }else{
            $data['status'] = 1;
        }
        //echo '<pre>'; print_r($states);exit;
        echo json_encode($data);
    }
    
    /**
    * video_details
    * video Details
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function video_details($id){
        $data['subjects_list'] = $this->videos_model->get_subjects_list();
        $data['classes_list'] = $this->videos_model->get_classes_list();
        $data['mode'] = 'details';
        $data['msg'] = '';
        $info = array(
            'select_fields' => '',
            'where' => array(
                'video_id' => $id
            ),
            'tablename' => 'videos'
        );
        $data['item_details'] = $this->common_model->get_individual_details($info);
        //echo '<pre>';print_r($data);exit;
        $info_certi = array(
            'select_fields' => '',
            'where' => array(
                'video_id' => $data['item_details']['video_id']
            ),
            'tablename' => 'video_certificates'
        );
        $data['certificates'] = $this->common_model->get_list($info_certi);
        $this->load->view('videos/create_video', $data);
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
    
    public function get_all_lessions(){
        $chapter_id = $this->input->post('chapter_id');
        $info = array(
            'select_fields' => '',
            'where' => array(
                'chapter_id' => $chapter_id
            ),
            'tablename' => 'lessions'
        );
        $data['lessions'] = $this->common_model->get_list($info);
        if($data['lessions']){
            $data['status'] = true;   
        }else{
            $data['status'] = false;
        }
        //echo '<pre>';print_r($data);exit;
        echo json_encode($data);exit;
    }
}