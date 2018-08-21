<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Categories extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('categories_model');
        $this->load->model('common/common_model');
        modules::run('admin/login/is_admin_logged_in');
    }
    
    public function index()
    {
        $this->load->view('categories/categories');
    }
    
    /**
    * get_categories_list
    * Get Photo teacher List
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function get_categories_list()
    {
        $result = $this->categories_model->get_categories_list();
        $aaData = array();
        foreach($result['aaData'] as $row){
            $row[0] = '<input type="checkbox" id="checkbox-1-' . intval($row[0]) . '" class="checkbox1 regular-checkbox" name="regular-checkbox"
                                value="' . $row[0] . '"/><label for="checkbox-1-' . intval($row[0]) . '"></label>';
            //$row[2] = '<a href="'. base_url('assets/images/categories/'.$row[2]).'" target="_blank"> View File </a>';
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
                $row[5] = '<a href="'.base_url('admin/categories/category_details') ."/". $row[5] . '" title="View Record" data-toggle="tooltip">
                            <i class="fa_size fa fa-eye"></i></a>
                <a href="'.base_url('admin/categories/create_category/'). $row[5] . '" title="Edit Record" data-toggle="tooltip">
                                    <i class="fa_size fa fa-pencil" ></i></a>
                           <a href="javascript:void(0)" data-toggle="tooltip" id="' . $row[5] . '" class="deleteme show-tooltip deleteitem_' . $row[5] . '"" title="Delete Record" data-tablename="categories" data-fieldname="c_id" url="'. site_url('admin/admin/delete_all_record') .'">
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
    public function create_category($id = ''){
        //echo '<pre>';print_r($_FILES);
        //echo '<pre>';print_r($_POST);exit;
        $data['user_types'] = $this->categories_model->get_user_types();
        if ($id != '') {
            $data['mode'] = 'edit';
            $data['msg'] = '';
            $info = array(
                'select_fields' => '',
                'where' => array(
                    'c_id' => $id
                ),
                'tablename' => 'categories'
            );
            $data['item_details'] = $this->common_model->get_individual_details($info);
            //echo '<pre>';print_r($data);exit;
            $this->load->view('categories/create_category', $data);
        } else {
            if(isset($_POST['submit'])&&$_POST['submit']=='insert'){
                //echo '<pre>';print_r($_POST);exit;
                /* roles:-1= super admin,2= admin,3= user,4= School admin,5= teacher,6= parent,7= vendor */
                
                $ch_ed_data = array(
                    'select_fields' => '',
                    'where' => array(
                        'c_name' => $this->input->post('c_name'),
                        'ut_id =' => $this->input->post('ut_id')
                    ),
                    'tablename' => 'categories'
                );
                $check_unique = $this->common_model->get_list($ch_ed_data);
                //echo '<pre>';print_r($check_unique);exit;
                if(count($check_unique)!=0){
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Entered Name is already taken please enter another'
                    );
                    echo json_encode($status);exit;
                }
                $info = array(
                    'c_name' => $this->input->post('c_name'),
                    'ut_id' => $this->input->post('ut_id')
                );
                //echo "<pre>";print_r($info);exit;
                $result_id = $this->common_model->insert_details('categories', $info);
                  if($result_id!=''){
                    $status = array(
                        'status' => 'success',
                        'go_to' => 'admin/categories',
                        'message' => 'Category added successfully'
                    );
                    echo json_encode($status);exit;
               }else{
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Error while adding Teacher details...'
                    );
                    echo json_encode($status);exit;
               }
            } if(isset($_POST['submit'])&&$_POST['submit']=='update') {
                //echo '<pre>';print_r($_FILES);
                //echo '<pre>';print_r($_POST);exit;
                
                $ch_ed_data = array(
                    'select_fields' => '',
                    'where' => array(
                        'c_name' => $this->input->post('c_name'),
                        'ut_id' => $this->input->post('ut_id'),
                        'c_id !=' => $this->input->post('id')
                    ),
                    'tablename' => 'categories'
                );
                $check_unique = $this->common_model->get_list($ch_ed_data);
                if(count($check_unique)!=0){
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Entered Name is already taken please enter another'
                    );
                    echo json_encode($status);exit;
                }
                
                $info = array(
                    'where' => array(
                        'c_id' => $this->input->post('id')
                    ),
                    'data' => array(
                        'c_name' => $this->input->post('c_name'),
                        'ut_id' => $this->input->post('ut_id')
                    ),
                    'tablename' => 'categories'
                );
                $result = $this->common_model->update_details($info);
                if($result){
                    $status = array(
                        'status' => 'success',
                        'go_to' => 'admin/categories',
                        'message' => 'Category updated successfully'
                    );
                }else{
                //echo '<pre>not ok';print_r($_FILES);exit;
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Error while adding Teacher details...'
                    );
               }
               echo json_encode($status);exit;
            } else {
                $data['mode'] = 'create';
                $data['msg'] = '';
                $this->load->view('categories/create_category', $data);
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
        $data['states'] = $this->categories_model->get_states_list($id);
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
        $data['states'] = $this->categories_model->get_cities_list($id);
        if($data['states']){
            $data['status'] = 0;
        }else{
            $data['status'] = 1;
        }
        //echo '<pre>'; print_r($states);exit;
        echo json_encode($data);
    }
    
    /**
    * teacher_details
    * teacher Details
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function category_details($id){
        $data['mode'] = 'details';
        $data['msg'] = '';
        $info = array(
            'select_fields' => '',
            'where' => array(
                'c_id' => $id
            ),
            'tablename' => 'categories'
        );
        $data['item_details'] = $this->common_model->get_individual_details($info);
        $data['user_types'] = $this->categories_model->get_user_types();
        //echo '<pre>';print_r($data);exit;
        $this->load->view('categories/create_category', $data);
    }
    
    /**
    * check_email_id
    * Check Email id
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function check_email_id(){
        $email = $this->input->get('teacher_email');
        $ch_data = array(
            'select_fields' => '',
            'where' => array(
                'teacher_email' => $email
            ),
            'tablename' => 'categories'
        );
        $check_unique = $this->common_model->get_list($ch_data);
        if (count($check_unique)==0){
            echo 'true';
        }else{
            echo 'false';
        }
    } 
    
}