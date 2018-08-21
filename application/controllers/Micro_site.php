<?php class Micro_site extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('microsite_model');
        $this->load->model('common/common_model');
        $this->load->model('common/common_functions_model');
	}

	public function index($company_name=''){
	   if($company_name!=''){
	    $company_name_or = str_replace('-', ' ', $company_name);
        //echo $company_name_or; exit;
	    $info = array(
            'select_fields' => '',
            'where' => array(
                'cd_name' => $company_name_or
            ),
            'tablename' => 'company_details'
        );
        $data['company_details'] = $this->common_model->get_individual_details($info);
        $info_user = array(
            'select_fields' => '',
            'where' => array(
                'user_id' => $data['company_details']['user_id']
            ),
            'tablename' => 'users'
        );
        $data['user_details'] = $this->common_model->get_individual_details($info_user);
        $info_prods = array(
            'select_fields' => '',
            'where' => array(
                'user_id' => $data['company_details']['user_id']
            ),
            'tablename' => 'products'
        );
        $data['products_list'] = $this->common_model->get_list($info_prods);
        
        $info_microsite = array(
            'select_fields' => '',
            'where' => array(
                'user_id' => $data['company_details']['user_id']
            ),
            'tablename' => 'microsite'
        );
        $data['microsite_details'] = $this->common_model->get_individual_details($info_microsite);
        
        $data['countries'] = $this->common_functions_model->get_countries_list();
        $data['states'] = $this->common_functions_model->get_states_list($data['company_details']['cd_country_id']);
        $data['cities'] = $this->common_functions_model->get_cities_list($data['company_details']['cd_state_id']);
        //echo '<pre>';print_r($data['company_details']);exit;
        $data['type_categories'] = array('0'=>'Select one') + $this->common_functions_model->get_type_categories();
        //echo $this->db->last_query();
        //echo '<pre>';print_r($data);exit;
		$this->load->view('common/header');
		$this->load->view('microsite',$data);		
		$this->load->view('common/footer');
      }else{
        redirect('home');
      }
	}
    
    public function product_details($id){
       $data = ''; 
	   if($id!=''){
        $info_prods = array(
            'select_fields' => '',
            'where' => array(
                'product_id' => $id
            ),
            'tablename' => 'products'
        );
        $data['product_details'] = $this->common_model->get_individual_details($info_prods);
        
        $data['type_categories'] = array('0'=>'Select one') + $this->common_functions_model->get_type_categories();
        //echo $this->db->last_query();
        //echo '<pre>';print_r($data);exit;
        
		$this->load->view('products/products_header');
		$this->load->view('products/product-detail',$data);		
		$this->load->view('products/products_footer');
      }else{
        redirect('home');
      }
	}
}