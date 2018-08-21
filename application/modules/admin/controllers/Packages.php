<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Packages extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('packages_model');
        $this->load->model('common/common_model');
        modules::run('admin/login/is_admin_logged_in');
    }
    
    public function index()
    {
        $this->load->view('packages/packages');
    }
    
    /**
    * get_packages_list
    * Get Photo teacher List
    * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
    * @param type $data
    */
    public function get_packages_list()
    {
        $result = $this->packages_model->get_packages_list();
        $aaData = array();
        foreach($result['aaData'] as $row){
            $row[0] = '<input type="checkbox" id="checkbox-1-' . intval($row[0]) . '" class="checkbox1 regular-checkbox" name="regular-checkbox"
                                value="' . $row[0] . '"/><label for="checkbox-1-' . intval($row[0]) . '"></label>';
            //$row[2] = '<a href="'. base_url('assets/images/packages/'.$row[2]).'" target="_blank"> View File </a>';
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
                $row[4] = '<a href="'.base_url('admin/packages/package_details') ."/". $row[4] . '" title="View Record" data-toggle="tooltip">
                            <i class="fa_size fa fa-eye"></i></a>
                <a href="'.base_url('admin/packages/create_package/'). $row[4] . '" title="Edit Record" data-toggle="tooltip">
                                    <i class="fa_size fa fa-pencil" ></i></a>
                           <a href="javascript:void(0)" data-toggle="tooltip" id="' . $row[4] . '" class="deleteme show-tooltip deleteitem_' . $row[4] . '"" title="Delete Record" data-tablename="packages" data-fieldname="p_id" url="'. site_url('admin/admin/delete_all_record') .'">
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
    public function create_package($id = '') {
        //echo '<pre>';print_r($_FILES);
        //echo '<pre>';print_r($_POST);exit;
        $data['p_ranking'] = $this->config->item('p_ranking');
        $data['p_auct_per_mon'] = $this->config->item('p_auct_per_mon');
        $data['mail_per_mon'] = $this->config->item('mail_per_mon');
        $data['abil_to_quo_buy_req'] = $this->config->item('abil_to_quo_buy_req');
        $data['p_microsite'] = $this->config->item('p_microsite');
        $data['e_opts_selec'] = $this->config->item('e_opts_selec');
        $data['p_stand_serv'] = $this->config->item('p_stand_serv');
        $data['p_commission'] = $this->config->item('p_commission');
        $data['p_stand_digi_market'] = $this->config->item('p_stand_digi_market');
        $data['user_types'] = $this->packages_model->get_user_types();
        if ($id != '') {
            $data['mode'] = 'edit';
            $data['msg'] = '';
            $info = array(
                'select_fields' => '',
                'where' => array(
                    'p_id' => $id
                ),
                'tablename' => 'packages'
            );
            $data['item_details'] = $this->common_model->get_individual_details($info);
            //echo '<pre>';print_r($data);exit;
            $this->load->view('packages/create_package', $data);
        } else {
            if(isset($_POST['submit'])&&$_POST['submit']=='insert'){
                //echo '<pre>';print_r($_POST);exit;
                /* roles:-1= super admin,2= admin,3= user,4= School admin,5= teacher,6= parent,7= vendor */
                
                $ch_ed_data = array(
                    'select_fields' => '',
                    'where' => array(
                        'p_feature_name' => $this->input->post('p_feature_name')
                    ),
                    'tablename' => 'packages'
                );
                $check_unique = $this->common_model->get_list($ch_ed_data);
                //echo '<pre>';print_r($check_unique);exit;
                if(count($check_unique)!=0){
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Entered feature name is already taken please enter another'
                    );
                    echo json_encode($status);exit;
                }
                $info = array(
                    'p_feature_name' => $this->input->post('p_feature_name'),
                    'p_pric_quoterly' => $this->input->post('p_pric_quoterly'),
                    'p_priority_ranking' => $this->input->post('p_priority_ranking'),
                    'p_free_auct_per_mon' => $this->input->post('p_free_auct_per_mon'),
                    'p_mail_per_mon' => $this->input->post('p_mail_per_mon'),
                    'p_abil_quote_buy_req' => $this->input->post('p_abil_quote_buy_req'),
                    'p_veri_ico' => $this->input->post('p_veri_ico'),
                    'p_microsite' => $this->input->post('p_microsite'),
                    'p_e_brochure' => $this->input->post('p_e_brochure'),
                    'p_standard_service' => $this->input->post('p_standard_service'),
                    'p_commission' => $this->input->post('p_commission'),
                    'p_stadard_digi_market' => $this->input->post('p_stadard_digi_market')
                );
                //echo "<pre>";print_r($info);exit;
                $result_id = $this->common_model->insert_details('packages', $info);
                  if($result_id!=''){
                    $status = array(
                        'status' => 'success',
                        'go_to' => 'admin/packages',
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
                        'p_feature_name' => $this->input->post('p_feature_name'),
                        'p_id !=' => $this->input->post('id')
                    ),
                    'tablename' => 'packages'
                );
                $check_unique = $this->common_model->get_list($ch_ed_data);
                if(count($check_unique)!=0){
                    $status = array(
                        'status' => 'fail',
                        'message' => 'Entered feature name is already taken please enter another'
                    );
                    echo json_encode($status);exit;
                }
                
                $info = array(
                    'where' => array(
                        'p_id' => $this->input->post('id')
                    ),
                    'data' => array(
                        'p_feature_name' => $this->input->post('p_feature_name'),
                        'p_pric_quoterly' => $this->input->post('p_pric_quoterly'),
                        'p_priority_ranking' => $this->input->post('p_priority_ranking'),
                        'p_free_auct_per_mon' => $this->input->post('p_free_auct_per_mon'),
                        'p_mail_per_mon' => $this->input->post('p_mail_per_mon'),
                        'p_abil_quote_buy_req' => $this->input->post('p_abil_quote_buy_req'),
                        'p_veri_ico' => $this->input->post('p_veri_ico'),
                        'p_microsite' => $this->input->post('p_microsite'),
                        'p_e_brochure' => $this->input->post('p_e_brochure'),
                        'p_standard_service' => $this->input->post('p_standard_service'),
                        'p_commission' => $this->input->post('p_commission'),
                        'p_stadard_digi_market' => $this->input->post('p_stadard_digi_market')
                    ),
                    'tablename' => 'packages'
                );
                $result = $this->common_model->update_details($info);
                if($result){
                    $status = array(
                        'status' => 'success',
                        'go_to' => 'admin/packages',
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
                $this->load->view('packages/create_package', $data);
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
        $data['states'] = $this->packages_model->get_states_list($id);
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
        $data['states'] = $this->packages_model->get_cities_list($id);
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
    public function package_details($id){
        $data['p_ranking'] = $this->config->item('p_ranking');
        $data['p_auct_per_mon'] = $this->config->item('p_auct_per_mon');
        $data['mail_per_mon'] = $this->config->item('mail_per_mon');
        $data['abil_to_quo_buy_req'] = $this->config->item('abil_to_quo_buy_req');
        $data['p_microsite'] = $this->config->item('p_microsite');
        $data['e_opts_selec'] = $this->config->item('e_opts_selec');
        $data['p_stand_serv'] = $this->config->item('p_stand_serv');
        $data['p_commission'] = $this->config->item('p_commission');
        $data['p_stand_digi_market'] = $this->config->item('p_stand_digi_market');
        $data['user_types'] = $this->packages_model->get_user_types();
        $data['mode'] = 'details';
        $data['msg'] = '';
        $info = array(
            'select_fields' => '',
            'where' => array(
                'p_id' => $id
            ),
            'tablename' => 'packages'
        );
        $data['item_details'] = $this->common_model->get_individual_details($info);
        $data['user_types'] = $this->packages_model->get_user_types();
        //echo '<pre>';print_r($data);exit;
        $this->load->view('packages/create_package', $data);
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
            'tablename' => 'packages'
        );
        $check_unique = $this->common_model->get_list($ch_data);
        if (count($check_unique)==0){
            echo 'true';
        }else{
            echo 'false';
        }
    } 
    
}