<?php class Companies extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->model('companies_model');
        $this->load->model('common/common_model');
        $this->load->model('common/common_functions_model');
	}
    
    public function index(){
      if($this->input->get('category')!=''){
        $pre_id = $this->input->get('category');
      }else{
        $pre_id = '0';
      }
	  $data['category'] = $this->common_model->get_cat_list();
      //echo '<pre>'; print_r($data);exit;
      $data['start'] = 0;
      $data['limit'] = 10;    
      if(isset($pre_id)&&$pre_id==0){
    	  $data['list_category'] = $this->companies_model->category_sub_list($pre_id);
          //echo '<pre>'; print_r($data);exit;
          $data['list_companies'] = $this->companies_model->companies_list($data);
      }else{
    	  $data['list_category'] = $this->companies_model->category_sub_list($pre_id);
          $data['list_companies'] = $this->companies_model->companies_list($data);  
          $data['product_cat_id'] = $this->companies_model->sub_category_list($pre_id);
      }        
      $this->load->view('companies/companies_header',$data);
	  $this->load->view('companies/companies_page',$data);
	  $this->load->view('companies/companies_footer');
	}

	public function products_services(){
      $this->load->view('common/header');
	  $this->load->view('products-services');
	  $this->load->view('common/footer');
	}

	public function get_items_companies(){
	  //echo '<pre>'; print_r($_POST);exit;
      $pre_id = $this->input->get('category');
      if(isset($pre_id)){
        $pre_id = $this->input->get('category');
      }else{
        $pre_id = 0;
      }
      $_POST['limit'] = 10;
	  $data['category'] = $this->common_model->get_cat_list($pre_id);    
      if($pre_id==0){          
    	  $data['list_category'] = $this->companies_model->category_sub_list();
          $data['list_companies'] = $this->companies_model->companies_list($_POST);
      }else{
          $_POST['id'] = $pre_id;
    	  $data['list_category'] = $this->companies_model->category_sub_list($pre_id);
          $data['list_companies'] = $this->companies_model->companies_list($_POST);
          $data['product_cat_id'] = $this->companies_model->sub_category_list($pre_id);
      }
      $companies_count = $this->companies_model->companies_count($_POST);
      
      $temp = $this->load->view('common/template',$data,true);
      $array_data = array('total_count' => $companies_count,'count' => count($data['list_companies']), 'start' => $_POST['start'] + $_POST['limit'], 'items' => $temp);
      //echo '<pre>'; print_r($array_data);exit;
      echo json_encode($array_data);exit;
	}

	public function companies_query(){
	    $q=$this->input->get('q');
		//echo '<pre>'; print_r($q);exit;
        if($q!==''){
          $ids = "1,3";
          $category = $this->common_model->get_cat_list($ids);
          $data['category'] = array(''=>'Select one');
          foreach($category as $row):
             $data['category'][$row['c_id']] = $row['c_name'];
          endforeach;          
		  $data['list_category'] = $this->companies_model->category_sub_list();
          $data['list_companies'] = $this->companies_model->companies_list();          
          $this->load->view('companies/companies_header',$data);
    	  $this->load->view('companies/companies_page',$data);
    	  $this->load->view('companies/companies_footer');
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
            'tablename' => 'companies'
        );
        $data['product_details'] = $this->common_model->get_individual_details($info_prods);
        $data['type_categories'] = array('0'=>'Select one') + $this->common_functions_model->get_type_categories();
        //echo $this->db->last_query();
        //echo '<pre>';print_r($data);exit;
		$this->load->view('companies/companies_header');
		$this->load->view('companies/product-detail',$data);		
		$this->load->view('companies/companies_footer');
      }else{
        redirect('home');
      }
	}
    
    public function interior_design(){
		$this->load->view('common/header');
		$this->load->view('interior-design');		
		$this->load->view('common/footer');
	}
}