<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class News extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->lang->load('data');
        $this->load->model('News_model');
        $this->load->model('common/common_model');
        $this->load->model('common/upload_model');
        modules::run('admin/login/is_admin_logged_in');
    }
    
    public function index()
    {
        $this->load->view('news/news');
    }
    
    /**
    * get_news_list
    * Get Photo news List
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function get_news_list()
    {
        $result = $this->News_model->get_news_list();
        //echo '<pre>sdafdsf'; print_r($result);exit;
        $aaData = array();
        foreach($result['aaData'] as $row){
            //echo '<pre>'; print_r($row);exit;
            $row[0] = '<input type="checkbox" id="checkbox-1-' . intval($row[0]) . '" class="checkbox1 regular-checkbox" name="regular-checkbox"
                                value="' . $row[0] . '"/><label for="checkbox-1-' . intval($row[0]) . '"></label>';
            //$row[2] = '<a href="'. base_url('assets/images/news/'.$row[2]).'" target="_blank"> View File </a>';
            $row[2] = '<img src="'.news_img($row[2]).'" height="150" width="150" alt="Image"/>';
            //$row[3] = word_limiter($row[3], 30);
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
                $row[5] = '<a href="'.base_url('admin/news/create_news/')  ."/". $row[5] . '/details" title="Details" data-toggle="tooltip">
                                    <i class="fa_size fa fa-eye" ></i></a>
                           <a href="'.base_url('admin/news/create_news/')  ."/". $row[5] . '/edit" title="Edit Record" data-toggle="tooltip">
                                    <i class="fa_size fa fa-pencil" ></i></a>
                           <a href="javascript:void(0)" data-toggle="tooltip" id="' . $row[5] . '" class="deleteme show-tooltip deleteitem_' . $row[5] . '"" title="Delete Record" data-tablename="news" data-fieldname="n_id" url="'. site_url('admin/admin/delete_all_record') .'">
                                    <i class="fa_size fa fa-trash-o "></i></a>';
            $aaData[] = $row;
        }
        $result['aaData'] = $aaData;
        //echo '<pre>end'; print_r($result);exit;
        print_r(json_encode($result));
    }
    
   /**
    * create_news
    * Create News
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function create_news($id='',$mode='') {
        //echo '<pre>';print_r($_FILES);
        //echo '<pre>';print_r($_POST);exit;
        if ($id != '') {
            $data['mode'] = $mode;
            $data['msg'] = '';
            $info = array(
                'select_fields' => '',
                'where' => array(
                    'n_id' => $id
                ),
                'tablename' => 'news'
            );
            $data['item_details'] = $this->common_model->get_individual_details($info);
            //echo '<pre>';print_r($data);exit;
            $this->load->view('news/create_news', $data);
        } else {
            if(isset($_POST['submit'])&&$_POST['submit']=='insert'){
                //echo '<pre>';print_r($_POST);exit;
                $ch_ed_data = array(
                    'select_fields' => '',
                    'where' => array(
                        'n_name' => $this->input->post('n_name')
                    ),
                    'tablename' => 'news'
                );
                $check_unique = $this->common_model->get_list($ch_ed_data);
              if(count($check_unique)!=0){
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Entered name is already taken please enter another....'
                    );
                    echo json_encode($status);exit;
              }
                
              $n_image='';
              if($_FILES['n_image']['name']!=''){
                    $n_image='';
                    $files = $_FILES;
                    $time = time();
                    $string1 = str_replace(' ', '-', $_POST['n_name']); // Replaces all spaces with hyphens.
                    $string1 = preg_replace('/[^A-Za-z0-9\-]/', '', $string1); // Removes special chars.
                    $random_string = random_string('alnum', 16);
                    $title_product = $string1.'-'.$random_string;
                    $n_image_ext = explode(".",$_FILES['n_image']['name']);
                    $n_image_ext = end($n_image_ext);
                    //echo '<pre>';print_r($_FILES);exit;
                    $_FILES['n_image']['name'] =  $title_product .'.'.$n_image_ext;
                    //echo '<pre>';print_r($_FILES);exit;
                    $file_upl_data = $this->upload_model->uploadDocuments('n_image', 'news_image');
                    //echo '<pre>';print_r($file_upl_data);exit;
                    if ($file_upl_data['success'] == 1) {
                        $n_image = $file_upl_data['file_name'];
                    }else{
                        $status = array(
                            'status' => 'fail',
                            'message' => $file_upl_data['msg']
                        );
                        //$this->session->set_flashdata('insert_record', $status);
                        //redirect('school/teachers/create_teacher');
                        echo json_encode($status);exit;
                    }
                }
                
                $info = array(
                    'n_name' => $this->input->post('n_name'),
                    'n_image' => $n_image,
                    'n_description' => $this->input->post('n_description')
                );
                //echo "<pre>";print_r($info);exit;
                $result_id = $this->common_model->insert_details('news', $info);
                //echo "<pre>";print_r($result);exit;
                  if($result_id!=''){
                      $status = array(
                            'status' => 'success',
                            'go_to' => 'admin/news',
                            'message' => 'News added successfully'
                      );
                      echo json_encode($status);exit;
               }else{
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Error while adding news details...'
                    );
                    echo json_encode($status);exit;
               }
            } if(isset($_POST['submit'])&&$_POST['submit']=='update') {
                //echo '<pre>';print_r($_FILES);
                //echo '<pre>';print_r($_POST);exit;
                
                $ch_ed_data = array(
                    'select_fields' => '',
                    'where' => array(
                        'n_name' => $this->input->post('n_name'),
                        'n_id !=' => $this->input->post('id')
                    ),
                    'tablename' => 'news'
                );
                $check_unique = $this->common_model->get_list($ch_ed_data);
                if(count($check_unique)!=0){
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Entered name is already taken please enter another....'
                    );
                    echo json_encode($status);exit;
                }
                
                $n_image='';
                if(isset($_FILES['n_image'])&&$_FILES['n_image']['name']!=''){
                    $n_image='';
                    $files = $_FILES;
                    $time = time();
                    $string1 = str_replace(' ', '-', $_POST['n_name']); // Replaces all spaces with hyphens.
                    $string1 = preg_replace('/[^A-Za-z0-9\-]/', '', $string1); // Removes special chars.
                    $random_string = random_string('alnum', 16);
                    $title_product = $string1.'-'.$random_string;
                    $n_image_ext = explode(".",$_FILES['n_image']['name']);
                    $n_image_ext = end($n_image_ext);
                    //echo '<pre>';print_r($_FILES);exit;
                    $_FILES['n_image']['name'] =  $title_product .'.'.$n_image_ext;
                    //echo '<pre>';print_r($_FILES);exit;
                    $file_upl_data = $this->upload_model->uploadDocuments('n_image', 'news_image');
                    //echo '<pre>';print_r($file_upl_data);exit;
                    if ($file_upl_data['success'] == 1) {
                        if(file_exists(config_item('root_dir').'assets/images/catelogues/'.$_POST['old_n_image'])){ 
                           unlink(FCPATH . 'assets/images/catelogues/' . $_POST['old_n_image']);
                        }
                        $n_image = $file_upl_data['file_name'];
                    }else{
                        $status = array(
                            'status' => 'fail',
                            'message' => $file_upl_data['msg']
                        );
                        //$this->session->set_flashdata('insert_record', $status);
                        //redirect('school/teachers/create_teacher');
                        echo json_encode($status);exit;
                    }
                }else{
                      $n_image = $_POST['old_n_image'];
                }
                $info = array(
                    'where' => array(
                        'n_id' => $this->input->post('id')
                    ),
                    'data' => array(
                        'n_name' => $this->input->post('n_name'),
                        'n_image' => $n_image,
                        'n_description' => $this->input->post('n_description')
                    ),
                    'tablename' => 'news'
                );
                //echo '<pre>not ok';print_r($info);exit;
                $result = $this->common_model->update_details($info);
                if($result){
                    $status = array(
                                'status' => 'success',
                                'go_to' => 'admin/news',
                                'message' => 'News updated successfully'
                            );
                    echo json_encode($status);exit;
               }else{
                //echo '<pre>not ok';print_r($_FILES);exit;
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Error while adding news details...'
                    );
                    echo json_encode($status);exit;
               }
            }else{
                $data['mode'] = 'create';
                $data['msg'] = '';
                $this->load->view('news/create_news', $data);
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
        $data['states'] = $this->news_model->get_states_list($id);
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
        $data['states'] = $this->news_model->get_cities_list($id);
        if($data['states']){
            $data['status'] = 0;
        }else{
            $data['status'] = 1;
        }
        //echo '<pre>'; print_r($states);exit;
        echo json_encode($data);
    }
    
    /**
    * news_details
    * news Details
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function news_details($id){
        $data['subjects_list'] = $this->news_model->get_subjects_list();
        $data['classes_list'] = $this->news_model->get_classes_list();
        $data['mode'] = 'details';
        $data['msg'] = '';
        $info = array(
            'select_fields' => '',
            'where' => array(
                'news_id' => $id
            ),
            'tablename' => 'news'
        );
        $data['item_details'] = $this->common_model->get_individual_details($info);
        //echo '<pre>';print_r($data);exit;
        $info_certi = array(
            'select_fields' => '',
            'where' => array(
                'news_id' => $data['item_details']['news_id']
            ),
            'tablename' => 'news_certificates'
        );
        $data['certificates'] = $this->common_model->get_list($info_certi);
        $this->load->view('news/create_news', $data);
    } 
    
}