<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Company_types extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->lang->load('data');
        $this->load->model('company_types_model');
        $this->load->model('common/common_model');
        modules::run('admin/login/is_admin_logged_in');
    }
    
    public function index()
    {
        $this->load->view('company_types/company_types');
    }
    
    /**
    * get_company_types_list
    * Get Photo company_type List
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function get_company_types_list()
    {
        $result = $this->company_types_model->get_company_types_list();
        $aaData = array();
        foreach($result['aaData'] as $row){
            $row[0] = '<input type="checkbox" id="checkbox-1-' . intval($row[0]) . '" class="checkbox1 regular-checkbox" name="regular-checkbox"
                                value="' . $row[0] . '"/><label for="checkbox-1-' . intval($row[0]) . '"></label>';
            //$row[2] = '<a href="'. base_url('assets/images/company_types/'.$row[2]).'" target="_blank"> View File </a>';
            //$row[3] = word_limiter($row[3], 30);
            //$row[3] = date('M,Y',strtotime($row[3]));
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
                $row[4] = '<a href="'.base_url('admin/company_types/create_company_type/')  ."/". $row[4] . '" title="Edit Record" data-toggle="tooltip">
                                    <i class="fa_size fa fa-pencil" ></i></a>
                           <a href="javascript:void(0)" data-toggle="tooltip" id="' . $row[4] . '" class="deleteme show-tooltip deleteitem_' . $row[4] . '"" title="Delete Record" data-tablename="company_types" data-fieldname="ct_id" url="'. site_url('admin/admin/delete_all_record') .'">
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
    public function create_company_type($id = '') {
        //echo '<pre>';print_r($_FILES);
        //echo '<pre>';print_r($_POST);exit;
        if ($id != '') {
            $data['mode'] = 'edit';
            $data['msg'] = '';
            $info = array(
                'select_fields' => '',
                'where' => array(
                    'ct_id' => $id
                ),
                'tablename' => 'company_types'
            );
            $data['item_details'] = $this->common_model->get_individual_details($info);
            //echo '<pre>';print_r($data);exit;
            $this->load->view('company_types/create_company_type', $data);
        } else {
            if(isset($_POST['submit'])&&$_POST['submit']=='insert'){
                //echo '<pre>';print_r($_POST);exit;
                $ch_ed_data = array(
                    'select_fields' => '',
                    'where' => array(
                        'ct_name' => $this->input->post('ct_name')
                    ),
                    'tablename' => 'company_types'
                );
                $check_unique = $this->common_model->get_list($ch_ed_data);
                if(count($check_unique)!=0){
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Entered name is already taken please enter another....'
                    );
                    echo json_encode($status);exit;
                }
                /* roles:-1= super admin,2= admin,3= user,4= School admin,5= company_type,6= parent,7= vendor */
                $info = array(
                    'ct_name' => $this->input->post('ct_name')
                );
                //echo "<pre>";print_r($info);exit;
                $result_id = $this->common_model->insert_details('company_types', $info);
                //echo "<pre>";print_r($result);exit;
                  if($result_id!=''){
                      $status = array(
                            'status' => 'success',
                            'go_to' => 'admin/company_types',
                            'message' => 'Company type added successfully'
                      );
                      echo json_encode($status);exit;
               }else{
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Error while adding company_type details...'
                    );
                    echo json_encode($status);exit;
               }
            } if(isset($_POST['submit'])&&$_POST['submit']=='update') {
                //echo '<pre>';print_r($_FILES);
                //echo '<pre>';print_r($_POST);exit;
                
                $ch_ed_data = array(
                    'select_fields' => '',
                    'where' => array(
                        'ct_name' => $this->input->post('ct_name'),
                        'ct_id !=' => $this->input->post('id')
                    ),
                    'tablename' => 'company_types'
                );
                $check_unique = $this->common_model->get_list($ch_ed_data);
                if(count($check_unique)!=0){
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Entered name is already taken please enter another....'
                    );
                    echo json_encode($status);exit;
                }
                
                $info = array(
                    'where' => array(
                        'ct_id' => $this->input->post('id')
                    ),
                    'data' => array(
                        'ct_name' => $this->input->post('ct_name')
                    ),
                    'tablename' => 'company_types'
                );
                $result = $this->common_model->update_details($info);
                if($result){
                    $status = array(
                                'status' => 'success',
                                'go_to' => 'admin/company_types',
                                'message' => 'Company type updated successfully'
                            );
                    echo json_encode($status);exit;
               }else{
                //echo '<pre>not ok';print_r($_FILES);exit;
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Error while adding company_type details...'
                    );
                    echo json_encode($status);exit;
               }
            } else {
                $data['mode'] = 'create';
                $data['msg'] = '';
                $this->load->view('company_types/create_company_type', $data);
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
        $data['states'] = $this->company_types_model->get_states_list($id);
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
        $data['states'] = $this->company_types_model->get_cities_list($id);
        if($data['states']){
            $data['status'] = 0;
        }else{
            $data['status'] = 1;
        }
        //echo '<pre>'; print_r($states);exit;
        echo json_encode($data);
    }
    
    /**
    * company_type_details
    * company_type Details
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function company_type_details($id){
        $data['subjects_list'] = $this->company_types_model->get_subjects_list();
        $data['classes_list'] = $this->company_types_model->get_classes_list();
        $data['mode'] = 'details';
        $data['msg'] = '';
        $info = array(
            'select_fields' => '',
            'where' => array(
                'company_type_id' => $id
            ),
            'tablename' => 'company_types'
        );
        $data['item_details'] = $this->common_model->get_individual_details($info);
        //echo '<pre>';print_r($data);exit;
        $info_certi = array(
            'select_fields' => '',
            'where' => array(
                'company_type_id' => $data['item_details']['company_type_id']
            ),
            'tablename' => 'company_type_certificates'
        );
        $data['certificates'] = $this->common_model->get_list($info_certi);
        $this->load->view('company_types/create_company_type', $data);
    }
    
    /**
    * check_email_id
    * Check Email id
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function check_email_id(){
        $email = $this->input->get('company_type_email');
        $ch_data = array(
            'select_fields' => '',
            'where' => array(
                'company_type_email' => $email
            ),
            'tablename' => 'company_types'
        );
        $check_unique = $this->common_model->get_list($ch_data);
        if (count($check_unique)==0){
            echo 'true';
        }else{
            echo 'false';
        }
    } 
    
}